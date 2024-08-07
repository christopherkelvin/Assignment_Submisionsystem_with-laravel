<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Upload Course</title>
</head>

<body>
    <x-navbar />
<x-success-message/>

    <div class="content">
        <div id="courseForm" class="courseForm">
            <div class=" bg-slate-500 ">
                <form method="POST" action="/teacher/assignment/upload" enctype="multipart/form-data">
                    <h2>Upload Assignment{{ $id }} </h2>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    @csrf
                    <label for="assignmentHeading">Assignment Title: </label>
                    <input type="text" id="assignmentHeading" name="assignmentHeading" required>
                    <input type="text" class="hide" name="Course_id" value="{{ $id }}">
                    <label for="Assignment">Assignment: </label>
                    <input type="file" id="Assignment" name="Assignment" required>
                    <label for="submisionDate">Submision Date: </label>
                    <input type="date" name="submisionDate" id="" required>

                    <label for="submisionTime">Submision Time: </label>
                    <input type="time" name="submisionTime" id="" required>

                    <input type="submit" class="butto" value="Register">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
