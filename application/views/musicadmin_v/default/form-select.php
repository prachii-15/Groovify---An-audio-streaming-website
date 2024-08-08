<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com//polygon/admindek/default/form-select.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jan 2019 05:55:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Admindek | Admin Template</title>


<!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="colorlib" />

<link rel="icon" href="https://colorlib.com//polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="../files/bower_components/select2/css/select2.min.css" />

<link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css" />
<link rel="stylesheet" type="text/css" href="../files/bower_components/multiselect/css/multi-select.css" />

<link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="../files/assets/css/pages.css">
</head>
<body>

<div class="loader-bg">
<div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">

<?php include_once("nav.php") ?>

<div id="sidebar" class="users p-chat-user showChat">
<div class="had-container">
<div class="p-fixed users-main">
<div class="user-box">
<div class="chat-search-box">
<a class="back_friendlist">
<i class="feather icon-x"></i>
</a>
<div class="right-icon-control">
 <div class="input-group input-group-button">
<input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
<div class="input-group-append">
<button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
</div>
</div>
</div>
</div>
<div class="main-friend-list">
<div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
<a class="media-left" href="#!">
<img class="media-object img-radius img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="chat-header">Josephin Doe</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary Doe</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alice</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
<div class="live-status bg-default"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
<div class="live-status bg-default"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="showChat_inner">
<div class="media chat-inner-header">
<a class="back_chatBox">
<i class="feather icon-x"></i> Josephin Doe
</a>
</div>
<div class="main-friend-chat">
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
</div>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
<div class="media chat-messages">
<div class="media-body chat-menu-reply">
<div class="">
<p class="chat-cont">Ohh! very nice</p>
</div>
<p class="chat-time">8:22 a.m.</p>
</div>
</div>
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">can you come with me?</p>
</div>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
</div>
<div class="chat-reply-box">
<div class="right-icon-control">
<div class="input-group input-group-button">
<input type="text" class="form-control" placeholder="Write hear . . ">
<div class="input-group-append">
<button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
</div>
</div>
</div>
</div>
</div>

<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<?php include_once("sidebar.php") ?>

<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-feather bg-c-blue"></i>
<div class="d-inline">
<h5>Form Select</h5>
<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href="index.html"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item">
<a href="#!">Form Select</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">

<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5>Default Select</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Default Select</h4>
<select name="select" class="form-control form-control-default">
<option value="opt1">Select One Value Only</option>
<option value="opt2">Type 2</option>
<option value="opt3">Type 3</option>
<option value="opt4">Type 4</option>
<option value="opt5">Type 5</option>
<option value="opt6">Type 6</option>
<option value="opt7">Type 7</option>
<option value="opt8">Type 8</option>
</select>
</div>
<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Primary Select</h4>
<select name="select" class="form-control form-control-primary">
<option value="opt1">Select One Value Only</option>
<option value="opt2">Type 2</option>
 <option value="opt3">Type 3</option>
<option value="opt4">Type 4</option>
<option value="opt5">Type 5</option>
<option value="opt6">Type 6</option>
<option value="opt7">Type 7</option>
<option value="opt8">Type 8</option>
</select>
</div>
<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Success Select</h4>
<select name="select" class="form-control form-control-success">
<option value="opt1">Select One Value Only</option>
<option value="opt2">Type 2</option>
<option value="opt3">Type 3</option>
<option value="opt4">Type 4</option>
<option value="opt5">Type 5</option>
<option value="opt6">Type 6</option>
<option value="opt7">Type 7</option>
<option value="opt8">Type 8</option>
</select>
</div>
<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Info Select</h4>
<select name="select" class="form-control form-control-info">
<option value="opt1">Select One Value Only</option>
<option value="opt2">Type 2</option>
<option value="opt3">Type 3</option>
<option value="opt4">Type 4</option>
<option value="opt5">Type 5</option>
<option value="opt6">Type 6</option>
<option value="opt7">Type 7</option>
<option value="opt8">Type 8</option>
</select>
</div>
</div>
<div class="row">
<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Warning Select</h4>
<select name="select" class="form-control form-control-warning">
<option value="opt1">Select One Value Only</option>
 <option value="opt2">Type 2</option>
