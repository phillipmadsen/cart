<html>
	<head>
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body{margin:0;padding:0;width:100%;height:100%;color:#B0BEC5;display:table;font-weight:100;font-family:'Lato';}
			.container{text-align:center;display:table-cell;vertical-align:middle;}
			.content{text-align:center;display:inline-block;}
			.title{font-size:96px;margin-bottom:40px;}
			.quote{font-size:24px;}
			#routes{font-family:'arial';font-weight:bold;color:fff!important;padding:50px;background-color:#000;margin:20px;}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5</div>

						<div id="routes" style="color:black;">
<?php
$routeCollection = Route::getRoutes();

echo "<table style='width:100%'>";
    echo "<tr>";
        echo "<td width='10%'><h4>HTTP Method</h4></td>";
        echo "<td width='10%'><h4>Route</h4></td>";
        echo "<td width='80%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        echo "<tr>";
            echo "<td>" . $value->getMethods()[0] . "</td>";
            echo "<td>" . $value->getPath() . "</td>";
            echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
echo "</table>";



 ?>
						<?php
						// $routeCollection = Route::getRoutes();

						// foreach ($routeCollection as $value) {
						//     echo $value->getPath();
						//     echo "<br>";
						// }

						?>
						</div>

				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
	</body>
</html>
