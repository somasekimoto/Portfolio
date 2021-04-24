<template>
    <v-main>
        <v-card>
            <v-card-subtitle>Component</v-card-subtitle>

            <v-card-text>
                I'm an example componen
            </v-card-text>
        </v-card>
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
