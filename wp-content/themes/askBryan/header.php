<!DOCTYPE html>
<html>
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>AskBryan</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/animate.css" media="screen" />

  </head>

  <body <?php body_class(); ?>>

    <!--Header-->



      <header>

        <!--Mobile Nav-->

        <div class="search-button-mobile">

          <img src="http://localhost/wordpress/wp-content/uploads/2016/05/search.svg">

        </div>

        <div class="nav-button">

          <span></span>
          <span></span>
          <span></span>

        </div>

        <div id="pop-nav" class="pop-wrap">

        <div class="slide-menu">

          <div class="content-container">

            <div class="exit-button">

              <img src="http://localhost/wordpress/wp-content/uploads/2016/05/xButton.svg"/>

            </div>

              <div id="bryan">

                <img src="http://localhost/wordpress/wp-content/uploads/2016/05/bryanIllustrations-1.svg"/>

              </div>

              <h2>Why ask Bryan a question?</h2>

              <p>Bryan offers a unique perspective to any topic inquired of him.
              His unmatched wisdom and always-insightful point of view create for interesting
            feedback and more-than useful advice.</p>

              </div>

          </div>

        </div>

        <div id="pop-search-mobile" class="pop-wrap">

          <div class="search-mobile">

            <div class="exit-button">

              <img src="http://localhost/wordpress/wp-content/uploads/2016/05/xButton.svg"/>

            </div>

            <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">

              <div class="search-input">
                <input
                  type="text"
                  size="18"
                  value="<?php echo wp_specialchars($s, 1); ?>"
                  name="s" id="s"
                  />
              </div>

              <button style="margin-top: 1em" type="submit" value="search" class="search-button"><p>Search
              </p></button>

            </form>

          </div>

        </div>

        <!--button positioned within search input form-->

        <div class="search-container">

          <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">

            <button type="submit" value="search" class="search-button">
              <img src="http://localhost/wordpress/wp-content/uploads/2016/05/search.svg">
            </button>

            <div class="search-input">
              <input
                type="text"
                size="18"
                value="<?php echo wp_specialchars($s, 1); ?>"
                name="s" id="s"
                placeholder="Search" />
            </div>

          </form>

        </div>

        <div class="hero-image">

          <img src="http://localhost/wordpress/wp-content/uploads/2016/05/justTextLogo.svg"/>

        </div>

        <div class="about-link">

          <a href="#">ABOUT</a>

        </div>


      </header>

      <!--Entire wrap and children show on click 'about'-->

      <div id="pop1" class="pop-wrap">

        <div class="pop-container">

          <div class="about-popup">

            <!--Closes the pop-wrap-->

            <div class="exit-button">

              <img src="http://localhost/wordpress/wp-content/uploads/2016/05/xButton.svg"/>

            </div>

            <img src="http://localhost/wordpress/wp-content/uploads/2016/05/bryanIllustrations-1.svg"/>

            <h2>Why ask Bryan a question?</h2>

            <p>Bryan offers a unique perspective to any topic inquired of him.
            His unmatched wisdom and always-insightful point of view create for interesting
          feedback and more-than useful advice.</p>

          </div>

        </div>

      </div>

      <!--Question From pop-up-->

      <div id="pop2" class="pop-wrap">

        <div class="question-form-container">

          <div class="question-popup">


            <div class="exit-button">

              <img src="http://localhost/wordpress/wp-content/uploads/2016/05/xButton.svg"/>

            </div>

            <h2>Ask Bryan a Question</h2>

              <form id="question-form" action="https://formspree.io/your@email.com"
              method="POST">

                <div class="small-fields">
                  <input type="text" name="name" placeholder="Name">
                  <input type="email" name="_replyto" placeholder="Email">
                </div>
                <textarea type="message" placeholder="Question"></textarea>
                <button type="submit" value="Send">Submit</button>
              </form>

          </div>

        </div>

      </div>



      <!--Used to wrap and contain everything-->

    <div class="wrapper">

      <!--Main content container-->

    <section class="content-section">
