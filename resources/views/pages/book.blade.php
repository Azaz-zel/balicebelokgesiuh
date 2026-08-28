@extends('layouts.app')

@section('title', 'Book Your Experience — Bali Cebelok Gesiuh')

@section('content')

```
{{-- =========================================================
    HERO
========================================================== --}}
<section class="bg-cream px-6 py-24 lg:px-10 lg:py-32">

    <div class="mx-auto max-w-4xl text-center">

        <p class="text-sm uppercase tracking-[0.3em] text-earth">
            Book Your Experience
        </p>

        <h1 class="mt-5 text-5xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-6xl lg:text-7xl">
            Come experience
            <span class="font-normal italic">
                the tradition.
            </span>
        </h1>

        <p class="mx-auto mt-7 max-w-2xl text-base leading-8 text-earth sm:text-lg">
            Join our family in the traditional kitchen and learn
            how coconut is transformed into pure traditional
            coconut oil.
        </p>

    </div>

</section>


{{-- =========================================================
    CLASS INFORMATION CARD
========================================================== --}}
<section class="bg-cream px-6 pb-24 lg:px-10 lg:pb-32">

    <div class="mx-auto max-w-7xl">

        <div class="rounded-[2.5rem] bg-dark-earth px-8 py-12 text-white sm:px-12 sm:py-16 lg:px-16 lg:py-20">

            <div class="grid gap-14 lg:grid-cols-[1fr_auto] lg:items-center">

                {{-- Price --}}
                <div>

                    <p class="text-sm uppercase tracking-[0.25em] text-white/50">
                        Traditional Coconut Oil Experience
                    </p>

                    <h2 class="mt-4 text-4xl font-semibold leading-tight sm:text-5xl">
                        Rp250.000
                        <span class="text-lg font-normal text-white/50">
                            / person
                        </span>
                    </h2>

                    <p class="mt-5 max-w-xl text-base leading-7 text-white/65">
                        Everything you need for a hands-on traditional
                        coconut oil making experience with our family.
                    </p>

                </div>


                {{-- Book Button --}}
                <div>

                    <a
                        href="#booking"
                        class="inline-flex rounded-full bg-leaf px-8 py-4 text-sm font-medium text-white transition hover:opacity-90"
                    >
                        Book Now
                    </a>

                </div>

            </div>


            {{-- Details --}}
            <div class="mt-14 grid gap-8 border-t border-white/10 pt-10 sm:grid-cols-2 lg:grid-cols-5">

                <div>
                    <p class="text-sm text-white/45">
                        Open
                    </p>

                    <p class="mt-2 font-medium">
                        Every Day
                    </p>
                </div>

                <div>
                    <p class="text-sm text-white/45">
                        Morning
                    </p>

                    <p class="mt-2 font-medium">
                        10:00 AM
                    </p>
                </div>

                <div>
                    <p class="text-sm text-white/45">
                        Afternoon
                    </p>

                    <p class="mt-2 font-medium">
                        2:00 PM
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
                        Advance Booking
                    </p>

                    <p class="mt-2 font-medium">
                        At least 1 Day
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    WHAT'S INCLUDED
========================================================== --}}
<section class="bg-warm-white px-6 py-24 lg:px-10 lg:py-32">

    <div class="mx-auto max-w-7xl">

        <div class="max-w-3xl">

            <p class="text-sm uppercase tracking-[0.25em] text-earth">
                What's Included
            </p>

            <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                Your experience
                <span class="font-normal italic">
                    includes.
                </span>
            </h2>

        </div>


        <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

            @foreach ([

                [
                    '30 ml Coconut Oil',
                    'Take home a 30 ml bottle of the traditional coconut oil you experience during the class.'
                ],

                [
                    'Coconut Cream',
                    'Enjoy the natural cream that remains from the coconut oil-making process.'
                ],

                [
                    'Coconut Scrub',
                    'Take home the leftover coconut pulp, which can be used as a natural scrub.'
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
                    'Take home a guidebook explaining how to make traditional coconut oil.'
                ],
                [
                    'Canang Making',
                    'Learn how to make canang, a traditional Balinese offering used in daily Hindu prayer and spiritual practice.'
                ],

            ] as $item)

                <div class="rounded-2xl bg-cream p-7">

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
    HOW BOOKING WORKS
========================================================== --}}
<section id="booking" class="bg-cream px-6 py-24 lg:px-10 lg:py-32">

    <div class="mx-auto max-w-7xl">

        <div class="max-w-3xl">

            <p class="text-sm uppercase tracking-[0.25em] text-earth">
                How To Book
            </p>

            <h2 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-dark-earth sm:text-5xl">
                Simple booking,
                <span class="font-normal italic">
                    personal experience.
                </span>
            </h2>

            <p class="mt-6 max-w-2xl text-base leading-7 text-earth">
                Booking is handled directly with our family.
                Simply send us your preferred date, time, and
                number of participants through WhatsApp.
            </p>

        </div>


        <div class="mt-14 grid gap-6 md:grid-cols-3">

            {{-- Step 01 --}}
            <div class="rounded-2xl bg-warm-white p-8">

                <p class="text-sm text-earth/50">
                    01
                </p>

                <h3 class="mt-8 text-xl font-medium text-dark-earth">
                    Send Your Details
                </h3>

                <p class="mt-4 text-sm leading-7 text-earth">
                    Tell us your preferred date, time, and number
                    of participants through WhatsApp.
                </p>

            </div>


            {{-- Step 02 --}}
            <div class="rounded-2xl bg-warm-white p-8">

                <p class="text-sm text-earth/50">
                    02
                </p>

                <h3 class="mt-8 text-xl font-medium text-dark-earth">
                    Wait for Confirmation
                </h3>

                <p class="mt-4 text-sm leading-7 text-earth">
                    Our family will check the availability and
                    confirm your experience directly with you.
                </p>

            </div>


            {{-- Step 03 --}}
            <div class="rounded-2xl bg-warm-white p-8">

                <p class="text-sm text-earth/50">
                    03
                </p>

                <h3 class="mt-8 text-xl font-medium text-dark-earth">
                    Come & Experience
                </h3>

                <p class="mt-4 text-sm leading-7 text-earth">
                    Once confirmed, simply come to Bali Cebelok
                    Gesiuh and enjoy the experience with our family.
                </p>

            </div>

        </div>


        {{-- WhatsApp Booking --}}
        <div class="mt-10 rounded-2xl bg-dark-earth p-8 text-white sm:p-10">

            <div class="flex flex-col gap-7 lg:flex-row lg:items-center lg:justify-between">

                <div>

                    <p class="text-sm uppercase tracking-[0.2em] text-white/50">
                        Ready to book?
                    </p>

                    <h3 class="mt-3 text-2xl font-medium sm:text-3xl">
                        Talk to our family directly.
                    </h3>

                    <p class="mt-3 max-w-xl text-sm leading-7 text-white/60">
                        Send us your preferred date, time, and
                        number of guests and we'll help arrange
                        your experience.
                    </p>

                </div>


                <div class="flex flex-col gap-3 sm:flex-row">

                    <a
                        href="https://wa.me/6281338703771"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex min-w-[190px] items-center justify-center rounded-full bg-leaf px-7 py-3.5 text-sm font-medium text-white transition hover:opacity-90"
                    >
                        WhatsApp · Sri
                    </a>

                    <a
                        href="https://wa.me/6281238818150"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex min-w-[190px] items-center justify-center rounded-full bg-leaf px-7 py-3.5 text-sm font-medium text-white transition hover:opacity-90"
                    >
                        WhatsApp · Bumbum
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    LOCATION
========================================================== --}}
<section class="bg-warm-white px-6 py-24 lg:px-10 lg:py-32">

    <div class="mx-auto grid max-w-7xl gap-8 lg:grid-cols-[1.1fr_0.9fr]">

        {{-- Map --}}
        <div class="min-h-[420px] overflow-hidden rounded-[2.5rem] bg-[#D8D0C2]">

            <iframe
                src="https://www.google.com/maps?q=Bali%20Cebelok%20Gesiuh&output=embed"
                class="h-full min-h-[420px] w-full border-0"
                loading="lazy"
                allowfullscreen
                referrerpolicy="no-referrer-when-downgrade"
                title="Bali Cebelok Gesiuh location"
            ></iframe>

        </div>


        {{-- Location --}}
        <div class="flex flex-col justify-center rounded-[2.5rem] bg-cream p-8 sm:p-10 lg:p-12">

            <p class="text-sm uppercase tracking-[0.25em] text-earth">
                Find Us
            </p>

            <h2 class="mt-4 text-4xl font-semibold leading-tight text-dark-earth sm:text-5xl">
                See you
                <span class="font-normal italic">
                    in Bali.
                </span>
            </h2>

            <p class="mt-6 text-base leading-7 text-earth">
                Our traditional kitchen is surrounded by greenery,
                creating a calm and natural setting for the experience.
            </p>

            <div class="mt-8 border-t border-earth/10 pt-7">

                <p class="text-sm text-earth/60">
                    Location
                </p>

                <p class="mt-2 font-medium text-dark-earth">
                    Bali Cebelok Gesiuh
                </p>

            </div>

            <div class="mt-7">

                <a
                    href="https://maps.app.goo.gl/6ATa639tZ698Gpxw5"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex rounded-full border border-earth/20 px-7 py-3.5 text-sm font-medium text-dark-earth transition hover:bg-warm-white"
                >
                    Get Directions ↗
                </a>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    FINAL CTA
========================================================== --}}
<section class="bg-cream px-6 py-24 lg:px-10 lg:py-32">

    <div class="mx-auto max-w-7xl">

        <div class="rounded-[2.5rem] bg-dark-earth px-8 py-16 text-center text-white sm:px-12 lg:px-20 lg:py-20">

            <div class="mx-auto max-w-3xl">

                <p class="text-sm uppercase tracking-[0.25em] text-white/50">
                    Bali Cebelok Gesiuh
                </p>

                <h2 class="mt-4 text-4xl font-semibold leading-tight sm:text-5xl lg:text-6xl">
                    We look forward to
                    <span class="font-normal italic">
                        welcoming you.
                    </span>
                </h2>

                <p class="mx-auto mt-6 max-w-xl text-base leading-7 text-white/60">
                    Come learn, experience, and take home a piece
                    of our family tradition.
                </p>


                {{-- WhatsApp Contacts --}}
                <div class="mt-10 flex flex-col items-center justify-center gap-3 sm:flex-row">

                    <a
                        href="https://wa.me/6281338703771"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex min-w-[220px] items-center justify-center rounded-full bg-leaf px-7 py-3.5 text-sm font-medium text-white transition hover:opacity-90"
                    >
                        WhatsApp · Sri
                    </a>

                    <a
                        href="https://wa.me/6281238818150"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex min-w-[220px] items-center justify-center rounded-full bg-leaf px-7 py-3.5 text-sm font-medium text-white transition hover:opacity-90"
                    >
                        WhatsApp · Made Bumbum
                    </a>

                </div>

                <p class="mt-6 text-xs text-white/40">
                    Please book at least one day in advance.
                </p>

            </div>

        </div>

    </div>

</section>
```

@endsection
