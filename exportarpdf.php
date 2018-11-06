<html>
<head>
<link rel="icon" href="img/q_s2.png">
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="chart.js/dist/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs" crossorigin="anonymous"></script>
</head>
  
<body style="background-color:#00a2b4">

<div style="height: 20px;"></div>

<div class="container">

	<div id="box" style="background-image: url('img/wallpaper_dash_qs_branco_grande.png');border-radius:25px">
	
		<div style="height: 10px;"></div>
		
		<!-- Primeira row da página, usada exclusivamente para mostrar o logo -->
		<div class="row">
		<div class="col-sm text-center">
		
		<img src="img/gerando.png" style="height:500px;width:650px"><br>
		
		</div>
		</div>
		<!-- Fim do Logo -->
		
		<div class="row">
		<div class="col-sm text-center">
		
		<img src="img/loading.gif" style="height:50px;width:50px"><br>
		
		</div>
		</div>
		
		<div style="height: 75px;"></div>
		
</div>

</div>

<div style="visibility:hidden;
  height:0;
  overflow: hidden;">

<?php
    
date_default_timezone_set('America/Sao_Paulo');
//date_default_timezone_set("America/New_York");
    
session_start();

//$privilegio = $_SESSION['privilegio'];

$nomehospital = "Nome: Teste%20123";
$nomehospital = urlencode($nomehospital);
    
//$nomehospital = "Hospital%20São%20Luiz%20-%20Jabaquara";
     

?>
		
		<div style="height: 20px;"></div>
		
		<!-- Começo dos graficos -->
		<div style="width:2000px">
		<canvas id="myChart"></canvas>
		</div>		
    
        <div style="width:2000px">
		<canvas id="myChart2"></canvas>
		</div>
		
		<div style="width:2000px">
		<canvas id="myChart3"></canvas>
		</div>
		
		<div style="width:2000px">
		<canvas id="myChart4"></canvas>
		</div>
		
		<div style="width:2000px">
		<canvas id="myChart5"></canvas>
		</div>
		
		<div style="width:2000px">
		<canvas id="myChart6"></canvas>
		</div>
		
		<div style="width:2000px">
		<canvas id="myChart7"></canvas>
		</div>
		
		<div style="width:2000px">
		<canvas id="myChart8"></canvas>
		</div>
		
		<div style="width:2000px">
		<canvas id="myChart9"></canvas>
		</div>
		
		<div style="width:2000px">
		<canvas id="myChart10"></canvas>
		</div>
		
		<div style="width:2000px">
		<canvas id="myChart11"></canvas>
		</div>
		
		<div style="width:2000px">
		<canvas id="myChart12"></canvas>
		</div>
		
		<div style="width:2000px">
		<canvas id="myChart13"></canvas>
		</div>
		
		<div style="width:2000px">
		<canvas id="myChart14"></canvas>
		</div>
		
		
	
		<!-- GRAFICO 1 -->
		<script>

		var ctx = document.getElementById("myChart");
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["", "", "", "", "", "","","","","","","",""],
				datasets: [{
					label: '                     ',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8", "2"],
					backgroundColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderWidth: 1
				},
				{
					label: '                     ',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8", "2"],
					backgroundColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						
					],
					borderColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
					],
					borderWidth: 1
				},
				{
					label: '                     ',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8", "2"],
					backgroundColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderWidth: 1
				}]
		
			},
			options: {
				
				animation: {
					duration: 0
				},
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true,
							suggestedMax:10
						}
					}]
				}
			}
		});
		</script>
    
    <!-- GRAFICO 2 -->
		<script>

		var ctx2 = document.getElementById("myChart2");
		var myChart2 = new Chart(ctx2, {
			type: 'bar',
			data: {
				labels: ["Semana 1", "Semana 2", "Semana 3", "Semana 4", "Semana 5", "Semana 6","Semana 7","Semana 8","Semana 9","Semana 10","Semana 11","Semana 12"],
				datasets: [{
					label: 'Global',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderWidth: 1
				},
				{
					label: 'Top 20',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						
					],
					borderColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
					],
					borderWidth: 1
				},
				{
					label: 'Real',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderWidth: 1
				}]
		
			},
			options: {
				animation: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true,
							suggestedMax:10
						}
					}]
				}
			}
		});
		</script>
		
		<!-- GRAFICO 3 -->
		<script>

		var ctx3 = document.getElementById("myChart3");
		var myChart3 = new Chart(ctx3, {
			type: 'bar',
			data: {
				labels: ["Semana 1", "Semana 2", "Semana 3", "Semana 4", "Semana 5", "Semana 6","Semana 7","Semana 8","Semana 9","Semana 10","Semana 11","Semana 12"],
				datasets: [{
					label: 'Global',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderWidth: 1
				},
				{
					label: 'Top 20',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						
					],
					borderColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
					],
					borderWidth: 1
				},
				{
					label: 'Real',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderWidth: 1
				}]
		
			},
			options: {
				animation: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true,
							suggestedMax:10
						}
					}]
				}
			}
		});
		</script>
		
<!-- GRAFICO 4 -->
		<script>
		var ctx4 = document.getElementById("myChart4");
		var myChart4 = new Chart(ctx4, {
			type: 'bar',
			data: {
				labels: ["Semana 1", "Semana 2", "Semana 3", "Semana 4", "Semana 5", "Semana 6","Semana 7","Semana 8","Semana 9","Semana 10","Semana 11","Semana 12"],
				datasets: [{
					label: 'Global',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderWidth: 1
				},
				{
					label: 'Top 20',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						
					],
					borderColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
					],
					borderWidth: 1
				},
				{
					label: 'Real',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderWidth: 1
				}]
		
			},
			options: {
				animation: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true,
							suggestedMax:10
						}
					}]
				}
			}
		});
		</script>
		
<!-- GRAFICO 5 -->
		<script>

		var ctx5 = document.getElementById("myChart5");
		var myChart5 = new Chart(ctx5, {
			type: 'bar',
			data: {
				labels: ["Semana 1", "Semana 2", "Semana 3", "Semana 4", "Semana 5", "Semana 6","Semana 7","Semana 8","Semana 9","Semana 10","Semana 11","Semana 12"],
				datasets: [{
					label: 'Global',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderWidth: 1
				},
				{
					label: 'Top 20',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						
					],
					borderColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
					],
					borderWidth: 1
				},
				{
					label: 'Real',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderWidth: 1
				}]
		
			},
			options: {
				animation: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true,
							suggestedMax:10
						}
					}]
				}
			}
		});
		</script>
		
<!-- GRAFICO 6 -->
		<script>
		var ctx6 = document.getElementById("myChart6");
		var myChart6 = new Chart(ctx6, {
			type: 'bar',
			data: {
				labels: ["Semana 1", "Semana 2", "Semana 3", "Semana 4", "Semana 5", "Semana 6","Semana 7","Semana 8","Semana 9","Semana 10","Semana 11","Semana 12"],
				datasets: [{
					label: 'Global',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderWidth: 1
				},
				{
					label: 'Top 20',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						
					],
					borderColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
					],
					borderWidth: 1
				},
				{
					label: 'Real',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderWidth: 1
				}]
		
			},
			options: {
				animation: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true,
							suggestedMax:10
						}
					}]
				}
			}
		});
		</script>
		
<!-- GRAFICO 7 -->
		<script>
		var ctx7 = document.getElementById("myChart7");
		var myChart7 = new Chart(ctx7, {
			type: 'bar',
			data: {
				labels: ["Semana 1", "Semana 2", "Semana 3", "Semana 4", "Semana 5", "Semana 6","Semana 7","Semana 8","Semana 9","Semana 10","Semana 11","Semana 12"],
				datasets: [{
					label: 'Global',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderWidth: 1
				},
				{
					label: 'Top 20',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						
					],
					borderColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
					],
					borderWidth: 1
				},
				{
					label: 'Real',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderWidth: 1
				}]
		
			},
			options: {
				animation: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true,
							suggestedMax:10
						}
					}]
				}
			}
		});
		</script>
		
<!-- GRAFICO 8 -->
		<script>
		var ctx8 = document.getElementById("myChart8");
		var myChart8 = new Chart(ctx8, {
			type: 'bar',
			data: {
				labels: ["Semana 1", "Semana 2", "Semana 3", "Semana 4", "Semana 5", "Semana 6","Semana 7","Semana 8","Semana 9","Semana 10","Semana 11","Semana 12"],
				datasets: [{
					label: 'Global',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderWidth: 1
				},
				{
					label: 'Top 20',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						
					],
					borderColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
					],
					borderWidth: 1
				},
				{
					label: 'Real',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderWidth: 1
				}]
		
			},
			options: {
				animation: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true,
							suggestedMax:10
						}
					}]
				}
			}
		});
		</script>
		
<!-- GRAFICO 9 -->
		<script>

		var ctx9 = document.getElementById("myChart9");
		var myChart9 = new Chart(ctx9, {
			type: 'bar',
			data: {
				labels: ["Semana 1", "Semana 2", "Semana 3", "Semana 4", "Semana 5", "Semana 6","Semana 7","Semana 8","Semana 9","Semana 10","Semana 11","Semana 12"],
				datasets: [{
					label: 'Global',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderWidth: 1
				},
				{
					label: 'Top 20',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						
					],
					borderColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
					],
					borderWidth: 1
				},
				{
					label: 'Real',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderWidth: 1
				}]
		
			},
			options: {
				animation: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true,
							suggestedMax:10
						}
					}]
				}
			}
		});
		</script>
		
<!-- GRAFICO 10 -->
		<script>

		var ctx10 = document.getElementById("myChart10");
		var myChart10 = new Chart(ctx10, {
			type: 'bar',
			data: {
				labels: ["Semana 1", "Semana 2", "Semana 3", "Semana 4", "Semana 5", "Semana 6","Semana 7","Semana 8","Semana 9","Semana 10","Semana 11","Semana 12"],
				datasets: [{
					label: 'Global',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderWidth: 1
				},
				{
					label: 'Top 20',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						
					],
					borderColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
					],
					borderWidth: 1
				},
				{
					label: 'Real',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderWidth: 1
				}]
		
			},
			options: {
				animation: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true,
							suggestedMax:10
						}
					}]
				}
			}
		});
		</script>
		
<!-- GRAFICO 11 -->
		<script>

		var ctx11 = document.getElementById("myChart11");
		var myChart11 = new Chart(ctx11, {
			type: 'bar',
			data: {
				labels: ["Semana 1", "Semana 2", "Semana 3", "Semana 4", "Semana 5", "Semana 6","Semana 7","Semana 8","Semana 9","Semana 10","Semana 11","Semana 12"],
				datasets: [{
					label: 'Global',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderWidth: 1
				},
				{
					label: 'Top 20',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						
					],
					borderColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
					],
					borderWidth: 1
				},
				{
					label: 'Real',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderWidth: 1
				}]
		
			},
			options: {
				animation: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true,
							suggestedMax:10
						}
					}]
				}
			}
		});
		</script>
		
<!-- GRAFICO 12 -->
		<script>

		var ctx12 = document.getElementById("myChart12");
		var myChart12 = new Chart(ctx12, {
			type: 'bar',
			data: {
				labels: ["Semana 1", "Semana 2", "Semana 3", "Semana 4", "Semana 5", "Semana 6","Semana 7","Semana 8","Semana 9","Semana 10","Semana 11","Semana 12"],
				datasets: [{
					label: 'Global',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderWidth: 1
				},
				{
					label: 'Top 20',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						
					],
					borderColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
					],
					borderWidth: 1
				},
				{
					label: 'Real',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderWidth: 1
				}]
		
			},
			options: {
				animation: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true,
							suggestedMax:10
						}
					}]
				}
			}
		});
		</script>
		
<!-- GRAFICO 13 -->
		<script>

		var ctx13 = document.getElementById("myChart13");
		var myChart13 = new Chart(ctx13, {
			type: 'bar',
			data: {
				labels: ["Semana 1", "Semana 2", "Semana 3", "Semana 4", "Semana 5", "Semana 6","Semana 7","Semana 8","Semana 9","Semana 10","Semana 11","Semana 12"],
				datasets: [{
					label: 'Global',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderWidth: 1
				},
				{
					label: 'Top 20',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						
					],
					borderColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
					],
					borderWidth: 1
				},
				{
					label: 'Real',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderWidth: 1
				}]
		
			},
			options: {
				animation: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true,
							suggestedMax:10
						}
					}]
				}
			}
		});
		</script>
		
<!-- GRAFICO 14 -->
		<script>

		var ctx14 = document.getElementById("myChart14");
		var myChart14 = new Chart(ctx14, {
			type: 'bar',
			data: {
				labels: ["Semana 1", "Semana 2", "Semana 3", "Semana 4", "Semana 5", "Semana 6","Semana 7","Semana 8","Semana 9","Semana 10","Semana 11","Semana 12"],
				datasets: [{
					label: 'Global',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderColor: [
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)',
						'rgba(12, 55, 133,1)'
					],
					borderWidth: 1
				},
				{
					label: 'Top 20',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						
					],
					borderColor: [
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
						'rgba(244, 129, 34, 1)',
					],
					borderWidth: 1
				},
				{
					label: 'Real',
					data: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "5", "8"],
					backgroundColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderColor: [
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
						'rgba(7, 139, 52, 1)',
					],
					borderWidth: 1
				}]
		
			},
			options: {
				animation: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true,
							suggestedMax:10
						}
					}]
				}
			}
		});
		</script>


 </body>
 
 <script>
var chart1URL = ctx.toDataURL();



var doc = new jsPDF('l', 'mm', [297, 210]);
  
//CAPA     
capa1URL = 'data:image/png;base64,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AACYysjx2C02AAAAZxOAAQAAAAAAACL+9/UvAAAAAAAAAJMTgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAAAAAACACAEYAAAAAAAAIEIABgAAAAAAAIgQgAEAAAAAAAAiBGAAAADg/9uzAxoAAACEQfZPbY8PagAAAECEAAYAAAAAAACIEMAAAAAAAAAAEQIYAAAAAAAAIEIAAwAAAAAAAEQIYAAAAAAAAIAIAQwAAAAAAAAQIYABAAAAAAAAIgQwAAAAAAAAQIQABgAAAAAAAIgQwAAAAAAAAAARAhgAAAAAAAAgQgADAAAAAAAARAhgAAAAAAAAgAgBDAAAAAAAAJCwHaAC8T+GEe1yAAAAAElFTkSuQmCC';
     

doc.addImage(capa1URL, 'PNG', 11.5, 0, 274, 154);   
     
     
doc.setFontSize(22);
     
//Hospital      
var nomehospital = "Teste 123";
doc.text(nomehospital, doc.internal.pageSize.getWidth() / 2, 110, null, null, 'center');
     
     
//Avaliacoes     
var totalavaliacoes = "100";
doc.text("Total de Avaliações: " + totalavaliacoes, doc.internal.pageSize.getWidth() / 2, 123, null, null, 'center');

 
doc.setFontSize(16);
     
//Data e Hora
var datahora = '01/01/2001 15:30:45';
doc.text("Exportado " + datahora, doc.internal.pageSize.getWidth() / 2, 140, null, null, 'center');



//Add Page INDICE
doc.addPage('a4', 'l');  
 
doc.setFontSize(28);    
     
doc.text("ÍNDICE", doc.internal.pageSize.getWidth() / 2, 20, null, null, 'center');      
         
     
indice1URL = 'data:image/png;base64,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AAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAABTEggAAADAlAQCAAAAMCWBAAAAAExJIAAAAAATGxv/P5bfOqNNAl8tAAAAAElFTkSuQmCC';
     
doc.addImage(indice1URL, 'PNG', 35, 35, 250, 150);     
     
     

//Add Page LEGENDA
doc.addPage('a4', 'l'); 
 
doc.setFontSize(28);    
     
