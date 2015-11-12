
<div id="page-container" class="row">

        <?php echo $this->element('menu/side_menu'); ?>
	
	<div id="page-content" class="col-sm-9">
		
		<div class="items view">

			<h2>
                            <?php  echo __('Item'); ?>
                            <?php 
                                if ($this->Session->check('Auth.User') && $this->Session->read('Auth.User.role') == "Admin") 
                                {
                                    echo $this->Html->link(__('Edit'), array('action' => 'edit', $item['Item']['id']), array('class' => 'btn btn-large btn-primary'));
                                    echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $item['Item']['id']), array('class' => 'btn btn-large btn-primary'), __('Are you sure you want to delete %s?', $item['Item']['name']));                            
                                }
                            ?>                       
                        </h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
<tr>                    <td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($item['Item']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Tier'); ?></strong></td>
		<td>
			<?php echo h($item['Item']['tier']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Price'); ?></strong></td>
		<td>
			<?php echo h($item['Item']['price']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($item['Item']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Image'); ?></strong></td>
		<td>
			<?php if($item['Item']['filename']) echo $this->Html->image($item['Item']['filename'], array('alt' => 'CakePHP', 'border' => '0', 'data-src' => 'holder.js/100%x100', 'width' => '70px')); ?>
                        &nbsp;
		</td>
</tr>
                                        </tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

</div><!-- /#page-container .row-fluid -->
