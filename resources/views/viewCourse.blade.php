<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    <title>View</title>
</head>
@vite('resources/css/app.css')

<body>
    <x-navbar />
    <div class="backd">
        <a class="back" href="/teacher/course">
            <svg class="back" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
            Back
        </a>
    </div>
    <div class=" size bg-slate-100 mt-14 shadow-gray-800 shadow-md ml-auto mr-auto  ">
        <div class=" pt">

            <p class=" uppercase text-2xl font-serif"><label for="">Registration Number:</label> </p>
            <p class=" uppercase text-2xl font-serif"><label for="">Email: </label> </p>
            <p class=" uppercase text-2xl font-serif"><label for="">Role: </label> </p>
            <p class=" uppercase text-2xl font-serif"><label for="">Gender: </label></p>
        </div>
        <a class="butto" href="/update/{{ auth()->user()->id }}/edit">UPDATE</a>
    </div>
    </div>
</body>

</html>
