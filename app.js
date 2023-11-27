const app = Vue.createApp({
    data(){
        return {
            testData: {},
            allData: {},
            adventWods: {},
            userId: ""
        }
    },
    methods: {
          testAxios(){
            axios.get('https://jsonplaceholder.typicode.com/posts/1')
            .then(
                result =>{
              console.log(result.data);
             // if(result.data)
                this.testData = result.data;
            })
            .catch(function (error) {
              console.log(error);
            });
            return result;
          },
            fetchAllData(){
                axios.post('./controllers/action.php', {
                    action: 'fetchall'
                }).then(function(response){
                    this.allData = response.data;
                })
                .catch(function (error) {
                    console.log(error);
                    })
                ;
                return response;
            }
    },
    // computed(){
    //     iconLink(day){
    //         return 	"./assets/img/icon/" + this.day.dayId + ".png";
    //     }
    // },
    mounted() {
        setInterval(() => { this.startTimer() }, 1000);
        this.fetchAllData()
     },

    //  getAllDays(){
    //     console.log("Aufruf getAllDays");
    //     axios.get('ajaxfile.php')
    //     .then(
    //         response =>{
    //             console.log(response.data)
    //             this.days = response.data;
    //         })
    //     .catch(function (error) {
    //         console.log(error);
    //         });
    //         return response;
    //     }
    })
    
    // app.mount('#app')