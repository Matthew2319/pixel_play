<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>What's New</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
         <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

        <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

        <link rel="stylesheet" href="assets/css/owl-carousel.css">

        <link rel="stylesheet" href="assets/css/lightbox.css">
    </head>

    <body class="antialiased">
    <div id="loader-wrapper">
            <div id="loader"></div>
        </div>

        <div class="content-bg"></div>
        <div class="bg-overlay"></div>

    <div class="site-top">
            <div class="site-header clearfix">
                <div class="container">
                    <a href="#" class="site-brand pull-left"><strong>Pixel</strong> Plaza</a>
                    
                    @if (Route::has('login'))
                    <div class="pull-right">
                    @auth
                    <a href="{{ route('home') }}" class="site-brand text-white-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home |</a>

                    <a href="{{ route('browse') }}" class="site-brand text-white-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Browse |</a>

                    <a href="{{ route('trending') }}" class="site-brand text-white-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">What's Trending |</a>

                    <a href="{{ route('newer') }}" class="site-brand text-white-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">What's New |</a>

                    <a href="{{ route('about') }}" class="site-brand text-white-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">About |</a>

                    <a href="{{ url('/dashboard') }}" class="site-brand text-white-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">My Dashboard |</a>

                    @else
                    <a href="{{ route('home') }}" class="site-brand text-white-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home |</a>

                    <a href="{{ route('browse') }}" class="site-brand text-white-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Browse |</a>

                    <a href="{{ route('trending') }}" class="site-brand text-white-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">What's Trending |</a>

                    <a href="{{ route('newer') }}" class="site-brand text-white-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">What's New |</a>

                    <a href="{{ route('about') }}" class="site-brand text-white-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">About |</a>

                        <a href="{{ route('login') }}" class="site-brand text-white-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in |</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="site-brand text-white-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                    </div>
            @endif    
           
                </div>
            </div>



            <div class="site-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2>What's New</h2>
                            <p>See what's new! be the first to check out new posts from community members!</p>
                        </div>
                    </div>
                </div>
            </div> <!-- .site-banner -->
        </div>
    </div>

        

    <div class="main-posts">
            <div class="container">
                <div class="row">
                    <div class="blog-masonry masonry-true">
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="images/phone bg 1.png" alt="">
                                <div class="title-over">
                                    <h4><a href="#">Gentle Cabin</a></h4>
                                </div>
                                <div class="post-hover text-center">
                                    <div class="inside">
                                        <i class="fa fa-plus"></i>
                                        <span class="date">25 Jan 2084</span>
                                        <h4><a href="#">Gentle Cabin</a></h4>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.post-masonry -->
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="images/phone bg 2.png" alt="">
                                <div class="title-over">
                                    <h4><a href="#">Sakura edge</a></h4>
                                </div>
                                <div class="post-hover text-center">
                                    <div class="inside">
                                        <i class="fa fa-plus"></i>
                                        <span class="date">24 Jan 2084</span>
                                        <h4><a href="#">Sakura edge</a></h4>
                                        <p>Donec venenatis libero sapien, eu condimentum lacus</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.post-masonry -->
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="images/phone bg 3.png" alt="">
                                <div class="title-over">
                                    <h4><a href="#">That Wifi</a></h4>
                                </div>
                                <div class="post-hover text-center">
                                    <div class="inside">
                                        <i class="fa fa-plus"></i>
                                        <span class="date">23 Jan 2084</span>
                                        <h4><a href="#">That Wifi</a></h4>
                                        <p>Sed vitae lacus eget ipsum scelerisque condimentum</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.post-masonry -->
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="images/phone bg 5.png" alt="">
                                <div class="title-over">
                                    <h4><a href="#">City in midnight</a></h4>
                                </div>
                                <div class="post-hover text-center">
                                    <div class="inside">
                                        <i class="fa fa-plus"></i>
                                        <span class="date">22 Jan 2084</span>
                                        <h4><a href="#">City in midnight</a></h4>
                                        <p>Praesent pharetra blandit ex sed imperdiet</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.post-masonry -->
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="images/phone bg 7.png" alt="">
                                <div class="title-over">
                                    <h4><a href="#">Sunset in City</a></h4>
                                </div>
                                <div class="post-hover text-center">
                                    <div class="inside">
                                        <i class="fa fa-plus"></i>
                                        <span class="date">21 Jan 2084</span>
                                        <h4><a href="#">Sunset in City</a></h4>
                                        <p>Vestibulum faucibus lacus ac risus efficitur</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.post-masonry -->
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="images/phone bg 8.png" alt="">
                                <div class="title-over">
                                    <h4><a href="#">Shikonoko gazing</a></h4>
                                </div>
                                <div class="post-hover text-center">
                                    <div class="inside">
                                        <i class="fa fa-plus"></i>
                                        <span class="date">20 Jan 2084</span>
                                        <h4><a href="#">Shikonoko gazing</a></h4>
                                        <p>Morbi placerat pellentesque tortor, sed auctor dolor</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.post-masonry -->
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="images/phone bg 9.png" alt="">
                                <div class="title-over">
                                    <h4><a href="#">She's looking back</a></h4>
                                </div>
                                <div class="post-hover text-center">
                                    <div class="inside">
                                        <i class="fa fa-plus"></i>
                                        <span class="date">15 Jan 2084</span>
                                        <h4><a href="#">She's looking back</a></h4>
                                        <p>Phasellus eu sapien sagittis, sodales neque ac</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.post-masonry -->
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="images/phonebg4.png" alt="">
                                <div class="title-over">
                                    <h4><a href="#">Sakura Bench</a></h4>
                                </div>
                                <div class="post-hover text-center">
                                    <div class="inside">
                                        <i class="fa fa-plus"></i>
                                        <span class="date">14 Jan 2084</span>
                                        <h4><a href="#">Sakura Bench</a></h4>
                                        <p>In aliquet et tellus in iaculis. Ut fermentum quis tellus</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.post-masonry -->
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="images/phonebg6.png" alt="">
                                <div class="title-over">
                                    <h4><a href="#">Breezing suburbs</a></h4>
                                </div>
                                <div class="post-hover text-center">
                                    <div class="inside">
                                        <i class="fa fa-plus"></i>
                                        <span class="date">13 Jan 2084</span>
                                        <h4><a href="#">Breezing suburbs</a></h4>
                                        <p>Fusce ullamcorper diam vel arcu scelerisque</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.post-masonry -->
                    </div>
                </div>
            </div>
        </div>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="copyright-text">Copyright &copy; 2024 Pixel Plaza
                        | Photos by their respective artists.</p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/min/plugins.min.js"></script>
        <script src="js/min/main.min.js"></script>


        <!-- Preloader -->
        <script type="text/javascript">
            //<![CDATA[
            $(window).load(function() { // makes sure the whole site is loaded
                $('#loader').fadeOut(); // will first fade out the loading animation
                    $('#loader-wrapper').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
                $('body').delay(350).css({'overflow-y':'visible'});
            })
            //]]>
        </script>
    </body>
</html>
