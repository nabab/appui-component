<?php

use bbn\Mvc;
/** @var bbn\Mvc\Model $model The current model */

return [
  'data' => Mvc::getInstance()->getSubpluginModel('service/index', [], $model->getController(), 'appui-component', 'appui-core'),
  'script' => Mvc::getInstance()->subpluginView('service/index', 'js', [], 'appui-component', 'appui-core'),
];


