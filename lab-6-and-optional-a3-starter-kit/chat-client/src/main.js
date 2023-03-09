import { createApp } from "vue";
import { createPinia } from "pinia";

import App from "./App.vue";
import VueCookies from "vue-cookies";

import "./assets/main.css";

const app = createApp(App);

import axios from "axios";
import VueAxios from "vue-axios";
import router from "./router";

axios.defaults.baseURL = "http://localhost:8000";
axios.defaults.withCredentials = true;
axios.defaults.headers = {'Accept': 'application/json'};

app.use(VueAxios, axios);
app.use(createPinia());
app.use(router);
app.use(VueCookies);
app.mount("#app");
