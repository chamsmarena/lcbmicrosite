<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html>
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
		<script src="js/jqueryui_1.12.1/jquery-ui.min.js" charset="utf-8"></script>
		<script src="js/jquery-localize/dist/jquery.localize.js" charset="utf-8"></script>
		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		
		<!-- D3.js -->
		<script src="https://d3js.org/d3.v3.min.js"></script>
		
		<!--Tipsy -->
		<script src="js/tipsy.js"></script>
		
		<!--Modernizr -->
		<script src="js/modernizr-2.7.1.min.js" id="modernizr-js"></script>
		
		<!--Skrollr -->
		<script src="js/skrollr.js" id="skrollr-js"></script>
		
		<!-- Site styles -->
		<link href="css/unocha-nav.css" type="text/css" rel="stylesheet"/>
		<link href="css/ocha-microsite.css" type="text/css" rel="stylesheet"/>
		
	</head>
	<body>
		<?php include_once("analyticstracking.php") ?>
		<?php include_once("nav.php") ?>
		<div id="nav" class="crisisnavslideout">
			<div class="wrapper">
				<div id="lang-select">
					<select name="change_language" id="change-language" class="language-toggle">
				    	<option value="en" selected>EN</option>
				        <option value="fr">FR</option>
				        <option value="ar" style="direction:ltr;">عربى</option>
				    </select>
			    </div>
				<div class="crisis-nav">
					<a href="#" class="crisis-nav-title" data-localize="crisis_nav_title">Nigeria and the Lake Chad Basin:</a>
					<a href="#situationposition" data-localize="crisis_nav_situation">Situation</a>
					<a href="#foodsecurity-position" data-localize="crisis_nav_foodsecurity">Food Security</a>
					<a href="#healthposition" data-localize="crisis_nav_healthcrisis">Health Crisis</a>
					<a href="#protectionposition" data-localize="crisis_nav_protection">Protection</a>
					<a href="#fundingposition" data-localize="crisis_nav_response">Response/Funding</a>
					<a href="https://secure.globalproblems-globalsolutions.org/site/Donation2;jsessionid=39EC3E9CF71F21C13A838DA263E1D1D0.app244a?df_id=10604&10604.donation=form1" target="_blank" data-localize="crisis_nav_donate">Donate</a>
				</div>
			</div>
		</div>
		<div id="main">
			<div class="hamburger" style='z-index:1000;'>
				<span onclick="openNav()" class="openbtn">&larr; <strong>MENU: CRISIS IN SOUTH SUDAN</strong></span>
			</div>
			
			
			
			
			<!-- BLOC SLIDE -->
			<div id="slideshow" class="slideshow">
				<!-- slide 1 -->
				<section id="title1" class="title" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -400px;" data-bottom-top="background-position: 50% 300px;" data-anchor-target="#title1">
					<div class="wrapper astable">
						<div class="title-info">
							<p data-localize="main_text1">Nigeria and<br/>the Lake Chad Basin:</p>
							<h1 data-localize="main_figure1">10.9 MILLION</h1>
							<p data-localize="main_paragraph1">People in Need</p>
							<a href="https://secure.globalproblems-globalsolutions.org/site/Donation2;jsessionid=39EC3E9CF71F21C13A838DA263E1D1D0.app244a?df_id=10604&10604.donation=form1" target="_blank" class="button red-bk donate donatebutton" data-localize="donate_button">Donate</a>
						</div>
					</div>
					<div class="nexttext wrapper" data--500-top="opacity:0;" data-center="opacity:1;" data-anchor-target="#title1">
						<p class="photocredit" data-localize="photocredit1">Photo: OCHA</p>
						<p><a href="#situationposition" data-localize="next_situation">NEXT: SITUATION</a></p>
					</div>
				</section>
				<!-- slide 2 -->
				<section id="title2" class="title" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -400px;" data-bottom-top="background-position: 50% 300px;" data-anchor-target="#title2">
					<div class="wrapper astable">
						<div class="title-info">
							<p data-localize="main_text1">Nigeria and<br/>the Lake Chad Basin:</p>
							<h1 data-localize="main_figure2">2.3 MILLION</h1>
							<p data-localize="main_paragraph2">People Displaced</p>
							<a href="https://secure.globalproblems-globalsolutions.org/site/Donation2;jsessionid=39EC3E9CF71F21C13A838DA263E1D1D0.app244a?df_id=10604&10604.donation=form1" target="_blank" class="button red-bk donate donatebutton" data-localize="donate_button">Donate</a>
						</div>
					</div>
					<div class="nexttext wrapper" data--500-top="opacity:0;" data-center="opacity:1;" data-anchor-target="#title2">
						<p class="photocredit" data-localize="photocredit2">Photo: OCHA</p>
						<p><a href="#situationposition" data-localize="next_situation">NEXT: SITUATION</a></p>
					</div>
				</section>
				<!-- slide 3 -->
				<section id="title3" class="title" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -400px;" data-bottom-top="background-position: 50% 300px;" data-anchor-target="#title3">
					<div class="wrapper astable">
						<div class="title-info">
							<p data-localize="main_text1">Nigeria and<br/>the Lake Chad Basin:</p>
							<h1 data-localize="main_figure3">7.2 MILLION</h1>
							<p data-localize="main_paragraph3">People Severely Food Insecure</p>
							<a href="https://secure.globalproblems-globalsolutions.org/site/Donation2;jsessionid=39EC3E9CF71F21C13A838DA263E1D1D0.app244a?df_id=10604&10604.donation=form1" target="_blank" class="button red-bk donate donatebutton" data-localize="donate_button">Donate</a>
						</div>
					</div>
					<div class="nexttext wrapper" data--500-top="opacity:0;" data-center="opacity:1;" data-anchor-target="#title3">
						<p class="photocredit" data-localize="photocredit3">Photo: OCHA</p>
						<p><a href="#situationposition" data-localize="next_situation">NEXT: SITUATION</a></p>
					</div>
				</section>
				<!-- slide 4 -->
				<section id="title4" class="title" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -400px;" data-bottom-top="background-position: 50% 300px;" data-anchor-target="#title3">
					<div class="wrapper astable">
						<div class="title-info">
							<p data-localize="main_text1">Nigeria and<br/>the Lake Chad Basin:</p>
							<h1 data-localize="main_figure3">515 000</h1>
							<p data-localize="main_paragraph3">Children Severly Malnourished</p>
							<a href="https://secure.globalproblems-globalsolutions.org/site/Donation2;jsessionid=39EC3E9CF71F21C13A838DA263E1D1D0.app244a?df_id=10604&10604.donation=form1" target="_blank" class="button red-bk donate donatebutton" data-localize="donate_button">Donate</a>
						</div>
					</div>
					<div class="nexttext wrapper" data--500-top="opacity:0;" data-center="opacity:1;" data-anchor-target="#title3">
						<p class="photocredit" data-localize="photocredit3">Photo: OCHA</p>
						<p><a href="#situationposition" data-localize="next_situation">NEXT: SITUATION</a></p>
					</div>
				</section>
			</div>
			
			
			
			
			<!-- BLOC SITUATION -->
			<a id="situationposition"></a>
			<section id="situation" class="content">
				<div class="wrapper">
					<div class="section-info">
						<h1 data-localize="situation">Situation</h1>
						<p data-localize="situation_text">The crisis in the Lake Chad Basin is affecting millions of people across Cameroon, Chad, Niger and Nigeria. After eight years of conflict, many communities are on the brink of disaster.</p>
						<p data-localize="situation_text">Scaled-up assistance helped avert famine in 2017, but gains remain highly fragile. One in two families will require sustained assistance to survive and rebuild their lives.</p>
					</div>
					<div class="row">
						<div id="people-in-need" class="col3 infobox">
							<img class="sectionicon" src="img/icon-SSD-peopleinneed.png"/>
							<h3 data-localize="people_in_need_title">People In Need</h3>
							<div class="col1">
								<p class="figure" data-localize="figure_people_in_need"><span class="big-number decimal-figure">10.9</span>Million</p>
							</div>
							<h4 data-localize="infographic_people_in_need_header">Sectors Most in Need</h4>
							<div class="infographic">
								<table>
									<!-- data inserts here -->
								</table>
							</div>
						</div>
						<div id="displaced" class="col3 infobox">
							<img class="sectionicon" src="img/icon-SSD-peopledisplaced.png"/>
							<h3 data-localize="malnourished_title">People Displaced</h3>
							<div>
								<p class="figure" data-localize="figure_displaced"><span class="big-number decimal-figure">2.3</span>Million</p>
							</div>
							<h4 data-localize="infographic_displacement_header">By Type of Displacement</h4>
							<div class="infographic">
								<div class='row'>
									<div class='col3' data-localize="figure_refugees"><span class="grey label">2.0M<br/><strong>Refugees</strong></span></div>
									<div class='col3 chart' style="min-height:149px;"></div>
									<div class='col3' data-localize="figure_idps"><span class="blue label">1.9M<br/><strong>IDPs</strong></span></div>
								</div>
								<!-- data inserts here -->
							</div>
						</div>
						<div id="malnourished" class="col3 infobox">
							<img class="sectionicon" src="img/icon-SSD-peoplemalnourished.png"/>
							<h3 data-localize="malnourished_title">People Severely Food Insecure</h3>
							<div class="col1">
								<p class="figure" data-localize="figure_malnourished"><span class="big-number decimal-figure">7.2</span>Million</p>
							</div>
							<h4 data-localize="infographic_foodsec_header">By Food Security Phase</h4>
							<div class="infographic">
								<table>
									<!-- data inserts here -->
								</table>
							</div>
						</div>
					</div>
					<p class="sources" id="inneed-source" data-localize="situation_sources">Sources: Humanitarian partners, UNHCR, OCHA and partners, IPC Technical Working Group</p>
				</div> <!-- end wrapper -->
				
				<div class="big-photo" id="situation-photo">
					<div class="photo-caption">
						<p data-localize="situation_photocaption">The humanitarian response in 2017 has been effective, reaching millions of people and saving thousands of lives.</p>
					</div>
				</div>
			</section>
			
			
			
			
			<!-- BLOC FOOD SECURITY -->
			<a id="foodsecurity-position"></a>
			<section id="food-security" class="content">
				<div class="wrapper">
					<div class="section-info">
						<h1 data-localize="foodsecurity_title">Food Security</h1>
						<p data-localize="foodsecurity_text">Due to early warning and robust action, humanitarians have prevented localized famine in Leer and Mayendit. However, food insecurity has reached unprecedented levels, and many people are still on the brink of famine.</p>
						<img class="sectionicon" src="img/icon-SSD-foodsecurity.png"/>
					</div>
					<h4 data-localize="infographic_foodmap_header">Food Security Phases By County</h4>
					<div id="map-situation" class="infographic" allowfullscreen>
						<iframe width="100%" height="520" frameborder="0" src="https://chamsmarena.carto.com/builder/bba70894-9fc8-485f-a322-c9442f17a5d8/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
					</div>
					<p class="sources" data-localize="foodsecurity_sources">Sources: Nutrition Cluster, IPC Technical Working Group, UN Geographic Information Section, South Sudan Inter Cluster Information Management Working Group, National Bureau of Statistics and OCHA</p>
				</div>
				
				<div class="big-photo" id="foodsecurity-photo">
					<div class="photo-caption">
						<p data-localize="foodsecurity_photocaption">Countrywide, approximately half of the South Sudanese population is estimated to be severely food insecure. This includes populations in Ayod, Koch, Leer and Mayendit counties who are facing catastrophic conditions.</p>
					</div>
				</div>
			</section>
			
			
			
			
			<!-- BLOC HEALTH -->
			<a id="healthposition"></a>
			<section id="health" class="content">
				<div class="wrapper">
					<div class="section-info">
						<h1 data-localize="health_title">Health Crisis</h1>
						<p data-localize="health_text">Susceptibility to disease has risen after nearly four years of conflict and crisis. South Sudan is experiencing the longest, deadliest and most widespread cholera outbreak since its independence in 2011. With the rainy season intensifying, malaria cases have been increasing.</p>
						<img class="sectionicon" src="img/icon-SSD-health.png"/>
					</div>
					<div class="row">
						<div id="cholera" class="col2 infobox">
							<h3 data-localize="cholera_title">Cholera (Jun 2016-Sep 2017)</h3>
							<div class="col1">
								<p class="figure" data-localize="figure_cholera"><span class="big-number decimal-figure">19,900</span>Cases</p>
							</div>
						</div>
						<div id="malaria" class="col2 infobox">
							<h3 data-localize="malaria_title">Malaria (Jan-Sep 2017)</h3>
							<div class="col1">
								<p class="figure" data-localize="figure_malaria"><span class="big-number decimal-figure">1.5</span>Million Cases</p>
							</div>
						</div>
					</div>
					<h4 data-localize="infographic_healthmap_header">Number of Cases of Cholera and Malaria By County</h4>
					<div id="map-health" class="infographic" allowfullscreen>
						<iframe src="health/en/index.php" allowfullscreen data-localize="health_map" ></iframe>
					</div>
					<p class="sources" data-localize="health_sources">Sources: WHO, Health Cluster, UN Geographic Information Section, South Sudan Inter Cluster Information Management Working Group, National Bureau of Statistics and OCHA.</p>
				</div>
				
				<div class="big-photo" id="health-photo">
					<div class="photo-caption">
						<p data-localize="health_photocaption">Cholera and malaria outbreaks have been increasing since the civil conflict began. With greater resources, we can reduce the number of cases of these deadly diseases.</p>
					</div>
				</div>
			</section>
			
			
			
			
			<!-- BLOC PROTECTION -->
			<a id="protectionposition"></a>
			<section id="protection" class="content">
				<div class="wrapper">
					<div class="section-info">
						<h1 data-localize="protection_title">Need for Protection</h1>
						<p data-localize="protection_text">This conflict has a horrific human cost. Civilians are killed and children forcibly recruited. Sexual and gender-based violence has been used repeatedly as a weapon of war during the conflict, and aid workers are being killed and harassed across the country.</p>
					</div>
					<div class="row">
						<div id="aidworkers" class="col3 infobox">
							<img class="sectionicon" src="img/icon-SSD-aidworkers.png"/>
							<h3 data-localize="aidworkers_title">Aid Workers Killed</h3>
							<div class="col1">
								<p class="figure" data-localize="figure_aidworkers"><span class="big-number decimal-figure">85</span><br/>since December 2013</p>
							</div>
						</div>
						<div id="violence" class="col3 infobox">
							<img class="sectionicon" src="img/icon-SSD-harassment.png"/>
							<h3 data-localize="violence_title">Sexual and Gender-based Violence</h3>
							<div class="col1">
								<p class="figure" data-localize="figure_violence"><span class="big-number decimal-figure">2,600</span><br/>reported cases in 2016, but many more go unreported</p>
							</div>
						</div>
						<div id="children" class="col3 infobox">
							<img class="sectionicon" src="img/icon-SSD-militarykids.png"/>
							<h3 data-localize="children_title">Child Soldiers</h3>
							<div class="col1">
								<p class="figure" data-localize="figure_children"><span class="big-number decimal-figure">18,000</span>+</p>
							</div>
						</div>
					</div>
					<p class="sources" data-localize="protection_sources">Sources: OCHA, Protection Cluster, UNICEF.</p>
				</div>
				
				<div class="big-photo" id="protection-photo">
					<div class="photo-caption">
						<p data-localize="protection_photocaption">With greater resources, we can lead a more effective and coherent humanitarian response, placing emphasis on the protection of women, children and aid workers, and advocating that we are “not a target”.</p>
					</div>
				</div>
			</section>
			
			
			
			
			
			
			<!-- BLOC FUNDING -->
			<a id="fundingposition"></a>
			<section id="funding" class="content">
				<div class="wrapper">
					<div class="section-info">
						<h1 data-localize="funding_title">Funding Needs</h1>
						<p data-localize="funding_text">Funding is urgently needed to prevent further catastrophe, particularly during the rainy season, when delivering assistance is more costly and challenging. The 2017 Humanitarian Response Plan calls for assistance and protection for some 6.2 million people, but it is currently underfunded.</p>
					</div>
					<div class="row">
						<div id="funding-requirements" class="col2 infobox">
							<img class="sectionicon" src="img/icon-SSD-money.png"/>
							<h3 data-localize="immediate_requirements">2017 Requirements</h3>
							<p class="figure"></p>
						</div>
						<div id="funding-total" class="col2 infobox">
							<img class="sectionicon" src="img/icon-SSD-moneyreceived.png"/>
							<h3 data-localize="funding_received">Funding Received</h3>
							<div class="row">
								<div class="col2">
									<p class="figure"></p>
								</div>
								<div class="col2 percent-funded">
									<!--chart svg goes here-->
								</div>
							</div>
						</div>
					</div>
					<!--<p class="sources" data-localize="funding_sources">Sources: <a href="https://fts.unocha.org/" target="_blank">Financial Tracking Service (FTS)</a>.</p>-->
					<a href="https://secure.globalproblems-globalsolutions.org/site/Donation2;jsessionid=39EC3E9CF71F21C13A838DA263E1D1D0.app244a?df_id=10604&10604.donation=form1" target="_blank" class="button red-bk donate donatebutton donatebutton-bottom" data-localize="donate_button">Donate</a>
				</div>
			</section>
			
			
			
			
			<!-- BLOC CONTACT -->
			<a id="contactposition"></a>
			<footer id="contact">
				<div class="wrapper">
					<div class="row">
						<div class="col2"><img src="img/img-ocha-logo.svg" alt="OCHA" title="OCHA"/></div>
						<div class="col2">
							<ul class="weblinks">
								<li><a href="http://reliefweb.int/" target="_blank" data-localize="reliefweb_site">reliefweb.int</a></li>
								<li><a href="http://www.unocha.org/south-sudan" target="_blank" data-localize="ocha_southsudan_url">unocha.org/south-sudan</a></li>
								<li><a href="https://data.humdata.org/" target="_blank" data-localize="hdx_site">data.humdata.org</a></li>
							</ul>
							
							<div class="social-icons share-buttons">
								<a class="facebook" id="fb-share" href="#"></a>
								<a class="twitter" href="https://twitter.com/share" data-show-count="false" target="_blank"></a>
								<a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=http://interactive.unocha.org/emergency/2017_south_sudan/" target="_blank"></a>
								<a class="pintrest" href="https://www.pinterest.com/pin/create/button/" target="_blank"></a>
								<a class="email" href="mailto:?body=Crisis in South Sudan:%0D%0Ahttp%3A%2F%2Finteractive.unocha.org%2Femergency%2F2017_south_sudan%2F&subject=Crisis in South Sudan" target="_blank"></a>
							</div>
						</div>
					</div>
				</div>
				<p data-localize="footer_text">Created by the United Nations Office for the Coordination of Humanitarian Affairs, September 2017.</p>
				<p data-localize="footer_disclaimer">The boundaries and names shown and the designations used on this site do not imply official endorsement or acceptance by the United Nations. Final boundary between the Republic of Sudan and the Republic of South Sudan has not yet been determined.</p>
			</footer>
		</div>
	<!-- Site scripts -->
	<script src="js/ssd-scripts.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			$('#people-in-need,#displaced,#malnourished,#funding-requirements,#funding-total,#funding-country,#inneed-source').css('display','block');
			
			$(".slideshow > .title:gt(0)").hide();

			setInterval(function() { 
			  $('.slideshow > .title:first')
			    .fadeOut(1000)
			    .next()
			    .fadeIn(1000)
			    .end()
			    .appendTo('.slideshow');
			},  6000);
		
		});
		
		
		
		// get data for charts and tables
		var data = {
			"currentfunding" : <?php echo getImmediateFunding('South Sudan');?>,
			"currentrequirements" : <?php echo getImmediateRequirements('South Sudan');?>,
			"currentreqformatted" : "<?php echo formatNumber(getImmediateRequirements('South Sudan')); ?>",
			"peopleinneed" : [
				{
					"label" : "Protection",
					"data_localization_code" : "protection_cluster",
					"total" : 7300000
				},
				{
					"label" : "Food Security/Livelihoods",
					"data_localization_code" : "fsl_cluster",
					"total" : 6500000
				},
				{
					"label" : "Health",
					"data_localization_code" : "health_cluster",
					"total" : 5400000
				},
				{
					"label" : "Water, Sanitation &amp; Hygiene",
					"data_localization_code" : "wash_cluster",
					"total" : 5100000
				},
				{
					"label" : "Emergency Shelter &amp; NFI",
					"data_localization_code" : "nfi_cluster",
					"total" : 1900000
				}
			],
			"foodsecurityphase" : [
				{
					"label" : "Catastrophe",
					"data_localization_code" : "catastrophe_label",
					"total" : 45000
				},
				{
					"label" : "Emergency",
					"data_localization_code" : "emergency_label",
					"total" : 1650000
				},
				{
					"label" : "Crisis",
					"data_localization_code" : "crisis_label",
					"total" : 4346000
				},
				{
					"label" : "Stressed",
					"data_localization_code" : "stressed_label",
					"total" : 3621000
				},
				{
					"label" : "Minimal",
					"data_localization_code" : "minimal_label",
					"total" : 2186000
				}
			],
			"peopledisplaced" : [
				{
					"label" : "IDPs",
					"data_localization_code" : "idps_label",
					"total" : 2000000
				},
				{
					"label" : "Refugees",
					"data_localization_code" : "idps_label",
					"total" : 1900000
				}
			]
		};
		
		// append charts and tables
		init(data);
		
		if (Modernizr.touch) { 
		    //
		} else {
		    skrollr.init({forceHeight:false});
		}
		
		// Facebook share script
		$("#fb-share").on("click",function(){
		    var fbpopup = window.open("https://www.facebook.com/sharer/sharer.php?u=http://interactive.unocha.org/emergency/2017_south_sudan/", "pop", "width=600, height=400, scrollbars=no");
		    return false;
		});
		
		//getTranslation("lang/");
		
		/*if (localStorage.getItem('lang')) {
			lang = localStorage.getItem('lang');
			$('#map-access iframe').attr('src','humanitarian_access/'+lang+'/index.php');
			$('#map-situation iframe').attr('src','food_insecurity/'+lang+'/index.php');
		} else {
			$('#map-access iframe').attr('src','humanitarian_access/en/index.php');
			$('#map-situation iframe').attr('src','food_insecurity/en/index.php');
		}
		
		$('select#change-language').on('selectmenuchange', function(event, ui) {
		    lang = ui.item.value;
			$('#map-access iframe').attr('src','humanitarian_access/'+lang+'/index.php');
			$('#map-situation iframe').attr('src','food_insecurity/'+lang+'/index.php'); 
		});*/
		
		// determine if document is loaded within an iframe
		function ifiFrame() {
		    try {
		        return window.self !== window.top;
		    } catch (e) {
		        return true;
		    }
		};
		
		// hide nav if loaded in iframe
		if (ifiFrame() == true) {
			$('#nav').css("display","none");
			$('.hamburger').css("display","none");
		}
	</script>
	<script src="js/scrolling.js" id="scrolling-js"></script>
	<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
	
	</body>
	
</html>
