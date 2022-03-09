<script>
export default {
  data() {
    return {
      awesome: true
    }
  },
  methods: {
    toggle() {
      this.awesome = !this.awesome
    }
  }
}
</script>

<template>
 <h4>Toogle Component</h4>
  <button @click="toggle">toggle</button>
  <h3 v-if="awesome">Vue is awesome!</h3>
  <h3 v-else>Oh no 😢</h3>
</template>