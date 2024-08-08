<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com//polygon/admindek/default/dt-ext-fixed-columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jan 2019 05:55:41 GMT -->
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

<link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="../files/assets/pages/data-table/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

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
<i class="feather icon-server bg-c-blue"></i>
<div class="d-inline">
 <h5>Fixed Columns</h5>
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
<li class="breadcrumb-item"><a href="#!">Data Table</a>
</li>
<li class="breadcrumb-item"><a href="#!">Fixed Columns</a>
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
<div class="col-lg-6">
<div class="card">
<div class="card-header">
<h5>Left And Right Fixed Columns</h5>
<span>When displaying a table which scrolls along the x-axis, it can sometimes be useful to the end user for the left most column to be fixed in place, if it shows grouping, index or similar information. This is basically the same idea as 'freeze columns' in Excel. This can be achieved with the FixedColumns plug-in for DataTables, as shown below.</span>
</div>
<div class="card-block">
<table id="left-right-fix" class="table stripe row-border order-column">
<thead>
<tr>
<th>First name</th>
<th>Last name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
<th>Extn.</th>
<th>E-mail</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger</td>
<td>Nixon</td>
 <td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>$320,800</td>
<td>5421</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b8cc96d6d1c0d7d6f8dcd9ccd9ccd9dad4ddcb96d6ddcc">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Garrett</td>
<td>Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>$170,750</td>
<td>8422</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="10773e67797e6475626350747164716471727c75633e7e7564">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Ashton</td>
<td>Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
<td>1562</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e584cb868a9da581849184918487898096cb8b8091">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cedric</td>
<td>Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
<td>6224</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="33501d58565f5f4a73575247524752515f56401d5d5647">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Airi</td>
<td>Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
 <td>$162,700</td>
