var reports, news, media, maps, multimedia, fundingdocs;

reports = 'https://api.reliefweb.int/v1/reports?appname=apidoc&limit=3&preset=latest&filter[operator]=AND&filter[conditions][0][operator]=OR&filter[conditions][0][field]=primary_country&filter[conditions][0][value][]=SSD&filter[conditions][0][value][]=YEM&filter[conditions][0][value][]=SOM&filter[conditions][0][value][]=NGA&filter[conditions][1][field]=format&filter[conditions][1][value][]=situation-report&filter[conditions][2][field]=source&filter[conditions][2][value][]=ocha&fields[include][]=primary_country.name&fields[include][]=date.created&fields[include][]=headline.title&fields[include][]=url_alias&fields[include][]=format';
news = 'https://www.unocha.org/ocha_news/stories&callback=?';
media = 'https://api.reliefweb.int/v1/reports?appname=apidoc&limit=3&preset=latest&filter[operator]=AND&filter[conditions][0][operator]=OR&filter[conditions][0][field]=primary_country&filter[conditions][0][value][]=SSD&filter[conditions][0][value][]=YEM&filter[conditions][0][value][]=SOM&filter[conditions][0][value][]=NGA&filter[conditions][1][field]=format&filter[conditions][1][value][]=news-and-press-release&filter[conditions][2][field]=theme&filter[conditions][2][value][]=food-and-nutrition&fields[include][]=primary_country.name&fields[include][]=date.created&fields[include][]=headline.title&fields[include][]=url_alias&fields[include][]=format';
maps = 'https://api.reliefweb.int/v1/reports?appname=apidoc&limit=5&filter[operator]=AND&filter[conditions][0][operator]=OR&filter[conditions][0][field]=primary_country&filter[conditions][0][value][]=SSD&filter[conditions][0][value][]=YEM&filter[conditions][0][value][]=SOM&filter[conditions][0][value][]=NGA&filter[conditions][1][field]=format.name&filter[conditions][1][value][]=map&filter[conditions][1][value][]=infographic&filter[conditions][2][field]=theme&filter[conditions][2][value][]=food-and-nutrition&filter[conditions][2][value][]=health&filter[conditions][2][value][]=water-sanitation-hygiene&filter[conditions][2][value][]=agriculture&preset=latest&fields[include][]=country.name&fields[include][]=primary_country.name&fields[include][]=file.url&fields[include][]=file.preview.url&fields[include][]=date.created&fields[include][]=headline.title&fields[include][]=url_alias&fields[include][]=format';

function getData(type, callback) {
    $.getJSON(type, function(data) {
        d = data;
        callback(d);
    });
}

function dateToString(date) {
	date = new Date(date);
	var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
	var day = date.getDate();
	var month = months[date.getMonth()];
	var year = date.getFullYear();
	return day + ' ' + month + ' ' + year;
}

function text_truncate(str, length, ending) {
	if (length == null) {
		length = 100;
	}
	if (ending == null) {
		ending = '...';
	}
	if (str.length > length) {
		return str.substring(0, length - ending.length) + ending;
	} else {
		return str;
	}
}
  
function populateReports(reports) {
	getData(reports, function(d) {
		data = d.data;
		html = '';
		for (i=0; i<data.length; i++) {
			html = '<div class="from-feed">'+
						'<p><span>' + data[i].fields.primary_country.name + ' &bull;</span> ' + dateToString(data[i].fields.date.created) + '</p>'+
						'<p><a href="' + data[i].fields.url_alias + '" target="_blank">' + data[i].fields.title + '</a></p>'+
					'</div>';
			$('#resources .reports').append(html);
		}
		$('#resources .reports').append('<a class="more-link" href="http://reliefweb.int/updates?advanced-search=(PC255.PC175.PC216.PC8657)_(S1503)_(F10)#content" target="_blank" data-localize="more_link">More >></a>');
		$('[data-localize]').localize('translation', {language : localStorage.getItem('lang'), pathPrefix: '../lang/'});
		if (localStorage.getItem('lang') === 'ar') {
        	 $('[data-localize]').css('direction','rtl');
        } else {
        	 $('[data-localize]').css('direction','ltr');
        }
	});
}

function populateMedia(media) {
	getData(media, function(d) {
		data = d.data;
		html = '';
		for (i=0; i<data.length; i++) {
			html = '<div class="from-feed">'+
						'<p><span>' + data[i].fields.primary_country.name + ' &bull;</span> ' + dateToString(data[i].fields.date.created) + '</p>'+
						'<p><a href="' + data[i].fields.url_alias + '" target="_blank">' + text_truncate(data[i].fields.title, 100) + '</a></p>'+
					'</div>';
			$('#resources .media').append(html);
		}
		$('#resources .media').append('<a class="more-link" href="http://reliefweb.int/updates?advanced-search=(PC255.PC175.PC216.PC8657)_(F8_T4593)#content" target="_blank" data-localize="more_link">More >></a>');
		$('[data-localize]').localize('translation', {language : localStorage.getItem('lang'), pathPrefix: '../lang/'});
		if (localStorage.getItem('lang') === 'ar') {
        	 $('[data-localize]').css('direction','rtl');
        } else {
        	 $('[data-localize]').css('direction','ltr');
        }
	});
}

