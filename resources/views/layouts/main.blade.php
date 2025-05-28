<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | GPdI House of Worship</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body class="d-flex flex-column min-vh-100">

   @include('partials.navbar')
<main class="flex-grow-1">
    <div class="container mt-4">
        @yield('container')
    </div>
</main>
    @include('partials.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" ></script>
  
</body>
  
</html>
