<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration Form</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <x-navbar />
    <div class="content">
        <div id="courseForm" class="form">
            <div class=" bg-slate-500 ">
                <form id="courseRegistrationForm" method="POST" action="/teacher/addcourse">
                    <h2>Register Course</h2>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                    @csrf
                    <label for="courseName">Course Name:</label>
                    <input type="text" class=" rounded w-98" id="courseName" name="courseName" required>
                    <label for="course_code">Course Code:</label>
                    <input type="text" id="courseCode" name="course_code" required>
                    {{-- <label for="courseTeacher">Course Teacher:</label>
                    <input type="text" id="courseTeacher" name="courseTeacher" required> --}}
                    <label for="yearTaught">Year Taught:</label>
                    <input type="number" id="yearTaught" name="yearTaught" required>
                    <label for="programName">Program Name:</label>
                    <input type="text" id="programName" name="programName" required>
                    <input type="submit" class="butto" value="Register">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
