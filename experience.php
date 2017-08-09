<?php
$title ="Home";
include 'templates/header.php';
 ?>
 <div class="banner-hero">
   <div class="banner-slide">
     <div>
        <div class="banner-hero-item" style="background-image:url('images/hero-sample.jpg')">
          <div class="overlay-base"></div>
           <div class="caption-hero">
             <div class="container">
               <h2>DO YOU CARE ABOUT SAFETY ?</h2>
               <a href="#" class="waves-effect waves-light btn btn-outline-inverse">Read More</a>
             </div>
           </div>
        </div>
     </div>
     <div>
        <div class="banner-hero-item" style="background-image:url('images/hero-sample.jpg')">
          <div class="overlay-base"></div>
           <div class="caption-hero">
             <div class="container">
               <h2>CARE ABOUT SAFETY ?</h2>
               <a href="#" class="waves-effect waves-light btn btn-outline-inverse">Read More</a>
             </div>
           </div>
        </div>
     </div>
   </div>
   <div class="nav-hero">
     <button type="button" class="waves-effect waves-light prev-hero btn-box btn-default"><i class="icon-arrow-prev"></i></button>
     <button type="button" class="waves-effect waves-light next-hero btn-box btn-default"><i class="icon-arrow-next"></i></button>
   </div>
 </div>
 <section>
   <div class="container">
     <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3"><a class="active" href="#test1">Test 1</a></li>
          <li class="tab col s3"><a href="#test2">Test 2</a></li>
          <li class="tab col s3"><a href="#test4">Test 4</a></li>
        </ul>
      </div>
      <div id="test1" class="col s12">Test 1</div>
      <div id="test2" class="col s12">Test 2</div>
      <div id="test4" class="col s12">Test 4</div>
    </div>
   </div>

 </section>
 <section class="grey lighten-4">
   <div class="container">
     <h2 class="title center"><span></span>What We Offer</h2>
     <div class="row">
       <div class="col s12 l3">
         <div class="card small">
           <div class="card-image">
             <img class="responsive-img" src="images/sample-asset-card.jpg">
           </div>
           <div class="card-content">
             <h3 class="card-title">Operating Deflection Shape (ODS) for Machinery Troubleshooting</h3>
           </div>
         </div>
       </div>
       <div class="col s12 l3">
         <div class="card small">
           <div class="card-image">
             <img class="responsive-img" src="images/sample-asset-card.jpg">
           </div>
           <div class="card-content">
             <h3 class="card-title">Card Title</h3>
           </div>
         </div>
       </div><div class="col s12 l3">
         <div class="card small">
           <div class="card-image">
             <img class="responsive-img" src="images/sample-asset-card.jpg">
           </div>
           <div class="card-content">
             <h3 class="card-title">Reliability Technology for Turbine</h3>
           </div>
         </div>
       </div>
       <div class="col s12 l3">
         <div class="card small">
           <div class="card-image">
             <img class="responsive-img" src="images/sample-asset-card.jpg">
           </div>
           <div class="card-content">
             <h3 class="card-title">Card Title</h3>
           </div>
         </div>
       </div><div class="col s12 l3">
         <div class="card small">
           <div class="card-image">
             <img class="responsive-img" src="images/sample-asset-card.jpg">
           </div>
           <div class="card-content">
             <h3 class="card-title">Card Title</h3>
           </div>
         </div>
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
