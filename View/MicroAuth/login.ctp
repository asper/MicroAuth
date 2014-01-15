<?php echo $this->Form->create('User'); ?>

<fieldset>
	<legend><?php echo __d('micro_auth', 'Restricted area'); ?></legend>
	<?php
	echo $this->Session->flash();
	echo $this->Form->input('password', array(
		'label' => __d('micro_auth', 'Password'),
		'div' => 'input password required',
		'type' => 'password'
	));
	?>
</fieldset>

<?php echo $this->Form->end(__d('micro_auth', 'Login')); ?>