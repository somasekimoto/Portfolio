<template>
    <v-container class="text-center py-16 my-16">
      <h1>Careers</h1>
      <div style="height: 50px;">
        <v-divider class="my-8" horizontal></v-divider>
      </div>
      <template v-for="(career, index) in careers">
          <career-component :career="career"></career-component>
          <template v-if="index != careers.length - 1">
              <div style="height: 50px;">
                  <v-divider vertical></v-divider>
              </div>
          </template>
        </template>
    </v-container>
</template>
<script>
export default {
    props: ['careers'],
}
</script>