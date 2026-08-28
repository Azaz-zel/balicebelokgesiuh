<nav
    class="sticky top-0 z-50 border-b border-earth/10 bg-cream/95 navbar-smooth"
>
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-10">

        {{-- =====================================================
            LOGO / BRAND
        ====================================================== --}}

        <a
            href="{{ route('home') }}"
            class="group flex flex-col leading-none"
        >
            <span
                class="font-display text-xl font-semibold tracking-wide text-dark-earth transition-opacity duration-300 ease-out group-hover:opacity-75"
            >
                Bali Cebelok Gesiuh
            </span>

            <span
                class="mt-1 text-[10px] uppercase tracking-[0.25em] text-earth transition-opacity duration-300 ease-out group-hover:opacity-60"
            >
                Traditional Coconut Oil Experience
            </span>
        </a>


        {{-- =====================================================
            DESKTOP NAVIGATION
        ====================================================== --}}

        <div class="hidden items-center gap-8 text-sm text-earth md:flex">

            <a
                href="{{ route('home') }}"
                class="link-smooth relative py-2 hover:text-dark-earth"
            >
                Home
            </a>

            <a
                href="{{ route('our-story') }}"
                class="link-smooth relative py-2 hover:text-dark-earth"
            >
                Our Story
            </a>

            <a
                href="{{ route('experience') }}"
                class="link-smooth relative py-2 hover:text-dark-earth"
            >
                Experience
            </a>

            <a
                href="{{ route('gallery') }}"
                class="link-smooth relative py-2 hover:text-dark-earth"
            >
                Gallery
            </a>


            {{-- Book Now --}}

            <a
                href="{{ route('book') }}"
                class="btn-smooth inline-flex items-center rounded-full bg-leaf px-5 py-2.5 text-sm font-medium text-white shadow-sm hover:opacity-90"
            >
                Book Now
            </a>

        </div>


        {{-- =====================================================
            MOBILE MENU BUTTON
        ====================================================== --}}

        <button
            id="mobile-menu-button"
            type="button"
            class="group flex h-10 w-10 items-center justify-center rounded-full text-dark-earth transition-colors duration-300 ease-out hover:bg-warm-white md:hidden"
            aria-label="Open menu"
            aria-expanded="false"
            aria-controls="mobile-menu"
        >

            {{-- Hamburger --}}

            <svg
                id="menu-open-icon"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6 transition-transform duration-300 ease-out"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                />
            </svg>


            {{-- Close --}}

            <svg
                id="menu-close-icon"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="hidden h-6 w-6 transition-transform duration-300 ease-out"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18 18 6M6 6l12 12"
                />
            </svg>

        </button>

    </div>


    {{-- =====================================================
        MOBILE NAVIGATION
    ====================================================== --}}

    <div
        id="mobile-menu"
        class="mobile-menu border-t border-earth/10 bg-cream md:hidden"
    >

        <div class="mx-auto max-w-7xl px-6 py-5">

            <div class="flex flex-col gap-1 text-sm text-earth">

                <a
                    href="{{ route('home') }}"
                    class="link-smooth rounded-xl px-4 py-3 hover:bg-warm-white hover:text-dark-earth"
                >
                    Home
                </a>

                <a
                    href="{{ route('our-story') }}"
                    class="link-smooth rounded-xl px-4 py-3 hover:bg-warm-white hover:text-dark-earth"
                >
                    Our Story
                </a>

                <a
                    href="{{ route('experience') }}"
                    class="link-smooth rounded-xl px-4 py-3 hover:bg-warm-white hover:text-dark-earth"
                >
                    Experience
                </a>

                <a
                    href="{{ route('gallery') }}"
                    class="link-smooth rounded-xl px-4 py-3 hover:bg-warm-white hover:text-dark-earth"
                >
                    Gallery
                </a>


                {{-- Book Now --}}

                <a
                    href="{{ route('book') }}"
                    class="btn-smooth mt-3 inline-flex items-center justify-center rounded-full bg-leaf px-5 py-3 font-medium text-white hover:opacity-90"
                >
                    Book Now
                </a>

            </div>

        </div>

    </div>

</nav>