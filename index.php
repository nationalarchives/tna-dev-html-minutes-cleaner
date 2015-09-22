<?php
/**
 * Created by PhpStorm.
 * User: gwynjones
 * Date: 17/09/15
 * Time: 12:41
 */

require 'vendor/autoload.php';
require 'includes/logger-instantiation.php';

require 'src/HtmlCleaner.php';

$page = new HtmlCleaner('word-filtered-output.html');

$page->clean();


