<template>
  <article id=page v-if="!page.loading">
    <!-- <header v-if="$route.name!=='Home'">
      <h1 v-html="page.title.rendered"/>
    </header> -->
    <section v-html="page.content.rendered"/>
  </article>
</template>

<script>
import {mixin as wp} from "$use/wp"

export default {
  name: 'Page',
  mixins: [wp],
  props: {
    posttype: {
      type: String,
      default: 'pages'
    },
    slug: String,
  },
  asyncComputed: {
    page: {
      async get(){
        if( this.wp.loading ) return {loading: true}
        let
        rsp = this.wp[this.posttype]()
        this.slug && (rsp = rsp.slug(this.slug))
        rsp = await rsp.get()
        return rsp.length==1 ? rsp[0] : rsp
      }
    }
  },
}
</script>

<style lang="scss" scoped>
#page {
  margin: 1.5rem 0;
  padding: 0 1.5rem;
}
</style>
