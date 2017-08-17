<?php
$title ="My Account";
include 'templates/header-login.php';
 ?>
 <div class="banner-hero">
   <div class="banner-hero-item">
      <div class="caption-hero">
        <div class="container">
          <div class="media">
            <div class="media-left">
              <img src="images/default-dp.png" class="img-circle"/>
            </div>
            <div class="media-body media-middle">
              <p class="text-muted">Welcome</p>
              <h1>Welcome Exxon Mobile Indonesia</h1>
            </div>
          </div>
        </div>
      </div>
   </div>
 </div>
 <section>
   <div class="container">
     <div class="row">
       <div class="col s12 l3"></div>
       <div class="col s12 l6">
         <h2 class="title"><span></span>Edit Account</h2>
         <form>
           <div class="input-field">
             <input id="first_name" type="text" class="validate">
             <label for="first_name">Change Password</label>
           </div>
           <div class="input-field">
             <input id="first_name" type="text" class="validate">
             <label for="first_name">Confirmation New Password</label>
           </div>
           <div class="input-field">
             <input id="first_name" type="text" class="validate">
             <label for="first_name">Insert Current Password</label>
           </div>
           <button type="button" class="waves-effect waves-light btn btn-block btn-large btn-flat btn-outline-primary">Save Change</button>
         </form>
       </div>
       <div class="col s12 l3"></div>
     </div>

   </div>
 </section>



 <?php
 include 'templates/modals.php';
  ?>

 <?php
include 'templates/footer.php';
  ?>
