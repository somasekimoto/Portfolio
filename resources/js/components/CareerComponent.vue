<template>
  <v-card class="rounded-lg">
    <v-container>
      <h3>
        <v-icon>mdi-office-building</v-icon>
        {{career.position}} @
        <a :href="career.url" target="_blank" rel="noopener">{{career.place}}</a>
      </h3>
      <v-card-subtitle>
        <v-icon>mdi-calendar-clock</v-icon>
        {{career.since}} ~ {{career.until}}
      </v-card-subtitle>
      <v-card-text>
        <v-icon>mdi-arm-flex</v-icon>
        {{career.skills.join(', ')}}
      </v-card-text>
    </v-container>
  </v-card>
</template>
<script>
export default {
  props: ["career"]
};
</script>
