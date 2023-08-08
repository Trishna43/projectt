<!-- connect file -->
<?php
include('includes/connect.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website using php and MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
     rel="stylesheet"
     integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous">
      <!--font awesome-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
       integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
       crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
              <img src="data:image/jpeg;base64,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" alt=""class="logo">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
               data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
               aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Total price:100/-</a>
                  </li>
                  
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
          <!--second child-->
          <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome Guest</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                  </li>  
            </ul>
          </nav>
          
          <!--third child-->
          <div class="bg-ligh">
            <h3 class="text-center">Hidden Store</h3>
            <p class="text-center">Communications is at the heart of e-commerce and community</p>
          </div>

          <!--fourth child-->
          <div class="row">
            <div class="col md-10">
                <!--products-->
                 <div class="row me-">
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgaFsYx6qSgmQVxJz7OZUZjNED9Dp-mCurGw&usqp=CAU" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-info">Add to cart</a>
                              <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                          </div>
                    </div>
                    <!---->
                    <!--ert-->
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-pM2cVm5aP1LOpQmwK2y41Ohv81XUmeds5g&usqp=CAU" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-info">Add to cart</a>
                              <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjycX-lIM9COTHAPeMbHKv16ATXve7aDM62w&usqp=CAU" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-info">Add to cart</a>
                              <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                          </div>
                    </div>
                    <!---->
                    
                    <!---->
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkiFWiBc1C-kdAv00u7jb8hyVvDxsBz-ekNg&usqp=CAU" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-info">Add to cart</a>
                              <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                          </div>
                    </div>
                    <!---->
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTE__UDXr546bZ5m_oGEHAnnh-SrK9w3-g24pzUhyKKXE-WwCJTE-C-x4940gh8fmi8dbg&usqp=CAU" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-info">Add to cart</a>
                              <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-info">Add to cart</a>
                              <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                          </div>
                    </div>
                </div>
                <!--ttt-->
                
                
            </div>
             <div class="col-md-2 bg-secondary p-0" >
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a href="#" class="nav-link text-light"><h4>Delivary Brands</h4></a>
                    </li>
                    <?php
                    $select_brands="select * from brands";
                    $result_brands=mysqli_query($con,$select_brands);
                    // $row_data=mysqli_fetch_assoc($result_brands);
                    // echo $row_data['brand_title'];
                    while($row_data=mysqli_fetch_assoc($result_brands)){
                      $brand_title=$row_data['brand_title'];
                      $brand_id=$row_data['brand_id'];
                      echo "<li class='nav-item'>
                      <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
                  </li>";
                    }
                    ?>
                    
                </ul> 
                <!--categeries to be displayed-->
                <div class="col md-2 bg-secondary p-0">
                    <ul class="navbar-nav me-auto text-center">
                        <li class="nav-item bg-info">
                            <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
                        </li>
                        <?php
                    $select_categories="select * from categories";
                    $result_categories=mysqli_query($con,$select_categories);
                    // $row_data=mysqli_fetch_assoc($result_brands);
                    // echo $row_data['brand_title'];
                    while($row_data=mysqli_fetch_assoc($result_categories)){
                      $category_title=$row_data['category_title'];
                      $category_id=$row_data['category_id'];
                      echo "<li class='nav-item'>
                      <a href='index.php?brand=$category_id' class='nav-link text-light'>$category_title</a>
                  </li>";
                    }
                    ?>

                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link text-light">Categories1</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light">Categories2</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light">Categories3</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light">Categories4</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light">Categories5</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light">Categories6</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light">Categories7</a>
                        </li>
         -->
                        
                    </ul>
                <!-- sidenav -->
             </div>
          </div> 
           

 


          <!--last child-->
          <div class="bg-info p-3 text-center">
            <p>All rights reserved @-Designed by Trishna-2023</p>
          </div> 

    </div> 


   <!--bootstrap js link-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
   integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script> 
</body>
</html>