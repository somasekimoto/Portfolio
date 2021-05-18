<template>
    <v-speed-dial
        v-model="fab"
        fixed
        bottom
        right
        :direction="direction"
        :transition="transition"
    >
        <template v-slot:activator>
            <v-btn v-model="fab" fab>
                <v-icon v-if="fab">{{ icons.mdiClose }}</v-icon>
                <v-icon v-else>{{ icons.mdiAccountCircle }}</v-icon>
            </v-btn>
        </template>
        <template v-for="comp in fabComps">
            <router-link :to="comp.path">
                <v-tooltip v-model="showTooltip" left>
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn fab small>
                            <v-icon>{{ icons[comp.icon] }}</v-icon>
                        </v-btn>
                    </template>
                    <small>{{ comp.tipText }}</small>
                </v-tooltip>
            </router-link>
        </template>
        <v-btn fab small @click="switchTheme">
            <v-icon>{{ icons.mdiLightbulb }}</v-icon>
        </v-btn>
    </v-speed-dial>
</template>
<script>
import {
    mdiClose,
    mdiLightbulb,
    mdiHome,
    mdiFolderStarMultiple,
    mdiOfficeBuilding,
    mdiArmFlex,
    mdiAccountCircle
} from "@mdi/js";
export default {
    props: ["darkMode"],
    data: () => ({
        icons: {
            mdiClose,
            mdiLightbulb,
            mdiHome,
            mdiFolderStarMultiple,
            mdiOfficeBuilding,
            mdiArmFlex,
            mdiAccountCircle
        },
        direction: "top",
        transition: "slide-y-reverse-transition",
        fab: false,
        showTooltip: true,
        fabComps: [
            {
                path: "/",
                icon: "mdiHome",
                tipText: "Home"
            },
            {
                path: "/works",
                icon: "mdiFolderStarMultiple",
                tipText: "Works"
            },
            {
                path: "/careers",
                icon: "mdiOfficeBuilding",
                tipText: "Careers"
            },
            {
                path: "/skills",
                icon: "mdiArmFlex",
                tipText: "Skills"
            }
        ]
    }),
    methods: {
        switchTheme: function() {
            this.$emit("changeTheme");
        }
    }
};
</script>
