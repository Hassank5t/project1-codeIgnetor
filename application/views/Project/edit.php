<h1>Edit Project</h1><hr> <br>



<?php $attributes = array('id' => 'updateproject_form', 'class' => 'form_horizontal')?>

<?php echo validation_errors('<p class="bg-danger">'); ?>

<?php echo form_open('projectcontroller/projectedit/' . $project_data->id . " ", $attributes); ?>

<!-- <div class="col-xs-5 pull-center"> -->
<!--firstname field-->
<div class="form-group">
	<?php echo form_label('Project Name'); ?>

	<?php
$data = array(
    'class' => 'form-control',
    'name' => 'project_name',
    'value' => $project_data->project_name);
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
    'value' => $project_data->project_body);
?>

	 <?php echo form_textarea($data); ?>
  </div>


<!--Submit buuton-->
  <div class="form-group">

	<?php
$data = array(
    'class' => 'btn btn-primary',
    'name' => 'Submit',
    'value' => ' Update Project')

?>
   <?php echo form_submit($data); ?>
  </div>

	<!-- </div> -->
	<?php echo form_close(); ?>

