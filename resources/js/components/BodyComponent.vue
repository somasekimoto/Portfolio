<template>
  <v-main class="py-10">
    <router-view :iconImg="iconImg" :careers="careers" :isSmall="isSmall" :works="works"></router-view>
  </v-main>
</template>

<script>
export default {
  props: ["iconImg", "isSmall"],
  data: () => ({
    careers: [
      {
        position: "Fullstack Web Developer",
        place: "Fiveneeds Co. Ltd",
        url: "https://www.fiveneeds.co.jp/",
        since: "2020.6",
        until: "NOW",
        skills: ["Php(Laravel)", "Javascript(Vue.js)", "Python", "AWS"]
      },
      {
        position: "Student",
        place: "Tech Camp",
        url: "https://tech-camp.in/",
        since: "2020.1",
        until: "2020.4",
        skills: ["Ruby(Ruby on rails)", "Javascript(jQuery, React.js)", "AWS"]
      }
    ],
    works: []
  }),
  created() {
    this.fetchRepos();
  },
  methods: {
    fetchRepos: function() {
      axios
        .get("/fetchWorks")
        .then(
          function(res) {
            this.works = res.data.works;
          }.bind(this)
        )
        .catch(function(err) {
          console.log(err);
        });
    }
  }
};
</script>
