import Home from '../Views/Home';
import About from '../Views/About';
import Contact from '../Views/Contact';

import NewPost from '../Views/notes/Create';
import TableOfNote from '../Views/notes/Table'


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
        },


        // notes
        {
            path: '/notes/create',
            name: 'notes.create',
            component: NewPost
        },
        {
            path: '/notes/table',
            name: 'notes.table',
            component: TableOfNote
        }


    ]
}