<td>5407</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ef8ec19c8e9b809aaf8b8e9b8e9b8e8d838a9cc1818a9b">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brielle</td>
<td>Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
<td>4804</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="34561a435d58585d5559475b5a74505540554055565851471a5a5140">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Herrod</td>
<td>Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>$137,500</td>
<td>9608</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="274f09444f4649434b425567434653465346454b425409494253">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Rhona</td>
<td>Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>$327,900</td>
<td>6200</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="30421e5451465954435f5e70545144514451525c55431e5e5544">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Colleen</td>
<td>Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>$205,500</td>
<td>2360</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="51327f392423222511353025302530333d34227f3f3425">[email&#160;protected]</a></td>
</tr>
 <tr>
<td>Sonya</td>
<td>Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>$103,600</td>
<td>1667</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="85f6abe3f7eaf6f1c5e1e4f1e4f1e4e7e9e0f6abebe0f1">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jena</td>
<td>Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>$90,560</td>
<td>3814</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b5df9bd2d4dcdbd0c6f5d1d4c1d4c1d4d7d9d0c69bdbd0c1">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Quinn</td>
<td>Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>$342,000</td>
<td>9497</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="41306f272d382f2f01252035203520232d24326f2f2435">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Charde</td>
<td>Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>$470,600</td>
<td>6741</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="395a1754584b4a51585555795d584d584d585b555c4a17575c4d">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Haley</td>
<td>Kennedy</td>
<td>Senior Marketing Designer</td>
 <td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>$313,500</td>
<td>3597</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2d4503464843434849546d494c594c594c4f41485e03434859">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Tatyana</td>
<td>Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>$385,750</td>
<td>1965</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a0d48ec6c9d4dad0c1d4d2c9c3cbe0c4c1d4c1d4c1c2ccc5d38ecec5d4">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>$198,500</td>
<td>1581</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b8d596cbd1d4ced9f8dcd9ccd9ccd9dad4ddcb96d6ddcc">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Paul</td>
<td>Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>$725,000</td>
<td>3059</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="afdf81cdd6ddcbefcbcedbcedbcecdc3cadc81c1cadb">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gloria</td>
<td>Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>$237,500</td>
 <td>1721</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="086f2664617c7c646d486c697c697c696a646d7b26666d7c">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bradley</td>
<td>Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
<td>2558</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="771559100512120537131603160316151b120459191203">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Dai</td>
<td>Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>$217,500</td>
<td>2290</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2d49035f44425e6d494c594c594c4f41485e03434859">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jenette</td>
<td>Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>$345,000</td>
<td>1937</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d8b2f6bbb9b4bcafbdb4b498bcb9acb9acb9bab4bdabf6b6bdac">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Yuri</td>
<td>Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>$675,000</td>
<td>6154</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="334a1d515641414a73575247524752515f56401d5d5647">[email&#160;protected]</a></td>
</tr>
<tr>
 <td>Caesar</td>
<td>Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
<td>8330</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2e4d00584f404d4b6e4a4f5a4f5a4f4c424b5d00404b5a">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Doris</td>
<td>Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>$85,600</td>
<td>3023</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a8cc86dfc1c4cccddae8ccc9dcc9dcc9cac4cddb86c6cddc">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Angelica</td>
<td>Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
<td>5797</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dbbaf5a9bab6b4a89bbfbaafbaafbab9b7bea8f5b5beaf">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>$92,575</td>
<td>8822</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d4b3fabebbadb7b194b0b5a0b5a0b5b6b8b1a7fabab1a0">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
 <td>28</td>
<td>2010/11/14</td>
<td>$357,650</td>
<td>9239</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e48eca878c858a83a480859085908586888197ca8a8190">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brenden</td>
<td>Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
<td>1314</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b6d498c1d7d1d8d3c4f6d2d7c2d7c2d7d4dad3c598d8d3c2">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Fiona</td>
<td>Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>$850,000</td>
<td>2947</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="91f7bff6e3f4f4ffd1f5f0e5f0e5f0f3fdf4e2bffff4e5">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shou</td>
<td>Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>$163,000</td>
<td>8899</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ed9ec384998298ad898c998c998c8f81889ec3838899">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michelle</td>
<td>House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>$95,400</td>
<td>2769</td>
 <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5b367533342e283e1b3f3a2f3a2f3a39373e2875353e2f">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Suki</td>
<td>Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>$114,500</td>
<td>6832</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="493a672b3c3b223a092d283d283d282b252c3a67272c3d">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Prescott</td>
<td>Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>$145,000</td>
<td>3606</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fe8ed09c9f8c8a929b8a8abe9a9f8a9f8a9f9c929b8dd0909b8a">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>$235,500</td>
<td>2860</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="40276e232f3234253a00242134213421222c25336e2e2534">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Martena</td>
<td>Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>$324,050</td>
<td>8240</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7c1152111f1f0e1d053c181d081d081d1e10190f52121908">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Unity</td>
<td>Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>$85,675</td>
<td>5384</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ed98c38f989981889fad898c998c998c8f81889ec3838899">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Howard</td>
<td>Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>$164,500</td>
<td>7031</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="751d5b1d1401131c10191135111401140114171910065b1b1001">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hope</td>
<td>Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>$109,850</td>
<td>6318</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a3cb8dc5d6c6cdd7c6d0e3c7c2d7c2d7c2c1cfc6d08dcdc6d7">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Vivian</td>
<td>Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>$452,500</td>
<td>9422</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1d6b33757c6f6f7871715d797c697c697c7f71786e33737869">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Timothy</td>
<td>Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
 <td>2008/12/11</td>
<td>$136,200</td>
<td>7580</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c6b2e8aba9a9a8a3bf86a2a7b2a7b2a7a4aaa3b5e8a8a3b2">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jackson</td>
<td>Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>$645,750</td>
<td>1042</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2943074b5b484d5a41485e694d485d485d484b454c5a07474c5d">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Olivia</td>
<td>Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>$234,500</td>
<td>2120</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d3bcfdbfbab2bdb493b7b2a7b2a7b2b1bfb6a0fdbdb6a7">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bruno</td>
<td>Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
<td>6222</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0765296966746f47636673667366656b627429696273">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sakura</td>
<td>Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>$139,575</td>
<td>9383</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="62114c1b030f030f0d160d22060316031603000e07114c0c0716">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Thor</td>
<td>Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>$98,540</td>
<td>8327</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a7d389d0c6cbd3c8c9e7c3c6d3c6d3c6c5cbc2d489c9c2d3">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Finn</td>
<td>Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>$87,500</td>
<td>2927</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1a7c34797b777b7972755a7e7b6e7b6e7b78767f6934747f6e">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Serge</td>
<td>Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>$138,575</td>
<td>8352</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="afdc81cdcec3cbd8c6c1efcbcedbcedbcecdc3cadc81c1cadb">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zenaida</td>
<td>Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>$125,250</td>
<td>7439</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="afd581c9ddcec1c4efcbcedbcedbcecdc3cadc81c1cadb">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zorita</td>
<td>Serrano</td>
<td>Software Engineer</td>
 <td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>$115,000</td>
<td>4389</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="91ebbfe2f4e3e3f0fffed1f5f0e5f0e5f0f3fdf4e2bffff4e5">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>$75,650</td>
<td>3431</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ddb7f3bcbeb2aea9bc9db9bca9bca9bcbfb1b8aef3b3b8a9">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cara</td>
<td>Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
<td>3990</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="88eba6fbfcedfeede6fbc8ece9fce9fce9eae4edfba6e6edfc">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hermione</td>
<td>Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>$356,250</td>
<td>1016</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c4aceaa6b1b0a8a1b684a0a5b0a5b0a5a6a8a1b7eaaaa1b0">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Lael</td>
<td>Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>$103,500</td>
 <td>6733</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0b67256c796e6e794b6f6a7f6a7f6a69676e7825656e7f">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jonas</td>
<td>Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>$86,500</td>
<td>8196</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="305a1e515c5548515e54554270545144514451525c55431e5e5544">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shad</td>
<td>Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>$183,000</td>
<td>6373</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a0d38ec4c5c3cbc5d2e0c4c1d4c1d4c1c2ccc5d38ecec5d4">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>$183,000</td>
<td>5384</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dfb2f1bdadaabcba9fbbbeabbeabbebdb3baacf1b1baab">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Donna</td>
<td>Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>$112,000</td>
<td>4226</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="14703a677a7d70716654707560756075767871673a7a7160">[email&#160;protected]</a></td>
</tr>
</tbody>
 </table>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card">
<div class="card-header">
<h5>Right Fixed Column</h5>
<span>FixedColumns has the ability to freeze columns on both the left and right hand sides of the table. By default it will fix the first column on the left, but using the initialisation parameters leftColumns and rightColumns you can alter this to fix the columns on the right as well. This example shows a single column fixed in place, in this case the right most column.</span>
</div>
<div class="card-block">
<table id="right-fix" class="table stripe row-border order-column">
<thead>
<tr>
<th>First name</th>
<th>Last name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
<th>Extn.</th>
<th>E-mail</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger</td>
<td>Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>$320,800</td>
<td>5421</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="562278383f2e393816323722372237343a332578383322">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Garrett</td>
<td>Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>$170,750</td>
<td>8422</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="70175e07191e0415020330141104110411">[email&#160;protected]</a>bles.net</td>
</tr>
<tr>
<td>Ashton</td>
<td>Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
<td>1562</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="02632c616d7a42666376637663606e67712c6c6776">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cedric</td>
<td>Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
<td>6224</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b2d19cd9d7dedecbf2d6d3c6d3c6d3d0ded7c19cdcd7c6">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Airi</td>
<td>Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
<td>5407</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b9d897cad8cdd6ccf9ddd8cdd8cdd8dbd5dcca97d7dccd">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brielle</td>
<td>Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
<td>4804</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f290dc859b9e9e9b939f819d9cb2969386938693909e9781dc9c9786">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Herrod</td>
<td>Chandler</td>
 <td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>$137,500</td>
<td>9608</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="355d1b565d545b5159504775515441544154575950461b5b5041">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Rhona</td>
<td>Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>$327,900</td>
<td>6200</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ed9fc3898c9b84899e8283ad898c998c998c8f81889ec3838899">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Colleen</td>
<td>Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>$205,500</td>
<td>2360</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6704490f1215141327030613061306050b021449090213">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sonya</td>
<td>Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>$103,600</td>
<td>1667</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d9aaf7bfabb6aaad99bdb8adb8adb8bbb5bcaaf7b7bcad">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jena</td>
<td>Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
 <td>$90,560</td>
<td>3814</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0b61256c6a62656e784b6f6a7f6a7f6a69676e7825656e7f">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Quinn</td>
<td>Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>$342,000</td>
<td>9497</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2d5c034b415443436d494c594c594c4f41485e03434859">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Charde</td>
<td>Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>$470,600</td>
<td>6741</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="02612c6f6370716a636e6e42666376637663606e67712c6c6776">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Haley</td>
<td>Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>$313,500</td>
<td>3597</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="deb6f0b5bbb0b0bbbaa79ebabfaabfaabfbcb2bbadf0b0bbaa">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Tatyana</td>
<td>Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>$385,750</td>
<td>1965</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="35411b535c414f455441475c565e75515441544154575950461b5b5041">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>$198,500</td>
<td>1581</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="64094a170d08120524000510051005060801174a0a0110">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Paul</td>
<td>Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>$725,000</td>
<td>3059</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="deaef0bca7acba9ebabfaabfaabfbcb2bbadf0b0bbaa">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gloria</td>
<td>Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>$237,500</td>
<td>1721</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dcbbf2b0b5a8a8b0b99cb8bda8bda8bdbeb0b9aff2b2b9a8">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bradley</td>
<td>Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
<td>2558</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7e1c50190c1b1b0c3e1a1f0a1f0a1f1c121b0d50101b0a">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Dai</td>
<td>Rios</td>
<td>Personnel Lead</td>
 <td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>$217,500</td>
<td>2290</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8de9a3ffe4e2fecde9ecf9ecf9ecefe1e8fea3e3e8f9">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jenette</td>
<td>Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>$345,000</td>
<td>1937</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8ce6a2efede0e8fbe9e0e0cce8edf8edf8edeee0e9ffa2e2e9f8">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Yuri</td>
<td>Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>$675,000</td>
<td>6154</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0f76216d6a7d7d764f6b6e7b6e7b6e6d636a7c21616a7b">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Caesar</td>
<td>Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
<td>8330</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6a09441c0b04090f2a0e0b1e0b1e0b08060f1944040f1e">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Doris</td>
<td>Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>$85,600</td>
 <td>3023</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="14703a637d7870716654707560756075767871673a7a7160">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Angelica</td>
<td>Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
<td>5797</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d3b2fda1b2bebca093b7b2a7b2a7b2b1bfb6a0fdbdb6a7">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>$92,575</td>
<td>8822</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7611581c190f151336121702170217141a130558181302">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>$357,650</td>
<td>9239</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="442e6a272c252a2304202530253025262821376a2a2130">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brenden</td>
<td>Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
<td>1314</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="73115d0412141d160133171207120712111f16005d1d1607">[email&#160;protected]</a></td>
</tr>
<tr>
 <td>Fiona</td>
<td>Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>$850,000</td>
<td>2947</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="55337b322730303b15313421342134373930267b3b3021">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shou</td>
<td>Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>$163,000</td>
<td>8899</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="592a77302d362c193d382d382d383b353c2a77373c2d">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michelle</td>
<td>House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>$95,400</td>
<td>2769</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="caa7e4a2a5bfb9af8aaeabbeabbeaba8a6afb9e4a4afbe">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Suki</td>
<td>Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>$114,500</td>
<td>6832</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c6b5e8a4b3b4adb586a2a7b2a7b2a7a4aaa3b5e8a8a3b2">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Prescott</td>
<td>Bartlett</td>
<td>Technical Author</td>
<td>London</td>
 <td>27</td>
<td>2011/05/07</td>
<td>$145,000</td>
<td>3606</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5b2b75393a292f373e2f2f1b3f3a2f3a2f3a39373e2875353e2f">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>$235,500</td>
<td>2860</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7c1b521f130e0819063c181d081d081d1e10190f52121908">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Martena</td>
<td>Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>$324,050</td>
<td>8240</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7f1251121c1c0d1e063f1b1e0b1e0b1e1d131a0c51111a0b">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Unity</td>
<td>Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>$85,675</td>
<td>5384</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5b2e75392e2f373e291b3f3a2f3a2f3a39373e2875353e2f">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Howard</td>
<td>Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>$164,500</td>
<td>7031</td>
 <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6e0640060f1a08070b020a2e0a0f1a0f1a0f0c020b1d40000b1a">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hope</td>
<td>Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>$109,850</td>
<td>6318</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b5dd9bd3c0d0dbc1d0c6f5d1d4c1d4c1d4d7d9d0c69bdbd0c1">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Vivian</td>
<td>Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>$452,500</td>
<td>9422</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="483e6620293a3a2d2424082c293c293c292a242d3b66262d3c">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Timothy</td>
<td>Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>$136,200</td>
<td>7580</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d6a2f8bbb9b9b8b3af96b2b7a2b7a2b7b4bab3a5f8b8b3a2">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jackson</td>
<td>Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>$645,750</td>
<td>1042</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8ee4a0ecfcefeafde6eff9ceeaeffaeffaefece2ebfda0e0ebfa">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Olivia</td>
 <td>Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>$234,500</td>
<td>2120</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="533c7d3f3a323d3413373227322732313f36207d3d3627">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bruno</td>
<td>Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
<td>6222</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="03612d6d62706b43676277627762616f66702d6d6677">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sakura</td>
<td>Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>$139,575</td>
<td>9383</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="90e3bee9f1fdf1fdffe4ffd0f4f1e4f1e4f1f2fcf5e3befef5e4">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Thor</td>
<td>Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>$98,540</td>
<td>8327</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="31451f46505d455e5f71555045504550535d54421f5f5445">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Finn</td>
<td>Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>$87,500</td>
<td>2927</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="385e165b5955595b5057785c594c594c595a545d4b16565d4c">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Serge</td>
<td>Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>$138,575</td>
<td>8352</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f487da96959890839d9ab490958095809596989187da9a9180">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zenaida</td>
<td>Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>$125,250</td>
<td>7439</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0f7521697d6e61644f6b6e7b6e7b6e6d636a7c21616a7b">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zorita</td>
<td>Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>$115,000</td>
<td>4389</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="156f3b66706767747b7a55717461746174777970663b7b7061">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>$75,650</td>
<td>3431</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="72185c13111d01061332161306130613101e17015c1c1706">[email&#160;protected]</a></td>
 </tr>
<tr>
<td>Cara</td>
<td>Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
<td>3990</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9dfeb3eee9f8ebf8f3eeddf9fce9fce9fcfff1f8eeb3f3f8e9">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hermione</td>
<td>Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>$356,250</td>
<td>1016</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a1c98fc3d4d5cdc4d3e1c5c0d5c0d5c0c3cdc4d28fcfc4d5">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Lael</td>
<td>Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>$103,500</td>
<td>6733</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="81edafe6f3e4e4f3c1e5e0f5e0f5e0e3ede4f2afefe4f5">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jonas</td>
<td>Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>$86,500</td>
<td>8196</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="076d29666b627f666963627547636673667366656b627429696273">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shad</td>
<td>Decker</td>
<td>Regional Director</td>
 <td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>$183,000</td>
<td>6373</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b5c69bd1d0d6ded0c7f5d1d4c1d4c1d4d7d9d0c69bdbd0c1">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>$183,000</td>
<td>5384</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="54397a362621373114303520352035363831277a3a3120">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Donna</td>
<td>Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>$112,000</td>
<td>4226</td>
<td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7d19530e131419180f3d191c091c091c1f11180e53131809">[email&#160;protected]</a></td>
</tr>
</tbody>
</table>
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
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
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


<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="../files/assets/pages/waves/js/waves.min.js"></script>

<script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script src="../files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../../../cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
<script src="../files/assets/pages/data-table/extensions/fixed-colums/js/dataTables.fixedColumns.min.js"></script>

<script src="../files/assets/pages/data-table/extensions/fixed-colums/js/fixed-column-custom.js"></script>
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

<!-- Mirrored from colorlib.com//polygon/admindek/default/dt-ext-fixed-columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jan 2019 05:55:43 GMT -->
</html>
