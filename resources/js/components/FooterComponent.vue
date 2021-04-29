<template>
  <v-btn
      absolute
      bottom
      right
      fab
      class="pa-3 ma-3"
      @click="switchTheme"
  >
      <v-icon>mdi-lightbulb</v-icon>
  </v-btn>
</template>
<script>
export default {
    props: ['darkMode'],
    methods: {
        switchTheme: function() {
            this.$emit('changeTheme')
        }
    }
}
</script>