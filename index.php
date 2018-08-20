<?php include 'functions.php'; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<title>Crisis in Lake Chad Basin</title>
		<meta name="description" content="Lake Chad Basin Crisis"/>
		<meta name="author" content="OCHA Visual Information Unit"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<meta name="twitter:card" content="Lake Chad Basin" />
		<meta name="twitter:site" content="@unocha" />
		<meta name="twitter:creator" content="@unocha" />
		<meta property="og:url" content="http://interactive.unocha.org/emergency/2017_south_sudan/" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Lake Chad Basin Crisis" />
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
		<link href="css/ocha-microsite_V2.css" type="text/css" rel="stylesheet"/>
		
		<script src="js/ssd-scripts.js" type="text/javascript"></script>
		<script src="js/Chart.js"></script>
		
		<!-- GET LCB SPREADSHEET CONTENT FIGURES AND TEXT -->
		<script src="js/getLcbFigures.js"></script>
		<script src="https://spreadsheets.google.com/feeds/cells/1D_RzWxPHBHH4mv4RcvGlKomBWgD9_1NAD6EirgMrabM/1/public/values?alt=json-in-script&callback=doData"></script>
		<script src="https://spreadsheets.google.com/feeds/cells/1D_RzWxPHBHH4mv4RcvGlKomBWgD9_1NAD6EirgMrabM/3/public/values?alt=json-in-script&callback=GetSlideData"></script>
		<script src="https://spreadsheets.google.com/feeds/cells/1D_RzWxPHBHH4mv4RcvGlKomBWgD9_1NAD6EirgMrabM/2/public/values?alt=json-in-script&callback=GetBlocData"></script>

		<!-- SCROLL -->
		<script src="js/jquery.scrollify.js"></script>
		
		<script>
        $(function() {
          $.scrollify({
            section : ".scrollClass",
          });
		});
	
      </script>
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
					<a href="#educationposition" data-localize="crisis_nav_healthcrisis">Education</a>
					<a href="#protectionposition" data-localize="crisis_nav_protection">Protection</a>
					<a href="#fundingposition" data-localize="crisis_nav_response">Response/Funding</a>
					<a href="https://secure.globalproblems-globalsolutions.org/site/Donation2;jsessionid=39EC3E9CF71F21C13A838DA263E1D1D0.app244a?df_id=10604&10604.donation=form1" target="_blank" data-localize="crisis_nav_donate">Donate</a>
				</div>
			</div>
		</div>
		<div id="main">
			<div class="hamburger" style='z-index:1000;'>
				<span onclick="openNav()" class="openbtn">&larr; <strong>MENU: CRISIS IN HE LAKE CHAD</strong></span>
			</div>
			
			
			
			
			<!-- BLOC SLIDE -->
			<div id="slideshow" class="slideshow scrollClass">
				<!-- slide 1 -->
				<section id="title1" class="title" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -400px;" data-bottom-top="background-position: 50% 300px;" data-anchor-target="#title1">
					<div class="wrapper astable">
						<div class="title-info">
						
							<p data-localize="main_text1" class='texteSlide'></p>
							<h1 data-localize="main_figure1" class='figureSlide'></h1>
							<p data-localize="main_paragraph1" class='paragraphSlide'></p>
							
							<a href="https://secure.globalproblems-globalsolutions.org/site/Donation2;jsessionid=39EC3E9CF71F21C13A838DA263E1D1D0.app244a?df_id=10604&10604.donation=form1" target="_blank" class="button red-bk donate donatebutton" data-localize="donate_button">Donate</a>
							
						</div>
						<div class='blocCredit'>
							<p class="photocredit" data-localize="photocredit2">Photo: OCHA/Yasmina Guerda</p>
							<p class="ScrollDown"><a href="#situationposition" data-localize="next_situation">SCROLL DOWN</a></p>
						</div>
					</div>
					<div class="nexttext wrapper" data--500-top="opacity:0;" data-center="opacity:1;" data-anchor-target="#title1">

						
					</div>
				</section>
				
				<!-- slide 2 -->
				<section id="title2" class="title" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -400px;" data-bottom-top="background-position: 50% 300px;" data-anchor-target="#title2">
					<div class="wrapper astable">
						<div class="title-info">
							<p data-localize="main_text1" class='texteSlide'></p>
							<h1 data-localize="main_figure2" class='figureSlide'></h1>
							<p data-localize="main_paragraph2" class='paragraphSlide'></p>
							<a href="https://secure.globalproblems-globalsolutions.org/site/Donation2;jsessionid=39EC3E9CF71F21C13A838DA263E1D1D0.app244a?df_id=10604&10604.donation=form1" target="_blank" class="button red-bk donate donatebutton" data-localize="donate_button">Donate</a>
						</div>
						<div class='blocCredit'>
							<p class="photocredit" data-localize="photocredit2">Photo: OCHA/Yasmina Guerda</p>
							<p class="ScrollDown"><a href="#situationposition" data-localize="next_situation">SCROLL DOWN</a></p>
						</div>
					</div>
					<div class="nexttext wrapper" data--500-top="opacity:0;" data-center="opacity:1;" data-anchor-target="#title2">
						

					</div>
				</section>
				
				<!-- slide 3 -->
				<section id="title3" class="title" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -400px;" data-bottom-top="background-position: 50% 300px;" data-anchor-target="#title3">
					<div class="wrapper astable">
						<div class="title-info">
							<p data-localize="main_text1" class='texteSlide'></p>
							<h1 data-localize="main_figure3" class='figureSlide'></h1>
							<p data-localize="main_paragraph3" class='paragraphSlide'></p>
							<a href="https://secure.globalproblems-globalsolutions.org/site/Donation2;jsessionid=39EC3E9CF71F21C13A838DA263E1D1D0.app244a?df_id=10604&10604.donation=form1" target="_blank" class="button red-bk donate donatebutton" data-localize="donate_button">Donate</a>
						</div>
						<div class='blocCredit'>
							<p class="photocredit" data-localize="photocredit2">Photo: OCHA/Yasmina Guerda</p>
							<p class="ScrollDown"><a href="#situationposition" data-localize="next_situation">SCROLL DOWN</a></p>
						</div>
					</div>
					<div class="nexttext wrapper" data--500-top="opacity:0;" data-center="opacity:1;" data-anchor-target="#title3">

					</div>
				</section>
				
				<!-- slide 4 -->
				<section id="title4" class="title" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -400px;" data-bottom-top="background-position: 50% 300px;" data-anchor-target="#title3">
					<div class="wrapper astable">
						<div class="title-info">
							<p data-localize="main_text1" class='texteSlide'></p>
							<h1 data-localize="main_figure3" class='figureSlide'></h1>
							<p data-localize="main_paragraph4" class='paragraphSlide'></p>
							<a href="https://secure.globalproblems-globalsolutions.org/site/Donation2;jsessionid=39EC3E9CF71F21C13A838DA263E1D1D0.app244a?df_id=10604&10604.donation=form1" target="_blank" class="button red-bk donate donatebutton" data-localize="donate_button">Donate</a>
						</div>
						<div class='blocCredit'>
							<p class="photocredit" data-localize="photocredit2">Photo: UnKown</p>
							<p class="ScrollDown"><a href="#situationposition" data-localize="next_situation">SCROLL DOWN</a></p>
						</div>
					</div>
					<div class="nexttext wrapper" data--500-top="opacity:0;" data-center="opacity:1;" data-anchor-target="#title3">

					</div>
				</section>
			</div>
			
			
			
			
			<!-- BLOC SITUATION -->
			<a id="situationposition"></a>
			<section id="SectionSituation" class="content scrollClass">
				<div class="wrapper">
					<div class="section-info">
						<h1 data-localize="situation" class='situation' ></h1>
						<p data-localize="situation_text" class='Sectiontext' ></p>
					</div>
				</div>
				<div class="big-photo" id="situation-photo">
					
					<div class="photo-caption">
						<div class='big-photocredit'><p class="photocredit" data-localize="photocredit2">Photo: OCHA/Yasmina Guerda</p></div>
						<p data-localize="situation_photocaption"  class='Sectionphotocaption'></p>
					</div>
				</div>
			</section>
			
			
			
			
			<!-- BLOC PEOPLE IN NEED -->
			<a id="peopleinneedposition"></a>
			<section id="situation" class="content scrollClass">
				<div class="wrapper">
					<div class="section-info">
						<h1 data-localize="situation">PEOPLE IN NEED</h1>
					</div>
					<div class="row">
						<div id="displaced" class="col3 infobox">
							<img class="sectionicon" src="img/icon-SSD-peopledisplaced.png"/>
							<h3 data-localize="malnourished_title">People in need</h3>
							<div>
								<p class="figure" data-localize="figure_displaced"><span class="big-number decimal-figure">10.7M</span></p>
							</div>
							<h4 data-localize="infographic_displacement_header">By Type of Displacement</h4>
							<div class="infographic">
								<div class='row'>
									<div class='col3 chart' style="min-height:149px;"></div>
									<div class='col3' data-localize="figure_refugees">
										<span class="chiffres idps">2.0M </span><span class="labelsChiffresInfographic"><br/><strong>IDPs</strong></span><br/>
										<span class="chiffres refugees">206K </span><span class="labelsChiffresInfographic"><br/><strong>Refugees</strong></span><br/>
										<span class="chiffres returnes">33K </span><span class="labelsChiffresInfographic"><br/><strong>Returnes</strong></span>
									</div>
								</div>
								<!-- data inserts here -->
							</div>
							<script>
							</script>
						</div>
						
						<div class="carte2x3 infobox">
							<iframe width="100%" height="520" frameborder="0" src="https://chamsmarena.carto.com/builder/bba70894-9fc8-485f-a322-c9442f17a5d8/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
							<p class="sources" id="inneed-source" data-localize="situation_sources">Sources: LCB HNRO</p>
						</div>
					</div>
					<div class="row">
						<div id="displacedByCountry" class="col3 infobox">
							<img class="sectionicon" src="img/icon-SSD-peopledisplaced.png"/>
							<h3 data-localize="malnourished_title">People Displaced</h3>
							<div class="col1">
								<p class="figure" data-localize="figure_malnourished"><span class="big-number decimal-figure">2.0M</span></p>
							</div>
							<h4 data-localize="infographic_foodsec_header">By Coutry</h4>
							<div class="infographic">
								<table>
									<!-- data inserts here -->
								</table>
							</div>
							<script>
								
							</script>
						</div>
						
						<div id="malnourished" class="col3 infobox">
							<img class="sectionicon" src="img/icon-SSD-peoplemalnourished.png"/>
							<h3 data-localize="malnourished_title">People who are food insecure</h3>
							<div class="col1">
								<p class="figure" data-localize="figure_malnourished"><span class="big-number decimal-figure">4.2M</span></p>
							</div>
							<h4 data-localize="infographic_foodsec_header">By Coutry</h4>
							<div class="infographic">
								<table>
									<!-- data inserts here -->
								</table>
							</div>
							
							<script>
							</script>
						</div>
						
						<div id="SeverelyMalnourishedChildren" class="col3 infobox">
							<img class="sectionicon" src="img/icon-SSD-peopleinneed.png"/>
							<h3 data-localize="people_in_need_title">Severely Malnourished Children </h3>
							<div class="col1">
								<p class="figure" data-localize="figure_people_in_need"><span class="big-number decimal-figure">514K</span></p>
							</div>
							<h4 data-localize="infographic_people_in_need_header">By Coutry</h4>
							<div class="infographic">
								<table>
									<!-- data inserts here -->
								</table>
							</div>
							
							<script>
								
							</script>
						</div>
					</div>
					<p class="sources" id="inneed-source" data-localize="situation_sources">Sources: UNHCR, IOM, GOVERNMENT</p>
				</div> 
				
				<div class="big-photo" id="inneed-photo">
					<div class="photo-caption">
						<div class='big-photocredit'><p class="photocredit" data-localize="photocredit2">Photo: OCHA/Yasmina Guerda</p></div>
						<p data-localize="situation_photocaption">Entire communities have been emptied and civilians continue to suffer frequent rights violations. Without continued assistance, hard hit communities risk fast sliding back into distress.</p>
					</div>
				</div>
			</section>
			
			
			
			
			<!-- BLOC FOOD SECURITY -->
			<a id="foodsecurity-position"></a>
			<section id="Sectionfood-security" class="content scrollClass">
				<div class="wrapper">
					<div class="section-info">
						<h1 data-localize="foodsecurity_title" class='situation' ></h1>
						<p data-localize="foodsecurity_text" class='Sectiontext' ></p>
						<img class="sectionicon" src="img/icon-SSD-foodsecurity.png"/>
					</div>
					
					<div class="row">
						<div id="foodsecurityphaseAdmin1" class="col3 infobox">
							<img class="sectionicon" src="img/icon-SSD-peoplemalnourished.png"/>
							<h3 data-localize="malnourished_title">People Food Insecure</h3>
							<div class="col1">
								<p class="figure" data-localize="figure_malnourished"><span class="big-number decimal-figure">4.2M</span></p>
							</div>
							<h4 data-localize="infographic_foodsec_header">By country</h4>
							<div class="infographic">
								<table id='tableChart'>
									<!-- data inserts here -->
								</table>
							</div>
						</div>

						<div class="carte2x3 infobox">
						<iframe width="100%" height="520" frameborder="0" src="https://chamsmarena.carto.com/builder/9b44297d-47d7-4504-8ce7-bc4bb9567174/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
						</div>
					</div>
				</div>
				
				<div class="big-photo" id="foodsecurity-photo">
					<div class="photo-caption">
						<div class='big-photocredit'><p class="photocredit" data-localize="photocredit2">Photo: Unknow</p></div>
						
						<p data-localize="foodsecurity_photocaption" class='Sectionphotocaption'></p>
					</div>
				</div>
			</section>
			
			
			
			
			<!-- BLOC PROTECTION -->
			<a id="protectionposition"></a>
			<section id="SectionProtection" class="content scrollClass">
				<div class="wrapper">
					<div class="section-info">
						<h1 data-localize="protection_title" class='situation' ></h1>
						<p data-localize="protection_text" class='Sectiontext' ></p>
					</div>
					<div class="row">
		
						
						<div class="col0 infobox">
							<iframe width="100%" height="520" frameborder="0" src="https://chamsmarena.carto.com/builder/e9714b00-b5ee-4c4a-bbd8-a9d2cc077a38/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
						</div>
					</div>
					<p class="sources" data-localize="protection_sources">Sources: OCHA, Protection Cluster, UNICEF.</p>
				</div>
				
				<div class="big-photo" id="protection-photo">
					<div class="photo-caption">
						<div class='big-photocredit'><p class="photocredit" data-localize="photocredit2">Photo: UnKown</p></div>
						<p data-localize="protection_photocaption" class='Sectionphotocaption' ></p>
					</div>
				</div>
			</section>
			
			
			
			<!-- BLOC EDUCATION -->
			<a id="educationposition"></a>
			<section id="SectionEducation" class="content scrollClass">
				<div class="wrapper">
					<div class="section-info">
						<h1 data-localize="health_title" class='situation' ></h1>
						<p data-localize="health_text" class='Sectiontext' ></p>
						<img class="sectionicon" src="img/EDUCATION.png"/>
					</div>
					<div class="row">
						<div id="schoolsclosed" class="col0 infobox">
							<h3 data-localize="cholera_title">SCOOLS CLOSED (AUG 2016-OCT 2017)</h3>
							
							<div class="infographic">
								<div class="col4L">
									<canvas id="chartNigeria" width="100%" height="100%"></canvas>
									<h4 data-localize="infographic_healthmap_header">NIGERIA</h4>
								</div>
								<div class="col4L">
									<canvas id="chartCameroon" width="100%" height="100%"></canvas>
									<h4 data-localize="infographic_healthmap_header">CAMEROON</h4>
								</div>
								<div class="col4L">
									<canvas id="chartNiger" width="100%" height="100%"></canvas>
									<h4 data-localize="infographic_healthmap_header">NIGER</h4>
								</div>
								<div class="col4L">
									<canvas id="chartChad" width="100%" height="100%"></canvas>
									<h4 data-localize="infographic_healthmap_header">CHAD</h4>
								</div>
								
								
							</div>
								<h4 data-localize="infographic_healthmap_header">Number of scools closed By Country</h4>
								<p class="sources" data-localize="health_sources">Sources: UNICEF.</p>
						</div>
						
						<script>

								var option = {
											legend: {display: false},
											title: {
												display: true,text: '# scools closed',fontSize:16,fontColor:"#ffffff"
											},
											 scales: {
												yAxes: [
													{
														ticks: {
															callback: function(label, index, labels) {
																if(label==0){
																	return '0';
																}else{
																	return label;
																}
															},
															maxTicksLimit:3,
															beginAtZero:true
														}
													}
												]
											}
										};
								
								
								var ctxNigeria = document.getElementById('chartNigeria').getContext('2d');
								var ctxCameroon = document.getElementById('chartCameroon').getContext('2d');
								var ctxNiger = document.getElementById('chartNiger').getContext('2d');
								var ctxChad = document.getElementById('chartChad').getContext('2d');
								
								var ChartNigeria = new Chart(ctxNigeria, {type: 'line',
									data: {labels: ['Aug 16','Feb 17', 'May 17', 'Oct 17'],
									datasets: [{
									  label: '# scools closed',
									  data: [1177,1697 , 1040, 855],
									  borderColor:"#0c64af",
										pointRadius: 5
										
									}]
									},options: option});
									
									var ChartCameroon = new Chart(ctxCameroon, {type: 'line',
									data: {labels: ['Aug 16','Feb 17', 'May 17', 'Oct 17'],
									datasets: [{
									  label: '# scools closed',
									  data: [635,154 , 124, 93],
									  borderColor:"#0c64af",
										pointRadius: 5
										
									}]
									},options: option});
									
									var ChartNiger = new Chart(ctxNiger, {type: 'line',
									data: {labels: ['Aug 16','Feb 17', 'May 17', 'Oct 17'],
									datasets: [{
									  label: '# scools closed',
									  data: [77,77 , 30, 30],
									  borderColor:"#0c64af",
										pointRadius: 5
										
									}]
									},options: option});
									
									var ChartChad = new Chart(ctxChad, {type: 'line',
									data: {labels: ['Aug 16','Feb 17', 'May 17', 'Oct 17'],
									datasets: [{
									  label: '# scools closed',
									  data: [26,13 , 5, 5],
									  borderColor:"#0c64af",
										pointRadius: 5
										
									}]
									},options: option});
									

								</script>
					</div>
					
				</div>
				
				<div class="big-photo" id="health-photo">
					<div class="photo-caption">
						<div class='big-photocredit'><p class="photocredit" data-localize="photocredit2">Photo: OCHA/Yasmina Guerda</p></div>
						<p data-localize="health_photocaption" class='Sectionphotocaption'></p>
					</div>
				</div>
			</section>
			
			
			<!-- BLOC FUNDING -->
			<a id="fundingposition"></a>
			<section id="SectionFunding" class="content ">
				<div class="wrapper scrollClass" style="margin-bottom:100px;">
					<div class="section-info">
						<h1 data-localize="funding_title" class='situation'></h1>
						<p data-localize="funding_text" class='Sectiontext' ></p>
					</div>
					
					<div class="row">
						<div id="funding-requirements" class="col2 infobox">
							<img class="sectionicon" src="img/icon-SSD-money.png"/>
							<h3 data-localize="immediate_requirements">2018 Requirements (IN US $)*</h3>
		
							<div  id='funding-requirements-cameroon' class="row">
								<div class="col2">
									<p class="CountryName">Cameroon</p>
								</div>
								<div class="col2">
									<p class="figureCountry"></p>
								</div>
							</div>
							<div  id='funding-requirements-chad' class="row">
								<div class="col2">
									<p class="CountryName">Chad</p>
								</div>
								<div class="col2">
									<p class="figureCountry"></p>
								</div>
							</div>
							<div  id='funding-requirements-niger' class="row">
								<div class="col2">
									<p class="CountryName">Niger</p>
								</div>
								<div class="col2">
									<p class="figureCountry"></p>
								</div>
							</div>
							<div  id='funding-requirements-nigeria' class="row">
								<div class="col2">
									<p class="CountryName">Nigeria</p>
								</div>
								<div class="col2">
									<p class="figureCountry"></p>
								</div>
							</div>
							
						</div>
						<div id="funding-total" class="col2 infobox">
							<img class="sectionicon" src="img/icon-SSD-moneyreceived.png"/>
							<h3 data-localize="funding_received">2018 Funding Received (IN US $)*</h3>

							<div id='funding-total-niger' class="row">
								<div class="col2">
									<p class="figureCountry"></p>
								</div>
								<div class="col2 percent-funded-country">
									<!--chart svg goes here-->
								</div>
							</div>
							<div id='funding-total-nigeria' class="row">
								<div class="col2">
									<p class="figureCountry"></p>
								</div>
								<div class="col2 percent-funded-country">
									<!--chart svg goes here-->
								</div>
							</div>
							<div id='funding-total-cameroon' class="row">
								<div class="col2">
									<p class="figureCountry"></p>
								</div>
								<div class="col2 percent-funded-country">
									<!--chart svg goes here-->
								</div>
							</div>
							<div id='funding-total-chad' class="row">
								<div class="col2">
									<p class="figureCountry"></p>
								</div>
								<div class="col2 percent-funded-country">
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
			<footer id="contact" class="scrollClass" style="padding-top: 200px;">
				<div class="wrapper ">
					<div class="row">
						<div class="col2"><img src="img/img-ocha-logo.svg" alt="OCHA" title="OCHA"/></div>
						<div class="col2">
							<ul class="weblinks">
								<li><a href="http://reliefweb.int/" target="_blank" data-localize="reliefweb_site">reliefweb.int</a></li>
								<li><a href="https://www.unocha.org/nigeria" target="_blank" data-localize="ocha_southsudan_url">unocha.org/Nigeria</a></li>
								<li><a href="https://www.unocha.org/niger" target="_blank" data-localize="ocha_southsudan_url">unocha.org/Niger</a></li>
								<li><a href="https://www.unocha.org/chad" target="_blank" data-localize="ocha_southsudan_url">unocha.org/Chad</a></li>
								<li><a href="https://www.unocha.org/west-and-central-africa-rowca/cameroun" target="_blank" data-localize="ocha_southsudan_url">unocha.org/Cameroun</a></li>
								<li><a href="https://data.humdata.org/" target="_blank" data-localize="hdx_site">data.humdata.org</a></li>
							</ul>
							
							<div class="social-icons share-buttons">
								<a class="facebook" id="fb-share" href="https://www.facebook.com/ocha.rowca" target="_blank"></a>
								<a class="twitter" href="https://twitter.com/ocharowca"  target="_blank"></a>
								<a class="email" href="mailto:?body=Crisis in Lake Chad Basin:%0D%0Ahttp%3A%2F%2Finteractive.unocha.org%2Femergency%2F2017_lake_chad_basin%2F&subject=Crisis in Lake Chad Basin" target="_blank"></a>
							</div>
						</div>
					</div>
					<p data-localize="footer_text">Created by the United Nations Office for the Coordination of Humanitarian Affairs, May 2018.</p>
					<p data-localize="footer_disclaimer">The boundaries and names shown and the designations used on this site do not imply official endorsement or acceptance by the United Nations.</p>
				</div>
			</footer>
		</div>
	<!-- Site scripts -->
	
	
	
	<script>
		
	</script>
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
		
			$.scrollify({
				section : ".scrollClass",
				sectionName : "section-name",
				interstitialSection : "",
				easing: "easeOutExpo",
				scrollSpeed: 1100,
				offset : 0,
				scrollbars: true,
				standardScrollElements: "",
				setHeights: true,
				overflowScroll: true,
				updateHash: true,
				touchScroll:true,
				before:function() {},
				after:function() {},
				afterResize:function() {},
				afterRender:function() {}
			});
		});
		
		
		
		
		

		
		
		if (Modernizr.touch) { 
		    //
		} else {
		    skrollr.init({forceHeight:false});
		}
		

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
	<script src="js/Chart.js"></script>
	</body>
	
</html>
