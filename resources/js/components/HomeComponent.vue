<template>
<v-container>
    <v-row justify="center" class="ma-14">
        <v-avatar size="120">
            <img alt="icon" :src="iconImg"/>
        </v-avatar>
    </v-row justify="center">
    <v-row justify="center">
        <v-col cols="auto" class="text-center">
            <h1>Soma Sekimoto</h1>
            <div class="ma-6">
                <p class="my-5">started working as a Web Developer in Japan since 2020.6</p>
                <career-component :career="careers[0]"></career-component>
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
    props: ['iconImg', 'careers'],
    computed:{
        careersv: function(){
            return (typeof(this.careers) == "undefined") ? this.careers : []
        }
    },
    data: ()=>({
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
