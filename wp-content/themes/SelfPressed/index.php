<?php

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();


    // calling the standard sidebar 
    ?><div class="theSidebar span-6">
      <?php thematic_sidebar(); ?>
    </div><?php

    ?>
		<div id="container" class="span-18">
	
			<?php thematic_abovecontent(); ?>
	
			<div id="content">

				<?php 
            	
            	// create the navigation above the content
            	thematic_navigation_above();
				
            	// calling the widget area 'index-top'
            	get_sidebar('index-top');
				
            	// action hook for placing content above the index loop
            	thematic_above_indexloop();
				
            	// action hook creating the index loop
            	thematic_indexloop();
				
            	// action hook for placing content below the index loop
            	thematic_below_indexloop();
				
            	// calling the widget area 'index-bottom'
            	get_sidebar('index-bottom');
				
            	// create the navigation below the content
            	thematic_navigation_below();
            	
            	?>
				
			</div><!-- #content -->
		
			<?php thematic_belowcontent(); ?> 
		
		</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();


    
    // calling footer.php
    get_footer();

?>