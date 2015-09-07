<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

<link rel="shortcut icon" href="/favicon.ico">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen, print"/>

</head>

<body>

<div id="header-mobile">
    <div class="home"><a href="/"></a></div>
    <div class="nav"><a class="mtoggle" href="#"></a></div>
    <div class="phone"><a href="tel:"></a></div>
    <div class="email"><a href="mailto:"></a></div>
</div>

<div id="nav-mobile">
    <ul id="mmenu">	
       <li><?php wp_nav_menu('menu=Main Menu'); ?></li>
    </ul>
</div>
        
<script type="text/javascript">
jQuery(document).ready(function($) {
    $("#mmenu").hide();
    $(".mtoggle").click(function() {
        $("#mmenu").slideToggle(500);
    });
});
</script>

<div id="header">
	<div class="wrapper">
                        
        <div id="smedia">
            <a class="fb" href="#" target="_blank"></a>
            <a class="tw" href="#" target="_blank"></a>
            <a class="gp" href="#" target="_blank"></a>
            <a class="yt" href="#" target="_blank"></a>
            <a class="in" href="#" target="_blank"></a>
        </div>
        <div class="phone"></div>
        
        <div id="nav">
            <ul>
                <li><?php wp_nav_menu('menu=Main Menu'); ?></li>
            </ul>
        </div>

	</div>
</div>