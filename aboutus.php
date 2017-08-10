<?php
$title ="Home";
include 'templates/header.php';
 ?>
 <div class="banner-hero">
   <div class="banner-hero-item" style="background-image:url('images/bg-about-us.jpg')">
     <div class="overlay-base"></div>
      <div class="caption-hero">
        <div class="container">
          <h1>About Us</h1>
        </div>
      </div>
   </div>
 </div>
 <div class="container">
   <div class="container-detail container-overlap">
     <div class="text-center">
       <p class="article-text">
         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
       </p>
     </div>
   </div>
 </div>
 <section>
   <div class="container">
     <h2 class="title"><span></span>Vision and Mission</h2>
     <div class="row">
       <div class="col s12 l6">
         <div class="text-center">
           <br />
           <img class="responsive-img" src="images/vision.png" />
           <h4>Vision</h4>
           <p>
             Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ute dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
           </p>
         </div>
       </div>
       <div class="col s12 l6">
         <div class="text-center">
           <br />
           <img class="responsive-img" src="images/mision.png" />
           <h4>Vision</h4>
           <p>
             Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
           </p>
         </div>
       </div>
     </div>
   </div>
 </section>
 <div class="parallax-container">
      <div class="parallax"><img src="images/parallax-img.jpg" ></div>
 </div>
 <section class="bg-cover" style="background-image:url('images/bg-ceo.jpg');">
   <div class="container">
     <h2 class="title inverse"><span></span>From Our CEO</h2>
     <div class="container-detail">
       <div class="text-center">
         <br />
         <div class="img-profile">
           <img class="responsive-img img-circle" src="images/sample-pp.jpg" />
         </div>
         <p class="article-text white-text">
           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ute dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
         </p>
         <p>
           <span class="amber-text"><i class="icon-quote"></i></span>
           <br />
           <strong class="white-text">Jerry Robinson</strong>
           <br />
           <span class="amber-text">CEO</span>
         </p>
       </div>
     </div>
   </div>
 </section>
 <script src='https://api.mapbox.com/mapbox-gl-js/v0.38.0/mapbox-gl.js'></script>
 <link href='https://api.mapbox.com/mapbox-gl-js/v0.38.0/mapbox-gl.css' rel='stylesheet' />
 <div id='map' style='width: 100%; height: 500px;'></div>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoicmFtcG9rZ2VsbyIsImEiOiJjajVkbnlvcG0wbzFqMzNvNjgybWk2a3hwIn0.nBiU6cWxmYz3PjjIvrn75A';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/rampokgelo/cj5do371n0mgr2robfwt4x9xo'
});
map.scrollZoom.disable();
</script>



 <?php
include 'templates/footer.php';
  ?>
