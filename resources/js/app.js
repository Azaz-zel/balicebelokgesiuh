
/*
|--------------------------------------------------------------------------
| DOM READY
|--------------------------------------------------------------------------
*/

document.addEventListener('DOMContentLoaded', () => {

    /*
    |--------------------------------------------------------------------------
    | SCROLL REVEAL
    |--------------------------------------------------------------------------
    */

    const revealElements = document.querySelectorAll(
        '[data-reveal]'
    );

    const sections = document.querySelectorAll(
        'main section'
    );


    /*
    |--------------------------------------------------------------------------
    | REDUCED MOTION
    |--------------------------------------------------------------------------
    */

    const prefersReducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;


    /*
    |--------------------------------------------------------------------------
    | DATA REVEAL
    |--------------------------------------------------------------------------
    */

    if (revealElements.length) {

        if (prefersReducedMotion) {

            revealElements.forEach((element) => {
                element.classList.add('is-visible');
            });

        } else {

            const revealObserver = new IntersectionObserver(
                (entries, observer) => {

                    entries.forEach((entry) => {

                        if (!entry.isIntersecting) {
                            return;
                        }

                        entry.target.classList.add(
                            'is-visible'
                        );

                        observer.unobserve(
                            entry.target
                        );

                    });

                },
                {
                    threshold: 0.12,
                    rootMargin: '0px 0px -40px 0px',
                }
            );


            revealElements.forEach((element) => {
                revealObserver.observe(element);
            });

        }

    }


    /*
    |--------------------------------------------------------------------------
    | AUTO SECTION REVEAL
    |--------------------------------------------------------------------------
    */

    if (sections.length) {

        /*
        |--------------------------------------------------------------------------
        | First section
        |--------------------------------------------------------------------------
        */

        sections[0].classList.add(
            'section-reveal-first'
        );


        /*
        |--------------------------------------------------------------------------
        | Remaining sections
        |--------------------------------------------------------------------------
        */

        const revealSections = Array.from(
            sections
        ).slice(1);


        if (revealSections.length) {

            revealSections.forEach((section) => {

                section.classList.add(
                    'section-reveal'
                );

            });


            if (prefersReducedMotion) {

                revealSections.forEach((section) => {

                    section.classList.add(
                        'is-visible'
                    );

                });

            } else {

                const sectionObserver =
                    new IntersectionObserver(
                        (entries, observer) => {

                            entries.forEach((entry) => {

                                if (
                                    !entry.isIntersecting
                                ) {
                                    return;
                                }

                                entry.target.classList.add(
                                    'is-visible'
                                );

                                observer.unobserve(
                                    entry.target
                                );

                            });

                        },
                        {
                            threshold: 0.08,
                            rootMargin: '0px 0px -50px 0px',
                        }
                    );


                revealSections.forEach((section) => {

                    sectionObserver.observe(
                        section
                    );

                });

            }

        }

    }


    /*
    |--------------------------------------------------------------------------
    | SMOOTH ANCHOR LINKS
    |--------------------------------------------------------------------------
    */

    document
        .querySelectorAll('a[href^="#"]')
        .forEach((link) => {

            link.addEventListener(
                'click',
                (event) => {

                    const targetId =
                        link.getAttribute('href');


                    if (
                        !targetId ||
                        targetId === '#'
                    ) {
                        return;
                    }


                    const target =
                        document.querySelector(
                            targetId
                        );


                    if (!target) {
                        return;
                    }


                    event.preventDefault();


                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start',
                    });

                }
            );

        });


    /*
    |--------------------------------------------------------------------------
    | MOBILE NAVIGATION
    |--------------------------------------------------------------------------
    */

    const mobileMenuButton =
        document.getElementById(
            'mobile-menu-button'
        );

    const mobileMenu =
        document.getElementById(
            'mobile-menu'
        );

    const menuOpenIcon =
        document.getElementById(
            'menu-open-icon'
        );

    const menuCloseIcon =
        document.getElementById(
            'menu-close-icon'
        );


    if (
        mobileMenuButton &&
        mobileMenu &&
        menuOpenIcon &&
        menuCloseIcon
    ) {

        const closeMobileMenu = () => {

            mobileMenu.classList.remove(
                'is-open'
            );

            menuOpenIcon.classList.remove(
                'hidden'
            );

            menuCloseIcon.classList.add(
                'hidden'
            );

            mobileMenuButton.setAttribute(
                'aria-expanded',
                'false'
            );

        };


        const openMobileMenu = () => {

            mobileMenu.classList.add(
                'is-open'
            );

            menuOpenIcon.classList.add(
                'hidden'
            );

            menuCloseIcon.classList.remove(
                'hidden'
            );

            mobileMenuButton.setAttribute(
                'aria-expanded',
                'true'
            );

        };


        mobileMenuButton.addEventListener(
            'click',
            () => {

                const isOpen =
                    mobileMenu.classList.contains(
                        'is-open'
                    );


                if (isOpen) {

                    closeMobileMenu();

                } else {

                    openMobileMenu();

                }

            }
        );


        /*
        |--------------------------------------------------------------------------
        | Close after navigation
        |--------------------------------------------------------------------------
        */

        mobileMenu
            .querySelectorAll('a')
            .forEach((link) => {

                link.addEventListener(
                    'click',
                    closeMobileMenu
                );

            });


        /*
        |--------------------------------------------------------------------------
        | Close when switching to desktop
        |--------------------------------------------------------------------------
        */

        window.addEventListener(
            'resize',
            () => {

                if (window.innerWidth >= 768) {
                    closeMobileMenu();
                }

            }
        );

    }

});