<template>
  <h1>{{text}}</h1>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    text: {type: String, default: "👋🌍"},
  }
}
</script>

<style scoped lang="scss">
h1 {
  color: #42b983;
  text-align: center;
  margin-top: calc(50vh - .5em);
}
</style>
