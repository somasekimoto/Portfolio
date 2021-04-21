<template>
    <v-main>
        <v-card>
            <v-card-subtitle>Component</v-card-subtitle>

            <v-card-text>
                I'm an example componen
            </v-card-text>
            <home-component></home-component>
        </v-card>
    </v-main>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
