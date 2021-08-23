<?php 
include('../path.php');
$page = 'blog';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?php $addApp->includes('open/links_top.php', 'Our Blog'); ?>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<?php $addApp->includes('open/header.php', '', $page); ?>
        <!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Blog</h1>
				<span>Our Latest News in Masonry Layout</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Blog</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Posts
					============================================= -->
					<div id="posts" class="post-grid grid-container post-masonry grid-3 clearfix">

						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php echo BASE_URL . '/assets/open/'?>images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="<?php echo BASE_URL . '/assets/open/'?>images/blog/small/17.jpg" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus.</p>
								<a href="blog-single.html"class="more-link">Read More</a>
							</div>
						</div>

					   <div class="entry clearfix">
							<div class="entry-image">
								<iframe src="http://player.vimeo.com/video/87701971" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single-full.html">This is a Standard post with an Embedded Video</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 16th Feb 2014</li>
								<li><a href="blog-single-full.html#comments"><i class="icon-comments"></i> 19</a></li>
								<li><a href="#"><i class="icon-film"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt!</p>
								<a href="blog-single-full.html"class="more-link">Read More</a>
							</div>
						</div>

						<div class="entry clearfix">
							<div class="entry-image">
								<div class="fslider" data-arrows="false" data-lightbox="gallery">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide"><a href="<?php echo BASE_URL . '/assets/open/'?>images/blog/full/10.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo BASE_URL . '/assets/open/'?>images/blog/masonry/10.jpg" alt="Standard Post with Gallery"></a></div>
											<div class="slide"><a href="<?php echo BASE_URL . '/assets/open/'?>images/blog/full/20.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo BASE_URL . '/assets/open/'?>images/blog/masonry/20.jpg" alt="Standard Post with Gallery"></a></div>
											<div class="slide"><a href="<?php echo BASE_URL . '/assets/open/'?>images/blog/full/21.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo BASE_URL . '/assets/open/'?>images/blog/masonry/21.jpg" alt="Standard Post with Gallery"></a></div>
										</div>
									</div>
								</div>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single-small.html">This is a Standard post with a Slider Gallery</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 24th Feb 2014</li>
								<li><a href="blog-single-small.html#comments"><i class="icon-comments"></i> 21</a></li>
								<li><a href="#"><i class="icon-picture"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
								<a href="blog-single-small.html"class="more-link">Read More</a>
							</div>
						</div>

						<div class="entry clearfix">
							<div class="entry-image">
								<blockquote>
									<p>"When you are courting a nice girl an hour seems like a second. When you sit on a red-hot cinder a second seems like an hour. That's relativity."</p>
									<footer>Albert Einstein</footer>
								</blockquote>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 3rd Mar 2014</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 23</a></li>
								<li><a href="#"><i class="icon-quote-left"></i></a></li>
							</ul>
						</div>

						<div class="entry clearfix">
							<div class="entry-image clearfix">
								<div class="portfolio-single-image masonry-thumbs grid-4" data-big="3" data-lightbox="gallery">
									<a href="<?php echo BASE_URL . '/assets/open/'?>images/blog/full/2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo BASE_URL . '/assets/open/'?>images/blog/small/2.jpg" alt=""></a>
									<a href="<?php echo BASE_URL . '/assets/open/'?>images/blog/full/3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo BASE_URL . '/assets/open/'?>images/blog/small/3.jpg" alt=""></a>
									<a href="<?php echo BASE_URL . '/assets/open/'?>images/blog/full/6-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo BASE_URL . '/assets/open/'?>images/blog/small/6-1.jpg" alt=""></a>
									<a href="<?php echo BASE_URL . '/assets/open/'?>images/blog/full/6-2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo BASE_URL . '/assets/open/'?>images/blog/small/6-2.jpg" alt=""></a>
									<a href="<?php echo BASE_URL . '/assets/open/'?>images/blog/full/12.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo BASE_URL . '/assets/open/'?>images/blog/small/12.jpg" alt=""></a>
									<a href="<?php echo BASE_URL . '/assets/open/'?>images/blog/full/12-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo BASE_URL . '/assets/open/'?>images/blog/small/12-1.jpg" alt=""></a>
									<a href="<?php echo BASE_URL . '/assets/open/'?>images/blog/full/13.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo BASE_URL . '/assets/open/'?>images/blog/small/13.jpg" alt=""></a>
									<a href="<?php echo BASE_URL . '/assets/open/'?>images/blog/full/18.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo BASE_URL . '/assets/open/'?>images/blog/small/18.jpg" alt=""></a>
									<a href="<?php echo BASE_URL . '/assets/open/'?>images/blog/full/19.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo BASE_URL . '/assets/open/'?>images/blog/small/19.jpg" alt=""></a>
								</div>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single-thumbs.html">This is a Standard post with Masonry Thumbs Gallery</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 3rd Mar 2014</li>
								<li><a href="blog-single-thumbs.html#comments"><i class="icon-comments"></i> 21</a></li>
								<li><a href="#"><i class="icon-picture"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo!</p>
								<a href="blog-single-thumbs.html"class="more-link">Read More</a>
							</div>
						</div>

						<div class="entry clearfix">
							<div class="entry-image">
								<a href="http://themeforest.net" class="entry-link" target="_blank">
									Themeforest.net
									<span>- http://themeforest.net</span>
								</a>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 17th Mar 2014</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 26</a></li>
								<li><a href="#"><i class="icon-link"></i></a></li>
							</ul>
						</div>

						<div class="entry clearfix">
							<div class="entry-image">
								<div class="card">
									<div class="card-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, fuga optio voluptatibus saepe tenetur aliquam debitis eos accusantium!
									</div>
								</div>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 21st Mar 2014</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 11</a></li>
								<li><a href="#"><i class="icon-align-justify2"></i></a></li>
							</ul>
						</div>

						<div class="entry clearfix">
							<div class="entry-image clearfix">
								<div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000" data-lightbox="gallery">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide"><a href="<?php echo BASE_URL . '/assets/open/'?>images/blog/full/6-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo BASE_URL . '/assets/open/'?>images/blog/masonry/6-1.jpg" alt="Standard Post with Gallery"></a></div>
											<div class="slide"><a href="<?php echo BASE_URL . '/assets/open/'?>images/blog/full/6-2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo BASE_URL . '/assets/open/'?>images/blog/masonry/6-2.jpg" alt="Standard Post with Gallery"></a></div>
											<div class="slide"><a href="<?php echo BASE_URL . '/assets/open/'?>images/blog/full/12-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo BASE_URL . '/assets/open/'?>images/blog/masonry/12-1.jpg" alt="Standard Post with Gallery"></a></div>
											<div class="slide"><a href="<?php echo BASE_URL . '/assets/open/'?>images/blog/full/22.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo BASE_URL . '/assets/open/'?>images/blog/masonry/22.jpg" alt="Standard Post with Gallery"></a></div>
										</div>
									</div>
								</div>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single-thumbs.html">This is a Standard post with Fade Gallery</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 3rd Apr 2014</li>
								<li><a href="blog-single-thumbs.html#comments"><i class="icon-comments"></i> 21</a></li>
								<li><a href="#"><i class="icon-picture"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo!</p>
								<a href="blog-single-thumbs.html"class="more-link">Read More</a>
							</div>
						</div>

						<div class="entry clearfix">
							<div class="entry-image clearfix">
								<iframe width="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/115823769&amp;auto_play=false&amp;hide_related=true&amp;visual=true"></iframe>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">This is an Embedded Audio Post</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 28th April 2014</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 16</a></li>
								<li><a href="#"><i class="icon-music2"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum.</p>
								<a href="blog-single.html"class="more-link">Read More</a>
							</div>
						</div>

						<div class="entry clearfix">
							<div class="entry-image">
								<iframe width="560" height="315" src="http://www.youtube.com/embed/SZEflIVnhH8" frameborder="0" allowfullscreen></iframe>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single-full.html">This is a Standard post with a Youtube Video</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 30th Apr 2014</li>
								<li><a href="blog-single-full.html#comments"><i class="icon-comments"></i> 34</a></li>
								<li><a href="#"><i class="icon-film"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt!</p>
								<a href="blog-single-full.html"class="more-link">Read More</a>
							</div>
						</div>

					</div><!-- #posts end -->

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
        <?php $addApp->includes('open/footer.php'); ?>

</div><!-- #wrapper end -->

<?php $addApp->includes('open/links_bottom.php'); ?>

</body>
</html>