<option value="opt3">Type 3</option>
<option value="opt4">Type 4</option>
<option value="opt5">Type 5</option>
<option value="opt6">Type 6</option>
<option value="opt7">Type 7</option>
<option value="opt8">Type 8</option>
</select>
</div>
<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Danger Select</h4>
<select name="select" class="form-control form-control-danger">
<option value="opt1">Select One Value Only</option>
<option value="opt2">Type 2</option>
<option value="opt3">Type 3</option>
<option value="opt4">Type 4</option>
<option value="opt5">Type 5</option>
<option value="opt6">Type 6</option>
<option value="opt7">Type 7</option>
<option value="opt8">Type 8</option>
</select>
</div>
<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Inverse Select</h4>
<select name="select" class="form-control form-control-inverse">
<option value="opt1">Select One Value Only</option>
<option value="opt2">Type 2</option>
<option value="opt3">Type 3</option>
<option value="opt4">Type 4</option>
<option value="opt5">Type 5</option>
<option value="opt6">Type 6</option>
<option value="opt7">Type 7</option>
<option value="opt8">Type 8</option>
</select>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5>Select2</h5>
 <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Single Select</h4>
<p><code>select2</code> can take a regular select box like this...
</p>
<select class="js-example-basic-single col-sm-12">
<optgroup label="Developer">
<option value="AL">Alabama</option>
<option value="WY">Wyoming</option>
</optgroup>
<optgroup label="Designer">
<option value="WY">Peter</option>
<option value="WY">Hanry Die</option>
<option value="WY">John Doe</option>
</optgroup>
</select>
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Multi Select</h4>
<p>The select below is declared with the
<code>multiple</code> attribute</p>
<select class="js-example-basic-multiple col-sm-12" multiple="multiple">
<option value="AL">Alabama</option>
<option value="WY">Wyoming</option>
<option value="WY">Coming</option>
<option value="WY">Hanry Die</option>
<option value="WY">John Doe</option>
</select>
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">With Placeholder</h4>
<p><code>select2</code> uses the <code>placeholder</code> attribute on multiple select boxes</p>
<select class="js-example-placeholder-multiple col-sm-12" multiple="multiple">
<option value="AL">Alabama</option>
<option value="WY">Wyoming</option>
<option value="WY">Coming</option>
<option value="WY">Hanry Die</option>
<option value="WY">John Doe</option>
</select>
</div>
</div>
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Tagging Support</h4>
<p>The select below is declared with the class<code>.js-example-tags</code>
</p>
<select class="js-example-tags col-sm-12" multiple="multiple">
<option value="AL">Alabama</option>
<option value="WY">Wyoming</option>
<option value="WY">Coming</option>
<option value="WY">Hanry Die</option>
<option value="WY">John Doe</option>
</select>
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Automatic Tokenization</h4>
<p>The select below is declared with the class<code>.js-example-tokenizer</code>
</p>
<select class="js-example-tokenizer col-sm-12" multiple="multiple">
<option value="AL">Alabama</option>
<option value="WY">Wyoming</option>
<option value="WY">Coming</option>
<option value="WY">Hanry Die</option>
<option value="WY">John Doe</option>
</select>
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">RTL Support</h4>
<p>The select below is declared with the class<code>.js-example-rtl</code>
</p>
<select class="js-example-rtl col-sm-12" multiple="multiple">
<option value="AL">Alabama</option>
<option value="WY">Wyoming</option>
<option value="WY">Coming</option>
<option value="WY">Hanry Die</option>
<option value="WY">John Doe</option>
 </select>
