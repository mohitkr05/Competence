<?php
		
 echo $this->Form->create('User');
echo $this->Form->input('username');
		echo $this->Form->input('password');
    echo $this->Form->input('confirm_password', array('type' => 'password'));
echo $this->Form->end(__('Submit')); ?>
	
