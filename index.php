<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>HNG 4 Internship</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="app.css">
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-light bg-faded fixed-top">
			<a class="navbar-brand text-white mx-auto" href="#"><p>HNG Internship 4</p></a>
		</nav>
		<div class="cover" id="app">
			<div class="col-6 mx-auto central-div">
				<div class="my-auto mx-auto">
					<div class="text-center ">
						<div class="mx-auto mt-5">
							<h1 class="font-weight-bold title">
								Hello <b v-if="name">{{name}}</b><b v-else>There!</b>
							</h1>
							<input type="text" v-model="name" placeholder="Enter Name Here">
							<h3 class="pt-4">The time is {{time}}</h3>
							<p class="pt-2 font-weight-bold">{{date}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script>
			var app = new Vue({
				el: '#app',
				data: {
					name: '',
					hours: '',
					minutes: '',
					seconds: '',
					period: '',
					time: '',
					date: ''
				},
				mounted: function () {
					this.getTime();
					this.getDate();
				},
				methods: {
					getTime: function(){
						setInterval(this.setTime, 100);
					},
					setTime: function () {
						let time = new Date();
						this.hours = this.addZero( time.getHours());
						this.minutes = this.addZero(time.getMinutes());
						this.seconds = this.addZero(time.getSeconds());
						this.period = this.getHourTime(this.hours);
						this.hours = (this.hours % 12) || 12;
						this.time = this.hours + ':' + this.minutes + ':' + this.seconds + ' ' + this.period;
					},
					getHourTime: function (hours){
						return (hours => 12) ? 'PM':'AM';
					},
					addZero: function (number){
						return (parseInt(number, 10) >= 10 ? '' : '0') + number;
					},
					getDate: function (){
						let date = new Date();
						let month = date.getMonth();
						switch (month) {
							case 0:
								month = 'January';
								break;
							case 1:
								month = 'February';
								break;
							case 2:
								month = 'March';
								break;
							case 3:
								month = 'April';
								break;
							case 4: 
								month = 'May';
								break;
							case 5:
								month = 'June';
								break;
							case 6:
								month = 'July';
								break;
							case 7:
								month = 'August';
								break;
							case 8:
								month = 'September';
								break;
							case 9:
								month = 'October';
								break;
							case 10:
								month = 'November';
								break;
							case 11:
								month = 'December';
								break;
							default:
								break;
						}
						date = date.getDate() + ' ' + month + ', ' + date.getFullYear();
						this.date = date;
					}
				}
			})
		</script>
	</body>
</html>