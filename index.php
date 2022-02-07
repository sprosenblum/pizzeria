

<?php get_header(); ?>


  <main>
    <div class="container">
      <h1 class="mt-5 mb-5 text-center">MENU</h1>


      <div class="row">
        <div class="col-12 text-center">
          <h2 class="mb-5 font-weight-bold">Pizzas</h2>
        </div>
      </div>

      <hr><hr><hr>

      

      <hr><hr><hr>

      <?php 
      foreach ([1, 2, 3] as $key => $value) { 
        ?>
            

      <div class="row mb-5">
      <div class="col-12 col-md-2 offset-md-1 d-flex flex-column align-items-center">
        <img class="menu-item-img mb-2"
          src="https://dummyimage.com/200x200/000/fff"
          alt="Black Placeholder Image"
        />
      </div>

      <div class="col-12 offset-md-1 col-md-6 text-center text-md-start">
        <h3 class="menu-item-heading">
        <span class="menu-item-name">Margherita</span>
        <span class="menu-item-price">$16</span>
        </h3>
        <p class="mt-5">
          Nunc efficitur felis vel mi efficitur, sed molestie sem
          scelerisque. Fusce orci risus, congue eu mauris nec, pretium
          tincidunt nulla.
        </p>
      </div>
      </div>

<?php } ?>

    
        <h2 id="order-now" class="text-center mt-5 mb-5"><a href="">Order Your Hot Pizza Now!</a></h2>



      <div id="page-story" class="mt-5">
        <h3 class="mb-3 text-center">Our Story</h3>
        <article class="mb-5">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </article>


  </main>
  </div>
</div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->

  </body>

<?php get_footer(); ?>  