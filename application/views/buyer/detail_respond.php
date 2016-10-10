<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title><?php echo $title ="Ralali Assessment" ?></title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />


<!-- Bootstrap core CSS     -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />

<!-- Animation library for notifications   -->
<link href="<?php echo base_url('assets/css/animate.min.css'); ?>" rel="stylesheet"/>

<!--  Paper Dashboard core CSS    -->
<link href="<?php echo base_url('assets/css/paper-dashboard.css');?>" rel="stylesheet"/>

<!--  Fonts and icons     -->    
<link href="<?php echo base_url('assets/css/themify-icons.css'); ?>" rel="stylesheet">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
<div class="wrapper">
   <div class="sidebar" data-background-color="white" data-active-color="danger">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    
                </a>
            </div>
            <ul class="nav">
                <li class="active">
                    <a href="<?php echo base_url('post_buy_request/seller_panel'); ?>">
                        <i class="ti-panel"></i>
                        <p>Permintaan direspon</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Permintaan Direspon</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-settings"></i>
									<p>Settings</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Logout</a></li>
                              </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">   
            	<div class="card">					
					<form action="<?php echo base_url('post_buy_request/respond_accepted/detail_respond'); ?><?php echo '/'.$id; ?>" method="post" accept-charset="utf-8">
					<div class="content table-responsive table-full-width">
						<table class="table table-striped">		
							<?php foreach ($detail as $key => $value): ?>		
								<tr>
									<td>Description</td>
									<td>:</td>
									<td><?php echo $value->respond_description; ?></td>									
								</tr>
								<tr>
									<td>Date Deadline</td>
									<td>:</td>
									<td><?php echo $value->respond_deadline; ?></td>									
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>
										<input type="submit" name="accept" value="Accept" class="btn">
										<input type="submit" name="decline" value="Decline" class="btn btn-danger">
									</td>
								</tr>
							<?php endforeach ?>
						</table>
					</div>
					</form>
				</div>             
            </div>
        </div>
    </div>
</div>
 <!--   Core JS Files   -->
    <script src="<?php echo base_url('assets/js/jquery-1.10.2.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo base_url('assets/js/bootstrap-checkbox-radio.js'); ?>"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url('assets/js/chartist.min.js'); ?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('assets/js/bootstrap-notify.js'); ?>"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url('assets/js/paper-dashboard.js'); ?>"></script>