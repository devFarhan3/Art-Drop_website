 <?php include 'header.php'; ?>



 <div id="page-content">
     <section class="create_sec" id="create_arts">
         <div class="container ">
             <div class="col-lg-8 col-md-8 col-sm-12 mx-auto">
                 <form method="post" class="art_forms">
                     <h3 class="text-dark text-center">Create Your Artist Account </h3>
                     <div class="row">
                         <div class="col-md-5">
                             <div class="form-group">
                                 <label for="exampleInputEmail1"> Profile name</label>
                                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your profile name">

                             </div>
                         </div>

                         <div class="form-group col-md-2  pl-0 my_pfff">
                             <label for="inputZip">Enter Mobile </label>
                             <input type="text" class="form-control" id="inputZip" placeholder="+971">
                         </div>

                         <div class="form-group col-md-5 pl-0 my_pfff">
                             <label for="inputState">&nbsp;</label>
                             <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                         </div>
                         <div class="col-md-12">
                             <div class="form-group">
                                 <label for="exampleInputEmail1"> Email</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
                                 <!-- <small id="emailHelp" class="form-text text-dark pull-right "><a href="#">Forget your password</a></small> -->

                             </div>
                         </div>


                         <div class="col-md-12">
                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Artist Type</label>
                                 <select class="form-control" id="exampleFormControlSelect1">
                                     <option>Painter</option>
                                     <option>Photographer</option>
                                     <option>Sketcher</option>
                                     <option>Animator</option>
                                     <option>Other</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputEmail1"> Select Your City</label>
                                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Dubai">

                             </div>

                             <div class="row">
                                 <div class="col">
                                     <label for="exampleInputEmail1">Password</label>

                                     <input type="password" class="form-control" placeholder="Password">
                                     <small id="emailHelp" class="form-text text-muted">Use 8 or more characters with a mix of letters, numbers & symbols</small>

                                 </div>
                                 <div class="col">
                                     <label for="exampleInputEmail1">Password</label>
                                     <input type="password" class="form-control" placeholder="Password">

                                 </div>

                             </div>

                             <div class="form-check mt-4">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                 <label class="form-check-label" for="defaultCheck1" class="text-white">
                                     <span class="text-dark"> By creating an account, you agree to the Terms of use and Privacy Policy.</span>
                                 </label>
                             </div>
                         </div>

                         <div class="col-md-12 mx-auto pt-5">
                             <div class="form-group d-flex justify-content-center align-items-center sign_btn">
                                 <input type="submit" name="btnSubmit" class="btnContact" value="Sign Up " />


                             </div>

                             <p class="text-dark text-center"><a href="#" class="text-dark">Already have an ccount? Log in </a> </p>
                         </div>

                     </div>




                 </form>
             </div>

         </div>
     </section>
 </div>





 <!--End Body Content-->

 <!-- fooetr add -->

 <?php include 'footer.php'; ?>