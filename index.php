<?php 
/**
 * Index Template
 *
 * The index template is the "fallback" template. What this means is that it will be used if a more specific 
 * template is not found to display the content of a page.
 *
 * @package Hybrid
 * @subpackage Template
 * @link http://themehybrid.com/themes/hybrid/template-hierarchy
*/

get_header(); // Loads the header.php template. ?>

				<div id="container">
					<?php if ( have_posts() ) : ?>

						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'content', ( post_type_supports( get_post_type(), 'post-formats' ) ? get_post_format() : get_post_type() ) ); ?>

						<?php endwhile; ?>

					<?php else : ?>

						<?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>

					<?php endif; ?>
					
					<!-- Article -->
					<!--<div class="article">
						<!-- Single Column -->
						<!--<div class="article-header">
							<h1>Page Without Sidebar</h1>
						</div>
						
						<div class="article-content">
							<p class="summary">They see what it is, of course; the sharper-eyed among them can even read the name on the body of the plummeting plane before it disappears below the treeline. </p>
							<p>Anyone who has ever cared for a terminal patient will tell you that there comes a tipping point when denial dies and acceptance finds its way in. For most people in Chester's Mill, the tipping point came at midmorning on October twenty-fifth, while they stood either alone or with their neighbors, watching as more than three hundred people plunged into the woods of TR-90.</p>
							<!-- End Single Column -->
							
							<!-- Two Column -->
							<!--<div class="col left">
								<h2>Subheader, 2-Column</h2>
								<p>Earlier that morning, perhaps fifteen percent of the town was wearing blue 'solidarity' armbands; by sundown on this Wednesday in October, it will be twice that. When the sun conies up tomorrow, it will be over fifty percent of the population.</p>
								<p>Denial gives way to acceptance; acceptance breeds dependence. Anyone who's ever cared for a terminal patient will tell you that, too. Sick people need someone who will bring them their pills and glasses of cold sweet juice to wash them down with.</p>
							</div>
							<div class="col right">
								<h2>Subheader, 2-Column</h2>
								<p>Big Jim was indeed in his Town Hall office, but he had killed the phone so he could work on both speeches -- the one to the cops tonight, the one to the entire town tomorrow night -- without interruption.</p>
								<h3>SUBHEADER</h3>
								<p>He found himself standing next to Al Timmons, the Town Hall janitor. Al pointed north, high in the sky, where smoke was still rising.</p>
							</div>
							<div class="cl">&nbsp;</div>
						</div>
						
						<div class="article-footer">
						
						</div>
						<!-- End Two Column -->
					<!--</div>
					<!-- End Article -->
					
					<!-- Article -->
					<!--<div class="article widgets-present left">
						<div class="article-header">
							<h1>Page with sidebar</h1>
						</div>
						
						<div class="article-content">
							<p class="summary">'It was an airplane!' Al shouted. 'And a big one! Christ! Didn't they get the word?'</p>
							<p>Rennie waited. Main Street was full of people staring up into the sky with their mouths gaped open. To Rennie they looked like sheep dressed in human clothing. Tomorrow night they would crowd into the Town Hall and go baaa baaa baaa, when'll it get better?</p>
							<div class="col left">
								<h2>Subheader</h2>
								<p>Cox came back on. Now he sounded weary as well as stunned. Not the same man who had hectored Big Jim about stepping down. And that's the way I want you to sound, pal, Rennie thought. Exactly the way.</p>
								<p>'My initial information is that Air Ireland flight 179 has struck the Dome and exploded. It originated in Shannon and was bound for Boston. </p>
							</div>
							<div class="col right">
								<h2>Subheader, 2-column</h2>
								<p>It was much more than a second; more than a minute. Big Jim's heart had been slowing toward its normal speed (if a hundred and twenty beats per minute can be so characterized), but now it sped up again and took one of those looping misbeats. He coughed and pounded at his chest. His heart seemed almost to settle, then went into a full-blown arrhythmia. </p>
							</div>
							<div class="cl">&nbsp;</div>
						</div>
						
						<div class="article-footer">
						
						</div>
					</div>
					<!-- End Article -->

					<!-- Sidebar -->
					<!--<div id="sidebar" class="right">
						<h3>Page Sidebar</h3>
						<ul>
							<li>Log in/out, feed and WordPress links</li>
							<li>An advanced widget that gives you total control over the output of your author lists.</li>
							<li>Bookmarks</li>
							<li>Calendar</li>
							<li>Categories</li>
							<li>Meta</li>
							<li>Navigation Menu</li>
							<li>Pages</li>
							<li>Recent Comments</li>
							<li>RSS</li>
							<li>Search</li>
							<li>Tags</li>
							<li>Text</li>
						</ul>
					</div>
					<!-- End Sidebar -->
					<!--<div class="cl">&nbsp;</div>-->
					<?php get_template_part( 'loop-nav' ); // Loads the loop-nav.php template. ?>
				</div>
				<!-- End Container -->

<?php get_footer(); // Loads the footer.php template. ?>