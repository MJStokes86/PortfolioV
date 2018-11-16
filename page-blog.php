<?php get_header(); ?>

<?php /* Template Name: Custom Blog */  ?>

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
                            <a href="http://localhost/wordpress" class="navbar-brand navbar-text-color"><img src="<?php bloginfo('template_directory'); ?>/img/Logo.png"><span>Michael J. Stokes</span></a>

                            <!-- <a href="http://mjstokes.com" class="navbar-brand navbar-text-color"><img src="<?php bloginfo('template_directory'); ?>/img/Logo.png"><span>Michael J. Stokes</span></a> -->
                        </div>
                        <!-- END LOGO DESIGN AREA -->
                </div>
                <div class="collapse navbar-collapse" id='example'>
                    <ul class="nav navbar-nav navbar-text-color navbar-right">
                       <!--  <li class='hidden'><a href=""></a></li>
                        <li id="li-home"><a href="http://mjstokes.com">Home</a></li>
                        <li><a href="http://mjstokes.com/#about">About</a></li>
                        <li><a href="http://mjstokes.com/#skills">Skills</a></li>
                        <li><a href="http://mjstokes.com/#work">Work</a></li>
                        <li><a href="http://mjstokes.com/services">Services</a></li>
                        <li><a href="http://mjstokes.com/blog-2/">Blog</a></li>
                        <li><a href="http://mjstokes.com/#contact">Contact</a></li> -->

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
                                   <h2> The Blog </h2>
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

    <!-- SIDE MENU -->
<nav class="navbar">
    <div class="side-menu">
        <span class="open-slide">
            <button href="" id="openSlide">
               <svg width="30" height="30">
                <path d="M0,5 30,5" stroke="#000" stroke-width="5" />
                <path d="M0,14 30,14" stroke="#000" stroke-width="5" />
                <path d="M0,23 30,23" stroke="#000" stroke-width="5" />
               </svg> 
            </button>
        </span>
    </div>
</nav>

<div id="side-menu" class="side-nav">
    <button  href="" class="btn-close" id="closeSlide">&times;</button>
       <?php get_sidebar() ?>
 </div>



<!-- <script type="text/javascript">

    jQuery(document).ready(function(){


    function openSlideMenu() {
        document.getElementById('side-menu').style.width = '250px';
    }

      function closeSlideMenu() {
        document.getElementById('side-menu').style.width = '0';

    }

    document.getElementById("openSlide").addEventListener("click", openSlideMenu, false);
    document.getElementById("closeSlide").addEventListener("click", closeSlideMenu, false);


});

</script> -->

<!--     SIDE MENU ENDS
 -->


<!-- Blog Posts -->
    <section class="blog-section section-padding">
    	
    	<div class="the-posts container">
    		<div class="row">
    			<div class="col-md-12">
    			<div class="col-md-6">


    				<div class="recent-posts">

    					<?php 

                        global $paged;


                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 


    					$args = array(
    						'type' => 'post',
							'order' => 'DESC',
							'orderby' => 'date',
                            'posts_per_page' => 3,
                            'post-type' => 'blog',
							'category_name' => 'Programming Languages, Web Development, Experiences, Portfolio, Career',
                            'paged' => $paged);

                        
    					$recent_posts = new WP_Query($args);

    					if(have_posts()):

    						?>

    						<div class="post-data">
    							


    					

    						<?php

    						$counter = 0;


    						
    						while($recent_posts->have_posts()):

    							$recent_posts->the_post();

    					 ?> 



    					 <div class="post-container container">
    						<div class="row">
    						<div class="col-md-6">
    						<div class="recent-thumbnail">
    							<?php the_post_thumbnail(array('500', '500')) ?>
    						</div>
    						</div>

    						<div class="col-md-6">
    							<div class="date"><h3><?php echo get_the_date('n.d.y'); ?></h3></div>
    							<h2 class="blog-title"><?php the_title(); ?></h2>
    							<br>
                                <p> By <?php echo get_author_name(); ?>
    							<p>
    								<p><?php echo get_the_excerpt(); ?></p>
    								<a href="<?php echo get_the_permalink(); ?>" class="ghost-button">Read</a>
    							</p>



    						</div>

						</div>

    					</div>






    					<?php endwhile; endif; ?>

                        <div class="navigation"><p><span id="prev"><?php next_posts_link('Older', $recent_posts->max_num_pages); ?></span> <span id="next"><?php previous_posts_link('Newer &raquo;') ?></span>
</p></div>



    					<?php wp_reset_postdata(); ?>





    				</div>



    				
    			</div>
    		</div>


    		</div>
	    	</div>
    </section>

<!-- End of Blog Posts -->



<?php get_footer(); ?>