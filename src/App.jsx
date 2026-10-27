import { useEffect } from 'react';
import Home from './pages/Home.jsx';
import OurStory from './pages/OurStory.jsx';
import Experience from './pages/Experience.jsx';
import Gallery from './pages/Gallery.jsx';
import Book from './pages/Book.jsx';

// shortcut: plain <a> links reload the page; add a client router only if page transitions are wanted.
const ROUTES = {
    '/': [Home, 'Traditional Coconut Oil Class'],
    '/our-story': [OurStory, 'Our Story'],
    '/experience': [Experience, 'The Experience'],
    '/gallery': [Gallery, 'Gallery'],
    '/book': [Book, 'Book a Class'],
};

export default function App() {
    const path = window.location.pathname.replace(/\/$/, '') || '/';
    const [Page, title] = ROUTES[path] ?? ROUTES['/'];

    useEffect(() => {
        document.title = `${title} · Bali Cebelok Gesiuh`;
    }, [title]);

    return (
        <div className="pg">
            <Page />
        </div>
    );
}