doc.text("Legendas", doc.internal.pageSize.getWidth() / 2, 20, null, null, 'center');   
 
legendas1URL = 'data:image/png;base64,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kZZwIA77CvK732WTVrJJI7nSV37SKB3UdnCoi6dFrqflmvyiynZqXtJVm3qbuGzSejmCcM9X6+Jx2MltB1N2apUZQgghhHBU3PYVhn/+85+bq1v89a9/XX3nO98ZjsADb0nwE/7ll18OYYr7xje+sfriiy+G67n42xXkcLxetOT96le/2lytVj/84Q/3fgzwrbfeWv3kJz8ZruGnP/3pcEx0jkyxnqRtrlarb37zm8Nn67TCX/7yl9V6krnx3aqDbFDhRwsFb/kpG93EetG+uZoP5fkRWNpDdujpRple7re//e299qMtsaXXAVv+4x//2Pj6YJ977rln49vP+ZnHt0nndn7ggQf2tQW89tprm6vV6qmnnlp99tlnG9/tkHY9yd4rn09sgv176ASFjm6vJ+7DJ5D3888/H65J57ZfT+j34pw333xziPO0L7zwwuqdd97Z+G6dROmd9OANJvGeHz34ITrRevMK/rYTkOEnRB5++OHRt7vrRc3marV68skn99JSNjr48Xbs/O677258tzPXXi3cfvQJ0LF3dMA+9GHqS39xW9JHvM9U3B7evq+++uq++lMOeritvW9VZCPFS0+9nXaoi2xJetL1xibvN2OoXshDb8k7SDsAb8plF2T37tfab0mrNiOP2wVoP/rX22+/va9N1Ja1L8Mrr7yyev755ze+/WODyve+QFrk9zhIf+/1fdIp31hdWvTsFEIIIYRwHNjbQGBjgEkWPyDIBMyP0//tb38bwuTww1133TV8amH2r3/9a/iRrIPAZEvloMsUPrH62te+trnaz1yZmnzimGCPobov5aD2EdITp/YQPd342oLy/PnPf96E3qLmwZa9xUyltxBhIn7vvfdufOOw0aEjuzoKP8bYAhjqpgZ6TOUZwzcs/Hjx2MJEiwBB29eNkTFI62WxcBI3b95cPffcc0O4jlWz2GDjQ1/n8EWrHw8n3xJ8sVjbEzt7fAuVixuz1zZ4H/VyltbR27feo7Tj2IZVhXZyXXptTn+ck46FNb8xonRL8HvTy1rSDvQv38yBsfu195UBFtCuQ6XeL4xTvTFobPyt5Svt3Pt/bn/Xxgh16dVZUJe5TNkphBBCCOFOsu8EApMgJrFMLvmVfm0M8IabcHf+NvvHP/7x3qLU3/YvXSyzafH3v/99rwx/ez+H1r8mnCuTurK5QN1JNzXB3vaN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';   
     
doc.addImage(legendas1URL, 'PNG', 35, 35, 250, 150);   
     
     
     
//Add Page1 
doc.addPage('a4', 'l');     
  
//Titulo     
doc.setFontSize(28);
     
doc.text(10, 20, "Nota Geral por Item");

     
//Grafico1 NOTA GERAL
doc.addImage(chart1URL, 'PNG', 10.5, 34.5, 208, 114);
     
//Titulos     
titulos1URL = 'data:image/png;base64,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';
 
doc.addImage(titulos1URL, 'PNG', 10, 34.5, 208, 3);   
     
     
//Numeros     
nums1URL = 'data:image/png;base64,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';
     
doc.addImage(nums1URL, 'PNG', 9, 35, 4, 114);
     
     
//Legendas
legendas1URL = 'data:image/png;base64,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8CqKgmw2iwcPHsjEKQCkUil+VCIiIiIiIiIiIiIiem2w5ykRAQBs20aj0QAAFIvFqT1KdV3H4eEhXNcF8LxMb9jP27Yt/56IiIiIiIiIiIiIiOhVx+QpEcH3fZRKJQDPX4sOvx6dRFGUqT8neqECwMbGBj8yERERERERERERERG98li2l4hQKpXg+z40TUM+n//R/z7f97G9vQ3XdaFpGkzT5EcmIiIiIiIiIiIiIqJXHpOnRBHXaDRked1isTjx5yqVCnK5HHzfn/rvq9VquH79OhzHgaqqqFar/MhERERERERERERERPRaYNleogjzPE+W1s3n8xN7kw73Q33y5MnUfqi+78P3fei6jp2dnak/S0RERERERERERERE9CqZe/bs2TN+BqJoKhQK8tXppGSn7/u4fv06fN9HNptFJpPhhyMiIiIiIiIiIiIiopnEsr1EEZbJZKCqKgDAcRxcv35dJlMF0Q9V13UmTomIiIiIiIiIiIiIaKbx5SlRxPm+j93dXViWJf/MNE1sbW3h22+/RaVSgaIoqNfrMtEaplQqIR6PI5/P86MSEREREREREREREdFriclTIgLwvK+peGUKAKqq4smTJ/B9H8ViEaZpTvxdy7JQKpUAAA8ePJiaZCUiIiIiIiIiIiIiInpVsWwvEQEADMPA4eEhdF0HAHieB9/3oarq1MSp53nY3d0FAGSzWSZOiYiIiIiIiIiIiIjotcXkKRFJiqKgWq0in89DURQAz5Oj6XQaruuG/g57ohIRERERERERERER0axg2V4iCuW6LkqlUiBpms/nkUql5D/XajXs7+9fqCcqERERERERERERERHRq47JUyKaSiRIBV3XsbOzI1+kAji3JyoREREREREREREREdHrgMlTIjqX4zgolUrwPA/A8/K+qqrCdV0YhoFyucyPRERERERERERERERErz0mT4noQnzfx+7uLizLkn+mKAoODw9lf1QiIiIiIiIiIiIiIqLXGZOnRPRCbNtGqVSC7/uoVqvQdZ0fhYiIiIiIiIiIiIiIZgKTp0T0wnzfh+d50DSNH4OIiIiIiIiIiIiIiGbG/z8ABvOEb/yE090AAAAASUVORK5CYII=';
  
