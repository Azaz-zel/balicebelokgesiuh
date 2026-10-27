import { useState } from 'react';
import { Band, Footer, Hero } from '../layout.jsx';

const PHOTOS = [
    ['place', 'gallery/jungle-view.jpg', 'Jungle view around the kitchen', 'The view from the kitchen'],
    ['process', 'experience/01-open-coconut.jpg', 'Opening a fresh coconut', 'Opening the coconut'],
    ['family', 'our-story/bumbum-sri.jpg', 'I Made Bumbum and Sri', 'Bumbum and Sri'],
    ['process', 'experience/02-grate-coconut.jpg', 'Grating coconut', 'Grating by hand'],
    ['process', 'home/our-story-coconut-making.jpg', 'Coconut milk cooking', 'Coconut milk on the fire'],
    ['place', 'gallery/the-place.jpg', 'The jungle hut', 'The jungle hut'],
    ['process', 'experience/03-extract-coconut-milk.jpg', 'Pressing coconut milk', 'Pressing the milk'],
    ['family', 'our-story/cebelok-gesiuh.jpg', 'The family making oil together', 'Making oil together'],
    ['process', 'experience/04-cook-coconut-milk.jpg', 'Cooking the coconut milk', 'Cooking it down'],
    ['process', 'experience/05-separate-oil.jpg', 'Separating the oil', 'Separating the oil'],
    ['family', 'our-story/the-family.jpg', 'The family welcoming guests', 'Welcoming guests'],
    ['process', 'experience/06-final-heating.jpg', 'Final heating of the oil', 'Final heating'],
    ['process', 'experience/oils.jpg', 'Bottles of finished coconut oil', 'The finished oil'],
];

const FILTERS = [['all', 'All'], ['process', 'Process'], ['family', 'Family'], ['place', 'The place']];

export default function Gallery() {
    const [cat, setCat] = useState('all');
    const shown = cat === 'all' ? PHOTOS : PHOTOS.filter(([c]) => c === cat);

    return (
        <>
            <Hero
                sub
                img="/images/gallery/the-place.jpg"
                alt="The jungle hut where the class takes place"
                tag="Gallery"
                title={<>Moments From <span className="g">Our Family.</span></>}
                lead="The people, the place and the simple moments we share at Bali Cebelok Gesiuh."
            />

            <section className="panel sec" aria-labelledby="gal-h">
                <span className="tag">A glimpse into our world</span>
                <h2 className="h2" id="gal-h">Simple Moments, <span className="g">Shared With Others.</span></h2>
                <p className="muted">From making coconut oil with our family to sharing a meal and welcoming guests from around the world.</p>
                <div className="filters" role="group" aria-label="Filter photos">
                    {FILTERS.map(([id, label]) => (
                        <button key={id} type="button" aria-pressed={cat === id} onClick={() => setCat(id)}>{label}</button>
                    ))}
                </div>
                <div className="masonry">
                    {shown.map(([, src, alt, cap]) => (
                        <figure key={src}>
                            <img src={`/images/${src}`} alt={alt} loading="lazy" />
                            <figcaption>{cap}</figcaption>
                        </figure>
                    ))}
                </div>
            </section>

            <Band title="Be Part of the Next Photo." text="Classes every day at 10:00 and 14:00, for 1-10 guests.">
                <a className="btn btn-lime" href="/book">Book a class</a>
            </Band>

            <Footer />
        </>
    );
}
