<!DOCTYPE html>
<?php 
	$xml = file_get_contents("http://www.tfl.gov.uk/tfl/syndication/feeds/cycle-hire/livecyclehireupdates.xml"); 	
?>
<html lang="en">
    <head>  
        <link rel="stylesheet" type="text/css" href="css/layout.css"  media="screen" title="Principal" />
    	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    </head>
    <body>
    	<div id="station-panel" class="col-md-offset-1 panel panel-default">
    		<div class="panel-heading"> London Bixi </div>
    		<table id="station-table"class="table table-hover">
    			<tr>
    				<th>Location</th>
    				<th>Number of Bikes</th>
    				<th>Name of Empty Docks</th>
    				<th>Name of Docks<th>
    			</tr>
			</table>
    	</div>    	
    	<div id="map-container">
    		<div id="map_canvas"></div>
    	</div>   	

    	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script> 
        
        <script>var data = <?php echo(json_encode(simplexml_load_string($xml))) ?>;</script>
        <script src="js/script.js"></script>               
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>        
    </body>
</html>