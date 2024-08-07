<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home page</title>
    <link rel="stylesheet" href="{{ asset('css/new.css') }}">

    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
</head>
<x-navbar />
<x-success-message />
<div class="auto low">
    <a href="/teacher/assignment/upload?id={{ $courses->id }}" class="addCourseBtn" id="addCourseBtn">Upload
        Assignment</a>
</div>
<div class="content">

    @foreach ($Assignments as $assignment)
        @if ($assignment->Course_id == $courses->id)
            <div class="each">
                <div class="assignment">
                    <div class="left">
                        <div class="due">
                            <img src="{{ asset('images/clock.png') }}" alt="" />
                            <p>{{ $assignment->SubmisionTime }}</p>
                        </div>
                        <div class="time">
                            <p>Complete by : {{ $assignment->SubmisionDate }}</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="title">
                            <h1>{{ $assignment->Heading }}</h1>
                            @foreach ($Users as $user)
                                @if ($user->id == $assignment->User_id)
                                    <p>Uploaded by: Mr {{ $user->name }}</p>
                                @endif
                            @endforeach
                        </div>
                        <div>
                            {{-- <p>{{ $assignment->Assignment }}</p> --}}
                            <a href="/download?file={{$assignment->Assignment}}">
                                Download
                                <svg class="svg" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 242.7-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7 288 32zM64 352c-35.3 0-64 28.7-64 64l0 32c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-32c0-35.3-28.7-64-64-64l-101.5 0-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352 64 352zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z" />
                                </svg>

                            </a>
                        </div>
                        <div class="actions">
                            @if (Auth::user()->role == 'student')
                                <a href="#" class="button">Submit</a>
                            @endif
                            @if (Auth::user()->role == 'teacher')
                                <a href="#" class="button">Edit</a>
                                <a href="#" class="button">Delete</a>
                            @endif

                        </div>
                    </div>

                </div>
            @else
        @endif
    @endforeach
    @if ($Assignments->count())
        {{ $Assignments->links('pagination::custom') }}
    @endif

</div>
</body>

</html>
