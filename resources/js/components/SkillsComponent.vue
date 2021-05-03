<template>
  <v-container class="text-center py-16 my-16">
    <h1>Skills</h1>
    <div style="height: 50px;">
      <v-divider class="my-8" horizontal></v-divider>
    </div>
    <template v-for="skill in skills">
      <skill-component :skill="skill"></skill-component>
    </template>
  </v-container>
</template>
<script>
export default {
  data: () => ({
    skills: [
      {
        name: "Php",
        level: 3
      }
    ]
  })
};
</script>
