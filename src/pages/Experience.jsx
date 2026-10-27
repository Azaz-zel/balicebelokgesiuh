import { Band, Footer, Hero, MAPS_URL, STEPS } from '../layout.jsx';

export default function Experience() {
    return (
        <>
            <Hero
                img="/images/experience/02-grate-coconut.jpg"
                alt="Grating fresh coconut by hand"
                tag="Experience"
                title={<>Make It Yourself, <span className="g">From Coconut to Oil.</span></>}
                lead="Step into our family's traditional process and do every step with your own hands."
                after={
                    <div className="stats">
                        <div className="stat"><b>2-3 hrs</b><span>Per class</span></div>
                        <div className="stat"><b>1-10</b><span>Guests per class</span></div>
                        <div className="stat"><b>10:00</b><span>Morning class</span></div>
                        <div className="stat"><b>14:00</b><span>Afternoon class</span></div>
                    </div>
                }
            >
                <div className="acts">
                    <a className="btn btn-green" href="/book">Book a class</a>
                    <a className="btn btn-white" href="#six">See the six steps</a>
                </div>
            </Hero>

            <section className="panel sec two" aria-labelledby="ov-h">
                <img className="photo" style={{ aspectRatio: '4 / 5' }} src="/images/experience/03-extract-coconut-milk.jpg" alt="Pressing grated coconut into milk" loading="lazy" />
                <div>
                    <span className="tag">A hands-on tradition</span>
                    <h2 className="h2" id="ov-h">Don't Just Watch. <span className="g">Make It Yourself.</span></h2>
                    <p className="muted">You will not simply watch someone make coconut oil. You take part in the traditional process yourself.</p>
                    <p className="muted">Together with our family you prepare the coconut, make the coconut milk, cook it, and watch the oil slowly separate from the mixture.</p>
                </div>
            </section>

            <section className="panel sec" id="six" aria-labelledby="six-h">
                <span className="tag">The process</span>
                <h2 className="h2" id="six-h">Six Steps, <span className="g">One Tradition.</span></h2>
                <p className="muted">From fresh coconut to finished oil, each step follows the traditional process, done alongside our family.</p>
                <ol className="grid3">
                    {STEPS.map((s) => (
                        <li key={s.n} className="sc">
                            <div className="sc-img"><img src={s.img} alt={s.title} loading="lazy" /><span className="pill">Step {s.n}</span></div>
                            <h3>{s.title}</h3>
                            <p>{s.text}</p>
                        </li>
                    ))}
                </ol>
            </section>

            <section className="panel sec two flip" aria-labelledby="rev-h">
                <div>
                    <span className="tag">Guest experiences</span>
                    <h2 className="h2" id="rev-h" style={{ marginBottom: 28 }}>They Made It <span className="g">Themselves.</span></h2>
                    <figure>
                        <blockquote className="big-q">“Boomboom and family were very warm and welcoming. He walked us through the entire process, from cracking the coconut to extracting the coconut oil.”</blockquote>
                        <figcaption className="cap"><b>Jin Ting Tan</b>, Google review, 5.0</figcaption>
                    </figure>
                    <div className="acts"><a className="btn btn-white" href={MAPS_URL} target="_blank" rel="noopener noreferrer">Read all reviews on Google</a></div>
                </div>
                <img className="photo" style={{ aspectRatio: '1' }} src="/images/gallery/the-place.jpg" alt="The jungle hut where the class takes place" loading="lazy" />
            </section>

            <Band title="Ready to Make Your Own?" text="Rp250.000 per person, lunch and your own 30 ml bottle included.">
                <a className="btn btn-lime" href="/book">Book a class</a>
            </Band>

            <Footer />
        </>
    );
}
