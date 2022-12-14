<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Andrea Pirlo</title>
    @include('inc.assets')
</head>
<body>
    @include('inc.navbar')
    <section class="hero min-h-screen" style="justify-items:unset; background-image: url({{ asset('assets/img/hello-pirlo.jpg') }});">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content lg:justify-start lg:text-left lg:pl-72">
            <div class=" max-w-md">
            <h1 class="mb-5 text-5xl font-bold">Andrea Pirlo</h1>
            <p class="mb-5">I'm Coach</p>
            <a href=""><i class='bx bxl-twitter mx-1'></i></a>
            <a href=""><i class='bx bxl-facebook mx-1' ></i></a>
            <a href=""><i class='bx bxl-instagram mx-1' ></i></a>
            <a href=""><i class='bx bxl-linkedin mx-1' ></i></a>
            <a href=""><i class='bx bxl-skype mx-1' ></i></a>
            </div>
        </div>
    </section>
    @include('inc.footer')
</body>
</html>