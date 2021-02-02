<?php
/**
 * Created by PhpStorm.
 * User: BBN
 * Date: 12/09/2018
 * Time: 14:14
 */
/** @var bbn\Mvc\Controller $ctrl */
$ctrl->obj->success = false;
if ( defined('BBN_APP_NAME') && count($ctrl->arguments) ){
  $ctrl->setMode('public');
  $args = $ctrl->arguments;
  $prefix = (defined('BBN_APP_PREFIX') ? BBN_APP_PREFIX : BBN_APP_NAME).'-';
  $components = [];
  // Each argument (slash separated) is a component
  foreach ( $args as $a ){
    if ( $tmp = $ctrl->getComponent($a) ){
      $components[] = $tmp;
    }
  }
  $ctrl->obj->success = true;
  $ctrl->obj->components = $components;
}