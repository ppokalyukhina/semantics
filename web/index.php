<?php

use Semantics\Provider\UnusedCssElementsProvider;
use Semantics\Service\CssClassesFinder;
use Semantics\Service\HtmlElementsFinder;

require dirname(__DIR__) . '/vendor/autoload.php';

$css  =  __DIR__ . '/../src/Semantics/View/dummy.css';
$html = __DIR__ . '/../src/Semantics/View/index.html';

$cssClasses = new CssClassesFinder();
$htmClasses = new HtmlElementsFinder();

$unusedElementsProvider = new UnusedCssElementsProvider($cssClasses, $htmClasses);
$unesedClasses = $unusedElementsProvider->filter($css, $html);

echo "<pre><b>Unused CSS classes in index.html are: </b></pre>";
foreach ($unesedClasses as $class) {
    echo "<pre>$class</pre>";
}

