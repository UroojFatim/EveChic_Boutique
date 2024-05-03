<?php

$conn = mysqli_connect("localhost", "root", "", "evechic_boutique") or die("Connection failed");

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
$output = "";

if (mysqli_num_rows($result) > 0) {
    $output .= '<div class="col-12 col-sm-6 col-lg-4">';

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= '<div class="single-product-wrapper">
        <!-- Product Image -->
        <div class="product-img">
            <img src="' . $row['product_img'] . '" alt="">
            <!-- Hover Thumb -->
            <img class="hover-img" src="' . $row['product_img2'] . '" alt="">

            <!-- Product Badge -->
            <div class="product-badge offer-badge">
                <span>-30%</span>
            </div>
            <!-- Favourite -->
            <div class="product-favourite">
                <a href="#" class="favme fa fa-heart"></a>
            </div>
        </div>

        <!-- Product Description -->
        <div class="product-description">
            <span>' . $row['product_descripption'] . '</span>
            <a href="single-product-details.php">
                <h6>' . $row['product_title'] . '</h6>
            </a>
            <p class="product-price"><span class="old-price">' . $row['product_oldprice'] . '</span>' . $row['product_price'] . '
            </p>

            <!-- Hover Content -->
            <div class="hover-content">
                <!-- Add to Cart -->
                <div class="add-to-cart-btn">
                    <a href="#" class="btn essence-btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>'

}

echo '</div>';
    $output .= '</div></div>';

    $sql_total = "SELECT * FROM products";
    $records = mysqli_query($conn, $sql_total) or die("Query Unsuccessful");
    $total_record = mysqli_num_rows($records);
    $total_pages = ceil($total_record / $limit_per_page);
    $output .= '<div id= "pagination">
    <div class="col-12">
        <div class="pagination d-flex justify-content-center mt-5 text-danger">';

    for ($i = 1; $i <= $total_pages; $i++) {
        $output .= "<a  id='{$i}'  href='' class='active rounded'>{$i}</a>";
    }
    $output .='</div>';


    echo $output;
} else {
    echo "<h2>No Record Found</h2>";
}
