<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

	<title>Project 1</title>
</head>
<body>

<!--Navbar section--->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>welcome/index">CodeIgniter Project</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="<?php echo base_url(); ?>">Home<span class="sr-only">(current)</span></a></li>
		<li class=""><a href="<?php echo base_url(); ?>usercontroller/register">Register <span class="sr-only"></span></a></li>
		<li class=""><a href="<?php echo base_url(); ?>projectcontroller/index">Projects<span class="sr-only">(current)</span></a></li>
      </ul>
      <!-- <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->

	<?php if ($this->session->userdata('logged_in')): ?>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
				<!--for to show which username is active now-->
          <a href="usercontroller/login" class="dropdown-toggle" data-toggle="dropdown" role="button" 						 			aria-haspopup="true" aria-expanded="false">
							<?php if ($this->session->userdata('username')): ?>
								<?php echo $this->session->userdata('username'); ?>
							<?php endif;?>
							 <span class="caret"></span>
					 </a>
				<!---logout--->
        <ul class="dropdown-menu">
					<li>
						<a href="#"  class="btn-sm active" role="button" >

                  <?php echo form_open('usercontroller/logout'); ?>
						          <?php
$data = array(
    '                   name' => 'submit', 'value' => 'Logout');?>
						          <?php echo form_submit($data); ?>
						      <?php echo form_close(); ?>

					    </a>
				   </li>
			  </ul>
       </li>
     </ul>

			<?php else: ?>
	<?php endif;?>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




<!--login section--->
<div class="container">

   <div class="col-xs-4">
	<!--for success message-->
   <p class="bg-success">
     <?php if ($this->session->flashdata('login_success')): ?>
       <?php
echo $this->session->flashdata('login_success');
?>
     <?php endif;?>
	</p>

<!--for failed message-->
	<p class="bg-danger">

      <?php if ($this->session->flashdata('login_failed')): ?>
	   <?php
echo $this->session->flashdata('login_falied');
?>

     <?php endif;?>
    </p>
<!---to login load view-->
   <?php $this->load->view('users/loginview');?>
   </div >

  <div class="col-xs-8">

  <?php $this->load->view($main_view);?>

  </div>
</div>

</body>
</html>
