 <?php include 'header.php'; ?>



 <div id="page-content">
     <section class="dashboad_sec ">
         <div class="container ">
             <div id="wrapper">

                 <!-- Sidebar -->
                 <div id="sidebar-wrapper">
                     <ul class="sidebar-nav">

                         <li>
                             <a href="#">
                                 <img src="assets/art_imgs/userImg.png" alt="user" class="img-fluid">
                                 &nbsp;
                                 Personal Information
                             </a>
                         </li>
                         <li>
                             <a href="#">
                                 <img src="assets/art_imgs/art-paint.png" alt="user" class="img-fluid">
                                 &nbsp;
                                 Upload- Picture/Painting </a>
                         </li>
                         <li>
                             <a href="#">
                                 <img src="assets/art_imgs/invent.png" alt="user" class="img-fluid">
                                 &nbsp;View Inventory</a>
                         </li>

                         <li>
                             <a href="#">
                                 <img src="assets/art_imgs/salerecord.png" alt="user" class="img-fluid">
                                 &nbsp;Sales Record</a>
                         </li>
                         <li>
                             <a href="#" class="active">
                                 <img src="assets/art_imgs/support.png" alt="user" class="img-fluid">
                                 &nbsp;
                                 Contact Support</a>
                         </li>
                         <li>
                             <a href="#">
                                 <img src="assets/art_imgs/promote.png" alt="user" class="img-fluid">
                                 &nbsp;Promote with Artdrop</a>
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
                                     <div class="col-sm-2">
                                         <img src="assets/art_imgs/csupport.png" alt="user" class="img-fluid w-50 ">
                                         <p class="pt-1"> &nbsp; My Data</p>
                                     </div>
                                     <div class="col-sm-6">
                                         <h3>Contact Support</h3>
                                         <p>Please make sure these details are up to date as they’ll be used for your
                                             bookings, and communications with the hotels.</p>
                                     </div>
                                 </div>
                                 <!-- <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a> -->
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
                                             <input type="text" class="form-control" id="inputPassword4" placeholder="Phone">
                                         </div>
                                     </div>

                                     <div class="form-row ">
                                         <div class="form-group col-md-12">
                                             <label for="inputState">Message</label>


                                             <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>

                                         </div>

                                     </div>
                                     <div class="row">
                                         <div class="col-md-10 d-flex justify-content-end">
                                         </div>
                                         <div class="col-md-2">
                                             <button type="submit" class="btn btn-primary pull-right update_btn">Send</button>
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