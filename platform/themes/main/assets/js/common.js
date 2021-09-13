import moment from "moment"
import Vue from "vue"

export default {
    data() {
        return {
            
        }
    },

    filters: {
        formatDate: function(value, type) {
            if(!value && !type) return;
            //MM/DD/YYYY hh:mm
            return moment(String(value)).format(type)
        }
    },

    methods: {
        
    },
}