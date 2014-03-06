$(document).ready(function(){
	var bixi = {	
		initialize: function(){
			var self = this;
			this.stations = data.station;
			delete window.data;
			google.maps.event.addDomListener(window, 'load', this.initializeMap());				
			this.prepareStationList();
			
			$('#station-table').on('click', '.station',function(){
				var station = $(this);
				var location = new google.maps.LatLng(station.attr('data-lat'),station.attr('data-long'));
				var zoom = 15;
		
				self.map.setCenter(location);
				self.map.setZoom(zoom);
			});		
		},	
		initializeMap: function(){
			var map_canvas = document.getElementById('map_canvas');
   			var map_options = {
      				center: new google.maps.LatLng(51.52916347, -0.109970527),
      				zoom: 14,
      				mapTypeId: google.maps.MapTypeId.ROADMAP,
      			};
      			this.map = new google.maps.Map(map_canvas, map_options);
      			this.prepareMarkers();
    		},    	
    		addMarker: function(location, title){
    			var marker = new google.maps.Marker({
				position: location,
				map: this.map,
				title: title
			});
		},
		prepareStationList: function(){
			var html = "";
			for(var i=0; i < this.stations.length; i++){
				station = this.stations[i];
				//html += '<div class="station" data-lat="'+station.lat+'" data-long="'+station.long+'" data-name="'+station.name+'"><span class="station-name">'+station.name+'</span><span class="bikes-number">'+station.nbBikes+'</span><span class="empty-docks">'+station.nbEmptyDocks+'</span><span class="docks-number">'+station.nbDocks+'</span></div>';
				html += '<tr class="station" data-lat="'+station.lat+'" data-long="'+station.long+'" data-name="'+station.name+'"><td class="station-name">'+station.name+'</td><td class="bikes-number">'+station.nbBikes+'</td><td class="empty-docks">'+station.nbEmptyDocks+'</td><td class="docks-number">'+station.nbDocks+'</td></tr>';

			}
			$('#station-table').append(html);
		},
		prepareMarkers: function(){
			for(var i=0; i < this.stations.length; i++){
				var station = this.stations[i];
				var markerLocation = new google.maps.LatLng(station.lat, station.long);
				this.addMarker(markerLocation, station.name);
			}
		}
	};
	
	bixi.initialize()		
});






