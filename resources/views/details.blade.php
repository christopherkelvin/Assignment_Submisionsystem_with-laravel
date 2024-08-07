<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Details page</title>
    <link rel="stylesheet" href="{{ asset('css/details.css') }}" />
      @vite(['resources/css/app.css'])
  </head>
  <body>
    <x-navbar/>
    <div class=" size bg-slate-100 mt-14 shadow-gray-800 shadow-md ml-auto mr-auto  ">
        <div class="">
          <img src="{{asset(auth()->user()->profile_photo)}}" class=" user" alt="">
          <p class="center uppercase text-2xl font-serif">{{auth()->user()->name}}</p>
        </div>
          <div class=" pt">

            <p class=" uppercase text-2xl font-serif"><label for="">Registration Number: </label>{{auth()->user()->registration}}</p>
            <p class=" uppercase text-2xl font-serif"><label for="">Email: </label> {{auth()->user()->email}}</p>
            <p class=" uppercase text-2xl font-serif"><label for="">Role: </label> {{auth()->user()->role}}</p>
            <p class=" uppercase text-2xl font-serif"><label for="">Gender: </label>{{auth()->user()->Gender}}</p>
          </div>
        <a class="butto" href="/update/{{ auth()->user()->id }}/edit">UPDATE</a>
    </div>
</body>
</html>
