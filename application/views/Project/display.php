<div class="container">
<?php echo "<h3>" . ". " . $project->project_name . " :" . "</h3>" ?>
<hr>
<h4>Description: </h4><?php echo "<p>" . ". " . $project->project_body . " :" . "</p>" ?>
<p> Date Created: <?php echo " " . $project->date_created ?> </p>
</div>

<div class="col-xs-3 pull-right">
<ul class="list-group">

	<strong>Project Actions: </strong>
	<!-- <li class="list-group-item"><a href="<?php echo base_url(); ?>/tasks/create">Create Project</a></li> -->
	<li class="list-group-item"><a href="<?=base_url() . "projectcontroller/projectedit/{$project->id}"?>">Edit Project</a></li>
	<li class="list-group-item"><a href="<?=base_url() . "projectcontroller/projectdelete/{$project->id}"?>">Delete Project</a></li>

</ul>
</div>



