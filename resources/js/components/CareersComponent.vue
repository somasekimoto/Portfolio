<template>
  <v-container class="text-center py-16 my-16">
    <h1>
      <v-icon large class="mx-2">mdi-office-building</v-icon>Careers
    </h1>
    <div style="height: 50px;">
      <v-divider class="my-8" horizontal></v-divider>
    </div>
    <v-timeline :dense="isSmall" align-top>
      <v-timeline-item v-for="(career, index) in careers" :key="index">
        <career-component :career="career"></career-component>
      </v-timeline-item>
    </v-timeline>
  </v-container>
</template>
<script>
export default {
  props: ["careers", "isSmall"]
};
</script>
