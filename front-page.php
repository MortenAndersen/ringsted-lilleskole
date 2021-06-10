<?php
get_header();

echo '<section class="bg-color-xxx">';
	echo '<div class="wrap grid g-d-3 gap-4 pad-4">';
		echo '<div class="col-1">'; ?>

		<div id="text-2" class="widget footer-col widget_text"><h4 class="widget-title widget-title-footer">Kontakt skolen</h4>			<div class="textwidget"><p>Næstvedvej 349 B<br>
4100 Ringsted<br>
Tlf: 82304100<br>
<a href="mailto:Kontor@ringsted-lilleskole.dk">Kontor@ringsted-lilleskole.dk</a></p>
</div>
		</div>
			<?php
		echo '</div>';
		echo '<div class="col-1">'; ?>
<div id="text-3" class="widget footer-col widget_text"><h4 class="widget-title widget-title-footer">Kontakt Oasen</h4>			<div class="textwidget"><p>Tlf. 27 84 05 74<br>
Morgen 6.30 – 8.00<br>
Eftermiddag 12.45 – 17.00<br>
<em>(dog kun til 16.00 om fredagen)</em></p>
</div>
		</div>
<?php
		echo '</div>';
		echo '<div class="col-1">';
			echo '<h3>Nyheder</h3>';
		echo '</div>';
	echo '</div>';
echo '</section>'; ?>





<section class="parallax front-parallax aligner">
	<div class="wrap flex">

				<h3 class="f-xl f-xxl-tab f-xxxl-desk bold">Ringsted lilleskole<br />- fordi vores børn er vigtige</h3>

	</div>
</section>

<?php 

get_template_part('template-parts/content/page', 'article'); 

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

get_footer();
