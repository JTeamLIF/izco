/*
  although ammap has methos like getAreaCenterLatitude and getAreaCenterLongitude,
  they are not suitable in quite a lot of cases as the center of some countries
  is even outside the country itself (like US, because of Alaska and Hawaii)
  That's why wehave the coordinates stored here
*/

var latlong = {};
latlong["AG"] = {"latitude":52.484322, "longitude":-1.917348};
latlong["AI"] = {"latitude":53.004112, "longitude":-2.214872};
latlong["AL"] = {"latitude":50.257082, "longitude":-119.272135};
latlong["AM"] = {"latitude":51.736323, "longitude":0.469975};
latlong["NM"] = {"latitude":52.394315, "longitude":-0.722157};
latlong["PH"] = {"latitude":52.584118, "longitude":-0.279546};


var mapData = [
  {
    "code":"AG" ,
    "name":"North Birmingham Mental Health",
    "value":2000000,
    "color":"#0094d9"
  },
  {
    "code":"AI",
    "name":"North Staffordshire Hospital",
    "value":2000000,
    "color":"#0094d9"
  },
  {
    "code":"AL",
    "name":"Kelowna and Vernon Hospitals",
    "value":2000000,
    "color":"#0094d9"
  },
  {
    "code":"AM",
    "name":"Realise Health (LIFT) Colchester",
    "value":2000000,
    "color":"#0094d9"
  },
  {
    "code":"NM",
    "name":"Northampton Mental Health",
    "value":2000000,
    "color":"#0094d9"
  },
  {
    "code":"PH",
    "name":"Peterborough Hospital",
    "value":2000000,
    "color":"#0094d9"
  },
];



var minBulletSize = 3;
var maxBulletSize = 70;
var min = Infinity;
var max = -Infinity;


// get min and max values
for (var i = 0; i < mapData.length; i++) {
  var value = mapData[i].value;
  if (value < min) {
    min = value;
  }
  if (value > max) {
    max = value;
  }
}

 // build map
AmCharts.ready(function() {

  window.map = new AmCharts.AmMap();

  window.map.areasSettings = {
    unlistedAreasColor: "#bdbdbd"
  };
  window.map.backgroundColor = '#ff6600';
  window.map.imagesSettings.balloonText = "<span style='font-size:14px;'><b>[[title]]</b></span>";

  var dataProvider = {
    mapVar: AmCharts.maps.worldLow,
    images: []
  }

  // create circle for each country


  // it's better to use circle square to show difference between values, not a radius
    var maxSquare = maxBulletSize * maxBulletSize * 2 * Math.PI;
    var minSquare = minBulletSize * minBulletSize * 2 * Math.PI;

    // create circle for each country
    for (var i = 0; i < mapData.length; i++) {
        var dataItem = mapData[i];
        var value = dataItem.value;
        // calculate size of a bubble
        var square = (value - min) / (max - min) * (maxSquare - minSquare) + minSquare;
        if (square < minSquare) {
            square = minSquare;
        }
        var size = Math.sqrt(square / (Math.PI * 2));
        var id = dataItem.code;

        dataProvider.images.push({
            type: "circle",
            width: size,
            height: size,
            color: dataItem.color,
            longitude: latlong[id].longitude,
            latitude: latlong[id].latitude,
            title: dataItem.name,
            value: value
        });
    }



  // the following code uses circle radius to show the difference
  /*
  for (var i = 0; i < mapData.length; i++) {
    var dataItem = mapData[i];
    var value = dataItem.value;
    // calculate size of a bubble
    var size = (value - min) / (max - min) * (maxBulletSize - minBulletSize) + minBulletSize;
    if (size < minBulletSize) {
      size = minBulletSize;
    }
    var id = dataItem.code;

    dataProvider.images.push({
      type: "circle",
      width: size,
      height: size,
      color: dataItem.color,
      longitude: latlong[id].longitude,
      latitude: latlong[id].latitude,
      title: dataItem.name,
      value: value
    });
  }*/

  window.map.dataProvider = dataProvider;
    window.map.export = {
      enabled: true
    }
  window.map.projection = "Miller";
  window.map.write("chartdiv");
});
