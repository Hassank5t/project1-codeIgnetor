<h1>Create Project</h1><hr> <br>



<?php $attributes = array('id' => 'createproject_form', 'class' => 'form_horizontal')?>

<?php echo validation_errors('<p class="bg-danger">'); ?>

<?php echo form_open('projectcontroller/projectcreate', $attributes); ?>

<!-- <div class="col-xs-5 pull-center"> -->
<!--firstname field-->
<div class="form-group">
	<?php echo form_label('Project Name'); ?>

	<?php
$data = array(
    'class' => 'form-control',
    'name' => 'project_name',
    'placeholder' => 'Enter Project Name')
?>

	 <?php echo form_input($data); ?>
  </div>

  <!--Lastname field-->
  <div class="form-group">
	<?php echo form_label('Project Description'); ?>

	<?php
$data = array(
    'class' => 'form-control',
    'name' => 'project_body',
    'placeholder' => 'Enter Project Description')
?>

	 <?php echo form_textarea($data); ?>
  </div>


<!--Submit buuton-->
  <div class="form-group">

	<?php
$data = array(
    'class' => 'btn btn-primary',
    'name' => 'Submit',
    'value' => 'Create Project')

?>
   <?php echo form_submit($data); ?>
  </div>

	<!-- </div> -->
	<?php echo form_close(); ?>