doc.addImage(legendas1URL, 'PNG', 13.7, 146.5, 205, 19); 
    
     
//Tabela     
tabela1URL = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYwAAAKFCAYAAADf3t4fAAAABGdBTUEAALGOfPtRkwAAACBjSFJNAACHDwAAjA8AAP1SAACBQAAAfXkAAOmLAAA85QAAGcxzPIV3AAAKOWlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAEjHnZZ3VFTXFofPvXd6oc0wAlKG3rvAANJ7k15FYZgZYCgDDjM0sSGiAhFFRJoiSFDEgNFQJFZEsRAUVLAHJAgoMRhFVCxvRtaLrqy89/Ly++Osb+2z97n77L3PWhcAkqcvl5cGSwGQyhPwgzyc6RGRUXTsAIABHmCAKQBMVka6X7B7CBDJy82FniFyAl8EAfB6WLwCcNPQM4BOB/+fpFnpfIHomAARm7M5GSwRF4g4JUuQLrbPipgalyxmGCVmvihBEcuJOWGRDT77LLKjmNmpPLaIxTmns1PZYu4V8bZMIUfEiK+ICzO5nCwR3xKxRoowlSviN+LYVA4zAwAUSWwXcFiJIjYRMYkfEuQi4uUA4EgJX3HcVyzgZAvEl3JJS8/hcxMSBXQdli7d1NqaQffkZKVwBALDACYrmcln013SUtOZvBwAFu/8WTLi2tJFRbY0tba0NDQzMv2qUP91829K3NtFehn4uWcQrf+L7a/80hoAYMyJarPziy2uCoDOLQDI3fti0zgAgKSobx3Xv7oPTTwviQJBuo2xcVZWlhGXwzISF/QP/U+Hv6GvvmckPu6P8tBdOfFMYYqALq4bKy0lTcinZ6QzWRy64Z+H+B8H/nUeBkGceA6fwxNFhImmjMtLELWbx+YKuGk8Opf3n5r4D8P+pMW5FonS+BFQY4yA1HUqQH7tBygKESDR+8Vd/6NvvvgwIH554SqTi3P/7zf9Z8Gl4iWDm/A5ziUohM4S8jMX98TPEqABAUgCKpAHykAd6ABDYAasgC1wBG7AG/iDEBAJVgMWSASpgA+yQB7YBApBMdgJ9oBqUAcaQTNoBcdBJzgFzoNL4Bq4AW6D+2AUTIBnYBa8BgsQBGEhMkSB5CEVSBPSh8wgBmQPuUG+UBAUCcVCCRAPEkJ50GaoGCqDqqF6qBn6HjoJnYeuQIPQXWgMmoZ+h97BCEyCqbASrAUbwwzYCfaBQ+BVcAK8Bs6FC+AdcCXcAB+FO+Dz8DX4NjwKP4PnEIAQERqiihgiDMQF8UeikHiEj6xHipAKpAFpRbqRPuQmMorMIG9RGBQFRUcZomxRnqhQFAu1BrUeVYKqRh1GdaB6UTdRY6hZ1Ec0Ga2I1kfboL3QEegEdBa6EF2BbkK3oy+ib6Mn0K8xGAwNo42xwnhiIjFJmLWYEsw+TBvmHGYQM46Zw2Kx8lh9rB3WH8vECrCF2CrsUexZ7BB2AvsGR8Sp4Mxw7rgoHA+Xj6vAHcGdwQ3hJnELeCm8Jt4G749n43PwpfhGfDf+On4Cv0CQJmgT7AghhCTCJkIloZVwkfCA8JJIJKoRrYmBRC5xI7GSeIx4mThGfEuSIemRXEjRJCFpB+kQ6RzpLuklmUzWIjuSo8gC8g5yM/kC+RH5jQRFwkjCS4ItsUGiRqJDYkjiuSReUlPSSXK1ZK5kheQJyeuSM1J4KS0pFymm1HqpGqmTUiNSc9IUaVNpf+lU6RLpI9JXpKdksDJaMm4ybJkCmYMyF2TGKQhFneJCYVE2UxopFykTVAxVm+pFTaIWU7+jDlBnZWVkl8mGyWbL1sielh2lITQtmhcthVZKO04bpr1borTEaQlnyfYlrUuGlszLLZVzlOPIFcm1yd2WeydPl3eTT5bfJd8p/1ABpaCnEKiQpbBf4aLCzFLqUtulrKVFS48vvacIK+opBimuVTyo2K84p6Ss5KGUrlSldEFpRpmm7KicpFyufEZ5WoWiYq/CVSlXOavylC5Ld6Kn0CvpvfRZVUVVT1Whar3qgOqCmrZaqFq+WpvaQ3WCOkM9Xr1cvUd9VkNFw08jT6NF454mXpOhmai5V7NPc15LWytca6tWp9aUtpy2l3audov2Ax2yjoPOGp0GnVu6GF2GbrLuPt0berCehV6iXo3edX1Y31Kfq79Pf9AAbWBtwDNoMBgxJBk6GWYathiOGdGMfI3yjTqNnhtrGEcZ7zLuM/5oYmGSYtJoct9UxtTbNN+02/R3Mz0zllmN2S1zsrm7+QbzLvMXy/SXcZbtX3bHgmLhZ7HVosfig6WVJd+y1XLaSsMq1qrWaoRBZQQwShiXrdHWztYbrE9Zv7WxtBHYHLf5zdbQNtn2iO3Ucu3lnOWNy8ft1OyYdvV2o/Z0+1j7A/ajDqoOTIcGh8eO6o5sxybHSSddpySno07PnU2c+c7tzvMuNi7rXM65Iq4erkWuA24ybqFu1W6P3NXcE9xb3Gc9LDzWepzzRHv6eO7yHPFS8mJ5NXvNelt5r/Pu9SH5BPtU+zz21fPl+3b7wX7efrv9HqzQXMFb0ekP/L38d/s/DNAOWBPwYyAmMCCwJvBJkGlQXlBfMCU4JvhI8OsQ55DSkPuhOqHC0J4wybDosOaw+XDX8LLw0QjjiHUR1yIVIrmRXVHYqLCopqi5lW4r96yciLaILoweXqW9KnvVldUKq1NWn46RjGHGnIhFx4bHHol9z/RnNjDn4rziauNmWS6svaxnbEd2OXuaY8cp40zG28WXxU8l2CXsTphOdEisSJzhunCruS+SPJPqkuaT/ZMPJX9KCU9pS8Wlxqae5Mnwknm9acpp2WmD6frphemja2zW7Fkzy/fhN2VAGasyugRU0c9Uv1BHuEU4lmmfWZP5Jiss60S2dDYvuz9HL2d7zmSue+63a1FrWWt78lTzNuWNrXNaV78eWh+3vmeD+oaCDRMbPTYe3kTYlLzpp3yT/LL8V5vDN3cXKBVsLBjf4rGlpVCikF84stV2a9021DbutoHt5turtn8sYhddLTYprih+X8IqufqN6TeV33zaEb9joNSydP9OzE7ezuFdDrsOl0mX5ZaN7/bb3VFOLy8qf7UnZs+VimUVdXsJe4V7Ryt9K7uqNKp2Vr2vTqy+XeNc01arWLu9dn4fe9/Qfsf9rXVKdcV17w5wD9yp96jvaNBqqDiIOZh58EljWGPft4xvm5sUmoqbPhziHRo9HHS4t9mqufmI4pHSFrhF2DJ9NProje9cv+tqNWytb6O1FR8Dx4THnn4f+/3wcZ/jPScYJ1p/0Pyhtp3SXtQBdeR0zHYmdo52RXYNnvQ+2dNt293+o9GPh06pnqo5LXu69AzhTMGZT2dzz86dSz83cz7h/HhPTM/9CxEXbvUG9g5c9Ll4+ZL7pQt9Tn1nL9tdPnXF5srJq4yrndcsr3X0W/S3/2TxU/uA5UDHdavrXTesb3QPLh88M+QwdP6m681Lt7xuXbu94vbgcOjwnZHokdE77DtTd1PuvriXeW/h/sYH6AdFD6UeVjxSfNTws+7PbaOWo6fHXMf6Hwc/vj/OGn/2S8Yv7ycKnpCfVEyqTDZPmU2dmnafvvF05dOJZ+nPFmYKf5X+tfa5zvMffnP8rX82YnbiBf/Fp99LXsq/PPRq2aueuYC5R69TXy/MF72Rf3P4LeNt37vwd5MLWe+x7ys/6H7o/ujz8cGn1E+f/gUDmPP8usTo0wAAAAlwSFlzAAAOxAAADsQBlSsOGwAAUupJREFUeF7t3Q+MldWd//HDdv2lglYQRKNBUCRxUSqISgQWhVZAWMRlqQRhcY0IEVFcgqUKFlGhpRCKSjFQjEoRgmtZAUWKOggrEsB/FGHdosiflShgUWToppvN/ObznecMZ565d+bcmTvD/Hm/ksdz77nn+TuX833On+faZO+BQ0UOAIBKNCkqlrwGACCrv0lSAAAqRMAAAEQhYAAAohAwAABRCBgAgCgEDABAFAIGACAKAQMAEIWAAQCIQsAAAEQhYAAAohAwAABRCBgAgCg5BYyjR4+63bt3u5MnTyY5QP2h765fMlF+ixYt3PLly5Oc3FR3/Wzuu+8+2y5QkUWLFtl3pSbl9PPmOpilS5e6zZs3u44dOya5QN2lm5znn3/ezZgxI8k5Zfz48W706NGubdu29l4Vfo8ePdyCBQvc8OHDLS8X1V0/G//v7tixY0lO/unYd+zYkbyrWD7PLcb27dvdxo0b3f79++1937593Y9+9CPXtGlTex/SeaxduzaqbL7pOJcsWZK8K9G8eXPXp08f161btxo/htr4nuSlS0p3PzUd2YBcqdK46aabLFhMmTLFrV+/3m52lM6aNcu9+uqrbs6cOUnpxk3BYty4cVFLbVK9okr/zTfftPfvvPOOGzVqlBszZky5no4NGzZYwH7xxRft/Z49e7KWrQmffvqpVdjar6fv2JAhQ2rtGGqcWhixiu/IioojZtGuXbuSnBLK02dAXVFYWFjUuXNn+24WFBQkuWWpTPiZvtcqv2zZsiQnN9VdPxv/7642+XM53f+u+/XrV6a+0d9sxIgRdmwLFy5McouKjhw5Ynn6m6uMN3Xq1Br5m2SifaT3pWOprWOoje9JtVoYaoL5/lpFVb3WomZhSJH/kUcesbsF3dGlPxe/nqLwmjVrrKwWrZuWLqPXDSJ6I2/ULbRv3z5Le/funeSWpS6CbJ+l6ful76L/jvsuj4r48kqzfT+1HX1/c9luY7Ju3boy3d/6m02YMMFe79y501JZuXKlpY899liZrh91OcoLL7xgaW3TsfguvHfffdfSNP3NVfep+7Qivlym+rO2VCtgrF69urSJunXr1tIma9gXqgChJtk333zjunfvbietZqP+kYS0npqbarr9/Oc/tzy917oazAlNnjzZmpqdOnWybf7mN79xq1atSj4FXGm3hLqkqksVvr6z+i7673jxnazdrGQKBN99950bOXJkaXmlWtIVgtbXdvRdDrerwFGX6Zx1jP3797fuaC26IUxXZPq3rnNUqptLX15p+t9/Lpo1a5a8OsUHjx/+8IeWen58SvXT6VLcyrC0+O7fUk/XRddCf3N9vzp06GDXK/090bXu0qVLaTkteq9rWuuSlkaUXLuk1NzXZ7Nnz05ySvgmmpqRnt5r0We+Sam0+CJZvs8rvmu092FzVMJtoXHz3xF1XeQiU5eSz9P30H/v9V3L1C3iy2rx32Mt+v4rL9O/g23btpV+t7V++vsudalLSsflz12f6Vr589Pir5H4bYTnr+vlz7H4hjMpmRutp/XDv5PfZibZ6q180/Gkjyu8XmH3p75DOubwe6VU79PfW+Xpuum7ojJ+P8oP1cb3pEYDhi+frsx14soPL6DeZ/oHrgsV7lOp3usfG5CJ/46kv5P+H1q4hN8jv174D16fKy89DqLvtPLDf7TZ9qtKQ/laKpP+vov/d1SbKruG6X9/vhIP/w37begaKYh7Pl/jE7nStdR6Wj+sV/ReSyb++oXXtCb4a6Pj0z616NyVF36nxAdR1YUhfx0rO1a/fliuNr4nNfrgnmYMyBtvvFHaR6tFU+Tkyy+/tNTLNNf87LPPTl6VUH/mwIED3fz58635dlqaZaiXrrrqKhvT0KJZU6Ku0opolotoWmSoVatW9j3UOEm6K0bdpCH1Y6usZOp/9s83aTl+/HiSWze99tprlvqxAW/QoEGuXbt29nm6S+Wee+4p7RoS/RtWWXUTVdZvn6Y6Revpb6i/QV2mcV19P9Q9OXjw4CS3hJ/1de2111rqtW/f3tLKpjhfdNFFyavaVaMBw9NgT7io704X8bLLLktK5EZjGpoWqTEOTbnTtrRNQFq3bm2pvh8hVVQagNQyYMCAJLdi+gcv4UCql+kGJ5tMZX2/vvqufd90pudF6hIfMMIA4PXs2dPSw4cPW+qlb/okW9mKaCxJ45f6917bz4Lk4o477nBPP/20DdirnlKQ8zfPnh9T0fciXPQdSFNQ1VhwOGak8a7ToVYChi5epiUdXWPpH++YMWNsTr3uNPQl9neMgO481SLIdPdfV6gS0M3OV199Zc+F6GErLfo+ozwFC00cUEtNlXCabwFmarH45yLUqqltqqd0bAp0mY5NdVimxbdINMHAP0uk8/efn676rkYDhu4EpKa6jfyUNe3H3/kAors8mTlzpqVV5buS0t9h/UPWXaMqofSvHmiWVMiXFV9W3bSi7pqq3jidDr7Srahi9i28iuRSNgwW6l3I1NpTK00+//xzSz1de93N67gzrVcb7r33Xkv931x8gNP56zuRXvyxvvXWW3bjowCh4OM/r9ddUvpjqPmvL5H+QP7LpOmCohMN7/T0j0/T8KpCYyD60vh9aLvad7qPGY2bbiRUwehGItNURd3Zxxg2bJilTz75pH23Pd8SUIWfprtJVXKen/I9fvx4S+Wss86yNByz0Pbr+o3PiBEjLA0rP9G/Q1XMuubpsQWdU3jtfFn9m61sHEJdzRMnTqwwWIhaa+LHRz1VuOKP+3TQT5NI+CzIj3/8Y0v1szVpYff6iRMnLP3BD35gqXfaWs7J4HeUbLMN0rNPwhkBftZHeknPiFKetp/mt+336WdYhUt6FgYgmlHjZzlp0XdO3zE/y0aLvp+evmPKS89o0XrK1/csXF/52ofn1/czWPR5uG44q0fr+Rk0Kq99aruna/ZLmj+X9L9J/TtTvhYds8ppBpk/l/C4/Ta06Dro364Wf/0qm1brp56qrP5O2l968dc/vJ7K1761feVpSc/UrAnar99/WnpWVHi8usb+fPz3xQtn4+k667z0nfblwutdG9+TnH58UJGv+EQzNu/UatBvqejOKf1jX7q727JlS2m01GwVNatCiph6ICc9mKZ1NTAW7jPc3gUXXGB3KtnuPAB9b/2ECyn+R2XfP81mCr9v+l7pzjnT91MthuJ/sDarSuvrB+XST4n79dXnrO+sWsMqrwdM1aWSvptWeT2hrIfOtE21itRF4bfhy2vfmlFYmwO9+veoAVh192q8MeR7CPzArejf4OOPP16me81vQ2MOBw8etJmNnvLU81AR/d2KK8rkXWYfffRR6d9Q5ceOHVvuuIqDTcZB+nzT30l/T/WspLsZdS2eeeYZ+x74743+/mph6CFTP7lC1zu9vq63Wrhqqake/OlPf2rfXQ2ET5o0qfTc1ALTdyn998qnnAIGAHj+BjLTjZ74gKHuOwW7im4486my40LV1cosKQANjypjtcRiK2VfvqZ7A3I9LsQjYAAAohAwANQIdQmpT17jjGgYGMMAAEShhQEAiELAAABEIWAAAKIQMAAAUQgYAIAoBAwAQBQCBgAgCgEDABCFgAEAiELAAABEIWAAAKI02XvgEL8lBQCoFC0MAECUJsePH6eFAQCoFC0MAEAUAgYAIAoBAwAQhYABAIhCwAAARCFgAACiEDAAAFEIGACAKAQMAEAUAgYAIAoBAwAQhYABAIhCwAAARGmQAePrr792L7/8svvkk0+SHABAdVXr581PnjzpNm7c6N5//3337bffWl7Hjh3dVVdd5a6++mp7fzooUPTt29fNnTvXDR06NMkFAFRHlVsYmzZtskp57Nix7oMPPkhynZs2bZq79dZb3ejRo5McAEBDUKWAoWAxcuRIe71+/Xq3cuVKN3v2bFsOHDjgli5dSncQADQwOQcMjQ88/PDD7uKLL3bLly93l19+efLJKb169XLvvPNO8g4A0BDkHDBWr15trYi77rrLtWnTJsmNo4HoIUOGWLDp2bOne+qpp2wcJKTWy4MPPmj5+lxltY4oT9tQd5fy/Wevv/66fQ4AqDk5B4zNmzdb+uMf/9jSWKr8J06caIPh6saaOXOme+mll6xrKwwahw8fditWrHCLFy92b7/9tg1c+wH0tWvXunnz5rl27dpZ/vTp0628xlEUaAAANSfnWVK6qxe1Mjx1U23YsCF5V6JZs2bu5ptvttd+1tKYMWPc1KlTLU80WK4B8oULF5aWVQtCgUX7WbVqlWvZsqXli/Zz5plnuqZNmyY5mbfNLCkAyL8qz5IKHTlyxCr5cNFdv7dlyxZLBwwYYKnnWw6alpumFkgYLETvw2AhfgzFT+sFANSMKgeMsBtJlbZaHH5J2717t6ULFiyw8YlwkUyVfevWrZNXZfmH8tLbAADUrJwDxrBhwyytyrTZH/7wh65bt25lFnUbDR8+PClRMXVhdenSxcYxNODutwEAqHk5B4w+ffpYqim1sc455xxLNTNKYwrpJfap8CeeeMJSDYjff//9pesDAGpezgHjhhtucNdcc43NZFLXUIyuXbtaqllO1fHee+9ZGj77kZ6WCwCoGTkHDA06P/nkkzaLSYPbGkPQlFZ1UanLSNNn03yQWbRokbUSVFaLnp/QcxSx3Vu+O8wHKo1nqKXhZ24BAGpOlQa9NX6gZykmTZpkM6D0LIWmsWqK7Jw5c+z1K6+8kpQ+FWRU4Sto6HMtmknVvn376ApfwUGBR4FK6wwePNiNGjXKXX/99UkJAEBNqdav1XoHDx50hYWF9jrsLspErQJNwxVV+ulpsjH8/qq6PgAgd3kJGACAhq9KXVIAgMaHgAEAiELAAABEIWAAAKIQMAAAUQgYAIAoBAwAQBQCBgAgCgEDABCFgAEAiELAAABEIWAAAKIQMAAAUQgYAIAoTfYeOMTPmwMAKtWkqFjyGgCArOiSAgBEIWAAAKIQMAAAUQgYAIAoBAwAQBQCBgAgCgEDABCFgAEAiELAAABEIWAAAKIQMAAAUQgYAIAoBAwAQBQCRp4sX77ctWjRwu3evTvJAYCGJaeA4SvFmAXV98gjj2S8tlruu+++pBQA1I6c/n8YunvesWNH8s65L774ws2YMcN169bN3XHHHUluieHDhyevGgcF03HjxrnNmze7jh07JrnVo6CwdOlSN2XKFHfRRRcluSUuuOAC17t37+QdANS8av0PlBRAevTo4UaOHOmefvrpJLdxqsmAkc9tAkBV1egYxtGjR92aNWusMt2wYYM7efJk8skpCjoq519nKpst38u0De3X52USHltlZTPZvn17hccUCvcVU74qwn3o2ELan66L36+OIeZY/Dlq2b9/f5J7ivap7frXfpueth1uo6bOHUAtUQujqnbt2lXUvHnzovHjxyc5pxQUFNhnnTt3ts+VatE6IZVZtmxZ0ezZs+21X0aMGFFUWFiYNT+k/Ezb0P62bduWlDpl4cKFZcr5RfmV0b51DOF6/fr1K5o6daq9Tp9f7HXIROUzbTNN5+iPw+9Dx+P5v5PKZTr2I0eOJCVLhOeo1L8Otym65sr32/eLaF86jjBfS6b9AagfaiRg+HxVNL5y95WQKpGwwlc55emzffv22We+4lfl4vPF569evdree+E2fOWqMj4/5Cs5lfUVl9bxlVumABPyx6DKU8caHq8Wv3/J5Tpk4gOGzkXbCpeQrpOWcB/hefjj0D513DpvlQnPJeT3q2Dn+cCn6+f5a6nt+nz/t1J55fn34f5iAjOAuqdGAoYqIOX7ysLzlU5Ymel9WNmJKrSK8tP7U16mClgVsz4LK1gfGNJ3uf7Y0pVnWrb1/TmH+8rlOmTiK+5MS0jvda7ZZPs76Xqlt6dj1ftM18EHcM8HjMqumef3lz4OAPVDjYxhvPrqq5YWVxDWx+2XEydOWP6nn35qqdehQwfXtGnT5J1zrVq1sjRbfiY9e/YsU1Z69eplqZ/ZpX744grRDRw4sNy2NNNL5s+fb2kmFa2faVA61+uQzZIlS2zgO1xCmnTw2muv2TTcisZiunfvnrwqoeulcxEdl/zxj3+09JxzzilzzFp0ztpPWmUz4vz6unYA6q8aCRi+YtAMqnAZNWqU5Z911lmW1rSzzz47eVVCFbfoOYa0dLDJpKL1M8nXdWjfvr0FpHAJzZo1yxXftVuwU5DV7KqKAkcofS4+mGm6dPq4FSzatWtnn1dGg9tz5syx7YfbAFB/1egsqWPHjmVcBg0alJRoHDJdAy35ug4Kdo8//rjbs2ePPbOhqbg33XRT8mnVLFiwIOMxf/jhh0mJiml9BR0dj47Lrw+g/qqRgOG7OTJNxawpmSoj331y1VVXWervjlWhpqd3+qmoulPPJlw/7bvvvktenVLb10FdRpMmTbIWh1o36gYKpY9R18Cfi2+1XHbZZZam182VgoXo2ZSKuhIB1B81GjB0dxlWzHqtZwVqgoKDukA8BQDfheIrQ92J+4CgO2BPx/Xkk0/a61tuucXSTMI+//A89Hry5MnJu1Nq4zooGOkZh9DBgwctbdasmaWejjF8TsIHizBIXnHFFXbN1L0VlhU/FhHDB9fwvNPbA1DPJIPfVZJt9o34GUqaVaTPtfj3oWzr55KvPM3g0baV+n1pSc9E0uwmP9PJl/XvNe2zMv6ctegc/X79lNFwlpTEXodMwvNIL/pMilsS9t5vX8ej9+G5+GP2x6I0PK70jC9dM33my4bbDac0+1lS6XMW/5nW02sdj9+vP3YA9Uu1fhpEA6tvvPFG1t810h1lQUGB++abb+y9Zumobz3sotDdcab1c8nXwKpmCqkrRi0H3XW3bdvWDRgwoNwAseiu96233nLr16+39xWVzUTb/7d/+7fS/fzLv/yL5etapM9PYq5DJmolZZtJpa6ja6+91l7rrn/t2rV2PMWVtOvTp0+Z66PPNeCsa6N9L1682I6lU6dObsiQIRmPQ3/blStXup07d9p7nWfXrl3LbVcz0LKdS3je2u/gwYPd1q1b7bP03xVA3VetgFFX+IDR2H/PKpswYDS2H4UEkD81OksKANBwEDAAAFEaRJeUulw0I0j97ChPYzaaZtu6detKx00AIJsGETAAADWPLikAQBQCBgAgCgEDABCFgAEAiELAAABEIWAAAKIQMAAAUQgYAIAoBAwAQBQCBgAgCgEDABClyd4Dh/gtKQBApZocP36cgAEAqBRdUgCAKAQMAEAUAgYAIAoBAwAQhYABAIhCwAAARCFgAACiEDAAAFEIGACAKAQMAEAUAgYAIAoBAwAQhYABAIhCwAAARMnp580PHjzoevTokbwrb/369e7yyy9P3p1+Ot7hw4fb63feecdSAEDV5NTCKCwstPSaa65xc+fOLbecd9559nmMTZs2uQcffNAq9Zp04MAB17p16+QdKqO/h/4u+vsAQKhKXVLt27d3Q4cOLbe0bNkyKVG5w4cPuxUrVpQGoZrQpk0bCxgrV65MclAZ/T30d9HfBwBC33vooYceTV5X6ujRo+53v/udu/LKK13fvn2T3MxOnjzptmzZ4rZv327rqfVxxhln2GeffPKJ++ijj9y7777revbs6f7v//7PyrRq1co+F5V5++233e7du93+/fvdueee65o2bZp8WtYHH3zgNm/ebGXPPvtsd8455ySflGznL3/5S5k8T3fTb7zxhq2XPkZPZY4fP27rf/31127jxo1ux44d7m/+5m/KHK+n8965c2fp8WTarrajQKb1Vf7NN9+0bYbHni0/LbzO2a5T7Dmo3J/+9Cf36quvuk6dOll5Hb+2lz5+v43K/jYAGo6cxjBU+SpQDBs2zM2ePTvJLU8VyuDBg+319ddf7z777DO7Y9U4gt9GJqpEte7dd9/t3nvvvSS3xMUXX+yeeuopd/XVVyc5JfuZPHmyjZ2Epk+f7u688057rfXSx6tKdtq0aXYnHVLZmTNnul69eiU5zrpnZNCgQW7kyJH22ps0aZK7//77k3clgUvvdR4hdeH99re/LW2Bvfzyy27ixIkWVDTGEpZfunSpu+SSSzLmh8clquB9OZ2jrrOu28KFC93NN9+clIo/B51/JuHY1HPPPWfXLi285gAapip1SR07dswq/nBR5e29+OKLVoktX77cKmp1CakiFlU8qoBUUYkqN733lb4q8xtvvNHeaxtaVEbpggULrIz3y1/+0sqpstLnOg6NpXzxxRdJicx8sNAxaJ1wHw8//HCZcxHdwSvfl/nwww8tCMyZM8cqbe/EiRPugQcesEDgj0f7UCW+evXqpNQpquxVXmV1HqqwtZ8wX9vy+SFdJ5UTlfHXWfsbO3as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'; 
        
