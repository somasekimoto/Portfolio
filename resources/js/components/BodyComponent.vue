<template>
    <v-main>
        <home-component :iconImg="iconImg"></home-component>
        <router-view></router-view>
    </v-main>
</template>

<script>
export default {
    props: ["iconImg"],
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
