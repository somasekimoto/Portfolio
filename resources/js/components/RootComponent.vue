<template>
    <div :style="{background: $vuetify.theme.themes[theme].background}">
        <header-component v-if="!isSmall" :darkMode="darkMode" :iconImg="iconImg" @changeTheme="changeTheme"></header-component>
        <body-component :iconImg="iconImg"></body-component>
        <footer-component v-if="isSmall" :darkMode="darkMode" @changeTheme="changeTheme" ></footer-component>
    </div>
</template>
<script>
export default {
    data: () => ({
        hidden: false,
        darkMode: false,
        iconImg: null,
    }),
    created(){
        this.darkMode = this.$vuetify.theme.dark;
        this.setIcon();
    },
    computed: {
        theme: function(){
            return this.$vuetify.theme.dark ? "dark": "light"
        },
        isSmall: function(){
            return ['xs', 'sm'].includes(this.$vuetify.breakpoint.name)
        },
    },
    methods: {
        changeTheme: function() {
            this.darkMode = !this.darkMode;
            this.$vuetify.theme.dark = this.darkMode;
        },
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
    }
};
</script>
