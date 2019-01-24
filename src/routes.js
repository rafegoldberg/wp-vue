export default [
  {
    path: '/about',
    name: 'about',
    component:()=> import(/*webpackChunkName: "about"*/ '@/views/About')
  },
  {
    path: '/*',
    name: 'home',
    component:()=> import(/*webpackChunkName: "home"*/ '@/views/Home')
  },
]