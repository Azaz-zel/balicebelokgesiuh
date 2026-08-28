<footer class="bg-dark-earth text-white">

    <div class="mx-auto max-w-7xl px-6 py-16 lg:px-10">

        <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-4">

            {{-- Brand --}}
            <div class="lg:col-span-2">

                <a
                    href="{{ route('home') }}"
                    class="inline-flex flex-col leading-none"
                >
                    <span class="font-display text-2xl font-semibold tracking-wide">
                        Bali Cebelok Gesiuh
                    </span>

                    <span class="mt-2 text-[10px] uppercase tracking-[0.25em] text-white/50">
                        Traditional Coconut Oil Experience
                    </span>
                </a>

                <p class="mt-6 max-w-md text-sm leading-7 text-white/60">
                    Experience the traditional art of making coconut oil
                    in Bali, passed down through generations with the
                    blessing of our ancestors, Cebelok and Gesiuh.
                </p>

            </div>


            {{-- Explore --}}
            <div>

                <h3 class="text-sm font-medium">
                    Explore
                </h3>

                <ul class="mt-5 space-y-3 text-sm text-white/60">

                    <li>
                        <a
                            href="{{ route('home') }}"
                            class="transition hover:text-white"
                        >
                            Home
                        </a>
                    </li>

                    <li>
                        <a
                            href="{{ route('our-story') }}"
                            class="transition hover:text-white"
                        >
                            Our Story
                        </a>
                    </li>

                    <li>
                        <a
                            href="{{ route('experience') }}"
                            class="transition hover:text-white"
                        >
                            Experience
                        </a>
                    </li>

                    <li>
                        <a
                            href="{{ route('gallery') }}"
                            class="transition hover:text-white"
                        >
                            Gallery
                        </a>
                    </li>

                </ul>

            </div>


            {{-- Contact --}}
            <div>

                <h3 class="text-sm font-medium">
                    Contact
                </h3>

                <div class="mt-5 space-y-4 text-sm text-white/60">

                    <a
                        href="tel:081338703771"
                        class="block transition hover:text-white"
                    >
                        0813 3870 3771
                    </a>

                    <a
                        href="tel:081238818150"
                        class="block transition hover:text-white"
                    >
                        0812 3881 8150
                    </a>

                    <a
                        href="https://maps.app.goo.gl/6ATa639tZ698Gpxw5"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center transition hover:text-white"
                    >
                        View on Google Maps
                        <span class="ml-2">↗</span>
                    </a>

                </div>

            </div>

        </div>


        {{-- Bottom --}}
        <div class="mt-14 border-t border-white/10 pt-7">

            <div class="flex flex-col gap-3 text-xs text-white/40 sm:flex-row sm:items-center sm:justify-between">

                <p>
                    © {{ date('Y') }} Bali Cebelok Gesiuh. All rights reserved.
                </p>

                <p>
                    Traditional knowledge, passed down with love.
                </p>

            </div>

        </div>

    </div>

</footer>