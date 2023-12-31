<?php 
if($this->controller->action === 'create'){ 
    return;
}


$is_project = false;
$label = 'Projetos';

if($entity instanceof MapasCulturais\Entities\Project){
    $is_project = true;
    $label = 'Subprojetos';
}

?>
<?php $this->applyTemplateHook('widgets','before') ?>
<div class="widget">
    <?php $this->applyTemplateHook('widgets','begin') ?>
    <?php if ($projects): ?>
        <h3><?php echo $label ?></h3>
        <ul class="widget-list js-slimScroll">
            <?php foreach ($projects as $project): ?>
                <li class="widget-list-item"><a href="<?php echo $project->singleUrl; ?>"><span><?php echo $project->name; ?></span></a></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    
    <?php $this->applyTemplateHook('widgets','end') ?>
</div>
<?php $this->applyTemplateHook('widgets','after') ?>