doc.addImage(tabela1URL, 'PNG', 228, 39, 58, 107);
   
 
//Notas da Tabela
doc.setFontSize(8.5);
 
/////      GLOBAL      /////
//Geral     
doc.text(256, 51.7, "1");
//Tempo de Espera    
doc.text(256, 59.2, "2");
//     
doc.text(256, 66.7, "3");
//  
doc.text(256, 74.6, "4");
// 
doc.text(256, 82, "5");
//Sinalizacao    
doc.text(256, 89.7, "6");
//Cordialidade    
doc.text(256, 97.4, "7");
//Limpeza    
doc.text(256, 105, "8");
//Triagem    
doc.text(256, 112.7, "9");
//Medico   
doc.text(256, 120.4, "10"); 
//Enfermaria     
doc.text(256, 127.9, "5");  
//Exames      
doc.text(256, 135.7, "8"); 
//Internacao     
doc.text(256, 143.4, "2"); 
     
     
/////      TOP 20      /////
//Geral     
doc.text(267.5, 51.7, "1");
//Tempo de Espera    
doc.text(267.5, 59.2, "2");
//     
doc.text(267.5, 66.7, "3");
//  
doc.text(267.5, 74.6, "4");
// 
doc.text(267.5, 82, "5");
//Sinalizacao    
doc.text(267.5, 89.7, "6");
//Cordialidade    
doc.text(267.5, 97.4, "7");
//Limpeza    
doc.text(267.5, 105, "8");
//Triagem    
doc.text(267.5, 112.7, "9");
//Medico   
doc.text(267.5, 120.4, "10"); 
//Enfermaria     
doc.text(267.5, 127.9, "5");  
//Exames      
doc.text(267.5, 135.7, "8"); 
//Internacao     
doc.text(267.5, 143.4, "2"); 
     
     
/////      REAL      /////
//Geral     
doc.text(277.8, 51.7, "1");
//Tempo de Espera    
doc.text(277.8, 59.2, "2");
//     
doc.text(277.8, 66.7, "3");
//  
doc.text(277.8, 74.6, "4");
// 
doc.text(277.8, 82, "5");
//Sinalizacao    
doc.text(277.8, 89.7, "6");
//Cordialidade    
doc.text(277.8, 97.4, "7");
//Limpeza    
doc.text(277.8, 105, "8");
//Triagem    
doc.text(277.8, 112.7, "9");
//Medico   
doc.text(277.8, 120.4, "10"); 
//Enfermaria     
doc.text(277.8, 127.9, "5");  
//Exames      
doc.text(277.8, 135.7, "8"); 
//Internacao     
doc.text(277.8, 143.4, "2");  
     
