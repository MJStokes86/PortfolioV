<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">     

<body id="single-post-page">

<?php get_header(); ?>

<style type="text/css">
	.header-text3 h2 {
		font-size: 75px;
	    font-weight: 900;
	    text-transform: capitalize;
	    color: #fff;
	    margin-top: 10%;
	    font-family: Anton;
        text-shadow: 2px 2px #000 !important;
	}

	.post-image-area {
    position: relative; 
    height: 100%;
    background: url(<?php echo get_the_post_thumbnail_url(); ?>);
    background-size: cover;
    z-index: 1;
}




.post-image-area:after {
    position: absolute;
    background: rgba(0, 0, 0, .5);
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    content: "";
    z-index: -1;
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

<!-- START HOMEPAGE DESIGN AREA -->
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
                            <a href="http://mjstokes.com" class="navbar-brand navbar-text-color"><img src="<?php bloginfo('template_directory'); ?>/img/Logo.png"><span>Michael J. Stokes</span></a>
                        </div> 

                        <!-- <div class="logo">
                            <a href="http://localhost/wordpress" class="navbar-brand navbar-text-color"><img src="<?php bloginfo('template_directory'); ?>/img/Logo.png"><span>Michael J. Stokes</span></a>
                        </div> -->
                        <!-- END LOGO DESIGN AREA -->
                </div>
                <div class="collapse navbar-collapse" id='example'>
                    <ul class="nav navbar-nav navbar-text-color navbar-right">
                        <!-- <li class='hidden'><a href=""></a></li>
                        <li id="li-home"><a href="http://mjstokes.com">Home</a></li>
                        <li><a href="http://mjstokes.com/#about">About</a></li>
                        <li><a href="http://mjstokes.com/#skill">Skills</a></li>
                        <li><a href="http://mjstokes.com/#work">Work</a></li>
                        <li><a href="http://mjstokes.com/services">Services</a></li>
                        <li><a href="http://mjstokes.com/blog-2/">Blog</a></li>
                        <li><a href="http://mjstokes.com/#contact">Contact</a></li> -->

                        <li id="li-home"><a href="http://localhost/wordpress">Home</a></li>
                        <li><a href="http://localhost/wordpress/#about">About</a></li>
                       <li><a href="http://localhost/wordpress/#skill">Skills</a></li>
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
    
   
        <div class="post-image-area" data-stellar-background-ratio="0.6">

            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="header-text3 text-center">

                                	<!-- <script type="text/javascript">
                                		
                                		jQuery(document).ready(function() {

                                			jQuery('.header-text3').typed({
                                				strings:[" <?php the_title('<h2>', '</h2>') ?> <div class='home-arrow-down'>  </div>  "], 
								                typeSpeed:50,
								                loop:false,
								                cursorChar: "|",
								                showCursor: true

                                			});
                                		});
                                	</script> -->

                                    <hr class="line1"></hr>
                                    <h2><?php the_title() ?></h2>

                                    <hr class="line2"></hr>

                                  <!--   <div class="home-arrow-down">
                                        <a href="#about" class="smoth-scroll btn"><i class="fa fa-angle-double-down"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- / END HOMEPAGE DESIGN AREA -->

    <!-- MAIN BLOG -->

<div class="container-fluid">
	<div class="row-fluid">
		<div class="col-xs-12 main-blog">
   



			<?php 

		if(have_posts()):

			while(have_posts()): the_post(); ?> 
				
				<!-- <?php the_title('<h1 class="blog-title text-center" style="font-size: 50px; line-height: 1.8;">', '</h1>'); ?> -->

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				
				



	
				
				 <?php if(has_post_thumbnail()): ?>

					<!-- <div class="text-center"><?php the_post_thumbnail('medium'); ?></div> -->

					<!-- <?php $post_img = the_post_thumbnail(); ?>
 -->
				<?php endif; ?>

				<div class="content">
				<br>
				<br>

				<p><?php the_content(); ?></p>

				
				</div>

				<hr>	
				<?php 
				$post_tags = get_the_tags();
				if ($post_tags) {
					foreach($post_tags as $tag) {
						echo '<ul class="tags"><li><a href="' . get_tag_link($tag->term_id) . '">' .  $tag->name . '</a></li></ul>';
					}
					} 
					?>
					

				
					
				</article>


				


			<?php endwhile;

		endif;


		?>









<!-- 
		<div class="cols right-div"><?php get_sidebar() ?></div> -->
			

<hr>


		</div>
	</div>
</div>



<!-- /MAIN BLOG -->
<!-- COMMENTS -->

<div class="container comment_container">

<div class="row">
	<div class="col-xs-12">


	

	<?php if(comments_open()) {
					comments_template();
					} else {
						echo '<h5 class="text-center">Sorry, Comments are Closed!</h5>';
					}

					?>
		



	</div>
</div>
</div>

<!-- COMMENTS -->

<hr>

<div class="post-navigation"><p> Previous Post : <?php previous_post_link(); ?> | Next Post : <?php next_post_link(); ?></p></div>


<?php get_footer(); ?>