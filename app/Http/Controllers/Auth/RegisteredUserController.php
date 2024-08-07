<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use PhpParser\Node\Stmt\Else_;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'registration'=>['required','max:255','unique:Users,registration'],
            'name' => ['required', 'string','min:3', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

        ]);
        $photo= $request->file('profile_photo');
        // dd($photo->getClientOriginalExtension());
        $profile_Name= $request->name.time().'.'.$photo->getClientOriginalExtension();
        $request->profile_photo->move(public_path('profile_photos'),$profile_Name);
        $user = User::create([
            'registration'=>$request->registration,
            'name' => $request->name,
            'email' => $request->email,
            'Gender'=>$request->Gender,
            'role' => $request->role,
            'password' => Hash::make($request->password),
            'profile_photo' => 'profile_photos/' . $profile_Name
        ]);

        event(new Registered($user));

        Auth::login($user);
        if($request->role == 'teacher'){
            return redirect('/teacher/');

        }
        else{
            return redirect(RouteServiceProvider::HOME);
        }
    }
}