</div>
</div>
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Limiting The Number Of Selections</h4>
<p>The select below is declared with the class<code>.js-example-basic-multiple-limit</code>
</p>
<select class="js-example-basic-multiple-limit col-sm-12" multiple="multiple">
<option value="AL">Alabama</option>
<option value="WY">Wyoming</option>
<option value="WY">Coming</option>
<option value="WY">Hanry Die</option>
<option value="WY">John Doe</option>
</select>
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Diacritics Support</h4>
<p>The select below is declared with the class<code>.js-example-diacritics</code>
</p>
<select class="js-example-diacritics col-sm-12" multiple="multiple">
<option value="AL">Alabama</option>
<option value="WY">Wyoming</option>
<option value="WY">Coming</option>
<option value="WY">Hanry Die</option>
<option value="WY">John Doe</option>
</select>
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Responsive Width</h4>
<p>The select below is declared with the class<code>.js-example-responsive</code>
</p>
<select class="js-example-responsive col-sm-12" multiple="multiple" style="width:75%;">
<option value="AL">Alabama</option>
<option value="WY">Wyoming</option>
<option value="WY">Coming</option>
<option value="WY">Hanry Die</option>
<option value="WY">John Doe</option>
 </select>
</div>
</div>
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Loading With Array</h4>
<p>The select below is declared with the class<code>.js-example-data-array</code>
</p>
<select class="js-example-data-array col-sm-12"></select>
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Loading Remote Data ( Ajax )</h4>
<p>The select below is declared with the class<code>.js-data-example-ajax</code>
</p>
<select class="js-data-example-ajax col-sm-12">
<option value="3620194" selected="selected">select2
</option>
</select>
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Disabled Results</h4>
<p>The select below is declared with the class<code>.js-example-disabled-results</code>
</p>
<select class="js-example-disabled-results col-sm-12">
<option value="one">First</option>
<option value="two" disabled="disabled">Second
(disabled)
</option>
<option value="three">Third</option>
</select>
</div>
</div>
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Hiding The Search Box</h4>
<p>The select below is declared with the class<code>.js-example-basic-hide-search</code>
</p>
<select class="js-example-basic-hide-search col-sm-12" multiple="multiple" style="width: 75%">
<optgroup label="Developer">
<option value="AL">Smith</option>
<option value="WY">Peter</option>
<option value="WY">James</option>
<option value="WY">Hanry Die</option>
<option value="WY">John Doe</option>
<option value="WY">Harry Poter</option>
</optgroup>
</select>
</div>
<div class="col-sm-12 col-xl-8">
<h4 class="sub-title">Enable-Disable</h4>
<p>The select below is declared with the class<code>.js-example-disabled</code></p>
<select class="js-example-disabled col-sm-8">
<option value="AL">Smith</option>
<option value="WY">Peter</option>
<option value="WY">James</option>
<option value="WY">Hanry Die</option>
<option value="WY">John Doe</option>
<option value="WY">Harry Poter</option>
</select>
<button class="btn btn-success m-t-20 waves-effect waves-light js-programmatic-enable ">
Enable
</button>
<button class="btn btn-danger m-t-20 m-l-10 waves-effect waves-light js-programmatic-disable">
Disable
</button>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5>Multi-Select</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Single</h4>
<select id="hello-single" class="form-control">
<option value="cheese">Cheese</option>
 <option value="h">Hanry Die</option>
