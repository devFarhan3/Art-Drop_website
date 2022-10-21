 <?php include 'header.php'; ?>



 <div id="page-content">
     <section class="sign_in_sec" id="sign_inn">
         <div class="container contact-form">

             <form method="post">
                 <h3>Sign in </h3>
                 <div class="row">
                     <div class="col-md-12">
                         <div class="form-group">
                             <label for="exampleFormControlSelect1">User name or email address</label>
                             <select class="form-control" id="exampleFormControlSelect1">
                                 <option>designer@gmail.com</option>
                                 <option></option>
                                 <option></option>
                                 <option></option>
                                 <option></option>
                             </select>
                         </div>

                         <!-- <div class="form-group">
                             <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                         </div> -->
                     </div>
                     <div class="col-md-12">
                         <div class="form-group">
                             <label for="exampleInputEmail1"> Your password</label>
                             <span class="eye_icon"> 
                                <i class="fa fa-eye-slash  " aria-hidden="true"> &nbsp; Hide</i>
                            </span>

                             <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                             <small id="emailHelp" class="form-text text-dark pull-right "><a href="#">Forget your password</a></small>

                         </div>
                     </div>


                     <div class="col-md-8 mx-auto pt-3">



                         <div class="form-group d-flex justify-content-center align-items-center">
                             <input type="submit" name="btnSubmit" class="btnContact bg-white text-dark" value="Sign in " />


                         </div>

                         <p class="text-white text-center"><a href="#" class="text-white">Don’t have an acount? Sign up</a> </p>
                     </div>

                 </div>










             </form>
         </div>
     </section>
 </div>


 <!--End Body Content-->

 <!-- fooetr add -->

 <?php include 'footer.php'; ?>