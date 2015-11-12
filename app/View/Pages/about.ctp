
<div id="page-container" class="row">

    <?php echo $this->element('menu/side_menu'); ?>

    <div id="page-content" class="col-sm-9">

        <div class="items index">
            <h1>Nom : Félix Wilhelmy</h1>
            <hr/>
            <h3>Cours : 420-267 MO Développer un site Web et une application pour Internet</h3>
            <h3>Session : Automne 2015, Collège Montmorency</h3>
            <hr/>
            <p>Lors de la création de mon site web, j'ai utiliser Cake PHP, MySQL, Uniform Server Zore, HTML, CSS, PHP, Ajax, JQuery
            ainsi que quelque autres outils.</p>
            <p>Dans ce site web, vous trouverez ces nouvelle fonctionnaliter : un system de qui envoit de mail pour confirmer votre 
            inscription, un systeme de dynamique select box, un system de televersement de fichier et cet page a propos du site web.</p>
            <p><?php echo $this->Html->image('DatabaseTemplate.png', array('alt' => 'CakePHP', 'border' => '0', 'data-src' => 'holder.js/100%x100', 'width' => '700px')); ?>&nbsp;</p>
            <p>Liens vers la base de données : <a href="http://localhost/cakephp-2.7.3/pages/about.php">Database</a></p>
        </div><!-- /.index -->
    </div><!-- /#page-content .col-sm-9 -->
</div><!-- /#page-container .row-fluid -->