<?php 
session_start();
if(!isset($_SESSION['id']))
 header("location:/login.html");
?>
<!DOCTYPE html>
<html>
 <?php 
 $page['title'] = "Dashboard";
 ?>

<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Bru - Hostel Allocation - Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
<script src="../../../../cdn-cgi/apps/head/vAzQ3pO_LVF9Y_-CSxLP87NslSA.js"></script><link rel="apple-touch-icon" href="pages/ico/60.png">
<link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
<link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
<link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
<link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
<link href="assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen" />
<link href="assets/plugins/mapplic/css/mapplic.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen">
<link href="assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="assets/css/dashboard.widgets.css" rel="stylesheet" type="text/css" media="screen" />
<link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
<link class="main-stylesheet" href="pages/css/pages.css" rel="stylesheet" type="text/css" />
</head>


<body class="fixed-header horizontal-menu horizontal-app-menu dashboard">

<?php include "header.inc.php"; ?>

<div class="page-container ">

<div class="page-content-wrapper ">

<div class="content sm-gutter">

<div data-pages="parallax">
 
<div class=" container no-padding    container-fixed-lg">
<div class="inner">

<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Dashboard</li>
</ol>
</div>
</div>
</div>


<div class="container sm-padding-10 no-padding">

<div class="row">
<div class="col-lg-3 col-sm-6 d-flex flex-column">


<div class="card social-card share  full-width m-b-10 no-border" data-social="item">
<div class="card-header ">
<h5 class="text-complete pull-left fs-12">News <i class="fa fa-circle text-complete fs-11"></i></h5>
<div class="pull-right small hint-text">
5,345 <i class="fa fa-comment-o"></i>
</div>
<div class="clearfix"></div>
</div>
<div class="card-description">
<h3>Ebola outbreak: Clinical drug trials to start next month as death toll mounts</h3>
</div>
<div class="card-footer clearfix">
<div class="pull-left">via <span class="text-complete">CNN</span>
</div>
<div class="pull-right hint-text">
Apr 23
</div>
<div class="clearfix"></div>
</div>
</div>



<div class="card no-border widget-loader-bar m-b-10">
<div class="container-xs-height full-height">
<div class="row-xs-height">
<div class="col-xs-height col-top">
<div class="card-header  top-left top-right">
<div class="card-title">
<span class="font-montserrat fs-11 all-caps">Weekly Sales <i class="fa fa-chevron-right"></i>
</span>
</div>
<div class="card-controls">
<ul>
<li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="row-xs-height">
<div class="col-xs-height col-top">
<div class="p-l-20 p-t-50 p-b-40 p-r-20">
<h3 class="no-margin p-b-5">$24,000</h3>
<span class="small hint-text pull-left">71% of total goal</span>
<span class="pull-right small text-primary">$23,000</span>
</div>
</div>
</div>
<div class="row-xs-height">
<div class="col-xs-height col-bottom">
<div class="progress progress-small m-b-0">

<div class="progress-bar progress-bar-primary" style="width:71%"></div>

</div>
</div>
</div>
</div>
</div>


<div class="card no-border widget-loader-bar m-b-10">
<div class="container-xs-height full-height">
<div class="row-xs-height">
<div class="col-xs-height col-top">
<div class="card-header  top-left top-right">
<div class="card-title">
<span class="font-montserrat fs-11 all-caps">Page Visits <i class="fa fa-chevron-right"></i>
</span>
</div>
<div class="card-controls">
<ul>
<li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="row-xs-height">
<div class="col-xs-height col-top">
<div class="p-l-20 p-t-50 p-b-40 p-r-20">
<h3 class="no-margin p-b-5">423</h3>
<span class="small hint-text pull-left">22% higher</span>
<span class="pull-right small text-danger">$23,000</span>
</div>
</div>
</div>
<div class="row-xs-height">
<div class="col-xs-height col-bottom">
<div class="progress progress-small m-b-0">

<div class="progress-bar progress-bar-danger" style="width:15%"></div>

</div>
</div>
</div>
</div>
</div>