//Logo     
logo1URL = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAroAAAJtCAYAAADZxtOOAAAABGdBTUEAALGOfPtRkwAAACBjSFJNAACHDwAAjA8AAP1SAACBQAAAfXkAAOmLAAA85QAAGcxzPIV3AAAKOWlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAEjHnZZ3VFTXFofPvXd6oc0wAlKG3rvAANJ7k15FYZgZYCgDDjM0sSGiAhFFRJoiSFDEgNFQJFZEsRAUVLAHJAgoMRhFVCxvRtaLrqy89/Ly++Osb+2z97n77L3PWhcAkqcvl5cGSwGQyhPwgzyc6RGRUXTsAIABHmCAKQBMVka6X7B7CBDJy82FniFyAl8EAfB6WLwCcNPQM4BOB/+fpFnpfIHomAARm7M5GSwRF4g4JUuQLrbPipgalyxmGCVmvihBEcuJOWGRDT77LLKjmNmpPLaIxTmns1PZYu4V8bZMIUfEiK+ICzO5nCwR3xKxRoowlSviN+LYVA4zAwAUSWwXcFiJIjYRMYkfEuQi4uUA4EgJX3HcVyzgZAvEl3JJS8/hcxMSBXQdli7d1NqaQffkZKVwBALDACYrmcln013SUtOZvBwAFu/8WTLi2tJFRbY0tba0NDQzMv2qUP91829K3NtFehn4uWcQrf+L7a/80hoAYMyJarPziy2uCoDOLQDI3fti0zgAgKSobx3Xv7oPTTwviQJBuo2xcVZWlhGXwzISF/QP/U+Hv6GvvmckPu6P8tBdOfFMYYqALq4bKy0lTcinZ6QzWRy64Z+H+B8H/nUeBkGceA6fwxNFhImmjMtLELWbx+YKuGk8Opf3n5r4D8P+pMW5FonS+BFQY4yA1HUqQH7tBygKESDR+8Vd/6NvvvgwIH554SqTi3P/7zf9Z8Gl4iWDm/A5ziUohM4S8jMX98TPEqABAUgCKpAHykAd6ABDYAasgC1wBG7AG/iDEBAJVgMWSASpgA+yQB7YBApBMdgJ9oBqUAcaQTNoBcdBJzgFzoNL4Bq4AW6D+2AUTIBnYBa8BgsQBGEhMkSB5CEVSBPSh8wgBmQPuUG+UBAUCcVCCRAPEkJ50GaoGCqDqqF6qBn6HjoJnYeuQIPQXWgMmoZ+h97BCEyCqbASrAUbwwzYCfaBQ+BVcAK8Bs6FC+AdcCXcAB+FO+Dz8DX4NjwKP4PnEIAQERqiihgiDMQF8UeikHiEj6xHipAKpAFpRbqRPuQmMorMIG9RGBQFRUcZomxRnqhQFAu1BrUeVYKqRh1GdaB6UTdRY6hZ1Ec0Ga2I1kfboL3QEegEdBa6EF2BbkK3oy+ib6Mn0K8xGAwNo42xwnhiIjFJmLWYEsw+TBvmHGYQM46Zw2Kx8lh9rB3WH8vECrCF2CrsUexZ7BB2AvsGR8Sp4Mxw7rgoHA+Xj6vAHcGdwQ3hJnELeCm8Jt4G749n43PwpfhGfDf+On4Cv0CQJmgT7AghhCTCJkIloZVwkfCA8JJIJKoRrYmBRC5xI7GSeIx4mThGfEuSIemRXEjRJCFpB+kQ6RzpLuklmUzWIjuSo8gC8g5yM/kC+RH5jQRFwkjCS4ItsUGiRqJDYkjiuSReUlPSSXK1ZK5kheQJyeuSM1J4KS0pFymm1HqpGqmTUiNSc9IUaVNpf+lU6RLpI9JXpKdksDJaMm4ybJkCmYMyF2TGKQhFneJCYVE2UxopFykTVAxVm+pFTaIWU7+jDlBnZWVkl8mGyWbL1sielh2lITQtmhcthVZKO04bpr1borTEaQlnyfYlrUuGlszLLZVzlOPIFcm1yd2WeydPl3eTT5bfJd8p/1ABpaCnEKiQpbBf4aLCzFLqUtulrKVFS48vvacIK+opBimuVTyo2K84p6Ss5KGUrlSldEFpRpmm7KicpFyufEZ5WoWiYq/CVSlXOavylC5Ld6Kn0CvpvfRZVUVVT1Whar3qgOqCmrZaqFq+WpvaQ3WCOkM9Xr1cvUd9VkNFw08jT6NF454mXpOhmai5V7NPc15LWytca6tWp9aUtpy2l3audov2Ax2yjoPOGp0GnVu6GF2GbrLuPt0berCehV6iXo3edX1Y31Kfq79Pf9AAbWBtwDNoMBgxJBk6GWYathiOGdGMfI3yjTqNnhtrGEcZ7zLuM/5oYmGSYtJoct9UxtTbNN+02/R3Mz0zllmN2S1zsrm7+QbzLvMXy/SXcZbtX3bHgmLhZ7HVosfig6WVJd+y1XLaSsMq1qrWaoRBZQQwShiXrdHWztYbrE9Zv7WxtBHYHLf5zdbQNtn2iO3Ucu3lnOWNy8ft1OyYdvV2o/Z0+1j7A/ajDqoOTIcGh8eO6o5sxybHSSddpySno07PnU2c+c7tzvMuNi7rXM65Iq4erkWuA24ybqFu1W6P3NXcE9xb3Gc9LDzWepzzRHv6eO7yHPFS8mJ5NXvNelt5r/Pu9SH5BPtU+zz21fPl+3b7wX7efrv9HqzQXMFb0ekP/L38d/s/DNAOWBPwYyAmMCCwJvBJkGlQXlBfMCU4JvhI8OsQ55DSkPuhOqHC0J4wybDosOaw+XDX8LLw0QjjiHUR1yIVIrmRXVHYqLCopqi5lW4r96yciLaILoweXqW9KnvVldUKq1NWn46RjGHGnIhFx4bHHol9z/RnNjDn4rziauNmWS6svaxnbEd2OXuaY8cp40zG28WXxU8l2CXsTphOdEisSJzhunCruS+SPJPqkuaT/ZMPJX9KCU9pS8Wlxqae5Mnwknm9acpp2WmD6frphemja2zW7Fkzy/fhN2VAGasyugRU0c9Uv1BHuEU4lmmfWZP5Jiss60S2dDYvuz9HL2d7zmSue+63a1FrWWt78lTzNuWNrXNaV78eWh+3vmeD+oaCDRMbPTYe3kTYlLzpp3yT/LL8V5vDN3cXKBVsLBjf4rGlpVCikF84stV2a9021DbutoHt5turtn8sYhddLTYprih+X8IqufqN6TeV33zaEb9joNSydP9OzE7ezuFdDrsOl0mX5ZaN7/bb3VFOLy8qf7UnZs+VimUVdXsJe4V7Ryt9K7uqNKp2Vr2vTqy+XeNc01arWLu9dn4fe9/Qfsf9rXVKdcV17w5wD9yp96jvaNBqqDiIOZh58EljWGPft4xvm5sUmoqbPhziHRo9HHS4t9mqufmI4pHSFrhF2DJ9NProje9cv+tqNWytb6O1FR8Dx4THnn4f+/3wcZ/jPScYJ1p/0Pyhtp3SXtQBdeR0zHYmdo52RXYNnvQ+2dNt293+o9GPh06pnqo5LXu69AzhTMGZT2dzz86dSz83cz7h/HhPTM/9CxEXbvUG9g5c9Ll4+ZL7pQt9Tn1nL9tdPnXF5srJq4yrndcsr3X0W/S3/2TxU/uA5UDHdavrXTesb3QPLh88M+QwdP6m681Lt7xuXbu94vbgcOjwnZHokdE77DtTd1PuvriXeW/h/sYH6AdFD6UeVjxSfNTws+7PbaOWo6fHXMf6Hwc/vj/OGn/2S8Yv7ycKnpCfVEyqTDZPmU2dmnafvvF05dOJZ+nPFmYKf5X+tfa5zvMffnP8rX82YnbiBf/Fp99LXsq/PPRq2aueuYC5R69TXy/MF72Rf3P4LeNt37vwd5MLWe+x7ys/6H7o/ujz8cGn1E+f/gUDmPP8usTo0wAAAAlwSFlzAAAOxAAADsQBlSsOGwAAGR1JREFUeF7t3c2OJNtVhuGukrBlybKwBZJvAJgiMeXGYcoU3wZCgAwIBsb8NJ0+WaeruvMnMnJHxFrffp7JKckzV8Tab66zs87L5y8+AbCpf/3P//j0t7/5+0+//uWvPv3Vn/35p5//7Gfn/wWArQhdAAAivZ7/CQAAUYQuAACRhC4AAJGELgAAkYQuAACRhC4AAJGELgAAkYQuAACRhC4AAJGELgAAkYQuAACRXj5/cf4ZgAe8vLycfzqeUQ7wPaELTK1SrB7BEQAkE7pArNkjdhTHBNCV0AXaErI1OEaAqoQuUJqY7c0RAxxJ6AIldAvaaqPT/38A3xO6wO4qRdnsI9DvAkgmdIFNHRlSxtsYfodAV0IXGGrPKDK+atg7hP3egaWELrDaXoFjTPXk+QCOJnSBxbYOF+NoDp4jYC9CF7hqyyAxevjWVs+bZw3mJXSBHwkNKvE8As8SujC50TFhpLAlzyvwCKELkxEKJPE8A7cIXZjAyBgwMqjMsw68J3Qh1KgD34igM+8BzE3oQpARh7qRQDLvCMxF6EJzzx7cRgAz8/5ANqELDTmcYTzvFeQRutCEQxj2432DDEIXCnPYwvG8h9CX0IWCnjlYvdKwHe8m9CJ0oQgHKPTinYX6hC4cbO1h6dWFOrzHUJPQhQM4FCGX9xvqELqwozUHoFcU+vLOw7GELmzMdgc4Eb2wP6ELG3GoAZeYDbAfoQuDOcSAJcwK2J7QhUEePbS8esAb0QvbELrwBIcTMJKZAmMJXVjB9hbYmjkDzxO68AAHD7A3cwfWE7qwgIMGOJo5BI8TunCDgwWoxlyC5YQuXOAgATp4ZFaZU8xI6MI7Dg2gI7MLLhO68IVDAkhglsFHQpepORSARGYb/EDoMiWHADADs47ZCV2mYugDMzL7mJXQZRpLB71XAkhlDjIboUs8gx3gI3ORWQhdYvlXdQC3CV7SCV0iGd4Ay1gKkEzoEkXgAqxjfpJI6BLBgAYYwzwlidClNQMZYBvmKwlez/+EdgxhgO0snZ1LZzEcwUaXdgQuwL7MXboSurSyZNh6pAG2IXjpRujSgsAFqMNMpguhS2m2BwA1mc90IHQpy8YAoD6zmsqELuXYEgD0I3ipyJ8Xo5Slg9KwBKhlyVxeusiAUWx0KcEmACCHmU4VNroczkAEyLJkZtvusgcbXQ4jcAHymfUcyUaXQxh8AHNYMsttd9mKjS67uzfQPJIAmcx/9iZ02Y0tLgDOAvYkdNmFT/EAvOdcYA9Cl0355A7ANc4ItubLaGzGAAPgliVnwJKzBK6x0WUT/pUUAI9wbrAFoctQtrgArOUMYTShyzA+jQMwgvOEUdzRZQhDCYBR7p0ZSza/cCJ0eZrIBWA0scsIri6wmsAFYA/OG9ay0WUVQweAvdw7U2x3uUbo8jCRC8DexC5ruLrAYkuGiMcJgC05i3iE0GURW1wAKnEusYSrC9xlmABQzb2zZ8nml3xCl5tELgBViV3uEbpcJXIBqO50Ft06j8Tu3IQuF90aDPeGCgDsTexyiS+j8YEtLgCdOcd4z0aXHxkOAHR376yy3Z2L0OUPRC4AKcQub4QuIheAOGKXE6E7OZELQKrTGXbrHBO7+YTuxG694PeGAwB0IXbnJXQndS9yASCJ2J2T0J2QyAVgRmJ3PkJ3MiIXgJndi13Bm0XoTkTkAsD9M0/s5hC6E7j3CVXkAjAbsTsHoRvu3osqcgGYldjNJ3SDiVwAuE3sZhO6oUQuACwjdnMJ3UAiFwAeczobb52PYrcnoRvm1ot47yUGgNmJ3SxCN8i9yAUA7hO7OYRuCJELAOOI3QxCN4DIBYDxxG5/Qrc5kQsA2xG7vQndUCIXAMYQu30J3cauvVwiFwDGErs9Cd2mvFQAsC+LpH6EbkO3ItdLCADbuXbOWkDVJHSbEbkAUJPYrUfoNiJyAeB4t85csVuL0G1C5AJAHWK3B6HbgMgFgHrEbn1CtziRCwB1id3ahG5hIhcA6hO7dQndokQuAPQhdmsSus2IXACoyRldj9At6NonPy8QANR27ay21T2G0C1G5AJAb2K3DqFbiBcAALI56/cldIu49eDb5gJAL7fObrG7H6FbgMgFgDxi93hCtzCRCwC9id1jCd2DXXvIRS4AZHCmH0foHkjkAsAcrp3ttrrbEroHEbkAMBexuz+hewAPNADwnjbYhtAtxDYXALI56/cldHfmygIAzM0Vhv0I3R2JXADgROzuQ+juxIMLACyhGcYRuju49cDa5gLAnG41gNgdQ+geSOQCwNy0wLaE7saufSLzYAMAJ9eawFb3eUJ3QyIXAFhC7G5D6AIAFCZ21xO6G7HNBQAeoRHGE7obELkAwBquMIwldAfzIAIAzxC74wjdndjmAgDsS+gO5MoCADCCre4YQncQkQsAjCR2nyd0AQCaEbvLCN0BbHMBgC1oiecI3SeJXABgS64wrCd0AQCaEru3Cd0n2OYCAHvQFusI3ZVELgCwJ1cYHid0AQCasFB7jNBdwTYXAKjEVvcyofsgkQsAHMkVhuWELgAAkYTuA2xzAYAKbHWXEboLiVwAoBKxe5/QBQAgktBdwDYXAKjIVvc2obuSyAUAKhC71wndOzwkAAA9Cd0bXFkAADqw1b1M6AIAEEnoXmGbCwB0Yqv7PaH7AJELAFSmVT4Suhf4AhoAkGTWthG6C/mEBAB0oFm+ErrfsM0FABLN2DhCdwGfjACATq61y2yxK3Tfsc0FAMghdM+uRa5tLgDQka2u0AUAiDX7wk7ofmGbCwDMZJatrtC9QuQCAAlmbprpQ9cX0ACAGc3QQDa6F9jmAgBJZm2bqUPXNhcAmFl6C9nofsM2FwBINGPjTBu6trkAANlNZKP7jm0uAJBsttaZMnRtcwEAvkptIxvdM9tcAGAGMzXPdKFrmwsA8L3ERrLR/cI2FwCYySztM1Xo2uYCAFyX1krTb3RtcwGAGc3QQNOErm0uAMB9Sc009UbXNhcAmFl6C/kyGgAAH6RsdacIXdcWAAAuS97qTrvRdW0BACBbfOja5gIAPC6hoabc6NrmAgB8ldpG0aFrmwsAsF73lppuo2ubCwDwvcRGig1d21wAgOd1bqqpNrq2uQAA16W10pRfRgMAIF9k6Lq2AAAwTte2mmaj69oCAMB9Sc0UF7q2uQAA43VsrCk2ura5AADLpbSTL6MBABApKnRdWwAA2E631orf6Lq2AADwuISGcnUBAIBIMaHr2gIAwFiXtrqdmit6o+vaAgDAvCJC1zYXAGA/XdordqNrmwsA8LzOTeXLaAAARGofuq4tAADsr0ODRW50XVsAABina1u5ugAAQKTWoevaAgDAcaq3WNxG17UFAIDxOjaWqwsAAERqG7quLQAAHK9yk0VtdF1bAADYTrfWcnUBAIBIQhcAgEgtQ/fSXRDXFgAAtnepuare07XRBQAgktAFACBSu9B1bQEA4Fhdri/Y6AIAEEnoAgAQqVXoVv4vbwAAzK5aq7Xf6LqfCwCwvw4N5uoCAACRhC4AAJHahK77uQAA9VVqttYbXfdzAQCOU73FXF0AACCS0AUAIFKL0HU/FwCgjyrt1naj634uAMDxKjeZqwsAAEQSugAARCofuu7nAgD0U6HhWm503c8FAKijapu5ugAAQCShCwBAJKELAECk0qHri2gAAH0d3XLtNrq+iAYAUE/FRnN1AQCASEIXAIBIQhcAgEhlQ9cX0QAA+juy6VptdH0RDQCgrmqt5uoCAACRhC4AAJGELgAAkYQuAACRSobupW/n+SIaAEB9l5rtqL+8YKMLAEAkoQsAQCShCwBAJKELAEAkoQsAQCShCwBApHKh60+LAQD0VuVPjNnoAgAQSegCABBJ6AIAEEnoAgAQSegCABBJ6AIAEEnoAgAwXIU/MVYqdP0NXQAARrHRBQAgktAFACCS0AUAIJLQBQAgktAFACCS0AUAIJLQBQAgktAFACCS0AUAIJLQBQAgktAFAGATnz9/Pv90jDKh+/Lycv7pq6P/zwEAYKxLzbcVG10AACIJXQAAIgldAAAiCV0AACIJXQAAIgldAAAiCV0AACIJXQAAIgldAAAiCV0AACIJXQAAIgldAAAiCV0AACIJXQAAIgldAAAiCV0AACIJXQAAIgldAAAiCV0AACIJXQAAIgldAAAiCV0AACIJXQAAIgldAAAiCV0AACIJXQAAIgldAAAiCV0AACIJXQAAIgldAAAilQndz58/n3/66uXl5fwTAADdXGq5S823FRtdAAAiCV0AACIJXQAAIgldAAAiCV0AACIJXQAAIgldAAAiCV0AACIJXQAAIgldAAAiCV0AACKVCt1L/+3jS/+NZAAAuMdGFwCA4S4tKy8tNbckdAEAiCR0AQCIJHQBAIgkdAEAiCR0AQCIJHQBAIhULnT9LV0AgN4q/GmxExtdAAAiCV0AACIJXQAAIgldAAAiCV0AACIJXQAAIpUMXX9iDACgp0rNZqMLAMCmjvgbuidCFwCASEIXAIBIQhcAgEitQtcX0gAAWKps6B51aRkAgHUuLSWPbDpXFwAAiCR0AQCIJHQBAIjULnR9IQ0AgCVKh64vpAEA9FDti2gnri4AABBJ6AIAEEnoAgAQqWXo+kIaAEAdVdusfOj6QhoAQD8VGs7VBQAAIgldAAAitQ1d93QBAI5XuclahK57ugAAfVRpN1cXAACIJHQBAIjUOnTd0wUAOE71FmsTuu7pAgDUV6nZXF0AACCS0AUAIFL70HVPFwBgfx0arFXouqcLAFBXtVZzdQEAgEgRoev6AgAA32oXuq4vAAAc69KSsWKjuboAAEAkoQsAQKSY0HVPFwBge52aq2XouqcLAFBH1TZzdQEAgEhRoev6AgDAdrq1VtvQdX0BAOB4lZvM1QUAACLFha7rCwAA43VsrNah6/oCAMBxqreYqwsAAESKDF3XFwAAxunaVu1D1/UFAID9dWgwVxcAAIgUG7quLwAAPK9zU0WErusLAAD76dJe0VcXbHUBAOYVE7q2ugAAY3VfGvoyGgAAi3VaLsaHrusLAACPS2ioqNB1fQEAYDvdWsvVBQAAIk0Ruq4vAAAsl9JOcaHr+gIAwHgdG2uaqwu2ugAAc4kMXVtdAIB1Li0Hu7aVL6MBABBpqtB1fQEA4Lq0VooNXdcXAACe17mppru6YKsLAPC9xEaKDl1bXQCA9bq31JRfRrPVBQD4KrWN4kPXVhcA4HEJDTXlRhcAgHzThq7rCwAA2U00Rei6vgAAsFxKO019dcFWFwCYWXoLTRO6troAAPclNdP0X0az1QUAZjRDA00Vura6AADXpbXS9BvdE1tdAGAms7TPdKFrqwsA8L3ERrLRPbPVBQBmMFPzTBm6troAAF+ltpGN7ju2ugBAstlaZ9rQtdUFAMhuIhvdb9jqAgCJZmycqUPXVhcAmFl6C9noXmCrCwAkmbVtpg9dW10AYEYzNJCN7hW2ugBAgpmbRuh+YasLAMxklvYRujfY6gIAnc3eMkL37NonG7ELACSZ6d9kC10AgECWdUL3A1tdACDBtXaZ7XtJQvcbsz0AAMAcZmwcobuQrS4A0IFm+UroXmCrCwAkmbVthO4DfEICACrTKh8J3SuuffLxAAEAncz8b6qFLgBAAMu47wndG2x1AYAOrrXJ7N87Erp3zP6AAAB0JXRXstUFACqwzb1O6C7gCgMAUJHIvU3oAgAQSeguZKsLAFRim3uf0H2A2AUAKhO5HwldAIBmLNmWEboPstUFAI7kysJyQncFDxIAUIk2uUzoDmSrCwBsSWs8Ruiu5AoDALAnVxYeJ3Q3IHYBAI4ndJ/gExQAsAfb3HWE7pNcYQAAtiRy1xO6A4hdAGALWuI5QhcAoBnb3GWE7iC2ugDASK4sPE/oDiR2AYARRO4YQhcAgEhCdzBbXQDgGba54wjdDYhdAGANkTuW0N2Z2AUALtEI4wndjfjkBQCMoCnWE7obcoUBAFjClYVtCN2NiV0A4BaRux2heyCxCwBz0wLbEro78IkMAHiEdhhD6O7EFQYA4D1XFrYndHckdgGAE5G7D6FbhNgFgDk48/cjdHd265OaBx8Ast06621zxxO6B/AgAwDvaYNtCN2DXHugbXUBINO1M17kbkfoHkjsAsAcRO4xhG5RYhcAMjjTjyN0D3brk5wXAwB6u3WW2+ZuT+gWIHYBII/IPZ7QLULsAsAcRO5+hG4hHnwAyHBtSeWs35fQLebaC2CrCwA9iNw6hG4jYhcAanNW1yJ0C7r1ic8LBAA13TqjbXOPIXSLErsA0IfIrUnoFiZ2AaA+kVuX0C1O7AJAXSK3NqHbgNgFgHpEbn1CtwmxCwB1iNwehG4jYhcAahO5tQjdZsQuABzLeduH0G3Ip0UAOIYrC70I3aauvUw+ZQLANkRuP0I3kNgFgLFEbk9Ct7FbL5bYBYAxRG5fQrc5sQsA2xG5vQndAGIXAMYTuf0J3RBiFwDGEbkZhG4QsQsAzxO5OYRumHuxK3gB4DqRm0XoBrr3IopdAPieyM0jdEOJXQBY5nQmitxMQjeY2AWA2+6dhSK3N6EbTuwCwGUiN5/QnYDYBYCPRO4chO4kTi/srZdW7AIwC5E7D6E7GbELwMxE7lyE7oTELgAzunXGnc5GkZtH6E5K7AIwk3uRSyahOzGxC8AMRO68Xr78gv2GJ3cvaj0iAHTkfMNGl7svuu0uAN2IXE6ELn8gdgFIIXJ5I3T5kdgFoDuRy3tClw9OA+DWEBC7AFQlcvmW0OUisQtAJ7fOpntLHHL5qwvc5NMxAJU5p7jFRpeb7g0I210AjiJyuUfocpfYBaAakcsSQpdFxC4AVYhclnJHl4cZMAAcwfnDo2x0edi9QWK7C8BoIpc1hC6riF0A9iJyWUvostqS2BW8ADxD5PIMd3QZwiACYCTnCiPY6DLEvYFjswvAUiKXUWx0GWpJ0HrkALjEGcJoNroMdRpA94aQ7S4A3xK5bEHosgmxC8BS986EJUsUuMTVBTblEzoA1zgj2JrQZRdLPq0DMA/nAnsQuuzGJ3cAnAXsyR1ddnMaXPeG15IBCEBPIpe92ehyCMMOYB5mPkex0eUQSwaa7S5AfyKXI9nocjhDECCP2U4FNrocbsmgs90F6EPkUoWNLqUYjgB9meFUY6NLKUsGoO0uQD0il4psdCnL0ASoz6ymMhtdyloyGE8D1oYX4Bgil+psdGnBMAWow0ymC6FLG0s3tx5pgG2Yw3QjdGnHoAXYl7lLV+7o0s5pkC4ZpksHMwDXiVw6s9GlNQMYYBvmKwmELhEMZIAxzFOSCF2iGNAA65ifJHJHlyhLB/BpoC8d6gDpRC6pbHSJZXAD3GZOkk7oEs8gB/jIXGQWQpdpGOzA7JbOwROzkARCl6kY8sCMzD5mJXSZkqEPzMCsY3ZCl6k5BIBEZhv8QOjCFw4FIIFZBh+9/t0//fb8I8zrNPCXDv3TQfLIYQKwtUfm0iPzDrp7/c1v//38IyB4gU4ELtz2+jf/8M/nH4E3a4JX9AJ7eHTmCFxm9vpvv//v84/Atx49IAQvsJVH54vAhS+h+4+/+6/zj8A1ghc4isCF9V5/97//d/4RuEfwAnsRuPC813/53e/PPwJLrQ1e0QvcsmZWCFy47vV/vByw2tsBsyZ6Ad6smQsCF+57Pf8TeNLa4BW9MKc1M+BtzghcWEbowmBrDiHBC/NY876LW1hH6MJGBC/wnsCF/Qld2NjbQfXIYfV2IIpe6G3Nu7xmZgCXCV3Y0ZrDa81BCRxn7TsrbmE8oQsHeDvQRC9kWPturp0FwDJCFw629pBbe7ACYzzzDopb2IfQhSLeDr5nohfY3rNxu+YdB9YRulDQs8G79iAGLnvmvRK3cJzXX//sp+cfgWreDsi1h+QzhzPM7P27s+b9efbdBcZ4/ZOf/uT8I1DZswfnM4c2zODZd+TZdxQY7/WPf/JH5x+BLp49UJ890CHFs+/Cs+8isK3Xv/7TX55/BDp69pB99qCHTt4/72ufeXELfbz+xS9+fv4R6Oz94bv2AB4RAVDJqGf62XcLOMbrX/7qF+cfgSQjDuZRkQB7GvXMjniHgGO9fHmBvcEwkZHBanxQgWcauEbowsRGBsIbI4UtjX5mPa+QTegCP9oifE+MGdbyYQx4htAFrhK+7MnzBowmdIHFtgqRE6NoLp4lYA9CF1hty1h5Y0T15hkBjiR0gWH2iJr3jK8a/N6BqoQusKm9I+g9420Mv0OgK6EL7O7IcHrP+PtBld/Hid8JMJLQBUqoFFtLVBydnf4/dPQAexC6QGndApiPHDHAkYQu0JIArsVRAlQkdIFYYngMxwTQldAFpiWEf+AYAFIJXYAVqkWyUQ7wPaELAECk1/M/AQAgitAFACCS0AUAIJLQBQAgktAFACCS0AUAIJLQBQAgktAFACCS0AUAIJLQBQAgktAFACCS0AUAIJLQBQAgktAFACCS0AUAIJLQBQAgktAFACCS0AUAIJLQBQAgktAFACCS0AUAIJLQBQAgktAFACCS0AUAIJLQBQAgktAFACCS0AUAIJLQBQAg0KdP/w8tkhAYEHOszgAAAABJRU5ErkJggg==';     
     
