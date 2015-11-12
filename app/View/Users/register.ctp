
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">

		<div class="users form">
		
			<?php echo $this->Form->create('User', array('role' => 'form')); ?>

				<fieldset>
                                    <legend>
                                        <?php echo __('Please enter your username, password and email to register'); ?>
                                    </legend>

					<div class="form-group">
						<?php echo $this->Form->input('username', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('email', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Register', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->