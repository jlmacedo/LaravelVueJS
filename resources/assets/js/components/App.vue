<template>
    <div id="app">
        <home-name v-for="home in 5" :key="home"></home-name>
    </div>
</template>

<script>
    import Home from './Home.vue';

    export default {
        name: "app",
        components:
        {
            'home-name': Home
        }
    }
</script>

<style scoped>

</style>