</div>
<div class="col-lg-3 col-sm-6 d-flex flex-column">

<div class="card social-card share  full-width m-b-10 no-border" data-social="item">
<div class="card-header clearfix">
<h5 class="text-success pull-left fs-12">Stock Market <i class="fa fa-circle text-success fs-11"></i></h5>
<div class="pull-right small hint-text">
5,345 <i class="fa fa-comment-o"></i>
</div>
<div class="clearfix"></div>
</div>
<div class="card-description">
<h5 class='hint-text no-margin'>Apple Inc.</h5>
<h5 class="small hint-text no-margin">NASDAQ: AAPL - Nov 13 8:37 AM ET</h5>
<h3 class="m-b-0">111.25 <span class="text-success"><i class="fa fa-sort-up small text-success"></i> 0.15</span>
</h3>
</div>
<div class="card-footer clearfix">
<div class="pull-left">by <span class="text-success">John Smith</span>
</div>
<div class="pull-right hint-text">
Apr 23
</div>
<div class="clearfix"></div>
</div>
</div>


<div class="card social-card share share-other full-width m-b-10 d-flex flex-1 full-height no-border sm-vh-75" data-social="item">
<div class="circle" data-toggle="tooltip" title="Label" data-container="body">
</div>
<div class="card-content flex-1" data-pages-bg-image="assets/img/social_new.jpg">
<ul class="buttons ">
<li>
<a href="#"><i class="fa fa-expand"></i>
</a>
</li>
<li>
<a href="#"><i class="fa fa-heart-o"></i>
</a>
</li>
</ul>
</div>
<div class="card-description">
<p><a href="#">#TBT</a> :D</p>
</div>
<div class="card-footer clearfix">
<div class="time">few seconds ago</div>
<ul class="reactions">
<li><a href="#">5,345 <i class="fa fa-comment-o"></i></a>
</li>
<li><a href="#">23K <i class="fa fa-heart-o"></i></a>
</li>
</ul>
</div>
<div class="card-header clearfix">
<div class="user-pic">
<img alt="Avatar" width="33" height="33" data-src-retina="assets/img/profiles/avatar_small2x.jpg" data-src="assets/img/profiles/avatar.jpg" src="assets/img/profiles/avatar_small2x.jpg">
</div>
<h5>David Nester</h5>
<h6>Shared a link on your wall</h6>
</div>
</div>

</div>
<div class="col-lg-6 m-b-10 d-flex flex-column">

<div class="widget-12 card no-border widget-loader-circle no-margin col ar-1-1 sm-vh-75">
<div class="row">
<div class="col-xlg-8 ">
<div class="card-header pull-up top-right ">
<div class="card-controls">
<ul>
<li class="hidden-xlg">
<div class="dropdown">
<a data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
<i class="portlet-icon portlet-icon-settings"></i>
</a>
<ul class="dropdown-menu pull-right" role="menu">
<li><a href="#">AAPL</a>
</li>
<li><a href="#">YHOO</a>
</li>
<li><a href="#">GOOG</a>
</li>
</ul>
</div>
</li>
<li>
<a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i class="portlet-icon portlet-icon-refresh"></i></a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="card-block d-flex flex-column">
<div class="">
<div class="d-flex flex-row">
<h2 class="m-t-5 m-b-5">Apple Inc.</h2>
<h2 class="m-l-50 m-t-5 m-b-5 text-danger">
<span class="">448.97</span>
<span class="text-danger fs-12">-318.24</span>
</h2>
</div>
<div class="full-width">
<ul class="list-inline m-b-0">
<li><a href="#" class="font-montserrat text-master">1D</a>
</li>
<li class="active"><a href="#" class="font-montserrat  bg-master-light text-master">5D</a>
</li>
<li><a href="#" class="font-montserrat text-master">1M</a>
</li>
<li><a href="#" class="font-montserrat text-master">1Y</a>
</li>
</ul>
</div>
</div>
<div class="nvd3-line line-chart text-center flex-1 relative" data-x-grid="false">
<svg class="absolute full-height full-width"></svg>
</div>
</div>
</div>

