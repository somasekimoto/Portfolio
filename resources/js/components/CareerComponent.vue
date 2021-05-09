<template>
  <v-card>
    <v-container>
      <h3>
        {{career.position}} @
        <a :href="career.url" target="_blank" rel="noopener">{{career.place}}</a>
      </h3>
      <v-card-subtitle>{{career.since}} ~ {{career.until}}</v-card-subtitle>
      <v-card-text>{{career.skills.join(', ')}}</v-card-text>
    </v-container>
  </v-card>
</template>
<script>
export default {
  props: ["career"]
};
</script>
