<?php
get_header();

echo '<section class="bg-color-1">';
	echo '<div class="wrap grid g-d-3 gap-4 pad-4">';
		echo '<div class="col-1">';
			echo 'her er jeg';
		echo '</div>';
		echo '<div class="col-1">';
			echo 'her er jeg';
		echo '</div>';
		echo '<div class="col-1">';
			echo 'her er jeg';
		echo '</div>';
	echo '</div>';
echo '</section>';

get_template_part('template-parts/content/page', 'article'); ?>



<section class="parallax front-parallax aligner">
	<div class="wrap flex">

				<h3 class="f-xl f-xxl-tab f-xxxl-desk bold">Ringsted lilleskole<br />- fordi vores børn er vigtige</h3>

	</div>
</section>

<?php 

echo '<section class="bg-color-2">';
	echo '<div class="wrap grid g-d-3 gap-4 pad-4">';
		echo '<div class="col-1">';
			echo '<h3>Kontakt skolen</h3>';
		echo '</div>';
		echo '<div class="col-1">';
			echo '<h3>Kontakt Oasen</h3>';
		echo '</div>';
		echo '<div class="col-1">';
			echo 'her er jeg';
		echo '</div>';
	echo '</div>';
echo '</section>';

get_footer();
