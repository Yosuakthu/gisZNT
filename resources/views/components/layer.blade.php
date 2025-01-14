
<div id="map">
    <div id="navbar-info" class="navbar-info">
    <h3><strong>Color Information</strong></h3>
    <ul>
        <li>
            <span class="legend-color" style="background-color: Coral;"></span> ≥ Rp. 1.000.000 (Coral)
          </li>
          <li>
            <span class="legend-color" style="background-color: lime;"></span> Rp. 500.000 - Rp. 999.999 (Lime)
          </li>
          <li>
            <span class="legend-color" style="background-color: yellow;"></span> Rp. 300.000 - Rp. 499.999 (Yellow)
          </li>
          <li>
            <span class="legend-color" style="background-color: orange;"></span> Rp. 150.000 - Rp. 299.999 (Orange)
          </li>
          <li>
            <span class="legend-color" style="background-color: red;"></span> Rp. 100.000 - Rp. 149.999 (Red)
          </li>
          <li>
            <span class="legend-color" style="background-color: #90EE90;"></span> Rp. 50.000 - Rp. 99.999 (Light Green)
          </li>
          <li>
            <span class="legend-color" style="background-color: Teal;"></span> Rp. 1.000 - Rp. 49.999 (Teal)
          </li>
          <li>
            <span class="legend-color" style="background-color: green;"></span> Rp. 0  ( Green)
          </li>
      </ul>
  </div>
</div>

<script src="{{ asset('assets/leaflet/js/qgis2web_expressions.js')}}"></script>
<script src="{{ asset('assets/leaflet/js/leaflet.rotatedMarker.js')}}"></script>
<script src="{{ asset('assets/leaflet/js/leaflet.pattern.js')}}"></script>
<script src="{{ asset('assets/leaflet/js/leaflet-hash.js')}}"></script>
  <script src="{{ asset('assets/leaflet/js/Autolinker.min.js')}}"></script>
  <script src="{{ asset('assets/leaflet/js/rbush.min.js')}}"></script>
  <script src="{{ asset('assets/leaflet/js/labelgun.min.js')}}"></script>
  <script src="{{ asset('assets/leaflet/js/labels.js')}}"></script>
<script type="text/javascript">

    var googleTerrain = L.tileLayer('http://{s}.google.com/vt?lyrs=p&x={x}&y={y}&z={z}',{
maxZoom: 20,
subdomains:['mt0','mt1','mt2','mt3']
});


    var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });

      var  googleHybrid = L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}',{
maxZoom: 20,
subdomains:['mt0','mt1','mt2','mt3']
});

        var googleStreets = L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}',{
maxZoom: 20,
subdomains:['mt0','mt1','mt2','mt3']
});


        var maps = L.map('map',{
          center:[3.5659182,125.513743,11.58],
          zoom:11,
          layers :[googleHybrid]
        });

        var baseMaps = {
        "Peta Hybrid": googleHybrid,
        "Peta Streets": googleStreets,
        "Peta Terrain": googleTerrain


    };
    var layerControl = L.control.layers(baseMaps).addTo(maps);


        // Load GeoJSON data
        fetch('/admin/getgeojson')
        .then(response => response.json())
            .then(data => {
                L.geoJSON(data, {
                    style: function (feature) {
                // Pastikan properti 'color' ada
                console.log('Color applied:', feature.properties.color);
                return {
                    color: feature.properties.color || '#3388ff', // Default color jika tidak ada
                    weight: 2,
                    fillOpacity: 0.6
                };
            },
                    onEachFeature: function (feature, layer) {
                        // Check if feature has properties
                        if (feature.properties) {
                            // Set up the content for the pop-up
                            var popupContent = `
                                <div>
                                    <h5>FID_garisp :${feature.properties.FID_garisp || 'No FID_garisp'}</h5>
                                    <p>FID_Zona_L :${feature.properties.FID_Zona_L || 'No Description'}</p>
                                    <p>OBJECTID :${feature.properties.OBJECTID || 'No Description'}</p>
                                    <p>JENIS_ZONA :${feature.properties.JENIS_ZONA || 'No Description'}</p>
                                    <p>RPBULAT :${feature.properties.RPBULAT || 'No Description'}</p>
                                    <p>SUM Nilai :${feature.properties.SUM_Nilai || 'No Description'}</p>
                                    <p>RANGE Nila :${feature.properties.RANGE_Nila || 'No Description'}</p>

                                </div>
                            `;
                            // Add the pop-up to the layer
                            layer.bindPopup(popupContent);
                        }
                    },
                }).addTo(maps);
                // Optionally adjust the view to the data
                var bounds = L.geoJSON(data).getBounds();
            });

    </script>
