<template>
  <v-app-bar>
    <v-toolbar-title>
      <router-link style="color: inherit;" to="/">Soma Sekimoto</router-link>
    </v-toolbar-title>
    <v-app-bar-nav-icon>
      <v-avatar size="36px">
        <img alt="icon" :src="iconImg" />
      </v-avatar>
    </v-app-bar-nav-icon>
    <v-spacer></v-spacer>
    <v-row>
      <v-spacer></v-spacer>
      <template v-for="path in paths">
        <v-col cols="auto">
          <router-link style="color: inherit;" :to="'/' + path.to">{{path.name}}</router-link>
        </v-col>
      </template>
      <v-col cols="auto" class="ml-3">
        <v-switch @click="switchTheme" :value="darkMode" inset hide-details></v-switch>
      </v-col>
    </v-row>
  </v-app-bar>
</template>
<script>
export default {
  props: ["darkMode", "iconImg"],
  data: () => ({
    paths: [
      {
        name: "Home",
        to: ""
      },
      {
        name: "Skills",
        to: "skills"
      },
      {
        name: "Careers",
        to: "careers"
      }
    ]
  }),
  methods: {
    switchTheme: function() {
      this.$emit("changeTheme");
    }
  }
};
</script>
