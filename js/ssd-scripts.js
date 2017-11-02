//----------- functions to call

// navigation slide out
function openNav() {
    $('#nav').css('width','250px');
    $('#main').css('margin-left','250px');
    $('.openbtn').html('&times;');
    $('.openbtn').attr('onclick','closeNav()');
    $('.crisis-nav').css('padding','30px');
    $('.crisis-nav a').css('opacity','1');
    $('.mobile-logo').css('display','none');
}
function closeNav() {
    $('#nav').css('width','0px');
    $('#main').css('margin-left','0px');
    $('.openbtn').html('&larr; <strong>MENU: CRISIS IN SOUTH SUDAN</strong>');
    $('.openbtn').attr('onclick','openNav()');
    $('.crisis-nav').css('padding','0px');
    $('.crisis-nav a').css('opacity','0');
    $('.mobile-logo').css('display','inline');
}

// formatting and helper functions
function formatMillionsasBillions(n) {
	var n = (n / 1000000000).toFixed(1);
	return '<span class="big-number decimal-figure">' + n + '</span>';
}

// format millions and billions as rounded x.x
function decimalFormat(num) {
     if (num >= 1000000000) {
        return (num / 1000000000).toFixed(1).replace(/\.0$/, '');
     }
     if (num >= 1000000) {
        return (num / 1000000).toFixed(1).replace(/\.0$/, '');
     } else {
    	 return num;
     }
}
			
// add the unit depending on whether fulltext is specified, default is false
function nFormatter(num, fulltext) {
	if (fulltext == false) {
		if (num >= 1000000000) {
        	return decimalFormat(num) + 'B';
    	}
    	if (num >= 1000000) {
        	return decimalFormat(num) + 'M';
     	}
     	if (num >= 1000) {
     		return Math.round(num/1000)  + '<span style="text-transform:lowercase;">k</span>';
     	} else {
    		return num;
     	}
	} else {
		if (num >= 1000000000) {
        	return '<span>' + decimalFormat(num) + '</span> billion';
    	}
    	if (num >= 1000000) {
        	return '<span>' + decimalFormat(num) + '</span> million';
     	}
     	if (num >= 1000) {
     		return '<span>' + (Math.round(num/1000)*1000).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")  + '</span>';
     	} else {
    		return num;
     	}
	}
}
			

// get highest value in array
function getHighest(array, attribute) {
    var highest;
    for (var i=0; i < array.length; i++) {
        if (!highest || parseInt(array[i][attribute]) > parseInt(highest[attribute]))
            highest = array[i];
    }
    return highest;
}

// faux flex
function fauxFlex(selector) {
	var maxHeight = -1;
   	$(selector).each(function() {
     	maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
     	$(this).height(maxHeight);
   	});
}
	  	
// tooltip template
function makeTip(label, amount, localize_label) {
	console.log(amount);			               
	var tip = '<p class="tip3" data-localize="' + localize_label + '">' + label + '<p class="tip1">' + amount +'</p>';
	return tip;
};

// create funding donut
function createFundingChart(currentfunding,currentrequirements) {
	// set data for donut chart
	var dataset = [
		{ "label": "Funded", "amount": currentfunding, "color" : "rgb(65,143,222)","localize_label" : "funded_text"},
		{ "label": "Unmet Requirements", "amount": (currentrequirements-currentfunding), "color" : "rgb(200,200,200)", "localize_label" : "unmet_requirements"}
	];
	var percentage = Math.round((currentfunding/currentrequirements) * 100);
	var radius = 150;
	
	// set the chart type
	var pie = d3.layout.pie()
	.sort(null)
	.value(function(d){ return d.amount; });
	
	// convert the pie into a donut
	var arc = d3.svg.arc()
	.innerRadius(radius - 100)
	.outerRadius(radius - 70);
	
	// append the svg to the DOM element and set its attributes
	var svg = d3.select("#funding-total .col2:last-of-type").append("svg")
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
			return makeTip(d.data.label,nFormatter(d.data.amount, false),d.data.localize_label);
		});
	
	// create a text group and append tspans
	var text = svg.append("text")
	  	.attr("transform", "matrix(2 0 0 2 -25 0)");
	
	text.append("tspan")
	   	.attr("x", "0").attr("y", "0")
	  	.attr("class", "value")
	  	.text(percentage);
	
	text.append("tspan")
	   	.attr("x", "20.9").attr("y", "0")
	  	.attr("class", "unit")
	  	.text("%");
	  	
	text.append("tspan")
	   	.attr("x","-1.2").attr("y", "10.8")
	  	.attr("class", "text")
	  	.attr("data-localize","funded_text")
	  	.text("FUNDED");
}

