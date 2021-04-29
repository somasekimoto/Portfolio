<template>
    <v-app-bar>
        <v-toolbar-title>
            Soma Sekimoto
        </v-toolbar-title>
        <v-app-bar-nav-icon>
            <v-avatar size="36px">
                <img alt="icon" :src="iconImg" />
            </v-avatar>
        </v-app-bar-nav-icon>
        <v-spacer></v-spacer>
        <v-switch
            @click="switchTheme"
            :value="darkMode"
            inset
            hide-details
        ></v-switch>
    </v-app-bar>
</template>
<script>
export default {
    props: ["darkMode", "iconImg"],
    methods: {
        switchTheme: function() {
            this.$emit('changeTheme')
        }
    }
};
</script>
