<!DOCTYPE html>

<html lang="en">
	<head>
    	<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<title>Crisis in South Sudan</title>
		<meta name="description" content="Crisis in South Sudan"/>
		<meta name="author" content="OCHA Visual Information Unit"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<meta name="twitter:card" content="Crisis in South Sudan" />
		<meta name="twitter:site" content="@unocha" />
		<meta name="twitter:creator" content="@unocha" />
		<meta property="og:url" content="http://interactive.unocha.org/emergency/2017_south_sudan/" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Crisis in South Sudan" />
		<meta property="og:description" content="Due to new offensives and clashes since the beginning of 2017 the humanitarian crisis in South Sudan has grown to epic proportions—with food insecurity, cholera and malaria, and displacement being the main obstacles facing the country today." />
		<meta property="og:image" content="http://interactive.unocha.org/emergency/2017_south_sudan/img/img-social-ssdcrisis.jpg" />
	
		<!-- Favicon -->
		<link rel="shortcut icon" href="http://www.unocha.org/sites/default/files/ochaonline_theme_favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="http://www.unocha.org/sites/default/files/ochaonline_theme_favicon.ico">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i|Roboto+Condensed:300,300i,400,400i,700,700i|Roboto+Slab:100,300,400,700|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet"> 
		
		<!-- jQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" charset="utf-8"></script>
		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script src="../../js/jquery.ui.touch-punch.min.js"></script>
		
	    <!-- include CARTO.js and CSS library -->
    	<script src="https://cartodb-libs.global.ssl.fastly.net/cartodb.js/v3/3.15/cartodb.js"></script>
    	<link rel="stylesheet" href="https://cartodb-libs.global.ssl.fastly.net/cartodb.js/v3/3.15/themes/css/cartodb.css" />
    	
    	<!-- include Mapbox leaflet plugin -->
    	<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
		<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />
    	
    	<!-- Site styles -->
		<link href="../../css/ocha-microsite.css" type="text/css" rel="stylesheet"/>
    	
    	<style>
			html, body {margin:0; padding:0; background:rgb(0,40,64); width:100%; height:100%; position:relative;}
			* {font-family:'Roboto', sans-serif;}
			a {transition: all 0.3s; -o-transition: all 0.3s; -ms-transition: all 0.3s; -moz-transition: all 0.3s; -webkit-transition: all 0.3s;}
			
			/*---- Infowindow structure ----*/
			.pointer-outer {position: absolute; bottom: -36px; left: -4px; width: 20px; height: 32px; margin-left: 30px; background: transparent none repeat scroll 0% 0%; overflow: hidden; z-index: 0;}
			.pointer-inner {position: absolute; width: 20px; height: 20px; left: 0px; top: -8px; margin-left: 0px; transform: skew(0deg, -45deg); border-radius: 0px 0px 0px 10px; background: rgba(0,142,186, 1) none repeat scroll 0% 0%; z-index: 0;}
		  	.infowindow-wrapper {background-color: rgba(255,255,255,0.9); border-radius:8px; box-shadow: 0px 0px 0px 6px rgba(0,142,186, 1); cursor: auto; padding: 30px; position: relative; width: 275px;}
			.infowindow-wrapper:before {border-left-color: transparent; border-left-style: solid; border-left-width: 0px; border-right-color: transparent; border-right-style: solid; border-right-width: 14px; border-top-color: rgba(255,255,255,0.9); border-top-style: solid; border-top-width: 14px; bottom: -14px; content: ""; cursor: auto; height: 0px; left: 0px; line-height: 18px; margin-left: 30px; position: absolute; width: 0px; z-index: 2;}	
			.close-button {background-attachment: scroll; background-clip: border-box; background-color: #FFF; background-image: none; background-origin: padding-box; background-position: 0% 0%; background-repeat: repeat; background-size: auto auto; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; border-top-left-radius: 10px; border-top-right-radius: 10px; box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 0px 3px; cursor: pointer; font-family: 'EgyptienneBold','Helvetica Neue',Arial,Helvetica,sans-serif; font-size: 0px; font-size-adjust: none; font-stretch: normal; font-style: normal; font-variant: normal; font-weight: 400; height: 20px; line-height: 0px; margin-bottom: 0px; margin-left: 0px; margin-right: 0px; margin-top: 0px; opacity: 1; padding-bottom: 0px; padding-left: 0px; padding-right: 0px; padding-top: 0px; position: absolute; right: -12px; text-decoration: none; text-decoration-color: #0078A8; text-decoration-line: none; text-decoration-style: solid; text-indent: -9999px; text-rendering: optimizelegibility; text-transform: uppercase; top: -12px; visibility: visible; width: 20px; z-index: 3;}
			.close-button:before {background-attachment: scroll; background-clip: border-box; background-color: #999999; background-image: none; background-origin: padding-box; background-position: 0% 0%; background-repeat: repeat; background-size: auto auto; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; border-top-left-radius: 3px; border-top-right-radius: 3px; color: #999999; content: ""; cursor: pointer; height: 2px; left: 6px; line-height: 0px; position: absolute; text-indent: -9999px; top: 9px; transform: matrix(0.707107, 0.707107, -0.707107, 0.707107, 0, 0); visibility: visible; width: 8px;}
			.close-button:after {background-attachment: scroll; background-clip: border-box; background-color: #999999; background-image: none; background-origin: padding-box; background-position: 0% 0%; background-repeat: repeat; background-size: auto auto; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; border-top-left-radius: 3px; border-top-right-radius: 3px; color: #999999; content: ""; cursor: pointer; height: 2px; left: 6px; line-height: 0px; position: absolute; text-indent: -9999px; top: 9px; transform: matrix(0.707107, -0.707107, 0.707107, 0.707107, 0, 0); visibility: visible; width: 8px;}
			.infowindow-content {cursor: auto; font-size: 12px; font-weight: 400; line-height: 14px;}
			div.cartodb-tooltip {
				max-width:none;
			}
			.food_phase {
				color:rgb(255,255,255);
				padding:10px;
				margin-top:5px;
				display:inline-block;
				text-transform:uppercase;
			}
			.phase_5 {
				background:#b71728;
			}
			.phase_4 {
				background:#e8a2a5;
			}
			.phase_3 {
				background:#fee5cb;
				color:rgb(0,0,0);
			}
			.phase_2 {
				background:#fffbdf;
				color:rgb(0,0,0);
			}
			.phase_1 {
				background:#e3f1e6;
			}
			.population {
				font-size:10px;
				color:rgb(150,150,150);
				font-style: italic;
				text-transform:none;
			}
			.infowindow-content table {
				margin-top:10px;
			}
			div.cartodb-popup h3 {
				font-family:'Roboto Condensed',sans-serif;
				text-transform:uppercase;
				font-size:18px;
				color:rgb(0,0,0);
				margin:0;
				padding:5px;
				text-align:left;
				font-weight:400;
				border-top:1px solid rgb(0,0,0);
				border-bottom:1px solid rgb(0,0,0);
			}
		</style>
		
		<script type="infowindow/html" id="infowindow_template">
	        <div class="cartodb-popup v2">
				<a href="#close" class="cartodb-popup-close-button close">x</a>
				<div class="cartodb-popup-content-wrapper">
					<div class="cartodb-popup-content jspScrollable" style="max-height: 230px; overflow: hidden; padding: 0px; width: 202px;" tabindex="0">
						<div class="jspContainer" style="width: 202px; height: 230px;">
							<div class="jspPane" style="padding: 0px; top: 0px; width: 192px;">
								<h3 class="county_name">{{admin2_nam}}</h3>
								<span class="food_phase phase_{{food_sec_c}}">{{food_sec_l}}</span>
								<table>
									<tbody>
										<tr>
											<td class="country-name" data-localize="catastrophe_label">Catastrophe</td>
											<td class="in-need-amount"><span class="decimal-figure">{{phase5_cat}}</span></td>
										</tr>
										<tr>
											<td class="country-name" data-localize="emergency_label">Emergency</td>
											<td class="in-need-amount"><span class="decimal-figure">{{phase4_eme}}</span></td>
										</tr>
										<tr>
											<td class="country-name" data-localize="crisis_label">Crisis</td>
											<td class="in-need-amount"><span class="decimal-figure">{{phase3_cri}}</span></td>
										</tr>
										<tr>
											<td class="country-name" data-localize="stressed_label">Stressed</td>
											<td class="in-need-amount"><span class="decimal-figure">{{phase2_str}}</span></td>
										</tr>
										<tr>
											<td class="country-name" data-localize="minimal_label">Minimal</td>
											<td class="in-need-amount"><span class="decimal-figure">{{phase1_min}}</span></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="jspVerticalBar">
								<div class="jspCap jspCapTop"></div>
								<div class="jspTrack" style="height: 180px;">
									<div class="jspDrag" style="height: 127px;">
										<div class="jspDragTop"></div>
										<div class="jspDragBottom"></div>
									</div>
								</div>
								<div class="jspCap jspCapBottom"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="cartodb-popup-tip-container"></div>
			</div>
    	</script>
		
		<script>
			// empty variable for map
	    	var map, zoom, center;
	    	
	    	// get initial zoom value
	    	if($(window).width() < 583) {
				zoom = 6;
				center = [7.5,30];
			} else {
				zoom = 7;
				center = [7.5,30];
			}
	    	
			// determine if document is loaded within an iframe
			function ifiFrame() {
			    try {
			        return window.self !== window.top;
			    } catch (e) {
			        return true;
			    }
			};
	    	
			// leaflet init
      		function init() {
				// define the container
	    		var container = $('#map');
	    		
	    		// set the data attributes from Carto
				var dataset = ['admin2_nam', 'food_sec_l', 'pop_my2017', 'food_sec_c', 'phase5_cat', 'phase4_eme', 'phase3_cri', 'phase2_str', 'phase1_min'];
				
				// set the mouse scroll zoom ability based on whether or not the document is within an iframe
				if (ifiFrame() == true) {
					scrollzoom = false;
				} else {
					scrollzoom = true;
				}
	    		
		        // create leaflet map and define some properties
		        map = L.map('map', { 
		        	zoomControl: true,
		        	fullscreenControl: !L.Browser.mobile,
		        	center: center,
		          	zoom: zoom,
			        scrollWheelZoom:scrollzoom,
					minZoom:6,
					maxZoom:11,
					tap:false,
					dragging: !L.Browser.mobile,
					//attributionControl:false
		        });
		
		        // add baselayer
			    L.tileLayer('https://api.mapbox.com/styles/v1/reliefweb/cj7qd2zlocux72rmqj39wlkun/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoicmVsaWVmd2ViIiwiYSI6IldYR2ZuV3cifQ.eSPZMZWE6UyLtO0OH_-qrw', {attribution:'Created by UN-OCHA'}).addTo(map);
			    
			    // add the labels for the baselayer
			    var topPane = L.DomUtil.create('div', 'leaflet-top-pane', map.getPanes().mapPane);
		        var topLayer = new L.tileLayer('https://api.mapbox.com/styles/v1/reliefweb/cj7q7afskcq4m2spdbm9z2hmt/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoicmVsaWVmd2ViIiwiYSI6IldYR2ZuV3cifQ.eSPZMZWE6UyLtO0OH_-qrw', {
		        	maxZoom: 17
		        }).addTo(map);
		        
		        topPane.appendChild(topLayer.getContainer());
		        topLayer.setZIndex(7);
			    
		        // add cartodb layer with one sublayer, uses create layer instead of vizjson because of the new Carto Builder account issues
		        cartodb.createLayer(map, {
		        	user_name: 'ochaviu',
		        	type: 'cartodb',
		        	tiler_protocol: 'https',
		        	tiler_port: 443,
		        	//cartodb_logo:false,
		        	sublayers: [{
		            	sql: "SELECT * FROM ssd_food_sec",
		            	cartocss: "#layer { polygon-fill: #ffffff; polygon-opacity: 0.9; ::outline { line-color: #bfbfbf; line-width: .5; line-opacity: 0.5; } } #layer[food_sec_c = 1] {polygon-fill: #e3f1e6;} #layer[food_sec_c = 2] {polygon-fill: #fffbdf;} #layer[food_sec_c = 3] {polygon-fill: #fee5cb;} #layer[food_sec_c = 4] {polygon-fill: #e8a2a5;} #layer[food_sec_c = 5] {polygon-fill: #b71728;} #layer::labels { text-name: [admin2_nam]; text-face-name: 'Lato Regular'; text-size: 10; text-fill: #000000; text-label-position-tolerance: 0; text-halo-radius: 0; text-halo-fill: #000000; text-dy: 0; text-allow-overlap: false; text-placement: point; text-placement-type: dummy; text-transform:uppercase; }"
		          	}]
		        })
		        .addTo(map)
		        .done(function(layer) {
		         	// defines the sublayer
		        	var sublayer = layer.getSubLayer(0);
		        	
		        	layer.leafletMap.viz.addOverlay({
		                 type: 'tooltip',
		                 layer: sublayer,
		                 template: '<div class="cartodb-tooltip-content-wrapper infowindow-wrapper">'+
										'<div class="infowindow-content">'+
											'<h3 class="county_name">{{admin2_nam}}</h3>'+
											'<span class="food_phase phase_{{food_sec_c}}">{{food_sec_l}}</span>'+
											'<table>'+
												'<tbody>'+
													'<tr>'+
														'<td class="country-name" data-localize="catastrophe_label">Catastrophe</td>'+
														'<td class="in-need-amount"><span class="decimal-figure">{{phase5_cat}}</span></td>'+
													'</tr>'+
													'<tr>'+
														'<td class="country-name" data-localize="emergency_label">Emergency</td>'+
														'<td class="in-need-amount"><span class="decimal-figure">{{phase4_eme}}</span></td>'+
													'</tr>'+
													'<tr>'+
														'<td class="country-name" data-localize="crisis_label">Crisis</td>'+
														'<td class="in-need-amount"><span class="decimal-figure">{{phase3_cri}}</span></td>'+
													'</tr>'+
													'<tr>'+
														'<td class="country-name" data-localize="stressed_label">Stressed</td>'+
														'<td class="in-need-amount"><span class="decimal-figure">{{phase2_str}}</span></td>'+
													'</tr>'+
													'<tr>'+
														'<td class="country-name" data-localize="minimal_label">Minimal</td>'+
														'<td class="in-need-amount"><span class="decimal-figure">{{phase1_min}}</span></td>'+
													'</tr>'+
												'</tbody>'+
											'</table>'+
										'</div>'+
									'</div>', 
		                 position: 'bottom|right',
		                 fields: [{ admin2_nam: 'admin2_nam'}]
		               });
		        	
		        	// change cursor on map drag
					map.on('dragstart', function(e) {
						container.css('cursor','grabbing');
					})
					.on('dragend', function(e) {
						container.css('cursor','grab');
					});
					
					// use custom infowindow template and append data 
		            var infowindow = cartodb.vis.Vis.addInfowindow(map, sublayer, dataset);
		            infowindow.model.set('template', $('#infowindow_template').html());
		            
					// add interaction on slider change
					/*$("#slider").on("slidechange", function(event, ui) {
						if (ui.value === 1) {
			        		sublayer.set({
								sql: "SELECT * FROM wrl_foodsec_t02_2016_fews_xsimple"
							});
			        	}
			        	if (ui.value === 2) {
			        		sublayer.set({
								sql: "SELECT * FROM wrl_foodsec_t06_2016_fews_xsimple"
							});
			        	}
			        	if (ui.value === 3) {
			        		sublayer.set({
								sql: "SELECT * FROM wrl_foodsec_t10_2016_fews_xsimple"
							});
			        	}
			        	if (ui.value === 4) {
			        		sublayer.set({
								sql: "SELECT * FROM wrl_foodsec_febmay_2017_fewsipc_xsimple"
							});
			        	}
			        	if (ui.value === 5) {
			        		sublayer.set({
								sql: "SELECT * FROM wrl_foodsec_junsept_2017_fewsipc_xsimple"
							});
			        	}
					});*/ // end .on slidechange
					
		        }); // end .done

      		} // end init

	      	// document ready functions
			$(document).ready(function(){
				
				// make the timeline slider work				
				/*$(function() {
				    $("#slider").slider({
				      value:5,
				      min: 1,
				      max: 5,
				      slide: function(event, ui) {
				        $("#amount").val(function() {
				        	if (ui.value === 1) {
				        		return 'Feb-May 2016'
				        	}
				        	if (ui.value === 2) {
				        		return 'Jun-Sep 2016'
				        	}
				        	if (ui.value === 3) {
				        		return 'Oct 2016-Jan 2017'
				        	}
				        	if (ui.value === 4) {
				        		return 'Feb-May 2017'
				        	}
				        	if (ui.value === 5) {
				        		return 'Jun-Sep 2017'
				        	}
				        });
				      }
				    });
				    $('#slider span').html('<input type="text" id="amount" readonly class="slider-label">');
				    $("#amount").val("Jun-Sep 2017");
				});
				
				$('#slider').on('mouseover',function(){
			    	map.dragging.disable();
			    });
			     $('#slider').on('mouseout',function(){
			    	map.dragging.enable();
			    });*/
				    
				// run the map function
				init();
			});

    	</script>
	    
 	</head>
	<body allowfullscreen>
	<?php include_once("../../analyticstracking.php") ?>
	    <div id="map" allowfullscreen>
	    	<!--<div id="slider"></div>-->
			<div class="legend-outer">
				<div class="legend-inner">
					<h5>IPC Categories</h5>
					<ul id="map-legend">
						<li class="li-famine">Catastrophe</li>
						<li class="li-emergency">Emergency</li>
						<li class="li-crisis">Crisis</li>
						<li class="li-stressed">Stressed</li>
						<li class="li-minimal">Minimal</li>
						<li class="li-nodata">No Data</li>
					</ul>
				</div>
			</div>
	    </div>
  	</body>
</html>
