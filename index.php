<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
       integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
       crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--css link-->
      <link rel="stylesheet" href="../style.css">
  </head>
 
      <style>
        .admine-image{
    width: 100px;
    object-fit: contain;
        }
        .footer{
            position: absolute;
            bottom:0;
        }
      </style>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="data:image/jpeg;base64,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" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>

                </nav>
            </div>
        </nav>
        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!--third child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                     <a href="#"><img src="data:image/jpeg;base64,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"
                     alt=""class="admine-image"></a> 
                     <p class="text-light text-center">Admin Name</p>
                </div>
                <!-- button*10>a.nav-link.text-light.bg-info.my-1 -->
                <div class="button text-center p-2">
                <button><a href="index.php?insert_product" class="nav-link text-light 
                bg-info my-1">Insert Products</a></button>
                <button><a href="" class="nav-link text-light 
                bg-info my-1">View Products</a></button>
                <button><a href="index.php?insert_category" class="nav-link text-light 
                bg-info my-1">Insert Categories</a></button>
                <button><a href="" class="nav-link text-light 
                bg-info my-1">View Categories</a></button>
                <button><a href="index.php?insert_brand" class="nav-link text-light 
                bg-info my-1">Insert Brands</a></button>
                <button><a href="" class="nav-link text-light 
                bg-info my-1">View Brands</a></button>
                <button><a href="" class="nav-link text-light 
                bg-info my-1">All Orders</a></button>
                <button><a href="" class="nav-link text-light 
                bg-info my-1">All Payments</a></button>
                <button><a href="" class="nav-link text-light 
                bg-info my-1">List Users</a></button>
                <div>
                <button><a href="" class="nav-link text-light 
                bg-info my-1">Logout</a></button>
               </div>
                </div>
            </div>
        </div>
        <!--fourth child-->
        <div class="container my-3">
            <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
            }
            if(isset($_GET['insert_product'])){
                include('insert_products.php');
            }
            
            ?>
        </div>


        <!--last child-->
        <div class="bg-info p-3 text-center footer">
            <p>All rights reserved @-Designed by Trishna-2023</p>
          </div> 
    </div>
    

<!--bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
   integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script> 
</body>
</html>