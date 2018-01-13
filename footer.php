<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 403
 */

?>

		</div>
	</div>

<?php wp_footer(); ?>

<script type="text/javascript">
	var $container = $('#masonry');
	$container.imagesLoaded( function () {
		$container.masonry({
			columnWidth: '.item',
			itemSelector: '.item'
		});
	});

	var allA = $(".card-line"), i = 0, len = allA.length;
	for (; i < len; i++) {
	    allA[i].style.backgroundColor = '#' + Math.floor(Math.random() * Math.pow(2, 24)).toString(16);
	};

	 $(function () {
	 	$("[data-toggle='tooltip']").tooltip();
	 });


</script>

</body>
</html>