</div>
</div>


<div class="row m-b-30">
<div class="col-lg-7">

<div class="row md-m-b-10">
<div class="col-sm-6">

<div class=" card no-border  no-margin widget-loader-circle todolist-widget pending-projects-widget">
 <div class="card-header ">
<div class="card-title">
<span class="font-montserrat fs-11 all-caps">
Recent projects <i class="fa fa-chevron-right"></i>
</span>
</div>
<div class="card-controls">
<ul>
<li><a href="#" class="card-refresh text-black" data-toggle="refresh"><i class="card-icon card-icon-refresh"></i></a>
</li>
</ul>
</div>
</div>
<div class="card-block">
<h5 class="">Ongoing projects at <span class="semi-bold">pages</span></h5>
<ul class="nav nav-tabs nav-tabs-simple m-b-20" role="tablist" data-init-reponsive-tabs="collapse">
<li class="nav-item"><a href="#pending" class="active" data-toggle="tab" role="tab" aria-expanded="true">Pending</a>
</li>
<li class="nav-item"><a href="#completed" data-toggle="tab" role="tab" aria-expanded="false">Completed</a>
</li>
</ul>
<div class="tab-content no-padding">
<div class="tab-pane active" id="pending">
<div class="p-t-15">
<div class="d-flex">
<span class="icon-thumbnail bg-master-light pull-left text-master">ws</span>
<div class="flex-1 full-width overflow-ellipsis">
<p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">Revox Ltd
</p>
<h5 class="no-margin overflow-ellipsis ">Marketing Campaign for revox</h5>
</div>
</div>
<div class="m-t-15">
<p class="hint-text fade small pull-left">71% compleated from total</p>
<a href="#" class="pull-right text-master"><i class="pg-more"></i></a>
<div class="clearfix"></div>
</div>
<div class="progress progress-small m-b-15 m-t-10">

<div class="progress-bar progress-bar-info" style="width:71%"></div>

</div>
</div>
<div class="p-t-15">
<div class="d-flex">
<span class="icon-thumbnail bg-warning-light pull-left text-master">cr</span>
<div class="flex-1 full-width overflow-ellipsis">
<p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">Nike Ltd
</p>
<h5 class="no-margin overflow-ellipsis ">Corporate rebranding</h5>
</div>
</div>
<div class="m-t-15">
<p class="hint-text fade small pull-left">20% compleated from total</p>
<a href="#" class="pull-right text-master"><i class="pg-more"></i></a>
<div class="clearfix"></div>
</div>
<div class="progress progress-small m-b-15 m-t-10">

<div class="progress-bar progress-bar-warning" style="width:20%"></div>

</div>
</div>
 <a href="#" class="btn btn-block m-t-30">See all projects</a>
</div>
<div class="tab-pane" id="completed">
<div class="p-t-15">
<div class="d-flex">
<span class="icon-thumbnail bg-master-light pull-left text-master">ws</span>
<div class="flex-1 full-width overflow-ellipsis">
<p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">Apple Corp
</p>
<h5 class="no-margin overflow-ellipsis ">Marketing Campaign for revox</h5>
</div>
<div class="clearfix"></div>
</div>
<div class="m-t-15">
<p class="hint-text fade small pull-left">45% compleated from total</p>
<a href="#" class="pull-right text-master"><i class="pg-more"></i></a>
<div class="clearfix"></div>
</div>
<div class="progress progress-small m-b-15 m-t-10">

<div class="progress-bar progress-bar-info" style="width:45%"></div>

</div>
</div>
<div class="p-t-15">
<div class="d-flex">
<span class="icon-thumbnail bg-warning-light pull-left text-master">cr</span>
<div class="flex-1 full-width overflow-ellipsis">
<p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">Yahoo Inc
</p>
<h5 class="no-margin overflow-ellipsis ">Corporate rebranding</h5>
</div>
<div class="clearfix"></div>
</div>
<div class="m-t-25">
<p class="hint-text fade small pull-left">20% compleated from total</p>
<a href="#" class="pull-right text-master"><i class="pg-more"></i></a>
<div class="clearfix"></div>
</div>
<div class="progress progress-small m-b-15 m-t-10">

