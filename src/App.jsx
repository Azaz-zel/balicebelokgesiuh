import { useEffect, useState } from 'react';

const MAPS_URL = 'https://maps.app.goo.gl/6ATa639tZ698Gpxw5';

const NAV = [
    ['#story', 'Story'],
    ['#experience', 'Experience'],
    ['#included', 'Included'],
    ['#reviews', 'Reviews'],
];

const STEPS = [
    ['Open the coconut', 'Peel and crack the fresh coconuts yourself.', '01-open-coconut.jpg'],
    ['Grate the meat', 'The base for fresh coconut milk.', '02-grate-coconut.jpg'],
    ['Press the milk', 'Squeeze the grated coconut into rich milk.', '03-extract-coconut-milk.jpg'],
    ['Cook it down', 'About 30 minutes, until the oil starts to form.', '04-cook-coconut-milk.jpg'],
    ['Separate the oil', 'Collect it carefully into a clean container.', '05-separate-oil.jpg'],
    ['Final heating', 'Ten more minutes to drive off the last moisture.', '06-final-heating.jpg'],
];

const TAKE_HOME = [
    ['30 ml of your own oil', 'The bottle you made in class.'],
    ['Coconut cream', 'The natural cream left from the process.'],
    ['Coconut scrub', 'Leftover pulp, used as a natural scrub.'],
    ['Recipe guide', 'So you can make it again at home.'],
];

const SHARED = [
    ['Lunch and drinks', 'Served during the class.'],
    ['Arak and tuak', 'Traditional coconut drinks to taste.'],
    ['Canang making', 'The daily Balinese Hindu offering, made by hand.'],
];

const DETAILS = [
    ['Open', 'Every day'],
    ['Duration', '2-3 hours'],
    ['Morning class', '10:00'],
    ['Afternoon class', '14:00'],
    ['Book ahead', 'At least 1 day'],
    ['Group size', '1-10 guests'],
];

function Nav() {
    const [open, setOpen] = useState(false);

    useEffect(() => {
        if (!open) return;
        const onKey = (e) => e.key === 'Escape' && setOpen(false);
        document.addEventListener('keydown', onKey);
        return () => document.removeEventListener('keydown', onKey);
    }, [open]);

    const close = () => setOpen(false);

    return (
        <>
            <nav className="nav container" aria-label="Main">
                <a href="#top" className="brand">Cebelok Gesiuh</a>
                <div className="nav-links">
                    {NAV.map(([href, label]) => <a key={href} href={href}>{label}</a>)}
                    <a href="#book" className="btn btn-light">Book a class</a>
                </div>
                <button
                    type="button"
                    className="nav-toggle"
                    aria-label={open ? 'Close menu' : 'Open menu'}
                    aria-expanded={open}
                    aria-controls="mobile-menu"
                    onClick={() => setOpen(!open)}
                >
                    <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round">
                        <path d={open ? 'M6 6l12 12M18 6L6 18' : 'M4 8h16M4 16h16'} />
                    </svg>
                </button>
            </nav>
            {open && (
                <div id="mobile-menu" className="nav-sheet">
                    {NAV.map(([href, label]) => <a key={href} href={href} onClick={close}>{label}</a>)}
                    <a href="#book" className="btn btn-light" onClick={close}>Book a class</a>
                </div>
            )}
        </>
    );
}

function Item({ title, text }) {
    return (
        <div>
            <p className="item-title">{title}</p>
            <p className="item-text">{text}</p>
        </div>
    );
}

