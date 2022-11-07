<p class="bg-success">

<!--for login purpose-->
<?php if ($this->session->flashdata('login_success')): ?>

<?php
echo $this->session->flashdata('login_success');
?>

<?php endif;?>
</p>

<!--for project files purpose-->

<p class="bg-danger">
<?php if ($this->session->flashdata('no_access')): ?>

<?php
echo $this->session->flashdata('no_access');
?>

<?php endif;?>
</p>


<!--for registration purpose-->
<p class="bg-success">
<?php if ($this->session->flashdata('User_registered')): ?>

<?php
echo $this->session->flashdata('User_registered');
?>

<?php endif;?>
</p>




<div class="jumbotron">
<h1>Hey Everyone..Welcome!</h1>
</div>

<?php if (isset($projects)): ?>

<table class="table table-hover">
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

		<?php foreach ($projects as $key): ?>
			<tr>
				<td>

						<b><?=$key->project_name?></b>

				</td>
				<td>
						<?=$key->project_body?>

				</td>
				<td><a href="<?php echo base_url(); ?>projectcontroller/index">View</a></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>

<?php endif;?>




<p class="bg-success">

<?php if ($this->session->flashdata('login_failed')): ?>

<?php
echo $this->session->flashdata('login_failed');
?>

<?php endif;?>
</p>
