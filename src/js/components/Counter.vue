<script>
export default {
  data() {
    return {
      count: 0
    }
  },
  methods: {
    increment() {
      this.count++
    }
  }
}
</script>

<template>
<h4>Counter Component</h4>
  <button @click="increment">count is: {{ count }}</button>
</template>