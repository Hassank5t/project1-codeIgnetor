
<?php if ($this->session->userdata('logged_in')): ?>

	<h3>Logout</h3>

	<?php echo form_open('usercontroller/logout'); ?>

	<p>
		<?php if ($this->session->userdata('username')): ?>
			<?php echo " You are logged in as " . $this->session->userdata('username'); ?>
			<?php endif;?>
	</p>

	<?php
$data = array(

    'class' => 'btn btn-primary',
    'name' => 'submit',
    'value' => 'Logout',
);
?>
	<?php echo form_submit($data); ?>
	<?php echo form_close(); ?>



 <?php else: ?>


<h1>Login Form</h1> <hr> <br>

<?php $attributes = array('id' => 'login_form', 'class' => 'form_horizontal')?>

<?php if ($this->session->flashdata('errors')): ?>
<?php echo $this->session->flashdata('errors'); ?>
<?php endif;?>


<?php echo form_open('usercontroller/login', $attributes); ?>

<!--username field-->
  <div class="form-group">
	<?php echo form_label('Username'); ?>

	<?php
$data = array(
    'class' => 'form-control',
    'name' => 'username',
    'placeholder' => 'Enter Username')
?>

	 <?php echo form_input($data); ?>
  </div>

<!--password field-->
  <div class="form-group">
	 <?php echo form_label('Passsword'); ?>

	 <?php
$data = array(
    'class' => 'form-control',
    'name' => 'password',
    'placeholder' => 'Enter Password')

?>

	 <?php echo form_password($data); ?>
  </div>



<!--Confirm password field-->
<div class="form-group">
	 <?php echo form_label('Confirm Passsword'); ?>

	 <?php
$data = array(
    'class' => 'form-control',
    'name' => 'confirm_password',
    'placeholder' => 'Confirm Password');

?>

	 <?php echo form_password($data); ?>
  </div>



<!--Submit buuton-->
  <div class="form-group">

	<?php
$data = array(
    'class' => 'btn btn-primary',
    'name' => 'Submit',
    'value' => 'Login')

?>
   <?php echo form_submit($data); ?>
  </div>
	<?php echo form_close(); ?>


<?php endif;?>

