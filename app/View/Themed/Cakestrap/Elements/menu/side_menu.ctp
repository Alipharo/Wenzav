<div id="sidebar" class="col-sm-3">
    <div class="actions">
        <ul class="list-group">
            <div class="dropdown">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?= __('Characters') ?> <span class="caret"></span></button>
                <ul class="dropdown-menu scrollable-menu" role="menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List'), array('controller' => 'characters', 'action' => 'index'), array('class' => '')); ?></li>
                    <?php if ($this->Session->check('Auth.User')) { ?>
                    <li class="list-group-item"><?php echo $this->Html->link(__('New'), array('controller' => 'characters', 'action' => 'add'), array('class' => '')); ?></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="dropdown">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?= __('Guilds') ?> <span class="caret"></span></button>
                <ul class="dropdown-menu scrollable-menu" role="menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List'), array('controller' => 'guilds', 'action' => 'index'), array('class' => '')); ?></li> 
                    <?php if ($this->Session->check('Auth.User')) { ?>
                    <li class="list-group-item"><?php echo $this->Html->link(__('New'), array('controller' => 'guilds', 'action' => 'add'), array('class' => '')); ?></li> 
                    <?php } ?>
                </ul>
            </div>
            <div class="dropdown">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?= __('Items') ?> <span class="caret"></span></button>
                <ul class="dropdown-menu scrollable-menu" role="menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List'), array('controller' => 'items', 'action' => 'index'), array('class' => '')); ?></li> 
                    <?php if ($this->Session->check('Auth.User')) { ?>
                    <li class="list-group-item"><?php echo $this->Html->link(__('New'), array('controller' => 'items', 'action' => 'add'), array('class' => '')); ?></li> 
                    <?php } ?>
                </ul>
            </div>
            <div class="dropdown">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?= __('Roles') ?> <span class="caret"></span></button>
                <ul class="dropdown-menu scrollable-menu" role="menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List'), array('controller' => 'roles', 'action' => 'index'), array('class' => '')); ?></li> 
                    <?php if ($this->Session->check('Auth.User')) { ?>
                    <li class="list-group-item"><?php echo $this->Html->link(__('New'), array('controller' => 'roles', 'action' => 'add'), array('class' => '')); ?></li> 
                    <?php } ?>
                </ul>
            </div>
            <div class="dropdown">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?= __('Users') ?> <span class="caret"></span></button>
                <ul class="dropdown-menu scrollable-menu" role="menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?></li>
                    <?php if ($this->Session->check('Auth.User') && $this->Session->read('Auth.User.role') == "Admin") { ?>
                    <li class="list-group-item"><?php echo $this->Html->link(__('New'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?></li> 
                    <?php } ?>
                </ul>
            </div>
        </ul><!-- /.list-group -->
    </div><!-- /.actions -->
</div><!-- /#sidebar .span3 -->