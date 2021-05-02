<template>
<v-container>
    <v-row justify="center" class="ma-16">
        <v-avatar size="120">
            <img alt="icon" :src="iconImg"/>
        </v-avatar>
    </v-row justify="center">
    <v-row justify="center">
        <v-col cols="auto" class="text-center">
            <h1>Soma Sekimoto</h1>
            <div class="ma-6">
                <p>started working as a Web Developer in Japan since 2020.6</p>
                <template v-for="(career, index) in careers">
                    <v-card>
                        <h3>{{career.position}} @ <a :href="career.url" target="_blank" rel="noopener">{{career.place}}</a></h3>
                        <v-card-subtitle>{{career.since}} ~ {{career.until}}</v-card-subtitle>
                        <v-card-text>{{career.skills.join(', ')}}</v-card-text>
                    </v-card>
                    <template v-if="index != careers.length - 1">
                        <div style="height: 50px;">
                            <v-divider vertical></v-divider>
                        </div>
                    </template>
                </template>
            </div>
        </v-col>
    </v-row>
    <v-row justify="center" align="center">
        <v-col cols="auto">
            <v-row>
                <template v-for="icon in icons">
                    <v-col cols="auto">
                        <v-btn icon :href="icon.url" target="_blank" rel="noopener">
                            <v-icon large :color="icon.color">mdi-{{icon.name}}</v-icon>
                        </v-btn>
                    </v-col>
                </template>
            </v-row>
            <v-row>
                <template v-for="chip in chips">
                    <v-col cols="auto" align="center">
                        <v-chip :color="chip.color" small>
                            <v-btn text small style="text-transform: none" :href="chip.url" target="_blank" rel="noopener">
                                {{chip.name}}
                            </v-btn>
                        </v-chip>
                    </v-col>
                </template>
            </v-row>
        </v-col>
    </v-row>
</v-container>
</template>
<script>
export default {
    props: ['iconImg'],
    data: ()=>({
        careers: [
            {
                position: "Fullstack Developer",
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
        icons: [
            {
                name: "twitter",
                url: "https://twitter.com/s_souma0421",
                color: "twitter",
            },
            {
                name: "github",
                url: "https://github.com/SomaSekimoto",
                color: "github",
            },
            {
                name: "instagram",
                url: "https://www.instagram.com/soma.0421/",
                color: "instagram",
            },
            {
                name: "facebook",
                url: "https://www.facebook.com/Soma.421",
                color: "facebook",
            },
        ],
        chips: [
            {
                name: "Qiita",
                url: "https://qiita.com/soma_sekimoto",
                color: "qiita"
            },
            {
                name: "Ameba",
                url: "https://ameblo.jp/s-soma-s/",
                color: "qiita"
            }
        ],
    }),
}
</script>
