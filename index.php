<?php

get_header(); ?>

<!-- example react component -->
<div id="render-react-example-here"></div>
<!-- end example react component -->

<?php if (have_posts()) {
  while(have_posts()) {
    the_post(); ?>
    
  <?php }
}

get_footer();