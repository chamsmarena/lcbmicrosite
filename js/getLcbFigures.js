var spData = null;
var slideData = null;
var blocData = null;
var figuresNiger = {};
var figuresCameroun = {};
var figuresNigeria = {};
var figuresChad = {};

var slide1 = {};
var slide2 = {};
var slide3 = {};
var slide4 = {};

var bloc1 = {};
var bloc2 = {};
var bloc3 = {};
var bloc4 = {};
var bloc5 = {};



function doData(json) {
  spData = json.feed.entry;
}

function GetSlideData(json) {
	slideData = json.feed.entry;
}
function GetBlocData(json) {
	blocData = json.feed.entry;
}


function formatNumber(n) {
	if (n > 1000000000) return '<span class=decimal-figure>' + (n / 1000000000).toFixed(1) + 'B</span>';
	if (n > 1000000) return '<span class=decimal-figure>' + (n / 1000000).toFixed(0) + 'M</span>';
	if (n > 1000) return '<span  class=decimal-figure>' + (n / 1000).toFixed(0) + 'K</span>';
	if (n < 1000 && n > 0) return '<span  class=decimal-figure>' + (n).toFixed(0) + '</span>';
	if (n == 0) return '<span  class=decimal-figure>-</span>';
}

function readData(parent) {
	var data = spData;
	var rowData = [];
	var row = 0;

	for (var r = 0; r < data.length; r++) {
	var cell = data[r]["gs$cell"];
	var val = cell["$t"];
	if (cell.col == 1) {


	  
	  if(rowData[0]=="Niger"){
		figuresNiger["PeopleInNeed"]=parseFloat(rowData[1]);
		figuresNiger["PeopleTargeted"]=parseFloat(rowData[2]);
		figuresNiger["Requirement"]=parseFloat(rowData[3]);
		figuresNiger["FoodInsecurePeople"]=parseFloat(rowData[4]);
		figuresNiger["SAMBurden"]=parseFloat(rowData[5]);
		figuresNiger["Refugees"]=parseFloat(rowData[6]);
		figuresNiger["IDPs"]=parseFloat(rowData[7]);
		figuresNiger["returnes"]=parseFloat(rowData[8]);
		figuresNiger["funding"]=parseFloat(rowData[9]);
	  }
	  
	  if(rowData[0]=="Cameroon"){
		figuresCameroun["PeopleInNeed"]=parseFloat(rowData[1]);
		figuresCameroun["PeopleTargeted"]=parseFloat(rowData[2]);
		figuresCameroun["Requirement"]=parseFloat(rowData[3]);
		figuresCameroun["FoodInsecurePeople"]=parseFloat(rowData[4]);
		figuresCameroun["SAMBurden"]=parseFloat(rowData[5]);
		figuresCameroun["Refugees"]=parseFloat(rowData[6]);
		figuresCameroun["IDPs"]=parseFloat(rowData[7]);
		figuresCameroun["returnes"]=parseFloat(rowData[8]);
		figuresCameroun["funding"]=parseFloat(rowData[9]);
	  }
	  
	  if(rowData[0]=="Nigeria"){
		figuresNigeria["PeopleInNeed"]=parseFloat(rowData[1]);
		figuresNigeria["PeopleTargeted"]=parseFloat(rowData[2]);
		figuresNigeria["Requirement"]=parseFloat(rowData[3]);
		figuresNigeria["FoodInsecurePeople"]=parseFloat(rowData[4]);
		figuresNigeria["SAMBurden"]=parseFloat(rowData[5]);
		figuresNigeria["Refugees"]=parseFloat(rowData[6]);
		figuresNigeria["IDPs"]=parseFloat(rowData[7]);
		figuresNigeria["returnes"]=parseFloat(rowData[8]);
		figuresNigeria["funding"]=parseFloat(rowData[9]);
	  }
	  
	 
	  
	  
	  rowData = [];
	  row++;
	}



	rowData.push(val);
  }
	if(rowData[0]=="Chad"){
		figuresChad["PeopleInNeed"]= parseFloat(rowData[1]);
		figuresChad["PeopleTargeted"]=parseFloat(rowData[2]);
		figuresChad["Requirement"]=parseFloat(rowData[3]);
		figuresChad["FoodInsecurePeople"]=parseFloat(rowData[4]);
		figuresChad["SAMBurden"]=parseFloat(rowData[5]);
		figuresChad["Refugees"]=parseFloat(rowData[6]);
		figuresChad["IDPs"]=parseFloat(rowData[7]);
		figuresChad["returnes"]=parseFloat(rowData[8]);
		figuresChad["funding"]=parseFloat(rowData[9]);
	  }
}

