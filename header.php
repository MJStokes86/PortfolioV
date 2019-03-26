<!DOCTYPE html> 
<html <?php language_attributes(); ?>> 
<head>     
<meta charset="<?php  bloginfo('charset'); ?>">     
<title><?php  bloginfo('name');?> <?php wp_title(); ?></title> 
<meta name="viewport" content="width=device-width, 
    minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>"> 
<?php if( is_singular() )
wp_enqueue_script( 'comment-reply' );  ?> 
<?php wp_head(); ?>     
<meta name="google-site-verification" content="DdV-3oSjd8nkwrbwTVqiMRgZIrc2p6jDa8lKJ68Q_0g" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">     
<link href='//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/img/Logo.ico">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Montserrat:300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">
<link href="https://file.myfontastic.com/zS5BGnD45yUTsEKpdeGxeb/icons.css" rel="stylesheet">


<script type="text/javascript" src="https://use.fontawesome.com/a46e157fb6.js"></script>     
<script type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script>







</head>


<?php 

if(is_home()){
	$bkny_classes = array('bkny_class', 'my-class');
}
else{
	$bkny_classes = array('no-bkny-class');
}



 ?>


<body <?php body_class($bkny_classes); ?>>

<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>


<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5HP9VXZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5HP9VXZ');</script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88864910-1', 'auto');
  ga('send', 'pageview');

</script>

<body>

 

 
