<?php

namespace Semantics\Service;

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass Semantics\Service\HtmlElementsFinder
 */
final class HtmlElementsFinderTest extends TestCase {
    /**
     * @testdox Returns an array of all used elements in a given html file.
     */
    public function testResource() {
        $resource =  __DIR__ . '/../../Resources/index.html';
        $htmlElementsFinder = new HtmlElementsFinder();

        $expectedResult = [
            'body',
            'html',
            ];

        $result = $htmlElementsFinder->findInResource($resource);
        self::assertCount(2, $result);
        self::assertEquals($expectedResult, $result);
    }
}
