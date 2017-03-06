/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('vue-resource');
require('./bootstrap');
require('./jquery-ui.min.js');
require('./jquery-migrate-1.2.1.min.js');
require('./slick.min.js');
require('./mycard.js');
// require('./checkbox.js');



$(document).ready(function() {
  Vue.component('company', {
  // The todo-item component now accepts a
  // "prop", which is like a custom attribute.
  // This prop is called todo.
  props: ['company'],
  template: require('./components/Jobs.html')
})


var companyvm = new Vue({
        el: '.current-applications',
        data: {
            companies: [],
            pagination: {}
        },
        mounted: function () {
            this.fetchStories()
        },
        methods: {
            fetchStories: function (page_url) {
                let vm = this;
                page_url = page_url || '/api'
                this.$http.get(page_url)
                    .then(function (response) {
                        vm.makePagination(response.data)
                        this.companies = response.data.data
                    });
            },
            makePagination: function(data){
                let pagination = {
                    current_page: data.current_page,
                    last_page: data.last_page,
                    next_page_url: data.next_page_url,
                    prev_page_url: data.prev_page_url
                }
                this.pagination = pagination
            }
        }
    });
});