function populateNews(news) {
	$.getJSON(news, function(data) {
        html = '';
		for (i=0; i<data.length; i++) {
			html = '<div class="from-feed">'+
						'<p><span>' + data[i].field_top_stories_country[0] + ' &bull;</span> ' + data[i].changed + '</p>'+
						'<p><a href="http://www.unocha.org/' + data[i].path + '" target="_blank">' + data[i].title + '</a></p>'+
					'</div>';
			$('#resources .news').append(html);
		}
		$('#resources .news').append('<a target="_blank" class="more-link" href="http://www.unocha.org/media-centre/news-updates/threat-famine" data-localize="more_link">More >></a>');
		$('[data-localize]').localize('translation', {language : localStorage.getItem('lang'), pathPrefix: '../lang/'});
		if (localStorage.getItem('lang') === 'ar') {
        	 $('[data-localize]').css('direction','rtl');
        } else {
        	 $('[data-localize]').css('direction','ltr');
        }
    });
}

function populateMaps(maps) {
	getData(maps, function(d) {
		data = d.data;
		html = '';
		for (i=0; i<data.length; i++) {
			html = '<li>'+
						'<a href="' + data[i].fields.url_alias + '" target="_blank" class="thumb"><img src="' + data[i].fields.file[0].preview.url + '"/></a>'+
						'<div class="from-feed">'+
							'<p><span>' + data[i].fields.primary_country.name + ' &bull;</span> ' + dateToString(data[i].fields.date.created) + '</p>'+
							'<p><a href="' + data[i].fields.url_alias + '" target="_blank">' + data[i].fields.title + '</a></p>'+
						'</div>'+
					'</li>';
			$('#resources ul.maps').append(html);
			$('ul.carousel li:first-of-type').addClass('active');
		}
		$('#resources .col3.maps').append('<div class="more-stuff"><a class="maps previous-link"><</a><a class="more-link" href="http://reliefweb.int/updates?advanced-search=(PC255.PC175.PC216.PC8657)_(T4593)_(F12570.F12)_(L267)#content" target="_blank" data-localize="more_button">More</a><a class="maps next-link">></a></div>');
		$('[data-localize]').localize('translation', {language : localStorage.getItem('lang'), pathPrefix: '../lang/'});
		if (localStorage.getItem('lang') === 'ar') {
        	 $('[data-localize]').css('direction','rtl');
        } else {
        	 $('[data-localize]').css('direction','ltr');
        }
        
		var carousel = $('#maps-carousel');

		//Set the event handlers for buttons.
		$('.maps.next-link').click(function(){
			active = $('#maps-carousel li.active');
			active.addClass('toRemove');
			next = active.next();
			$('#maps-carousel li.toRemove').animate({
				opacity:0
			},300, function() {
				next.addClass('active').css('opacity',1);
				$(this).removeClass('active').removeClass('toRemove').remove().appendTo(carousel);
			});
		});
		
		$('.maps.previous-link').click(function(){
			active = $('#maps-carousel li.active');
			active.addClass('toRemove');
			previous = $('#maps-carousel li:last-of-type');
			$('#maps-carousel li.toRemove').animate({
				opacity:0
			},300, function() {
				previous.remove().prependTo(carousel).addClass('active').css('opacity',1);
				$(this).removeClass('active').removeClass('toRemove');
			});
		});

	});
}

function operateFunding() {
	var carousel = $('#fundingdocs-carousel');

	//Set the event handlers for buttons.
	$('.fundingdocs.next-link').click(function(){
		active = $('#fundingdocs-carousel li.active');
		active.addClass('toRemove');
		next = active.next();
		$('#fundingdocs-carousel li.toRemove').animate({
			opacity:0
		},300, function() {
			next.addClass('active').css('opacity',1);
			$(this).removeClass('active').removeClass('toRemove').remove().appendTo(carousel);
		});
	});
	
	$('.fundingdocs.previous-link').click(function(){
		active = $('#fundingdocs-carousel li.active');
		active.addClass('toRemove');
		previous = $('#fundingdocs-carousel li:last-of-type');
		$('#fundingdocs-carousel li.toRemove').animate({
			opacity:0
		},300, function() {
			previous.remove().prependTo(carousel).addClass('active').css('opacity',1);
			$(this).removeClass('active').removeClass('toRemove');
		});
	});
}

function operateMultimedia() {
	var carousel = $('#multimedia-carousel');

	//Set the event handlers for buttons.
	$('.multimedia.next-link').click(function(){
		active = $('#multimedia-carousel li.active');
		active.addClass('toRemove');
		next = active.next();
		$('#multimedia-carousel li.toRemove').animate({
			opacity:0
		},300, function() {
			next.addClass('active').css('opacity',1);
			$(this).removeClass('active').removeClass('toRemove').remove().appendTo(carousel);
		});
	});
	
	$('.multimedia.previous-link').click(function(){
		active = $('#multimedia-carousel li.active');
		active.addClass('toRemove');
		previous = $('#multimedia-carousel li:last-of-type');
		$('#multimedia-carousel li.toRemove').animate({
			opacity:0
		},300, function() {
			previous.remove().prependTo(carousel).addClass('active').css('opacity',1);
			$(this).removeClass('active').removeClass('toRemove');
		});
	});
}

populateReports(reports);
populateMedia(media);
populateMaps(maps);
operateFunding();
operateMultimedia();
populateNews(news);

