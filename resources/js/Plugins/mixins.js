import Vue from 'vue';

Vue.mixin({
    methods: {
        fileUrl: function (path) {
            return this.$page.props.publicPath + path
        },
    }
})
