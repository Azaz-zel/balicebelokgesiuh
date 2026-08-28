@extends('layouts.app')

@section('title', 'The Experience — Bali Cebelok Gesiuh')

@section('content')

    {{-- =========================================================
        PAGE HERO
    ========================================================== --}}
    <section class="bg-cream px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-4xl text-center">

            <p class="text-sm uppercase tracking-[0.3em] text-earth">
                The Experience
            </p>

            <h1 class="mt-5 text-5xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-6xl lg:text-7xl">
                Make it yourself,
                <span class="font-normal italic">
                    from coconut to oil.
                </span>
            </h1>

            <p class="mx-auto mt-7 max-w-2xl text-base leading-8 text-earth sm:text-lg">
                Step into our family’s traditional process of making coconut oil
                and experience every step with your own hands.
            </p>

        </div>

    </section>


    {{-- =========================================================
        EXPERIENCE OVERVIEW
    ========================================================== --}}
    <section class="bg-warm-white px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto grid max-w-7xl gap-16 lg:grid-cols-2 lg:items-center">

            {{-- Image --}}
            <div class="aspect-[4/3] overflow-hidden rounded-2xl">

                <img
                    src="{{ asset('images/experience/experience-overview.jpg') }}"
                    alt="Bali Cebelok Gesiuh family preparing coconut milk"
                    class="h-full w-full object-cover transition duration-700 hover:scale-105"
                >

            </div>

            {{-- Text --}}
            <div>

                <p class="text-sm uppercase tracking-[0.25em] text-earth">
                    A Hands-On Tradition
                </p>

                <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                    Don't just watch.
                    <span class="font-normal italic">
                        Make it yourself.
                    </span>
                </h2>

                <p class="mt-7 text-base leading-8 text-earth">
                    This is a hands-on experience. You won't simply watch
                    someone make coconut oil — you'll take part in the
                    traditional process yourself.
                </p>

                <p class="mt-5 text-base leading-8 text-earth">
                    Together with our family, you'll prepare the coconut,
                    make the coconut milk, cook it, and watch as the oil
                    slowly separates from the mixture.
                </p>

                <div class="mt-8 grid grid-cols-2 gap-6 border-t border-earth/15 pt-7">

                    <div>
                        <p class="text-2xl font-semibold text-dark-earth">
                            2–3
                        </p>

                        <p class="mt-1 text-sm text-earth">
                            Hours
                        </p>
                    </div>

                    <div>
                        <p class="text-2xl font-semibold text-dark-earth">
                            1–10
                        </p>

                        <p class="mt-1 text-sm text-earth">
                            People per class
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        SIX STEPS
    ========================================================== --}}
    <section class="bg-cream px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-7xl">

            <div class="max-w-3xl">

                <p class="text-sm uppercase tracking-[0.25em] text-earth">
                    The Process
                </p>

                <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                    Six steps,
                    <span class="font-normal italic">
                        one tradition.
                    </span>
                </h2>

                <p class="mt-6 text-base leading-7 text-earth">
                    From a fresh coconut to the finished oil, every step follows
                    a traditional process that you can experience and take part in
                    alongside our family.
                </p>

            </div>


            <div class="mt-16">

                @foreach ([
                    [
                        '01',
                        'Open the Coconut',
                        'We begin with fresh coconuts. Participants are invited to peel and open the coconuts that will be used throughout the process.',
                        '01-open-coconut.jpg'
                    ],
                    [
                        '02',
                        'Grate the Coconut',
                        'The coconut meat is removed and grated. This grated coconut will become the base for extracting fresh coconut milk.',
                        '02-grate-coconut.jpg'
                    ],
                    [
                        '03',
                        'Extract the Coconut Milk',
                        'The grated coconut is processed to obtain rich coconut milk, which will then be cooked to begin the transformation.',
                        '03-extract-coconut-milk.jpg'
                    ],
                    [
                        '04',
                        'Cook the Coconut Milk',
                        'The coconut milk is heated for around 30 minutes. As the water gradually evaporates, the coconut oil begins to form.',
                        '04-cook-coconut-milk.jpg'
                    ],
                    [
                        '05',
                        'Separate the Oil',
                        'Once the oil has separated from the cooked coconut mixture, it is carefully collected into a clean container.',
                        '05-separate-oil.jpg'
                    ],
                    [
                        '06',
                        'Final Heating',
                        'The collected oil is heated again for around 10 minutes to allow remaining moisture to evaporate, completing the traditional process.',
                        '06-final-heating.jpg'
                    ],
                ] as $step)

                    <div class="grid gap-8 border-t border-earth/15 py-10 md:grid-cols-[100px_1fr_280px] md:items-start">

                        {{-- Number --}}
                        <div>
                            <span class="text-sm font-medium tracking-widest text-earth/50">
                                {{ $step[0] }}
                            </span>
                        </div>

                        {{-- Content --}}
                        <div>

                            <h3 class="text-2xl font-medium text-dark-earth">
                                {{ $step[1] }}
                            </h3>

                            <p class="mt-4 max-w-2xl text-sm leading-7 text-earth">
                                {{ $step[2] }}
                            </p>

                        </div>

                        {{-- Image --}}
                        <div class="aspect-[4/3] overflow-hidden rounded-xl">

                            <img
                                src="{{ asset('images/experience/' . $step[3]) }}"
                                alt="{{ $step[1] }}"
                                class="h-full w-full object-cover transition duration-700 hover:scale-105"
                            >

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

    {{-- =========================================================
        GUEST EXPERIENCES
    ========================================================= --}}
    <section class="bg-warm-white px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-7xl">

            {{-- Heading --}}
            <div class="max-w-2xl">

                <p class="text-sm uppercase tracking-[0.25em] text-earth">
                    Guest Experiences
                </p>

                <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                    They made it
                    <span class="font-normal italic">
                        themselves.
                    </span>
                </h2>

                <p class="mt-5 max-w-xl text-base leading-7 text-earth">
                    Hear from guests who joined us and experienced
                    the traditional coconut oil-making process firsthand.
                </p>

            </div>


            {{-- Reviews --}}
            <div class="mt-14 grid gap-5 lg:grid-cols-3">


                {{-- Jin Ting Tan --}}
                <article class="flex flex-col rounded-2xl bg-cream p-8">

                    <div class="flex gap-1 text-sm tracking-wide text-earth">
                        ★★★★★
                    </div>

                    <blockquote class="mt-6 text-[15px] leading-8 text-dark-earth">

                        “We found out about this experience through Airbnb.

                        Boomboom and his family were very warm and welcoming.

                        The experience was hosted at his jungle hut and he
                        walked us through the entire process, from cracking
                        the coconut to extracting the coconut oil.

                        The entire experience was very thoughtfully planned out
                        — I highly recommend it!”

                    </blockquote>

                    <div class="mt-8 border-t border-earth/10 pt-5">

                        <p class="text-sm font-medium text-dark-earth">
                            Jin Ting Tan
                        </p>

                        <p class="mt-1 text-xs text-earth">
                            Google Review · 5.0
                        </p>

                    </div>

                </article>


                {{-- Kathy Dong --}}
                <article class="flex flex-col rounded-2xl bg-cream p-8">

                    <div class="flex gap-1 text-sm tracking-wide text-earth">
                        ★★★★★
                    </div>

                    <blockquote class="mt-6 text-[15px] leading-8 text-dark-earth">

                        “I booked this coconut oil making class last minute,
                        and am so glad I did it!

                        It's such a unique experience to learn how coconut oil
                        is made, as well as a nice chance to spend an afternoon
                        looking at the beautiful jungle and rice terraces.

                        Bombom, his sister, and Mimi were amazing hosts the
                        whole way through!

                        I got to cut/crack the coconut, grate, strain, and watch
                        the oil being made — very hands on and fun process.

                        Throughout the whole thing, Bombom explained more about
                        the health benefits and various Balinese traditions/culture.

                        I also got to try pieces of the coconut at each stage.

                        At the end, you get to keep a bottle of the coconut oil.

                        Overall, it's a fantastic experience from start to finish
                        — highly recommend it!!”

                    </blockquote>

                    <div class="mt-8 border-t border-earth/10 pt-5">

                        <p class="text-sm font-medium text-dark-earth">
                            Kathy Dong
                        </p>

                        <p class="mt-1 text-xs text-earth">
                            Google Review · 5.0
                        </p>

                    </div>

                </article>


                {{-- Oh-yeong Kwon --}}
                <article class="flex flex-col rounded-2xl bg-cream p-8">

                    <div class="flex gap-1 text-sm tracking-wide text-earth">
                        ★★★★★
                    </div>

                    <blockquote
                        class="mt-6 text-[15px] leading-8 text-dark-earth"
                        lang="ko"
                    >

                        “호스트 본본 아저씨 엄청 친절하시고 재밌어요.

                        삼촌집 놀러 온거 같이 정글 오두막에서
                        편하게 만들수 있습니다.

                        투어도 좋지만 정글에 와서 오일도 만들어보고
                        재밌었어요!

                        코코넛 직접 만지면서 과육 크림 손에도 발라보고
                        먹어도 보고 즐거운 경험이였습니다.

                        본본 아저씨 행복하세요.”

                    </blockquote>

                    <div class="mt-8 border-t border-earth/10 pt-5">

                        <p class="text-sm font-medium text-dark-earth">
                            Oh-yeong Kwon
                        </p>

                        <p class="mt-1 text-xs text-earth">
                            Google Review · 5.0 · Korean
                        </p>

                    </div>

                </article>

            </div>


            {{-- Google Maps --}}
            <div class="mt-10 text-center">

                <a
                    href="https://maps.app.goo.gl/6ATa639tZ698Gpxw5"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex rounded-full border border-earth/20 px-7 py-3.5 text-sm font-medium text-dark-earth transition hover:bg-cream"
                >
                    Read More Reviews on Google ↗
                </a>

            </div>

        </div>

    </section>


    {{-- =========================================================
        WHY THE EXPERIENCE
    ========================================================== --}}
    <section class="bg-warm-white px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-7xl">

            <div class="max-w-3xl">

                <p class="text-sm uppercase tracking-[0.25em] text-earth">
                    Why This Experience
                </p>

                <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                    Slow down.
                    <span class="font-normal italic">
                        Learn something real.
                    </span>
                </h2>

            </div>


            <div class="mt-14 grid gap-6 md:grid-cols-3 ">

                <div class="rounded-2xl bg-cream p-8 border border-earth/10">

                    <p class="text-sm text-earth/50">
                        01
                    </p>

                    <h3 class="mt-8 text-xl font-medium text-dark-earth">
                        Hands-On
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-earth">
                        Take part in the process instead of simply
                        observing from the sidelines.
                    </p>

                </div>


                <div class="rounded-2xl bg-cream p-8 border border-earth/10">

                    <p class="text-sm text-earth/50">
                        02
                    </p>

                    <h3 class="mt-8 text-xl font-medium text-dark-earth">
                        Family Tradition
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-earth">
                        Learn directly from a family that has inherited
                        this traditional knowledge.
                    </p>

                </div>


                <div class="rounded-2xl bg-cream p-8 border border-earth/10">

                    <p class="text-sm text-earth/50">
                        03
                    </p>

                    <h3 class="mt-8 text-xl font-medium text-dark-earth">
                        Authentic Setting
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-earth">
                        Experience the process in a traditional kitchen
                        surrounded by a calm and natural environment.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        CLASS DETAILS
    ========================================================= --}}
    <section class="bg-cream px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-7xl">

            <div class="rounded-[2.5rem] bg-dark-earth px-8 py-12 text-white sm:px-12 sm:py-16 lg:px-16 lg:py-20">

                <div class="grid gap-14 lg:grid-cols-2">

                    {{-- Heading --}}
                    <div>

                        <p class="text-sm uppercase tracking-[0.25em] text-white/50">
                            Class Details
                        </p>

                        <h2 class="mt-4 text-4xl font-semibold leading-tight sm:text-5xl">
                            Everything you need
                            <span class="font-normal italic">
                                to know.
                            </span>
                        </h2>

                        <p class="mt-6 max-w-md text-base leading-7 text-white/60">
                            A simple and intimate experience designed for
                            anyone who wants to learn the traditional process
                            of making coconut oil.
                        </p>

                    </div>


                    {{-- Details --}}
                    <div class="grid gap-8 sm:grid-cols-2">

                        {{-- Price --}}
                        <div class="border-t border-white/10 pt-5">

                            <p class="text-sm text-white/45">
                                Price
                            </p>

                            <p class="mt-2 text-xl font-medium">
                                Rp250.000 / person
                            </p>

                        </div>


                        {{-- Schedule --}}
                        <div class="border-t border-white/10 pt-5">

                            <p class="text-sm text-white/45">
                                Schedule
                            </p>

                            <p class="mt-2 text-xl font-medium">
                                10.00 & 14.00
                            </p>

                        </div>


                        {{-- Duration --}}
                        <div class="border-t border-white/10 pt-5">

                            <p class="text-sm text-white/45">
                                Duration
                            </p>

                            <p class="mt-2 text-xl font-medium">
                                2–3 Hours
                            </p>

                        </div>


                        {{-- Group --}}
                        <div class="border-t border-white/10 pt-5">

                            <p class="text-sm text-white/45">
                                Group Size
                            </p>

                            <p class="mt-2 text-xl font-medium">
                                1–10 People
                            </p>

                        </div>


                        {{-- Open --}}
                        <div class="border-t border-white/10 pt-5">

                            <p class="text-sm text-white/45">
                                Open
                            </p>

                            <p class="mt-2 text-xl font-medium">
                                Every Day
                            </p>

                        </div>


                        {{-- Booking --}}
                        <div class="border-t border-white/10 pt-5">

                            <p class="text-sm text-white/45">
                                Booking
                            </p>

                            <p class="mt-2 text-xl font-medium">
                                1 Day in Advance
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        WHAT'S INCLUDED
    ========================================================== --}}
    <section class="bg-cream px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-7xl">

            <div class="max-w-3xl">

                <p class="text-sm uppercase tracking-[0.25em] text-earth">
                    Included
                </p>

                <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                    Take the experience
                    <span class="font-normal italic">
                        home with you.
                    </span>
                </h2>

            </div>


            <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ([
                    [
                        '30 ml Coconut Oil',
                        'A 30 ml bottle of traditional coconut oil made during the experience to take home.'
                    ],
                    [
                        'Coconut Cream',
                        'Fresh coconut cream prepared as part of the traditional process.'
                    ],
                    [
                        'Coconut Scrub',
                        'Coconut pulp that can be reused as a simple and natural body scrub.'
                    ],
                    [
                        'Lunch & Drinks',
                        'Enjoy lunch and refreshments during your experience.'
                    ],
                    [
                    'Traditional Drinks',
                    'Experience traditional coconut-based drinks including arakatak and tuak.'
                    ],
                    [
                        'Recipe Guide',
                        'A simple guide to help you remember and recreate the traditional process at home.'
                    ],
                    [
                        'Canang Making',
                        'Learn how to make canang, a traditional Balinese offering used in daily Hindu prayer and spiritual practice.'
                    ],
                ] as $item)

                    <div class="rounded-2xl border border-earth/10 bg-cream p-7 transition hover:-translate-y-1">

                        <h3 class="text-lg font-medium text-dark-earth">
                            {{ $item[0] }}
                        </h3>

                        <p class="mt-3 text-sm leading-7 text-earth">
                            {{ $item[1] }}
                        </p>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

    {{-- =========================================================
        CTA
    ========================================================== --}}
    <section class="bg-warm-white px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-4xl text-center">

            <p class="text-sm uppercase tracking-[0.25em] text-earth">
                Ready to Experience It?
            </p>

            <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl lg:text-6xl">
                Come make it
                <span class="font-normal italic">
                    yourself.
                </span>
            </h2>

            <p class="mx-auto mt-6 max-w-xl text-base leading-7 text-earth">
                Classes are available every day. Booking is required
                at least one day in advance.
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