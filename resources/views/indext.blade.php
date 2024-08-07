<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ asset('css/sample.css') }}">

        <meta name="_token" content="{{ csrf_token() }}">
</head>

<body>
    <x-navbar />
    <x-success-message/>
     <header class="shadow">
      <div class="auto">
          <h1 class="">
              Dashboard : Assignment Upload System
            </h1>
            <a href="/teacher/addcourse" class="addCourseBtn" id="addCourseBtn">Add Course</a>
      </div>
    </header>
    <div class="content">
        <div class="" id="message"></div>
        <div class="c">
            @foreach ($courses as $course)
            <a href="/course/{{$course->id}}" class="courses">
                <h1>{{$course->Course_code}}</h1>
            </a>
            @endforeach
        </div>
        {{ $courses->links('vendor.pagination.custom') }}
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
