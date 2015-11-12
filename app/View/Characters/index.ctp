
<div id="page-container" class="row">

    <?php echo $this->element('menu/side_menu'); ?>

    <div id="page-content" class="col-sm-9">

        <div class="characters index">

            <h2><?php echo __('Characters'); ?></h2>

            <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><?php echo $this->Paginator->sort('name'); ?></th>
                            <th><?php echo $this->Paginator->sort('role_id'); ?></th>
                            <th><?php echo $this->Paginator->sort('life'); ?></th>
                            <th><?php echo $this->Paginator->sort('damage'); ?></th>
                            <th><?php echo $this->Paginator->sort('level'); ?></th>
                            <th><?php echo $this->Paginator->sort('xp'); ?></th>
                            <th><?php echo $this->Paginator->sort('inventaire'); ?></th>
                            <th><?php echo $this->Paginator->sort('guild_id'); ?></th>
                            <th><?php echo $this->Paginator->sort('user_id'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($characters as $character): ?>
                            <tr>
                                <td><?php echo h($character['Character']['name']); ?>&nbsp;</td>
                                <td>
                                    <?php echo $this->Html->link($character['Role']['name'], array('controller' => 'roles', 'action' => 'view', $character['Role']['id'])); ?>
                                </td>
                                <td><?php echo h($character['Character']['life']); ?>&nbsp;</td>
                                <td><?php echo h($character['Character']['damage']); ?>&nbsp;</td>
                                <td><?php echo h($character['Character']['level']); ?>&nbsp;</td>
                                <td><?php echo h($character['Character']['xp']); ?>&nbsp;</td>
                                <td><?php
                                    foreach ($character['Item'] as $item) {
                                        // echo h($tag['name']) . ' '; 
                                        echo $this->Html->tag('span', $item['name'] . ' ', array('class' => 'label label-info')) . " &nbsp;";
                                    }
                                    ?>
                                    &nbsp;</td>
                                <td>
                                    <?php echo $this->Html->link($character['Guild']['name'], array('controller' => 'guilds', 'action' => 'view', $character['Guild']['id'])); ?>
                                </td>
                                <td>
                                    <?php echo $this->Html->link($character['User']['username'], array('controller' => 'users', 'action' => 'view', $character['User']['id'])); ?>
                                </td>
                                <td class="actions">
                                    <?php
                                    echo $this->Html->link(__('View'), array('action' => 'view', $character['Character']['id']), array('class' => 'btn btn-default btn-xs'));

                                    if ($this->Session->check('Auth.User')) {
                                        if ($this->Session->read('Auth.User.role') == "Admin" || $this->Session->read('Auth.User.id') == $character['User']['id']) {
                                            echo $this->Html->link(__('Edit'), array('action' => 'edit', $character['Character']['id']), array('class' => 'btn btn-default btn-xs'));
                                            echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $character['Character']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete %s?', $character['Character']['name']));
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div><!-- /.table-responsive -->

            <p>
                <small>
                    <?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
                </small>
            </p>

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