function readSlideData(parent) {
	var data = slideData;
	var rowData = [];
	var row = 0;

	for (var r = 0; r < data.length; r++) {
		var cell = data[r]["gs$cell"];
		var val = cell["$t"];
		
		if (cell.col == 1) {
			if(rowData[0]=="title1"){
				slide1["texte"]=rowData[1];
				slide1["figure"]=rowData[2];
				slide1["paragraph"]=rowData[3];
			}
			
			if(rowData[0]=="title2"){
				slide2["texte"]=rowData[1];
				slide2["figure"]=rowData[2];
				slide2["paragraph"]=rowData[3];
			}
			
			if(rowData[0]=="title3"){
				slide3["texte"]=rowData[1];
				slide3["figure"]=rowData[2];
				slide3["paragraph"]=rowData[3];
			}
	  
			rowData = [];
			row++;
		}
		
		if(rowData[0]=="title4"){
			slide4["texte"]=rowData[1];
			slide4["figure"]=rowData[2];
			slide4["paragraph"]=rowData[3];

			console.log("rowdatattt3 -- "+rowData);
		}

		rowData.push(val);
	}
	
	
	//INSERT VALUES
	$("#title1 .texteSlide").html(slide1.texte);
	$("#title1 .figureSlide").html(slide1.figure);
	$("#title1 .paragraphSlide").html(slide1.paragraph);
	
	$("#title2 .texteSlide").html(slide2.texte);
	$("#title2 .figureSlide").html(slide2.figure);
	$("#title2 .paragraphSlide").html(slide2.paragraph);
	
	$("#title3 .texteSlide").html(slide3.texte);
	$("#title3 .figureSlide").html(slide3.figure);
	$("#title3 .paragraphSlide").html(slide3.paragraph);
	
	$("#title4 .texteSlide").html(slide4.texte);
	$("#title4 .figureSlide").html(slide4.figure);
	$("#title4 .paragraphSlide").html(slide4.paragraph);

	console.log("slide4.paragraph--"+slide4.paragraph);

}

