<template>
  <div :class="bem()">
    <div :class="bem('list')" :open="'slug' in $route.params ? false : true">
      <h2>Projects</h2>
      <ul v-if="!page.loading">
        <li v-for="proj in page" :key="proj.id">
          <router-link :to="['',proj.type,proj.slug].join('/')" class="proj-link">
            {{proj.title.rendered}}
          </router-link>
        </li>
      </ul>
    </div>
    <router-view :class="bem('main')" v-if="!page.loading && 'slug' in $route.params" v-bind="getPage" :key="getPage.id"/>
  </div>
</template>

<script>
import Page from "./Page"
import find from "lodash/find"

export default {
  extends: Page,
  name: "Projects",
  methods: {find},
  computed: {
    getPage( key=false ){
      let
      page = find(this.page, {slug: this.$route.params.slug})

      if( key )
        return key in page ? page[key] : page

      return page
    }
  },
}
</script>

<style scoped lang="scss">
.Projects {
  h2 {
    font-weight: 500;
  }
  & {
    position: relative;
    display: inline-flex;
    max-width: 100vw;
  }
  > * {
    margin: 1.5rem 0;
    padding: 0 1.5rem;
  }
  >:first-child { margin-left:  0 }
  >:last-child  { margin-right: 0 }
  >:only-child  { margin-left:  0 ;
                  margin-right: 0 }
  &-list {
    position: sticky;
    top: 0;
    flex: 0 25vw;
    max-height: 100vh;
    white-space: nowrap;
    margin: 1.5rem 0;
    a {
      display: block;
      padding: 0.375rem .75rem;
    }
    @media (max-width: 835px) {
      &:not([open]) {
        display: none;
      }
    }
  }
  &-main {
  }
}
</style>