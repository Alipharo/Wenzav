<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button><!-- /.navbar-toggle -->
        <?php echo $this->Html->Link('Wenzav', array('controller' => 'characters', 'action' => 'index'), array('class' => 'navbar-brand')); ?>
    </div><!-- /.navbar-header -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"> 
                <?php
                if ($this->Session->check('Auth.User')) {
                    echo $this->Html->link($this->Session->read('Auth.User.username'), array('controller' => 'users', 'action' => 'view', $this->Session->read('Auth.User.id')));

                    if ($this->Session->read('Auth.User.role') == "Admin") {
                        echo "</li><li>";
                        echo $this->Html->link("Manage Users", array('controller' => 'users', 'action' => 'index'));
                        echo "</li><li>";
                        echo $this->Html->link("Manage Characters Items", array('controller' => 'CharactersItems', 'action' => 'index'));
                    }
                    echo "</li><li>";
                    echo $this->Html->link("Logout", array('controller' => 'users', 'action' => 'logout'));
                } else {
                    echo "</li><li>";
                    echo $this->Html->link("Login", array('controller' => 'users', 'action' => 'login'));
                    echo "</li><li>";
                    echo $this->Html->link("Register", array('controller' => 'users', 'action' => 'register'));
                }
                ?>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <?php echo $this->I18n->flagSwitcher(array('class' => 'languages', 'id' => 'language-switcher')); ?>
                </ul>
            </li>
            <li class="active"> 
                <?php echo $this->Html->link("About", '/pages/about.php'); ?>
            </li>
            <li>
                <?php
                if ($this->Session->check('Auth.User') && $this->Session->read('Auth.User.active') == 0) {
                    $this->Html->link(__('Resend mail'), array('controller' => 'users', 'action' => 'send_mail', $this->Session->read('Auth.User.email'), $this->Session->read('Auth.User.username'), $this->Session->read('Auth.User.id')));
                }
                ?>
            </li>
        </ul><!-- /.nav navbar-nav -->

        <a href="/cakephp-2.7.3/pages/apropos" target="click">
            <embed src="/cakephp-2.7.3/img/Wenzav.svg" width="50" type="image/svg+xml"/>
        </a>
    </div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->