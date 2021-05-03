/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue").default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

import Vuetify from "vuetify";
import "vuetify/dist/vuetify.min.css";

Vue.use(Vuetify);

const files = require.context("./", true, /\.vue$/i);
files
    .keys()
    .map((key) =>
        Vue.component(key.split("/").pop().split(".")[0], files(key).default)
    );

import VueRouter from "vue-router";

Vue.use(VueRouter);

const routes = require("./route.js");

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
    router: new VueRouter({
        base: "/",
        mode: "history",
        routes
    }),
    vuetify: new Vuetify({
        theme: {
            themes: {
                light: {
                    twitter: "#1DA1F2",
                    facebook: "#3B5998",
                    github: "000000",
                    instagram: "#8a3ab9",
                    qiita: "#00CA00",
                    ameba: "#82be28",
                    background: "#E1E8ED"
                },
                dark: {
                    twitter: "#1DA1F2",
                    facebook: "1877f2",
                    github: "FFFFFF",
                    instagram: "#fbad50",
                    qiita: "#31B600",
                    ameba: "#82be28",
                    background: "#243447"
                }
            }
        }
    })
});
