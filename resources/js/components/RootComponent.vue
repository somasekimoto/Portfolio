<template>
    <div>
        <header-component v-if="!isSmall" :darkMode="darkMode" @changeTheme="changeTheme"></header-component>
        <body-component></body-component>
        <footer-component v-if="isSmall" :darkMode="darkMode" @changeTheme="changeTheme" ></footer-component>
    </div>
</template>
<script>
export default {
    data: () => ({
        hidden: false,
        darkMode: false,
    }),
    created(){
        this.darkMode = this.$vuetify.theme.dark;
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
        }
    }
};
</script>
