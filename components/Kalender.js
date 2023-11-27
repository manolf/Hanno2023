app.component('kalender', {
	template:
	/*html*/
	`
    <div class="container container-cal pb-4" id="adventtage">
    <div v-for="day in days" > 
        <div class="card window bildbeschriftung" :id="\`\${day.dayId}\`">
        <img :src="\`./assets/img/icon/\${day.dayId}.png\`" style='width: 150px; height: 150px; background-color: white'/>
        </div>
    </div>
</div>
	`,
	data(){
	return {
        days: {},
        offeneKachel: [
            {
                dayId: 1,
                tabataId: 2,
                linkShort: "https://vimeo.com/652165763",
                tabataName: "Ruhig oba zach"
            },
            {
                dayId: 8,
                tabataId: 11,
                linkShort: "https://vimeo.com/655651483",
                tabataName: "May the Forth be With you"
            }
        ]
		}
	},
    props: {
        userId: {
            required: true
        }
    },
	methods: {
        getAllDays(){
            axios.get('./controllers/ajaxfile.php')
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
        getUserData(userId){
            axios.get('./controllers/getUserData.php' + this.userId)
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
        getOffeneKacheln(userId){

        }
		},
	    mounted() {
            this.getAllDays();
		 }
})