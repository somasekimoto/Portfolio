<template>
    <v-card class="rounded-lg">
        <v-container>
            <h3>
                <v-icon>{{ icons.mdiOfficeBuilding }}</v-icon>
                {{ career.position }} @
                <a :href="career.url" target="_blank" rel="noopener">{{
                    career.place
                }}</a>
            </h3>
            <v-card-subtitle>
                <v-icon>{{ icons.mdiCalendarClock }}</v-icon>
                {{ career.since }} ~ {{ career.until }}
            </v-card-subtitle>
            <v-card-text>
                <v-icon>{{ icons.mdiArmFlex }}</v-icon>
                {{ career.skills.join(", ") }}
            </v-card-text>
        </v-container>
    </v-card>
</template>
<script>
import { mdiOfficeBuilding, mdiCalendarClock, mdiArmFlex } from "@mdi/js";
export default {
    props: ["career"],
    data: () => ({
        icons: { mdiCalendarClock, mdiArmFlex }
    })
};
</script>
