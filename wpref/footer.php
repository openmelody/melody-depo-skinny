<br clear="all" />

    <div class="footer">
		
		    <div>
    			<p><strong>About</strong></p>
    			<p><!-- The text in the "About Yourself" box on your profile page will automatically appear here. -->
					<?php if (have_posts()) : the_post();
					the_author_description();
					endif;
					rewind_posts(); ?>
				</p>
		    </div>
	
		    <div>
    			<p><strong>Recently</strong></p>
    			<ul class="nav"><?php wp_get_archives('type=monthly&limit=5'); ?></ul>
		    </div>
	
			<div class="last">
    			<p><strong>Et Cetera</strong></p>
				<form method="get" id="sform" action="<?php bloginfo('home'); ?>/">
				<p><input type="text" id="q" value="" name="s" size="15" style="width:80px;background-color:#e5e5e5" />
				<input type="submit" value="Search" style="font-size:10px;vertical-align:top" /></p>
				</form>
				
			</div>
	
	    </div><!-- end footer -->

        <br clear="all" />
        
		<div class="copyright">
        	<?php if (is_home()) : ?>
        	<?php else : ?>
        	<span class="previous">&larr; <a href="<?php bloginfo('url') ?>">Back to Home</a></span>
            <?php endif; ?>
            <p>&copy; <?php bloginfo('name'); ?>. Powered by <a href="http://wordpress.org">WordPress</a> using the <a href="http://powazek.com/depo-skinny">DePo Skinny Theme</a>.</p>
            <?php wp_footer(); ?>
		</div>

	</div> <!-- end container -->
</body>
</html>