<div class="progress-bar progress-bar-warning" style="width:20%"></div>

</div>
</div>
<a href="#" class="btn btn-block m-t-30">See all projects</a>
</div>
</div>
</div>
</div>

</div>
<div class="col-sm-6 sm-m-t-10 d-flex align-items-stretch">

<div class=" card no-border  no-margin widget-loader-circle todolist-widget align-self-stretch">
<div class="card-header">
<div class="card-title">TODOLIST
</div>
<div class="card-controls">
<ul>
<li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
</li>
</ul>
</div>
</div>
<ul class="list-unstyled p-l-20 p-r-20 p-t-10 m-b-20">
<li>
<h5 class="pull-left normal no-margin">28th September</h5>
<a href="#" class="text-black pull-right m-l-5" data-toggle="refresh"><i class="fa fa-angle-right"></i></a>
<a href="#" class="text-black pull-right m-r-5" data-toggle="refresh"><i class="fa fa-angle-left"></i></a>
</li>
<div class="clearfix"></div>
</ul>
<div class="task-list p-t-0 p-r-20 p-b-20 p-l-20 clearfix flex-1">

<div class="task clearfix row completed">
<div class="task-list-title col-10 justify-content-between">
<a href="#" class="text-master strikethrough" data-task="name">Purchase Pages before 10am
</a>
<i class="fs-14 pg-close hidden"></i>
</div>
<div class="checkbox checkbox-circle no-margin text-center col-2 d-flex justify-content-center">
<input type="checkbox" checked="checked" value="1" id="todocheckbox" data-toggler="task" class="hidden">
<label for="todocheckbox" class=" no-margin no-padding absolute"></label>
</div>
</div>


<div class="task clearfix row">
<div class="task-list-title col-10 justify-content-between">
<a href="#" class="text-master" data-task="name">Meeting with CFO
</a>
<i class="fs-14 pg-close hidden"></i>
</div>
<div class="checkbox checkbox-circle no-margin text-center col-2 d-flex justify-content-center">
<input type="checkbox" value="1" id="todocheck2" data-toggler="task" class="hidden">
<label for="todocheck2" class=" no-margin no-padding absolute"></label>
</div>
</div>


<div class="task clearfix row">
<div class="task-list-title col-10 justify-content-between">
<a href="#" class="text-master" data-task="name">AGM Conference at 1pm
</a>
<i class="fs-14 pg-close hidden"></i>
</div>
<div class="checkbox checkbox-circle no-margin text-center col-2 d-flex justify-content-center">
<input type="checkbox" value="1" id="todocheck3" data-toggler="task" class="hidden">
<label for="todocheck3" class=" no-margin no-padding absolute"></label>
</div>
</div>


<div class="task clearfix row">
<div class="task-list-title col-10 justify-content-between">
<a href="#" class="text-master" data-task="name">Revise Annual Reports
</a>
<i class="fs-14 pg-close hidden"></i>
</div>
<div class="checkbox checkbox-circle no-margin text-center col-2 d-flex justify-content-center">
<input type="checkbox" value="1" id="todocheck4" data-toggler="task" class="hidden">
<label for="todocheck4" class=" no-margin no-padding absolute"></label>
</div>
</div>

</div>
<div class="clearfix"></div>
<div class="bg-master-light padding-20 full-width ">
<div class="row">
<div class="col-10">
<p class="no-margin normal text-black">Type Event Here</p>
<div class="input-group transparent no-border full-width">
<input class="form-control transparent p-l-0" type="text" placeholder="What do you need to remeber?">
</div>
</div>
<div class="col-2 text-center">
<a href="#" class="block m-t-15"><img src="assets/img/plus.svg"></a>
</div>
</div>
</div>
</div>

</div>
</div>

