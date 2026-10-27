import { useState } from 'react';
import { Footer, Hero, Icon, MAPS_URL, STEPS, WA_SRI } from '../layout.jsx';

const PER = 3;

const TALL = [
    ['hand', 'Hands on, every step', 'Crack, grate, press and cook the coconut yourself.', '/images/experience/02-grate-coconut.jpg', 'Grating coconut by hand'],
    ['home', 'A real family home', 'Bumbum runs the kitchen, Sri welcomes every guest.', '/images/our-story/cebelok-gesiuh.jpg', 'Our family making coconut oil together'],
    ['leaf', 'In the jungle', 'A calm hut surrounded by greenery.', '/images/gallery/the-place.jpg', 'The jungle hut where the class takes place'],
];

const INCLUDED = ['30 ml of your own oil', 'Coconut cream', 'Coconut scrub', 'Recipe guide', 'Lunch and drinks', 'Arak and tuak tasting', 'Canang offering making'];

export default function Home() {
    const [start, setStart] = useState(0);
    const atEnd = start + PER >= STEPS.length;

    return (
        <>
            <Hero
                img="/images/gallery/jungle-view.jpg"
                alt="The jungle around our family kitchen in Bali"
                tag={<><Icon name="leaf" size={14} width={2} />A family tradition since 2020</>}
                title={<>Pure Coconut Oil, <span className="g">Made by Hand.</span></>}
                lead="Join our family in a traditional Balinese kitchen and turn a fresh coconut into pure oil, step by step."
                after={
                    <div className="stats">
                        <div className="stat"><b>2020</b><span>Family run since</span></div>
                        <div className="stat"><b>2-3 hrs</b><span>Per class</span></div>
                        <div className="stat"><b>1-10</b><span>Guests per class</span></div>
                        <div className="stat"><b>Daily</b><span>10:00 and 14:00</span></div>
                    </div>
                }
            >
                <div className="acts">
                    <a className="btn btn-green" href="/book">Book a class <Icon name="arrowRight" size={16} width={2} /></a>
                    <a className="btn btn-white" href="/experience">See the six steps</a>
                </div>
                <div className="hosts">
                    <img src="/images/our-story/bumbum-sri.jpg" alt="" width="44" height="44" />
                    <p><b>Hosted by I Made Bumbum and Sri</b>In their own family home.</p>
                </div>
            </Hero>

            <section className="panel sec two-4" aria-labelledby="class-h">
                <div>
                    <span className="tag">The class</span>
                    <h2 className="h2" id="class-h">A Morning in Our <span className="g">Family</span> Kitchen.</h2>
                    <p className="muted">Our ancestors Cebelok and Gesiuh taught us how to make oil from a fresh coconut. Today we teach it to you, by hand, the same way.</p>
                    <div className="acts">
                        <a className="btn btn-green" href="/experience">How the class works</a>
                        <a className="btn btn-white" href="/our-story">Our story</a>
                    </div>
                </div>
                <div className="tall">
                    {TALL.map(([icon, title, text, img, alt]) => (
                        <div key={title} className="tc">
                            <img src={img} alt={alt} loading="lazy" />
                            <div className="tc-body">
                                <div className="tc-ic"><Icon name={icon} /></div>
                                <h3>{title}</h3>
                                <p>{text}</p>
                            </div>
                        </div>
                    ))}
                </div>
            </section>

            <section className="strip" aria-label="Guest reviews">
                <p className="strip-h">From Google reviews</p>
                <figure><blockquote>“Very hands on and fun.”</blockquote><figcaption>Kathy Dong</figcaption></figure>
                <figure><blockquote>“He walked us through the entire process.”</blockquote><figcaption>Jin Ting Tan</figcaption></figure>
                <figure>
                    <blockquote lang="ko">“호스트 본본 아저씨 엄청 친절하시고 재밌어요.”</blockquote>
                    <figcaption>Oh-yeong Kwon, <a href={MAPS_URL} target="_blank" rel="noopener noreferrer">all reviews</a></figcaption>
                </figure>
            </section>

            <section className="panel steps-wrap" aria-labelledby="steps-h">
                <div>
                    <div className="steps-top">
                        <span className="tag">Six steps</span>
                        <div className="arrows">
                            <button type="button" className="arrow" aria-label="Previous step" disabled={start === 0} onClick={() => setStart(start - 1)}><Icon name="arrowLeft" size={18} width={2} /></button>
                            <button type="button" className="arrow" aria-label="Next step" disabled={atEnd} onClick={() => setStart(start + 1)}><Icon name="arrowRight" size={18} width={2} /></button>
                        </div>
                    </div>
                    <ol className="cards" aria-live="polite">
                        {STEPS.slice(start, start + PER).map((s) => (
                            <li key={s.n} className="sc">
                                <div className="sc-img"><img src={s.img} alt={s.title} loading="lazy" /><span className="pill">Step {s.n}</span></div>
                                <h3>{s.title}</h3>
                                <p>{s.short}</p>
                            </li>
                        ))}
                    </ol>
                </div>
                <div className="side">
                    <div>
                        <h2 className="h2" id="steps-h" style={{ marginTop: 0 }}>From Coconut to Oil, <span className="g">in Six Steps.</span></h2>
                        <p className="muted">You do every step alongside our family. The whole class takes 2-3 hours.</p>
                    </div>
                    <div className="soft">
                        <h3>Book your class</h3>
                        <p>Send your date, class time and number of guests on WhatsApp. Book at least one day ahead.</p>
                        <p className="price">Rp250.000<span>per person</span></p>
                        <div className="acts">
                            <a className="btn btn-green" href={WA_SRI} target="_blank" rel="noopener noreferrer">WhatsApp Sri</a>
                            <a className="btn btn-white" href="/book">Booking details</a>
                        </div>
                    </div>
                </div>
            </section>

            <section className="panel sec two" aria-labelledby="inc-h">
                <img className="photo" style={{ aspectRatio: '4 / 3' }} src="/images/experience/oils.jpg" alt="Bottles of finished coconut oil" loading="lazy" />
                <div>
                    <span className="tag">Included</span>
                    <h2 className="h2" id="inc-h">More Than <span className="g">a Class.</span></h2>
                    <ul className="chips">
                        {INCLUDED.map((it) => <li key={it} className="chip"><Icon name="check" size={16} width={2.2} className="ck" />{it}</li>)}
                    </ul>
                    <div className="acts"><a className="btn btn-white" href="/book">See what's included</a></div>
                </div>
            </section>

            <Footer />
        </>
    );
}
