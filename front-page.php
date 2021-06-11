<?php
get_header();

echo '<section class="bg-color-xxx">';
	echo '<div class="wrap grid g-d-3 gap-2">';
		echo '<div class="column">'; ?>

		<div id="text-2" class="widget footer-col widget_text"><h4 class="widget-title widget-title-footer">Kontakt skolen</h4>			<div class="textwidget"><p>Næstvedvej 349 B<br>
4100 Ringsted<br>
Tlf: 82304100<br>
<a href="mailto:Kontor@ringsted-lilleskole.dk">Kontor@ringsted-lilleskole.dk</a></p>
</div>
		</div>
			<?php
		echo '</div>';
		echo '<div class="column">'; ?>
<div id="text-3" class="widget footer-col widget_text"><h4 class="widget-title widget-title-footer">Kontakt Oasen</h4>			<div class="textwidget"><p>Tlf. 27 84 05 74<br>
Morgen 6.30 – 8.00<br>
Eftermiddag 12.45 – 17.00<br>
<em>(dog kun til 16.00 om fredagen)</em></p>
</div>
		</div>
<?php
		echo '</div>';
		echo '<div class="column">';
			echo '<h4 class="widget-title">Nyheder</h4>';
			echo '<p>Her kan vi vise de sidste 3 nyehder</p>';
		echo '</div>';
	echo '</div>';
echo '</section>'; ?>





<section class="parallax front-parallax aligner">
	<div class="wrap flex">

				<h3 class="f-xxl f-xxxl-desk">Ringsted lilleskole<br />- fordi vores børn er vigtige</h3>

	</div>
</section>

<?php 

get_template_part('template-parts/content/page', 'article'); ?>

<section style="display:none;" class="bg-color-3">
	<div class="wrap grid g-d-2 gap-2">

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/Ehk7Fj0pgIg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<div class="facebook-wall">

		</div>
	</div>
</section>

<section class="bg-color-1">
	<div class="wrap grid g-d-3 gap-4 pad-4">
		<div class="column">

		<h4 class="widget-title">Ny elev</h4>
		<img src="https://images.pexels.com/photos/3755619/pexels-photo-3755619.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
			<p>Elementum! Consectetuer est ex accumsan pulvinar, gravida non commodi risus! Mi pretium. Quae orci quo mi. Netus ullam netus mauris magni reprehenderit ac molestie sequi! Ea molestiae quo, aute! Impedit dicta porttitor asperiores, molestie molestias elit excepteur quis habitasse! Conubia.</p>
			<p class="read-more"><a href="#">Læs mere</a></p>
		</div>
		<div class="column">
			<h4 class="widget-title">Stærk faglig integration</h4>
			<img src="https://images.pexels.com/photos/159823/kids-girl-pencil-drawing-159823.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
			<p>Elementum! Consectetuer est ex accumsan pulvinar, gravida non commodi risus! Mi pretium. Quae orci quo mi. Netus ullam netus mauris magni reprehenderit ac molestie sequi! Ea molestiae quo, aute! Impedit dicta porttitor asperiores, molestie molestias elit excepteur quis habitasse! Conubia.</p>
			<p class="read-more"><a href="#">Læs mere</a></p>
		</div>
		<div class="column">
			<h4 class="widget-title">Oasen</h4>
			<img src="https://images.pexels.com/photos/1148998/pexels-photo-1148998.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
			<p>Elementum! Consectetuer est ex accumsan pulvinar, gravida non commodi risus! Mi pretium. Quae orci quo mi. Netus ullam netus mauris magni reprehenderit ac molestie sequi! Ea molestiae quo, aute! Impedit dicta porttitor asperiores, molestie molestias elit excepteur quis habitasse! Conubia.</p>
			<p class="read-more"><a href="#">Læs mere</a></p>
		</div>

		<div class="column">
			<h4 class="widget-title">Værdigrundlag</h4>
			<img src="https://images.pexels.com/photos/3784567/pexels-photo-3784567.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
			<p>Elementum! Consectetuer est ex accumsan pulvinar, gravida non commodi risus! Mi pretium. Quae orci quo mi. Netus ullam netus mauris magni reprehenderit ac molestie sequi! Ea molestiae quo, aute! Impedit dicta porttitor asperiores, molestie molestias elit excepteur quis habitasse! Conubia.</p>
			<p class="read-more"><a href="#">Læs mere</a></p>
		</div>
		<div class="column">
			<h4 class="widget-title">Undervisningen</h4>
			<img src="https://images.pexels.com/photos/5212345/pexels-photo-5212345.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
			<p>Elementum! Consectetuer est ex accumsan pulvinar, gravida non commodi risus! Mi pretium. Quae orci quo mi. Netus ullam netus mauris magni reprehenderit ac molestie sequi! Ea molestiae quo, aute! Impedit dicta porttitor asperiores, molestie molestias elit excepteur quis habitasse! Conubia.</p>
			<p class="read-more"><a href="#">Læs mere</a></p>
		</div>
		<div class="col">
			<h4 class="widget-title">Personalet</h4>
			<img src="https://images.pexels.com/photos/1595387/pexels-photo-1595387.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
			<p>Elementum! Consectetuer est ex accumsan pulvinar, gravida non commodi risus! Mi pretium. Quae orci quo mi. Netus ullam netus mauris magni reprehenderit ac molestie sequi! Ea molestiae quo, aute! Impedit dicta porttitor asperiores, molestie molestias elit excepteur quis habitasse! Conubia.</p>
			<p class="read-more"><a href="#">Læs mere</a></p>
		</div>
	</div>
</section>

<?php get_footer();
