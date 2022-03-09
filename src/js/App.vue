<script>
    import HolaMundo from './components/HolaMundo.vue';

    export default {
        components: {
            HolaMundo
        },
        mounted() {
            console.log('App.vue mounted en VuePress');
        }
    }
</script>

<template>
    <div class="app-container">
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