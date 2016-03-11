/*
  although ammap has methos like getAreaCenterLatitude and getAreaCenterLongitude,
  they are not suitable in quite a lot of cases as the center of some countries
  is even outside the country itself (like US, because of Alaska and Hawaii)
  That's why wehave the coordinates stored here
*/

var clearChartAd = function() {
  var hideJS = setInterval(function() {
    //console.log($('.amcharts-chart-div a'));
    $('.amcharts-chart-div a').text('')
    if ($('.amcharts-chart-div a').text() === '') {
      clearInterval(hideJS);
    }
  }, 1);
}

var latlong = {};
latlong["AG"] = {"latitude":52.484322, "longitude":-1.917348};
latlong["AI"] = {"latitude":53.004112, "longitude":-2.214872};
latlong["AL"] = {"latitude":50.257082, "longitude":-119.272135};
latlong["AM"] = {"latitude":51.736323, "longitude":0.469975};
latlong["NM"] = {"latitude":52.394315, "longitude":-0.722157};
latlong["PH"] = {"latitude":52.584118, "longitude":-0.279546};
latlong["TW"] = {"latitude":51.149516, "longitude":0.307311};
latlong["NE"] = {"latitude":55.002858, "longitude":-1.593427};
latlong["RP"] = {"latitude":54.556516, "longitude":-1.217102};
latlong["FV"] = {"latitude":56.025731, "longitude":-3.848127};
latlong["VG"] = {"latitude":49.261519, "longitude":-123.122169};
latlong["QE"] = {"latitude":51.479209, "longitude":0.051077};
latlong["NH"] = {"latitude":51.523094, "longitude":0.035368};
latlong["KH"] = {"latitude":51.414415, "longitude":-0.283209};
latlong["AH"] = {"latitude":49.037097, "longitude":-122.312865};
latlong["BB"] = {"latitude":53.555640, "longitude":-1.480263};
latlong["BR"] = {"latitude":51.439713, "longitude":-2.542992};
latlong["PS"] = {"latitude":52.573879, "longitude":-0.260119};
latlong["BS"] = {"latitude":51.455722, "longitude":0.153506};
latlong["LC"] = {"latitude":53.796476, "longitude":-1.564083};
latlong["SS"] = {"latitude":51.599528, "longitude":-1.794198};
latlong["NS"] = {"latitude":51.533550, "longitude":0.058998};
latlong["ES"] = {"latitude":51.654691, "longitude":-0.079936};
latlong["HS"] = {"latitude":51.648786, "longitude":-0.108171};
latlong["EC"] = {"latitude":55.950552, "longitude":-3.190755};
latlong["SO"] = {"latitude":55.779370, "longitude":-4.050346};
latlong["GS"] = {"latitude":55.861130, "longitude":-4.248888};
latlong["LP"] = {"latitude":51.479679, "longitude":-0.031946};
latlong["FR"] = {"latitude":54.907611, "longitude":-1.487531};
latlong["CP"] = {"latitude":54.580409, "longitude":-1.236965};
latlong["PT"] = {"latitude":51.441226, "longitude":0.404896};
latlong["GM"] = {"latitude":53.469809, "longitude":-2.176243};
latlong["AS"] = {"latitude":51.345702, "longitude":-2.977459};
latlong["BM"] = {"latitude":41.387299, "longitude":2.185845};
latlong["LU"] = {"latitude":51.501086, "longitude":0.006170};
latlong["MM"] = {"latitude":55.5067, "longitude":-3.6974};
latlong["SW"] = {"latitude":51.668613, "longitude":-3.190329};
latlong["ER"] = {"latitude":60.298969, "longitude":24.926853};
latlong["MO"] = {"latitude":51.944709, "longitude":-1.203132};
latlong["KS"] = {"latitude":53.646449, "longitude":-1.772622};
latlong["MP"] = {"latitude":53.494639, "longitude":-2.519727};
latlong["IH"] = {"latitude":51.541805, "longitude":-0.102005};
latlong["IJ"] = {"latitude":51.541805, "longitude":-0.102005};
latlong["CH"] = {"latitude":51.533542, "longitude":-0.125544};
latlong["BH"] = {"latitude":53.013688, "longitude":-2.128953};
latlong["CT"] = {"latitude":51.507854, "longitude":0.047281};
latlong["SH"] = {"latitude":51.463604, "longitude":-0.036275};
latlong["GT"] = {"latitude":53.221184, "longitude":6.577145};
latlong["KB"] = {"latitude":52.118628, "longitude":5.038713};
latlong["MD"] = {"latitude":51.505832, "longitude":-0.125442};
latlong["SL"] = {"latitude":51.405249, "longitude":-0.304915};
latlong["RC"] = {"latitude":54.616593, "longitude":-1.071859};
latlong["LS"] = {"latitude":51.458302, "longitude":-0.118092};
latlong["BL"] = {"latitude":51.608802, "longitude":-0.208981};
latlong["EL"] = {"latitude":51.654711, "longitude":-0.080011};
latlong["WL"] = {"latitude":52.586229, "longitude":-1.981446};
latlong["WS"] = {"latitude":53.684341, "longitude":-1.503688};
latlong["MS"] = {"latitude":53.684341, "longitude":-1.503688};



