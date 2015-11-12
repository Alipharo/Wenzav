
<div id="page-container" class="row">

    <?php echo $this->element('menu/side_menu'); ?>

    <div id="page-content" class="col-sm-9">

        <div class="names index">

            <h2><?php echo __('Search'); ?></h2>

            <?php
            //let's load jquery libs from google
            $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array('inline' => false));
            $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array('inline' => false));

            //load file for this view to work on 'autocomplete' field
            $this->Html->script('View/Names/index', array('inline' => false));
            ?>

            <?php echo $this->Form->create('Name', array('role' => 'form')); ?>

            <fieldset>

                <div class="form-group">
                    <?php echo $this->Form->input('name', array('class' => 'ui-autocomplete', 'id' => 'autocomplete')); ?>
                </div><!-- .form-group -->

                <?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

            </fieldset>

            <?php echo $this->Form->end(); ?>
        </div><!-- /.index -->

    </div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->