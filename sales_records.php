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
                             <a href="#" class="active">
                                 <img src="assets/art_imgs/salerecord.png" alt="user" class="img-fluid">
                                 &nbsp;Sales Record</a>
                         </li>
                         <li>
                             <a href="#">
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
                     <div class="container-fluid sales_rec">
                         <div class="row">
                             <div class="col-lg-12">
                                 <h1 class="user_head">Christopher Jane</h1>
                                 <div class="row bg-white p-3">
                                     <div class="col-sm-2">
                                         <img src="assets/art_imgs/sales_recodes.png" alt="user" class="img-fluid w-75">
                                         <p class="pt-1"> &nbsp; My Data</p>
                                     </div>
                                     <div class="col-sm-6">
                                         <h3>Sales Record</h3>
                                         <p>Please make sure these details are up to date as they’ll be used for your
                                             bookings, and communications with the hotels.</p>
                                     </div>
                                 </div>
                                 <!-- <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a> -->
                                 <!-- <span><img src="assets/art_imgs/edit.png " alt="edit" class="img-fluid  edit_img"></span> -->

                             </div>
                             <div class="col-lg-12 form_bg">

                                 <form class="px-4 ">

                                     <div class="py-3">
                                         <div class="row">
                                             <div class="col-md-5">
                                                 <div class="form-group has-search">
                                                     <span class="fa fa-search form-control-feedback"></span>
                                                     <input type="text" class="form-control" placeholder="Search by image name ">
                                                 </div>

                                             </div>
                                             <div class="col-md-7 d-flex justify-content-end">


                                                 <button type="submit" class="btn btn-primary  text-white  border  update_btn">
                                                     Search By Week</button>

                                                 <button type="submit" class="btn btn-primary bg-transparent ml-2  text-dark  border  update_btn">
                                                     Search By Month</button>
                                             </div>
                                         </div>


                                     </div>
                                     <table class="table border-0 bg-white text-dark table-responsive">
                                         <div class="m-3">Shopping Cart</div>
                                         <thead class="bg-white text-dark">
                                             <tr>
                                                 <td scope="col">Product</td>
                                                 <td scope="col"> </td>
                                                 <td scope="col">Price </td>
                                                 <td scope="col">Date </td>
                                                 <td scope="col">Quantity Sold</td>
                                                 <td scope="col">Total Sale</td>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr class="cart__row border-bottom line1 cart-flex border-top">
                                                 <td class="cart__image-wrapper cart-flex-item">
                                                     <a href="#"><img class="cart__image" src="assets/art_imgs/pppp.png" alt="img"></a>
                                                 </td>
                                                 <td class="cart__meta small--text-left cart-flex-item">
                                                     <div class="list-view-item__title">
                                                         <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                             tempor incididunt ut labore et dolore magna aliqua. </a>
                                                     </div>


                                                 </td>
                                                 <td class="cart__price-wrapper cart-flex-item">
                                                     <span class="money">$735.00</span>
                                                 </td>

                                                 <td class="cart__price-wrapper cart-flex-item">
                                                     <span class="money">14/APR/2020</span>
                                                 </td>

                                                 <td class="text-right small--hide cart-price">
                                                     <div><span class="money">2</span></div>
                                                 </td>

                                                 <td class="text-right small--hide cart-price">
                                                     <div><span class="money">$40</span></div>
                                                 </td>
                                             </tr>

                                             <tr class="cart__row border-bottom line1 cart-flex border-top">
                                                 <td class="cart__image-wrapper cart-flex-item">
                                                     <a href="#"><img class="cart__image" src="assets/art_imgs/pppp.png" alt="img"></a>
                                                 </td>
                                                 <td class="cart__meta small--text-left cart-flex-item">
                                                     <div class="list-view-item__title">
                                                         <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                             tempor incididunt ut labore et dolore magna aliqua. </a>
                                                     </div>


                                                 </td>
                                                 <td class="cart__price-wrapper cart-flex-item">
                                                     <span class="money">$735.00</span>
                                                 </td>

                                                 <td class="cart__price-wrapper cart-flex-item">
                                                     <span class="money">14/APR/2020</span>
                                                 </td>

                                                 <td class="text-right small--hide cart-price">
                                                     <div><span class="money">2</span></div>
                                                 </td>

                                                 <td class="text-right small--hide cart-price">
                                                     <div><span class="money">$40</span></div>
                                                 </td>
                                             </tr>

                                             <tr class="cart__row border-bottom line1 cart-flex border-top">
                                                 <td class="cart__image-wrapper cart-flex-item">
                                                     <a href="#"><img class="cart__image" src="assets/art_imgs/pppp.png" alt="img"></a>
                                                 </td>
                                                 <td class="cart__meta small--text-left cart-flex-item">
                                                     <div class="list-view-item__title">
                                                         <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                             tempor incididunt ut labore et dolore magna aliqua. </a>
                                                     </div>


                                                 </td>
                                                 <td class="cart__price-wrapper cart-flex-item">
                                                     <span class="money">$735.00</span>
                                                 </td>

                                                 <td class="cart__price-wrapper cart-flex-item">
                                                     <span class="money">14/APR/2020</span>
                                                 </td>

                                                 <td class="text-right small--hide cart-price">
                                                     <div><span class="money">2</span></div>
                                                 </td>

                                                 <td class="text-right small--hide cart-price">
                                                     <div><span class="money">$40</span></div>
                                                 </td>
                                             </tr>


                                         </tbody>
                                     </table>



                                 </form>
                                 <div class="pagination_secs">
                                     <div class="row">

                                         <div class="col-md-9">
                                             <div class="form-group col-md-4 offset-1 d-flex ">
                                                 <span class="mt-2 mr-2">Show</span>
                                                 <input type="num" class="form-control" id="inputEmail4" placeholder="10">
                                                 <span class="mt-2 ml-3">entries</span>
                                             </div>

                                         </div>
                                         <div class="col-md-2 p-2">



                                             <nav aria-label="Page navigation example pagniii">
                                                 <ul class="pagination">
                                                     <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                     <li class="page-item active"><a class="page-link " href="#">1</a></li>
                                                     <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                     <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                 </ul>
                                             </nav>
                                         </div>
                                     </div>
                                 </div>



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