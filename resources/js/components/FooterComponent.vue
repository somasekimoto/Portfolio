<template>
  <v-speed-dial v-model="fab" fixed bottom right :direction="direction" :transition="transition">
    <template v-slot:activator>
      <v-btn v-model="fab" fab>
        <v-icon v-if="fab">mdi-close</v-icon>
        <v-icon v-else>mdi-account-circle</v-icon>
      </v-btn>
    </template>
    <template v-for="comp in fabComps">
      <router-link :to="comp.path">
        <v-tooltip v-model="showTooltip" left>
          <template v-slot:activator="{ on, attrs }">
            <v-btn fab small>
              <v-icon>{{comp.icon}}</v-icon>
            </v-btn>
          </template>
          <small>{{comp.tipText}}</small>
        </v-tooltip>
      </router-link>
    </template>
    <v-btn fab small @click="switchTheme">
      <v-icon>mdi-lightbulb</v-icon>
    </v-btn>
  </v-speed-dial>
</template>
<script>
export default {
  props: ["darkMode"],
  data: () => ({
    direction: "top",
    transition: "slide-y-reverse-transition",
    fab: false,
    showTooltip: true,
    fabComps: [
      { path: "/", icon: "mdi-home", tipText: "Home" },
      { path: "/works", icon: "mdi-folder-star-multiple", tipText: "Works" },
      { path: "/careers", icon: "mdi-office-building", tipText: "Careers" },
      { path: "/skills", icon: "mdi-arm-flex", tipText: "Skills" }
    ]
  }),
  methods: {
    switchTheme: function() {
      this.$emit("changeTheme");
    }
  }
};
</script>
