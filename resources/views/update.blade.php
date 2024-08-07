<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<x-success-message/>
<x-navbar />
<div class="content">
    <div id="courseForm" class="form">
        <div class=" bg-slate-500 ">
            <form id="courseRegistrationForm" method="POST" action="">
                @csrf
                @method('PUT')
                <h2>Update Details</h2>
                @csrf
                <label for="name">Name: </label>
                <input type="text" class=" rounded w-98" id="name" name="name" value="{{ $user->name }}" required>
                <label for="registration">Registration Number: </label>
                <input type="text" id="registration" name="registration" value="{{ $user->registration }}" required>
                <label for="email">Email: </label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required>
                <input type="submit" class="butto" value="Update">
            </form>
        </div>
    </div>
</div>
