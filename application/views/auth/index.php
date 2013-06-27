<?php $this->load->view('header'); ?>

<div class="container">
<h1><?php echo lang('index_heading');?></h1>
<p><?php echo lang('index_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<table class="table table-striped table-hover table-condensed employees">
	<thead>
	<tr>
		<th><?php echo lang('index_fname_th');?></th>
		<th><?php echo lang('index_lname_th');?></th>
		<th><?php echo lang('index_email_th');?></th>
		<th><?php echo lang('index_action_th');?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user):?>
		<tr>
			<td><?php echo $user->first_name;?></td>
			<td><?php echo $user->last_name;?></td>
			<td><?php echo $user->email;?></td>
			<td>
				<div class="btn-group">
				  <a class="btn dropdown-toggle btn-primary" data-toggle="dropdown" href="#">
				    Action
				    <span class="caret"></span>
				  </a>
				  <ul class="dropdown-menu">
				    <li><a href="/review/create">New Review</a></li>
				    <li><a href="/admin/list_reviews/<?php echo $user->id ?>">List Reviews</a></li>
				   
				   <?php
                       $group = array('admin');
                       if ($this->ion_auth->in_group($group)):
                    ?>
				    <li class="divider"></li>
				    <li><?php echo anchor("auth/edit_user/".$user->id, 'Edit Employee Profile') ;?></li>
				    <li><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></li>
				    <?php endif; ?>
				  </ul>
				</div>
			</td>
		</tr>
	<?php endforeach;?>
	</tbody>
</table>

<p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>
</div>
<?php $this->load->view('footer'); ?>