const loadGoogleMapsApi = require('load-google-maps-api');

(function() {
    
    const obj = document.getElementsByClassName('js-map');
    
    let mapenable = false, int;

    const initMap = function(el) {
        loadGoogleMapsApi({
            key: 'AIzaSyDzv4gozpcF9CjrI6OWHpLavj2hTLfH4IY'
            }).then(function (googleMaps) {
            
            const lat = Number(el.getAttribute('data-lat')),
                  lng = Number(el.getAttribute('data-lng')),
                  myLatLng = new google.maps.LatLng(lat, lng),
                  markerWidth = 52,
                  markerHeight = 79;

            let spanned = false;
        
            const image = {
                url: el.getAttribute('data-marker'),
                size: new google.maps.Size(markerWidth, markerHeight),
				scaledSize: new google.maps.Size(markerWidth, markerHeight),
				origin: new google.maps.Point(0, 0),
				anchor: new google.maps.Point(markerWidth/2, markerHeight),
				labelOrigin: new google.maps.Point(0, markerHeight)
            }
            
            const map = new googleMaps.Map(el, {
                center: myLatLng,
                disableDefaultUI: true,
                zoom: 17,
            })            
			
			const marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				draggable: false,
				zIndex: 20,
				icon: image,
				animation: google.maps.Animation.DROP,				
			});
			
			setTimeout(function() {
    			document.getElementsByClassName('js-mapinfo')[0].classList.add('is-visible');    			
			}, 1000);	
				
/*
			var mapResized = false;

            function resizeMap(map) {
                google.maps.event.trigger(map, 'resize');
                mapResized = true;
            }
            
            google.maps.event.addListener(map, 'bounds_changed', function() {
                if (mapResized) {
                    // react here
                    console.log('a');
                }
                mapResized = false;
                console.log('b');
            });
*/
            
            map.panBy(200, 0);
            
            const moveMap = function() {
/*
                let ww = window.innerWidth;
                
                
        
                if (ww <= 500) {
                    if (spanned === false) {
                        setTimeout(function() {
                            map.panBy(80, 0);
                        }, 1000);
                    }

                    spanned = true;

                } else {
                    
                    map.panBy(200, 0);
                    spanned = false;
                }
*/
            }
            
			moveMap();
			window.addEventListener('resize', moveMap);
        
        }).catch(function (error) {
            console.error(error)
        })
    };

    const init = function() {
    
        for (let i = 0; i < obj.length; i ++) {
            initMap(obj[i]);
        }       
    }
    
    
    obj.length > 0 ? init() : false;
    
})();


