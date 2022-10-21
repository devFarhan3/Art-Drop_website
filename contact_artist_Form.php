 <?php include 'header.php'; ?>



 <div id="page-content">
     <section class="form_artist" id="form_artist">
         <div class="container contact-form">
             <div class="contact-image">
                 <img src="assets/art_imgs/painting.png" alt="painting" class="img-fluid" />
             </div>
             <form method="post">
                 <h3>Contact Your Artist </h3>
                 <div class="row">
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="exampleInputEmail1">Artist Name</label>
                             <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                         </div>

                         <!-- <div class="form-group">
                             <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                         </div> -->
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="exampleInputEmail1"> Mobile Number</label>
                             <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                         </div>
                     </div>

                     <div class="col-md-12">
                         <div class="form-group">
                             <label for="exampleInputEmail1">Email address</label>
                             <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                         </div>
                     </div>

                     <div class="col-md-12">

                         <div class="form-group">
                             <label for="exampleFormControlTextarea1">Send</label>
                             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                         </div>

                         <div class="form-group d-flex justify-content-center align-items-center">
                             <input type="submit" name="btnSubmit" class="btnContact text-white" value="Contact " />
                         </div>
                     </div>

                 </div>










             </form>
         </div>
     </section>
 </div>


 <!--End Body Content-->

 <!-- fooetr add -->

 <?php include 'footer.php'; ?>