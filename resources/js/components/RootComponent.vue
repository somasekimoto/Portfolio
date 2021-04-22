<template>
    <div>
        <template v-if="!['xs', 'sm'].includes(displaySize) ">
            <header-component></header-component>
        </template>
        <body-component></body-component>
    </div>
</template>
<script>
export default {
    computed: {
        displaySize: function(){
            return this.$vuetify.breakpoint.name
        }
    },
};
</script>