</div>
<div class="col-lg-5 sm-m-t-10 d-flex align-items-stretch">

<div class="widget-11-2 card no-border card-condensed no-margin widget-loader-circle d-flex flex-column align-self-stretch">
<div class="card-header top-right">
<div class="card-controls">
<ul>
<li><a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i class="portlet-icon portlet-icon-refresh"></i></a>
</li>
</ul>
</div>
</div>
<div class="padding-25">
<div class="pull-left">
<h2 class="text-success no-margin">webarch</h2>
<p class="no-margin">Today's sales</p>
</div>
<h3 class="pull-right semi-bold"><sup>
<small class="semi-bold">$</small>
</sup> 102,967
</h3>
<div class="clearfix"></div>
</div>
<div class="auto-overflow widget-11-2-table">
<table class="table table-condensed table-hover">
<tbody>
<tr>
<td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
<td class="text-right hidden-lg">
<span class="hint-text small">dewdrops</span>
</td>
<td class="text-right b-r b-dashed b-grey w-25">
<span class="hint-text small">Qty 1</span>
</td>
<td class="w-25">
<span class="font-montserrat fs-18">$27</span>
</td>
</tr>
<tr>
<td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
<td class="text-right hidden-lg">
<span class="hint-text small">dewdrops</span>
</td>
<td class="text-right b-r b-dashed b-grey w-25">
<span class="hint-text small">Qty 1</span>
</td>
<td class="w-25">
<span class="font-montserrat fs-18">$27</span>
</td>
</tr>
<tr>
<td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
<td class="text-right hidden-lg">
<span class="hint-text small">dewdrops</span>
</td>
<td class="text-right b-r b-dashed b-grey w-25">
<span class="hint-text small">Qty 1</span>
</td>
<td class="w-25">
<span class="font-montserrat fs-18">$27</span>
</td>
</tr>
<tr>
<td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
<td class="text-right hidden-lg">
<span class="hint-text small">dewdrops</span>
</td>
<td class="text-right b-r b-dashed b-grey w-25">
<span class="hint-text small">Qty 1</span>
</td>
<td class="w-25">
<span class="font-montserrat fs-18">$27</span>
</td>
</tr>
<tr>
<td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
<td class="text-right hidden-lg">
<span class="hint-text small">dewdrops</span>
</td>
<td class="text-right b-r b-dashed b-grey w-25">
<span class="hint-text small">Qty 1</span>
</td>
<td class="w-25">
<span class="font-montserrat fs-18">$27</span>
</td>
</tr>
<tr>
<td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
<td class="text-right hidden-lg">
<span class="hint-text small">dewdrops</span>
</td>
<td class="text-right b-r b-dashed b-grey w-25">
<span class="hint-text small">Qty 1</span>
</td>
<td class="w-25">
<span class="font-montserrat fs-18">$27</span>
</td>
</tr>
<tr>
<td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
<td class="text-right hidden-lg">
<span class="hint-text small">dewdrops</span>
</td>
<td class="text-right b-r b-dashed b-grey w-25">
<span class="hint-text small">Qty 1</span>
</td>
<td class="w-25">
<span class="font-montserrat fs-18">$27</span>
</td>
</tr>
<tr>
<td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
<td class="text-right hidden-lg">
<span class="hint-text small">dewdrops</span>
</td>
<td class="text-right b-r b-dashed b-grey w-25">
<span class="hint-text small">Qty 1</span>
</td>
<td class="w-25">
<span class="font-montserrat fs-18">$27</span>
</td>
</tr>
<tr>
<td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
<td class="text-right hidden-lg">
<span class="hint-text small">dewdrops</span>
</td>
<td class="text-right b-r b-dashed b-grey w-25">
<span class="hint-text small">Qty 1</span>
</td>
<td class="w-25">
<span class="font-montserrat fs-18">$27</span>
</td>
</tr>
<tr>
<td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
<td class="text-right hidden-lg">
<span class="hint-text small">dewdrops</span>
</td>
<td class="text-right b-r b-dashed b-grey w-25">
<span class="hint-text small">Qty 1</span>
</td>
<td class="w-25">
<span class="font-montserrat fs-18">$27</span>
</td>
</tr>
</tbody>
</table>
</div>
<div class="padding-25 mt-auto">
<p class="small no-margin">
<a href="#"><i class="fa fs-16 fa-arrow-circle-o-down text-success m-r-10"></i></a>
<span class="hint-text ">Show more details of APPLE . INC</span>
</p>
</div>
</div>

