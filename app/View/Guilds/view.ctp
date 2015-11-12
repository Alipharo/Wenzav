
<div id="page-container" class="row">

        <?php echo $this->element('menu/side_menu'); ?>
	
	<div id="page-content" class="col-sm-9">
		
		<div class="guilds view">

			<h2>
                            <?php  echo __('Guild'); ?>
                            <?php 
                                if ($this->Session->check('Auth.User')) 
                                {
                                    if ($this->Session->read('Auth.User.role') == "Admin") 
                                    {
                                        echo $this->Html->link(__('Edit'), array('action' => 'edit', $guild['Guild']['id']), array('class' => 'btn btn-large btn-primary'));
                                        echo '&nbsp';
                                        echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $guild['Guild']['id']), array('class' => 'btn btn-large btn-primary'), __('Are you sure you want to delete %s?', $guild['Guild']['name']));
                                    }
                                }
                            ?>                        
                        </h2>
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
<tr>                    <td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($guild['Guild']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($guild['Guild']['description']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Members'); ?></h3>
				
				<?php if (!empty($guild['Character'])): ?>
					
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
										foreach ($guild['Character'] as $character): ?>
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
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