export default function App() {
    return (
        <div id="top">
            <header className="hero">
                <img src="/images/gallery/jungle-view.jpg" alt="" className="hero-bg" fetchPriority="high" />
                <Nav />
                <div className="hero-body">
                    <div className="emblem" aria-hidden="true">
                        <span className="emblem-script">Bali</span>
                        <span className="emblem-name">CEBELOK</span>
                        <span className="emblem-name">GESIUH</span>
                        <span className="emblem-rule" />
                        <span className="emblem-since">SINCE 2020</span>
                    </div>
                    <h1>A tradition passed through generations.</h1>
                    <p className="hero-lead">Join our family in a traditional Balinese kitchen and make pure coconut oil from fresh coconut, by hand.</p>
                    <div className="actions">
                        <a href="#book" className="btn btn-light">Book a class</a>
                        <a href="#experience" className="btn btn-outline">See the six steps</a>
                    </div>
                </div>
            </header>

            <main>
                <section id="story" className="split split-light">
                    <div className="split-media">
                        <img src="/images/home/our-story-coconut-making.jpg" alt="Coconut milk cooking in a traditional pan" className="arch" width="1200" height="1600" loading="lazy" />
                    </div>
                    <div className="split-panel panel-dark curve-bl">
                        <h2>Born from a family tradition.</h2>
                        <p>Bali Cebelok Gesiuh grew out of knowledge inherited from our ancestors, Cebelok and Gesiuh: how to turn a fresh coconut into pure, traditional coconut oil.</p>
                        <p>Since 2020 we have opened our family kitchen to visitors who want to learn it with their own hands.</p>
                    </div>
                </section>

                <section className="split split-light split-reverse">
                    <div className="split-panel panel-sage curve-tr">
                        <p className="script">Cebelok &amp; Gesiuh</p>
                        <h2>The names behind every bottle.</h2>
                        <p>They taught our family a simple way of making oil: start with the coconut, and let its natural qualities become something useful for everyday life.</p>
                        <p>In honour of that heritage, the experience carries their names.</p>
                    </div>
                    <div className="split-media pair">
                        <img src="/images/our-story/cebelok-gesiuh.jpg" alt="Our family making coconut oil together" className="arch pair-main" width="1200" height="1600" loading="lazy" />
                        <img src="/images/our-story/bumbum-sri.jpg" alt="I Made Bumbum and Sri" className="pill pair-side" width="1170" height="1170" loading="lazy" />
                    </div>
                </section>

                <section id="experience" className="steps">
                    <div className="container stack">
                        <h2>Six steps, from coconut to oil.</h2>
                        <p className="muted measure">You do every step yourself, alongside our family. A class takes 2-3 hours and welcomes 1-10 guests.</p>
                    </div>
                    <ol className="container step-track" tabIndex={0} aria-label="The six steps, scroll sideways">
                        {STEPS.map(([title, text, img], i) => (
                            <li key={title} className="step">
                                <img src={`/images/experience/${img}`} alt={title} className="arch" loading="lazy" />
                                <span className="step-n">{String(i + 1).padStart(2, '0')}</span>
                                <span className="step-title">{title}</span>
                                <span className="step-text">{text}</span>
                            </li>
                        ))}
                    </ol>
                </section>

                <section id="included" className="included">
                    <img src="/images/experience/oils.jpg" alt="Bottles of finished coconut oil" className="pill included-img" width="1200" height="1600" loading="lazy" />
                    <div className="included-body">
                        <h2>More than a class.</h2>
                        <div className="included-cols">
                            <div className="included-col">
                                <p className="script">You take home</p>
                                {TAKE_HOME.map(([t, d]) => <Item key={t} title={t} text={d} />)}
                            </div>
                            <div className="included-col">
                                <p className="script">You share with us</p>
                                {SHARED.map(([t, d]) => <Item key={t} title={t} text={d} />)}
                            </div>
                        </div>
                    </div>
                </section>

                <section className="hosts">
                    <img src="/images/our-story/the-family.jpg" alt="The Cebelok Gesiuh family welcoming guests" className="hosts-img" width="1600" height="739" loading="lazy" />
                    <div className="hosts-card">
                        <p className="script accent">Your hosts</p>
                        <h2>I Made Bumbum &amp; Sri</h2>
                        <p>Bumbum owns the kitchen, Sri welcomes every guest, and the rest of the family helps along the way. It feels like a visit to the family home, because it is one.</p>
                    </div>
                </section>

                <section id="reviews" className="reviews">
                    <div className="container">
                        <h2>In our guests' words.</h2>
                        <div className="reviews-grid">
                            <figure className="quote-lead">
                                <blockquote>“I got to cut and crack the coconut, grate, strain, and watch the oil being made. Very hands on and fun.”</blockquote>
                                <figcaption>Kathy Dong, Google review</figcaption>
                            </figure>
                            <div className="quote-side">
                                <figure>
                                    <blockquote>“He walked us through the entire process, from cracking the coconut to extracting the coconut oil.”</blockquote>
                                    <figcaption>Jin Ting Tan, Google review</figcaption>
                                </figure>
                                <figure>
                                    <blockquote lang="ko">“호스트 본본 아저씨 엄청 친절하시고 재밌어요.”</blockquote>
                                    <figcaption>Oh-yeong Kwon, Google review</figcaption>
                                </figure>
                                <a href={MAPS_URL} target="_blank" rel="noopener noreferrer" className="text-link">Read all reviews on Google</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="book" className="book">
                    <div className="container book-grid">
                        <div className="frame">
                            <img src="/images/gallery/the-place.jpg" alt="The jungle hut where the class takes place" width="1200" height="1600" loading="lazy" />
                        </div>
                        <div className="stack book-body">
                            <h2>Come cook with us.</h2>
                            <p className="price"><span>Rp250.000</span> per person</p>
                            <dl className="details">
                                {DETAILS.map(([k, v]) => (
                                    <div key={k}><dt>{k}</dt><dd>{v}</dd></div>
                                ))}
                            </dl>
                            <p className="muted measure">Send your date, class time and number of guests on WhatsApp. Our family checks availability and confirms with you directly.</p>
                            <div className="actions">
                                <a href="https://wa.me/6281338703771" target="_blank" rel="noopener noreferrer" className="btn btn-light">WhatsApp Sri</a>
                                <a href="https://wa.me/6281238818150" target="_blank" rel="noopener noreferrer" className="btn btn-outline">WhatsApp Bumbum</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="visit" className="visit">
                    <div className="stack visit-main">
                        <h2 className="visit-title">See you in Bali.</h2>
                        <p>Our traditional kitchen is surrounded by greenery, a calm and natural setting for the class.</p>
                        <a href={MAPS_URL} target="_blank" rel="noopener noreferrer" className="btn btn-dark">Get directions</a>
                    </div>
                    <div className="visit-contact">
                        <p className="script">Call or message</p>
                        <a href="tel:+6281338703771">Sri, 0813 3870 3771</a>
                        <a href="tel:+6281238818150">Bumbum, 0812 3881 8150</a>
                    </div>
                </section>
            </main>

            <footer className="footer container">
                <p>© {new Date().getFullYear()} Bali Cebelok Gesiuh</p>
                <p>Traditional knowledge, passed down with love.</p>
            </footer>
        </div>
    );
}
