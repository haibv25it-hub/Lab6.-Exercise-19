
<?php
require('util/main.php');

require('model/database.php');
require('model/product_db.php');

/*********************************************
 * Select some products
 **********************************************/

// Category ID for Guitars
$cat_id = 1;

// Get the products in the Guitars category
$products = get_products_by_category($cat_id);

/***************************************
 * Delete a product
 ****************************************/

// Sample data
$product_name = 'Fender Telecaster';

// Display delete message
$delete_message = "No rows were deleted.";

/***************************************
 * Insert a product
 ****************************************/

// Sample data
$category_id = 1;
$code = 'acoustic01';
$name = 'Yamaha Acoustic Guitar';
$description = 'NA';
$price = 949.99;
$discount_percent = 0;

// Insert the product using the model function
$product_id = add_product(
    $category_id,
    $code,
    $name,
    $description,
    $price,
    $discount_percent
);

// Display an appropriate message
if ($product_id !== false && $product_id !== null) {
    $insert_message = "Product was inserted successfully. Product ID: "
                    . $product_id;
} else {
    $insert_message = "The product was not inserted. "
                    . "The product code may already exist.";
}

// Display the page
include 'home.php';
?>
