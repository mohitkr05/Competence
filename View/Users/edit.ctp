<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('confirm_password', array ('type' => 'password'));
		echo $this->Form->input('role');
		echo $this->Form->input('experience');
		echo $this->Form->input('Certification',array(
		'label' => __('Certifications',true),
		'type' => 'select',
		'multiple' => 'checkbox',
		'options' => $certifications		
		));
		echo $this->Form->input('Customer',array(
		'label' => __('Customers',true),
		'type' => 'select',
		'multiple' => 'checkbox',
		'options' => $customers		
		));
		echo $this->Form->input('Education',array(
		'label' => __('Educations',true),
		'type' => 'select',
		'multiple' => 'checkbox',
		'options' => $educations		
		));
		echo $this->Form->input('Skill', array(
		'label' => __('Skills',true),
		'type' => 'select',
		'multiple' => 'checkbox',
		'options' => $skills
	
		
		));
		echo $this->Form->input('Technology', array(
		'label' => __('Technologies',true),
		'type' => 'select',
		'multiple' => 'checkbox',
		'options' => $technologies
		
		));
		echo $this->Form->input('Vendor',array(
		'label' => __('Vendors',true),
		'type' => 'select',
		'multiple' => 'checkbox',
		'options' => $vendors
		));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Certifications'), array('controller' => 'certifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certification'), array('controller' => 'certifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educations'), array('controller' => 'educations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Education'), array('controller' => 'educations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Technologies'), array('controller' => 'technologies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Technology'), array('controller' => 'technologies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
	</ul>
</div>
