<?php
namespace lg;
return array(
   'controllers' => array(
       'invokables' => array(
           'lg\Controller\Index' => Controller\IndexController::class,
       ),
   ),
   
   'router' => array(
       'routes' => array(
          'lg'=>array(
'type' => 'Zend\Mvc\Router\Http\Literal',
'options' => array (
'route' => '/lg',
'defaults' => array (
'controller' => 'lg\Controller\Index',
'action' => 'index'
)
)
  ),
       ),
   ),

   'view_manager' => array(
       'template_path_stack' => array(
           __DIR__ . '/../view',
       ),
   ),
);