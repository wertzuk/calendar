<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @inertiaHead
    <title>Turnierkalender</title>
  </head>
  <body class="bg-white dark:bg-gray-900 min-h-screen ">
    @inertia
  </body>
</html>