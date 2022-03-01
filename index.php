<?php get_header(); ?>

  <main>
    <div class="container">
      <h1 class="mt-5 mb-5 text-center">MENU</h1>

    <hr>

      <div class="row">
        <div class="col-12 text-center">
          <h2 class="mb-5 font-weight-bold">Pizzas - cost per slice</h2>
        </div>
      </div>

    
    <?php 
    $loop = new WP_Query( array( 'post_type' => 'pizzas', 'posts_per_page' => 10 ) ); 

    while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="row mb-5">
      <div class="col-12 col-md-2 offset-md-1 d-flex flex-column align-items-center">

        <img class="pizza-item-img mb-2"
          src="<?php echo get_the_post_thumbnail_url(); ?>"
          alt="Food Image"
        />
      </div>

      <div class="col-12 offset-md-1 col-md-6 text-center text-md-start">
        <h3 class="menu-item-heading">
        <span class="menu-item-name">
        <?php the_title(); ?> 
      </span>

          <!-- render price onto page -->
          <span class="menu-item-price"> $<?php echo get_post_meta($post->ID, 'price', true); ?>
          </span>
          </h3>
  
    <p class="mt-5">
      <?php the_content(); ?>
    </p>
    </div>
  </div>

    <?php endwhile; ?> <!-- end pizza section -->

    <hr>

      <!-- sauces -->

    <div class="row">
        <div class="col-12 text-center">
          <h2 class="mb-5 font-weight-bold">Sauces</h2>
        </div>
      </div>

          <?php 

          $loop = new WP_Query( array( 'post_type' => 'sauces', 'posts_per_page' => 10 ) ); 

          while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="container">
              <div class="row">
                <div class="col-sm-2">
                  <div class="text-sm-end"><strong><?php the_title(); ?></strong></div>
              </div>
            <div class="col-sm-10">
              <?php the_content(); ?>
            </div>
            </div>
          </div>

            <?php endwhile; ?> <!-- end sauces -->

            <hr>

      <!-- Toppings -->

      <div class="row">
        <div class="col-12 text-center">
          <h2 class="mb-5 font-weight-bold">Toppings</h2>
        </div>
      </div>

      <?php 
        $loop = new WP_Query( array( 'post_type' => 'toppings', 'posts_per_page' => 10 ) ); 

        while ( $loop->have_posts() ) : $loop->the_post(); ?>

          <div class="container">
            <div class="row">
              <div class="col">
                <div class="text-center"><strong><?php the_title(); ?></strong></div>
            </div>
          </div>
        </div>

          <?php endwhile; ?>  <!-- end toppings -->

    <hr>

      <!-- sides -->
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="mb-5 font-weight-bold">Sides</h2>
        </div>
      </div>

      <?php 
    $loop = new WP_Query( array( 'post_type' => 'sides', 'posts_per_page' => 10 ) ); 

    while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="row mb-5">
      <div class="col-12 col-md-2 offset-md-1 d-flex flex-column align-items-center">
        <img class="sides-item-img mb-2"
          src="<?php echo get_the_post_thumbnail_url(); ?>"
          alt="Food Image"
        />
      </div>

      <div class="col-12 offset-md-1 col-md-6 text-center text-md-start">
        <h3 class="menu-item-heading">
        <span class="menu-item-name">
        <?php the_title(); ?> 
      </span>

          <!-- render price onto page -->
          <span class="menu-item-price"> $<?php echo get_post_meta($post->ID, 'price', true); ?>
          </span>
          </h3>
  
    <p class="mt-5">
      <?php the_content(); ?>
    </p>
    </div>
  </div>

    <?php endwhile; ?>   <!-- end sides section -->

      <hr>

    <div class="row">
        <h2 id="order-now" class="col-12 text-center mt-5 mb-5"><a href="">Order Your Hot Pizza Now!</a></h2>
    </div>

    <hr>

      <!-- Location Section -->
<div class="row" id="locations">
    <div class="col-12 text-center">
      <h2 class="mb-5 font-weight-bold">Locations</h2>
    </div>
  </div>

      <?php 

      $loop = new WP_Query( array( 'post_type' => 'locations', 'posts_per_page' => 10 ) ); 

      while ( $loop->have_posts() ) : $loop->the_post(); ?>


        <div class="container">

          <div class="row">
            <div class="col-sm-2">
              <div class="text-sm-end"><strong><?php the_title(); ?></strong></div>
          </div>
        <div class="col-sm-10">
          <?php the_content(); ?>
        </div>
       
        <!-- rendering map from advanced custom fields -->
        <?php 
        $map = get_field('map');
        if( $map ): ?>
            <a class="button text-center mb-5" href="<?php echo esc_url( $map ); ?>">Find Us!</a>
        <?php endif; ?>
        <!-- end map -->

        </div>
      </div>

        <?php endwhile; ?> <!-- End Location Section -->
          
        <hr>

<!-- story -->

<?php 
$loop = new WP_Query(array('post_type' => 'our_story', 'posts_per_page' => 1)); 

while ($loop->have_posts()) : $loop->the_post(); ?>

<div id="page-story" class="mt-5 row">
        <h3 class="mb-3 text-center col-12">Our Story</h3>
    <article class="mb-5 col-12 offset-md-1 col-md-10 text-center text-md-start">
      <?php the_content(); ?>
  </article>
  </div>

  <?php endwhile; ?> <!-- end story -->

  <hr>

  <!-- contact section -->

  <?php 
$loop = new WP_Query(array('post_type' => 'contact', 'posts_per_page' => 1)); 

while ($loop->have_posts()) : $loop->the_post(); ?>

<div id="contact" class="mt-5 row">
        <h3 class="mb-2 text-center col-12">Contact Us</h3>
    <article class="mb-5 col-12 offset-md-1 col-md-10 text-center">
      <?php the_content(); ?>
  </article>
  </div>

  <?php endwhile; ?>  <!-- end contact section -->


    </main>
    </div>
  </div>

  </body>

<?php get_footer(); ?>  