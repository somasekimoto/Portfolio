<template>
    <v-main>
        <router-view :iconImg="iconImg" :careers="careers"></router-view>
    </v-main>
</template>

<script>
export default {
    props: ["iconImg"],
    data: ()=>({
        careers: [
            {
                position: "Fullstack Web Developer",
                place: "Fiveneeds Co. Ltd",
                url: "https://www.fiveneeds.co.jp/",
                since:"2020.6",
                until:"NOW",
                skills: ["Php(Laravel)", "Javascript(Vue.js)", "Python", "AWS"],
            },
            {
                position: "Student",
                place: "Tech Camp",
                url: "https://tech-camp.in/",
                since:"2020.1",
                until:"2020.4",
                skills: ["Ruby(Ruby on rails)", "Javascript(jQuery, React.js)", "AWS"],
            }
        ],
    })
};
</script>
