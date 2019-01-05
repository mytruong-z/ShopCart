<!DOCTYPE html>
<html>
<head>
    <base href="<?php echo 'BASE_URL';?>">
    <title>Fashion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
</head>
<style>
    .cart{
        float: right;
        margin-top: 20px;
        margin-right: 20px;
        color: white;
    }
    .containermar{
        margin-top: 100px;
    }
    .footer-actions-container {
        width: 100%;
        height: 92px;
        margin: 40px 0 0;
        background-color: #000;
    }
    .bg{
        background-image:  url("http://localhost/ShopCart/uploads/bg2.jpg") ;
        height: 700px;
        background-size: 1300px 800px;
        opacity: 0.9;
    }
    .lg{
        top: 0;
        position: absolute;
        z-index: 1000;

    }
    .nav{
        height: 80px;
    }
    .header{
        position: fixed;
    }
    .footera{
        text-align: center;
        color: white;


    }
    .glyphiconadd{
        color: #0f0f0f;
        font-size: 20px;
        margin-left: 40px;
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .footer-copyright{
        background-color: #1f1d1d;
    }
</style>
<body>
<div>
    <nav id="myNavbar" class="nav navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
        <a href="<?php echo base_url("products/") ?>" >
            <img class="lg active" height="80px" width="80px" src="http://localhost/ShopCart/uploads/lgG.png"></a>
        <!-- Cart info -->
        <div>
            <a href="<?php echo base_url('cart'); ?>" class="cart-link cart" title="View Cart">
                <i style="font-size: xx-large" class=" glyphicon glyphicon-shopping-cart"></i>
                <span style="color: white;">(<?php echo $this->cart->total_items(); ?>)</span>
            </a>
        </div>
        <h2 id="mfs" style="color: white;font-family: 'American Typewriter';text-align: center ;">M Y F A S H I O N</h2>
    </nav>
</div>
<div class="bg" id="bg">

</div>
<script>
    $(document).ready(function () {
        $("#bg").click(function () {
            $("#bg").slideUp();
            $(".container").addClass("containermar");
        });
    });
</script>

<div class="container">

<!-- List all products -->
<div class="row">
    <div class="col-lg-12">
        <?php if(!empty($products)){ foreach($products as $row){ ?>
            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <img height="500px" width="250px" src="<?php echo base_url('uploads/product_images/'.$row['image']); ?>" />
                    <div class="caption">
                        <h4 class="pull-right">$<?php echo $row['price']; ?> USD</h4>
                        <h4><?php echo $row['name']; ?></h4>
                        <p><?php echo $row['description']; ?></p>
                    </div>
                    <div class="atc">
                        <a  href="<?php echo base_url('products/addToCart/'.$row['id']); ?>" class="btn btn-success">
                            Add to Cart
                        </a>
                    </div>
                </div>
            </div>
        <?php } }else{ ?>
            <p>Product(s) not found...</p>
        <?php } ?>
    </div>
</div>
</div>
<div class="footer-actions-container" >




</div>
<footer class="page-footer font-small cyan darken-3 footera">

    <!-- Footer Elements -->
    <div class="container">

        <!-- Grid row-->
        <div class="row " >

            <!-- Grid column -->
            <div class="col-md-12 py-5">
                <div class="mb-5 flex-center">

                    <!-- Facebook -->
                    <a class="fb-ic">
                        <i class="glyphicon glyphiconadd glyphicon-question-sign white-text mr-md-10 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic">
                        <i class="glyphicon glyphiconadd glyphicon-gift white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic">
                        <i class="glyphicon glyphiconadd glyphicon-qrcode white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                        <i class="glyphicon glyphiconadd glyphicon-user white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="glyphicon glyphiconadd glyphicon-camera white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Pinterest-->
                    <a class="pin-ic">
                        <i class="glyphicon glyphiconadd glyphicon-envelope white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                </div>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a style="font-family: 'GB18030 Bitmap' " href="<?php echo base_url("products/") ?>"> myfashion.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
</body>