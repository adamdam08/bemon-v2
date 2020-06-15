<!DOCTYPE html>

<html>

<head>
  <title>Pointer</title>
  <meta charset='utf-8' />
  <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no"> 
  <link rel="stylesheet" href="https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.css" />
  <script src="https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.js"></script>
</head>

<style type="text/css">

#mapDiv {
  display: block;
  height:25vh;
  width:auto;
	z-index:1;
	top:0; 
	bottom:0; 
	right:0; 
	left:0; 
	overflow:hidden; 
	}

</style>
<div  id="mapDiv"></div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text ti-location-pin" id="basic-addon1"></span>
    </div>
<script>

function onMapClick(e) {
    var lat  = e.latlng.lat.toFixed(5);
    var lon  = e.latlng.lng.toFixed(5);
    var gps = "";
    if (lat>0) gps+='N'; else gps+='S';
    if (10>Math.abs(lat))  gps += "0";
    gps += Math.abs(lat).toFixed(5)+" ";
    if (lon>0) gps+='E'; else gps+='W';
    if (10>Math.abs(lon))  gps += "0";
    if (100>Math.abs(lon)) gps += "0";
    gps += Math.abs(lon).toFixed(5);
    document.getElementById("coordinate").value = gps;
    var textArea = document.createElement("textarea");
    textArea.style.position = 'fixed';
    textArea.style.top = 0;
    textArea.style.left = 0;
    textArea.style.width = '2em';
    textArea.style.height = '2em';
    textArea.style.padding = 0;
    textArea.style.border = 'none';
    textArea.style.outline = 'none';
    textArea.style.boxShadow = 'none';
    textArea.style.background = 'transparent';
    textArea.value = gps;
    document.body.appendChild(textArea);
    textArea.select();
    try {
      var successful = document.execCommand('copy');
      var msg = successful ? 'Successfully' : 'Unsuccessfully';
      console.log(msg + ' copied ' + gps + ' to clipboard ');
    } catch (err) {
      console.log('Oops, unable to copy');
    }
    document.body.removeChild(textArea);
}

	
var osmUrl='https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
var osm = new L.TileLayer(osmUrl, {minZoom:2, maxZoom:19});		

var googleStreets = new L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{minZoom:1, maxZoom:19, subdomains:['mt0','mt1','mt2','mt3']});

var googleSat = new L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{minZoom:1, maxZoom: 21,subdomains:['mt0','mt1','mt2','mt3']});

var map = new L.Map('mapDiv', { doubleClickZoom:false, zoomControl:false, maxBounds:([[90,-270],[-90,270]]) });

L.control.layers({"OSM (Mapnik)": osm, "Google Street": googleStreets, "Google Earth": googleSat}).addTo(map);

map.addLayer(osm);
var map_set = "osm";
map.fitBounds([[0,-180],[0,180]]);

map.on('click', onMapClick);
</script>



</html>