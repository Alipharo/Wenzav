
<div id="page-container" class="row">

	<?php echo $this->element('menu/side_menu'); ?>
	
	<div id="page-content" class="col-sm-9">
		
		<div class="characters view">

			<h2>
                            <?php  echo __('Character'); ?>
                            <?php 
                                if ($this->Session->check('Auth.User')) 
                                {
                                    if ($this->Session->read('Auth.User.role') == "Admin" || $this->Session->read('Auth.User.id') == $character['User']['id']) 
                                    {
                                        echo $this->Html->link(__('Edit'), array('action' => 'edit', $character['Character']['id']), array('class' => 'btn btn-large btn-primary'));
                                        echo '&nbsp';
                                        echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $character['Character']['id']), array('class' => 'btn btn-large btn-primary'), __('Are you sure you want to delete %s?', $character['Character']['name']));
                                    }
                                }
                            ?>
                        </h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
<tr>		
                        <td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($character['Character']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Role'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($character['Role']['name'], array('controller' => 'roles', 'action' => 'view', $character['Role']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Life'); ?></strong></td>
		<td>
			<?php echo h($character['Character']['life']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Damage'); ?></strong></td>
		<td>
			<?php echo h($character['Character']['damage']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Level'); ?></strong></td>
		<td>
			<?php echo h($character['Character']['level']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Xp'); ?></strong></td>
		<td>
			<?php echo h($character['Character']['xp']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Items'); ?></strong></td>
                <td>
                    <?php 
                    foreach ($character['Item'] as $item) 
                    { 
                        // echo h($tag['name']) . ' '; 
                        echo $this->Html->tag('span', $item['name'] . ' ', array('class' => 'label label-info')) . " &nbsp;";
                    } 
                    ?>&nbsp;
                </td>
</tr><tr>		<td><strong><?php echo __('Guild'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($character['Guild']['name'], array('controller' => 'guilds', 'action' => 'view', $character['Guild']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($character['Character']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($character['User']['username'], array('controller' => 'users', 'action' => 'view', $character['User']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

						
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
