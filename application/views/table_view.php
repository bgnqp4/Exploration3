<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>WorldDB</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
	      	<div class="row">
	      	<?php
	      		// Check if current is set
	      		if(isset($current)) {
	      			switch($current) {
	      				case "city":
	      					echo '<a type="submit" id="city" class="btn btn-success" href="'.base_url().'index.php/citiesController">Cities</a>';
	      					echo '<a type="submit" id="country" class="btn btn-default" href="'.base_url().'index.php/countriesController">Countries</a>';
							echo '<a type="submit" id="lang" class="btn btn-default" href="'.base_url().'index.php/countryLanguageController">Languages</a>';
	      				break;
	      				case "country":
	      					echo '<a type="submit" id="city" class="btn btn-default" href="'.base_url().'index.php/citiesController">Cities</a>';
	      					echo '<a type="submit" id="country" class="btn btn-success" href="'.base_url().'index.php/countriesController">Countries</a>';
							echo '<a type="submit" id="lang" class="btn btn-default" href="'.base_url().'index.php/countryLanguageController">Languages</a>';
	      				break;
	      				case "lang":
	      					echo '<a type="submit" id="city" class="btn btn-default" href="'.base_url().'index.php/citiesController">Cities</a>';
	      					echo '<a type="submit" id="country" class="btn btn-default" href="'.base_url().'index.php/countriesController">Countries</a>';
							echo '<a type="submit" id="lang" class="btn btn-success" href="'.base_url().'index.php/countryLanguageController">Languages</a>';
	      				break;
	      			}
	      		} else { 
					echo '<a type="submit" id="city" class="btn btn-default" href="'.base_url().'index.php/citiesController">Cities</a>';
					echo '<a type="submit" id="country" class="btn btn-default" href="'.base_url().'index.php/countriesController">Countries</a>';
					echo '<a type="submit" id="lang" class="btn btn-default" href="'.base_url().'index.php/countryLanguageController">Languages</a>';
				}
	      		
	      	?>
	      	</div>
	      	<div>
	      	<table class="table table-hover table-striped">
	      		<thead>
		        	<tr>
		        	<?php
		        		// Fill out table headers
						if(isset($columns)) {
	  						foreach($columns as $column) {
								echo '<th>';
								echo $column;
								echo '</th>';
	               			}
               			}
					?>
		        	</tr>
		    	</thead>
		    	<tbody>
					<?php
					if(isset($data)) {
						// Fill out table content
  						foreach($data as $row) {
							echo '<tr>';
							foreach($columns as $col) {
								echo '<td>';
								echo $row[$col];
								echo '</td>';
							}
							echo '</td>';
               			}
               		}
					?>
				</tbody>
		    </table>				
			</div>
		</div>		
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	</body>
</html>