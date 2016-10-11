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
                    <a href="">
                        <i class="ti-panel"></i>
                        <p>Post Buy Request</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('auth/user_auth'); ?>">
                        <i class="ti-panel"></i>
                        <p>Login</p>
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
                    <a class="navbar-brand" href="#"></a>
                </div>
                
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">   
                <div class="card">
                    <div class="content table-responsive table-full-width">
                    	<?php echo form_open_multipart('post_buy_request/buying_request/request_offer'); ?>
							<div>
								<label>Description</label>
								<input type="text" name="description" class="form-control">
							</div>
							<div>
								<label>Image</label>
								<input type="file" name="image_product" class="form-control">
							</div>
							<div>
								<label>Email</label>
								<input type="email" name="email" class="form-control">
							</div>
							<div>
								<label>Phone</label>
								<input type="text" name="phone" class="form-control">
							</div>
							<div>
								<label>Date Expired</label>
								<input type="date" name="date_expired" class="form-control">
							</div>
							<div>
								<label>Date Deadline</label>
								<input type="date" name="date_deadline" class="form-control">
							</div>
							<div>
								<input type="checkbox" name="email_verification">
								<label>Email Verification</label>
							</div>
							<div>
								<input type="checkbox" name="create_new_user">
								<label>Confirm created account by Ralali</label>
							</div>
							<div>		
								<input type="submit" name="save" value="Submit" class="btn">	
							</div>
						<?php echo form_close(); ?>
                     </div>
                </div>             
            </div>
        </div>
    </div>
</div>
 <!--   Core JS Files   -->
    <script src="<?php echo base_url('assets/js/jquery-1.10.2.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <!--  Charts Plugin -->
    <script src="<?php echo base_url('assets/js/chartist.min.js'); ?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('assets/js/bootstrap-notify.js'); ?>"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url('assets/js/paper-dashboard.js'); ?>"></script>