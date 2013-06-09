<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

    <!-- footer start here -->	
	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>

<div class="footer_links">
<ul>
<li><a href="http://www.molglobal.net/?page_id=1281" target="_blank">About</a></li>
<li><a href="http://www.friendster.com/developers">Developers</a></li>
<li><a href="http://www.friendster.com/privacy_policy">Privacy</a></li>
<li><a href="http://www.friendster.com/user_terms_and_conditions">Terms</a></li>
<li><a href="http://www.friendster.com/contact_us">Contact</a></li>
</ul>

<script type="text/javascript" id="wau_scr_3a82ee47">
    var wau_p = wau_p || []; wau_p.push(["pmsq", "3a82ee47", false]);
    (function() {
        var s=document.createElement("script"); s.type="text/javascript";
        s.async=true; s.src="http://widgets.amung.us/a_pro.js";
        document.getElementsByTagName("head")[0].appendChild(s);
    })();
</script>


<div class="copyright">
Copyright &copy; 2002 - 2011 Friendster, Inc. All rights reserved.
</div>

</div>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>