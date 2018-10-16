</section><!-- /#global-content -->


<footer id="main-footer">
	
	<div class="footer-copyright">
		&copy; 2014 Tema de prueba
	</div><!-- /.footer-copyright -->
	
</footer><!-- footer -->

</div><!-- /#global-container -->

<?php wp_footer();?>



<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<!-- 
	<script>
		
		function visible(){
			document.getElementById("registrar").classList.toggle ("visible-form");
		}
		document.getElementById("r-user").onclick = function(){
			visible();
		}
	</script> -->
	<script>
		$(document).ready(function() {
			$('#r-user').on('click', function() {
				$('#registrar').addClass('visible-form');
				$('#tab1_login').removeClass('visible-form');

			});
		});
		$(document).ready(function() {
			$('#i-sesion').on('click', function() {
				$('#tab1_login').addClass('visible-form');
				$('#registrar').removeClass('visible-form');
			});
		});
	</script>
</body>
</html>