doc.addImage(logo1URL, 'PNG', 266, 10, 20, 18);
     
     
//Linha     
linha1URL = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABC0AAAADCAIAAAA4B2IJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAoSURBVGhD7dcxAQAADAIg+5d2zzJ4QQtSAACArQAAAKz9RwAAADbaA9ip9lu58XirAAAAAElFTkSuQmCC';    
     
doc.addImage(linha1URL, 'PNG', 10, 192, 276, 0.6);
     
//q s     
qs1URL = 'data:image/png;base64,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';     

doc.addImage(qs1URL, 'PNG', 10, 194, 29, 4);     
     
 
//Pagina
doc.setFontSize(12);
     
doc.text(274, 197, "Pag. 2");
     

     
//Add Page2
doc.addPage('a4', 'l');     
     

//Titulo
doc.setFontSize(28);
     
doc.text(10, 20, "Nota Geral do Último Trimestre");
 
     
//Grafico2 GERAL
var chart2URL = ctx2.toDataURL();
doc.addImage(chart2URL, 'PNG', 10.5, 34.5, 208, 114);

 
doc.addImage(titulos1URL, 'PNG', 10, 34.5, 208, 3);    

     
doc.addImage(nums1URL, 'PNG', 9, 35, 4, 114);
     
     
//Legendas2
legendas2URL = 'data:image/png;base64,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';
  
doc.addImage(legendas2URL, 'PNG', 13.7, 146, 198.8, 14);    
     
     
//Tabela     
tabela2URL = 'data:image/png;base64,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'; 
     
doc.addImage(tabela2URL, 'PNG', 228, 39, 58, 99);
     
 
//Notas da Tabela
doc.setFontSize(8.5);
 
/////      GLOBAL      /////
//Semana 1     
doc.text(256, 51.5, "1");
//Semana 2     
doc.text(256, 59, "2");
//Semana 3     
doc.text(256, 66.5, "3");
//Semana 4     
doc.text(256, 74.2, "4");
//Semana 5     
doc.text(256, 81.8, "5");
//Semana 6     
doc.text(256, 89.5, "6");
//Semana 7     
doc.text(256, 97.2, "7");
//Semana 8     
doc.text(256, 104.8, "8");
//Semana 9     
doc.text(256, 112.2, "9");
//Semana 10      
doc.text(256, 119.9, "10"); 
//Semana 11     
doc.text(256, 127.6, "5");  
//Semana 12      
doc.text(256, 135.2, "8"); 
     
     
/////      TOP 20      /////
//Semana 1     
doc.text(267.5, 51.5, "1");
//Semana 2     
doc.text(267.5, 59, "2");
//Semana 3   
doc.text(267.5, 66.5, "3");
//Semana 4   
doc.text(267.5, 74.2, "4");
//Semana 5   
doc.text(267.5, 81.8, "5");
//Semana 6   
doc.text(267.5, 89.5, "6");
//Semana 7   
doc.text(267.5, 97.2, "7");
//Semana 8   
doc.text(267.5, 104.8, "8");
//Semana 9   
doc.text(267.5, 112.2, "9");
//Semana 10   
doc.text(267.5, 119.9, "10"); 
//Semana 11   
doc.text(267.5, 127.6, "5");   
//Semana 12   
doc.text(267.5, 135.2, "8"); 
     
     
/////      REAL      /////
//Semana 1     
doc.text(277.8, 51.5, "1");
//Semana 2     
doc.text(277.8, 59, "2");
//Semana 3   
doc.text(277.8, 66.5, "3");
//Semana 4   
doc.text(277.8, 74.2, "4");
//Semana 5   
doc.text(277.8, 81.8, "5");
//Semana 6   
doc.text(277.8, 89.5, "6");
//Semana 7   
doc.text(277.8, 97.2, "7");
//Semana 8   
doc.text(277.8, 104.8, "8");
//Semana 9   
doc.text(277.8, 112.2, "9");
//Semana 10   
doc.text(277.8, 119.9, "10"); 
//Semana 11   
doc.text(277.8, 127.6, "5");   
//Semana 12   
doc.text(277.8, 135.2, "8"); 
     
      
doc.addImage(logo1URL, 'PNG', 266, 10, 20, 18);
  
     
doc.addImage(linha1URL, 'PNG', 10, 192, 276, 0.6);
     
doc.addImage(qs1URL, 'PNG', 10, 194, 29, 4);     
     
 
//Pagina
doc.setFontSize(12);
     
doc.text(274, 197, "Pag. 3");
     

     
//Add Page2
doc.addPage('a4', 'l');     
     

//Titulo
doc.setFontSize(28);
     
doc.text(10, 20, "Nota de Espera");
     
//Grafico3 NOTA DE ESPERA
var chart3URL = ctx3.toDataURL();
doc.addImage(chart3URL, 'PNG', 10.5, 34.5, 208, 114);
 
doc.addImage(titulos1URL, 'PNG', 10, 34.5, 208, 3);    
     
doc.addImage(nums1URL, 'PNG', 9, 35, 4, 114);
    
doc.addImage(legendas2URL, 'PNG', 13.7, 146, 198.8, 14);    

doc.addImage(tabela2URL, 'PNG', 228, 39, 58, 99);
     
 
//Notas da Tabela
doc.setFontSize(8.5);
 
/////      GLOBAL      /////
//Semana 1     
doc.text(256, 51.5, "1");
//Semana 2     
doc.text(256, 59, "2");
//Semana 3     
doc.text(256, 66.5, "3");
//Semana 4     
doc.text(256, 74.2, "4");
//Semana 5     
doc.text(256, 81.8, "5");
//Semana 6     
doc.text(256, 89.5, "6");
//Semana 7     
doc.text(256, 97.2, "7");
//Semana 8     
doc.text(256, 104.8, "8");
//Semana 9     
doc.text(256, 112.2, "9");
//Semana 10      
doc.text(256, 119.9, "10"); 
//Semana 11     
doc.text(256, 127.6, "5");  
//Semana 12      
doc.text(256, 135.2, "8"); 
     
     
/////      TOP 20      /////
//Semana 1     
doc.text(267.5, 51.5, "1");
//Semana 2     
doc.text(267.5, 59, "2");
//Semana 3   
doc.text(267.5, 66.5, "3");
//Semana 4   
doc.text(267.5, 74.2, "4");
//Semana 5   
doc.text(267.5, 81.8, "5");
//Semana 6   
doc.text(267.5, 89.5, "6");
//Semana 7   
doc.text(267.5, 97.2, "7");
//Semana 8   
doc.text(267.5, 104.8, "8");
//Semana 9   
doc.text(267.5, 112.2, "9");
//Semana 10   
doc.text(267.5, 119.9, "10"); 
//Semana 11   
doc.text(267.5, 127.6, "5");   
//Semana 12   
doc.text(267.5, 135.2, "8"); 
     
     
/////      REAL      /////
//Semana 1     
doc.text(277.8, 51.5, "1");
//Semana 2     
doc.text(277.8, 59, "2");
//Semana 3   
doc.text(277.8, 66.5, "3");
//Semana 4   
doc.text(277.8, 74.2, "4");
//Semana 5   
doc.text(277.8, 81.8, "5");
//Semana 6   
doc.text(277.8, 89.5, "6");
//Semana 7   
doc.text(277.8, 97.2, "7");
//Semana 8   
doc.text(277.8, 104.8, "8");
//Semana 9   
doc.text(277.8, 112.2, "9");
//Semana 10   
doc.text(277.8, 119.9, "10"); 
//Semana 11   
doc.text(277.8, 127.6, "5");   
//Semana 12   
doc.text(277.8, 135.2, "8"); 
       
doc.addImage(logo1URL, 'PNG', 266, 10, 20, 18);
    
doc.addImage(linha1URL, 'PNG', 10, 192, 276, 0.6);
     
doc.addImage(qs1URL, 'PNG', 10, 194, 29, 4);     
     
 
//Pagina
doc.setFontSize(12);
     
doc.text(274, 197, "Pag. 4");
     

     
//Add Page2
doc.addPage('a4', 'l');     
     

//Titulo
doc.setFontSize(28);
     
doc.text(10, 20, "Nota de ");
 
     
//Grafico4 NOTA DE 
var chart4URL = ctx4.toDataURL();
doc.addImage(chart4URL, 'PNG', 10.5, 34.5, 208, 114);
   
doc.addImage(titulos1URL, 'PNG', 10, 34.5, 208, 3);        
    
doc.addImage(nums1URL, 'PNG', 9, 35, 4, 114);   
     
doc.addImage(legendas2URL, 'PNG', 13.7, 146, 198.8, 14);    
   
doc.addImage(tabela2URL, 'PNG', 228, 39, 58, 99);
     
 
//Notas da Tabela
doc.setFontSize(8.5);
 
/////      GLOBAL      /////
//Semana 1     
doc.text(256, 51.5, "1");
//Semana 2     
doc.text(256, 59, "2");
//Semana 3     
doc.text(256, 66.5, "3");
//Semana 4     
doc.text(256, 74.2, "4");
//Semana 5     
doc.text(256, 81.8, "5");
//Semana 6     
doc.text(256, 89.5, "6");
//Semana 7     
doc.text(256, 97.2, "7");
//Semana 8     
doc.text(256, 104.8, "8");
//Semana 9     
doc.text(256, 112.2, "9");
//Semana 10      
doc.text(256, 119.9, "10"); 
//Semana 11     
doc.text(256, 127.6, "5");  
//Semana 12      
doc.text(256, 135.2, "8"); 
     
     
/////      TOP 20      /////
//Semana 1     
doc.text(267.5, 51.5, "1");
//Semana 2     
doc.text(267.5, 59, "2");
//Semana 3   
doc.text(267.5, 66.5, "3");
//Semana 4   
doc.text(267.5, 74.2, "4");
//Semana 5   
doc.text(267.5, 81.8, "5");
//Semana 6   
doc.text(267.5, 89.5, "6");
//Semana 7   
doc.text(267.5, 97.2, "7");
//Semana 8   
doc.text(267.5, 104.8, "8");
//Semana 9   
doc.text(267.5, 112.2, "9");
//Semana 10   
doc.text(267.5, 119.9, "10"); 
//Semana 11   
doc.text(267.5, 127.6, "5");   
//Semana 12   
doc.text(267.5, 135.2, "8"); 
     
     
/////      REAL      /////
//Semana 1     
doc.text(277.8, 51.5, "1");
//Semana 2     
doc.text(277.8, 59, "2");
//Semana 3   
doc.text(277.8, 66.5, "3");
//Semana 4   
doc.text(277.8, 74.2, "4");
//Semana 5   
doc.text(277.8, 81.8, "5");
//Semana 6   
doc.text(277.8, 89.5, "6");
//Semana 7   
doc.text(277.8, 97.2, "7");
//Semana 8   
doc.text(277.8, 104.8, "8");
//Semana 9   
doc.text(277.8, 112.2, "9");
//Semana 10   
doc.text(277.8, 119.9, "10"); 
//Semana 11   
doc.text(277.8, 127.6, "5");   
//Semana 12   
doc.text(277.8, 135.2, "8"); 
    
doc.addImage(logo1URL, 'PNG', 266, 10, 20, 18);
    
doc.addImage(linha1URL, 'PNG', 10, 192, 276, 0.6);

doc.addImage(qs1URL, 'PNG', 10, 194, 29, 4);        
 
//Pagina
doc.setFontSize(12);
     
doc.text(274, 197, "Pag. 5");
     

     
//Add Page2
doc.addPage('a4', 'l');     
     

//Titulo
doc.setFontSize(28);
     
doc.text(10, 20, "Nota de Recepção");
 
     
//Grafico5 NOTA DE 
var chart5URL = ctx5.toDataURL();
doc.addImage(chart5URL, 'PNG', 10.5, 34.5, 208, 114);
 
doc.addImage(titulos1URL, 'PNG', 10, 34.5, 208, 3);    
     
doc.addImage(nums1URL, 'PNG', 9, 35, 4, 114);
 
doc.addImage(legendas2URL, 'PNG', 13.7, 146, 198.8, 14);    
    
doc.addImage(tabela2URL, 'PNG', 228, 39, 58, 99);
     
 
//Notas da Tabela
doc.setFontSize(8.5);
 
/////      GLOBAL      /////
//Semana 1     
doc.text(256, 51.5, "1");
//Semana 2     
doc.text(256, 59, "2");
//Semana 3     
doc.text(256, 66.5, "3");
//Semana 4     
doc.text(256, 74.2, "4");
//Semana 5     
doc.text(256, 81.8, "5");
//Semana 6     
doc.text(256, 89.5, "6");
//Semana 7     
doc.text(256, 97.2, "7");
//Semana 8     
doc.text(256, 104.8, "8");
//Semana 9     
doc.text(256, 112.2, "9");
//Semana 10      
doc.text(256, 119.9, "10"); 
//Semana 11     
doc.text(256, 127.6, "5");  
//Semana 12      
doc.text(256, 135.2, "8"); 
     
     
/////      TOP 20      /////
//Semana 1     
doc.text(267.5, 51.5, "1");
//Semana 2     
doc.text(267.5, 59, "2");
//Semana 3   
doc.text(267.5, 66.5, "3");
//Semana 4   
doc.text(267.5, 74.2, "4");
//Semana 5   
doc.text(267.5, 81.8, "5");
//Semana 6   
doc.text(267.5, 89.5, "6");
//Semana 7   
doc.text(267.5, 97.2, "7");
//Semana 8   
doc.text(267.5, 104.8, "8");
//Semana 9   
doc.text(267.5, 112.2, "9");
//Semana 10   
doc.text(267.5, 119.9, "10"); 
//Semana 11   
doc.text(267.5, 127.6, "5");   
//Semana 12   
doc.text(267.5, 135.2, "8"); 
     
     
/////      REAL      /////
//Semana 1     
doc.text(277.8, 51.5, "1");
//Semana 2     
doc.text(277.8, 59, "2");
//Semana 3   
doc.text(277.8, 66.5, "3");
//Semana 4   
doc.text(277.8, 74.2, "4");
//Semana 5   
doc.text(277.8, 81.8, "5");
//Semana 6   
doc.text(277.8, 89.5, "6");
//Semana 7   
doc.text(277.8, 97.2, "7");
//Semana 8   
doc.text(277.8, 104.8, "8");
//Semana 9   
doc.text(277.8, 112.2, "9");
//Semana 10   
doc.text(277.8, 119.9, "10"); 
//Semana 11   
doc.text(277.8, 127.6, "5");   
//Semana 12   
doc.text(277.8, 135.2, "8"); 
   
doc.addImage(logo1URL, 'PNG', 266, 10, 20, 18);
   
doc.addImage(linha1URL, 'PNG', 10, 192, 276, 0.6);

doc.addImage(qs1URL, 'PNG', 10, 194, 29, 4);     
     
 
//Pagina
doc.setFontSize(12);
     
doc.text(274, 197, "Pag. 6");
     

     
//Add Page2
doc.addPage('a4', 'l');     
     

