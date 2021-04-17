require('./bootstrap');

// main vue file
import Vue from 'vue';
//import required ddma-files
import DDMAPlugin from './ddma-app/plugins/ddma-plugin';
//load the main app
import App from './ddma-app/App';
// router setup
import router from './ddma-app/routes/router';
// plugin setup
Vue.use(DDMAPlugin);
/* eslint-disable no-new */
new Vue({
    el: '#app',
    render: h => h(App),
    router
});
