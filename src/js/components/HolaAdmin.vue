<script>
    export default {
      data() {
          return { message: 'Hola desde componente admin' }
      },
      mounted: function() {
          console.log('Admin.vue mounted en VuePress');
      }
    }
</script>
<template>
    <h3>{{message}}</h3>
</template>