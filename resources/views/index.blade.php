<body>
    {{-- <x-success-message/> --}}
    <x-navbar />
<x-success-message/>

    <div class="content">
        <div class="c">
            @foreach ($courses as $course)
                <a href="/course/{{$course->id}} " class="courses">
                    <h1>{{ $course->Course_code }}</h1>
                </a>
            @endforeach
        </div>
    </div>
</body>

</html>
