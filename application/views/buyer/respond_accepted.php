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
                    <?php  echo $user_name; ?>
                </a>
            </div>
            <ul class="nav">
                <li class="active">
                    <a href="<?php echo base_url('post_buy_request/respond_accepted/response/'.$user_id); ?>">
                        <i class="ti-panel"></i>
                        <p>Permintaan direspon</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('post_buy_request/respond_accepted/wait_response/'.$user_id); ?>">
                        <i class="ti-panel"></i>
                        <p>Permintaan belum direspon</p>
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
                                <li><a href="<?php echo base_url('auth/user_auth/logout'); ?>">Logout</a></li>
                              </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">   
                <div class="card">
                    <div class="content table-responsive table-full-width">
                    <table class="table table-striped"> 
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Description</th>
                                <!-- <th>Seller</th> -->
                                <th>Date Deadline</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                            <?php foreach ($respond_accepted as $key => $value): ?>             
                                <?php if ($value->status == 0): ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $value->description; ?></td>
                                    <!-- <td><?php echo $value->user_name; ?></td> -->
                                    <td><?php echo $value->date_deadline; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('post_buy_request/respond_accepted/detail_respond');?><?php echo '/'.$value->respond_id ?>" class="btn btn-info">
                                            Detail
                                        </a>
                                        <a href="" class="btn">
                                            Kirim Pesan
                                        </a>
                                    </td>
                                </tr>
                                <?php endif ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    </div>
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