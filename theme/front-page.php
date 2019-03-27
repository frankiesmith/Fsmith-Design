<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fivehdstarter
 */

get_header();
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
while (have_posts()):
    the_post();
    
    get_template_part('template-parts/content', 'page');
endwhile; // End of the loop.
?>

    <div class="hero" data-stellar-background-ratio="0.5">
      <div class="hero-content">
        <div class="logo">
          <?php
echo file_get_contents(get_template_directory() . '/img/logo.svg');
?>
       </div>
          <div class="typewriter">
              <h1>Hi, I'm Frankie.</h1>
          </div>
        <h2>I'm a UX Designer and Developer.</h2>
      </div>
      <div href="#about-me" class="scroll-down">
        <h3>Learn more about what I do</h3>
        <?php
echo file_get_contents(get_template_directory() . '/img/scroll.svg');
?>
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
        <p>Designer & Developer with a passion for UX and
thoughtful design. I like to keep myself informed
in the ever changing world of technology by
attending conferences and networking events.
Outside of work, I enjoy a good road trip and
playing guitar with my band.</p>
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
          <p>ParTea makes booze infusers – blends of organic fruits, herbs and spices packaged in “tea bags” at perfect proportions to flavor your favorite alcohol.</p>
        </div>
        <a href="https://www.infusethebooze.com/" target="_blank" class="button">View Website</a>
      </div>
      <div class="column-2 featured-image partea">
      </div>
    </div>
    <div class="wrapper reverse">
      <div class="column column-1">
        <div class="content">
          <h2>New England Commission of Higher Education (NECHE)</h2>
          <h3>UX, Development, WordPress</h3>
          <p>The New England Commission of Higher Education (NECHE) is the regional accreditation agency for colleges and universities in the six New England states: Connecticut, Maine, Massachusetts, New Hampshire, Rhode Island, and Vermont. Three institutions in Greece, three in Switzerland, two in Lebanon, and one in Bulgaria, Bermuda, and Morocco, respectively, are also affiliated with NECHE.</p>
        </div>
        <a href="https://www.neche.org/" target="_blank" class="button">View Website</a>
      </div>
      <div class="column column-2 featured-image neche">
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
        <div class="featured yarmouth">
          <img class="show" aria-haspopup="true" src='/wp-content/uploads/2019/02/yarmouth.jpg' alt=''>
              <div class="modal-overlay">
        <div class="modal"><a class="close-modal"><svg viewBox="0 0 20 20">
            <path fill="#4C4C4E" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
          </svg></a>
          <div class="modal-content">
        <div class="wrapper">
      <div class="column-1">
        <div class="content">
          <h2>Yarmouth Chamber of Commerce</h2>
          <h3>Design, UX, Development, WordPress</h3>
          <p>Yarmouth embodies the spirit of Cape Cod – from the coastlines of Nantucket Sound and Cape Cod Bay, to the shops and businesses anchoring our community, the locals residing here for generations, and the extended families returning year after year.</p>
        </div>
        <a href="https://www.yarmouthcapecod.com/" target="_blank" class="button">View Website</a>
      </div>
      <div class="column-2 featured-image yarmouth">
      </div>
    </div>
          </div>
        </div>
      </div>
            </div>
        <div class="featured">
          <img class="show" aria-haspopup="true" src='/wp-content/uploads/2019/02/cambria.jpg' alt=''>
              <div class="modal-overlay">
        <div class="modal"><a class="close-modal"><svg viewBox="0 0 20 20">
            <path fill="#4C4C4E" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
          </svg></a>
          <div class="modal-content">
        <div class="wrapper">
      <div class="column-1">
        <div class="content">
          <h2>Cambria Hotels</h2>
          <h3>Development</h3>
          <p>Cambria Hotels is a modern and stylish hotel chain affiliated with Choice Hotels. Their market is made up of mostly young professionals. This project features the UI for the hotel's wifi service. This is what a guest sees when they want to connect.</p>
        </div>
        <a href="http://cambria-internet-access.webflow.io/access-form" target="_blank" class="button">View Website</a>
      </div>
      <div class="column-2 featured-image cambria">
      </div>
    </div>
          </div>
        </div>
      </div>
        </div>
        <div class="featured">
          <img class="show" aria-haspopup="true" src='/wp-content/uploads/2019/02/curry.jpg' alt=''>
              <div class="modal-overlay">
        <div class="modal"><a class="close-modal"><svg viewBox="0 0 20 20">
            <path fill="#4C4C4E" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
          </svg></a>
          <div class="modal-content">
        <div class="wrapper">
      <div class="column-1">
        <div class="content">
          <h2>Curry College</h2>
          <h3>Design, UX, Development</h3>
          <p>Curry College is a private institution located in Milton, MA. This is a portal that was designed for prospective students to use throughout the whole application process. This allows students to have all their records available in one place and to make communication simple between the prospective student and the institution.</p>
        </div>
        <a href="http://curry-portal-forms.webflow.io" target="_blank" class="button">View Website</a>
      </div>
      <div class="column-2 featured-image curry">
      </div>
    </div>
          </div>
        </div>
      </div>
        </div>
        <div class="featured">
          <img class="show" aria-haspopup="true" src='/wp-content/uploads/2019/02/triad.jpg' alt=''>
              <div class="modal-overlay">
        <div class="modal"><a class="close-modal"><svg viewBox="0 0 20 20">
            <path fill="#4C4C4E" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
          </svg></a>
          <div class="modal-content">
        <div class="wrapper">
      <div class="column-1">
        <div class="content">
          <h2>Triad Advertising Companies</h2>
          <h3>Design, UX, Development, WordPress</h3>
          <p>The Triad Advertising Companies builds lasting brands by making advertising approachable, effective, and powerful. Connecting brands to consumers in tangible, digital, and promotional ways.</p>
        </div>
        <a href="https://www.triadadvertising.com/" target="_blank" class="button">View Website</a>
      </div>
      <div class="column-2 featured-image triad">
      </div>
    </div>
          </div>
        </div>
      </div>
        </div>
        <div class="featured">
          <img class="show" aria-haspopup="true" src='/wp-content/uploads/2019/02/rad-dads.jpg' alt=''>
              <div class="modal-overlay">
        <div class="modal"><a class="close-modal"><svg viewBox="0 0 20 20">
            <path fill="#4C4C4E" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
          </svg></a>
          <div class="modal-content">
        <div class="wrapper">
      <div class="column-1">
        <div class="content">
          <h2>The Rad Dads</h2>
          <h3>Design, UX, Development</h3>
          <p>The Rad Dads are a four piece Alternative/Indie band from Boston, MA.</p>
        </div>
        <a href="https://theraddads.netlify.com/index.html" target="_blank" class="button">View Website</a>
      </div>
      <div class="column-2 featured-image rad-dads">
      </div>
    </div>
          </div>
        </div>
      </div>
        </div>
        <div class="featured">
          <img class="show" aria-haspopup="true" src='/wp-content/uploads/2019/02/mbta-2.jpg' alt=''>
              <div class="modal-overlay">
        <div class="modal"><a class="close-modal"><svg viewBox="0 0 20 20">
            <path fill="#4C4C4E" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
          </svg></a>
          <div class="modal-content">
        <div class="wrapper">
      <div class="column-1">
        <div class="content">
          <h2>MBTA Rail Vision</h2>
          <h3>UX, Development</h3>
          <p>MBTA Rail Vision will identify cost-effective strategies to transform the existing Commuter Rail system into one that better supports improved mobility and economic competitiveness in the Greater Boston region. This survey was built in order to collect information from people who do not usually commute via commuter rail. All results from survey are sent to the Rail Vision team to be evaluated.</p>
        </div>
        <a href="https://mbtarailvisionsurvey.com" target="_blank" class="button">View Website</a>
      </div>
      <div class="column-2 featured-image mbta">
      </div>
    </div>
          </div>
        </div>
      </div>
        </div>
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
echo do_shortcode('[wpforms id="19" title="false" description="false"]');
?>
       </div>
        <div class="resume"><a href="/wp-content/uploads/2019/03/frankie-smith-resume.pdf" target=_blank>VIEW RESUME</a></div>
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