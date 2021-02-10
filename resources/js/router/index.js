import Home from '../Views/Home';
import About from '../Views/About';
import Contact from '../Views/Contact';


export default {
    mode: 'history',
    linkActiveClass: 'active', //class active link

    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'page.about',
            component: About
        },
        {
            path: '/contact',
            name: 'page.contact',
            component: Contact
        }

    ]
}