<?php

require 'vendor/autoload.php';

/**
 * Dead simple example of Bloge application
 * 
 * @package bloge/starter-pack
 */

use Bloge\Apps\BasicApp;
use Bloge\Content\PHP as Content;
use Bloge\Renderers\PHP as Renderer;

$content = __DIR__ . '/content';
$theme   = __DIR__ . '/theme';

return new BasicApp(
    new Content($content),
    new Renderer($theme)
);