//Titulo
doc.setFontSize(28);
     
doc.text(10, 20, "Nota de Organização");
 
     
//Grafico6 NOTA DE 
var chart6URL = ctx6.toDataURL();
doc.addImage(chart6URL, 'PNG', 10.5, 34.5, 208, 114);

doc.addImage(titulos1URL, 'PNG', 10, 34.5, 208, 3);    
   
doc.addImage(nums1URL, 'PNG', 9, 35, 4, 114);

doc.addImage(legendas2URL, 'PNG', 13.7, 146, 198.8, 14);    
  
doc.addImage(tabela2URL, 'PNG', 228, 39, 58, 99);
     
 
//Notas da Tabela
doc.setFontSize(8.5);
 
/////      GLOBAL      /////
//Semana 1     
doc.text(256, 51.5, "1");
//Semana 2     
doc.text(256, 59, "2");
//Semana 3     
doc.text(256, 66.5, "3");
//Semana 4     
doc.text(256, 74.2, "4");
//Semana 5     
doc.text(256, 81.8, "5");
//Semana 6     
doc.text(256, 89.5, "6");
//Semana 7     
doc.text(256, 97.2, "7");
//Semana 8     
doc.text(256, 104.8, "8");
//Semana 9     
doc.text(256, 112.2, "9");
//Semana 10      
doc.text(256, 119.9, "10"); 
//Semana 11     
doc.text(256, 127.6, "5");  
//Semana 12      
doc.text(256, 135.2, "8"); 
     
     
/////      TOP 20      /////
//Semana 1     
doc.text(267.5, 51.5, "1");
//Semana 2     
doc.text(267.5, 59, "2");
//Semana 3   
doc.text(267.5, 66.5, "3");
//Semana 4   
doc.text(267.5, 74.2, "4");
//Semana 5   
doc.text(267.5, 81.8, "5");
//Semana 6   
doc.text(267.5, 89.5, "6");
//Semana 7   
doc.text(267.5, 97.2, "7");
//Semana 8   
doc.text(267.5, 104.8, "8");
//Semana 9   
doc.text(267.5, 112.2, "9");
//Semana 10   
doc.text(267.5, 119.9, "10"); 
//Semana 11   
doc.text(267.5, 127.6, "5");   
//Semana 12   
doc.text(267.5, 135.2, "8"); 
     
     
/////      REAL      /////
//Semana 1     
doc.text(277.8, 51.5, "1");
//Semana 2     
doc.text(277.8, 59, "2");
//Semana 3   
doc.text(277.8, 66.5, "3");
//Semana 4   
doc.text(277.8, 74.2, "4");
//Semana 5   
doc.text(277.8, 81.8, "5");
//Semana 6   
doc.text(277.8, 89.5, "6");
//Semana 7   
doc.text(277.8, 97.2, "7");
//Semana 8   
doc.text(277.8, 104.8, "8");
//Semana 9   
doc.text(277.8, 112.2, "9");
//Semana 10   
doc.text(277.8, 119.9, "10"); 
//Semana 11   
doc.text(277.8, 127.6, "5");   
//Semana 12   
doc.text(277.8, 135.2, "8"); 
    
doc.addImage(logo1URL, 'PNG', 266, 10, 20, 18);
     
doc.addImage(linha1URL, 'PNG', 10, 192, 276, 0.6);

doc.addImage(qs1URL, 'PNG', 10, 194, 29, 4);     
     
 
//Pagina
doc.setFontSize(12);
     
doc.text(274, 197, "Pag. 7");
     

     
//Add Page2
doc.addPage('a4', 'l');     
     

//Titulo
doc.setFontSize(28);
     
doc.text(10, 20, "Nota de Sinalização");
 
     
//Grafico7 NOTA DE SINALIZACAO
var chart7URL = ctx7.toDataURL();
doc.addImage(chart7URL, 'PNG', 10.5, 34.5, 208, 114);

doc.addImage(titulos1URL, 'PNG', 10, 34.5, 208, 3);    
     
doc.addImage(nums1URL, 'PNG', 9, 35, 4, 114);
  
doc.addImage(legendas2URL, 'PNG', 13.7, 146, 198.8, 14);    
    
doc.addImage(tabela2URL, 'PNG', 228, 39, 58, 99);
     
 
//Notas da Tabela
doc.setFontSize(8.5);
 
/////      GLOBAL      /////
//Semana 1     
doc.text(256, 51.5, "1");
//Semana 2     
doc.text(256, 59, "2");
//Semana 3     
doc.text(256, 66.5, "3");
//Semana 4     
doc.text(256, 74.2, "4");
//Semana 5     
doc.text(256, 81.8, "5");
//Semana 6     
doc.text(256, 89.5, "6");
//Semana 7     
doc.text(256, 97.2, "7");
//Semana 8     
doc.text(256, 104.8, "8");
//Semana 9     
doc.text(256, 112.2, "9");
//Semana 10      
doc.text(256, 119.9, "10"); 
//Semana 11     
doc.text(256, 127.6, "5");  
//Semana 12      
doc.text(256, 135.2, "8"); 
     
     
/////      TOP 20      /////
//Semana 1     
doc.text(267.5, 51.5, "1");
//Semana 2     
doc.text(267.5, 59, "2");
//Semana 3   
doc.text(267.5, 66.5, "3");
//Semana 4   
doc.text(267.5, 74.2, "4");
//Semana 5   
doc.text(267.5, 81.8, "5");
//Semana 6   
doc.text(267.5, 89.5, "6");
//Semana 7   
doc.text(267.5, 97.2, "7");
//Semana 8   
doc.text(267.5, 104.8, "8");
//Semana 9   
doc.text(267.5, 112.2, "9");
//Semana 10   
doc.text(267.5, 119.9, "10"); 
//Semana 11   
doc.text(267.5, 127.6, "5");   
//Semana 12   
doc.text(267.5, 135.2, "8"); 
     
     
/////      REAL      /////
//Semana 1     
doc.text(277.8, 51.5, "1");
//Semana 2     
doc.text(277.8, 59, "2");
//Semana 3   
doc.text(277.8, 66.5, "3");
//Semana 4   
doc.text(277.8, 74.2, "4");
//Semana 5   
doc.text(277.8, 81.8, "5");
//Semana 6   
doc.text(277.8, 89.5, "6");
//Semana 7   
doc.text(277.8, 97.2, "7");
//Semana 8   
doc.text(277.8, 104.8, "8");
//Semana 9   
doc.text(277.8, 112.2, "9");
//Semana 10   
doc.text(277.8, 119.9, "10"); 
//Semana 11   
doc.text(277.8, 127.6, "5");   
//Semana 12   
doc.text(277.8, 135.2, "8"); 
    
doc.addImage(logo1URL, 'PNG', 266, 10, 20, 18);
   
doc.addImage(linha1URL, 'PNG', 10, 192, 276, 0.6);

doc.addImage(qs1URL, 'PNG', 10, 194, 29, 4);     
     
 
//Pagina
doc.setFontSize(12);
     
doc.text(274, 197, "Pag. 8");
     

     
//Add Page2
doc.addPage('a4', 'l');     
     

//Titulo
doc.setFontSize(28);
     
doc.text(10, 20, "Nota de Cordialidade");
 
     
//Grafico8 NOTA DE CORDIALIDADE
var chart8URL = ctx8.toDataURL();
doc.addImage(chart8URL, 'PNG', 10.5, 34.5, 208, 114);

doc.addImage(titulos1URL, 'PNG', 10, 34.5, 208, 3);    
   
doc.addImage(nums1URL, 'PNG', 9, 35, 4, 114);

doc.addImage(legendas2URL, 'PNG', 13.7, 146, 198.8, 14);    
   
doc.addImage(tabela2URL, 'PNG', 228, 39, 58, 99);
     
 
//Notas da Tabela
doc.setFontSize(8.5);
 
/////      GLOBAL      /////
//Semana 1     
doc.text(256, 51.5, "1");
//Semana 2     
doc.text(256, 59, "2");
//Semana 3     
doc.text(256, 66.5, "3");
//Semana 4     
doc.text(256, 74.2, "4");
//Semana 5     
doc.text(256, 81.8, "5");
//Semana 6     
doc.text(256, 89.5, "6");
//Semana 7     
doc.text(256, 97.2, "7");
//Semana 8     
doc.text(256, 104.8, "8");
//Semana 9     
doc.text(256, 112.2, "9");
//Semana 10      
doc.text(256, 119.9, "10"); 
//Semana 11     
doc.text(256, 127.6, "5");  
//Semana 12      
doc.text(256, 135.2, "8"); 
     
     
/////      TOP 20      /////
//Semana 1     
doc.text(267.5, 51.5, "1");
//Semana 2     
doc.text(267.5, 59, "2");
//Semana 3   
doc.text(267.5, 66.5, "3");
//Semana 4   
doc.text(267.5, 74.2, "4");
//Semana 5   
doc.text(267.5, 81.8, "5");
//Semana 6   
doc.text(267.5, 89.5, "6");
//Semana 7   
doc.text(267.5, 97.2, "7");
//Semana 8   
doc.text(267.5, 104.8, "8");
//Semana 9   
doc.text(267.5, 112.2, "9");
//Semana 10   
doc.text(267.5, 119.9, "10"); 
//Semana 11   
doc.text(267.5, 127.6, "5");   
//Semana 12   
doc.text(267.5, 135.2, "8"); 
     
     
/////      REAL      /////
//Semana 1     
doc.text(277.8, 51.5, "1");
//Semana 2     
doc.text(277.8, 59, "2");
//Semana 3   
doc.text(277.8, 66.5, "3");
//Semana 4   
doc.text(277.8, 74.2, "4");
//Semana 5   
doc.text(277.8, 81.8, "5");
//Semana 6   
doc.text(277.8, 89.5, "6");
//Semana 7   
doc.text(277.8, 97.2, "7");
//Semana 8   
doc.text(277.8, 104.8, "8");
//Semana 9   
doc.text(277.8, 112.2, "9");
//Semana 10   
doc.text(277.8, 119.9, "10"); 
//Semana 11   
doc.text(277.8, 127.6, "5");   
//Semana 12   
doc.text(277.8, 135.2, "8");  
 
doc.addImage(logo1URL, 'PNG', 266, 10, 20, 18);
   
doc.addImage(linha1URL, 'PNG', 10, 192, 276, 0.6);

doc.addImage(qs1URL, 'PNG', 10, 194, 29, 4);     
     
 
//Pagina
doc.setFontSize(12);
     
doc.text(274, 197, "Pag. 9");
     

     
//Add Page2
doc.addPage('a4', 'l');     
     

//Titulo
doc.setFontSize(28);
     
doc.text(10, 20, "Nota de Limpeza");
 
     
//Grafico9 NOTA DE LIMPEZA
var chart9URL = ctx9.toDataURL();
doc.addImage(chart9URL, 'PNG', 10.5, 34.5, 208, 114);

doc.addImage(titulos1URL, 'PNG', 10, 34.5, 208, 3);    
   
doc.addImage(nums1URL, 'PNG', 9, 35, 4, 114);

doc.addImage(legendas2URL, 'PNG', 13.7, 146, 198.8, 14);    
  
doc.addImage(tabela2URL, 'PNG', 228, 39, 58, 99);
     
 
//Notas da Tabela
doc.setFontSize(8.5);
 
/////      GLOBAL      /////
//Semana 1     
doc.text(256, 51.5, "1");
//Semana 2     
doc.text(256, 59, "2");
//Semana 3     
doc.text(256, 66.5, "3");
//Semana 4     
doc.text(256, 74.2, "4");
//Semana 5     
doc.text(256, 81.8, "5");
//Semana 6     
doc.text(256, 89.5, "6");
//Semana 7     
doc.text(256, 97.2, "7");
//Semana 8     
doc.text(256, 104.8, "8");
//Semana 9     
doc.text(256, 112.2, "9");
//Semana 10      
doc.text(256, 119.9, "10"); 
//Semana 11     
doc.text(256, 127.6, "5");  
//Semana 12      
doc.text(256, 135.2, "8"); 
     
     
/////      TOP 20      /////
//Semana 1     
doc.text(267.5, 51.5, "1");
//Semana 2     
doc.text(267.5, 59, "2");
//Semana 3   
doc.text(267.5, 66.5, "3");
//Semana 4   
doc.text(267.5, 74.2, "4");
//Semana 5   
doc.text(267.5, 81.8, "5");
//Semana 6   
doc.text(267.5, 89.5, "6");
//Semana 7   
doc.text(267.5, 97.2, "7");
//Semana 8   
doc.text(267.5, 104.8, "8");
//Semana 9   
doc.text(267.5, 112.2, "9");
//Semana 10   
doc.text(267.5, 119.9, "10"); 
//Semana 11   
doc.text(267.5, 127.6, "5");   
//Semana 12   
doc.text(267.5, 135.2, "8"); 
     
     
/////      REAL      /////
//Semana 1     
doc.text(277.8, 51.5, "1");
//Semana 2     
doc.text(277.8, 59, "2");
//Semana 3   
doc.text(277.8, 66.5, "3");
//Semana 4   
doc.text(277.8, 74.2, "4");
//Semana 5   
doc.text(277.8, 81.8, "5");
//Semana 6   
doc.text(277.8, 89.5, "6");
//Semana 7   
doc.text(277.8, 97.2, "7");
//Semana 8   
doc.text(277.8, 104.8, "8");
//Semana 9   
doc.text(277.8, 112.2, "9");
//Semana 10   
doc.text(277.8, 119.9, "10"); 
//Semana 11   
doc.text(277.8, 127.6, "5");   
//Semana 12   
doc.text(277.8, 135.2, "8"); 
    
doc.addImage(logo1URL, 'PNG', 266, 10, 20, 18);
    
doc.addImage(linha1URL, 'PNG', 10, 192, 276, 0.6);

doc.addImage(qs1URL, 'PNG', 10, 194, 29, 4);     
     
 
//Pagina
doc.setFontSize(12);
     
doc.text(274, 197, "Pag. 10");
     

     
//Add Page2
doc.addPage('a4', 'l');     
     

//Titulo
doc.setFontSize(28);
     
doc.text(10, 20, "Nota de Triagem");
 
     
//Grafico10 NOTA DE TRIAGEM
var chart10URL = ctx10.toDataURL();
doc.addImage(chart10URL, 'PNG', 10.5, 34.5, 208, 114);

doc.addImage(titulos1URL, 'PNG', 10, 34.5, 208, 3);    
     
doc.addImage(nums1URL, 'PNG', 9, 35, 4, 114);

doc.addImage(legendas2URL, 'PNG', 13.7, 146, 198.8, 14);    
    
doc.addImage(tabela2URL, 'PNG', 228, 39, 58, 99);
     
 
//Notas da Tabela
doc.setFontSize(8.5);
 
