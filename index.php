<?php

use \dir2;

require 'autoload.php';

ClassLoader::registerNamespace('dir1', __DIR__);
ClassLoader::registerNamespace('dir2', __DIR__);
ClassLoader::registerNamespace('dir2/dir3', __DIR__);
ClassLoader::registerNamespace('dir2/dir3/dir4', __DIR__);

$class1 = new dir1\dir1();
$class2 = new dir2\dir2();
$class3 = new dir2\dir3\dir3();
$class4 = new dir2\dir3\dir4\dir4();