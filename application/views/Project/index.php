<h1>Project Index:</h1><br><hr>

<p class="bg-success">


<?php if ($this->session->flashdata('project_created')): ?>
	<?php echo $this->session->flashdata('project_created'); ?>
<?php endif;?>

<?php if ($this->session->flashdata('project_updated')): ?>
	<?php echo $this->session->flashdata('project_updated'); ?>
<?php endif;?>

<?php if ($this->session->flashdata('project_deleted')): ?>
	<?php echo $this->session->flashdata('project_deleted'); ?>
<?php endif;?>





<table class="table table-hover">
	<a class="btn btn-primary pull-right" href="<?=base_url() . "projectcontroller/projectcreate"?>">Create Project</a>
	<thead>
		<tr>
			<th>
			Project Name
			</th>
			<th>
				Project Detail
			</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($project as $key): ?>
			<tr>
				<td>
					<a href="<?=base_url() . "projectcontroller/projectinfo/{$key->id}"?>">
						<b><?=$key->project_name?></b>
					</a>
				</td>
				<td>
						<?=$key->project_body?>
					</a>
				</td>

				<td><a href="<?=base_url() . "projectcontroller/projectdelete/{$key->id}"?>"><span class="glyphicon glyphicon-remove"></span></a>
				</td>

			</tr>
		<?php endforeach;?>
	</tbody>
</table>

