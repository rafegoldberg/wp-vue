export default [
  {
    path: '/home',
    name: 'Home',
    component:()=> import(/*webpackChunkName: "page"*/ '@/views/Page'),
    props: {default: false, slug: 'home'},
    alias: "/"
  },
  {
    path: '/projects',
    name: 'Projects',
    component:()=> import(/*webpackChunkName: "projects"*/ '@/views/Projects'),
    props: {default: false, posttype: 'projects'},
    children: [
      {
        path: ':slug',
        component:()=> import(/*webpackChunkName: "experience"*/ '@/components/exp'),
      }
    ]
  },
  {
    path: '/:slug?',
    name: 'Page',
    component:()=> import(/*webpackChunkName: "page"*/ '@/views/Page'),
    props: true,
  },
]