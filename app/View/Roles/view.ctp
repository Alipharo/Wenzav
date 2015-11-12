
<div id="page-container" class="row">

        <?php echo $this->element('menu/side_menu'); ?>
	
	<div id="page-content" class="col-sm-9">
		
		<div class="roles view">

			<h2>
                            <?php  echo __('Role'); ?>
                            <?php 
                                if ($this->Session->check('Auth.User') && $this->Session->read('Auth.User.role') == "Admin") 
                                {
                                    echo $this->Html->link(__('Edit'), array('action' => 'edit', $role['Role']['id']), array('class' => 'btn btn-large btn-primary'));
                                    echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $role['Role']['id']), array('class' => 'btn btn-large btn-primary'), __('Are you sure you want to delete %s?', $role['Role']['name']));                            
                                }
                            ?>   			</h2>
                    
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
<tr>                    <td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($role['Role']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Path'); ?></strong></td>
		<td>
			<?php echo h($role['Role']['path']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Tier'); ?></strong></td>
		<td>
			<?php echo h($role['Role']['tier']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Xp'); ?></strong></td>
		<td>
			<?php echo h($role['Role']['xp']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($role['Role']['description']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->
		
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
