<template>
  <div v-if="!pages.loading" :class="bem()">
    <router-view :class="bem('out')"/>
    <ul :class="bem('nav')">
      <li v-for="(p) in pages" :key="p.id" :class="bem('nav-item')" v-if="p.slug!=='home'">
        <router-link :to="`/${p.slug}`">
          {{p.title.rendered}}
        </router-link>
      </li>
    </ul>
  </div>
</template>

<script>
import {mixin as wp} from "$use/wp"

export default {
  name: 'App',
  mixins: [wp],
  asyncComputed: {
    pages: {
      async get(){
        if( this.wp.loading ) return {loading: true}
        let
        rsp = await this.wp.pages().get()
        return rsp
      },
    }
  },
}
</script>

<style lang="scss">
@import url("//use.typekit.net/uko7iww.css");
@import url("//cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic.min.css");

:root {
  --max: 48em;
}

* {
  box-sizing: border-box;
}

html, body {
  padding: 0;
  margin: 0;
  line-height: 2;
}
body {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}

article {
  width: var(--max);
  max-width: 100%;
}

a {
  color: inherit;
  text-decoration: none;
  p > & {
    text-decoration: underline;
  }
}
.router-link-active {
  font-weight: bold;
}

hr {
  border-width: .98px 0 0;
  border-style: solid;
  border-color: #dddddd;
}

h1, h2, h3, h4, h5, h6 {
  font-family: factoria;
  font-weight: 600;
  letter-spacing: .063em;
  margin: 1rem 0;
  padding: .5rem 0;
  line-height: 1rem;  
}

ul, ol {
  margin: 0;
  padding: 0;
}

table {
  article &,
  section & {
    width: 100%;
  }
  & + & {
    margin-top: 1.5rem;
  }
  thead {
    background-color: rgba(0,0,0,.05);
  }
  
  td, th {
    padding: .125em .375em;
    &:last-child:not(:only-child) {
      text-align: right;
    }
  }
  th {
    font-family: factoria;
    letter-spacing: .063em;
    vertical-align: middle;
    font-weight: 900;
    // font-style: italic;
    text-align: left;
    text-transform: lowercase;
  }
  td {
    vertical-align: top;
    line-height: 1.25;
    padding: .5em .375em;
    &:first-child {
      text-transform: lowercase;
      font-style: italic;
    }
  }
}

blockquote {
  margin: 0 0 0 1rem;
  padding: 0 0 0 1.5rem;
  border-left: 3px solid;
}
</style>

<style lang="scss" scoped>
.App {
  & {
    display: flex;
    flex-flow: nowrap column;
    min-height: 100vh;
    background: #fff;
    transition: .6s ease-in-out;
    transition-delay: .15s;
    * {
      transition-delay: 0s;
    }
    /deep/ >:first-child {
      margin-top: auto !important;
      margin-bottom: auto !important;
    }
  }
  &-out {
    display: inline-block;
    margin-left: auto !important;
    margin-right: auto !important;
  }
  &-nav {
    & {
      position: sticky;
      bottom: 0;

      display: block;
      margin: 0 1.5rem;
      padding: .75rem 0;

      text-align: center;
      border-top: .98px solid;
      background: inherit;

      a {
        transition: .3s ease-out;
        &:not(:hover):not(.router-link-active) { opacity: 0.5; }
      }
    }
    &-item {
      display: inline-flex;
      justify-content: flex-start;
      align-items: center;
      text-transform: lowercase;
      font-style: italic;
      & + &:before {
        content: '/';
        display: inline-block;
        margin: 0 1.5rem;
        opacity: 0.38;
      }
      a {
        text-decoration: none;
      }
    }
  }
}
</style>
