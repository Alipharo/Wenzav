
<div id="page-container" class="row">

        <?php echo $this->element('menu/side_menu'); ?>
	
	<div id="page-content" class="col-sm-9">
		
		<div class="users view">

			<h2>
                            <?php  echo __('User'); ?>
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-large btn-primary')); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-large btn-primary'), __('Are you sure you want to delete %s?', $user['User']['username'])); ?>
                        </h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
<tr>                    <td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Username'); ?></strong></td>
		<td>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
		<td>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gold'); ?></strong></td>
		<td>
			<?php echo h($user['User']['gold']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Characters'); ?></h3>
				
				<?php if (!empty($user['Character'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Life'); ?></th>
		<th><?php echo __('Damage'); ?></th>
		<th><?php echo __('Level'); ?></th>
		<th><?php echo __('Xp'); ?></th>
		<th><?php echo __('Guild Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('User Id'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($user['Character'] as $character): ?>
		<tr>
			<td><?php echo $character['id']; ?></td>
			<td><?php echo $character['name']; ?></td>
			<td><?php echo $character['role_id']; ?></td>
			<td><?php echo $character['life']; ?></td>
			<td><?php echo $character['damage']; ?></td>
			<td><?php echo $character['level']; ?></td>
			<td><?php echo $character['xp']; ?></td>
			<td><?php echo $character['guild_id']; ?></td>
			<td><?php echo $character['description']; ?></td>
			<td><?php echo $character['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'characters', 'action' => 'view', $character['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'characters', 'action' => 'edit', $character['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'characters', 'action' => 'delete', $character['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $character['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Character'), array('controller' => 'characters', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
