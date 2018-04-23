<?php

namespace Semantics\Provider;

use Semantics\Service\CssClassesFinder;
use Semantics\Service\HtmlElementsFinder;
use Semantics\Service\TextFinder;

class UnusedCssElementsProvider implements FilterTextElementsProvider {
    /** @var CssClassesFinder */
    private $cssClassesFinder;

    /** @var  HtmlElementsFinder */
    private $htmlClassesFinder;

    public function __construct(
        TextFinder $cssClassesFinder,
        TextFinder $htmlClassesFinder
    ) {
        $this->cssClassesFinder  = $cssClassesFinder;
        $this->htmlClassesFinder = $htmlClassesFinder;
    }

    /** @inheritdoc */
    public function filter(string $allElementsResource, string $usedElementsResource): array {
        $allCssClasses = $this->cssClassesFinder->findInResource($allElementsResource);
        $usedClasses = $this->htmlClassesFinder->findInResource($usedElementsResource);

        return array_diff($allCssClasses, $usedClasses);
    }
}
