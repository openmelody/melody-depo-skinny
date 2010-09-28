<?php get_header(); ?>

		<div class="post">
			<h2>Face it, we&rsquo;re lost.</h2>
			<p>Sorry, the page you're looking for is not here. If you're looking for something in particular, try using the search form on the right or browse the archives below.</p>
	    </div>
			
		<div class="post">
		    
		    <div style="float:right;width:250px;">
		        <h3>Archives by Month</h3>
	            <ul class="nav">
	            	<?php wp_get_archives('type=monthly'); ?>
	            </ul>
            </div>
            
   			    <h3>Archives by Tag</h3>
    		    <ul class="nav">
	    		     <?php wp_list_cats(); ?>
		        </ul>

		</div>

<?php get_footer(); ?>
