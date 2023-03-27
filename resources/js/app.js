
require("./bootstrap");


window.Vue = require('vue');

import FeedbackForm from './components/feedbackForm.vue';
Vue.component('feedback-form', FeedbackForm)

const app = new Vue({
	el: '#app',
});