import { Band, Footer, Hero } from '../layout.jsx';

export default function OurStory() {
    return (
        <>
            <Hero
                sub
                img="/images/our-story/the-family.jpg"
                alt="The Cebelok Gesiuh family welcoming guests"
                imgPosition="35% center"
                tag="Our story"
                title={<>A Tradition Passed Down, <span className="g">Generation to Generation.</span></>}
                lead="Behind every bottle of coconut oil is a story of family, tradition and knowledge inherited from our ancestors."
            />

            <section className="panel sec two" aria-labelledby="names-h">
                <img className="photo" style={{ aspectRatio: '4 / 5' }} src="/images/our-story/cebelok-gesiuh.jpg" alt="Our family making coconut oil together" loading="lazy" />
                <div>
                    <span className="tag">Cebelok and Gesiuh</span>
                    <h2 className="h2" id="names-h">The People Behind <span className="g">the Tradition.</span></h2>
                    <p className="muted">Cebelok and Gesiuh are the names of our ancestors, who passed down the knowledge of making traditional coconut oil to our family.</p>
                    <p className="muted">They taught us a simple, traditional way of making it: start with the coconut itself, and let its natural qualities become something useful for everyday life.</p>
                    <p className="muted">In honour of that heritage, we chose their names for our experience: Bali Cebelok Gesiuh.</p>
                </div>
            </section>

            <section className="panel sec two flip" aria-labelledby="heritage-h">
                <div>
                    <span className="tag">Our heritage</span>
                    <h2 className="h2" id="heritage-h">More Than Coconut Oil. <span className="g">A Tradition Worth Keeping.</span></h2>
                    <p className="muted">For our family, making coconut oil is not only about a useful product. It is about keeping alive a way of doing things passed down through generations.</p>
                    <p className="muted">The process stays simple. Fresh coconuts are prepared by hand, turned into coconut milk, and slowly cooked until the oil separates on its own.</p>
                </div>
                <img className="photo" style={{ aspectRatio: '5 / 4' }} src="/images/home/our-story-coconut-making.jpg" alt="Coconut milk cooking down in a traditional pan" loading="lazy" />
            </section>

            <section className="panel sec" aria-labelledby="time-h">
                <span className="tag">The beginning</span>
                <h2 className="h2" id="time-h">Opening Our Kitchen <span className="g">to Guests.</span></h2>
                <p className="muted">We believe a tradition means more when it is shared. So we invite guests to learn the process and take part in it with us.</p>
                <div className="grid2" style={{ marginTop: 36 }}>
                    <div className="box">
                        <p className="year">2020</p>
                        <h3>Sharing the tradition</h3>
                        <p>We opened our first coconut oil class, welcoming visitors into our family setting to take part in the process themselves.</p>
                    </div>
                    <div className="box">
                        <p className="year">Today</p>
                        <h3>Keeping it alive</h3>
                        <p>The class is still guided by our family, sharing the knowledge, stories and traditions passed from one generation to the next.</p>
                    </div>
                </div>
            </section>

            <section className="panel sec two" aria-labelledby="family-h">
                <img className="photo" style={{ aspectRatio: '1' }} src="/images/our-story/bumbum-sri.jpg" alt="I Made Bumbum and Sri" loading="lazy" />
                <div>
                    <span className="tag">The family</span>
                    <h2 className="h2" id="family-h">Made Together, <span className="g">Shared Together.</span></h2>
                    <p className="muted">The heart of Bali Cebelok Gesiuh is a family that keeps sharing this tradition with warmth, care and a personal touch.</p>
                    <div className="grid2" style={{ marginTop: 28 }}>
                        <div className="box"><h3>I Made Bumbum</h3><p>Owner. He runs the kitchen and walks you through every step.</p></div>
                        <div className="box"><h3>Sri</h3><p>Host. She welcomes every guest and guides you through the class.</p></div>
                    </div>
                </div>
            </section>

            <Band title="Learn It With Our Family." text="A 2-3 hour class, every day at 10:00 and 14:00. Rp250.000 per person.">
                <a className="btn btn-lime" href="/book">Book a class</a>
                <a className="btn btn-white" href="/experience">See the six steps</a>
            </Band>

            <Footer />
        </>
    );
}
