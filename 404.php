<!-- The template for displaying 404 pages (Not Found) -->

<?php get_header(); ?>

<!-- primary closing tag in footer -->
<div id="primary" class="content-area text-center mt-5 mb-5"> 

        <!-- content closing tag in footer -->
        <div id="content" class="site-content" role="main">

            <div class="height-spacer">
 
                <header class="page-header">
                    <h1 class="page-title"><?php _e( 'Not Found', 'pizzeria' ); ?></h1>
                </header>
    
                <div class="page-wrapper">
                    <div class="page-content">
                        <h2>
                            <?php _e( 'This is somewhat embarrassing, isn’t it?', 'pizzeria' ); ?>
                        </h2>
                        <p>
                            <?php _e( 'It looks like nothing was found at this location.', 'pizzeria' ); ?>
                        </p>

                    </div>
                </div>
            </div>

<?php get_footer(); ?>  