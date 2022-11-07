<h1>Register Form</h1><hr> <br>



<?php $attributes = array('id' => 'register_form', 'class' => 'form_horizontal')?>

<?php echo validation_errors('<p class="bg-danger">'); ?>

<?php echo form_open('usercontroller/register', $attributes); ?>

<!-- <div class="col-xs-5 pull-center"> -->
<!--firstname field-->
<div class="form-group">
	<?php echo form_label('Firstname'); ?>

	<?php
$data = array(
    'class' => 'form-control',
    'name' => 'first_name',
    'placeholder' => 'Enter First Name')
?>

	 <?php echo form_input($data); ?>
  </div>

  <!--Lastname field-->
  <div class="form-group">
	<?php echo form_label('Lastname'); ?>

	<?php
$data = array(
    'class' => 'form-control',
    'name' => 'last_name',
    'placeholder' => 'Enter Last Name')
?>

	 <?php echo form_input($data); ?>
  </div>


  <!--email field-->
  <div class="form-group">
	<?php echo form_label('Email'); ?>

	<?php
$data = array(
    'class' => 'form-control',
    'name' => 'email',
    'placeholder' => 'Enter Email')
?>

	 <?php echo form_input($data); ?>
  </div>



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
	 <?php echo form_label('Confirm  The Passsword'); ?>

	 <?php
$data = array(
    'class' => 'form-control',
    'name' => 'confirm_password',
    'placeholder' => 'Confirm The Password');

?>

	 <?php echo form_password($data); ?>
  </div>



<!--Submit buuton-->
  <div class="form-group">

	<?php
$data = array(
    'class' => 'btn btn-primary',
    'name' => 'Submit',
    'value' => 'Register')

?>
   <?php echo form_submit($data); ?>
  </div>

	<!-- </div> -->
	<?php echo form_close(); ?>

<script>
	function showpassword() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
