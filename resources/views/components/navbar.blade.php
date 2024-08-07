<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <title>Home Page</title>
  </head>
  <header>
    <nav class="nav">
      <div class="links">
        <img src="{{ asset('images/assignment logo.webp') }}" class="logo" alt="" />
        <a href="/">Home</a>
        <a href="/teacher/course">Courses</a>
        <a href="/details">Details</a>
        <a href="/logout">Logout</a>

      </div>
      <img class="img" src="{{ Auth::user()->profile_photo}}" alt="" />
    </nav>
  </header>
  <body>
