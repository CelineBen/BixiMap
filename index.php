<!DOCTYPE html>
<?php 
	$xml = file_get_contents("http://www.tfl.gov.uk/tfl/syndication/feeds/cycle-hire/livecyclehireupdates.xml"); 	
?>
<html lang="en">
    <head>
    	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Flamenco" />   
        <link rel="stylesheet" type="text/css" href="css/layout.css"  media="screen" title="Principal" />
    </head>
    <body>
    	<div id="station-list">
    	</div>    	
    	<div id="map-container">
    		<div id="map_canvas"></div>
    	</div>   	
    	
    	
    	
    	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>        
        <script src="js/script.js"></script>
        <script>var data = <?php echo(json_encode(simplexml_load_string($xml))) ?>;</script>
    </body>
</html>