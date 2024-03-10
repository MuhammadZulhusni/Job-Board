<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Meta tags for character set and viewport -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/jpeg" href="https://www.svgrepo.com/show/228128/job-search.svg" />

  <!-- Page title -->
  <title>Job Board</title>

  <!-- Load CSS and JavaScript using Vite -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<!-- Background color -->
<body class="from-10% via-30% to-90% mx-auto mt-10 max-w-2xl bg-gradient-to-r from-purple-100 to-white via-sky-100 mx-auto mt-10 max-w-2xl text-slate-700">

  <!-- Navigation bar -->
<nav class="mb-8 flex justify-between items-center px-4 py-2 bg-gradient-to-r from-purple-200 to-white text-gray-800 shadow-md rounded-lg">
    <ul class="flex space-x-4">
      <!-- Home link -->
      <li>
        <a href="{{ route('jobs.index') }}" class="text-gray-800 hover:text-blue-700 font-semibold">Home</a>
      </li>
    </ul>

    <ul class="flex space-x-4">
      <!-- Conditional navigation links based on user authentication -->
      @auth
        <li>
          <a href="{{ route('my-job-applications.index') }}" class="text-gray-800 hover:text-blue-700 font-semibold">
            <span class="font-bold">{{ auth()->user()->name ?? 'Anonymous' }}</span><span class="hidden md:inline">: Applications</span>
          </a>
        </li>
        <li>
          <a href="{{ route('my-jobs.index') }}" class="text-gray-800 hover:text-blue-700 font-semibold">My Jobs</a>
        </li>
        <li>
          <!-- Logout form -->
          <form action="{{ route('auth.destroy') }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="text-gray-800 hover:text-blue-700 font-semibold">Logout</button>
          </form>
        </li>
      @else
        <li>
          <!-- Sign in link -->
          <a href="{{ route('auth.create') }}" class="text-gray-800 hover:text-blue-700 font-semibold">Sign in</a>
        </li>
      @endauth
    </ul>
  </nav>

  <!-- Display success message if session contains 'success' -->
  @if (session('success'))
    <div role="alert" class="my-8 rounded-md border-l-4 border-green-300 bg-green-100 p-4 text-green-700 opacity-75">
      <p class="font-bold">Success!</p>
      <p>{{ session('success') }}</p>
    </div>
  @endif

  <!-- Display error message if session contains 'error' -->
  @if (session('error'))
    <div role="alert" class="my-8 rounded-md border-l-4 border-red-300 bg-red-100 p-4 text-red-700 opacity-75">
      <p class="font-bold">Error!</p>
      <p>{{ session('error') }}</p>
    </div>
  @endif

  <!-- Render content passed between the opening and closing tags -->
  {{ $slot }}

</body>
</html>
