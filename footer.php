	<!-- Begin Footer -->
	<div id="footer">
	<p><?php bloginfo('name'); ?> is proudly powered by <a href="http://wordpress.org">Wordpress</a> | 
	<a href="<?php bloginfo( 'rss2_url' ); ?>" class="rss" title="Subscribe to <?php bloginfo( 'name' ); ?> RSS">Subscribe</a></p>
<p><a href="<?php bloginfo('url'); ?>/wp-admin">Admin</a></p>
	</div><!-- End Footer -->
	
</div><!-- End Wrap -->

</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.cycle.lite.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#slideshow').cycle('fade');
		
		});	
</script>

<!-- Google Analytics -->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-7075448-7']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

</html>
