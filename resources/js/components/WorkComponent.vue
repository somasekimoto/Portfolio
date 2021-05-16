<template>
  <v-card elevation="9" class="rounded-lg">
    <v-container>
      <v-list-item two-line>
        <v-list-item-content>
          <v-list-item-title class="headline">{{work.name}}</v-list-item-title>
        </v-list-item-content>
      </v-list-item>
      <!-- <h3 class="my-1">{{work.name}}</h3> -->
      <v-card-text>
        <v-icon small>mdi-pencil</v-icon>
        {{work.description}}
      </v-card-text>
      <v-card-actions>
        <v-btn color="success" text :href="work.html_url" target="_blank" rel="noopener">
          <v-icon>mdi-book</v-icon>Repo
        </v-btn>
        <v-spacer></v-spacer>
        <v-btn icon @click="show = !show">
          <v-icon>{{ show ? 'mdi-chevron-up' : 'mdi-tag' }}</v-icon>
        </v-btn>
      </v-card-actions>
      <v-expand-transition>
        <div v-show="show">
          <v-divider></v-divider>
          <template v-for="topic in work.topics">
            <v-chip small class="mx-1">{{topic}}</v-chip>
          </template>
        </div>
      </v-expand-transition>
    </v-container>
  </v-card>
</template>
<script>
export default {
  props: ["work"],
  data: () => ({
    show: false
  })
};
</script>
