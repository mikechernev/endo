<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

<section id="HomepageFeature">
	<section id="spotlight-slider" class="big">
		<ul>
			<li id="spotlight-slider-0"><a title="Repairs"
				href="http://endoservice.eu/repairs/"> <img
					class="spotlight-slider-image big"
					src="/wp-content/themes/twentyeleven/images/slider/Slider-main-tor2.jpg"
					alt="" />
			</a>
				<div class="description">
					<h2>Repairs</h2>
					We repair endoscopic equipment <a title="Repairs"
						href="http://endoservice.eu/repairs/">Full list of repairing
						services</a>

				</div>
				<p class="nav big">
					<img
						src="/wp-content/themes/twentyeleven/images/slider/Slider-main-tor2-thumb.jpg"
						alt="" width="50" height="25" />
				</p>
			</li>
			<li id="spotlight-slider-1"><a title="Sales"
				href="http://endoservice.eu/sales/"> <img
					class="spotlight-slider-image big"
					src="/wp-content/themes/twentyeleven/images/slider/Ghostrider.jpg"
					alt="" />
			</a>
				<div class="description">
					<h2>Sales</h2>
					We sell endoscopes <a class="wikia-button secondary"
						href="http://marvel-movies.wikia.com/wiki/Ghost_Rider:_Spirit_of_Vengeance">
					</a><a title="Sales" href="http://endoservice.eu/sales/"> View
						price list</a>

				</div>
				<p class="nav big">
					<img
						src="/wp-content/themes/twentyeleven/images/slider/Ghostrider-thumb.jpg"
						alt="" width="50" height="25" />
				</p>
			</li>
			<li id="spotlight-slider-2"><a title="Partners"
				href="http://endoservice.eu/partners/"> <img
					class="spotlight-slider-image big"
					src="/wp-content/themes/twentyeleven/images/slider/Slider-main-skyrim.jpeg"
					alt="" />
			</a>
				<div class="description">
					<h2>Partners</h2>
					We have partners all around the world <a
						class="wikia-button secondary"
						href="http://elderscrolls.wikia.com/wiki/Portal%3AThe_Elder_Scrolls_V%3A_Skyrim">
					</a><a title="Partners" href="http://endoservice.eu/partners/">
						View our partners</a>

				</div>
				<p class="nav big">
					<img
						src="/wp-content/themes/twentyeleven/images/slider/Slider-main-skyrim-thumb.jpg"
						alt="" width="50" height="25" />
				</p>
			</li>
			<li id="spotlight-slider-3"><a title="Gallery"
				href="http://endoservice.eu/gallery/"> <img
					class="spotlight-slider-image big"
					src="/wp-content/themes/twentyeleven/images/slider/Slider-main-healthyrecipes.jpg"
					alt="" />
			</a>
				<div class="description">
					<h2>Gallery</h2>
					<a class="wikia-button secondary"
						href="http://healthyrecipes.wikia.com/wiki/Healthy_Recipes_Wiki">
					</a><a title="Gallery" href="http://endoservice.eu/gallery/"> View
						our gallery</a>

				</div>
				<p class="nav big">
					<img
						src="/wp-content/themes/twentyeleven/images/slider/Slider-main-healthyrecipes-thumb.jpg"
						alt="" width="50" height="25" />
				</p>
			</li>
		</ul>
	</section>
</section>

		<div id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>