function readBlocData(parent) {
	var data = blocData;
	var rowData = [];
	var row = 0;

	for (var r = 0; r < data.length; r++) {
		var cell = data[r]["gs$cell"];
		var val = cell["$t"];
		
		if (cell.col == 1) {
			if(rowData[0]=="SectionSituation"){
				bloc1["situation"]=rowData[1];
				bloc1["Sectiontext"]=rowData[2];
				bloc1["Sectionphotocaption"]=rowData[3];
			}
			
			if(rowData[0]=="Sectionfood-security"){
				bloc2["situation"]=rowData[1];
				bloc2["Sectiontext"]=rowData[2];
				bloc2["Sectionphotocaption"]=rowData[3];
			}
			
			if(rowData[0]=="SectionProtection"){
				bloc3["situation"]=rowData[1];
				bloc3["Sectiontext"]=rowData[2];
				bloc3["Sectionphotocaption"]=rowData[3];
			}
			
			if(rowData[0]=="SectionEducation"){
				bloc4["situation"]=rowData[1];
				bloc4["Sectiontext"]=rowData[2];
				bloc4["Sectionphotocaption"]=rowData[3];
			}
	  
			rowData = [];
			row++;
		}
		
		if(rowData[0]=="SectionFunding"){
			bloc5["situation"]=rowData[1];
			bloc5["Sectiontext"]=rowData[2]
			//console.log('rowData');
			//console.log(rowData);
		}

		rowData.push(val);
	}
	
	
	//INSERT VALUES
	$("#SectionSituation .situation").html(bloc1.situation);
	$("#SectionSituation .Sectiontext").html(bloc1.Sectiontext);
	$("#SectionSituation .Sectionphotocaption").html(bloc1.Sectionphotocaption);
	
	$("#Sectionfood-security .situation").html(bloc2.situation);
	$("#Sectionfood-security .Sectiontext").html(bloc2.Sectiontext);
	$("#Sectionfood-security .Sectionphotocaption").html(bloc2.Sectionphotocaption);
	
	$("#SectionProtection .situation").html(bloc3.situation);
	$("#SectionProtection .Sectiontext").html(bloc3.Sectiontext);
	$("#SectionProtection .Sectionphotocaption").html(bloc3.Sectionphotocaption);
	
	$("#SectionEducation .situation").html(bloc4.situation);
	$("#SectionEducation .Sectiontext").html(bloc4.Sectiontext);
	$("#SectionEducation .Sectionphotocaption").html(bloc4.Sectionphotocaption);
	
	$("#SectionFunding .situation").html(bloc5.situation);
	$("#SectionFunding .Sectiontext").html(bloc5.Sectiontext);
	//$("#SectionFunding .Sectionphotocaption").html(bloc5.Sectionphotocaption);

	//console.log(bloc5);
}
  
  
$(document).ready(function () {
	readData($("#data"));
	readSlideData($("#data"));
	readBlocData($("#data"));
	
	//*****************
	//10.7M PEOPLE IN NEED
	//*****************
	
	
	/* ***** CAMEMBERT CHIFFRES PEOPLE DISPLACED ***** */
	var refugees = figuresNiger.Refugees + figuresCameroun.Refugees + figuresNigeria.Refugees + figuresChad.Refugees;
	var idps = figuresNiger.IDPs + figuresCameroun.IDPs + figuresNigeria.IDPs + figuresChad.IDPs;
	var returnes = figuresNiger.returnes + figuresCameroun.returnes + figuresNigeria.returnes + figuresChad.returnes;

	var dataset = [
		{ "label": "IDPs", "amount": idps, "color" : "rgb(65,143,222)","localize_label" : "idps_label"},
		{ "label": "Refugees", "amount": refugees, "color" : "rgb(200,200,200)", "localize_label" : "refugees_label"},
		{ "label": "Returnes", "amount": returnes, "color" : "rgb(250,87,92)", "localize_label" : "refugees_label"}
	];
	var radius = 150;
	
	// set the chart type
	var pie = d3.layout.pie()
	.sort(null)
	.value(function(d){ return d.amount; });
	
	// convert the pie into a donut
	var arc = d3.svg.arc()
	.innerRadius(radius - 110)
	.outerRadius(radius - 70);
	
	// append the svg to the DOM element and set its attributes
	var svg = d3.select("#displaced .chart").append("svg")
		.attr("width", "100%")
		.attr("height", "100%")
		.attr("viewBox", "0 0 180 180")
		.append("g")
		.attr("transform", "translate(" + "90" + "," + "90" + ")");
	
	// append a second group for the arcs and create the arcs
	var path = svg.append("g");
	path.selectAll("path")
	.data(pie(dataset))
		.enter().append("path")
		.attr("class", "arc")
		.attr("fill", function(d) { return d.data.color; })
		.attr("d", arc)
		.attr ("title", function(d) {
			return makeTip(d.data.label,nFormatter(d.data.amount, true),d.data.localize_label);
		});
		
		
		
		
	/* ***** PEOPLE DISPLACED BY COUNTRY ***** */
	function getHighest(array, attribute) {
		var highest;
		for (var i=0; i < array.length; i++) {
			if (!highest || parseInt(array[i][attribute]) > parseInt(highest[attribute]))
				highest = array[i];
		}
		return highest;
	}

	var totalDisplacedNiger = figuresNiger.IDPs +  figuresNiger.Refugees +  figuresNiger.returnes;
	var totalDisplacedCameroun = figuresCameroun.IDPs +  figuresCameroun.Refugees +  figuresCameroun.returnes;
	var totalDisplacedNigeria = figuresNigeria.IDPs +  figuresNigeria.Refugees +  figuresNigeria.returnes;
	var totalDisplacedChad = figuresChad.IDPs + figuresChad.Refugees +  figuresChad.returnes;

	var displacedByCountry = [
		{"label" : "Nigeria","data_localization_code" : "stressed_label","total" : totalDisplacedNigeria},
		{"label" : "Cameroon","data_localization_code" : "catastrophe_label","total" : totalDisplacedCameroun},
		{"label" : "Niger","data_localization_code" : "crisis_label","total" : totalDisplacedNiger},
		{"label" : "Chad","data_localization_code" : "emergency_label","total" : totalDisplacedChad}
	];
	
	$('#displacedByCountry table').html(function() {
		var highest = getHighest(displacedByCountry, "total");
		var markup = '';
		for (i = 0; i < displacedByCountry.length; i++) {
			var percentage = Math.round(displacedByCountry[i]["total"]/highest["total"] * 100);
			markup += '<tr>'+
						'<td class="county-name" data-localize="' + displacedByCountry[i]["data_localization_code"] + '">' + displacedByCountry[i]["label"] + '</td>'+
						'<td class="in-need-amount"><span class="decimal-figure">' + nFormatter(displacedByCountry[i]["total"], false) + '</span></td>'+
						'<td>'+
							'<div class="percentage" style="width:' + percentage + '%"></div>'+
						'</td>'+
					'</tr>';
		}
		return markup;
	});
	
	
	
	/* ***** PEOPLE SEVERELY FOOD INSECURE BY COUNTRY ***** */
	var foodsecurityphaseNiger = figuresNiger.FoodInsecurePeople;
	var foodsecurityphaseCameroun = figuresCameroun.FoodInsecurePeople;
	var foodsecurityphaseNigeria = figuresNigeria.FoodInsecurePeople;
	var foodsecurityphaseChad = figuresChad.FoodInsecurePeople;

	var foodsecurityphase = [
		{"label" : "Nigeria","data_localization_code" : "stressed_label","total" : foodsecurityphaseNigeria},
		{"label" : "Cameroon","data_localization_code" : "catastrophe_label","total" : foodsecurityphaseCameroun},
		{"label" : "Niger","data_localization_code" : "crisis_label","total" : foodsecurityphaseNiger},
		{"label" : "Chad","data_localization_code" : "emergency_label","total" : foodsecurityphaseChad}
	];
	
	$('#malnourished table').html(function() {
		var highest = getHighest(foodsecurityphase, "total");
		var markup = '';
		for (i = 0; i < foodsecurityphase.length; i++) {
			var percentage = Math.round(foodsecurityphase[i]["total"]/highest["total"] * 100);
			markup += '<tr>'+
				'<td class="county-name" data-localize="' + foodsecurityphase[i]["data_localization_code"] + '">' + foodsecurityphase[i]["label"] + '</td>'+
				'<td class="in-need-amount"><span class="decimal-figure">' + nFormatter(foodsecurityphase[i]["total"], false) + '</span></td>'+
				'<td>'+
					'<div class="percentage" style="width:' + percentage + '%"></div>'+
				'</td>'+
			'</tr>';
		}
		return markup;
	});
	
	
	
	
	/* ***** SEVERELY MALNOURISHED CHILDREN BY OOUNTRY ***** */
	var SAMBurdenNiger = figuresNiger.SAMBurden;
	var SAMBurdenCameroun = figuresCameroun.SAMBurden;
	var SAMBurdenNigeria = figuresNigeria.SAMBurden;
	var SAMBurdenChad = figuresChad.SAMBurden;
	
	var peopleinneed = [
		{"label" : "Nigeria","data_localization_code" : "protection_cluster","total" : SAMBurdenNigeria},
		{"label" : "Cameroon","data_localization_code" : "health_cluster","total" : SAMBurdenCameroun},
		{"label" : "Niger","data_localization_code" : "wash_cluster","total" : SAMBurdenNiger},
		{"label" : "Chad","data_localization_code" : "fsl_cluster","total" : SAMBurdenChad}
		
	];
	
	$('#SeverelyMalnourishedChildren table').html(function() {
		var highest = getHighest(peopleinneed, "total");
		var markup = '';
		for (i = 0; i < peopleinneed.length; i++) {
			var percentage = Math.round(peopleinneed[i]["total"]/highest["total"] * 100);
			markup += '<tr>'+
						'<td class="county-name" data-localize="' + peopleinneed[i]["data_localization_code"] + '">' + peopleinneed[i]["label"] + '</td>'+
						'<td class="in-need-amount"><span class="decimal-figure">' + nFormatter(peopleinneed[i]["total"], false) + '</span></td>'+
						'<td>'+
							'<div class="percentage" style="width:' + percentage + '%"></div>'+
						'</td>'+
					'</tr>';
		}
		return markup;
	});
	
	
	
	
	/* ***** PEOPLE SEVERELY FOOD INSECURE BY COUNTRY ***** */
	var foodsecurityphaseNiger = figuresNiger.FoodInsecurePeople;
	var foodsecurityphaseCameroun = figuresCameroun.FoodInsecurePeople;
	var foodsecurityphaseNigeria = figuresNigeria.FoodInsecurePeople;
	var foodsecurityphaseChad = figuresChad.FoodInsecurePeople;
	
	var foodSecPeople = [
		{"label" : "Nigeria","data_localization_code" : "stressed_label","total" : foodsecurityphaseNigeria},
		{"label" : "Cameroon","data_localization_code" : "catastrophe_label","total" : foodsecurityphaseCameroun},
		{"label" : "Niger","data_localization_code" : "crisis_label","total" : foodsecurityphaseNiger},
		{"label" : "Chad","data_localization_code" : "emergency_label","total" : foodsecurityphaseChad}
	];
	
	$('#foodsecurityphaseAdmin1 table').html(function() {
		var highest = getHighest(foodSecPeople, "total");
		var markup = '';
		for (i = 0; i < foodSecPeople.length; i++) {
			var percentage = Math.round(foodSecPeople[i]["total"]/highest["total"] * 100);
			markup += '<tr>'+
						'<td class="county-name" data-localize="' + foodSecPeople[i]["data_localization_code"] + '">' + foodSecPeople[i]["label"] + '</td>'+
						'<td class="in-need-amount"><span class="decimal-figure">' + nFormatter(foodSecPeople[i]["total"], false) + '</span></td>'+
						'<td>'+
							'<div class="percentage" style="width:' + percentage + '%"></div>'+
						'</td>'+
					'</tr>';
		}
		return markup;
	});
	
	
	
	
	//*****************
	//FUNDING NEEDS
	//*****************
	//console.log("figuresNigeria.funding");
	//console.log(figuresNigeria.funding);

	
	//SET FUNDING REQUIEREMENT BY COUNTRY
	$('#funding-requirements-nigeria .figureCountry').html('<span class="big-number decimal-figure"><span class="big-number_rowca decimal-figure">' + formatNumber(figuresNigeria.Requirement) + '</span></span>');
	$('#funding-requirements-niger .figureCountry').html('<span class="big-number decimal-figure"><span class="big-number_rowca decimal-figure">' + formatNumber(figuresNiger.Requirement) + '</span></span>');
	$('#funding-requirements-cameroon .figureCountry').html('<span class="big-number decimal-figure"><span class="big-number_rowca decimal-figure">' + formatNumber(figuresCameroun.Requirement) + '</span></span>');
	$('#funding-requirements-chad .figureCountry').html('<span class="big-number decimal-figure"><span class="big-number_rowca decimal-figure">' + formatNumber(figuresChad.Requirement) + '</span></span>');
	
	//SET FUNDING BY COUNTRY
	$('#funding-total-nigeria .figureCountry').html('<span class="big-number_rowca decimal-figure">' + formatNumber(figuresNigeria.funding) + '</span>');
	$('#funding-total-niger .figureCountry').html('<span class="big-number_rowca decimal-figure">' + formatNumber(figuresNiger.funding) + '</span>');
	$('#funding-total-cameroon .figureCountry').html('<span class="big-number_rowca decimal-figure">' + formatNumber(figuresCameroun.funding) + '</span>');
	$('#funding-total-chad .figureCountry').html('<span class="big-number_rowca decimal-figure">' + formatNumber(figuresChad.funding) + '</span>');

	//PUT CHART PER COUNTRY
	createFundingChart2(figuresNigeria.funding,figuresNigeria.Requirement,'funding-total-nigeria');
	createFundingChart2(figuresNiger.funding,figuresNiger.Requirement,'funding-total-niger');
	createFundingChart2(figuresCameroun.funding,figuresCameroun.Requirement,'funding-total-cameroon');
	createFundingChart2(figuresChad.funding,figuresChad.Requirement,'funding-total-chad');

});