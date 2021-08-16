
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="corona.css">

    <title>covid</title>
</head>
<link rel="stylesheet" href="corona.css">
<body>
<style>
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
		color: black;
	}

	td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
		color: black;
	}

	tr:nth-child(even) {
		background-color: #dddddd;
	}
</style>
<section class="corona_update container fluid">
		<div class="mb-3">
		<h2>CORONA LIVE UPDATE IN INDIA</h2>
		<div class="table-responsive">
		<table class="table table-bordered table striped text-center" id="tbval" style="width:100%">
		<tr>
			<th style="background-color:gray;">LAST UPDATED</th>
			<th style="background-color:gray;">STATE</th>
			<th style="background-color:red;">CONFIRMED</th>
			<th style="background-color:yellow;" >ACTIVE</th>
			<th style="background-color: green;">RECOVERD</th>
			<th style="background-color:red;">DEATH</th>
		</tr>
		<?php
			$data = file_get_contents('https://api.covid19india.org/data.json');
			$coranalive = json_decode($data,true); 
			$statescount = count($coranalive['statewise']);
			$i=1;
			while($i < $statescount)
			{
				?>
				<tr>
					<td><?php echo $coranalive['statewise'][$i]['lastupdatedtime']?></td>
					<td><?php echo $coranalive['statewise'][$i]['state']?></td>
					<td><?php echo $coranalive['statewise'][$i]['confirmed']?></td>
					<td><?php echo $coranalive['statewise'][$i]['active']?></td>
					<td><?php echo $coranalive['statewise'][$i]['recovered']?></td>
					<td><?php echo $coranalive['statewise'][$i]['deaths']?></td>
				
				</tr>

				<!--echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"  ;
				echo $coranalive['statewise'][$i]['state'] . "<br>"  ;
				echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;
				echo $coranalive['statewise'][$i]['active'] . "<br>"  ;
				echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;
				echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ;--> 
			<?php
			$i++;
			
			}
			?>

		</table>
		
		
		</div>
		
		</div>
</section>
</body>