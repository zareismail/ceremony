Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'ceremony',
      path: '/ceremony',
      component: require('./components/Tool'),
    },
  ])
})
