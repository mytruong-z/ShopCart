<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->library('session');
$user_detail = $this->session->userdata('user_data_session');
$name = $user_detail['name'];

if($content == 'dashboard') {$this->load->view('admin/home'); $selected = $content;$content='';}
if($content == 'modules') {$this->load->view('admin/modules'); $selected = $content;$content='';}
if($content == 'users') {$this->load->view('admin/users'); $selected = $content;$content='';}
if($content == 'blank_page1') {$this->load->view('admin/blank_page1'); $selected = $content;$content='';}
if($content == 'blank_page2') {$this->load->view('admin/blank_page2'); $selected = $content;$content='';}
if($content == 'settings') {$this->load->view('admin/settings'); $selected = $content;$content='';}
if($content == 'profile') {$this->load->view('admin/profile'); $selected = $content;$content='';}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets4/css/sb-admin.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets4/css/style.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets4/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"  -->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url();?>home">Admin Panel</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $name;?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo base_url(); ?>profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>settings"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?php echo base_url(); ?>logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" >
            <ul class="nav navbar-nav side-nav">
                <?php
                if ($selected == 'dashboard') 	echo '<li class="active" >';
                else echo '<li>';
                ?>
                <a href="<?php echo base_url(); ?>home"><i class="fa fa-fw fa-dashboard"></i> Dashboard<?php echo '';?></a>
                </li>
                <?php
                if ($selected == 'modules') 	echo '<li class="active" >';
                else echo '<li>';
                ?>
                <a href="<?php echo base_url(); ?>modules"><i class="fa fa-fw fa-desktop"></i> Modules</a>
                </li>
                <?php
                if ($selected == 'users') 	echo '<li class="active" >';
                else echo '<li>';
                ?>
                <a href="<?php echo base_url(); ?>users"><i class="fa fa-fw fa-edit"></i> Users</a>
                </li>
                <?php
                if ($selected == 'blank_page1' || $selected == 'blank_page2') 	echo '<li class="active" >';
                else echo '<li>';
                ?>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-file"></i> Blank Page <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="<?php echo base_url(); ?>blank_page/blank_page1"> Blank Page 1</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>blank_page/blank_page2"> Blank Page 2</a>
                    </li>
                </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="foo-bottom">
        <a href="http://ExplicitPHP.blogspot.com" id="txt-standard">
            2016 ExplicitPHP. PHP is Easy.
        </a>
    </div>

</div>

<!-- jQuery -->
<script src="<?php echo base_url();?>assets4/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>assets4/js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?php echo base_url();?>assets4/js/plugins/morris/raphael.min.js"></script>
<script src="<?php echo base_url();?>assets4/js/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url();?>assets4/js/plugins/morris/morris-data.js"></script>

</body>

</html>