</div>
</div>

</div>

</div>




<div class=" container   container-fixed-lg footer">
<div class="copyright sm-text-center">
<p class="small no-margin pull-left sm-pull-reset">
<span class="hint-text">Copyright &copy; 2017 </span>
<span class="font-montserrat">REVOX</span>.
<span class="hint-text">All rights reserved. </span>
<span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> <span class="muted">|</span> <a href="#" class="m-l-10">Privacy Policy</a></span>
</p>
<p class="small no-margin pull-right sm-pull-reset">
Hand-crafted <span class="hint-text">&amp; made with Love</span>
</p>
<div class="clearfix"></div>
</div>
</div>

</div>

</div>


<div id="quickview" class="quickview-wrapper" data-pages="quickview">

<ul class="nav nav-tabs">
<li class="" data-target="#quickview-notes" data-toggle="tab">
<a href="#">Notes</a>
</li>
<li data-target="#quickview-alerts" data-toggle="tab">
<a href="#">Alerts</a>
</li>
<li class="active" data-target="#quickview-chat" data-toggle="tab">
<a href="#">Chat</a>
</li>
</ul>
<a class="btn-link quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="pg-close"></i></a>

<div class="tab-content">

<div class="tab-pane no-padding" id="quickview-notes">
<div class="view-port clearfix quickview-notes" id="note-views">

<div class="view list" id="quick-note-list">
<div class="toolbar clearfix">
<ul class="pull-right ">
<li>
<a href="#" class="delete-note-link"><i class="fa fa-trash-o"></i></a>
</li>
<li>
<a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-plus"></i></a>
</li>
</ul>
<button class="btn-remove-notes btn btn-xs btn-block hide"><i class="fa fa-times"></i> Delete</button>
</div>
<ul>

<li data-noteid="1">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox1" type="checkbox" value="1">
<label for="qncheckbox1"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="2">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox2" type="checkbox" value="1">
<label for="qncheckbox2"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="2">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox3" type="checkbox" value="1">
<label for="qncheckbox3"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
 <a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="3">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox4" type="checkbox" value="1">
<label for="qncheckbox4"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>


<li data-noteid="4">
<div class="left">

<div class="checkbox check-warning no-margin">
<input id="qncheckbox5" type="checkbox" value="1">
<label for="qncheckbox5"></label>
</div>


<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

</div>

<div class="right pull-right">

<span class="date">12/12/14</span>
<a href="#"><i class="fa fa-chevron-right"></i></a>

</div>

</li>

</ul>
</div>

<div class="view note" id="quick-note">
<div>
<ul class="toolbar">
<li><a href="#" class="close-note-link"><i class="pg-arrow_left"></i></a>
</li>
<li><a href="#" data-action="Bold" class="fs-12"><i class="fa fa-bold"></i></a>
</li>
<li><a href="#" data-action="Italic" class="fs-12"><i class="fa fa-italic"></i></a>
</li>
<li><a href="#" class="fs-12"><i class="fa fa-link"></i></a>
</li>
</ul>
<div class="body">
<div>
<div class="top">
<span>21st april 2014 2:13am</span>
</div>
<div class="content">
<div class="quick-note-editor full-width full-height js-input" contenteditable="true"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="tab-pane no-padding" id="quickview-alerts">
<div class="view-port clearfix" id="alerts">

<div class="view bg-white">

<div class="navbar navbar-default navbar-sm">
<div class="navbar-inner">

<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-more"></i>
</a>

<div class="view-heading">
Notications
</div>

<a href="#" class="inline action p-r-10 pull-right link text-master">
<i class="pg-search"></i>
</a>

