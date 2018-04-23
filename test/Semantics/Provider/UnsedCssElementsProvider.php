<?php

namespace Semantics\Provider;

use PHPUnit\Framework\TestCase;
use Semantics\Service\CssClassesFinder;
use Semantics\Service\HtmlElementsFinder;

/**
 * @coversDefaultClass Semantics\Provider\UnusedCssElementsProvider
 */
class UnsedCssElementsProvider extends TestCase {
    /**
     * @testdox The result should be an array of all elements which were not used in HTML.
     */
    public static function testFilterResources() {
        $cssResource =  __DIR__ . '/../../Resources/dummy.css';
        $htmlResource =  __DIR__ . '/../../Resources/index.html';

        $unusedElementsProvider = new UnusedCssElementsProvider(
            new CssClassesFinder(),
            new HtmlElementsFinder()
        );

        $result = $unusedElementsProvider->filter($cssResource, $htmlResource);

        self::assertCount(2, $result);
        self::assertEquals(["dummyCss", "h1"], $result);
    }
}
