@extends('layouts.app')

@section('title', 'Our Story — Bali Cebelok Gesiuh')

@section('content')

    {{-- =========================================================
        PAGE HERO
    ========================================================== --}}
    <section class="bg-cream px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-4xl text-center">

            <p class="text-sm uppercase tracking-[0.3em] text-earth">
                Our Story
            </p>

            <h1 class="mt-5 text-5xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-6xl lg:text-7xl">
                A tradition passed down,
                <span class="font-normal italic">
                    from generation to generation.
                </span>
            </h1>

            <p class="mx-auto mt-7 max-w-2xl text-base leading-8 text-earth sm:text-lg">
                Behind every bottle of coconut oil is a story of family,
                tradition, and knowledge inherited from our ancestors.
            </p>

        </div>

    </section>


    {{-- =========================================================
        CEbelok & GESIUH
    ========================================================== --}}
    <section class="bg-warm-white px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto grid max-w-7xl gap-16 lg:grid-cols-2 lg:items-center">

            {{-- Image Placeholder --}}
            <div class="aspect-[4/5] overflow-hidden rounded-2xl">

                <img
                    src="{{ asset('images/our-story/cebelok-gesiuh.jpg') }}"
                    alt="Bali Cebelok Gesiuh family sharing traditional coconut oil making"
                    class="h-full w-full object-cover"
                >

            </div>


            {{-- Story --}}
            <div>

                <p class="text-sm uppercase tracking-[0.25em] text-earth">
                    Cebelok & Gesiuh
                </p>

                <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                    The people behind
                    <span class="font-normal italic">
                        the tradition.
                    </span>
                </h2>

                <p class="mt-7 text-base leading-8 text-earth">
                    Cebelok and Gesiuh are the names of our ancestors,
                    who passed down the knowledge of making traditional
                    coconut oil to our family.
                </p>

                <p class="mt-5 text-base leading-8 text-earth">
                    They taught us a simple, traditional way of making
                    coconut oil — starting with the coconut itself and
                    allowing its natural qualities to become something
                    useful for everyday life.
                </p>

                <p class="mt-5 text-base leading-8 text-earth">
                    In honour of that heritage, we chose their names
                    for our experience: <strong>Bali Cebelok Gesiuh.</strong>
                </p>

            </div>

        </div>

    </section>

    {{-- =========================================================
        OUR HERITAGE
    ========================================================== --}}
    <section class="bg-cream px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-7xl">

            <div class="max-w-3xl">

                <p class="text-sm uppercase tracking-[0.25em] text-earth">
                    Our Heritage
                </p>

                <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                    More than coconut oil.
                    <span class="font-normal italic">
                        A tradition worth preserving.
                    </span>
                </h2>

            </div>


            <div class="mt-12 grid gap-10 lg:grid-cols-2 lg:gap-20">

                <div class="text-base leading-8 text-earth">

                    <p>
                        For our family, making coconut oil is not simply about
                        producing a useful product. It is about keeping alive
                        a way of doing things that has been passed down through
                        generations.
                    </p>

                    <p class="mt-5">
                        The process remains simple and traditional. Fresh
                        coconuts are prepared by hand, turned into coconut milk,
                        and slowly cooked until the oil naturally separates.
                    </p>

                </div>


                <div class="text-base leading-8 text-earth">

                    <p>
                        We believe that traditions become meaningful when they
                        are shared. That is why Bali Cebelok Gesiuh opens its
                        family kitchen to guests who want to learn, participate,
                        and experience this process for themselves.
                    </p>

                    <p class="mt-5">
                        What we share is more than a recipe. It is a small piece
                        of our family history, our culture, and the knowledge
                        entrusted to us by those who came before.
                    </p>

                </div>

            </div>


            {{-- Heritage Values --}}
            <div class="mt-16 grid gap-4 sm:grid-cols-3">

                <div class="rounded-full bg-warm-white px-6 py-5 text-center">
                    <p class="text-sm font-medium text-dark-earth">
                        Traditional
                    </p>
                </div>

                <div class="rounded-full bg-warm-white px-6 py-5 text-center">
                    <p class="text-sm font-medium text-dark-earth">
                        Natural
                    </p>
                </div>

                <div class="rounded-full bg-warm-white px-6 py-5 text-center">
                    <p class="text-sm font-medium text-dark-earth">
                        Family
                    </p>
                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        THE BEGINNING
    ========================================================== --}}
    <section class="bg-cream px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-7xl">

            <div class="max-w-3xl">

                <p class="text-sm uppercase tracking-[0.25em] text-earth">
                    Shared Since 2020
                </p>

                <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                    From a family tradition
                    <span class="font-normal italic">
                        to a shared experience.
                    </span>
                </h2>

                <p class="mt-7 text-base leading-8 text-earth">
                    For generations, the knowledge of making traditional coconut
                    oil has remained a part of our family. In 2020, we decided
                    to open our doors and share this tradition with visitors,
                    allowing them to learn, participate, and experience the
                    process together with our family.
                </p>

            </div>


            {{-- Timeline --}}
            <div class="mt-16 border-t border-earth/15">

                {{-- 2020 --}}
                <div class="grid gap-10 border-b border-earth/15 py-10 md:grid-cols-[160px_1fr]">

                    <p class="text-2xl font-medium text-dark-earth">
                        2020
                    </p>

                    <div>

                        <h3 class="text-xl font-medium text-dark-earth">
                            Sharing the tradition
                        </h3>

                        <p class="mt-3 max-w-2xl text-sm leading-7 text-earth">
                            Bali Cebelok Gesiuh opened its first coconut oil
                            making class, welcoming visitors into our traditional
                            family setting and inviting them to take part in
                            the process themselves.
                        </p>

                    </div>

                </div>


                {{-- Today --}}
                <div class="grid gap-10 py-10 md:grid-cols-[160px_1fr]">

                    <p class="text-2xl font-medium text-dark-earth">
                        Today
                    </p>

                    <div>

                        <h3 class="text-xl font-medium text-dark-earth">
                            Keeping the tradition alive
                        </h3>

                        <p class="mt-3 max-w-2xl text-sm leading-7 text-earth">
                            Today, the experience continues to be guided by our
                            family, sharing the knowledge, stories, and traditions
                            passed down from one generation to the next.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        THE FAMILY
    ========================================================== --}}
    <section class="bg-warm-white px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-7xl">

            <div class="max-w-2xl">

                <p class="text-sm uppercase tracking-[0.25em] text-earth">
                    The Family
                </p>

                <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                    Made together,
                    <span class="font-normal italic">
                        shared together.
                    </span>
                </h2>

                <p class="mt-6 text-base leading-7 text-earth">
                    At the heart of Bali Cebelok Gesiuh is a family who continues
                    to share this tradition with warmth, care, and a personal touch.
                </p>

            </div>


            {{-- Family Cards --}}
            <div class="mt-14 grid gap-6 lg:grid-cols-2">


                {{-- Bumbum & Sri --}}
                <div class="rounded-2xl bg-cream p-8 sm:p-10">

                    <div class="aspect-[4/3] overflow-hidden rounded-xl">

                        <img
                            src="{{ asset('images/our-story/bumbum-sri.jpg') }}"
                            alt="Bumbum and Sri of Bali Cebelok Gesiuh"
                            class="h-full w-full object-cover transition duration-700 hover:scale-105"
                        >

                    </div>

                    <p class="mt-7 text-sm uppercase tracking-[0.2em] text-earth">
                        Owner & Hosts
                    </p>

                    <h3 class="mt-2 text-2xl font-medium text-dark-earth">
                        I Made Bumbum & Sri
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-earth">
                        Bumbum is the owner of Bali Cebelok Gesiuh, while his
                        wife, Sri, helps welcome guests and guide them through
                        the experience. Together, they create the warm and
                        personal atmosphere that makes the class feel like
                        a visit to the family home.
                    </p>

                </div>


                {{-- The Family --}}
                <div class="rounded-2xl bg-cream p-8 sm:p-10">

                    <div class="aspect-[4/3] overflow-hidden rounded-xl">

                        <img
                            src="{{ asset('images/our-story/the-family.jpg') }}"
                            alt="The Bali Cebelok Gesiuh family welcoming guests"
                            class="h-full w-full object-cover transition duration-700 hover:scale-105"
                        >

                    </div>

                    <p class="mt-7 text-sm uppercase tracking-[0.2em] text-earth">
                        The Family
                    </p>

                    <h3 class="mt-2 text-2xl font-medium text-dark-earth">
                        Together
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-earth">
                        The experience is also supported by other members of the
                        family, each playing their own part in preparing the
                        coconut oil and welcoming guests. Together, they help
                        keep the tradition alive and share it with every guest
                        who visits.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        BELIEF / PHILOSOPHY
    ========================================================= --}}
    <section class="bg-cream px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-7xl">

            <div class="rounded-[2.5rem] bg-dark-earth px-8 py-16 text-white sm:px-12 lg:px-20 lg:py-20">

                <div class="mx-auto max-w-4xl text-center">

                    <p class="text-sm uppercase tracking-[0.3em] text-white/50">
                        Our Belief
                    </p>

                    <blockquote class="mt-7 text-3xl font-normal leading-relaxed sm:text-4xl lg:text-5xl">
                        “A tradition is not only something we inherit.
                        It is something we keep alive by sharing it.”
                    </blockquote>

                    <div class="mx-auto mt-8 h-px w-12 bg-white/20"></div>

                    <p class="mx-auto mt-8 max-w-2xl text-sm leading-7 text-white/60">
                        We are grateful to have inherited this knowledge from our ancestors,
                        and even more grateful to be able to share it with others.
                        Through Bali Cebelok Gesiuh, we hope to keep this tradition alive
                        for generations to come.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        CTA
    ========================================================== --}}
    <section class="bg-cream px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-4xl text-center">

            <p class="text-sm uppercase tracking-[0.25em] text-earth">
                Experience The Tradition
            </p>

            <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                Ready to make coconut oil
                <span class="font-normal italic">
                    the traditional way?
                </span>
            </h2>

            <p class="mx-auto mt-6 max-w-xl text-base leading-7 text-earth">
                Join our family and experience the process for yourself.
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

    </section>

@endsection