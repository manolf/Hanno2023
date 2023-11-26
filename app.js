const app = Vue.createApp({
    data(){
        return {
            url: 'https://www.fitmithanno.fun',
            countDownToTime : new Date("Dec 01, 2023 00:00:00").getTime(),
            timerOutput:  null,
            testData: {},
            days: {},
            allData: {},
            adventWods: {}
        }
    },
    methods: {
        startTimer() {
            const timeNow = new Date().getTime();
            const timeDifference = this.countDownToTime - timeNow;
            const millisecondsInOneSecond = 1000;
            const millisecondsInOneMinute = millisecondsInOneSecond * 60;
            const millisecondsInOneHour = millisecondsInOneMinute * 60;
            const millisecondsInOneDay = millisecondsInOneHour * 24;
            const differenceInDays = timeDifference / millisecondsInOneDay;
            const remainderDifferenceInHours = (timeDifference % millisecondsInOneDay) / millisecondsInOneHour;
            const remainderDifferenceInMinutes = (timeDifference % millisecondsInOneHour) / millisecondsInOneMinute;
            const remainderDifferenceInSeconds = (timeDifference % millisecondsInOneMinute) / millisecondsInOneSecond;
            const remainingDays = Math.floor(differenceInDays);
            const remainingHours = Math.floor(remainderDifferenceInHours);
            const remainingMinutes = Math.floor(remainderDifferenceInMinutes);
            const remainingSeconds =Math.floor(remainderDifferenceInSeconds);
            this.timerOutput = "Noch " + remainingDays + " Tage " + ": " + remainingHours + " Stunden " + ": " + remainingMinutes + " Minuten " + ": " + remainingSeconds + " Sekunden";
          },
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
          getAllDays(){
            console.log("Aufruf getAllDays");
            axios.get('ajaxfile.php')
            .then(
                response =>{
                    console.log(response.data)
                    this.days = response.data;
                })
            .catch(function (error) {
                console.log(error);
                });
                return response;
            },
            fetchAllData(){
                axios.post('action.php', {
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
        this.getAllDays(),
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
    
    app.mount('#app')