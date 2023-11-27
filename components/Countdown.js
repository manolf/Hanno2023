app.component('countdown', {
	template:
	/*html*/
	`<div>
        <h3>{{timerOutput}}</h3>
    </div>
	`,
	data(){
	return {
		url: 'https://www.fitmithanno.fun',
		countDownToTime : new Date("Dec 01, 2023 00:00:00").getTime(),
		timerOutput:  null
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
		  }
		},
	    mounted() {
			setInterval(() => { this.startTimer() }, 1000);
		 }
})