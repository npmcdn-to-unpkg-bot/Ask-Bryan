<?php

// calls header.php

get_header();

// loads posts if there is any

if(have_posts()) :
  while(have_posts()) : the_post(); ?>

  <!-- content container -->

    <div class="question-box">

      <div class="title-box">

        <p><?php the_title(); ?></p>

      </div>

      <div class="answer-box">

        <p><?php the_content(); ?></p>

      </div>

    </div>

  <?php endwhile;

// if no posts, this is displayed

  else :
    echo "<p class='nothing-to-display'>Nothing found on that topic</p>";

  endif;

// loads in footer

get_footer()

 ?>
