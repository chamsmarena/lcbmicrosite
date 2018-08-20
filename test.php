<!DOCTYPE html>
<html>
	<head>

		

		<script src="js/Chart.js"></script>
		<script src="js/jquery-3.1.1.min"></script>
		
	</head>
	<body>
	sddsd

		<canvas id="chartNigeriag" width="400" height="400"></canvas>
		<script>
		var docc = document.getElementById('chartNigeriag');
		console.log(docc);
		var ctx = docc.getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
			labels: ['Jan 15','Jun 15', 'Dec 15', 'Jun 16','Feb 17'],
			datasets: [{
			  label: 'Number of people displaced',
			  data: [950000,1560000 , 1560000, 2610000, 2230000],
			  borderColor:"#f47932",
				pointRadius: 5
				
			}]
			},
				options: {
					legend: {
						display: false
					},
					title: {
						display: true,
						text: '# displaced people',
						fontSize:16,
						fontColor:"#ffffff"
					},
					 scales: {
						yAxes: [
							{
								ticks: {
									callback: function(label, index, labels) {
										if(label==0){
											return '0';
										}else{
											return label/1000000+'M';
										}
									},
									beginAtZero:true
								}
							}
						]
					}
				}
			});
		</script>
	</body>
	
</html>