/////      GLOBAL      /////
//Semana 1     
doc.text(256, 51.5, "1");
//Semana 2     
doc.text(256, 59, "2");
//Semana 3     
doc.text(256, 66.5, "3");
//Semana 4     
doc.text(256, 74.2, "4");
//Semana 5     
doc.text(256, 81.8, "5");
//Semana 6     
doc.text(256, 89.5, "6");
//Semana 7     
doc.text(256, 97.2, "7");
//Semana 8     
doc.text(256, 104.8, "8");
//Semana 9     
doc.text(256, 112.2, "9");
//Semana 10      
doc.text(256, 119.9, "10"); 
//Semana 11     
doc.text(256, 127.6, "5");  
//Semana 12      
doc.text(256, 135.2, "8"); 
     
     
/////      TOP 20      /////
//Semana 1     
doc.text(267.5, 51.5, "1");
//Semana 2     
doc.text(267.5, 59, "2");
//Semana 3   
doc.text(267.5, 66.5, "3");
//Semana 4   
doc.text(267.5, 74.2, "4");
//Semana 5   
doc.text(267.5, 81.8, "5");
//Semana 6   
doc.text(267.5, 89.5, "6");
//Semana 7   
doc.text(267.5, 97.2, "7");
//Semana 8   
doc.text(267.5, 104.8, "8");
//Semana 9   
doc.text(267.5, 112.2, "9");
//Semana 10   
doc.text(267.5, 119.9, "10"); 
//Semana 11   
doc.text(267.5, 127.6, "5");   
//Semana 12   
doc.text(267.5, 135.2, "8"); 
     
     
/////      REAL      /////
//Semana 1     
doc.text(277.8, 51.5, "1");
//Semana 2     
doc.text(277.8, 59, "2");
//Semana 3   
doc.text(277.8, 66.5, "3");
//Semana 4   
doc.text(277.8, 74.2, "4");
//Semana 5   
doc.text(277.8, 81.8, "5");
//Semana 6   
doc.text(277.8, 89.5, "6");
//Semana 7   
doc.text(277.8, 97.2, "7");
//Semana 8   
doc.text(277.8, 104.8, "8");
//Semana 9   
doc.text(277.8, 112.2, "9");
//Semana 10   
doc.text(277.8, 119.9, "10"); 
//Semana 11   
doc.text(277.8, 127.6, "5");   
//Semana 12   
doc.text(277.8, 135.2, "8"); 
    
doc.addImage(logo1URL, 'PNG', 266, 10, 20, 18);
    
doc.addImage(linha1URL, 'PNG', 10, 192, 276, 0.6);

doc.addImage(qs1URL, 'PNG', 10, 194, 29, 4);     
     
 
//Pagina
doc.setFontSize(12);
     
doc.text(274, 197, "Pag. 11");
     

     
//Add Page2
doc.addPage('a4', 'l');     
     

//Titulo
doc.setFontSize(28);
     
doc.text(10, 20, "Nota de Médico");
 
     
//Grafico11 NOTA DE MEDICO
var chart11URL = ctx11.toDataURL();
doc.addImage(chart11URL, 'PNG', 10.5, 34.5, 208, 114);

doc.addImage(titulos1URL, 'PNG', 10, 34.5, 208, 3);    
   
doc.addImage(nums1URL, 'PNG', 9, 35, 4, 114);
 
doc.addImage(legendas2URL, 'PNG', 13.7, 146, 198.8, 14);    
   
doc.addImage(tabela2URL, 'PNG', 228, 39, 58, 99);
     
 
//Notas da Tabela
doc.setFontSize(8.5);
 
/////      GLOBAL      /////
//Semana 1     
doc.text(256, 51.5, "1");
//Semana 2     
doc.text(256, 59, "2");
//Semana 3     
doc.text(256, 66.5, "3");
//Semana 4     
doc.text(256, 74.2, "4");
//Semana 5     
doc.text(256, 81.8, "5");
//Semana 6     
doc.text(256, 89.5, "6");
//Semana 7     
doc.text(256, 97.2, "7");
//Semana 8     
doc.text(256, 104.8, "8");
//Semana 9     
doc.text(256, 112.2, "9");
//Semana 10      
doc.text(256, 119.9, "10"); 
//Semana 11     
doc.text(256, 127.6, "5");  
//Semana 12      
doc.text(256, 135.2, "8"); 
     
     
/////      TOP 20      /////
//Semana 1     
doc.text(267.5, 51.5, "1");
//Semana 2     
doc.text(267.5, 59, "2");
//Semana 3   
doc.text(267.5, 66.5, "3");
//Semana 4   
doc.text(267.5, 74.2, "4");
//Semana 5   
doc.text(267.5, 81.8, "5");
//Semana 6   
doc.text(267.5, 89.5, "6");
//Semana 7   
doc.text(267.5, 97.2, "7");
//Semana 8   
doc.text(267.5, 104.8, "8");
//Semana 9   
doc.text(267.5, 112.2, "9");
//Semana 10   
doc.text(267.5, 119.9, "10"); 
//Semana 11   
doc.text(267.5, 127.6, "5");   
//Semana 12   
doc.text(267.5, 135.2, "8"); 
     
     
/////      REAL      /////
//Semana 1     
doc.text(277.8, 51.5, "1");
//Semana 2     
doc.text(277.8, 59, "2");
//Semana 3   
doc.text(277.8, 66.5, "3");
//Semana 4   
doc.text(277.8, 74.2, "4");
//Semana 5   
doc.text(277.8, 81.8, "5");
//Semana 6   
doc.text(277.8, 89.5, "6");
//Semana 7   
doc.text(277.8, 97.2, "7");
//Semana 8   
doc.text(277.8, 104.8, "8");
//Semana 9   
doc.text(277.8, 112.2, "9");
//Semana 10   
doc.text(277.8, 119.9, "10"); 
//Semana 11   
doc.text(277.8, 127.6, "5");   
//Semana 12   
doc.text(277.8, 135.2, "8"); 
   
doc.addImage(logo1URL, 'PNG', 266, 10, 20, 18);
    
doc.addImage(linha1URL, 'PNG', 10, 192, 276, 0.6);

doc.addImage(qs1URL, 'PNG', 10, 194, 29, 4);     
     
 
//Pagina
doc.setFontSize(12);
     
doc.text(274, 197, "Pag. 12");
     

     
//Add Page2
doc.addPage('a4', 'l');     
     

//Titulo
doc.setFontSize(28);
     
doc.text(10, 20, "Nota de Enfermaria");
 
     
//Grafico12 NOTA DE ENFERMARIA
var chart12URL = ctx12.toDataURL();
doc.addImage(chart12URL, 'PNG', 10.5, 34.5, 208, 114);

doc.addImage(titulos1URL, 'PNG', 10, 34.5, 208, 3);    
  
doc.addImage(nums1URL, 'PNG', 9, 35, 4, 114);

doc.addImage(legendas2URL, 'PNG', 13.7, 146, 198.8, 14);    
    
doc.addImage(tabela2URL, 'PNG', 228, 39, 58, 99);
     
 
//Notas da Tabela
doc.setFontSize(8.5);
 
/////      GLOBAL      /////
//Semana 1     
doc.text(256, 51.5, "1");
//Semana 2     
doc.text(256, 59, "2");
//Semana 3     
doc.text(256, 66.5, "3");
//Semana 4     
doc.text(256, 74.2, "4");
//Semana 5     
doc.text(256, 81.8, "5");
//Semana 6     
doc.text(256, 89.5, "6");
//Semana 7     
doc.text(256, 97.2, "7");
//Semana 8     
doc.text(256, 104.8, "8");
//Semana 9     
doc.text(256, 112.2, "9");
//Semana 10      
doc.text(256, 119.9, "10"); 
//Semana 11     
doc.text(256, 127.6, "5");  
//Semana 12      
doc.text(256, 135.2, "8"); 
     
     
/////      TOP 20      /////
//Semana 1     
doc.text(267.5, 51.5, "1");
//Semana 2     
doc.text(267.5, 59, "2");
//Semana 3   
doc.text(267.5, 66.5, "3");
//Semana 4   
doc.text(267.5, 74.2, "4");
//Semana 5   
doc.text(267.5, 81.8, "5");
//Semana 6   
doc.text(267.5, 89.5, "6");
//Semana 7   
doc.text(267.5, 97.2, "7");
//Semana 8   
doc.text(267.5, 104.8, "8");
//Semana 9   
doc.text(267.5, 112.2, "9");
//Semana 10   
doc.text(267.5, 119.9, "10"); 
//Semana 11   
doc.text(267.5, 127.6, "5");   
//Semana 12   
doc.text(267.5, 135.2, "8"); 
     
     
/////      REAL      /////
//Semana 1     
doc.text(277.8, 51.5, "1");
//Semana 2     
doc.text(277.8, 59, "2");
//Semana 3   
doc.text(277.8, 66.5, "3");
//Semana 4   
doc.text(277.8, 74.2, "4");
//Semana 5   
doc.text(277.8, 81.8, "5");
//Semana 6   
doc.text(277.8, 89.5, "6");
//Semana 7   
doc.text(277.8, 97.2, "7");
//Semana 8   
doc.text(277.8, 104.8, "8");
//Semana 9   
doc.text(277.8, 112.2, "9");
//Semana 10   
doc.text(277.8, 119.9, "10"); 
//Semana 11   
doc.text(277.8, 127.6, "5");   
//Semana 12   
doc.text(277.8, 135.2, "8"); 
 
doc.addImage(logo1URL, 'PNG', 266, 10, 20, 18);
 
doc.addImage(linha1URL, 'PNG', 10, 192, 276, 0.6);

doc.addImage(qs1URL, 'PNG', 10, 194, 29, 4);     
     
 
//Pagina
doc.setFontSize(12);
     
doc.text(274, 197, "Pag. 13");
     

     
//Add Page2
doc.addPage('a4', 'l');     
     

//Titulo
doc.setFontSize(28);
     
doc.text(10, 20, "Nota de Exames");
 
     
//Grafico13  NOTA DE EXAMES
var chart13URL = ctx13.toDataURL();
doc.addImage(chart13URL, 'PNG', 10.5, 34.5, 208, 114);

doc.addImage(titulos1URL, 'PNG', 10, 34.5, 208, 3);    
    
doc.addImage(nums1URL, 'PNG', 9, 35, 4, 114);
 
doc.addImage(legendas2URL, 'PNG', 13.7, 146, 198.8, 14);    
    
doc.addImage(tabela2URL, 'PNG', 228, 39, 58, 99);
     
 
//Notas da Tabela
doc.setFontSize(8.5);
 
/////      GLOBAL      /////
//Semana 1     
doc.text(256, 51.5, "1");
//Semana 2     
doc.text(256, 59, "2");
//Semana 3     
doc.text(256, 66.5, "3");
//Semana 4     
doc.text(256, 74.2, "4");
//Semana 5     
doc.text(256, 81.8, "5");
//Semana 6     
doc.text(256, 89.5, "6");
//Semana 7     
doc.text(256, 97.2, "7");
//Semana 8     
doc.text(256, 104.8, "8");
//Semana 9     
doc.text(256, 112.2, "9");
//Semana 10      
doc.text(256, 119.9, "10"); 
//Semana 11     
doc.text(256, 127.6, "5");  
//Semana 12      
doc.text(256, 135.2, "8"); 
     
     
/////      TOP 20      /////
//Semana 1     
doc.text(267.5, 51.5, "1");
//Semana 2     
doc.text(267.5, 59, "2");
//Semana 3   
doc.text(267.5, 66.5, "3");
//Semana 4   
doc.text(267.5, 74.2, "4");
//Semana 5   
doc.text(267.5, 81.8, "5");
//Semana 6   
doc.text(267.5, 89.5, "6");
//Semana 7   
doc.text(267.5, 97.2, "7");
//Semana 8   
doc.text(267.5, 104.8, "8");
//Semana 9   
doc.text(267.5, 112.2, "9");
//Semana 10   
doc.text(267.5, 119.9, "10"); 
//Semana 11   
doc.text(267.5, 127.6, "5");   
//Semana 12   
doc.text(267.5, 135.2, "8"); 
     
     
/////      REAL      /////
//Semana 1     
doc.text(277.8, 51.5, "1");
//Semana 2     
doc.text(277.8, 59, "2");
//Semana 3   
doc.text(277.8, 66.5, "3");
//Semana 4   
doc.text(277.8, 74.2, "4");
//Semana 5   
doc.text(277.8, 81.8, "5");
//Semana 6   
doc.text(277.8, 89.5, "6");
//Semana 7   
doc.text(277.8, 97.2, "7");
//Semana 8   
doc.text(277.8, 104.8, "8");
//Semana 9   
doc.text(277.8, 112.2, "9");
//Semana 10   
doc.text(277.8, 119.9, "10"); 
//Semana 11   
doc.text(277.8, 127.6, "5");   
//Semana 12   
doc.text(277.8, 135.2, "8"); 
   
doc.addImage(logo1URL, 'PNG', 266, 10, 20, 18);
    
doc.addImage(linha1URL, 'PNG', 10, 192, 276, 0.6);

doc.addImage(qs1URL, 'PNG', 10, 194, 29, 4);     
     
 
//Pagina
doc.setFontSize(12);
     
doc.text(274, 197, "Pag. 14");
     

     
//Add Page2
doc.addPage('a4', 'l');     
     

//Titulo
doc.setFontSize(28);
     
doc.text(10, 20, "Nota de Internação");
 
     
//Grafico14 NOTA DE INTERNACAO
var chart14URL = ctx14.toDataURL();
doc.addImage(chart14URL, 'PNG', 10.5, 34.5, 208, 114);

doc.addImage(titulos1URL, 'PNG', 10, 34.5, 208, 3);    
    
doc.addImage(nums1URL, 'PNG', 9, 35, 4, 114);

doc.addImage(legendas2URL, 'PNG', 13.7, 146, 198.8, 14);    
    
doc.addImage(tabela2URL, 'PNG', 228, 39, 58, 99);
     
 
//Notas da Tabela
doc.setFontSize(8.5);
 
/////      GLOBAL      /////
//Semana 1     
doc.text(256, 51.5, "1");
//Semana 2     
doc.text(256, 59, "2");
//Semana 3     
doc.text(256, 66.5, "3");
//Semana 4     
doc.text(256, 74.2, "4");
//Semana 5     
doc.text(256, 81.8, "5");
//Semana 6     
doc.text(256, 89.5, "6");
//Semana 7     
doc.text(256, 97.2, "7");
//Semana 8     
doc.text(256, 104.8, "8");
//Semana 9     
doc.text(256, 112.2, "9");
//Semana 10      
doc.text(256, 119.9, "10"); 
//Semana 11     
doc.text(256, 127.6, "5");  
//Semana 12      
doc.text(256, 135.2, "8"); 
     
     
/////      TOP 20      /////
//Semana 1     
doc.text(267.5, 51.5, "1");
//Semana 2     
doc.text(267.5, 59, "2");
//Semana 3   
doc.text(267.5, 66.5, "3");
//Semana 4   
doc.text(267.5, 74.2, "4");
//Semana 5   
doc.text(267.5, 81.8, "5");
//Semana 6   
doc.text(267.5, 89.5, "6");
//Semana 7   
doc.text(267.5, 97.2, "7");
//Semana 8   
doc.text(267.5, 104.8, "8");
//Semana 9   
doc.text(267.5, 112.2, "9");
//Semana 10   
doc.text(267.5, 119.9, "10"); 
//Semana 11   
doc.text(267.5, 127.6, "5");   
//Semana 12   
doc.text(267.5, 135.2, "8"); 
     
     
/////      REAL      /////
//Semana 1     
doc.text(277.8, 51.5, "1");
//Semana 2     
doc.text(277.8, 59, "2");
//Semana 3   
doc.text(277.8, 66.5, "3");
//Semana 4   
doc.text(277.8, 74.2, "4");
//Semana 5   
doc.text(277.8, 81.8, "5");
//Semana 6   
doc.text(277.8, 89.5, "6");
//Semana 7   
doc.text(277.8, 97.2, "7");
//Semana 8   
doc.text(277.8, 104.8, "8");
//Semana 9   
doc.text(277.8, 112.2, "9");
//Semana 10   
doc.text(277.8, 119.9, "10"); 
//Semana 11   
doc.text(277.8, 127.6, "5");   
//Semana 12   
doc.text(277.8, 135.2, "8"); 
    
doc.addImage(logo1URL, 'PNG', 266, 10, 20, 18);
     
doc.addImage(linha1URL, 'PNG', 10, 192, 276, 0.6);

doc.addImage(qs1URL, 'PNG', 10, 194, 29, 4);     
     
 
//Pagina
doc.setFontSize(12);
     
doc.text(274, 197, "Pag. 15");
        
doc.save('a4.pdf') 
     
     
 </script>
 
 </div>
 </body>
</html>