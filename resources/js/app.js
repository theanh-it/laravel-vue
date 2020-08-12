require('./bootstrap');
window.Vue = require('vue');
import App from "./App";
import routers from "./routes";

Vue.component('App', require('./App.vue').default);

new Vue({
    el: '#app',
    routers,
    render: h => h(App)
}).$mount("#app");