import { useEffect, useState } from 'react';

export const MAPS_URL = 'https://maps.app.goo.gl/6ATa639tZ698Gpxw5';
export const WA_SRI = 'https://wa.me/6281338703771';
export const WA_BUMBUM = 'https://wa.me/6281238818150';

const NAV = [
    ['/', 'Home'],
    ['/our-story', 'Our Story'],
    ['/experience', 'Experience'],
    ['/gallery', 'Gallery'],
];

const PATHS = {
    leaf: <><path d="M5 19c0-8 5-13 14-14-1 9-6 14-14 14z" /><path d="M5 19l7-7" /></>,
    coconut: <><path d="M12 21c4.4 0 8-3.1 8-8 0-4.4-3.6-9-8-9s-8 4.6-8 9c0 4.9 3.6 8 8 8z" /><path d="M12 9v12" /></>,
    home: <><path d="M3 11l9-7 9 7" /><path d="M5 10v10h14V10" /><path d="M10 20v-6h4v6" /></>,
    hand: <><path d="M8 13V5.5a1.5 1.5 0 013 0V12" /><path d="M11 11.5V4a1.5 1.5 0 013 0v7.5" /><path d="M14 11.5V6a1.5 1.5 0 013 0v8a7 7 0 01-7 7 6 6 0 01-5-3l-2.5-4a1.5 1.5 0 012.6-1.5L8 15" /></>,
    check: <path d="M5 12.5l4.5 4.5L19 7.5" />,
    arrowRight: <path d="M5 12h14M13 6l6 6-6 6" />,
    arrowLeft: <path d="M19 12H5M11 6l-6 6 6 6" />,
    menu: <path d="M4 8h16M4 16h16" />,
    close: <path d="M6 6l12 12M18 6L6 18" />,
};

export function Icon({ name, size = 20, width = 1.75, className }) {
    return (
        <svg aria-hidden="true" className={className} width={size} height={size} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth={width} strokeLinecap="round" strokeLinejoin="round">
            {PATHS[name]}
        </svg>
    );
}

function Logo() {
    return (
        <a href="/" className="logo">
            <span className="logo-mark"><Icon name="coconut" size={18} width={2} /></span>
            Cebelok Gesiuh
        </a>
    );
}

const here = (href) => (window.location.pathname.replace(/\/$/, '') || '/') === href ? 'page' : undefined;

function Nav() {
    const [open, setOpen] = useState(false);

    useEffect(() => {
        if (!open) return;
        const onKey = (e) => e.key === 'Escape' && setOpen(false);
        document.addEventListener('keydown', onKey);
        return () => document.removeEventListener('keydown', onKey);
    }, [open]);

    return (
        <header>
            <nav className="nav" aria-label="Main">
                <Logo />
                <div className="links">
                    {NAV.map(([href, label]) => <a key={href} href={href} aria-current={here(href)}>{label}</a>)}
                </div>
                <a className="btn btn-lime nav-cta" href="/book" aria-current={here('/book')}>Book a class</a>
                <button
                    type="button"
                    className="burger"
                    aria-label={open ? 'Close menu' : 'Open menu'}
                    aria-expanded={open}
                    aria-controls="mobile-menu"
                    onClick={() => setOpen(!open)}
                >
                    <Icon name={open ? 'close' : 'menu'} />
                </button>
            </nav>
            {open && (
                <div id="mobile-menu" className="sheet">
                    {[...NAV, ['/book', 'Book a class']].map(([href, label]) => (
                        <a key={href} href={href} aria-current={here(href)}>{label}</a>
                    ))}
                </div>
            )}
        </header>
    );
}

export function Hero({ img, alt, imgPosition, sub, tag, title, lead, children, after }) {
    return (
        <section className={sub ? 'panel hero sub' : 'panel hero'} aria-labelledby="h1">
            <picture>
                {/* hero photo is hidden on phones; a blank source stops the download */}
                <source media="(max-width: 760px)" srcSet="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                <img className="hero-img" src={img} alt={alt} style={imgPosition && { objectPosition: imgPosition }} fetchPriority="high" />
            </picture>
            <div className="in">
                <Nav />
                <div className="hero-body">
                    <span className="tag">{tag}</span>
                    <h1 className="h1" id="h1">{title}</h1>
                    <p className="hero-lead">{lead}</p>
                    {children}
                </div>
                {after}
            </div>
        </section>
    );
}

export function Band({ id, title, text, children }) {
    return (
        <section className="band" id={id} aria-labelledby={`${id || 'cta'}-h`}>
            <div>
                <h2 className="h2" id={`${id || 'cta'}-h`}>{title}</h2>
                <p>{text}</p>
            </div>
            <div className="acts">{children}</div>
        </section>
    );
}

export function Footer() {
    return (
        <footer className="foot">
            <div>
                <Logo />
                <p>Traditional knowledge, passed down with love.</p>
            </div>
            <div>
                <p className="foot-h">Explore</p>
                <ul>
                    <li><a href="/our-story">Our Story</a></li>
                    <li><a href="/experience">Experience</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/book">Book a class</a></li>
                </ul>
            </div>
            <div>
                <p className="foot-h">Contact</p>
                <ul>
                    <li><a href="tel:+6281338703771">Sri, 0813 3870 3771</a></li>
                    <li><a href="tel:+6281238818150">Bumbum, 0812 3881 8150</a></li>
                </ul>
            </div>
            <div>
                <p className="foot-h">Visit</p>
                <ul>
                    <li><a href={MAPS_URL} target="_blank" rel="noopener noreferrer">Get directions</a></li>
                    <li><a href={MAPS_URL} target="_blank" rel="noopener noreferrer">Google reviews</a></li>
                </ul>
            </div>
            <div className="foot-base">
                <span>© {new Date().getFullYear()} Bali Cebelok Gesiuh</span>
                <span>Open every day, 10:00 and 14:00</span>
            </div>
        </footer>
    );
}

export const STEPS = [
    ['01', 'Open the coconut', 'Peel and crack fresh coconuts yourself.', 'We begin with fresh coconuts. You peel and open the coconuts used throughout the process.', '01-open-coconut.jpg'],
    ['02', 'Grate the coconut', 'The base for fresh coconut milk.', 'The coconut meat is grated by hand, the base for fresh coconut milk.', '02-grate-coconut.jpg'],
    ['03', 'Extract the milk', 'Squeeze the grated coconut by hand.', 'The grated coconut is squeezed to press out rich, fresh coconut milk.', '03-extract-coconut-milk.jpg'],
    ['04', 'Cook the milk', 'About 30 minutes, until the oil forms.', 'The milk is heated for around 30 minutes. As the water evaporates, the oil begins to form.', '04-cook-coconut-milk.jpg'],
    ['05', 'Separate the oil', 'Collect it into a clean container.', 'Once the oil separates from the cooked mixture, it is carefully collected into a clean container.', '05-separate-oil.jpg'],
    ['06', 'Final heating', 'Ten more minutes to drive off moisture.', 'The oil is heated again for around 10 minutes so the last moisture evaporates.', '06-final-heating.jpg'],
].map(([n, title, short, text, img]) => ({ n, title, short, text, img: `/images/experience/${img}` }));
