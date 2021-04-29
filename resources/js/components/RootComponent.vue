<template>
    <div>
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
