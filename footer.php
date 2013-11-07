
<footer>
	<nav>
		<?php bones_footer_links(); ?>
	</nav>
	<div class="row">
		<div class="large-4 columns" id="contact-us">
			<h3>Contact Us</h3>
			<p>Archbishop Chapelle High School<br>
			8800 Veterans Blvd. Metairie, LA 70003<br>
			Phone 504-467-3105 <br>
			Fax 504-466-3191<br>
			www.archbishopchapelle.org</p>
		</div>
		<div class="large-4 columns" id="copyright">
			<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri().'/library/img/chapelle-footer-logo.png' ?>"></a>
			<p>2013 © Archbishop Chapelle High School</p>
		</div>
		<div class="large-4 columns"id="donate">
			<a href="/donate"><img src="<?php echo get_template_directory_uri(); ?>/library/img/donate-to-chapelle.png" alt=""></a>
		</div>
	</div>
	<div class="footer-gradient"></div>
</footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  <script src="<?php echo get_template_directory_uri();.'/library/js/script.js'?>"></script>
  <script src="<?php echo get_template_directory_uri();.'/library/js/foundation.min.js' ?>"></script>
  <script>
    $(document).foundation();
  </script>
<?php wp_footer(); ?>  
</body>
</html>



