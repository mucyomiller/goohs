import 
var app = new Vue({
    el:'#app',
    data:{
        appointments =[];
    },
    mounted: function () {
    this.fetchData();
    },
    methods:{
        fetchData:function(){
            var that = this;
            this.$http.get('api/appointments', function(response)
            {
                that.appointments.push(response);
            }
        }        
    }
})
