<?php

/**

 * The template for displaying 404 pages (Not Found)

 *

 */



$thegem_use_custom = get_post(thegem_get_option('404_page'));



$thegem_q = new WP_Query(array('page_id' => thegem_get_option('404_page')));



get_header(); ?>



<div id="main-content" class="main-content">


 

<div id="page-title" class="page-title-block page-title-alignment-center page-title-style-1 " style="">
	<div class="container">
		<div class="page-title-title" style="">
		<h1>
			Страницата не е намерена
		</h1>
	</div>
</div>
 
</div>



<div class="block-content">

	<div class="container">

		<div class="entry-content page-content content-none " id="translate-search-form">

			<p><?php esc_html_e( 'Изглежда, че на това място не е намерено нищо. Може би опитайте търсене?', 'thegem' ); ?></p>

			<?php add_filter( 'get_search_form', 'thegem_serch_form_nothing_found' ); get_search_form(); remove_filter( 'get_search_form', 'thegem_serch_form_nothing_found' ); ?>

		</div><!-- .entry-content -->

	</div>

</div>


 



</div><!-- #main-content -->



<?php

get_footer();