<?php
        include("connection.php");
        error_reporting(0);
        $sql = "SELECT * FROM product";
        $all_product = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digiclick | Affiliate Store</title>
    <link rel="shortcut icon" href="images/favicons.png" type="image/x-icon">
    <meta name="description"
        content="Find the best deals and products from various brands at Digiclick, your ultimate affiliate store ,Amazon Affiliate Store." />
    <meta name="keywords" content="deals, products, brands, affiliate store, online shopping, online shop " />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="search_modal flex-align" id="search_Modal">
            <input onkeyup="searchingProduct();" type="text" placeholder="Search your Product" name="search" id="searchBar">
            <i class="bi bi-arrow-right-short searchAero" id="search_Aero"></i>
        </div>

        <nav class="navbar flex-align" id="navBar">
            <div class="company_logo flex-align">
                <div class="logo flex-align">
                    <img src="images/logo.png" alt="">
                </div>
                <div class="name flex-align">
                    <h1 class="smart">Digi</h1>
                    <h1 class="deals">click</h1>
                </div>
            </div>
            <div class="search_mode flex-align">
                <div class="search">
                    <i class="bi bi-search" id="searchIcon"></i>
                </div>
                <div class="dark_mode">
                <i class="bi bi-bag"></i>
                    </div>
                </div>
            </nav>
        </header>

    

        <div class="container">
        <h2>All Products</h2>
        <div class="cards" id ="productList">

        <?php
             while($row = mysqli_fetch_assoc($all_product)){
         ?>
         
            <div class="card">
                <img width="200px" height="200px" class="imagess" src="<?php  echo $row['imgLink'];  ?>" >
                <div class="content">
                    <h3><?php  echo $row['product_title'];  ?></h3>
                    <p><?php  echo $row['product_desc'];  ?>.</p>
                </div>
                <div class="visitBtn">
                    <a target="_blank" href="<?php  echo $row['purchase_link'];  ?>"  class="details btn">See Details</a>
                    <a target="_blank" href="<?php  echo $row['purchase_link'];  ?>" class="buy btn">Buy from Amazon</a>
                </div>
            </div>
           
            <?php
            
             }
            ?>

        </div>
    </div>

    <footer class="footer flex-align">
        <div class="name flex-align">
            <img src="images/logo.png" alt="company_logo" loading="lazy">
            <h1 class="smart">Digi</h1>
            <h1 class="deals">click</h1>
        </div>
        <p>This website is an Amazon affiliate site.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>