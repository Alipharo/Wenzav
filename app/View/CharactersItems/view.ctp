
<div id="page-container" class="row">

	<?php echo $this->element('menu/side_menu'); ?>
	
	<div id="page-content" class="col-sm-9">
		
		<div class="charactersItems view">

			<h2>
                            <?php  echo __('Characters Item'); ?>
                            <?php 
                                if ($this->Session->check('Auth.User') && $this->Session->read('Auth.User.role') == "Admin") 
                                {
                                    echo $this->Html->link(__('Edit'), array('action' => 'edit', $charactersItem['CharactersItem']['id']), array('class' => 'btn btn-large btn-primary'));
                                    echo '&nbsp';
                                    echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $charactersItem['CharactersItem']['id']), array('class' => 'btn btn-large btn-primary'), __('Are you sure you want to delete this?'));
                                }
                            ?>                        </h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
<tr>                    <td><strong><?php echo __('Character'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($charactersItem['Character']['name'], array('controller' => 'characters', 'action' => 'view', $charactersItem['Character']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Item'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($charactersItem['Item']['name'], array('controller' => 'items', 'action' => 'view', $charactersItem['Item']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
