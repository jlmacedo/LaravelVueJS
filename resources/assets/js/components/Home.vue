<template>
    <div>
        <h3>Home Page</h3>
        <hr>
        <p>Name: {{ name }}</p>
        <button @click="changeName()">Change</button>
        <hr>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "home",
        data: function()
        {
            return {
                name: 'José Luis Macedo'
            };
        },
        methods:
        {
            changeName()
            {
                axios.post('change-name',{ name: this.name})
                    .then(response => { this.name = response.data.name })
                    .catch(e => { this.errors.push(e)});
            }
        }
    }
</script>

<style scoped>

</style>