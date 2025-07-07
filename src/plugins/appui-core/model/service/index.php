<?php
use bbn\X;
use bbn\File\System;

/** @var bbn\Mvc\Model $model */
$routes = $model->getRoutes();
$plugins = [];
$fs = new System();
$file = $model->dataPath() . 'component-registry-' . (constant('BBN_LOCALE') ?: 'en') . '.json';
if ($fs->exists($file)) {
  $plugins = array_merge($plugins, $fs->decodeContents($file, 'json', true));
}
foreach ($routes as $r) {
  $file = $model->dataPath($r['name']) . 'component-registry-' . (constant('BBN_LOCALE') ?: 'en') . '.json';
  if ($fs->exists($file)) {
    $plugins = array_merge($plugins, $fs->decodeContents($file, 'json', true));
  }
}

return ['registry' => $plugins];
