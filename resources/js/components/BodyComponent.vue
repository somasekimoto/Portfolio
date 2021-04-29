<template>
    <v-main>
        <home-component></home-component>
        <router-view></router-view>
    </v-main>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
