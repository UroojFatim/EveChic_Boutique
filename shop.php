<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title  -->
    <title>EveChic Boutique - shop</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
</head>

<body>


    <!-- ##### header ##### -->
    <?php include 'header.php' ?>


    <!-- ##### Right Side Cart Area ##### -->
    <?php include 'right_side_cart.php' ?>


    <!-- ##### Breadcumb Area Start ##### -->
    <div style="background-image: url('img/bg-img/bg-9.jpg'); height: 100vh; background-size: cover; position: relative;">
    </div>
    <!-- ##### Breadcumb Area End ##### -->



    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">

                                        <p><span>186</span> products found</p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Sort by:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Highest Rated</option>
                                                <option value="value">Newest</option>
                                                <option value="value">Price: $$ - $</option>
                                                <option value="value">Price: $ - $$</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div id="product-data">

                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->


    <?php include 'footer.php' ?>


    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

    <script type="text/JavaScript">
        $(document).ready(function(){
            function loadProduct(page)
            {
                $.ajax({
                    url: "ajax-pagination.php",
                    type: "POST",
                    data: { page_no : page},
                    success: function(data){
                        $("#product-data").html(data);

                        $('.addToCartBtn').click(function(e) {
                            e.preventDefault();
                            var productId = $(this).data('id');

                            
                            window.location.href = "shop-detail.php?id=" + productId;
                        });
                    }

                });
                

            }
            loadProduct();

            
            $(document).on("click","#pagination a",function(e){
                e.preventDefault();
                var page_id = $(this).attr("id");

                loadProduct(page_id);
            })
        });
        
    </script>

</body>

</html>