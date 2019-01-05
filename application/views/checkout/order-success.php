<!DOCTYPE html>
<html>
<head>
    <base href="<?php echo 'BASE_URL';?>">
    <title>Cart</title>
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
    .lg{
        top: 0;
        position: absolute;
        z-index: 1000;

    }
    .nav{
        height: 80px;
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
    .mes{
        border-top-style: dotted;
        border-right-style: solid;
        border-bottom-style: dotted;
        border-left-style: solid;
        border-width: medium;
        border-color: #1e7e34;
        color: #1e7e34;
        text-align: center;
    }
    .ord-addr-info{
        margin-left: 0px;
        margin-bottom: 10px;
        border-bottom-style: none;
        background-color: #e7e7e7;
    }

    .item{
        margin-bottom: 20px;
        border-bottom: 1px solid #e1bee7;
    }
    .row{
        margin-left: 0px;
        margin-right: 0px;

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
        <h2 id="mfs" style="color: white;font-family: 'American Typewriter';text-align: center ;">S U C C E S S</h2>
    </nav>
</div>
<div class="bg" id="bg">

</div>
<body>
<div class="container containermar">
        <p class="mes">Your order has been placed successfully !!!</p>
<!-- Order status & shipping info -->
<div class="row col-lg-12 ord-addr-info">
    <div class="col-sm-6 adr">
        <div class="hdr">Shipping Address</div>
        <p><?php echo $order['name']; ?></p>
        <p><?php echo $order['email']; ?></p>
        <p><?php echo $order['phone']; ?></p>
        <p><?php echo $order['address']; ?></p>
    </div>
    <div class="col-sm-6 info">
        <div class="hdr">Order Info</div>
        <p><b>Reference ID</b> #<?php echo $order['id']; ?></p>
        <p><b>Total</b> <?php echo '$'.$order['grand_total'].' USD'; ?></p>
    </div>
</div>

<!-- Order items -->
<div class="row ord-items">
    <?php if(!empty($order['items'])){ foreach($order['items'] as $item){ ?>
        <div class="col-lg-11 item">
            <div class="col-sm-2">
                <div class="img" style="height: 75px; width: 75px;">
                    <?php $imageURL = !empty($item["image"])?base_url('uploads/product_images/'.$item["image"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
                    <img src="<?php echo $imageURL; ?>" width="75" height="100"/>
                </div>
            </div>
            <div class="col-sm-3" style="margin-bottom: 30px">
                <p><b><?php echo $item["name"]; ?></b></p>
                <p><?php echo '$'.$item["price"].' USD'; ?></p>
                <p>QTY: <?php echo $item["quantity"]; ?></p>
            </div>
            <div class="col-sm-2">
                <p><b><?php echo '$'.$item["sub_total"].' USD'; ?></b></p>
            </div>
        </div>
    <?php } } ?>
</div>
</div>
</body>
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
</html>