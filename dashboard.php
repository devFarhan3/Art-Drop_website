 <?php include 'header.php'; ?>



 <div id="page-content">
     <section class="dashboad_sec ">
         <div class="container ">
             <div id="wrapper">

                 <!-- Sidebar -->
                 <div id="sidebar-wrapper">
                     <ul class="sidebar-nav">

                         <li>
                             <a href="#" class="active">
                                 <img src="assets/art_imgs/userImg.png" alt="user" class="img-fluid">
                                 &nbsp;
                                 Personal Information
                             </a>
                         </li>
                         <li>
                             <a href="#">
                                 <img src="assets/art_imgs/previousOrder.png" alt="user" class="img-fluid">
                                 &nbsp;
                                 Previous Order </a>
                         </li>
                         <li>
                             <a href="#">
                                 <img src="assets/art_imgs/hearts.png" alt="user" class="img-fluid">
                                 &nbsp;Favorites</a>
                         </li>
                         <li>
                             <a href="#">
                                 <img src="assets/art_imgs/support.png" alt="user" class="img-fluid">
                                 &nbsp;
                                 Contact Support</a>
                         </li>
                         <li>
                             <a href="#"></a>
                         </li>
                         <li>
                             <a href="#"></a>
                         </li>
                         <li>
                             <a href="#">
                                 <div class="outerDivFull">
                                     <div class="switchToggle">
                                         <input type="checkbox" id="switch">
                                         <span class="sign_span">Sign out</span>
                                         <label for="switch"> </label>
                                     </div>

                                 </div>

                             </a>
                         </li>
                     </ul>
                 </div>
                 <!-- /#sidebar-wrapper -->

                 <!-- Page Content -->
                 <div id="page-content-wrapper">
                     <div class="container-fluid">
                         <div class="row">
                             <div class="col-lg-12">
                                 <h1 class="user_head">Christopher Jane</h1>
                                 <div class="row bg-white p-3">
                                     <div class="col-sm-1 user_img ">
                                         <img src="assets/art_imgs/user.png" alt="user" class="img-fluid ">
                                         <p class="pt-1"> &nbsp; User</p>
                                     </div>
                                     <div class="col-sm-6">
                                         <h3>Profile Setting</h3>
                                         <p>Please make sure these details are up to date as they’ll be used for your
                                             bookings, and communications with the hotels.</p>
                                     </div>
                                 </div>
                                 <a href="#menu-toggle" class="btn btn-default d-lg-none d-sm-block" id="menu-toggle"> << </a>
                                 <span><img src="assets/art_imgs/edit.png " alt="edit" class="img-fluid  edit_img"></span>

                             </div>
                             <div class="col-lg-12 form_bg">

                                 <form class="px-4 ">

                                     <div class="form-row ">
                                         <div class="form-group col-md-6">
                                             <label for="inputEmail4">Your Name</label>
                                             <input type="text" class="form-control" id="inputEmail4" placeholder="Christopher Jane">
                                         </div>
                                         <div class="form-group col-md-6">
                                             <label for="inputPassword4">Email address</label>
                                             <input type="text" class="form-control" id="inputPassword4" placeholder="Password">
                                         </div>
                                     </div>

                                     <div class="form-row ">
                                         <div class="form-group col-md-6">
                                             <label for="inputState">Country</label>
                                             <select id="inputState" class="form-control">
                                                 <option selected></option>
                                                 <option>...</option>
                                             </select>
                                         </div>
                                         <div class="form-group col-md-6">
                                             <label for="inputPassword4">Phone</label>
                                             <input type="text" class="form-control" id="inputPassword4" placeholder="Password">
                                         </div>
                                     </div>

                                     <div class="form-row ">
                                         <div class="form-group col-md-6">
                                             <label for="inputState">Current Password</label>
                                             <small id="emailHelp" class="form-text text-muted pull-right "><a href="#" style="color: #E65F25;">Forgot?</a></small>

                                             <input type="pasword" class="form-control" id="inputPassword4" placeholder="Password">

                                         </div>
                                         <div class="form-group col-md-6">
                                             <label for="inputPassword4">New Password</label>
                                             <input type="pasword" class="form-control" id="inputPassword4" placeholder="Password">
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-10 d-flex justify-content-end">
                                             <p class=" mt-2">Your data will be <span class="care"> &nbsp; handled with care</span></p>
                                         </div>
                                         <div class="col-md-2">
                                             <button type="submit" class="btn btn-primary pull-right update_btn">Update</button>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- /#page-content-wrapper -->

             </div>

         </div>



     </section>
 </div>




 <!--End Body Content-->

 <!-- fooetr add -->

 <?php include 'footer.php'; ?>