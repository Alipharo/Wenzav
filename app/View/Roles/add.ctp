
<div id="page-container" class="row">

    <?php echo $this->element('menu/side_menu'); ?>

    <div id="page-content" class="col-sm-9">

        <h2><?php echo __('Add Role'); ?></h2>

        <div class="roles form">

            <?php echo $this->Form->create('Role', array('role' => 'form')); ?>

            <fieldset>

                <div class="form-group">
                    <?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php echo $this->Form->input('Subcategory.category_id'); ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php echo $this->Form->input('subcategory_id'); ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php echo $this->Form->input('tier', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php echo $this->Form->input('xp', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php echo $this->Form->input('description', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->

                <?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

            </fieldset>

            <?php echo $this->Form->end(); ?>

        </div><!-- /.form -->

    </div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->

<?php
$this->Js->get('#SubcategoryCategoryId')->event('change', $this->Js->request(array(
            'controller' => 'subcategories',
            'action' => 'getByCategory'), array(
            'update' => '#RoleSubcategoryId',
            'async' => true,
            'method' => 'post',
            'dataExpression' => true,
            'data' => $this->Js->serializeForm(array(
                'isForm' => true,
                'inline' => true
            ))
        ))
);
?>