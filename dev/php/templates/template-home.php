<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--home" id="post-<?php the_ID(); ?>">
			<div class="pagetitle" style="display: none;">
				<h2><?php the_title(); ?></h2>
			</div>
			
			<div class="Content-entry">

				<div class="Home-bulletpoints">
					<div class="u-gridRow">
						<div class="u-gridContainer">
	
						<div class="u-gridCol5">								
							<div class="points-box">
								<ul class="Usp-list">
									<li class="icon check">Meer dan 20 jaar een begrip in de regio</li>
									<li class="icon check">Geen voorrijkosten bij verstoppingen</li>
									<li class="icon check">Gebruik van professioneel apparatuur</li>
									<li class="icon check">Professioneel werk tegen nette prijzen</li>
									<li class="icon check">Werken alleen met vakmensen</li>
									<li class="icon check">Bij nood 24/7 bereikbaar</li>
									<li class="icon check">Laten alles schoon achter</li>
									<li class="icon check">Mobiel pinnen mogelijk</li>
									<li class="icon check">VCA gecertificeerd</li>
								</ul>
							</div>

							<div class="points-box-img">
								<a target="_blank" href="http://www.vca.nl/home/homepage.aspx">
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/vca_logo.jpg">
								</a>
							</div>
						</div>

						<div class="u-gridCol3">											
							<div class="bul-mid">
								<h3>Werkgebied</h3>
								<div class="bul-mid-img">
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/nederland.jpg">
								</div>
							</div><!-- bul-mid -->
						</div>

						<div class="u-gridCol4">
							<div class="header-contact">
								<h3>Heeft u nog vragen?</h3>
								<p>Neem dan hier vrijblijven contact op</p>
								<a href="/contact/">
									<div class="Button meer-info">
										Contact
									</div>
								</a>
							</div>
						</div><!-- u-gridCol4 -->

						</div>
					</div><!-- u-gridRow -->						
				</div><!-- Home-bulletpoints -->
				
				<div class="u-gridContainer">
					<h3>Een verstopt riool in Eemland is snel verholpen</h3>
					<p>Amerongen Rioolbeheer, actief in het midden van Nederland en is uw specialist voor het ontstoppen, reinigen, aanleggen en inspecteren van uw riolering. Door kennis, ervaring en modern apparatuur, klaren wij uw rioolproblemen snel en deskundig!</p>
					<h3 class="h3-home">Ernstige verstoppingen worden door ons zeer snel verholpen!</h3>
				</div>
				
				<div class="red-bg more">
					<div class="u-gridContainer">
						<h3>Bel voor al u vragen en/of spoedgevallen</h3>
						<div class="span-mid-align">
							<a class="Button Button--transparent u-textInverted u-noLine" href="tel:0332999968">
							  <svg class="Icon Icon--inline" viewBox="0 0 128 128">
								<use xlink:href="#icon-phone"></use>
							  </svg>
							  <span>033 - 299 99 68</span>
							</a>
				             
							<a class="Button Button--transparent u-textInverted u-noLine mar-left-10" href="tel:0653622040">
							  <svg class="Icon Icon--inline" viewBox="0 0 128 128">
								<use xlink:href="#icon-mobile"></use>
							  </svg>
							  <span>06 - 536 22 040</span>
							</a>
						</div>
					</div>
				</div>
				
				<div class="grey-bg">
					<div class="u-gridContainer">
						<div class="u-gridCol4 Coll-4">
							<h3>Specialisme</h3>
							<p>Wij zijn in tegenstelling tot bijvoorbeeld een loodgieter en installatiebedrijf volledig gespecialiseerd in alle voorkomende rioleringswerkzaamheden. Hierdoor kunt u niet alleen voor een rioolontstopper of riool reiniging bij ons terecht, maar ook voor alle bijkomende reparaties en vervangingen van het riool.</p>
						</div>

						<div class="u-gridCol4 Coll-4">
							<h3 class="vis-hidden">Specialisme</h3>
							<p>Het ontstoppen, aanleggen, onderhouden en vervangen van rioleringen zijn onze specialisme. Om rioolproblemen snel en vakkundig te verhelpen, beschikken wij over een team rioolspecialisten. Ook beschikken wij over de nieuwste apparatuur om de problemen in de onzichtbare buizenwereld snel op te sporen en te verhelpen.</p>
						</div>

						<div class="u-gridCol4 Coll-4">
							<h3 class="vis-hidden">Specialisme</h3>
							<p>Een verstopping of storing komt altijd onverwacht en altijd ongelegen. Daarom hebben wij 24 uur per dag en 7 dagen per week een servicemonteur beschikbaar. Deze monteur beschikt over een bus met hogedrukunit, frees- en veerapparatuur, handgereedschap alsmede materialen ten behoeve van het verrichten van kleine (nood)reparaties.</p>
						</div>
					</div><!-- u-gridContainer -->
				</div>
				
				<div class="u-gridContainer">				
					<h3>Hulpdienst</h3>
					<p>Vragen over rioleringen, verstoppingen, het onderhoud en dergelijke kunnen altijd via onze telefonische hulpdienst beantwoord worden. Gebruik hiervoor het telefoonnummer.</p>
				</div><!-- u-gridContainer -->
				
				
				<div class="red-bg">
					<div class="mobiel-pinnen-div">
						<h3>U kunt bij ons mobiel pinnen!</h3>
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/svg's/mobiel_pinnen.svg">
					</div>
					
					<a href="">
						<div class="Button meer-info">
							Meer informatie
						</div>
					</a>
				</div>				
				
				<div class="u-gridContainer">
					<?php the_content(); ?>
				</div>
			</div><!-- Content-entry-->
		</article>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>

