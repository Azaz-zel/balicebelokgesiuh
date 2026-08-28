@extends('layouts.app')

@section('title', 'Bali Cebelok Gesiuh — Traditional Coconut Oil Experience')

@section('content')

    {{-- =========================================================
        HERO
    ========================================================= --}}

    <section class="relative min-h-[calc(100vh-80px)] overflow-hidden">

        {{-- Background Image --}}
        <div class="absolute inset-0">

            <img
                src="{{ asset('images/hero/hero-coconut-oil.jpg') }}"
                alt="Traditional coconut oil making at Bali Cebelok Gesiuh"
                class="h-full w-full object-cover"
            >

            {{-- Soft overlay --}}
            <div class="absolute inset-0 bg-black/50"></div>

            {{-- Subtle bottom gradient --}}
            <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-black/30 to-transparent"></div>

        </div>


        {{-- Hero Content --}}
        <div class="relative z-10 mx-auto flex min-h-[calc(100vh-80px)] max-w-7xl items-center px-6 py-20 lg:px-10">

            <div class="max-w-2xl text-white">

                {{-- Eyebrow --}}
                <p class="mb-5 text-xs font-medium uppercase tracking-[0.3em] text-white/80">
                    Traditional Coconut Oil Experience
                </p>


                {{-- Main Heading --}}
                <h1 class="font-display text-5xl font-semibold leading-[1.05] tracking-tight sm:text-6xl lg:text-7xl">
                    A Tradition Passed
                    <span class="block">
                        Through Generations
                    </span>
                </h1>


                {{-- Description --}}
                <p class="mt-7 max-w-xl text-base leading-relaxed text-white/85 sm:text-lg">
                    Discover the traditional art of making coconut oil in the heart of Bali,
                    guided by a family tradition passed down through generations.
                </p>


                {{-- Buttons --}}
                <div class="mt-9 flex flex-wrap items-center gap-4">

                    <a
                        href="{{ route('experience') }}"
                        class="inline-flex items-center rounded-full bg-white px-6 py-3 text-sm font-medium text-dark-earth transition duration-300 hover:-translate-y-0.5 hover:bg-white/90"
                    >
                        Explore the Experience
                    </a>

                    <a
                        href="{{ route('book') }}"
                        class="inline-flex items-center rounded-full border border-white/50 px-6 py-3 text-sm font-medium text-white transition duration-300 hover:-translate-y-0.5 hover:bg-white/10"
                    >
                        Book a Class
                    </a>

                </div>


                {{-- Location / Year --}}
                <div class="mt-10 flex items-center gap-4 text-xs uppercase tracking-[0.2em] text-white/70">

                    <span>
                        Est. 2020
                    </span>

                    <span class="h-1 w-1 rounded-full bg-white/50"></span>

                    <span>
                        Bali, Indonesia
                    </span>

                </div>

            </div>

        </div>


        {{-- Scroll indicator --}}
        <div class="absolute bottom-8 left-1/2 z-10 hidden -translate-x-1/2 flex-col items-center gap-2 text-white/70 md:flex">

            <span class="text-[10px] uppercase tracking-[0.3em]">
                Scroll
            </span>

            <div class="h-8 w-px bg-white/50"></div>

        </div>

    </section>


    {{-- =========================================================
        INTRO / OUR STORY
    ========================================================== --}}
    <section
        id="story"
        class="bg-cream px-6 py-24 lg:px-10 lg:py-32"
    >

        <div class="mx-auto grid max-w-7xl gap-16 lg:grid-cols-2 lg:items-center">

            {{-- Text --}}
            <div>

                <p class="text-sm uppercase tracking-[0.25em] text-earth">
                    Our Story
                </p>

                <h2 class="mt-4 max-w-xl text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                    A tradition passed down,
                    <span class="font-normal italic">
                        kept alive.
                    </span>
                </h2>

                <p class="mt-7 max-w-xl text-base leading-8 text-earth">
                    Bali Cebelok Gesiuh was born from a family tradition
                    inherited from our ancestors, Cebelok and Gesiuh.
                    Their knowledge of making traditional coconut oil
                    has been passed down through generations.
                </p>

                <p class="mt-5 max-w-xl text-base leading-8 text-earth">
                    Since 2020, we have opened our traditional kitchen
                    to visitors who want to experience this knowledge
                    directly and learn how coconut can be transformed
                    into pure traditional coconut oil.
                </p>

                <a
                    href="{{ route('our-story') }}"
                    class="mt-8 inline-flex items-center text-sm font-medium text-dark-earth transition hover:opacity-60"
                >
                    Discover our story
                    <span class="ml-2">→</span>
                </a>

            </div>

            {{-- Image Placeholder --}}
            <div class="aspect-[4/5] overflow-hidden rounded-2xl bg-[#D8D0C2]">

                <img
                    src="{{ asset('images/home/our-story-coconut-making.jpg') }}"
                    alt="Traditional coconut milk being cooked at Bali Cebelok Gesiuh"
                    class="h-[790px] w-full object-cover object-center transition duration-700 hover:scale-105"
                >

            </div>

        </div>

    </section>


    {{-- =========================================================
        EXPERIENCE
    ========================================================== --}}
    <section
        class="bg-warm-white px-6 py-24 lg:px-10 lg:py-32"
    >

        <div class="mx-auto max-w-7xl">

            <div class="max-w-2xl">

                <p class="text-sm uppercase tracking-[0.25em] text-earth">
                    The Experience
                </p>

                <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                    Make it yourself.
                    <span class="font-normal italic">
                        Learn it by hand.
                    </span>
                </h2>

                <p class="mt-6 text-base leading-7 text-earth">
                    Join our family in a traditional Balinese kitchen
                    and experience the process of making coconut oil
                    from fresh coconut.
                </p>

            </div>


            {{-- Process --}}
            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ([
                    [
                        '01',
                        'Open the Coconut',
                        'Begin by opening and preparing the fresh coconuts.'
                    ],
                    [
                        '02',
                        'Prepare the Coconut Milk',
                        'Grate the coconut meat and extract its rich coconut milk.'
                    ],
                    [
                        '03',
                        'Cook the Coconut Milk',
                        'Heat the coconut milk and let the natural process begin.'
                    ],
                    [
                        '04',
                        'Watch the Oil Form',
                        'As the water evaporates, the coconut oil slowly separates.'
                    ],
                    [
                        '05',
                        'Separate the Oil',
                        'Collect the oil carefully into a clean container.'
                    ],
                    [
                        '06',
                        'Final Heating',
                        'Heat the oil once more to remove remaining moisture.'
                    ],
                ] as $step)

                    <div class="rounded-2xl border border-earth/10 bg-cream p-7 transition hover:-translate-y-1">

                        <span class="text-sm font-medium text-earth/50">
                            {{ $step[0] }}
                        </span>

                        <h3 class="mt-8 text-xl font-medium text-dark-earth">
                            {{ $step[1] }}
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-earth">
                            {{ $step[2] }}
                        </p>

                    </div>

                @endforeach

            </div>


            <div class="mt-10">

                <a
                    href="{{ route('experience') }}"
                    class="inline-flex items-center text-sm font-medium text-dark-earth transition hover:opacity-60"
                >
                    Explore the full experience
                    <span class="ml-2">→</span>
                </a>

            </div>

        </div>

    </section>


    {{-- =========================================================
        WHAT YOU'LL GET
    ========================================================== --}}
    <section class="bg-cream px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-7xl">

            <div class="max-w-2xl">

                <p class="text-sm uppercase tracking-[0.25em] text-earth">
                    What's Included
                </p>

                <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                    More than a class.
                    <span class="font-normal italic">
                        It's an experience.
                    </span>
                </h2>

            </div>


            <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ([
                    [
                        '30 ml Coconut Oil',
                        'Take home your own bottle of traditional coconut oil.'
                    ],
                    [
                        'Coconut Cream',
                        'Enjoy the natural cream left from the coconut oil process.'
                    ],
                    [
                        'Coconut Scrub',
                        'Bring home the leftover coconut pulp that can be used as a natural scrub.'
                    ],
                    [
                        'Lunch & Drinks',
                        'Enjoy lunch and refreshments during your experience.'
                    ],
                    [
                        'Traditional Drinks',
                        'Taste traditional coconut-based drinks including arak and tuak.'
                    ],
                    [
                        'Recipe Guide',
                        'Take home a guidebook so you can recreate the process yourself.'
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

                        <p class="mt-3 text-sm leading-6 text-earth">
                            {{ $item[1] }}
                        </p>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

    {{-- =========================================================
        GUEST REVIEWS
    ========================================================= --}}
    <section class="bg-warm-white px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-7xl">

            {{-- Heading --}}
            <div class="flex flex-col justify-between gap-6 lg:flex-row lg:items-end">

                <div class="max-w-2xl">

                    <p class="text-sm uppercase tracking-[0.25em] text-earth">
                        Guest Reviews
                    </p>

                    <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                        Loved by those who
                        <span class="font-normal italic">
                            experienced it.
                        </span>
                    </h2>

                    <p class="mt-5 max-w-xl text-base leading-7 text-earth">
                        Hear directly from guests who joined us,
                        made their own coconut oil, and shared a few
                        hours with our family.
                    </p>

                </div>

            </div>


            {{-- Reviews --}}
            <div class="mt-14 grid gap-5 lg:grid-cols-3">


                {{-- =================================================
                    REVIEW 01 — TEODORA
                ================================================== --}}
                <article class="flex flex-col rounded-2xl bg-cream p-8">

                    <div class="flex gap-1 text-sm tracking-wide text-earth">
                        ★★★★★
                    </div>

                    <blockquote class="mt-6 text-[15px] leading-8 text-dark-earth">

                        “This authentic coconut oil making class was a truly
                        special experience — led by the wonderful Ari, a
                        knowledgeable, kind and enthusiastic teacher.

                        Yumi helped in the class as well and was so sweet
                        to us and helpful.

                        Sri and Bumbum prepared an amazing meal of mie
                        goreng for us beforehand, which was honestly the
                        best I've had in my month spent in Indonesia.

                        We would recommend both the coconut oil class,
                        warung, and the hostel as this is where we stayed
                        making it very convenient for the class.

                        Truly such a special experience with this wonderful
                        family and would go back in a heartbeat.”

                    </blockquote>

                    <div class="mt-8 border-t border-earth/10 pt-5">

                        <p class="text-sm font-medium text-dark-earth">
                            Teodora Djakovic
                        </p>

                        <p class="mt-1 text-xs text-earth">
                            Google Review · 5.0
                        </p>

                    </div>

                </article>


                {{-- =================================================
                    REVIEW 02 — DANTE
                ================================================== --}}
                <article class="flex flex-col rounded-2xl bg-cream p-8">

                    <div class="flex gap-1 text-sm tracking-wide text-earth">
                        ★★★★★
                    </div>

                    <blockquote class="mt-6 text-[15px] leading-8 text-dark-earth">

                        “Ari led the coconut oil class and it was stellar!
                        We saw the whole process start to finish.

                        Ari is a happy and down to earth guy who loves
                        what he does and isn't afraid to share.

                        We had lunch — delicious — at the hostel where
                        we met Boom Boom & Sri. They matched the same
                        energy Ari had and welcomed us warmly.

                        Recommend this spot and experience — there's more
                        than just the coconut oil class — and I'm looking
                        forward to the next visit!!

                        See you next time guys!”

                    </blockquote>

                    <div class="mt-8 border-t border-earth/10 pt-5">

                        <p class="text-sm font-medium text-dark-earth">
                            Dante Sanchez
                        </p>

                        <p class="mt-1 text-xs text-earth">
                            Google Review · 5.0
                        </p>

                    </div>

                </article>


                {{-- =================================================
                    REVIEW 03 — SAVANNAH
                ================================================== --}}
                <article class="flex flex-col rounded-2xl bg-cream p-8">

                    <div class="flex gap-1 text-sm tracking-wide text-earth">
                        ★★★★★
                    </div>

                    <blockquote class="mt-6 text-[15px] leading-8 text-dark-earth">

                        “Wow I think this is the best experience I've done
                        thus far in Bali.

                        So authentic and off the beaten track. Not surrounded
                        by tourists.

                        The family was so lovely and so funny and welcoming.
                        Felt like part of their family during the whole
                        experience.

                        There is really beautiful accommodation as well that
                        looks so nice to stay next time.

                        I highly recommend this experience to anyone and
                        think lots of people would enjoy and like!

                        As part of the experience we received complimentary
                        lunch and drink and transfer as well.

                        We made friends with the other person who was in
                        our class too!

                        Really humble, kind, great instructions and now
                        we're going home to try and make some as well
                        at home!

                        Will definitely visit again next time!”

                    </blockquote>

                    <div class="mt-8 border-t border-earth/10 pt-5">

                        <p class="text-sm font-medium text-dark-earth">
                            Savannah Ross
                        </p>

                        <p class="mt-1 text-xs text-earth">
                            Google Review · 5.0
                        </p>

                    </div>

                </article>


                {{-- =================================================
                    REVIEW 04 — DAMI
                ================================================== --}}
                <article class="flex flex-col rounded-2xl bg-cream p-8">

                    <div class="flex gap-1 text-sm tracking-wide text-earth">
                        ★★★★★
                    </div>

                    <blockquote class="mt-6 text-[15px] leading-8 text-dark-earth">

                        “It was the best and most authentic traditional
                        Balinese experiences I've ever had.

                        Doing our own coconut oil making process was
                        certainly interesting and learnt a lot.

                        The best of all is the place — jungle house!!

                        We had it on a heavy rainy day but still it was
                        so much worth to visit and even can experience
                        so different atmosphere which was very healing.

                        After the nasi-goreng served in a restaurant
                        with a fantastic view was so yummy!

                        I strongly recommend to visit who wants to do
                        something different and purely traditional.”

                    </blockquote>

                    <div class="mt-8 border-t border-earth/10 pt-5">

                        <p class="text-sm font-medium text-dark-earth">
                            Dami Choi
                        </p>

                        <p class="mt-1 text-xs text-earth">
                            Google Review · 5.0
                        </p>

                    </div>

                </article>


                {{-- =================================================
                    REVIEW 05 — JULIA
                ================================================== --}}
                <article class="flex flex-col rounded-2xl bg-cream p-8">

                    <div class="flex gap-1 text-sm tracking-wide text-earth">
                        ★★★★★
                    </div>

                    <blockquote class="mt-6 text-[15px] leading-8 text-dark-earth">

                        “Doing our own coconut oil was amazing today!
                        It was so fun, interesting and so nice to meet
                        Bombom, his wife and Mimi.

                        They are so lovely and warmhearted. We felt very
                        good during our whole stay.

                        We prepared the oil in a little house in the jungle
                        and learned a lot about what you can make out of
                        only one coconut.

                        It was so calming and relaxing being there.
                        The perfect getaway!

                        During our stay we got Balinese snacks and could
                        try fresh coconut and coconut water.

                        After we got our wonderful oil, we got delicious
                        food on the terrace of Bombom and his wife with
                        a beautiful view over a ricefield.

                        This was a perfect way to end our trip.

                        So we highly recommend this amazing experience.
                        It was something completely new and special for us.”

                    </blockquote>

                    <div class="mt-8 border-t border-earth/10 pt-5">

                        <p class="text-sm font-medium text-dark-earth">
                            Julia M.
                        </p>

                        <p class="mt-1 text-xs text-earth">
                            Google Review · 5.0
                        </p>

                    </div>

                </article>


                {{-- =================================================
                    REVIEW 06 — RAWAN
                ================================================== --}}
                <article class="flex flex-col rounded-2xl bg-cream p-8">

                    <div class="flex gap-1 text-sm tracking-wide text-earth">
                        ★★★★★
                    </div>

                    <blockquote class="mt-6 text-[15px] leading-8 text-dark-earth">

                        “First of all... wow... I've been in Bali for 10 days
                        and today is the first legitimate day that mattered.

                        Made was SO sweet, he kept answering my questions.
                        He has an AMAZING sense of humor and he is so kind.

                        His wife Sri is SO cute and they're the cutest
                        couple ever!

                        Meme — Made's mom — spoke Indonesian only with a
                        few English keywords... but her kindness reached
                        my heart through her smile and her actions to make
                        me the most comfortable during the experience.

                        We laughed a lot, had some hot coconut milk and
                        when we were done with the oil, we went and had
                        fried rice made by Sri.

                        I would recommend this trip for sure and will most
                        definitely be coming back for a visit.”

                    </blockquote>

                    <div class="mt-8 border-t border-earth/10 pt-5">

                        <p class="text-sm font-medium text-dark-earth">
                            Rawan Fish
                        </p>

                        <p class="mt-1 text-xs text-earth">
                            Google Review · 5.0
                        </p>

                    </div>

                </article>

            </div>


            {{-- Bottom CTA --}}
            <div class="mt-12 text-center">

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
        CLASS INFORMATION
    ========================================================= --}}
    <section class="bg-cream px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-7xl">

            <div class="overflow-hidden rounded-[2.5rem] bg-dark-earth px-8 py-12 text-white sm:px-12 sm:py-16 lg:px-16 lg:py-20">

                <div class="grid gap-14 lg:grid-cols-[1fr_auto] lg:items-end">

                    {{-- Heading --}}
                    <div>

                        <p class="text-sm uppercase tracking-[0.25em] text-white/50">
                            Join The Class
                        </p>

                        <h2 class="mt-4 max-w-2xl text-4xl font-semibold leading-tight tracking-tight sm:text-5xl">
                            Learn the tradition
                            <span class="font-normal italic">
                                from the family.
                            </span>
                        </h2>

                        <p class="mt-6 max-w-xl text-base leading-7 text-white/70">
                            Spend a few hours in our traditional kitchen,
                            learn the process by hand, and take home a piece
                            of the experience with you.
                        </p>

                    </div>


                    {{-- Price --}}
                    <div class="rounded-full border border-white/10 bg-white/10 px-8 py-6 backdrop-blur-sm">

                        <p class="text-sm text-white/50">
                            Class Price
                        </p>

                        <p class="mt-1 text-3xl font-semibold">
                            Rp250.000
                        </p>

                        <p class="mt-1 text-sm text-white/50">
                            per person
                        </p>

                    </div>

                </div>


                {{-- Information --}}
                <div class="mt-14 grid gap-8 border-t border-white/10 pt-10 sm:grid-cols-2 lg:grid-cols-4">

                    <div>
                        <p class="text-sm text-white/45">
                            Class Schedule
                        </p>

                        <p class="mt-2 font-medium">
                            10.00 & 14.00
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-white/45">
                            Duration
                        </p>

                        <p class="mt-2 font-medium">
                            2–3 Hours
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-white/45">
                            Group Size
                        </p>

                        <p class="mt-2 font-medium">
                            1–10 People
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-white/45">
                            Booking
                        </p>

                        <p class="mt-2 font-medium">
                            1 Day in Advance
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- =========================================================
        LOCATION
    ========================================================= --}}

    <section class="bg-cream py-24 lg:py-32">

        <div class="mx-auto max-w-7xl px-6 lg:px-10">

            {{-- Section Heading --}}
            <div class="max-w-2xl">

                <p class="mb-4 text-xs font-medium uppercase tracking-[0.3em] text-earth">
                    Location
                </p>

                <h2 class="font-display text-4xl font-semibold leading-tight text-dark-earth sm:text-5xl">
                    Come and Experience
                    <span class="block">
                        Bali Cebelok Gesiuh
                    </span>
                </h2>

                <p class="mt-6 text-base leading-relaxed text-earth">
                    Our traditional coconut oil experience takes place in a peaceful
                    family setting surrounded by greenery, nature, and the quiet
                    atmosphere of Bali.
                </p>

            </div>


            {{-- Location Content --}}
            <div class="mt-14 grid gap-8 lg:grid-cols-[1.35fr_0.65fr]">


                {{-- Google Maps --}}
                <div class="group relative overflow-hidden rounded-[2rem] border border-earth/10 bg-stone-100">

                    <iframe
                        src="https://www.google.com/maps?q=Bali%20Cebelok%20Gesiuh&output=embed"
                        class="h-[420px] w-full border-0 grayscale-[15%] transition duration-700 group-hover:grayscale-0 lg:h-[500px]"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Bali Cebelok Gesiuh Location"
                    ></iframe>

                </div>


                {{-- Information Card --}}
                <div class="flex flex-col justify-between rounded-[2rem] bg-earth p-8 text-white sm:p-10">

                    <div>

                        <p class="text-xs font-medium uppercase tracking-[0.25em] text-white/60">
                            Plan Your Visit
                        </p>


                        <div class="mt-8 space-y-7">

                            {{-- Schedule --}}
                            <div>

                                <p class="text-sm font-medium text-white">
                                    Daily Classes
                                </p>

                                <p class="mt-1 text-sm text-white/70">
                                    10:00 AM &nbsp;·&nbsp; 2:00 PM
                                </p>

                            </div>


                            {{-- Duration --}}
                            <div>

                                <p class="text-sm font-medium text-white">
                                    Duration
                                </p>

                                <p class="mt-1 text-sm text-white/70">
                                    Approximately 2–3 hours
                                </p>

                            </div>


                            {{-- Booking --}}
                            <div>

                                <p class="text-sm font-medium text-white">
                                    Booking
                                </p>

                                <p class="mt-1 text-sm leading-relaxed text-white/70">
                                    Please book at least one day in advance.
                                </p>

                            </div>


                            {{-- Location --}}
                            <div>

                                <p class="text-sm font-medium text-white">
                                    Location
                                </p>

                                <p class="mt-1 text-sm leading-relaxed text-white/70">
                                    Bali Cebelok Gesiuh, Bali, Indonesia
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- Directions --}}
                    <a
                        href="https://maps.app.goo.gl/6ATa639tZ698Gpxw5"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="mt-10 inline-flex w-fit items-center rounded-full bg-cream px-6 py-3 text-sm font-medium text-dark-earth transition duration-300 hover:-translate-y-0.5 hover:bg-white"
                    >
                        Get Directions

                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        BOOKING CTA
    ========================================================== --}}
    <section class="bg-cream px-6 py-24 lg:px-10 lg:py-32">

        <div class="mx-auto max-w-4xl text-center">

            <p class="text-sm uppercase tracking-[0.25em] text-earth">
                Come Experience It
            </p>

            <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl lg:text-6xl">
                Take a step into
                <span class="font-normal italic">
                    our tradition.
                </span>
            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-earth">
                Join us in our traditional Balinese kitchen and discover
                how a simple coconut becomes something meaningful.
            </p>

            <div class="mt-9 flex justify-center">

                <a
                    href="{{ route('book') }}"
                    class="rounded-full bg-leaf px-8 py-4 text-sm font-medium text-white transition hover:opacity-90"
                >
                    Book Your Experience
                </a>

            </div>

        </div>

    </section>

@endsection