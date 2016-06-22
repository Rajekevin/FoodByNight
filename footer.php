</div>

<!--FOOTER-->
	<section class="copyright">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-12 text-center"> Copyright <?=date('Y')?> </div>
	    </div>
	    <!-- / .row --> 
	  </div>
	</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="assets/js/jquery.nav.js" type="text/javascript"></script>  
<script src="assets/js/jquery.isotope.min.js" type="text/javascript"></script> 

<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>

<?php wp_footer(); ?>

</body>

</html>