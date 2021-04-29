<template>
<v-container>
    <v-row justify="center" class="ma-16">
        <v-avatar size="120">
            <img alt="icon" :src="iconImg"/>
        </v-avatar>
    </v-row justify="center">
    <v-row justify="center">
        <v-col cols="auto">
            <h1>Soma Sekimoto</h1>
            <div class="ma-6">
            <p>web developer in Japan</p>
            <p>started working as a fullstack developer in June, 2020</p>
            </div>
        </v-col>
    </v-row>
    <v-row justify="center">
        <v-col cols="auto">
            <v-row>
                <v-col cols="auto">
                    <v-btn icon href="https://twitter.com/s_souma0421" target="_blank" rel="noopener">
                        <v-icon large>mdi-twitter</v-icon>
                    </v-btn>
                </v-col>
                <v-col cols="auto">
                    <v-btn icon href="https://github.com/SomaSekimoto" target="_blank" rel="noopener">
                        <v-icon large>mdi-github</v-icon>
                    </v-btn>
                </v-col>
                <v-col cols="auto">
                    <v-btn icon href="https://www.instagram.com/soma.0421/" target="_blank" rel="noopener">
                        <v-icon large>mdi-instagram</v-icon>
                    </v-btn>
                </v-col>
                <v-col cols="auto">
                    <v-btn icon href="https://www.facebook.com/Soma.421" target="_blank" rel="noopener">
                        <v-icon large>mdi-facebook</v-icon>
                    </v-btn>
                </v-col>
            </v-row>
        </v-col>
    </v-row>
</v-container>
</template>
<script>
export default {
    props: ['iconImg'],
}
</script>
