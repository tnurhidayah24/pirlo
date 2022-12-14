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
    <section class=" w-full relative">
        <div class=" relative mx-auto">
            <div class=" mb-28">
                <div class=" max-w-5xl mx-auto px-2">
                    <div class="owl-carousel part owl-theme">
                        <div class=" w-full h-auto clear-both float-left relative">
                            <i class='bx bx-brain absolute left-0 top-1 w-12 h-12 text-5xl' ></i>
                            <div class=" pl-16">
                                <h3 class=" m-0 text-lg font-semibold mb-4">Creative</h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus qui excepturi, sit vel nulla nesciunt in</p>
                            </div>
                        </div>
                        <div> 
                            <i class='bx bxl-graphql absolute left-0 top-1 w-12 h-12 text-5xl' ></i>
                            <div class=" pl-16">
                                <h3 class=" m-0 text-lg font-semibold mb-4">Ball Control</h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus qui excepturi, sit vel nulla nesciunt in</p>
                            </div>
                        </div>
                        <div> 
                            <i class='bx bx-shape-triangle  absolute left-0 top-1 w-12 h-12 text-5xl'></i>
                            <div class=" pl-16">
                                <h3 class=" m-0 text-lg font-semibold mb-4">The Ball Pass</h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus qui excepturi, sit vel nulla nesciunt in</p>
                            </div>
                        </div>
                        <div> 
                            <i class='bx bx-cross absolute left-0 top-1 w-12 h-12 text-5xl' ></i>
                            <div class=" pl-16">
                                <h3 class=" m-0 text-lg font-semibold mb-4">Master Free Kick</h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus qui excepturi, sit vel nulla nesciunt in</p>
                            </div>
                        </div>
                        <div> 
                            <i class='bx bx-shape-circle absolute left-0 top-1 w-12 h-12 text-5xl'></i>
                            <div class=" pl-16">
                                <h3 class=" m-0 text-lg font-semibold mb-4">Genius Tactic</h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus qui excepturi, sit vel nulla nesciunt in</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" w-full relative">
        <div class=" pt-12">
            <div class="max-w-5xl mx-auto px-2">
                <div class=" w-full h-auto clear-both float-left">
                    <div id="title" class=" w-full h-auto clear-both flex items-center justify-between">
                        <div id="title-holder" class=" float-left w-full pb-9 mb-7">
                            <h3 class=" uppercase font-black text-4xl relative m-0 p-0">
                                Get In Touch
                                <span class=" text-transparent absolute -left-1 text-7xl md:text-9xl font-black opacity-10 leading-none overflow-hidden whitespace-nowrap -bottom-8 -z-10" style="-webkit-text-stroke: 1px #000;">Contact</span>
                            </h3>
                        </div>
                    </div>
                    <div id="desc" class=" md:w-2/4 pt-8 float-left">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo eius excepturi, et, alias perspiciatis repudiandae incidunt aliquid quam vitae ex nobis illo error natus sequi quasi porro beatae? Ratione, dolorum?
                        </p>
                    </div>
                    <div id="contact" class=" w-full h-auto clear-both flex pt-10 pb-5 flex-col md:flex-row">
                        <div id="left" class=" md:w-1/2 md:pr-6">
                            <form action="">
                                <input type="text" placeholder="Name" class="input input-bordered w-full mb-8" />
                                <input type="email" placeholder="Email" class="input input-bordered w-full mb-8" />
                                <textarea class="textarea textarea-bordered w-full mb-8" placeholder="Message"></textarea>
                                <input type="submit" value="Send Message" class="btn" />
                            </form>
                        </div>
                        <div id="right" class=" md:w-1/2 md:pl-6 top-2 md:-top-20 relative mt-2">
                            <div class=" w-full">
                                <iframe style="max-width: 100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d214441.27870736778!2d7.395007994050551!3d45.07473079335453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47886c17f7814e37%3A0xe3be8084a88d8da5!2sStadion%20Juventus!5e0!3m2!1sid!2sid!4v1671044290276!5m2!1sid!2sid" width="800" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('inc.footer')
</body>
</html>