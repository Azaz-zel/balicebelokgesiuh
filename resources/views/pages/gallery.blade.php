@extends('layouts.app')

@section('title', 'Gallery — Bali Cebelok Gesiuh')

@section('content')

    {{-- =========================================================
        PAGE HERO
    ========================================================== --}}
    <section class="bg-cream px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-4xl text-center">

            <p class="text-sm uppercase tracking-[0.3em] text-earth">
                Gallery
            </p>

            <h1 class="mt-5 text-5xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-6xl lg:text-7xl">
                Moments from
                <span class="font-normal italic">
                    our family.
                </span>
            </h1>

            <p class="mx-auto mt-7 max-w-2xl text-base leading-8 text-earth sm:text-lg">
                A collection of moments, people, and simple experiences
                shared at Bali Cebelok Gesiuh.
            </p>

        </div>

    </section>

    {{-- =========================================================
        GALLERY INTRO
    ========================================================== --}}
    <section class="bg-warm-white px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[1fr_2fr] lg:items-center">

            {{-- Label --}}
            <div>
                <p class="text-sm uppercase tracking-[0.25em] text-earth">
                    A Glimpse Into Our World
                </p>
            </div>


            {{-- Content --}}
            <div>

                <h2 class="text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                    Simple moments,
                    <span class="font-normal italic">
                        shared with others.
                    </span>
                </h2>

                <p class="mt-6 max-w-2xl text-base leading-8 text-earth">
                    From making coconut oil with our family to sharing a meal,
                    exploring the surrounding nature, and welcoming guests from
                    around the world — these are some of the moments that make
                    Bali Cebelok Gesiuh what it is.
                </p>

            </div>

        </div>

    </section>


    {{-- =========================================================
        GALLERY
    ========================================================== --}}
    <section class="bg-warm-white px-6 pb-24 lg:px-10 lg:pb-32">

        <div class="mx-auto max-w-7xl">

    {{-- =====================================================
        FEATURED GALLERY
    ====================================================== --}}
    <div class="grid gap-5 lg:grid-cols-2">

        {{-- Featured Video --}}
        <div class="group relative aspect-[4/5] overflow-hidden rounded-2xl bg-[#D8D0C2]">

            <video
                class="h-full w-full object-cover"
                autoplay
                muted
                loop
                playsinline
                controls
            >
                <source
                    src="{{ asset('videos/featured-experience1.mp4') }}"
                    type="video/mp4"
                >
            </video>

            <div class="pointer-events-none absolute inset-x-0 bottom-0 bg-gradient-to-t from-dark-earth/70 to-transparent p-7 pt-20">

                <p class="text-xs uppercase tracking-[0.2em] text-white/60">
                    The Process
                </p>

                <h2 class="mt-2 text-2xl font-medium text-white">
                    From Coconut to Oil
                </h2>

            </div>

        </div>


        {{-- Right Column --}}
        <div class="grid gap-5">

            {{-- Preparing Coconut --}}
            <div class="group relative aspect-[16/9] overflow-hidden rounded-2xl bg-[#D8D0C2]">

                <img
                    src="{{ asset('images/experience/01-open-coconut.jpg') }}"
                    alt="Preparing coconut at Bali Cebelok Gesiuh"
                    class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                >

                <div class="pointer-events-none absolute inset-x-0 bottom-0 bg-gradient-to-t from-dark-earth/70 to-transparent p-6 pt-16">

                    <p class="text-xs uppercase tracking-[0.2em] text-white/60">
                        The Process
                    </p>

                    <h2 class="mt-2 text-xl font-medium text-white">
                        Preparing the Coconut
                    </h2>

                </div>

            </div>


            {{-- Two Square Images --}}
            <div class="grid grid-cols-2 gap-5">

                {{-- Grating Coconut --}}
                <div class="group relative aspect-square overflow-hidden rounded-2xl bg-[#D8D0C2]">

                    <img
                        src="{{ asset('images/experience/02-grate-coconut.jpg') }}"
                        alt="Grating coconut at Bali Cebelok Gesiuh"
                        class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                    >

                    <div class="pointer-events-none absolute inset-x-0 bottom-0 bg-gradient-to-t from-dark-earth/70 to-transparent p-5 pt-14">

                        <p class="text-xs uppercase tracking-[0.2em] text-white/60">
                            The Process
                        </p>

                        <h2 class="mt-1 text-lg font-medium text-white">
                            Grating Coconut
                        </h2>

                    </div>

                </div>


                {{-- Making Coconut Milk --}}
                <div class="group relative aspect-square overflow-hidden rounded-2xl bg-[#D8D0C2]">

                    <img
                        src="{{ asset('images/experience/03-extract-coconut-milk.jpg') }}"
                        alt="Making coconut milk at Bali Cebelok Gesiuh"
                        class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                    >

                    <div class="pointer-events-none absolute inset-x-0 bottom-0 bg-gradient-to-t from-dark-earth/70 to-transparent p-5 pt-14">

                        <p class="text-xs uppercase tracking-[0.2em] text-white/60">
                            The Process
                        </p>

                        <h2 class="mt-1 text-lg font-medium text-white">
                            Making Coconut Milk
                        </h2>

                    </div>

                </div>

            </div>

        </div>

    </div>


            {{-- =====================================================
                PROCESS GALLERY
            ====================================================== --}}
            <div class="mt-5 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ([

                    [
                        'Cook the Coconut Milk',
                        '04-cook-coconut-milk.jpg'
                    ],

                    [
                        'Separate the Coconut Oil',
                        '05-separate-oil.jpg'
                    ],

                    [
                        'Final Heating',
                        '06-final-heating.jpg'
                    ],

                ] as $photo)

                    <div class="group relative aspect-[4/3] overflow-hidden rounded-2xl bg-[#D8D0C2]">

                        <img
                            src="{{ asset('images/experience/' . $photo[1]) }}"
                            alt="{{ $photo[0] }}"
                            class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                        >

                        <div class="pointer-events-none absolute inset-x-0 bottom-0 bg-gradient-to-t from-dark-earth/70 to-transparent p-6 pt-16">

                            <p class="text-xs uppercase tracking-[0.2em] text-white/60">
                                The Process
                            </p>

                            <h2 class="mt-2 text-lg font-medium text-white">
                                {{ $photo[0] }}
                            </h2>

                        </div>

                    </div>

                @endforeach

            </div>

            {{-- =====================================================
                COMPLETE EXPERIENCE VIDEO
            ====================================================== --}}
            <section class="mt-24">

                <div class="max-w-3xl">

                    <p class="text-sm uppercase tracking-[0.25em] text-earth">
                        The Complete Experience
                    </p>

                    <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                        From coconut
                        <span class="font-normal italic">
                            to oil.
                        </span>
                    </h2>

                    <p class="mt-6 max-w-2xl text-base leading-8 text-earth">
                        Follow the traditional process from beginning to end,
                        and see how fresh coconuts are transformed into
                        homemade coconut oil.
                    </p>

                </div>


                <div class="mt-12 overflow-hidden rounded-2xl bg-[#D8D0C2]">

                    <video
                        class="aspect-video w-full object-cover"
                        controls
                        preload="metadata"
                        playsinline
                    >
                        <source
                            src="{{ asset('videos/full-process.mp4') }}"
                            type="video/mp4"
                        >

                        Your browser does not support the video tag.
                    </video>

                </div>

            </section>


            {{-- =====================================================
                LIFE AT CEBELOK
            ====================================================== --}}
            <div class="mt-24">

                <div class="max-w-3xl">

                    <p class="text-sm uppercase tracking-[0.25em] text-earth">
                        Life at Cebelok
                    </p>

                    <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                        More than an experience,
                        <span class="font-normal italic">
                            it's a shared moment.
                        </span>
                    </h2>

                </div>


                <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                    @foreach ([
                        [
                            'Bumbum & Sri',
                            'bumbum-srii.jpg'
                        ],
                        [
                            'The Family',
                            'family-with-guests.jpg'
                        ],
                        [
                            'Our Guests',
                            'guests-experience.jpg'
                        ],
                        [
                            'The Jungle',
                            'jungle-view.jpg'
                        ],
                        [
                            'Traditional Kitchen',
                            'traditional-kitchen.jpg'
                        ],
                        [
                            'The Place',
                            'the-place.jpg'
                        ],
                    ] as $photo)

                        <div class="group relative aspect-[4/3] overflow-hidden rounded-2xl bg-[#D8D0C2]">

                            <img
                                src="{{ asset('images/gallery/' . $photo[1]) }}"
                                alt="{{ $photo[0] }} at Bali Cebelok Gesiuh"
                                class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                            >

                            <div class="pointer-events-none absolute inset-x-0 bottom-0 bg-gradient-to-t from-dark-earth/70 to-transparent p-6 pt-16">

                                <p class="text-xs uppercase tracking-[0.2em] text-white/60">
                                    Life at Cebelok
                                </p>

                                <h2 class="mt-2 text-lg font-medium text-white">
                                    {{ $photo[0] }}
                                </h2>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        <div class="mt-24 grid gap-5 lg:grid-cols-2">

        {{-- Featured Video --}}
        <div class="group relative aspect-[4/5] overflow-hidden rounded-2xl bg-[#D8D0C2]">

            <video
                class="h-full w-full object-cover"
                autoplay
                muted
                loop
                playsinline
                controls
            >
                <source
                    src="{{ asset('videos/featured-experience.mp4') }}"
                    type="video/mp4"
                >
            </video>

        </div>


            {{-- Right Column --}}
            <div class="grid gap-5">

                {{-- Preparing Coconut --}}
                <div class="group relative aspect-[16/9] overflow-hidden rounded-2xl bg-[#D8D0C2]">

                    <img
                        src="{{ asset('images/gallery/ppl1.jpg') }}"
                        alt="Preparing coconut at Bali Cebelok Gesiuh"
                        class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                    >

                </div>


                {{-- Two Square Images --}}
                <div class="grid grid-cols-2 gap-5">

                    {{-- Grating Coconut --}}
                    <div class="group relative aspect-square overflow-hidden rounded-2xl bg-[#D8D0C2]">

                        <img
                            src="{{ asset('images/experience/oils.jpg') }}"
                            alt="Grating coconut at Bali Cebelok Gesiuh"
                            class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                        >

                    </div>


                    {{-- Making Coconut Milk --}}
                    <div class="group relative aspect-square overflow-hidden rounded-2xl bg-[#D8D0C2]">

                        <img
                            src="{{ asset('images/gallery/ppl2.jpg') }}"
                            alt="Making coconut milk at Bali Cebelok Gesiuh"
                            class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                        >

                    </div>

                </div>

            </div>

        </div>
    </section>

    


    {{-- =========================================================
        EXPERIENCE MOMENTS
    ========================================================== --}}
    <section class="bg-cream px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto grid max-w-7xl gap-14 lg:grid-cols-2 lg:items-center">

            <div>

                <p class="text-sm uppercase tracking-[0.25em] text-earth">
                    More Than A Class
                </p>

                <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                    Come for the process.
                    <span class="font-normal italic">
                        Stay for the feeling.
                    </span>
                </h2>

            </div>

            <div>

                <p class="text-base leading-8 text-earth">
                    Surrounded by greenery and the quiet atmosphere of
                    our traditional kitchen, the experience is designed
                    to feel personal and unhurried.
                </p>

                <p class="mt-5 text-base leading-8 text-earth">
                    Take your time, learn something new, enjoy a meal,
                    and spend a few hours experiencing a tradition
                    that has been part of our family for generations.
                </p>

            </div>

        </div>

    </section>


    {{-- =========================================================
        CTA
    ========================================================= --}}
    <section class="bg-cream px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-7xl">

            <div class="rounded-[2.5rem] bg-dark-earth px-8 py-16 text-center text-white sm:px-12 lg:px-20 lg:py-20">

                <div class="mx-auto max-w-3xl">

                    <p class="text-sm uppercase tracking-[0.25em] text-white/50">
                        Experience It Yourself
                    </p>

                    <h2 class="mt-4 text-4xl font-semibold leading-tight sm:text-5xl">
                        These moments are better
                        <span class="font-normal italic">
                            experienced in person.
                        </span>
                    </h2>

                    <p class="mx-auto mt-6 max-w-xl text-base leading-7 text-white/60">
                        Join us and become part of the tradition.
                    </p>

                    <div class="mt-9">

                        <a
                            href="{{ route('book') }}"
                            class="inline-flex rounded-full bg-leaf px-8 py-4 text-sm font-medium text-white transition hover:opacity-90"
                        >
                            Book Your Experience
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection