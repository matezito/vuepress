<script>
import HolaMundo from "./components/HolaMundo.vue";
import Routes from "./components/Routes.vue";
export default {
  components: {
    HolaMundo,
    Routes,
  },
  mounted() {
    console.log("App.vue mounted en VuePress");
  },
};
</script>

<template>
  <div class="app-container">
    <Routes />
    <hr />
    <HolaMundo />
  </div>
</template>

<style>
.app-container {
  padding: 20px;
  max-width: 1200px;
  margin: 0 auto;
}
</style>