</div>
</div>


<div data-init-list-view="ioslist" class="list-view boreded no-top-border">

<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Calendar
</div>

<ul>

<li class="alert-list">

<a href="javascript:;" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="p-l-10 overflow-ellipsis fs-12">
<span class="text-master">David Nester Birthday</span>
</p>
<p class="p-r-10 ml-auto fs-12 text-right">
<span class="text-warning">Today <br></span>
<span class="text-master">All Day</span>
</p>
</a>


</li>


<li class="alert-list">

<a href="#" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="p-l-10 overflow-ellipsis fs-12">
<span class="text-master">Meeting at 2:30</span>
</p>
<p class="p-r-10 ml-auto fs-12 text-right">
<span class="text-warning">Today</span>
</p>
</a>

</li>

</ul>
</div>

<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Social
</div>

<ul>

<li class="alert-list">

<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">Jame Smith commented on your status<br></span>
<span class="text-master">“Perfection Simplified - Company Revox"</span>
</p>
</a>

</li>


<li class="alert-list">

<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">Jame Smith commented on your status<br></span>
<span class="text-master">“Perfection Simplified - Company Revox"</span>
</p>
</a>

</li>

</ul>
</div>
<div class="list-view-group-container">

<div class="list-view-group-header text-uppercase">
Sever Status
</div>

<ul>

<li class="alert-list">

<a href="#" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<p class="">
<span class="text-danger fs-10"><i class="fa fa-circle"></i></span>
</p>
<p class="col overflow-ellipsis fs-12 p-l-10">
<span class="text-master link">12:13AM GTM, 10230, ID:WR174s<br></span>
<span class="text-master">Server Load Exceeted. Take action</span>
</p>
</a>

</li>

</ul>
</div>
</div>

</div>

</div>
</div>

<div class="tab-pane active no-padding" id="quickview-chat">
<div class="view-port clearfix" id="chat">
<div class="view bg-white">

<div class="navbar navbar-default">
<div class="navbar-inner">

<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-plus"></i>
</a>

<div class="view-heading">
Chat List
<div class="fs-11">Show All</div>
</div>

<a href="#" class="inline action p-r-10 pull-right link text-master">
<i class="pg-more"></i>
</a>

</div>
</div>

<div data-init-list-view="ioslist" class="list-view boreded no-top-border">
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">
a</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">ava flores</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">b</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">bella mccoy</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">bob stephens</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">c</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">carole roberts</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">christopher perez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">d</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">danielle fletcher</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">david sutton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">e</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
 <span class="text-master">earl hamilton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">elaine lawrence</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">ellen grant</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">erik taylor</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">everett wagner</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">f</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">freddie gomez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">g</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">glen jensen</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">gwendolyn walker</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">j</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">janet romero</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">k</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">kim martinez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">l</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">lawrence white</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">leroy bell</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">letitia carr</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">lucy castro</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">m</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">mae hayes</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marilyn owens</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marlene cole</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marsha warren</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">marsha dean</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">mia diaz</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">n</div>
<ul>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">noah elliott</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">p</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">phyllis hamilton</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">r</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">raul rodriquez</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">rhonda barnett</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">roberta king</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">s</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">scott armstrong</span>
<span class="block text-master hint-text fs-12">Hello there</span>
 </p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">sebastian austin</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">sofia davis</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">t</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">terrance young</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">theodore woods</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">todd wood</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>


<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">tommy jenkins</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
<div class="list-view-group-container">
<div class="list-view-group-header text-uppercase">w</div>
<ul>

<li class="chat-user-list clearfix">
<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
<span class="thumbnail-wrapper d32 circular bg-success">
<img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
</span>
<p class="p-l-10 ">
<span class="text-master">wilma hicks</span>
<span class="block text-master hint-text fs-12">Hello there</span>
</p>
</a>
</li>

</ul>
</div>
</div>
</div>

<div class="view chat-view bg-white clearfix">