var mapData = [ 
{"code":"AG" ,"name":"North Birmingham Mental Health","value":2000000,"color":"#0094d9"},
{"code":"AI" ,"name":"North Staffordshire Hospital","value":2000000,"color":"#0094d9"},
{"code":"AL" ,"name":"Kelowna and Vernon Hospitals","value":2000000,"color":"#0094d9"},
{"code":"AM" ,"name":"Realise Health (LIFT) Colchester","value":2000000,"color":"#0094d9"},
{"code":"NM" ,"name":"Northampton Mental Health","value":2000000,"color":"#0094d9"},
{"code":"PH" ,"name":"Peterborough Hospital","value":2000000,"color":"#0094d9"},
{"code":"TW" ,"name":"Tunbridge Wells Hospital","value":2000000,"color":"#0094d9"},
{"code":"NE" ,"name":"Newcastle Hospital","value":2000000,"color":"#0094d9"},
{"code":"RP" ,"name":"Roseberry Park Hospital","value":2000000,"color":"#0094d9"},
{"code":"FV" ,"name":"Forth Valley Royal Hospital","value":2000000,"color":"#0094d9"},
{"code":"VG" ,"name":"Vancouver General Hospital","value":2000000,"color":"#0094d9"},
{"code":"QE" ,"name":"Queen Elizabeth Hospital","value":2000000,"color":"#0094d9"},
{"code":"NH" ,"name":"Newham Hospital","value":2000000,"color":"#0094d9"},
{"code":"KH" ,"name":"Kingston Hospital","value":2000000,"color":"#0094d9"},
{"code":"AH" ,"name":"Abbotsford Hospital","value":2000000,"color":"#0094d9"},
{"code":"BB" ,"name":"Barnsley BSF","value":2000000,"color":"#0094d9"},
{"code":"BR" ,"name":"Bristol BSF","value":2000000,"color":"#0094d9"},
{"code":"PS" ,"name":"Peterborough Schools","value":2000000,"color":"#0094d9"},
{"code":"BS" ,"name":"Bexley Schools","value":2000000,"color":"#0094d9"},
{"code":"LC" ,"name":"Leeds Combined Secondary Schools","value":2000000,"color":"#0094d9"},
{"code":"SS" ,"name":"North Swindon Schools","value":2000000,"color":"#0094d9"},
{"code":"NS" ,"name":"Newham Schools","value":2000000,"color":"#0094d9"},
{"code":"ES" ,"name":"Enfield Schools","value":2000000,"color":"#0094d9"},
{"code":"HS" ,"name":"Highland School, Enfield","value":2000000,"color":"#0094d9"},
{"code":"EC" ,"name":"Edinburgh Schools","value":2000000,"color":"#0094d9"},
{"code":"SO" ,"name":"South Lanarkshire Schools","value":2000000,"color":"#0094d9"},
{"code":"GS" ,"name":"Glasgow Schools","value":2000000,"color":"#0094d9"},
{"code":"LP" ,"name":"South East London Police Stations","value":2000000,"color":"#0094d9"},
{"code":"FR" ,"name":"North East Fire and Rescue","value":2000000,"color":"#0094d9"},
{"code":"CP" ,"name":"Cleveland Police Station and HQ","value":2000000,"color":"#0094d9"},
{"code":"PT" ,"name":"Metropolitan Police Training Centre","value":2000000,"color":"#0094d9"},
{"code":"GM" ,"name":"Greater Manchester Police Stations","value":2000000,"color":"#0094d9"},
{"code":"AS" ,"name":"Avon and Somerset Courts","value":2000000,"color":"#0094d9"},
{"code":"BM" ,"name":"Line 9 - Section II, Barcelona Metro","value":2000000,"color":"#0094d9"},
{"code":"LU" ,"name":"LUL Connect","value":2000000,"color":"#0094d9"},
{"code":"MM" ,"name":"M6/M74 Project","value":2000000,"color":"#0094d9"},
{"code":"SW" ,"name":"Sirhowy Way","value":2000000,"color":"#0094d9"},
{"code":"ER" ,"name":"E18 Road","value":2000000,"color":"#0094d9"},
{"code":"MO" ,"name":"M40 Motorway","value":2000000,"color":"#0094d9"},
{"code":"KS" ,"name":"Kirklees Social Housing","value":2000000,"color":"#0094d9"},
{"code":"MP" ,"name":"Miles Platting Housing","value":2000000,"color":"#0094d9"},
{"code":"IH" ,"name":"Islington II Housing","value":2000000,"color":"#0094d9"},
{"code":"IJ" ,"name":"Islington I Housing","value":2000000,"color":"#0094d9"},
{"code":"CH" ,"name":"Camden Housing","value":2000000,"color":"#0094d9"},
{"code":"BH" ,"name":"Bentilee Hub Community Centre","value":2000000,"color":"#0094d9"},
{"code":"CT" ,"name":"Canning Town Social Housing PFI","value":2000000,"color":"#0094d9"},
{"code":"SH" ,"name":"Brockley Social Housing PFI","value":2000000,"color":"#0094d9"},
{"code":"GT" ,"name":"Groningen Tax Office","value":2000000,"color":"#0094d9"},
{"code":"KB" ,"name":"Kromhout Barracks","value":2000000,"color":"#0094d9"},
{"code":"MD" ,"name":"Ministry of Defence Main Building","value":2000000,"color":"#0094d9"},
{"code":"SL" ,"name":"Surrey Street Lighting","value":2000000,"color":"#0094d9"},
{"code":"RC" ,"name":"Redcar & Cleveland Street Lighting","value":2000000,"color":"#0094d9"},
{"code":"LS" ,"name":"Lambeth Street Lighting","value":2000000,"color":"#0094d9"},
{"code":"BL" ,"name":"Barnet Street Lighting","value":2000000,"color":"#0094d9"},
{"code":"EL" ,"name":"Enfield Street Lighting","value":2000000,"color":"#0094d9"},
{"code":"WL" ,"name":"Walsall Street Lighting","value":2000000,"color":"#0094d9"},
{"code":"WS" ,"name":"Wakefield Street Lighting","value":2000000,"color":"#0094d9"},
{"code":"MS" ,"name":"Manchester Street Lighting","value":2000000,"color":"#0094d9"}  
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
  window.map.areasSettings = { unlistedAreasColor: "#bdbdbd" };
  window.map.backgroundColor = '#ff6600';
  window.map.imagesSettings.balloonText = "<span style='font-size:14px;'><b>[[title]]</b></span>";

  var dataProvider = {
    mapVar: AmCharts.maps.worldLow,
    images: []
  }

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
  window.map.export = { enabled: true }
  window.map.projection = "Mercator";
  window.map.write("chartdiv");
  clearChartAd();
});


$('.amcharts-chart-div a').remove()
