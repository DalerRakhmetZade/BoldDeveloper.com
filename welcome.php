 <!DOCTYPE html> 
<html lang="en">
	<head>	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
		<title>[bold]Developer</title>
		<link rel="shortcut icon" href="./img/about/daler.png">
		<link rel = "stylesheet" href = "./css/slideOut.css">
		<link rel="stylesheet" href="./css/portfolio.css">
		<link rel = "stylesheet" href = "./css/activeNavBar.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
		<script src = "./js/slideOutJS.js"></script>
		
		
	</head>
	<body>

	<!-- NAV -->
		<div class = "menu-icon">
			<span></span>
			<span></span>
		</div>
		<nav class = "sidebar">
			<a href="#background"><img class="navLogo" src="./img/nav_logo.png"></a>
			<ul class = "menu">
				<br>
				<li><a href="#about"> About me <i class="fa fa-address-card" aria-hidden="true"></i></a></li>
				<li><a href="#skills"> Skills <i class="fa fa-gamepad" aria-hidden="true"></i></a></li>
				<li><a href="#portfolio"> Portfolio<i class="fa fa-desktop" aria-hidden="true"></i></a> </li>
				<li><a href="#experience">Experience <i class="fa fa-suitcase" aria-hidden="true"></i> </a></li>
				<li><a href="#connect"> Let's Connect <i class="fa fa-comments-o" aria-hidden="true"></i></a></li>
				
			</ul>	
			<ul class = "social-icon">
				<li><a href="https://github.com/boldDeveloper" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
				<li><a href="https://www.linkedin.com/in/daler-rakhmet-zade-94532ba0/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true" data-toggle="modal" data-target="#register"></i></a></li>
				
			</ul>
		</nav>
	<!-- /NAV -->
	<div class="halfbackground">
	<!-- Quote -->
		<section id="background" class="background">
			<p class="quote"><br>{Learning to write programs stretches your mind and helps you think better}</p>
			<p class="quote1"> -Bill Gates</p>
		</section>
	<!-- /Quote --> 
	
	<!-- About --> 
		<br>
		<section id="about" class="Title" >
			<p class="font-weight-bold">About Me</p>
			<a href="#"><img src="./img/about/daler.png" width="350" height="365" class="Daler" alt=""></a>
			<p class="About_me"> Hi! My name is Daler. Currently, I work in the financial industry; however, I've always had an interest in software development. 
			After months of contemplation, I made a life-changing decision - <b>I'M GOING TO BECOME A SOFTWARE DEVELOPER!</b> 
			Shortly after, I enrolled in the coding bootcamp with <a href="https://www.learncodinganywhere.com">The Tech Academy</a>, and I truly believe that this program prepared me for my future endeavors in this field. 
			The background behind the meaning of my developer nickname - [<b>bold</b>]Developer is two-fold. First, I understand how challenging it will be to become a great developer, but I believe my personality is bold enough to take on that challenge. Second, the literal meaning of my first name "Daler" is "Bold", so I have no choice but to be <b>bold</b>.</p>
			
			
		</section>
	<!-- /About --> 
	
	<!-- Skills --> 
		<br>
		<hr />
		<br>
		<section class="Title" id="skills">
			<p class="font-weight-bold">Skills</p>
			<div class="Container">
			
				<div class="Skills" data-toggle="modal" data-target="#VCS">
					<p>VCS</p>
				</div>
				
				<div class="Skills" data-toggle="modal" data-target="#HTML">
					<p>HTML&CSS </p>
				</div>
				<div class="Skills" data-toggle="modal" data-target="#SQLModal">
					<p>SQL</p>
				</div>
			</div>
		
			<div class="Container">
				<div class="Skills_in_Progress" data-toggle="modal" data-target="#JS">
					<p>Javascript</p>
				</div>
				<div class="Skills_in_Progress" data-toggle="modal" data-target="#Python">
					<p>Python</p>
				</div>
				<div class="Skills_in_Progress" data-toggle="modal" data-target="#CS">
					<p>C#</p>
				</div>
			</div>
		</section>
		<hr />
	<!-- /Skills --> 
	<!-- Skill Modals -->
		<div class="modal fade" id="VCS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<p class="modal-title" id="SkillsModalLabel"><i class="fa fa-git-square" aria-hidden="true"></i><p>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						
						<p>
							<h4><a href="https://github.com/boldDeveloper" target="_blank")>Check out my GitHub profile <i class="fa fa-github" aria-hidden="true"></i></a></h4>
						</p>
						<p>
							<b>I am familiar with:</b>
							<ul>
								<li>TFS inside of Visual Studio</li>
								<li>Git</li>                    
							</ul>
						</p>

                                   
					</div>
				</div>
			</div>
		</div>	
		<div class="modal fade" id="HTML" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<p class="modal-title" id="SkillsModalLabel"><i class="fa fa-html5" aria-hidden="true"></i><p>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>
							<b>I am familiar with:</b>
							<ul>
								<li>HTML5</li>
								<li>CSS3</li>
								<li>Bootstrap3</li>
								<li>JavaScript</li>
								<li>jQuery</li>
							</ul>
						</p>
					</div>
				</div>
			</div>
		</div>	
		<div class="modal fade" id="SQLModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<p class="modal-title" id="SkillsModalLabel"><i class="fa fa-database" aria-hidden="true"></i><p>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>

							<b>I am familiar with:</b>
							<ul>
								<li>MS SQL Server 2014</li>
								<li>SQLite</li>
								<li>MySQL</li>
							</ul>

						</p>

					</div>
				</div>
			</div>
		</div>	
		<div class="modal fade" id="JS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<p class="modal-title" id="SkillsModalLabel">JS<p>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>
							<b>I am familiar with:</b>
							<ul>
								<li>HTML5</li>
								<li>CSS3</li>
								<li>Bootstrap3</li>
								<li>JavaScript</li>
								<li>jQuery</li>
							</ul>
						</p>
					</div>
				</div>
			</div>
		</div>	
		<div class="modal fade" id="Python" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<p class="modal-title" id="SkillsModalLabel"><i class="fa fa-file-code-o" aria-hidden="true"></i><p>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>
							<b>I am familiar with:</b>
							<ul>
								<li>Python3</li>
								<li>Python2</li>
								<li>Tkinter</li>
								<li>SQLite3</li>
							</ul>
						</p>

					</div>
				</div>
			</div>
		</div>	
		<div class="modal fade" id="CS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<p class="modal-title" id="SkillsModalLabel"><i class="fa fa-windows" aria-hidden="true"></i><p>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>
						<b>I am familiar with:</b>
							<ul>
								<li>C#</li>
								<li>Entity Framework</li>
								<li>LINQ</li>
								<li>MVC</li>
								<li>Debugging Tools</li>
								<li>Visual Studio/TFS Integration</li>
								<li>Visual Studio/Azure Integration</li>
							</ul>
						</p>

						
					</div>
				</div>
			</div>
		</div>	
		
	<!-- /Skill Modals -->

	<!-- Portfolio --> 
		<section class="Title" id="portfolio">
			<p class="font-weight-bold">Projects</p>
			
			<div class="card-deck" >
				<div class="card" style="border-radius: 5px; border:none; width:385px;">
						<div id="carouselExampleControls" class="carousel slide" style="width:385px;" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleControls" data-slide-to="1"></li>
									<li data-target="#carouselExampleControls" data-slide-to="2"></li>
								</ol>
							<div class="carousel-inner" style="border-radius: 5px;" role="listbox">
								<div class="carousel-item active">
									<img class="d-block img-fluid" src="./img/portfolio/BoldDeveloper1.jpg" height="202px"  alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="d-block img-fluid" src="./img/portfolio/BoldDeveloper2.jpg" height="202px"  alt="Second slide">
								</div>
								<div class="carousel-item">
									<img class="d-block img-fluid" src="./img/portfolio/BoldDeveloper3.jpg" height="202px" alt="Third slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					
						<div class="card-footer" style="background-color: #414141; border-color: #414141; border-radius: 5px; width:385px;">
						<h5 class="text-inverse" style="color: #fff;">www.[Bold]Developer.com</h5>
						<a href="https://github.com/boldDeveloper/BoldDeveloper.com" target="_blank"><button class="btn btn-info"><i class="fa fa-git" aria-hidden="true"></i></button></a>
						</div>
				</div>
				
				
				<div class="card" style="border-radius: 5px; border:none; width:385px;">
					<div id="carouselExampleControls1" class="carousel slide" style="width:385px;" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleControls1" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleControls1" data-slide-to="1"></li>
						</ol>
						<div class="carousel-inner" style="border-radius: 5px;" role="listbox">
							<div class="carousel-item active">
								<img class="d-block img-fluid" src="./img/portfolio/TechPizza.jpg" height="202px" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid" src="./img/portfolio/TechPizza1.jpg" height="202px"  alt="Second slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					
					<div class="card-footer" style="background-color: #414141; border-color: #414141; border-radius: 5px; width:385px;">
						<h5 class="text-inverse" style="color: #fff;">Tech Pizza</h5>
						<a href="https://github.com/boldDeveloper/Final_Project_JS" target="_blank"><button class="btn btn-info"><i class="fa fa-git" aria-hidden="true"></i></button></a>
						<a  href="./Projects/PizzaOrder/index.html" target="_blank"><button class="btn btn-success"><i class="fa fa-play" aria-hidden="true"></i></button></a>
					
					</div>
				</div>
				
				<div class="card" style="border-radius: 5px; border:none; width:385px;">
					<div id="carouselExampleControls2" class="carousel slide" style="width:385px;" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleControls2" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleControls2" data-slide-to="1"></li>
							<li data-target="#carouselExampleControls2" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" style="border-radius: 5px;" role="listbox">
							<div class="carousel-item active">
								<img class="d-block img-fluid" src="./img/portfolio/phoneBook.jpg" height="202px" alt="First slide">
								<div class="carousel-caption d-md-block">
								<h4 style="color: #0d53ea; background-color: #FFD700; opacity:0.8; border-radius:5px;">Phone Book App</h4>
								</div>
							</div>
							
							<div class="carousel-item">
								<img class="d-block img-fluid" src="./img/portfolio/FileTransfer.jpg" height="202px"  alt="Second slide">
								<div class="carousel-caption d-md-block">
								<h4 style="color: #0d53ea; background-color: #FFD700; opacity:0.8; border-radius:5px;">File Transfer App</h4>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid" src="./img/portfolio/UW.jpg" height="202px" alt="Third slide">
								<div class="carousel-caption d-md-block">
								<h4 style="color: #0d53ea; background-color: #FFD700; opacity:0.8; border-radius:5px;">Underwriting App</h4>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					
					<div class="card-footer" style="background-color: #414141; border-color: #414141; border-radius: 5px; width:385px;">
						<h5 class="text-inverse" style="color: #fff;">Python Projects</h5>
						<a href="https://github.com/boldDeveloper/Phone_Book" target="_blank"><button href="#"  class="btn btn-info"><i class="fa fa-git" aria-hidden="true"> UW App</i></button></a>
						<a href="https://github.com/boldDeveloper/Python" target="_blank"><button href="#"  class="btn btn-info"><i class="fa fa-git" aria-hidden="true"> FT App</i></button></a>
						<a href="https://github.com/boldDeveloper/Python_Drill_Underwriting_System" target="_blank"><button href="#"  class="btn btn-info"><i class="fa fa-git" aria-hidden="true"> PB App</i></button></a>
					</div>
				</div>
			</div>
			
		</section>
		
	<!-- /Portfolio --> 
		
		<br>
		<br/>
		<br>
		<hr />
	<!-- Experience --> 
	
		<section class="Title" id="experience">
			<p class="font-weight-bold">Experience</p>
			<div id="accordion" role="tablist" aria-multiselectable="true">
				<div class="Experience">	
					<div class="card" id="card">
						<div class="card-header" role="tab" id="headingOne">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								<button style="outline:none;">
									<img src="./img/experience/BofA.png" width="170" height="87" class="Experience_Logo" alt="">
								</button>
							</a>
							<p><b>Bank of America [2012-2015]</p> 
							<p class="Experience_Title">Sales and Service Specialist/Personal Banker</b></p>
							
						</div>
						<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
								<div class="card-block" id="workDescription">
									<li>Achieved rank within Top 100 bankers of the company nationwide; Q1, 2015</li>
									<li>Sold financial products to both consumer and small business customers; attained 100% of quota each time
									<li>Identified key opportunities within my territory and collaborated with my sales team to ensure growth attainment
									<li>Met quota goal at 375%; Q3, 2014
									<li>Operated as the branch lead point of contact for all customer related matters
									<li>Ensured the timely and successful delivery of solutions according to customer needs and objectives
									<li>Routinely worked with customers to build and deepen relationships by uncovering financial needs and recommended the best fitting product, service and solution to meet their needs
								</div>
							
						</div>
					</div>
				</div>

					
				
				<div class="Experience">
					<div class="card" id="card">
						<div class="card-header" role="tab" id="headingTwo">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<button style="outline:none;">
									<img src="./img/experience/WellsFargo.png" width="130" height="120" class="Experience_Logo" alt="">
								</button>
							</a>
							<p><b>Wells Fargo [2015]</p>
							<p class="Experience_Title">Personal Banker</b></p>
							
						</div>
						<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="card-block" id="workDescription">
									<li>Sold financial and credit services with the goal of acquiring 100% of the customer’s business
									<li>Used profiling analysis tools to identify cross-sell opportunities and made client calls to increase product per customer ratio
									<li>Met individual and team monthly quota and profitability expectations
									<li>Coordinated the involvement of company personnel, including support, service, and management resources, met account performance objectives and customers’ expectations
									<li>Built and maintained strong, long-lasting customer relationships, in person and via phone
									<li>Proactively assessed, clarified, and validated customer needs
									<li>Led solution development efforts that best addressed customer needs, while coordinating the involvement of necessary company personnel
								</div>
							
						</div>
					</div>
				</div>
					
				<div class="Experience">
					<div class="card" id="card">
						<div class="card-header" role="tab" id="headingThree">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<button style="outline:none;">
									<img src="./img/experience/BannerBank.png" width="190" height="140" class="Experience_Logo" alt="">
								</button>
							</a>
							<p><b>Banner Bank [2016-2017]</p><p class="Experience_Title">Personal Banker II</b></p>
						</div>
						<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="card-block" id="workDescription">
								<li>Uncovered and secured consumer and commercial loans.
								<li>Managed divisions daily loan pipeline report
								<li>Supported small business VP's by on-boarding new clients and maintenance of their accounts
								<li>Established and maintained on going relationships with clients, while continuing to recommend client benefiting solutions that generate revenue growth
								<li>Managed both consumer and business clients with high level accounts
								<li>Gained client's alignment on my recommendations to improve their financial status
								<li>Closed $2.7MM in new consumer and business loans; Q4, 2016
							</div>
						</div>
					</div>
				</div>
				
				<div class="Experience">
					<div class="card" id="card">
						<div class="card-header" role="tab" id="headingFour">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<button style="outline:none;">
									<img src="./img/experience/FirstTech.png" width="150" height="150" class="Experience_Logo" alt="">
								</button>
							</a>
							<p><b>First Tech Federal Credit Union [2017-Present]</p><p class="Experience_Title">Financial Solutions Representative II</b></p>
						</div>
						<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="card-block" id="workDescription">
								<li>Leader in sales and exceptional client service.
								<li>Provide sales leadership and coaching of new Personal Bankers, Universal Bankers and Tellers
								<li>Listen to members and recommend options that best fir their needs, cross-selling and making referral to credit union products and services
								<li>Provide the highest quality of customer service to all members through relationship building and referrals to credit union products and services
								<li>Process routine financial business for member quickly and accurately
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<hr />
		<br/>
		<br/>
		<br/>
	<!-- /Experience --> 
	
	<!-- Contact me--> 
		<section  id="connect">
			<div class="Title" id="email">
				<p class="font-weight-bold">Let's Connect</p>
			</div>
			<div class="form">
				<div class="Container_Contact">
					<button style="outline:none;" type ="button" data-toggle="modal" data-target="#register"><i class="fa fa-comments-o" aria-hidden="true"></i></button>
				</div>
			</div>
		</section>
