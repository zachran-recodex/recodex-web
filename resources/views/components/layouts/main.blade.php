<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark" xmlns:flux="http://www.w3.org/1999/html">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-background">

        <header class="relative h-screen overflow-hidden bg-text pt-8 rounded-b-[200px]">
            <div class="container mx-auto h-full relative">
                <nav class="rounded-full shadow-[0px_9px_91px_18px_rgba(134,_195,_50,_1)] bg-background px-4 sm:px-6 lg:px-8 z-50">
                    <div class="flex items-center h-16">
                        <flux:navbar.item :href="route('home')" :current="request()->routeIs('home')" wire:navigate>Tentang Kami</flux:navbar.item>
                        <flux:navbar.item href="#">Layanan</flux:navbar.item>

                        <flux:spacer />

                        <a href="{{ route('home') }}" class="flex items-center space-x-2" wire:navigate>
                            <img class="size-12" src="{{ asset('images/small-logo.png') }}" alt="logo">
                            <div class="ms-1 grid flex-1 text-start text-xl">
                                <span class="text-primary leading-none font-semibold">Recodex ID</span>
                            </div>
                        </a>

                        <flux:spacer />

                        <flux:navbar.item href="#">Portfolio</flux:navbar.item>
                        <flux:navbar.item href="#">Konsultasi</flux:navbar.item>
                    </div>
                </nav>
                <div class="mx-auto max-w-7xl pt-20  text-background z-50">
                    <h1 class="text-8xl font-bold text-center">Jasa Pembuatan Website Profesional</h1>
                    <div class="pt-20 flex justify-between items-center">
                        <div class="w-lg text-start">
                            <p class="mb-6 text-lg font-medium">Recodex ID adalah perusahaan jasa pembuatan website profesional yang didedikasikan untuk membantu bisnis dari berbagai skala meraih potensi maksimal mereka di dunia digital. Didirikan dengan semangat untuk menggabungkan teknologi mutakhir dan desain kreatif, kami hadir sebagai mitra digital terpercaya bagi klien yang menginginkan kehadiran online yang kuat dan efektif.</p>
                            <button class="bg-primary text-text px-4 py-3 rounded-full w-[230px]">Konsultasi Sekarang</button>
                        </div>
                        <div class="text-end">
                            <div class="flex justify-end gap-2 mb-4">
                                <svg class="feather feather-star" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg class="feather feather-star" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg class="feather feather-star" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg class="feather feather-star" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg class="feather feather-star" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            </div>
                            <p class="text-5xl font-semibold mb-2">10 Tahun</p>
                            <p class="text-lg">Pengalaman</p>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 z-10">
                    <div class="flex justify-center items-center">
                        <img class="w-[400px]" src="{{ asset('images/woman.png') }}" alt="woman">
                    </div>
                </div>
            </div>
            <div class="absolute bottom-10 left-0 right-0 h-20 z-50">
                <div class="flex justify-center items-center space-x-8">
                    <button class="bg-primary px-4 py-3 rounded-full w-[180px]">Layanan</button>
                    <button class="bg-primary px-4 py-3 rounded-full w-[180px]">Portfolio</button>
                </div>
            </div>
        </header>

        {{ $slot }}

        @fluxScripts
    </body>
</html>
