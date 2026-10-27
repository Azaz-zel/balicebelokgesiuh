import { Band, Footer, Hero, Icon, WA_BUMBUM, WA_SRI } from '../layout.jsx';

const DETAILS = [
    ['Open', 'Every day'],
    ['Morning class', '10:00'],
    ['Afternoon class', '14:00'],
    ['Duration', '2-3 hours'],
    ['Group size', '1-10 guests'],
    ['Book ahead', 'At least 1 day'],
];

const INCLUDED = [
    ['30 ml of coconut oil', 'Take home a bottle of the oil you made during the class.'],
    ['Coconut cream', 'The natural cream left from the oil-making process.'],
    ['Coconut scrub', 'The leftover pulp, ready to use as a natural scrub.'],
    ['Lunch and drinks', 'Lunch and refreshments during your class.'],
    ['Traditional drinks', 'Taste coconut-based drinks, including arak and tuak.'],
    ['Recipe guide', 'A guidebook so you can make the oil again at home.'],
    ['Canang making', 'Make canang, the Balinese offering used in daily Hindu prayer.'],
];

const HOW = [
    ['Send your details', 'Tell us your preferred date, time and number of guests on WhatsApp.'],
    ['Wait for confirmation', 'Our family checks availability and confirms the class with you directly.'],
    ['Come and cook', 'Once confirmed, come to Bali Cebelok Gesiuh and enjoy the class with us.'],
];

export default function Book() {
    return (
        <>
            <Hero
                sub
                img="/images/experience/oils.jpg"
                alt="Bottles of finished coconut oil"
                tag="Book your experience"
                title={<>Come Experience <span className="g">the Tradition.</span></>}
                lead="Join our family in a traditional kitchen and learn how a coconut becomes pure coconut oil."
            >
                <div className="acts">
                    <a className="btn btn-green" href="#whatsapp">Book on WhatsApp</a>
                    <a className="btn btn-white" href="#included">What's included</a>
                </div>
            </Hero>

            <section className="panel sec two-4" aria-labelledby="info-h">
                <div>
                    <span className="tag">Class information</span>
                    <h2 className="h2" id="info-h">Traditional Coconut Oil <span className="g">Experience.</span></h2>
                    <p className="price" style={{ fontSize: 40 }}>Rp250.000<span>per person</span></p>
                </div>
                <div className="soft">
                    <h3>Everything you need for a hands-on class with our family.</h3>
                    <dl className="info">
                        {DETAILS.map(([k, v]) => <div key={k}><dt>{k}</dt><dd>{v}</dd></div>)}
                    </dl>
                </div>
            </section>

            <section className="panel sec" id="included" aria-labelledby="inc-h">
                <span className="tag">What's included</span>
                <h2 className="h2" id="inc-h">Your Experience <span className="g">Includes.</span></h2>
                <ul className="grid-auto">
                    {INCLUDED.map(([t, d]) => (
                        <li key={t} className="box box-check">
                            <Icon name="check" width={2.2} className="ck" />
                            <div><h3>{t}</h3><p>{d}</p></div>
                        </li>
                    ))}
                </ul>
            </section>

            <section className="panel sec" aria-labelledby="how-h">
                <span className="tag">How to book</span>
                <h2 className="h2" id="how-h">Simple Booking, <span className="g">Personal Experience.</span></h2>
                <p className="muted">Booking is handled directly by our family.</p>
                <ol className="grid3">
                    {HOW.map(([t, d], i) => (
                        <li key={t} className="box"><div className="num">{i + 1}</div><h3>{t}</h3><p>{d}</p></li>
                    ))}
                </ol>
            </section>

            <Band id="whatsapp" title="Talk to Our Family Directly." text="Send your preferred date, time and number of guests, and we will help you plan the class.">
                <a className="btn btn-lime" href={WA_SRI} target="_blank" rel="noopener noreferrer">WhatsApp Sri</a>
                <a className="btn btn-white" href={WA_BUMBUM} target="_blank" rel="noopener noreferrer">WhatsApp Bumbum</a>
            </Band>

            <Footer />
        </>
    );
}
