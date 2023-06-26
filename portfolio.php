<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
		<script async src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700&display=swap" as="font">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script defer src="https://use.fontawesome.com/releases/v5.15.0/js/all.js"></script>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet preload" href="portfolio-style.css" type="text/css" as="style">
		<script async src="projects-js.js" type="text/javascript"></script>
		<link rel="stylesheet preload" href="projects-style.css" type="text/css" as="style">
		
		<title>Web Design and Development Portfolio</title>
	</head>
	<body>
	<?php include "top-menu.php"; ?>


	<div class="wrapper">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div id="projFilter">
					<button class="projBtn active" onclick="filterSelection('all')">All</button>
					<button class="projBtn" onclick="filterSelection('wp')"> WordPress</button>
					<button class="projBtn" onclick="filterSelection('joomla')"> Joomla</button>
				</div>

				<div class="projCont">
					<div class="filterDiv wp">
						<div class="projInner">
							<a href="/" aria-label="WordPress Project" data-bs-toggle="modal" data-bs-target="#bdph"><img class="myProj img-responsive" src="./images/wordpress/Buy-Domains-Philippines.jpg" title="" alt=" "></a>
						</div>
						<div class="projName">
							<p>Buy Domains Philippines</p>
						</div>
						<div class="modal" id="bdph"><div class="modal-dialog">
							<div class="modal-content"><div class="modal-body">
								<div class="modalImg"><img class="img-responsive" src="./images/wordpress/Buy-Domains-Philippines.jpg" title="" alt=" "></div>
								<div class="modalDesc">
									<h5>Buy Domains Philippines</h5>
									<p>Created with: WordPress - Elementor</p>
									<p>BuyDomains.com.ph is a domain marketplace that offers a wide selection of premium domain names for businesses in the Philippines. With user-friendly search tools and a seamless buying process, the website aims to help entrepreneurs find the perfect domain name for their brand. Additionally, BuyDomains.com.ph provides domain registration and web hosting services, making it a one-stop-shop for all website-related needs.</p>
								</div>
							</div></div>
						</div></div>
					</div>
					<div class="filterDiv wp">
						<div class="projInner">
							<a href="/" aria-label="WordPress Project" data-bs-toggle="modal" data-bs-target="#pwg"><img class="myProj img-responsive" src="./images/wordpress/Promoworx-Giveaways.jpg" title="" alt=" "></a>
						</div>
						<div class="projName">
							<p>Promoworx Giveaways Philippines</p>
						</div>
						<div class="modal" id="pwg"><div class="modal-dialog">
							<div class="modal-content"><div class="modal-body">
								<div class="modalImg"><img class="img-responsive" src="./images/wordpress/Promoworx-Giveaways.jpg" title="" alt=" "></div>
								<div class="modalDesc">
									<h5>Promoworx Giveaways Philippines</h5>
									<p>Created with: WordPress - Elementor</p>
									<p>Promoworx Corporate Giveaways is a in the Philippines that specializes in creating customized promotional items for corporate marketing, events, uniforms, and other purposes. Their services include the development, production, and manufacturing of a wide range of promotional products.</p>
								</div>
							</div></div>
						</div></div>
					</div>
					<div class="filterDiv wp">
						<div class="projInner">
							<a href="/" aria-label="WordPress Project" data-bs-toggle="modal" data-bs-target="#hrtc"><img class="myProj img-responsive" src="./images/wordpress/HR-Tech-Summit-Toronto-2020.jpg" title="" alt=" "></a>
						</div>
						<div class="projName">
							<p>HR Tech Summit in Toronto</p>
						</div>
						<div class="modal" id="hrtc"><div class="modal-dialog">
							<div class="modal-content"><div class="modal-body">
								<div class="modalImg"><img class="img-responsive" src="./images/wordpress/HR-Tech-Summit-Toronto-2020.jpg" title="" alt=" "></div>
								<div class="modalDesc">
									<h5>HR Tech Summit in Toronto</h5>
									<p>Created with: WordPress - Elementor</p>
									<p>HR Tech Summit is an annual event series organized by Key Media that takes place in cities across Canada and other locations worldwide. The summit provides a platform for HR professionals, people managers, and business leaders to learn and network with like-minded professionals on the latest trends and innovations in HR technology.</p>
								</div>
							</div></div>
						</div></div>
					</div>
					<div class="filterDiv wp">
						<div class="projInner">
							<a href="/" aria-label="WordPress Project" data-bs-toggle="modal" data-bs-target="#rse"><img class="myProj img-responsive" src="./images/wordpress/Promoworx-Giveaways.jpg" title="" alt=" "></a>
						</div>
						<div class="projName">
							<p>Rallyson Enterprises Philippines</p>
						</div>
						<div class="modal" id="rse"><div class="modal-dialog">
							<div class="modal-content"><div class="modal-body">
								<div class="modalImg"><img class="img-responsive" src="./images/wordpress/Promoworx-Giveaways.jpg" title="" alt=" "></div>
								<div class="modalDesc">
									<h5>Rallyson Enterprises Philippines</h5>
									<p>Created with: WordPress - WPBakery</p>
									<p>Rallyson Enterprises serves as a reliable importer of hydraulic hoses in the Philippines. They specialize in creating custom hydraulic hose assemblies and fittings to fulfill specific customer requirements. Additionally, they provide an array of power and fluid conveyance products, including industrial hoses, pneumatic fittings, bandy or steel tubes, and various accessories.</p>
								</div>
							</div></div>
						</div></div>
					</div>
					<div class="filterDiv joomla">
						<div class="projInner">
							<a href="/" aria-label="WordPress Project" data-bs-toggle="modal" data-bs-target="#hra"><img class="myProj img-responsive" src="./images/joomla/Australian-HR-Awards.jpg" title="" alt=" "></a>
						</div>
						<div class="projName">
							<p>Australian HR Awards</p>
						</div>
						<div class="modal" id="hra"><div class="modal-dialog">
							<div class="modal-content"><div class="modal-body">
								<div class="modalImg"><img class="img-responsive" src="./images/joomla/Australian-HR-Awards.jpg" title="" alt=" "></div>
								<div class="modalDesc">
									<h5>Australian HR Awards</h5>
									<p>Created with: Joomla</p>
									<p>The HR Awards celebrates the achievements of the best and brightest in the human resources industry in Australia. The annual event recognizes individuals and companies that have excelled in their commitment to excellence, innovation, and outstanding leadership in the field of HR.</p>
								</div>
							</div></div>
						</div></div>
					</div>
					<div class="filterDiv joomla">
						<div class="projInner">
							<a href="/" aria-label="WordPress Project" data-bs-toggle="modal" data-bs-target="#wiim"><img class="myProj img-responsive" src="./images/joomla/Women-in-Insurance-Miami.jpg" title="" alt=" "></a>
						</div>
						<div class="projName">
							<p>Women in Insurance Miami</p>
						</div>
						<div class="modal" id="wiim"><div class="modal-dialog">
							<div class="modal-content"><div class="modal-body">
								<div class="modalImg"><img class="img-responsive" src="./images/joomla/Women-in-Insurance-Miami.jpg" title="" alt=" "></div>
								<div class="modalDesc">
									<h5>Women in Insurance Miami</h5>
									<p>Created with: Joomla</p>
									<p>Women in Insurance is a community dedicated to celebrating and empowering women in the insurance industry. Their Miami event is a must-attend for anyone looking to connect with like-minded professionals, learn from industry leaders, and gain insights into the latest trends and opportunities in insurance.</p>
								</div>
							</div></div>
						</div></div>
					</div>
					<div class="filterDiv joomla unload">
						<div class="projInner">
							<a href="/" aria-label="WordPress Project" data-bs-toggle="modal" data-bs-target="#wiim"><img class="myProj img-responsive" src="./images/joomla/Women-in-Insurance-Miami.jpg" title="" alt=" "></a>
						</div>
						<div class="projName">
							<p>Women in Insurance Miami</p>
						</div>
						<div class="modal" id="wiim"><div class="modal-dialog">
							<div class="modal-content"><div class="modal-body">
								<div class="modalImg"><img class="img-responsive" src="./images/joomla/Women-in-Insurance-Miami.jpg" title="" alt=" "></div>
								<div class="modalDesc">
									<h5>Women in Insurance Miami</h5>
									<p>Created with: Joomla</p>
									<p>Women in Insurance is a community dedicated to celebrating and empowering women in the insurance industry. Their Miami event is a must-attend for anyone looking to connect with like-minded professionals, learn from industry leaders, and gain insights into the latest trends and opportunities in insurance.</p>
								</div>
							</div></div>
						</div></div>
					</div>
				</div>
				<br>
				<div id="loadMore" class="content" style="text-align: center; margin: 20px auto;">
					<a href="#" class="btn"> <span>Load More</span> <i class="icon fas fa-chevron-right"></i> </a>
				</div>
			</div>
		</div>
	</div>

	</body>
</html>
