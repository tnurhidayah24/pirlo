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
    <section class=" w-full relative">
        <div class=" mx-0 my-40">
            <div class=" relative clear-both w-full min-w-0">
                <div class="container max-w-5xl mx-auto relative md:px-4">
                    <div class=" flex h-auto w-full clear-both items-center flex-col-reverse md:flex-row-reverse">
                        <div id="left" class=" w-full md:w-3/5 md:px-0 px-3">
                            <div id="title-holder" class=" float-left w-full border-b-slate-300 pb-9 mb-7 border-b">
                                <h3 class=" uppercase font-black text-2xl relative m-0 p-0">
                                    Andrea Pirlo 
                                    <span class=" text-transparent absolute -left-1 text-7xl md:text-9xl font-black opacity-10 leading-none overflow-hidden whitespace-nowrap -bottom-8 -z-10" style="-webkit-text-stroke: 1px #000;">About</span>
                                </h3>
                                <span class=" font-normal inline-block pt-3 italic">
                                    Professional Coach Football
                                </span>
                            </div>
                            <div id="desc" class=" w-full float-left mb-6">
                                <p class=" mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum at quaerat possimus eos consequuntur saepe asperiores beatae distinctio reprehenderit perferendis dicta illum optio, delectus quasi nam molestiae eligendi facilis obcaecati!</p>
                                <p class=" mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta perferendis maxime impedit nisi aspernatur modi, eveniet ratione laudantium culpa repellendus eos aperiam cum magnam. Fugiat obcaecati tempore consequatur facere necessitatibus?</p>
                            </div>
                            <div class=" text-left w-full h-auto">
                                <a role="button" class="btn">Contact</a>
                            </div>
                        </div>
                        <div id="right" class=" w-full md:w-2/5 md:pr-20 md:px-0 px-3 mb-20 md:mb-0">
                            <img src="{{ asset('assets/img/pirlo.jpg') }}" alt="" class=" min-w-0 md:rounded hover:grayscale">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('inc.footer')
</body>
</html>