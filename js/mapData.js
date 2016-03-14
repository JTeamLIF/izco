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
{
   "code":"AG",
   "name":"North Birmingham Mental Health",
   "value":2000000,
   "color":"#0094d9",
   "desc":"The project involves the design, build, finance and operation for new build premises and refurbishment of all the existing estate on the All Saints Hospital and Highcroft Hospital sites in north Birmingham. The project premises comprise seven specialist mental health facilities catering for the provision of low and medium secure mental health care services.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"health",
   "id":"North-Birmingham-Mental-Health"
},
{
   "code":"AI",
   "name":"North Staffordshire Hospital",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Healthcare Support (North Staffs) Ltd, the project company, entered into a contract to construct of a new acute hospital on the University of North Staffordshire's City General site and a new community hospital for Staffordshire and Stoke-on-Trent Partnership NHS Trust on the Haywood site.",
   "ownership":75,
   "address":"United Kingdom",
   "category":"health",
   "id":"North-Staffordshire-Hospital"
},
{
   "code":"AL",
   "name":"Kelowna and Vernon Hospitals",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Infusion KVH General Partnership, the project company, has entered into a contract with the Interior Health Authority to design, build, finance and operate three new healthcare facilities over two sites in the Kelowna and Vernon region of British Columbia, Canada.",
   "ownership":50,
   "address":"Canada",
   "category":"health",
   "id":"Kelowna-and-Vernon-hospital"
},
{
   "code":"AM",
   "name":"Realise Health (LIFT) Colchester",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Realise Health Ltd/Investors in Health (C+T1) Ltd, the project company, has contracted with Realise Health LIFT for the provision of a primary care centre, a hospital and medical centre and hard FM service provision in Colchester, Essex under a 16 year concession which runs until 2029.",
   "ownership":60,
   "address":"United Kingdom",
   "category":"health",
   "id":"Realise-Health-(LIFT)-Colchester"
},
{
   "code":"NM",
   "name":"Northampton Mental Health",
   "value":2000000,
   "color":"#0094d9",
   "desc":"IIC Northampton Ltd, the project company, has contracted with Northampton Mental Health for the construction of 14,000 sqm. of high quality adult mental health facilities in Northamptonshire under a 24 year concession which runs until 2037.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"health",
   "id":"Northampton-Mental-Health"
},
{
   "code":"PH",
   "name":"Peterborough Hospital",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Peterborough Progress Health the project company, has contracted with Peterborough and Stamford Hospitals NHS Foundation Trust; Peterborough Primary Care Partnership Trust; and Cambridgeshire and Peterborough Mental Health Partnership NHS Trust, to design, build, finance and operate a 612 bed acute hospital, a 39 bed city care centre and a 102 bed mental health facility under a 32 year concession which runs until 2042.",
   "ownership":30,
   "address":"United Kingdom",
   "category":"health",
   "id":"Peterborough-Hospital"
},
{
   "code":"TW",
   "name":"Tunbridge Wells Hospital",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Kent and East Sussex Weald Hospital Limited, the project company, has contracted with the Maidstone and Tunbridge Wells NHS Trust to design, build, finance and operate a new District General hospital incorporating 512 beds of which 412 are in single en suite rooms. The capital value of the construction was approximately £232m and the concession runs until 2042. The hospital benefits from a 24/7 Accident and Emergency department with a helicopter landing pad.",
   "ownership":37.50,
   "address":"United Kingdom",
   "category":"health",
   "id":"Tunbridge-Wells-Hospital"
},
{
   "code":"NE",
   "name":"Newcastle Hospital",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Healthcare Support (Newcastle) Ltd, the project company, has contracted with Newcastle-upon-tyne Hospitals NHS Trust for the transfer of all acute healthcare services from the Newcastle General Hospital, to new, state-of-the-art facilities at the Royal Victoria Infirmary and the Freeman Hospital. The project comprises the construction of new buildings as well as ongoing maintenance of the new facilities under a 38 year concession which ends in May 2043.",
   "ownership":15,
   "address":"United Kingdom",
   "category":"health",
   "id":"Newcastle-Hospital"
},
{
   "code":"RP",
   "name":"Roseberry Park Hospital",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Three Valley Healthcare Limited ['TVH'], the project company, has contracted with Tees, Esk and Wear Valleys NHS Foundation Trust to design, build, finance and operate a mental health facility in Middlesborough under a 32 year concession which ends in 2040.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"health",
   "id":"Roseberry-Park-Hospital"
},
{
   "code":"FV",
   "name":"Forth Valley Royal Hospital",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Forth Valley Health (FHL) has contracted with NHS Forth Valley Health Board to design, build, finance and maintain a new, 800-bed, acute hospital in Larbert, Forth Valley, Scotland under a concession which runs until August 2042.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"health",
   "id":"Forth-Valley-Royal-Hospital"
},
{
   "code":"VG",
   "name":"Vancouver General Hospital",
   "value":2000000,
   "color":"#0094d9",
   "desc":"AHV Access Health Vancouver Ltd, the project company, has contracted with Vancouver Coastal Health Authority to design, build, finance and maintain the Gordon & Leslie Diamond Healthcare Centre, part of Vancouver General Hospital, under a 30 year concession which runs until 2036.",
   "ownership": 100,
   "address":"Canada",
   "category":"health",
   "id":"Vancouver-General-Hospital"
},
{
   "code":"QE",
   "name":"Queen Elizabeth Hospital",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Meridian Hospital Company plc, the project company, has contracted with South London Healthcare NHS Trust to design, build, finance and operate a part-newbuild, part-refurbished hospital building in Woolwich under a 30 year concession which runs until 2031.",
   "ownership":27.50,
   "address":"United Kingdom",
   "category":"health",
   "id":"Queen-Elizabeth-Hospital"
},
{
   "code":"NH",
   "name":"Newham Hospital",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Healthcare Support (Newham) Ltd, the project company, has contracted with Newham Healthcare NHS Trust to design, build, finance and operate new premises and clinical facilities at Newham General Hospital under a 35 year concession which runs until 2039.",
   "ownership":50,
   "address":"United Kingdom",
   "category":"health",
   "id":"Newham-Hospital"
},
{
   "code":"KH",
   "name":"Kingston Hospital",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Prime Care Solutions (Kingston) Ltd, the project company, has contracted with Kingston Hospital NHS Trust to design, build, finance and operate a new clinical building on the hospital site under a 32 year concession which runs until 2036.",
   "ownership":60,
   "address":"United Kingdom",
   "category":"health",
   "id":"Kingston-Hospital"
},
{
   "code":"AH",
   "name":"Abbotsford Hospital",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Access Health Abbotsford Ltd (ÒAHAÓ), the project company, has contracted with Abbotsford Regional Hospital and Cancer Care Inc. to design, build, finance, maintain and operate a 300 bed facility in the primary acute care hospital to serve the Abbotsford area under a 33 year concession which runs until 2038.",
   "ownership":100,
   "address":"Canada",
   "category":"health",
   "id":"Abbotsford-Hospital"
},
{
   "code":"BB",
   "name":"Barnsley BSF",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Part of the Building Schools for the Future programme, the Barnsley BSF project involves an overhaul of the existing secondary school estate in Barnsley into 11 new schools (consisting of 9 advanced learning centres, one special school, and one special school extension) over three phases. Financial close on Phase 1 was achieved on 6 July 2009, for Phase 2 on April 2010 and for Phase 3 on 9 October 2010. Construction was completed in 2011 for all phases.",
   "ownership": 40,
   "address":"United Kingdom",
   "category":"education",
   "id":"Barnsley-BSF"
},
{
   "code":"BR",
   "name":"Bristol BSF",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Bristol PFI Ltd, the project company, has contracted with Bristol BSF to design, build, finance and operate 4 new secondary schools/academies in Bristol under a 17 year concession which runs until 2030.",
   "ownership":37.50,
   "address":"United Kingdom",
   "category":"education",
   "id":"Bristol-BSF"
},
{
   "code":"PS",
   "name":"Peterborough Schools",
   "value":2000000,
   "color":"#0094d9",
   "desc":"IIC BY Education (Peterborough) Schools Ltd, the project company, has contracted with Peterborough Schools to design, build, finance and operate an academy and two secondary schools and one primary school in Peterborough under a 24 year concession which runs until 2037.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"education",
   "id":"Peterborough-Schools"
},
{
   "code":"BS",
   "name":"Bexley Schools",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Investors in the Community (Bexley Schools) Ltd, the project company, has contracted with Bexley Schools to design, build, finance and operate 2 academies in the London Borough of Bexley under a 17 year concession which runs until 2030.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"education",
   "id":"Bexley-Schools"
},
{
   "code":"LC",
   "name":"Leeds Combined Secondary Schools",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Investors in the Community (Leeds Schools) Holding Company Ltd, the project company, has contracted with Leeds Combined Secondary Schools to design, build, finance and operate 5 secondary schools and one primary school in Leeds under a 20 year concession which runs until 2033.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"education",
   "id":"Leeds-Combined-Secondary-Schools"
},
{
   "code":"SS",
   "name":"North Swindon Schools",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Education Support [Swindon] Ltd ['ESSL'], the project company, has contracted with Swindon Borough Council for the design, build, finance and operation of seven schools under a 25 year concession which runs until 2032.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"education",
   "id":"North-Swindon-Schools"
},
{
   "code":"NS",
   "name":"Newham Schools",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Educational Support [Newham] Ltd ['ESNL'], the project company, has contracted with the London Borough of Newham to design, build, finance, refurbish and operate a specialist sports secondary school in the London Borough of Enfield under a 26 year concession which runs until August 2029.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"education",
   "id":"Newham-Schools"
},
{
   "code":"ES",
   "name":"Enfield Schools",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Education Support [Enfield 2] Limited ['ESE2L'], the project company, has contracted with the London Borough of Enfield to design, build, finance and operate three schools under a 25 year concession which runs until August 2029.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"education",
   "id":"Enfield-Schools"
},
{
   "code":"HS",
   "name":"Highland School, Enfield",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Education Support [Enfield] Ltd ['ESEL'], the project company, has contracted with the London Borough of Enfield to design, build, finance and operate Highlands Secondary School under a 25 year concession which runs until August 2025.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"education",
   "id":"Highland-School-Enfield"
},
{
   "code":"EC",
   "name":"Edinburgh Schools",
   "value":2000000,
   "color":"#0094d9",
   "desc":"The Edinburgh Schools Partnership Ltd ['ESP'], the project company, has contracted with the City of Edinburgh Council to design, build, refurbish, finance and operate 18 schools (including 10 primary, 5 secondary and 2 special schools) and one community centre under a 32 year concession which runs until 2033.",
   "ownership":20,
   "address":"United Kingdom",
   "category":"education",
   "id":"Edinburgh-Schools"
},
{
   "code":"SO",
   "name":"South Lanarkshire Schools",
   "value":2000000,
   "color":"#0094d9",
   "desc":"InspirED Education (South Lanarkshire) plc, the project company, has contracted with South Lanarkshire Council to design, build, finance and maintain 17 new and two refurbished schools under a 33 year concession which runs until 2039.",
   "ownership":15,
   "address":"United Kingdom",
   "category":"education",
   "id":"South-Lanarkshire-Schools"
},
{
   "code":"GS",
   "name":"Glasgow Schools",
   "value":2000000,
   "color":"#0094d9",
   "desc":"3ED Glasgow Ltd, the project company, has contracted with Glasgow City Council to design, build/refurbish, finance and operate their entire secondary school estate of 29 schools under a 30 year concession which runs until 2030.",
   "ownership":20,
   "address":"United Kingdom",
   "category":"education",
   "id":"Glasgow-Schools"
},
{
   "code":"LP",
   "name":"South East London Police Stations",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Access Health Abbotsford Ltd ('AHA'), the project company, has contracted with Abbotsford Regional Hospital and Cancer Care Inc. to design, build, finance, maintain and operate a 300 bed facility in the primary acute care hospital to serve the Abbotsford area under a 33 year concession which runs until 2038.",
   "ownership":50,
   "address":"United Kingdom",
   "category":"justice-and-emergency-services",
   "id":"South-East-London-Police-Stations"
},
{
   "code":"FR",
   "name":"North East Fire and Rescue",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Collaborative Services Support NE ['CSS'], the project company, has contracted with North East Fire and Rescue Authorities ['NEFRA'], to design, build, finance and operate 5 Community Fire Stations in the North East of England for the Tyne and Wear, Durham and Darlington and Northumberland Fire and Rescue Authorities under a 25 year concession, which ends in May 2035.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"justice-and-emergency-services",
   "id":"North-East-Fire-and-Rescue"

},
{
   "code":"CP",
   "name":"Cleveland Police Station and HQ",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Cleveland FM Services Limited, the project company, has contracted with Cleveland Police Authority to design, build, finance and operate two district headquarters and two town centre police stations under a 27 year concession which runs until 2032.",
   "ownership":50,
   "address":"United Kingdom",
   "category":"justice-and-emergency-services",
   "id":"Cleveland-Police-Station-and-HQ"
},
{
   "code":"PT",
   "name":"Metropolitan Police Training Centre",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Services Support (Gravesend) Ltd, the project company, has contracted with the Metropolitan Police Authority to design, build, finance and operate the centre for firearms and public order training under a 27 year concession which runs until 2028.",
   "ownership":27.08,
   "address":"United Kingdom",
   "category":"justice-and-emergency-services",
   "id":"Metropolitan-Police-Training-Centre"
},
{
   "code":"GM",
   "name":"Greater Manchester Police Stations",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Services Support (Manchester) Ltd, the project company, has contracted with the Greater Manchester Police Authority to design, build, finance and operate 16 police stations and a traffic headquarters",
   "ownership":27.08,
   "address":"United Kingdom",
   "category":"justice-and-emergency-services",
   "id":"Greater-Manchester-Police-Stations"
},
{
   "code":"AS",
   "name":"Avon and Somerset Courts",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Services Support (Avon & Somerset) Ltd, the project company, has contracted with the Ministry of Justice to design, build, finance, maintain and operate 11 magistratesÕ courts in Bristol, five magistratesÕ courts in Worle, Somerset and a regional administration facility at Worle for the Probation Service under a 30 year concession which runs until 2034.",
   "ownership":40,
   "address":"United Kingdom",
   "category":"justice-and-emergency-services",
   "id":"Avon-and-Somerset-Courts"
},
{
   "code":"BM",
   "name":"Line 9 - Section II, Barcelona Metro",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Línia Nou Tram Dos, S.A. (the “Concessionaire”) and Línia Nou Manteniment, S.L., (the “Maintenance Company”) has contracted with IFERCAT, a public entity responsible for the Catalonian railway system (the “Grantor”) to design, build, finance, operate and maintain 15 metro stations along Section II of the Line 9 subway system in Barcelona, Spain (the “Project”) under a 26 year concession which runs until 2042.",
   "ownership":40,
   "address":"Spain",
   "category":"transport",
   "id":"Line-9---Section-II,-Barcelona-Metro"
},
{
   "code":"LU",
   "name":"LUL Connect",
   "value":2000000,
   "color":"#0094d9",
   "desc":"CityLink Telecommunications (CityLink), the project company, has contracted with London Underground Limited (LUL) to operate and maintain radio communication for the London Underground following upgrade completed in 2008, under a concession which runs until 2019.",
   "ownership":33.50,
   "address":"United Kingdom",
   "category":"transport",
   "id":"LUL-Connect"
},
{
   "code":"MM",
   "name":"M6/M74 Project",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Autolink Concessionaires (M6) PLC (Autolink), the project company, has contracted with The Scottish Executive to design, build, finance and operate approximately 92km of the route from Gretna on the Scottish border to Millbank, 30 miles south of Glasgow, including the M74 motorways between Glasgow and the Scottish Border, under a concession which runs until April 2027.",
   "ownership":11,
   "address":"United Kingdom",
   "category":"transport",
   "id":"M6M74-Project"
},
{
   "code":"SW",
   "name":"Sirhowy Way",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Sirhowy Enterprise Way Ltd, the project company, has contracted with Caerphilly County Borough Council (ÒCCBCÓ) to design, build, finance and operate 4.3km of the A4048/A472 road, including a road bridge, between Blackwood and Pontllanfraith under a 30 year concession which runs until 2034.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"transport",
   "id":"Sirhowy-Way"
},
{
   "code":"ER",
   "name":"E18 Road",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Tiehytio Ykkostie Oy, the project company, has contracted with FINNRA (the Finnish Roads Authority) to design, build, finance and operate a 51km stretch of the E18 road under a 24 year concession which runs until 2029.",
   "ownership":50,
   "address":"Finland",
   "category":"transport",
   "id":"E18-Road"
},
{
   "code":"MO",
   "name":"M40 Motorway",
   "value":2000000,
   "color":"#0094d9",
   "desc":"UK Highways (M40) Ltd ('UKH'), the project company, has contracted with the Department for Transport (Highways Agency) to design, build, finance and operate 123km of the M40 motorway (from Junction 1a to Junction 15) under a 30 year concession which runs until 2026.",
   "ownership":50,
   "address":"United Kingdom",
   "category":"transport",
   "id":"M40-Motorway"
},
{
   "code":"KS",
   "name":"Kirklees Social Housing",
   "value":2000000,
   "color":"#0094d9",
   "desc":"JLW Excellent Homes for Life Limited, the project company, has contracted with the Council of the Borough of Kirklees for the design, build, finance and operation of 466 new build social housing units across 27 sites in Kirklees, West Yorkshire, under a 20 year concession which runs until 2034.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"regeneration-and-social-housing",
   "id":"Kirklees-Social-Housing"
},
{
   "code":"MP",
   "name":"Miles Platting Housing",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Renaissance Miles Platting Ltd, the project company, has contracted with Miles Platting Social Housing for the refurbishment of 1,126 low rise occupied properties, 374 high rise occupied properties and the construction of 20 new care flats and 11 family houses in Manchester under a 24 year concession which runs until 2037.",
   "ownership":50,
   "address":"United Kingdom",
   "category":"regeneration-and-social-housing",
   "id":"Miles-Platting-Housing"
},
{
   "code":"IH",
   "name":"Islington II Housing",
   "value":2000000,
   "color":"#0094d9",
   "desc":"United House Solutions Limited ['UHSL'], the project company, has contracted with the London Borough of Islington to refurbish and maintain 4124 properties under a 16 year concession which runs until 2022.",
   "ownership":45,
   "address":"United Kingdom",
   "category":"regeneration-and-social-housing",
   "id":"Islington-II-Housing"
},
{
   "code":"IJ",
   "name":"Islington I Housing",
   "value":2000000,
   "color":"#0094d9",
   "desc":"United House Solutions Limited ['UHSL'], the project company has contracted with the London Borough of Islington to refurbish and maintain 2348 properties under a 30 year concession which runs until 2033.",
   "ownership":45,
   "address":"United Kingdom",
   "category":"regeneration-and-social-housing",
   "id":"Islington-I-Housing"
},
{
   "code":"CH",
   "name":"Camden Housing",
   "value":2000000,
   "color":"#0094d9",
   "desc":"United House Solutions Limited ['UHSL'], the project company has contracted with the London Borough of Camden to refurbish and maintain five tower blocks under a 20 year concession which runs until March 2021.",
   "ownership":50,
   "address":"United Kingdom",
   "category":"regeneration-and-social-housing",
   "id":"Camden-Housing"
},
{
   "code":"BH",
   "name":"Bentilee Hub Community Centre",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Regenter Bentilee District Centre Limited, the project company, has contracted with Stoke on Trent City Council to design, build, finance and operate the new £8 million Bentilee Hub joint service centre under a 27 year concession which runs until 2032.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"regeneration-and-social-housing",
   "id":"Bentilee-Hub-Community-Centre"
},
{
   "code":"CT",
   "name":"Canning Town Social Housing PFI",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Regenter LCEP Ltd, the project company, has contracted with London Borough of Newham for the renovation, maintenance and management of over 1,200 local authority homes in Canning Town under a 30 year concession which runs until 2035.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"regeneration-and-social-housing",
   "id":"Canning-Town-Social-Housing-PFI"
},
{
   "code":"SH",
   "name":"Brockley Social Housing PFI",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Regenter B3 Ltd, the project company, has contracted with London Borough of Lewisham for the renovation, maintenance and management of 1,336 rented properties and 502 leasehold properties in Brockley under a 20 year concession which runs until 2027.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"regeneration-and-social-housing",
   "id":"Brockley-Social-Housing"
},
{
   "code":"GT",
   "name":"Groningen Tax Office",
   "value":2000000,
   "color":"#0094d9",
   "desc":"The project involves the design, build, finance, maintenance and operation of 47,000sqm of office accommodation, 700 parking spaces and 9,000sqm of public gardens. The building is occupied by the National Centre for Student Registration as well as the regional Tax Office. The 20 year operating concession covers all facilities management services and lifecycle responsibilities.",
   "ownership":40,
   "address":"Netherlands",
   "category":"government-buildings",
   "id":"Groningen-Tax-Office"
},
{
   "code":"KB",
   "name":"Kromhout Barracks",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Komfort B.V., the project company, has contracted with the Dutch Ministry of Defence to design, build, finance and operate a new Û273m million headquarters for the Dutch army in Utrecht, Netherlands under a 25 year concession. The facility is designed to cater for 3,000 full time staff who will be based there.",
   "ownership":40,
   "address":"Netherlands",
   "category":"government-buildings",
   "id":"Kromhout-Barracks"
},
{
   "code":"MD",
   "name":"Ministry of Defence Main Building",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Modus Services Ltd (“MSL”), the project company, has contracted with the Ministry of Defence to refurbish, finance and maintain its Whitehall headquarters and the Old War Office building under a 30 year concession which runs until 2030.",
   "ownership":26,
   "address":"United Kingdom",
   "category":"government-buildings",
   "id":"MoD-Main-Building"
},
{
   "code":"SL",
   "name":"Surrey Street Lighting",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Surrey Lighting Services Limited, the project company, has contracted with Surrey County Council for the design, installation, refurbishment and maintenance of 87,762 lighting columns throughout the eleven districts of Surrey, under a 25 year concession which runs until 2035.",
   "ownership":50,
   "address":"United Kingdom",
   "category":"street-lighting",
   "id":"Surrey-Street-Lighting"
},
{
   "code":"RC",
   "name":"Redcar & Cleveland Street Lighting",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Redcar and Cleveland Lighting Services Ltd, the project company, has contracted with Redcar & Cleveland Lighting for the installation and maintenance of street lighting in the Borough of Redcar & Cleveland under a 16 year concession which runs until 2029.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"street-lighting",
   "id":"Redcar-&-Cleveland-Street-Lighting"
},
{
   "code":"LS",
   "name":"Lambeth Street Lighting",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Lambeth Lighting Services Ltd, the project company, has contracted with Lambeth Street Lighting for the installation and maintenance of street lighting within the London Borough of Lambeth under a 16 year concession which runs until 2029.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"street-lighting",
   "id":"Lambeth-Street-Lighting"
},
{
   "code":"BL",
   "name":"Barnet Street Lighting",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Barnet Lighting Services Ltd, the project company, has contracted with Barnet Lighting for the installation and maintenance of street lighting in the London borough of Barnet under an 18 year concession which runs until 2031.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"street-lighting",
   "id":"Barnet-Street-Lighting"
},
{
   "code":"EL",
   "name":"Enfield Street Lighting",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Enfield Lighting Services Ltd, the project company, has contracted with Enfield Lighting for the installation and maintenance of street lighting in the London Borough of Enfield under an 18 year concessions which runs until 2031.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"street-lighting",
   "id":"Enfield-Street-Lighting"
},
{
   "code":"WL",
   "name":"Walsall Street Lighting",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Walsall Public Lighting Ltd, the project company, has contracted with Walsall Metropolitan Borough Council to maintain its 24,000 street lights in the Walsall area under a 26 year concession which runs until 2028.",
   "ownership":100,
   "address":"United Kingdom",
   "category":"street-lighting",
   "id":"Walsall-Street-Lighting"
},
{
   "code":"WS",
   "name":"Wakefield Street Lighting",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Amey Highways Lighting (Wakefield) Ltd, the project company, has contracted with Wakefield Metropolitan District Council to maintain 35,000 street lights in the Wakefield District under a 25 year concession which runs until 2029.",
   "ownership":50,
   "address":"United Kingdom",
   "category":"street-lighting",
   "id":"Wakefield-Street-Lighting"
},
{
   "code":"MS",
   "name":"Manchester Street Lighting",
   "value":2000000,
   "color":"#0094d9",
   "desc":"Amey Highways Lighting (Manchester) Ltd, the project company, has contracted with Manchester City Council to finance, manage and maintain its stock of lighting columns and lit signs throughout its 1,444km road network, including the replacement of 41,698 columns within the first five years, under a 25 year concession which runs until 2029.",
   "ownership":50,
   "address":"United Kingdom",
   "category":"street-lighting",
   "id":"Manchester-Street-Lighting"
}
];


