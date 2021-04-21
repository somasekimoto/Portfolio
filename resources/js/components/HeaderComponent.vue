<template>
    <v-app-bar color="gray accent-4">
        <v-app-bar-nav-icon>
            <v-avatar size="36px">
                <img alt="SS" :src="iconImg" />
                <v-icon></v-icon>
            </v-avatar>
        </v-app-bar-nav-icon>
        <v-toolbar-title>
            Soma's Portfolio
        </v-toolbar-title>
        <v-spacer></v-spacer>
        <v-switch
            @click="switchTheme"
            :label="darkMode ? 'Dark' : 'Light'"
            :value="darkMode"
            inset
        ></v-switch>
    </v-app-bar>
</template>
<script>
export default {
    data: () => ({
        iconImg: null,
        darkMode: false
    }),
    created() {
        this.setIcon();
        this.darkMode = this.$vuetify.theme.dark;
    },
    methods: {
        setIcon: function() {
            axios
                .get("/presignedIconUrl")
                .then(
                    function(res) {
                        this.iconImg = res.data.url;
                    }.bind(this)
                )
                .catch(
                    function(err) {
                        console.log(err);
                    }.bind(this)
                );
        },
        switchTheme: function() {
            this.darkMode = !this.darkMode;
            this.$vuetify.theme.dark = this.darkMode;
        }
    }
};
</script>
