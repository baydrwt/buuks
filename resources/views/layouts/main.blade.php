<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Google Fonts API --}}
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Abel&family=Josefin+Sans:wght@300&family=Lobster+Two:ital,wght@1,700&family=Merriweather:wght@700&display=swap" rel="stylesheet">

    {{-- External CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Buuks | {{ $title }}</title>
  </head>
  <body>
   
        <!-- Navbar -->
        @include('partials.navbar')

        <!-- Content -->
      <div class="content ms-auto mt-3 me-auto">
        @yield('content')
      </div>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- GSAP --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script>
      gsap.from(".navbar", { duration: 2, ease: "bounce.out", y: -500});
    </script>

    <script>
      AOS.init({
        once: true,
      });
    </script>

  </body>
</html>