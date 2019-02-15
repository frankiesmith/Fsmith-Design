<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fivehdstarter
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'page' );

    endwhile; // End of the loop.
    ?>

    <div class="hero" data-stellar-background-ratio="0.5">
      <div href="#about-me" class="scroll-down">
        <?php echo file_get_contents( get_template_directory() . '/img/scroll.svg' ); ?>
      </div>
</div>
<section id="about-me" class="about-me">
  <div class="title-container">
    <div class="section-title">
      <h1>About Me</h1>
    </div>
  </div>
  <div class="container">
    <div class="wrapper">
      <div class="column column-1 featured-image bio">
      </div>
      <div class="column column-2">
        <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus posuere ullamcorper lectus vitae sollicitudin. Maecenas ac efficitur lorem. In varius, metus a tempor fermentum, sem nisi efficitur tortor, congue euismod mi justo sit amet massa. Morbi gravida bibendum sapien, ut cursus augue convallis sit amet. Vestibulum gravida vel dolor eu dignissim. Etiam luctus est vel consectetur auctor. Sed nisl turpis, pellentesque ac velit sed, auctor vehicula felis. Pellentesque consequat vehicula tempus. Aliquam nec eleifend nunc, a malesuada quam. Mauris ac faucibus tortor.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="featured-work" class="featured-work">
  <div class="title-container">
    <div class="section-title">
      <h1>Featured Work</h1>
    </div>
  </div>
  <div class="container">
    <div class="wrapper">
      <div class="column-1">
        <div class="content">
          <h2>Partea Booze Infusers</h2>
          <h3>Design, UX, Development, WordPress</h3>
          <p>ParTea makes booze infusers – blends of organic fruits, herbs and spices packaged in “tea bags” at perfect proportions to flavor your favorite alcohol</p>
        </div>
        <a href="https://www.infusethebooze.com/" target="_blank" class="button">View Website</a>
      </div>
      <div class="column-2 featured-image">
      </div>
    </div>
    <div class="wrapper reverse">
      <div class="column column-1">
        <div class="content">
          <h2>Partea Booze Infusers</h2>
          <h3>Design, UX, Development, WordPress</h3>
          <p>ParTea makes booze infusers – blends of organic fruits, herbs and spices packaged in “tea bags” at perfect proportions to flavor your favorite alcohol</p>
        </div>
        <a href="https://www.infusethebooze.com/" target="_blank" class="button">View Website</a>
      </div>
      <div class="column column-2 featured-image">
      </div>
    </div>
  </div>
</section>
<section id="more-projects" class="more-projects">
  <div class="title-container">
    <div class="section-title">
      <h1>More Projects</h1>
    </div>
  </div>
    <div class="container">
      <div class="wrapper">
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1270439/Neche.jpg' alt=''>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1270439/Neche.jpg' alt=''>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1270439/Neche.jpg' alt=''>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1270439/Neche.jpg' alt=''>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1270439/Neche.jpg' alt=''>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1270439/Neche.jpg' alt=''>
      </div>
    </div>
</section>
<section id="contact" class="contact">
  <div class="title-container">
    <div class="section-title">
      <h1>Contact</h1>
    </div>
  </div>
  <div class="container">
    <div class="wrapper">
      <div class="column content">
        <div class="form-wrapper">
        <?php
        echo do_shortcode('[wpforms id="19" title="false" description="false"]')
          ?>
        </div>
      </div>
      <div class="column something">
      </div>
    </div>
  </div>
</section>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
