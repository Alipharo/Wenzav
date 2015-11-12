
<div id="page-container" class="row">

        <?php echo $this->element('menu/side_menu'); ?>
	
	<div id="page-content" class="col-sm-9">

		<div class="guilds index">
		
			<h2><?php echo __('Guilds'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('description'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($guilds as $guild): ?>
	<tr>
		<td><?php echo h($guild['Guild']['name']); ?>&nbsp;</td>
		<td><?php echo h($guild['Guild']['description']); ?>&nbsp;</td>
		<td class="actions">
                    <?php 
                        echo $this->Html->link(__('View'), array('action' => 'view', $guild['Guild']['id']), array('class' => 'btn btn-default btn-xs'));
                    
                        if ($this->Session->check('Auth.User')) 
                        {
                            if ($this->Session->read('Auth.User.role') == "Admin") 
                            {
                                        echo $this->Html->link(__('Edit'), array('action' => 'edit', $guild['Guild']['id']), array('class' => 'btn btn-default btn-xs'));
                                        echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $guild['Guild']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete %s?', $guild['Guild']['name']));                            
                            }
                        }
                    ?>		
                </td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->