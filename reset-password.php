<?php
$title ="Reset Password";
include 'templates/header-login.php';
 ?>
 <div class="banner-hero">
   <div class="banner-hero-item">
      <div class="caption-hero">
        <div class="container">
          <p>
            <i class="icon-lock icon4x"></i>
          </p>
          <h1>Reset Password</h1>
        </div>
      </div>
   </div>
 </div>
 <div class="container">
   <div class="container-detail container-overlap">
     <div class="row">
       <div class="col s12 l3"></div>
       <div class="col s12 l6">
         <form>
           <div class="input-field">
             <input id="first_name" type="text" class="validate">
             <label for="first_name">Change Password</label>
           </div>
           <div class="input-field">
             <input id="first_name" type="text" class="validate">
             <label for="first_name">Confirm New Password</label>
           </div>
           <button type="button" class="waves-effect waves-light btn btn-block btn-large btn-flat btn-outline-primary">Save Change</button>
         </form>
       </div>
       <div class="col s12 l3"></div>
     </div>
   </div>
   <br />
 </div>



 <?php
 include 'templates/modals.php';
  ?>

 <?php
include 'templates/footer.php';
  ?>
