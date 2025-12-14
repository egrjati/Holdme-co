<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Holdme.co</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{--
            <style>
            * {
            border: 1px solid red;
            }
            </style>
        --}}
    </head>
    <body class="min-h-dvh overflow-x-hidden bg-white text-slate-900">
        <!-- Navbar -->
        <nav class="sticky top-0 z-50 bg-white rounded-bl-3xl rounded-br-3xl">
            <div class="w-full h-8 flex items-center justify-center text-white bg-[#39523f]">
                <p class="text-sm font-medium">Free Shipping on orders Over Rp.200.000. Easy Returns.</p>
            </div>

            <div class="w-full h-16 flex items-center relative px-6 rounded-bl-3xl rounded-br-3xl shadow-md">
                <!-- KIRI -->
                <a href="#" class="text-3xl font-bold">Holdme.co</a>

                <!-- TENGAH -->
                <div class="absolute left-1/2 -translate-x-1/2">
                    <ul class="hidden md:flex items-center gap-6">
                        <li><a href="#" class="text-sm font-medium hover:text-slate-600">Product</a></li>
                        <li><a href="#" class="text-sm font-medium hover:text-slate-600">Accessoris</a></li>
                        <li><a href="#" class="text-sm font-medium hover:text-slate-600">Custom</a></li>
                        <li><a href="#" class="text-sm font-medium hover:text-slate-600">Promo</a></li>
                    </ul>
                </div>

                <!-- KANAN -->
                <div class="ml-auto flex items-center gap-6">
                    <img src="/images/icons/cari.png" class="w-7 h-7" />
                    <img src="/images/icons/fav.png" class="w-5 h-5" />
                    <img src="/images/icons/tas.png" class="w-7 h-8" />
                </div>
            </div>
        </nav>

        <main class="">
            <header class="bg-[#D9D9D9] h-96 -mt-5"></header>

            {{-- kelebihan --}}
            <section class="mb-24 mt-14">
                <div class="flex justify-center">
                    <div class="flex flex-col md:flex-row justify-evenly gap-10 md:gap-20 w-full px-6">
                        <!-- Delivery -->
                        <div class="flex gap-4">
                            <img src="{{ asset('images/icons/delivery.png') }}" class="w-16 h-16" />
                            <div>
                                <h2 class="text-md font-semibold mb-1">Fast Delivery</h2>
                                <p class="text-sm text-slate-600">
                                    Sign up for Holdme.co emails
                                    <span class="block">to get 10% off your first order!</span>
                                </p>
                            </div>
                        </div>

                        <!-- Safe Payment-->
                        <div class="flex gap-4">
                            <img src="{{ asset('images/icons/payment.png') }}" class="w-16" />
                            <div>
                                <h2 class="text-md font-semibold mb-1">Safe Payment</h2>
                                <p class="text-sm text-slate-600">
                                    Sign up for Holdme.co emails
                                    <span class="block">to get 10% off your first order!</span>
                                </p>
                            </div>
                        </div>

                        <!-- Customer service -->
                        <div class="flex gap-4">
                            <img src="{{ asset('images/icons/tag.png') }}" class="w-16 h-16" />
                            <div>
                                <h2 class="text-md font-semibold mb-1">Friendly Services</h2>
                                <p class="text-sm text-slate-600">
                                    Sign up for Holdme.co emails
                                    <span class="block">to get 10% off your first order!</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="w-full my-12">
                <div class="h-0.5 bg-gray-400 w-1/2 mb-2 shadow-xl"></div>
                <div class="h-0.5 bg-gray-400 w-1/2 ml-auto shadow-xl"></div>
            </div>

            <section class="mb-20">
                <article class="flex items-center gap-5 pr-2">
                    {{-- kotak konten --}}
                    <div class="relative w-1/2 h-80 bg-[#dfdfdf] rounded-tr-xl rounded-br-xl">
                        <!-- icon ts -->
                        <div
                            class="absolute -left-3 bg-[#39523f] text-white text-xs font-semibold px-3 py-1 rounded-md shadow-md flex items-center gap-1"
                        >
                            <img src="{{ asset('images/icons/fire.png') }}" alt="Top Sell" class="w-6" />
                            <span>Top Sell</span>
                        </div>
                    </div>
                    {{-- Text --}}
                    <div class="ml-5 w-1/2">
                        <h2 class="text-xl font-bold mb-2">Hidup Jokwi Hidup Gibran Hidup Semuanya</h2>
                        <p class="text-md text-slate-700">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat, augue vitae sodales
                            dignissim, nunc erat luctus mauris, non interdum lectus mi non sapien. Integer facilisis,
                            turpis at pulvinar bibendum, nisi justo rutrum nibh, eget varius neque lorem nec nisl.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
                            Vivamus blandit, arcu vitae tincidunt dignissim, turpis libero bibendum lorem, ut cursus est
                            arcu ac odio. Phasellus porttitor, elit ac semper varius, lorem ligula aliquet nisl, vitae
                            placerat lectus justo et urna.
                        </p>
                    </div>
                </article>
            </section>

            {{-- Product --}}
            <section class="mb-32">
                <h2
                    class="relative text-center text-2xl font-bold mb-2 after:content-[''] after:block after:mx-auto after:mt-2 after:h-1 after:w-24 after:bg-[#39523f] after:rounded"
                >
                    Our Product
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-10 px-6">
                    {{-- produk --}}
                    @for ($i = 0; $i < 20; $i++)
                        <div class="flex flex-col items-center">
                            <div class="w-40 h-40 bg-[#dfdfdf] rounded-lg mb-4"></div>
                            <h3 class="text-md font-semibold mb-1">Product Name {{ $i + 1 }}</h3>
                            <p class="text-sm text-slate-600">Rp. 100.000</p>
                        </div>
                    @endfor
                </div>
            </section>

            @include('partials.contact')
            @include('partials.footer')
        </main>
    </body>
</html>
