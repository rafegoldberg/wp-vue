<template>
  <article>
    <h1 v-html="title.rendered"/>
    <section v-html="content.rendered"/>
  </article>
</template>

<script>
/**
 * @todo theming should be moved to app/index, or modularized
 */
export default {
  name: "Experience",
  props:['title', 'content', 'id', 'acf'],
  created(){
    let $app = this.$root.$el
    if( typeof this.acf=='object' && 'colors' in this.acf ){
      $app.style.backgroundColor = this.acf.colors.background
      $app.style.color           = this.acf.colors.text
    } else {
      $app.style.backgroundColor = 'white'
      $app.style.color           = 'inherit'
    }
  },
  mounted(){
    setTimeout(fn=> this.$el.classList.add('-mounted'), 750)
  },
  beforeRouteLeave(to, from, next){
    /* or beforeRouteUpdate if ya want
     * to also account for sub-routing
     */
    let $app = this.$root.$el

    $app.style.backgroundColor = 'white'
    $app.style.color           = 'inherit'
  
    next()
  }
}
</script>

<style lang="scss">
h1 {
  font-weight: 900;
}
figure {
  display: block;
  max-width: 100vw;
  margin: 0 !important;
}
img {
  display: block;
  width: auto;
  height: auto;
  max-width: 100%;
  margin: 0 auto;
}
section {
  img {
    opacity: 0;
    transition: opacity .4s .1s ease-out;
    .-mounted & {
      opacity: 1;
    }
  }
}
</style>
