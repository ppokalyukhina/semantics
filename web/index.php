<?php

use Semantics\Service\CssClassesFinder;
use Semantics\Service\HtmlElementsFinder;

require dirname(__DIR__) . '/vendor/autoload.php';

$css  =  __DIR__ . '/../src/Semantics/View/dummy.css';
$html = __DIR__ . '/index.html';

$cssClasses = new CssClassesFinder();
$htmClasses = new HtmlElementsFinder();

$allCssClasses = $cssClasses->findInResource($css);
$usedClasses = $htmClasses->findInResource($html);

$unusedClasses = array_slice($allCssClasses, count($usedClasses));

echo "<pre>Unused CSS classes in index.html are: </pre>";
foreach ($unusedClasses as $class) {
    echo "<pre>$class</pre>";
}

