<!DOCTYPE html>
<html>
<head>
    <base href="<?php echo 'BASE_URL';?>">
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
    .container{
        margin-top: 80px;
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
    .control-label{
        margin-left: 15px;
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
    .orderBtn{
        float: right;
    }
    .footer-copyright{
        background-color: #1f1d1d;
    }
</style>
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
        <h2 id="mfs" style="color: white;font-family: 'American Typewriter';text-align: center ;">OrderPreview</h2>
    </nav>
</div>

<div class="container">
    <div class="row checkout">
        <!-- Order items -->
        <div class="col-lg-8">
        <table class="table">
            <thead>
            <tr>
                <th width="13%"></th>
                <th width="34%">Product</th>
                <th width="18%">Price</th>
                <th width="13%">Quantity</th>
                <th width="22%">Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){ ?>
                <tr>
                    <td>
                        <?php $imageURL = !empty($item["image"])?base_url('uploads/product_images/'.$item["image"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
                        <img src="<?php echo $imageURL; ?>" width="75"/>
                    </td>
                    <td><?php echo $item["name"]; ?></td>
                    <td><?php echo '$'.$item["price"].' USD'; ?></td>
                    <td><?php echo $item["qty"]; ?></td>
                    <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
                </tr>
            <?php } }else{ ?>
                <tr>
                    <td colspan="5"><p>No items in your cart...</p></td>
                </tr>
            <?php } ?>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="4"></td>
                <?php if($this->cart->total_items() > 0){ ?>
                    <td class="text-center">
                        <strong>Total <?php echo '$'.$this->cart->total().' USD'; ?></strong>
                    </td>
                <?php } ?>
            </tr>
            </tfoot>
        </table>
    </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-3">
        <!-- Shipping address -->
        <form class="form-horizontal" method="post">
            <div class="ship-info">
                <h4>Shipping Info</h4>
                <div class="form-group">
                    <label class="control-label"><i class="glyphicon glyphicon-user"></i> Full Name</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" value="<?php echo !empty($custData['name'])?$custData['name']:''; ?>" placeholder="Enter name">
                        <?php echo form_error('name','<p class="help-block error">','</p>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="fname"><i class="glyphicon glyphicon-envelope"></i> Email</label>

                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" value="<?php echo !empty($custData['email'])?$custData['email']:''; ?>" placeholder="Enter email">
                        <?php echo form_error('email','<p class="help-block error">','</p>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="fname"><i class="glyphicon glyphicon-phone"></i> Phone</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="phone" value="<?php echo !empty($custData['phone'])?$custData['phone']:''; ?>" placeholder="Enter contact no">
                        <?php echo form_error('phone','<p class="help-block error">','</p>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="fname"><i class="glyphicon glyphicon-home"></i> Address</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="address" value="<?php echo !empty($custData['address'])?$custData['address']:''; ?>" placeholder="Enter address">
                        <?php echo form_error('address','<p class="help-block error">','</p>'); ?>
                    </div>
                </div>
            </div>
            <div class="footBtn">
                <a href="<?php echo base_url('cart/'); ?>" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Back to Cart</a>
                <button type="submit" name="placeOrder" class="btn btn-success orderBtn">Place Order <i class="glyphicon glyphicon-menu-right"></i></button>
            </div>
        </form>
        </div>
    </div>
</div>

<div>
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
</div>