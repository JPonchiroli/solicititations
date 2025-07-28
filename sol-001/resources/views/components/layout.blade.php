<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Client Registration</title>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">


         @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
      <header class="flex justify-center w-screen ">
        <nav class="m-8 border-solid border-blue-900 border-1 rounded p-3">
            <a href="#">Home > Clients</a>
            <a class="hover:!text-blue-600" href="{{ route('registerClient') }}"> > Registration</a>
        </nav>
      </header>

      {{ $slot }}
    </body>
</html>
