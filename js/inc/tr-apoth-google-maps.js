/*
  @package tapRoot_apothecary
  ======================
    GOOGLE  MAPS SCRIPT
  ======================
*/

// set custom map map type
const customMapType = [
  {
    featureType : 'all',
    elementType : 'labels',
    stylers     : [{visibility: 'off'}]
  },
  {
    featureType : 'administrative.locality',
    elementType : 'labels',
    stylers     : [{visibility: 'on'}]
  },
  {
    featureType : 'poi',
    elementType : 'labels',
    stylers     : [{visibility: 'on'}]
  },
  {
    featureType : 'poi',
    elementType : 'labels.text.stroke',
    stylers     : [{color: '#000000'}]
  },
  {
    featureType : 'poi',
    elementType : 'labels.text.fill',
    stylers     : [{color: '#ffffff'}]
  },
  {
    featureType : 'administrative',
    elementType : 'geometry',
    stylers     : [{color: '#ffffff'}]
  },
  {
    featureType : 'landscape',
    elementType : 'geometry',
    stylers     : [{color: '#ffffff'}]
  },
  {
    featureType : 'poi',
    elementType : 'geometry',
    stylers     : [{color: '#ffffff'}]
  },
  {
    featureType : 'water',
    stylers     : [{color: '#000000'}]
  },
  {
    featureType : 'road',
    elementType : 'all',
    stylers     : [{color: '#FF9900'}]
  },
  {
    featureType : 'administrative.country',
    elementType : 'geometry',
    stylers     : [{color: '#FF9900'}]
  },
  {
    featureType : 'administrative.province',
    elementType : 'geometry',
    stylers     : [{color: '#FF9900'}]
  },
];

function xochisGoogleMapInitHome() {
  // set location
  let location = { lat: 45.194771, lng: -109.246788 };
  // set custom map map type
  let xochisMapType = new google.maps.StyledMapType( customMapType, { name: 'Xochis' } );
  // init map
  let map = new google.maps.Map( document.getElementById('tr-apoth-home-map'), {
    zoom                  : 7,
    center                : location,
    mapTypeControlOptions : { mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain', 'xochis_map'] },
    mapTypeId             : 'xochis_map'
  });
  // arrange custom map type
  map.mapTypes.set('xochis_map', xochisMapType);
  // create custom marker
  let customMarkerIcon = {
    url        : window.location.origin + '/wp-content/themes/tap-root-apothecary/img/xochis-map-marker.png',
    scaledSize : new google.maps.Size(57, 50)
  };
  // init marker
  let marker = new google.maps.Marker({
    position  : location,
    map       : map,
    animation : google.maps.Animation.DROP,
    icon      : customMarkerIcon,
  });
  // set info window content
  let contentString = '<span class="tr-apoth-home-map-info-window text-center"><p>We are Here!</p><p>Red Lodge, MT 59068</p></span>';
  // create info window
  let infoWindow = new google.maps.InfoWindow({
  content: contentString,
  });
  // attach info window to marker
  marker.addListener('click', function() {
    infoWindow.open(map, marker);
  });
}

function xochisGoogleMapInitAbout() {
  // set location
  let locationCody = { lat: 44.524794, lng: -109.060961 };
  let locationRedLodge = { lat: 45.190680, lng: -109.248072 }; 
  let locationBillings = { lat: 45.740848, lng: -108.597084 };
  // set custom map map type
  let xochisMapType = new google.maps.StyledMapType( customMapType, { name: 'Xochis' } );
  // init map
  let map = new google.maps.Map( document.getElementById('tr-apoth-about-map'), {
    zoom                  : 7,
    center                : { lat: 45, lng: -109 },
    mapTypeControlOptions : { mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain', 'xochis_map'] },
    mapTypeId             : 'xochis_map'
  });
  // arrange custom map type
  map.mapTypes.set('xochis_map', xochisMapType);
  // create custom marker
  let customMarkerIcon = {
    url        : window.location.origin + '/wp-content/themes/tap-root-apothecary/img/xochis-map-marker.png',
    scaledSize : new google.maps.Size(57, 50)
  };
  mapMarker( locationCody, map, customMarkerIcon, '<span class="tr-apoth-about-map-info-window text-center"><p>Cody Farmers Market</p><p>13th & Beck</p></span>' );
  mapMarker( locationRedLodge, map, customMarkerIcon, '<span class="tr-apoth-about-map-info-window text-center"><p>Red Lodge Farmers Market</p><p>Lions Park</p></span>' );
  mapMarker( locationBillings, map, customMarkerIcon, '<span class="tr-apoth-about-map-info-window text-center"><p>Billings Mini Market</p><p>3201 Hesper Road</p></span>' );
}

function mapMarker( location, map, icon, contentString) {
  // init marker
  let marker = new google.maps.Marker({
    position  : location,
    map       : map,
    animation : google.maps.Animation.DROP,
    icon      : icon,
  });
  // create info window
  let infoWindow = new google.maps.InfoWindow({
  content: contentString,
  });
  // attach info window to marker
  marker.addListener('click', function() {
    infoWindow.open(map, marker);
  });
}
