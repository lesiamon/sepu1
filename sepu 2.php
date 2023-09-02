<!DOCTYPE html>
<html>
<head>
    <!-- Add your meta tags, CSS links, and other head content here -->
</head>
<body>
    <?php include('header.php');?>
    
    <?php include('admin/connect.php');?>
    
    <?php include('navtop.php');?>
    
    <div id="background">
        <div id="page">
            <?php include('nav_sidebar.php');?>
            
            <div id="content">
                <!-- Your content here -->
                <h3>List of Our Products</h3>
                <?php include('product_menu.php');?>
                
                <!-- Product Listings -->
                <ul class="thumbnails">
                    <?php
                    // Assuming you have a valid database connection
                    $query = mysql_query("SELECT * FROM tb_products WHERE category = 'School'") or die(mysql_error());
                    while ($row = mysql_fetch_array($query)) {
                        $id = $row['productID'];
                        // Your product listing code here
                    }
                    ?>
                </ul>
                <!-- End Product Listings -->
            </div>
            
            <div id="footer">
                <?php include('footer.php');?>
            </div>
        </div>
    </div>
    
    <?php include('footer_bottom.php');?>
</body>
</html>
<<!how do i go about the errors  i am getting in the code above
```