// create displacement donut
function createDisplacementChart() {
	// set data for donut chart
	var refugees = 2000000;
	var idps = 1900000;
	
	var dataset = [
		{ "label": "IDPs", "amount": idps, "color" : "rgb(65,143,222)","localize_label" : "idps_label"},
		{ "label": "Refugees", "amount": refugees, "color" : "rgb(200,200,200)", "localize_label" : "refugees_label"}
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
}

// add localization script
function getTranslation(path) {
	$('select#change-language').selectmenu({
		appendTo:'lang-select',
		icons: { button: "ui-icon-triangle-1-s" },
		change: function(event, ui) {
		    $('[data-localize]').localize('translation', { language: ui.item.value, pathPrefix: path});
	        localStorage.setItem('lang', ui.item.value);
	        if (ui.item.value === 'ar') {
	        	 $('[data-localize]').css('direction','rtl');
	        	 $('#situation .col2').css('direction','rtl');
	        	 $('#funding .col3').css('direction','rtl');
	        	 $('tspan.unit').attr('x','5');
	        	 $('tspan.text').attr('x','20');
	        	 $('tspan.value').attr('x','30');
	        	 $('.weblinks li').css('text-align','right');
	        	 $('h3').css('text-align','right');
	        	 $('.percent-by-country').css('float','right');
	        	 $('.percent-sign').css('float','right');
	        	 $('.join-us-buttons').css('float','right');
	        	 $('.share-buttons').css('float','right');
	        	 $('.title-info').css('direction','rtl');
	        	 $('.decimal-figure').css('margin-left','5px');
	        	 $('.decimal-figure').html(function() {
				  var v = $(this).html();
				  $(this).text(v.replace(',','.'));
				});
				$('.figuretolocalize .decimal-figure').each(function(){
	        	 	$(this).prependTo($(this).parent());
	        	 	$(this).css('direction','rtl');
	        	 	$(this).parent().css('direction','rtl');
	        	 	$(this).next().appendTo($(this).parent());
	        	 });
	        	 $('.in-need-amount .decimal-figure').each(function(){
	        	 	$(this).prependTo($(this).parent());
	        	 	$(this).css('direction','rtl');
	        	 	$(this).parent().css('direction','rtl');
	        	 	$(this).next().appendTo($(this).parent());
	        	 });
	        	 $('.figure .decimal-figure').each(function(){
	        	 	$(this).prependTo($(this).parent());
	        	 	$(this).css('direction','rtl');
	        	 	$(this).parent().css('direction','rtl');
	        	 	$(this).next().appendTo($(this).parent());
	        	 });
	        	 $('.figure sup').css('direction','rtl').detach().insertAfter('#funding-requirements [data-localize="dollar_sign"]');
	        	 	
	        } else if (ui.item.value === 'fr') {
	        	$('[data-localize]').css('direction','ltr');
	        	$('.title-info').css('direction','ltr');
	        	$('#situation .col2').css('direction','ltr');
	        	$('#funding .col3').css('direction','ltr');
	        	$('tspan.unit').attr('x','20.9');
	        	$('.weblinks li').css('text-align','left');
	        	$('h3').css('text-align','left');
	        	$('tspan.text').attr('x','0');
	        	$('tspan.value').attr('x','-1.2');
	        	$('.percent-by-country').css('float','none');
	        	$('.percent-sign').css('float','none');
	        	$('.join-us-buttons').css('float','none');
	        	$('.share-buttons').css('float','none');
	        	$('.decimal-figure').html(function() {
				  var v = $(this).html();
				  $(this).text(v.replace('.',','));
				});
				$('.figuretolocalize .decimal-figure').each(function(){
	        	 	$(this).css('direction','ltr');
	        	 	$(this).parent().css('direction','ltr');
	        	});
	        	$('.figuretolocalize [data-localize="dollar_sign"]').each(function(){
	        	 	$(this).prependTo($(this).parent());
	        	 });
	        	$('.figure .decimal-figure').each(function(){
	        	 	$(this).css('direction','ltr');
	        	 	$(this).parent().css('direction','ltr');
	        	 });
	        	 $('.figure [data-localize="dollar_sign"]').each(function(){
	        	 	$(this).prependTo($(this).parent());
	        	 });
	        } else {
	        	$('[data-localize]').css('direction','ltr');
	        	$('.title-info').css('direction','ltr');
	        	$('#situation .col2').css('direction','ltr');
	        	$('#funding .col3').css('direction','ltr');
	        	$('tspan.unit').attr('x','20.9');
	        	$('.weblinks li').css('text-align','left');
	        	$('h3').css('text-align','left');
	        	$('tspan.text').attr('x','-1.2');
	        	$('tspan.value').attr('x','0');
	        	$('.percent-by-country').css('float','none');
	        	$('.percent-sign').css('float','none');
	        	$('.join-us-buttons').css('float','none');
	        	$('.share-buttons').css('float','none');
	        	$('.decimal-figure').html(function() {
				  var v = $(this).html();
				  $(this).text(v.replace(',','.'));
				});
				$('.figuretolocalize .decimal-figure').each(function(){
	        	 	$(this).css('direction','ltr');
	        	 	$(this).parent().css('direction','ltr');
	        	});
	        	$('.figuretolocalize [data-localize="dollar_sign"]').each(function(){
	        	 	$(this).prependTo($(this).parent());
	        	 });
	        	$('.figure .decimal-figure').each(function(){
	        	 	$(this).css('direction','ltr');
	        	 	$(this).parent().css('direction','ltr');
	        	 });
	        	  $('.figure [data-localize="dollar_sign"]').each(function(){
	        	 	$(this).prependTo($(this).parent());
	        	 });
	        }
		  }
	});
		
	if(localStorage.getItem('lang')) {
		$('select#change-language').val(localStorage.getItem('lang'));
		$('select#change-language').selectmenu('refresh');
		$('[data-localize]').localize('translation', {language : localStorage.getItem('lang'), pathPrefix: path});
		 if (localStorage.getItem('lang') === 'ar') {
	        	 $('[data-localize]').css('direction','rtl');
	        	 $('.title-info').css('direction','rtl');
	        	 $('#situation .col2').css('direction','rtl');
	        	 $('#funding .col3').css('direction','rtl');
	        	 $('#funding .col3').css('direction','rtl');
	        	 $('tspan.unit').attr('x','5');
	        	 $('tspan.text').attr('x','20');
	        	 $('tspan.value').attr('x','30');
	        	 $('.weblinks li').css('text-align','right');
	        	 $('h3').css('text-align','right');
	        	 $('.percent-by-country').css('float','right');
	        	 $('.percent-sign').css('float','right');
	        	 $('.join-us-buttons').css('float','right');
	        	 $('.share-buttons').css('float','right');
	        	 $('.decimal-figure').css('margin-left','5px');
	        	 $('.decimal-figure').html(function() {
				  var v = $(this).html();
				  $(this).text(v.replace(',','.'));
				});
				$('.figuretolocalize .decimal-figure').each(function(){
	        	 	$(this).prependTo($(this).parent());
	        	 	$(this).css('direction','rtl');
	        	 	$(this).parent().css('direction','rtl');
	        	 	$(this).next().appendTo($(this).parent());
	        	 });
	        	 $('.in-need-amount .decimal-figure').each(function(){
	        	 	$(this).prependTo($(this).parent());
	        	 	$(this).css('direction','rtl');
	        	 	$(this).parent().css('direction','rtl');
	        	 	$(this).next().appendTo($(this).parent());
	        	 });
	        	 $('.figure .decimal-figure').each(function(){
	        	 	$(this).prependTo($(this).parent());
	        	 	$(this).css('direction','rtl');
	        	 	$(this).parent().css('direction','rtl');
	        	 	$(this).next().appendTo($(this).parent());
	        	 });
	        	 $('.figure sup').css('direction','rtl').detach().insertAfter('#funding-requirements [data-localize="dollar_sign"]');
	        } else if (localStorage.getItem('lang') === 'fr') {
	        	$('[data-localize]').css('direction','ltr');
	        	$('.title-info').css('direction','ltr');
	        	$('#situation .col2').css('direction','ltr');
	        	$('#funding .col3').css('direction','ltr');
	        	$('tspan.unit').attr('x','20.9');
	        	$('.weblinks li').css('text-align','left');
	        	$('h3').css('text-align','left');
	        	$('tspan.value').attr('x','0');
	        	$('tspan.text').attr('x','-1.2');
	        	$('.percent-by-country').css('float','none');
	        	$('.percent-sign').css('float','none');
	        	$('.join-us-buttons').css('float','none');
	        	$('.share-buttons').css('float','none');
	        	$('.decimal-figure').html(function() {
				  var v = $(this).html();
				  $(this).text(v.replace('.',','));
				});
				$('.figuretolocalize .decimal-figure').each(function(){
	        	 	$(this).css('direction','ltr');
	        	 	$(this).parent().css('direction','ltr');
	        	});
	        	$('.figuretolocalize [data-localize="dollar_sign"]').each(function(){
	        	 	$(this).prependTo($(this).parent());
	        	 });
	        	 $('.figure .decimal-figure').each(function(){
	        	 	$(this).css('direction','ltr');
	        	 	$(this).parent().css('direction','ltr');
	        	 });
	        	  $('.figure [data-localize="dollar_sign"]').each(function(){
	        	 	$(this).prependTo($(this).parent());
	        	 });
	        } else {
	        	$('[data-localize]').css('direction','ltr');
	        	$('.title-info').css('direction','ltr');
	        	$('.weblinks li').css('text-align','left');
	        	$('#situation .col2').css('direction','ltr');
	        	$('#funding .col3').css('direction','ltr');
	        	$('h3').css('text-align','left');
	        	$('tspan.unit').attr('x','20.9');
	        	$('tspan.text').attr('x','-1.2');
	        	$('tspan.value').attr('x','0');
	        	$('.percent-by-country').css('float','none');
	        	$('.percent-sign').css('float','none');
	        	$('.join-us-buttons').css('float','none');
	        	$('.share-buttons').css('float','none');
	        	$('.decimal-figure').html(function() {
				  var v = $(this).html();
				  $(this).text(v.replace(',','.'));
				});
				$('.figuretolocalize .decimal-figure').each(function(){
	        	 	$(this).css('direction','ltr');
	        	 	$(this).parent().css('direction','ltr');
	        	});
	        	$('.figuretolocalize [data-localize="dollar_sign"]').each(function(){
	        	 	$(this).prependTo($(this).parent());
	        	 });
	        	$('.figure .decimal-figure').each(function(){
	        	 	$(this).css('direction','ltr');
	        	 	$(this).parent().css('direction','ltr');
	        	 });
	        	 $('.figure [data-localize="dollar_sign"]').each(function(){
	        	 	$(this).prependTo($(this).parent());
	        	 });
	        }
	} else {
		$('[data-localize]').localize('translation');
	}
}
		
//----------- init
function init(data){
	// parse data
	var currentfunding = data['currentfunding'];
	var currentrequirements = data['currentrequirements'];
	var currentreqformatted = data['currentreqformatted'];
	var peopleinneed = data['peopleinneed'];
	var foodsecurityphase = data['foodsecurityphase'];
		
	// append Situation tables
	$('#people-in-need table').html(function() {
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
	
	// append data to the large format figures
	$('#funding-requirements .figure').html('<span data-localize="dollar_sign">$</span><span class="big-number decimal-figure">' + currentreqformatted + '</span><span data-localize="billions">Billion</span>');
	$('#funding-total .figure').html('<span data-localize="dollar_sign">$</span>' + formatMillionsasBillions(currentfunding) + '<span data-localize="billions">Billion</span>');
	
	// append donut charts
	createDisplacementChart();
	createFundingChart(currentfunding,currentrequirements);
	
	//make my tooltips work
	$('#funding-total path').tipsy({opacity:.9, gravity:'n', html:true});
	$('#displaced path').tipsy({opacity:.9, gravity:'n', html:true});

		
}












  	


