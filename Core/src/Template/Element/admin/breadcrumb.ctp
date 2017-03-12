<?php
if (!empty($this->Breadcrumbs->getCrumbs()))
{
    $this->Breadcrumbs->templates([
        'item' => '<li class="breadcrumb-item" {{attrs}}><a href="{{url}}"{{innerAttrs}}>{{title}}</a></li>{{separator}}',
        'itemWithoutLink' => '<li class="breadcrumb-item" {{attrs}}><span{{innerAttrs}}>{{title}}</span></li>{{separator}}',
    ]);

    $this->Breadcrumbs->prepend($this->Html->icon('home'), '/admin', ['escape' => false]);
    $crumbs = $this->Breadcrumbs->render([
        'class' => 'breadcrumb',
    ]);

    echo $this->Html->div('col-12 visible-md-up', $crumbs, ['id' => 'breadcrumb-container']);
}
