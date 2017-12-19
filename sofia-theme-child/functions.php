<?php
	function wpdocs_theme_name_scripts() {
	    wp_enqueue_style( 'custom-fonts-all', '/wp-content/themes/'. get_stylesheet() . '/assets/custom-fonts-all.css' );
	    wp_enqueue_style( 'magnific-style', '/wp-content/themes/'. get_stylesheet() . '/assets/Magnific/magnific-popup.css' );
	    wp_enqueue_style( 'font-awesome-new', '/wp-content/themes/'. get_stylesheet() . '/assets/font-awesome/css/font-awesome.min.css' );
	    wp_enqueue_script( 'magnific-script', '/wp-content/themes/'. get_stylesheet() . '/assets/Magnific/jquery.magnific-popup.min.js' );
	    wp_enqueue_script( 'vimeo-api-new', '/wp-content/themes/'. get_stylesheet() . '/assets/jquery.vimeo.api.min.js' );
	}
	add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );	 

	add_filter('the_time', 'modify_date_format');
		function modify_date_format(){
		    $month_names = array(1=>'Януари','Февруари','Март','Април','Май','Юни','Юли','Август','Септември','Октомври','Ноември','Декември');
		    return get_the_time('j').'. '.$month_names[get_the_time('n')].' '.get_the_time('Y');
		}

