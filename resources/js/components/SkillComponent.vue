<template>
  <v-card elevation="9" class="rounded-lg">
    <v-container>
      <v-card-title>
        <v-icon large>mdi-code-tags</v-icon>
        {{skill.name}}
      </v-card-title>
      <v-card-subtitle>{{skill.details.join(', ')}}</v-card-subtitle>
      <v-card-text>
        <v-icon>mdi-calendar-clock</v-icon>
        {{years}}{{months}}
      </v-card-text>
      <v-rating
        v-model="skill.level"
        :full-icon="fullIcon"
        :half-icon="halfIcon"
        half-increments
        large
        dense
        readonly
      ></v-rating>
    </v-container>
  </v-card>
</template>
<script>
export default {
  props: ["skill"],
  computed: {
    years: function() {
      let nums = Math.floor(this.skill.experience / 12);
      let unit = nums == 1 ? " year " : " years ";
      return nums > 0 ? nums + unit : "";
    },
    months: function() {
      let nums = this.skill.experience % 12;
      let unit = nums == 1 ? " month" : " months";
      return nums > 0 ? nums + unit : "";
    }
  },
  data: () => ({
    fullIcon: "mdi-star",
    halfIcon: "mdi-star-half-full"
  })
};
</script>
