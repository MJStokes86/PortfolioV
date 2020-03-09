<?php get_header(); ?>

<?php /* Template Name: Client Questionnaire */ ?>

<style type="text/css">


.header-text2 h2 {
		font-size: 75px;
		font-weight: 900;
		text-transform: uppercase;
		color: #fff;
		margin-top: 10%;
		font-family: Anton;
		text-shadow: 2px 2px #000 !important;

	}

	.line1 {

	background-color: #fff;
	border: solid 2px #fff;
	height: 3px;
	width: 15%;
	

}

.line2 {
	
	position: relative;
	top: 100px;
	background-color: #fff;
	border: solid 2px #fff;
	height: 3px;
	width: 15%;
	
}

	

</style>


	<header id="home" class="welcome-area site-header">
		<div class="header-top-area">
			<div class="container">
				<div class="row">
				  <div class="col-sm-3">
						
					</div>
					<div class="col-sm-9">
						<!-- START MENU DESIGN AREA -->
			<nav class="navbar navbar-default navbar-fixed-top navbar-color">
			<div class="container">
				<div class="navbar-header page-scroll">
				<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#example'>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				  <!-- START LOGO DESIGN AREA -->
						<div class="logo">
							<a href="#home" class="navbar-brand navbar-text-color"><img src="<?php bloginfo( 'template_directory' ); ?>/img/Logo.png"><span>Michael J. Stokes</span></a>
						</div>
						<!-- END LOGO DESIGN AREA -->
				</div>
				<div class="collapse navbar-collapse" id='example'>
					<ul class="nav navbar-nav navbar-text-color navbar-right">

						<!-- <li class='hidden'><a href=""></a></li>
						<li id="li-home"><a href="http://mjstokes.com">Home</a></li>
						<li><a href="http://mjstokes.com/#about">About</a></li>
					   
						<li><a href="http://mjstokes.com/#skills">Skills</a></li>
						<li><a href="http://mjstokes.com/#work">Work</a></li>
						<li><a href="http://mjstokes.com/services/">Services</a></li>
						<li><a href="http://mjstokes.com/blog-2/">Blog</a></li>
						<li><a href="http://mjstokes.com/#contact">Contact</a></li>
 -->
						  <li class='hidden'><a href=""></a></li>
						<li id="li-home"><a href="http://localhost/wordpress">Home</a></li>
						<li><a href="http://localhost/wordpress/#about">About</a></li>
						<li><a href="http://localhost/wordpress/#skills">Skills</a></li>
						<li><a href="http://localhost/wordpress/#work">Work</a></li>
						<li><a href="http://localhost/wordpress/services">Services</a></li>
						<li><a href="http://localhost/wordpress/blog-2/">Blog</a></li>
						<li><a href="http://localhost/wordpress/#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>


						
						<!-- END MENU DESIGN AREA -->
					</div>
				</div>
			</div>
		</div>
	
   
		<div class="welcome-image-area" data-stellar-background-ratio="0.6">
			<div class="display-table">
				<div class="display-table-cell">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="header-text2 text-center">
								   
								   <hr class="line1"></hr>
								   <h2> Welcome New Client! </h2>
								   <hr class="line2"></hr>
								  
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- / END HOMEPAGE DESIGN AREA -->

	<section id="client-questionnaire" class="client-questionnaire-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title"><h3 class="text-center"> I would like to get to know you a little further and details about your new upcoming site. This will help me plan everything out exactly how you want it. As soon as completed, press send. Once I receive your infomation, I'll give you a call and a quote!
</h3></div>		
				<div class="client-questionnaire-form">
					
					<?php echo do_shortcode( '[contact-form-7 id="578" title="Client Questionnaire Form"]' ); ?>

				</div>



				</div>
			</div>
		</div>

	</section>



<?php get_footer(); ?>