<!-- Form modal -->
		
		<div class="modal fade" id="register">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				
					<div class="modal-header">
						<h5 class="modal-title">Let's Connect! </h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form name="contactform" method="post" action="send_form_email.php">
							<fieldset class="form-group">
								<label for="name"><i class="fa fa-user-o" aria-hidden="true"></i> Name:</label>
								<input type="text" name="name" class="form-control">
	
								<label for="company"><i class="fa fa-university" aria-hidden="true"></i> Company:</label>
								<input type="text" name="company" class="form-control">
								
								<label for="email"><i class="fa fa-at" aria-hidden="true"></i> Email:</label>
								<input type="text" name="email" class="form-control">
								
								<label for="comments"><i class="fa fa-commenting-o" aria-hidden="true"></i> Message:</label>
								<input type="text" name="comments" class="form-control">
							</fieldset>
							<div class="modal-footer">
								<button type="submit" value="Submit" class="btn btn-primary">Send</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br/>
		<br/>
	<!-- /Form modal -->
		
	<!-- /Contact me --> 
	
	<!-- Footer -->
		</div>
		<section id="footer" class="nav">
			<li class="nav-item" id="nav-linked">
				<small><a class="nav-link active" href="https://www.linkedin.com/in/daler-rakhmet-zade-94532ba0/" target="_blank"><img src="./img/linkedin.png" width="30" height="30" alt="" id="linkedin"></a></small>
			</li>
			<li class="nav-item">
				<small><a class="nav-link"  href="https://github.com/boldDeveloper" target="_blank"><img src="./img/github.png" width="25" height="25" alt=""></a></small>
			</li>
			<li class="nav-item">
				<small><a class="nav-link" href="#" data-toggle="modal" data-target="#register"><img src="./img/gmail.png" width="35" height="25" alt=""></a></small>
			</li>
			<li class="nav-item">
				<small class="nav-link"> <img src="./img/nav_logo.png" width="90" height="20" alt="" ><b>4.1</b>   2018</small>
			</li>
		</section>
	
	
	<!-- /Footer -->
	<script src="./js/navbar.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	
	
  </body>
</html>
	

