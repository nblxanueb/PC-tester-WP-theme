<?php get_header(); ?>


<div class="video-container">
    <div class="overlay"></div>
    <video autoplay loop muted class="video">
        <source src="<?php echo get_theme_file_uri('/images/amtax.mp4" type="video/mp4' ) ?>">
        <source src="<?php echo get_theme_file_uri('/images/amtax.mov" type="video/mov' ) ?>">
        <source src="<?php echo get_theme_file_uri('/images/amtax.ogv" type="video/ogv' ) ?>">
        <source src="<?php echo get_theme_file_uri('/images/amtax.webm" type="video/webm' ) ?>">
    </video>
    <div class="circle1">2018</div>
    <div class="circle2"><img src="<?php echo get_theme_file_uri( 'images/global_conference.png' ) ?>" alt="" class="global-conference"></div>
    <div class="circle3">
        <div class="circle3-content">16-18 MAY 2018 <br>|  Tax Trends Today</div>
    </div>
    <div class="scroll">SCROLL DOWN FOR MORE <br>▼</div>
  </div>


<div class="about">
    <div class="about-content">
        <h2 style="color: #00355f; font-size: 3vw; font-weight: 200">ABOUT ALVAREZ & MARSAL TAXAND</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis libero leo, sit amet interdum urna scelerisque sed. Quisque vitae sodales turpis, quis hendrerit ex. Fusce magna ipsum, eleifend sed augue id, condimentum volutpat purus. Pellentesque vitae elit orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin in lorem dolor. Fusce interdum feugiat nisl. Suspendisse eu quam purus. Nulla vulputate sem eget ipsum consectetur, a lobortis felis iaculis.</p>
        <p>Nullam ipsum eros, volutpat vel faucibus ullamcorper, blandit nec urna. Curabitur porta nunc quis quam congue, venenatis vestibulum leo lacinia. Nunc finibus mollis eros, eget condimentum massa efficitur id. Nulla scelerisque metus sit amet tellus laoreet, ut aliquam velit auctor. Sed ultrices ante urna, condimentum placerat enim lacinia.</p></p>
    </div>
</div>




<div class="what-we-do">
  <img src="<?php echo get_theme_file_uri( 'images/skyscrapers.jpg' ) ?>" class="we-do" alt="">
  <div class="we-content">
      <h2 style="color: #00355f; font-size: 3vw; font-weight: 200">WHAT WE DO</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis libero leo, sit amet interdum urna scelerisque sed. Quisque vitae sodales turpis, quis hendrerit ex. Fusce magna ipsum, eleifend sed augue id, condimentum volutpat purus. Pellentesque vitae elit orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin in lorem dolor. Fusce interdum feugiat nisl.</p>
  </div>
      <img src="<?php echo get_theme_file_uri( 'images/services.png' ) ?>" alt="" class="we-services">

</div>

<?php get_footer(); ?>
