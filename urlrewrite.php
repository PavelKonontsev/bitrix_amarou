<?php
$arUrlRewrite=array (
  1 => 
  array (
    'CONDITION' => '#^/features/([a-z0-9A-Z_-]*)/.*#',
    'PATH' => '/features/details.php',
    'RULE' => 'CODE=$1',
    'ID' => 'bitrix:news.detail',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/projects/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/projects/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/blog/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/blog/index.php',
    'SORT' => 100,
  ),
);