<div class="navbar navbar-default">
<div class="navbar-inner">
<a href="javascript:;" class="link text-master inline action p-l-10 p-r-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
<i class="pg-arrow_left"></i>
</a>
<div class="view-heading">
John Smith
<div class="fs-11 hint-text">Online</div>
</div>
<a href="#" class="link text-master inline action p-r-10 pull-right ">
<i class="pg-more"></i>
</a>
</div>
</div>


<div class="chat-inner" id="my-conversation">

<div class="message clearfix">
<div class="chat-bubble from-me">
Hello there
</div>
</div>


<div class="message clearfix">
<div class="profile-img-wrapper m-t-5 inline">
<img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
</div>
<div class="chat-bubble from-them">
Hey
</div>
</div>


<div class="message clearfix">
<div class="chat-bubble from-me">
Did you check out Pages framework ?
</div>
</div>


<div class="message clearfix">
<div class="chat-bubble from-me">
Its an awesome chat
</div>
</div>


<div class="message clearfix">
<div class="profile-img-wrapper m-t-5 inline">
<img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
</div>
<div class="chat-bubble from-them">
Yea
</div>
</div>

</div>


<div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
<div class="row">
<div class="col-1 p-t-15">
<a href="#" class="link text-master"><i class="fa fa-plus-circle"></i></a>
</div>
<div class="col-8 no-padding">
<input type="text" class="form-control chat-input" data-chat-input="" data-chat-conversation="#my-conversation" placeholder="Say something">
</div>
<div class="col-2 link text-master m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
<a href="#" class="link text-master"><i class="pg-camera"></i></a>
</div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>


<div class="overlay hide" data-pages="search">

<div class="overlay-content has-results m-t-20">

<div class="container-fluid">

<img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">


<a href="#" class="close-icon-light overlay-close text-black fs-16">
<i class="pg-close"></i>
</a>

</div>

<div class="container-fluid">

<input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
<br>
<div class="inline-block">
<div class="checkbox right">
<input id="checkboxn" type="checkbox" value="1" checked="checked">
<label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
</div>
</div>
<div class="inline-block m-l-10">
<p class="fs-13">Press enter to search</p>
</div>

</div>

<div class="container-fluid">
<span>
<strong>suggestions :</strong>
</span>
<span id="overlay-suggestions"></span>
<br>
<div class="search-results m-t-40">
<p class="bold">Pages Search Results</p>
<div class="row">
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>
<img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
<p class="hint-text">via john smith</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>T</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
<p class="hint-text">via pages</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div><i class="fa fa-headphones large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
<p class="hint-text">via pagesmix</p>
</div>
</div>

</div>
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
<div><i class="fa fa-facebook large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
<p class="hint-text">via facebook</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
<div><i class="fa fa-twitter large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-text">via twitter</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
<div><i class="fa fa-google-plus large-text "></i>
</div>
</div>

 <div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-text">via google plus</p>
</div>
</div>

</div>
</div>
</div>
</div>

</div>

</div>


<script src="assets/plugins/feather-icons/feather.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/plugins/tether/js/tether.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="assets/plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript" src="assets/plugins/classie/classie.js"></script>
<script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp" type="text/javascript"></script>
<script src="assets/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/src/utils.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/src/tooltip.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/src/models/axis.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/src/models/line.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script>
<script src="assets/plugins/mapplic/js/hammer.js"></script>
<script src="assets/plugins/mapplic/js/jquery.mousewheel.js"></script>
<script src="assets/plugins/mapplic/js/mapplic.js"></script>
<script src="assets/plugins/rickshaw/rickshaw.min.js"></script>
<script src="assets/plugins/jquery-metrojs/MetroJs.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="assets/plugins/skycons/skycons.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>


<script src="pages/js/pages.min.js"></script>


<script src="assets/js/dashboard.js" type="text/javascript"></script>
<script src="assets/js/scripts.js" type="text/javascript"></script>

</body>

<!-- Mirrored from pages.revox.io/dashboard/3.0.0/html/executive/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Mar 2018 22:24:13 GMT -->
</html>