<?php
	$title="Title";
	$desc="This is the description of page";
	$link="<a href='".site_url('controllerName/FunctionName')."'>$title</a>";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?=$title?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		
		<?php include_once('topscript.php'); ?>
	</head>
	<body>
		<div class="loader-bg">
			<div class="loader-bar"></div>
		</div>
		<div id="pcoded" class="pcoded">
			<div class="pcoded-overlay-box"></div>
			<div class="pcoded-container navbar-wrapper">
				<?php include_once('nav.php');?>
				<div class="pcoded-main-container">
					<div class="pcoded-wrapper">
						<?php include_once('sidebar.php') ?>
						<div class="pcoded-content">

							<div class="page-header card">
								<div class="row align-items-end">
									<div class="col-lg-8">
										<div class="page-header-title">
											<i class="feather icon-home bg-c-blue"></i>
											<div class="d-inline">
											<h5><?= $title?></h5>
											<span><?= $desc ?></span>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="page-header-breadcrumb">
											<ul class=" breadcrumb breadcrumb-title">
												<li class="breadcrumb-item">
												<a href="index.html"><i class="feather icon-home"></i></a>
												</li>
												<li class="breadcrumb-item"><?= $link ?> </li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						
							<!-- CB starts -->
							<div class="pcoded-inner-content">
								<div class="main-body">
									<div class="page-wrapper">
										<div class="page-body">
										<div class="card">
												<div class="card-block">
													<div class="dt-responsive table-responsive">
													<div class="row">
													<div class="col-xs-12 col-sm-12">
												
												<table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
													<thead>
													<tr role="row">

														<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 179px;">Category ID</th>
														<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 179px;">Category Name</th>
														
													</tr>
													</thead>
													<?php
													foreach ($bdata as $key) {
													 	
													 ?>
													<tr>
														<td><?=$key->categoryid ?></td>
														<td><?=$key->categoryname ?></td>
														
													</tr>
													<?php
												}
												?>
												</table>
										
										</div>
									</div>
										</div>
									</div>
										</div>
									</div>
								</div>
							</div>
							<!-- CB Ends -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include_once('Bottom.php') ?>
	</body>
</html>