$.each(mapData, function(index, data) {
  console.log('data:', data);
  console.log('index:', index);
  $('.' + data.category).append(
    '<div id="' + data.id + '" class="smallAsset" data-code="' + data.code + '">' +
      '<div class="smallAssetLeft pull-left">' +
        '<img class="smallAssetImage" src="images/gallery/' + data.category + '/Gallery_tb_off_' + data.id + '.png">' +
      '</div>' +
      '<div class="smallAssetRight pull-right">' +
        '<span class="smallAssetTitle">' + data.name + '</span>' +
        '<span class="smallAssetLocation">' + data.address + '</span>' +
        '<span class="smallAssetGlyph glyphicon glyphicon-triangle-right" aria-hidden="true"></span>' +
      '</div>' +
    '</div>'
    )
});

$('.smallAssetGlyph').on('click', function () {
  var assetDiv = $(this).parent('div').parent('div');
  var parentDD = assetDiv.parent('dd');
  var ddClassName = parentDD.attr('class');
  var assetCode = assetDiv.data('code');

  // first thing turn everyone off after click
  turnAllAssetsOff(ddClassName);

  // turn clicked person on - first gets id which is the persons name, then put name into url to load the correct image
  var id = assetDiv.attr('id');
  var $img = assetDiv.find('.smallAssetImage');
  $img.attr('src', $img.attr('src').replace('off', 'on'));

  //replace main div with data
  var selectedAsset = mapData.filter( function(obj) {
    return obj.code === assetCode;
  });

  parentDD.find('.mainImage').attr('src', 'images/gallery/' + ddClassName + '/Gallery_main_' + id + '.png');
  parentDD.find('.mainName').html(selectedAsset[0].name);
  parentDD.find('.mainAddress').html(selectedAsset[0].address);
  parentDD.find('.mainDesc').html(selectedAsset[0].desc);
  parentDD.find('.percentageOwned').html(selectedAsset[0].ownership + '%')
});

// function to turn everyone off
function turnAllAssetsOff(category) {
  $('.' + category + ' .smallAsset').each(function () {
    var $img = $(this).find('.smallAssetImage')
    $img.attr('src', $img.attr('src').replace('_on', '_off'));
  });
}

var clearChartAd = function() {
  var hideJS = setInterval(function() {
    $('.amcharts-chart-div a').text('')
    if ($('.amcharts-chart-div a').text() === '') {
      clearInterval(hideJS);
    }
  }, 1);
}

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
	zoomLevel: 10, 
  	zoomLongitude: -0.1341,
  	zoomLatitude: 49.1712,
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
