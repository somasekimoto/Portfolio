<template>
    <v-container class="text-center py-16 my-16">
        <h1>
            <v-icon large class="mx-2">{{
                icons.mdiFolderStarMultiple
            }}</v-icon>
            Works
        </h1>
        <div style="height: 50px;">
            <v-divider class="my-8" horizontal></v-divider>
        </div>
        <v-row>
            <template v-for="work in works">
                <v-col sm="12" md="6" lg="3">
                    <work-component :work="work"></work-component>
                </v-col>
            </template>
        </v-row>
    </v-container>
</template>
<script>
import { mdiFolderStarMultiple } from "@mdi/js";
export default {
    props: ["works"],
    computed: {},
    data: () => ({
        icons: { mdiFolderStarMultiple }
    })
};
</script>