<option value="c">Come Leo</option>
<option value="h">Hampri Catlin</option>
</select>
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Multiple</h4>
<select id="hello-single-2" class="form-control">
<option value="cheese">Cheese</option>
<option value="h">Hanry Die</option>
<option value="c">Come Leo</option>
<option value="h">Hampri Catlin</option>
</select>
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">All Group Option Select</h4>
<select id="hello-single-3" class="form-control">
<option value="cheese">Cheese</option>
<option value="h">Hanry Die</option>
<option value="c">Come Leo</option>
<option value="h">Hampri Catlin</option>
</select>
</div>
</div>
<div class="row">
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Pre-Selected Options</h4>
<select multiple="multiple" id="my-select" name="my-select[]">
<option value='elem_1' selected="">elem 1</option>
<option value='elem_2'>elem 2</option>
<option value='elem_3'>elem 3</option>
<option value='elem_4'>elem 4</option>
<option value='elem_5'>elem 5</option>
</select>
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Custom Headers And Footers</h4>
<select id='custom-headers1' multiple='multiple'>
<option value='elem_1'>elem 1</option>
<option value='elem_2'>elem 2</option>
<option value='elem_3'>elem 3</option>
<option value='elem_4'>elem 4</option>
<option value='elem_5'>elem 5</option>
<option value='elem_6'>elem 6</option>
<option value='elem_7'>elem 7</option>
<option value='elem_8'>elem 8</option>
<option value='elem_9'>elem 9</option>
<option value='elem_10'>elem 10</option>
</select>
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Optgroup</h4>
<select id='optgroup' multiple='multiple'>
<optgroup label='Friends'>
<option value='1'>Yoda</option>
<option value='2' selected>Obiwan</option>
</optgroup>
<optgroup label='Enemies'>
<option value='3'>Palpatine</option>
<option value='4' disabled>Darth Vader</option>
</optgroup>
</select>
</div>
</div>
<div class="row">
<div class="col-sm-12 col-xl-6 m-b-30">
<h4 class="sub-title">Searchable</h4>
<select id='custom-headers' class="searchable" multiple='multiple'>
<option value='elem_1' selected>elem 1</option>
<option value='elem_2'>elem 2</option>
<option value='elem_3'>elem 3</option>
<option value='elem_4' selected>elem 4</option>
<option value='elem_5'>elem 5</option>
<option value='elem_6'>elem 6</option>
<option value='elem_7'>elem 7</option>
<option value='elem_8'>elem 8</option>
<option value='elem_9'>elem 9</option>
<option value='elem_10'>elem 10</option>
<option value='elem_11'>elem 11</option>
<option value='elem_12'>elem 12</option>
<option value='elem_13'>elem 13</option>
<option value='elem_14'>elem 14</option>
<option value='elem_15'>elem 15</option>
<option value='elem_16'>elem 16</option>
</select>
</div>
<div class="col-sm-12 col-xl-6">
<h4 class="sub-title">Public Methods</h4>
<button type="button" class="btn btn-primary waves-effect waves-light m-b-10" id='select-all'>select all
</button>
<button type="button" class="btn btn-primary waves-effect waves-light m-b-10" id='deselect-all'>deselect all
</button>
<button type="button" class="btn btn-primary waves-effect waves-light m-b-10" id='select-5'>select 5 elems
</button>
<button type="button" class="btn btn-primary waves-effect waves-light m-b-10" id='deselect-5'>deselect 5 elems
</button>
<select id='public-methods' multiple='multiple'>
<option value='elem_1'>elem 1</option>
<option value='elem_2' disabled>elem 2</option>
<option value='elem_3'>elem 3</option>
<option value='elem_4'>elem 4</option>
<option value='elem_5'>elem 5</option>
<option value='elem_6'>elem 6</option>
<option value='elem_7'>elem 7</option>
<option value='elem_8'>elem 8</option>
<option value='elem_9'>elem 9</option>
<option value='elem_10'>elem 10</option>
</select>
</div>
</div>
</div>
</div>

</div>
</div>
</div>

</div>
</div>
</div>
</div>

<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>


<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="../files/assets/pages/waves/js/waves.min.js"></script>

<script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="text/javascript" src="../files/bower_components/select2/js/select2.full.min.js"></script>

<script type="text/javascript" src="../files/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js">
</script>
<script type="text/javascript" src="../files/bower_components/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="../files/assets/js/jquery.quicksearch.js"></script>

<script type="text/javascript" src="../files/assets/pages/advance-elements/select2-custom.js"></script>
<script src="../files/assets/js/pcoded.min.js"></script>
<script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../files/assets/js/script.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

<!-- Mirrored from colorlib.com//polygon/admindek/default/form-select.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jan 2019 05:55:06 GMT -->
</html>
