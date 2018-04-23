<?php

namespace Semantics\Service;

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass Semantics\Service\CssClassesFinder
 */
final class CssClassFinderTest extends TestCase {
    /**
     * @testdox The method should return an array of all css elements defined in resource file.
     */
    public static function testFindInResource() {
        $resource =  __DIR__ . '/../../Resources/dummy.css';
        $cssFinder = new CssClassesFinder();

        $expectedResult = [
            "dummyCss",
            "h1"
        ];

        $result = $cssFinder->findInResource($resource);
        self::assertCount(2, $result);
        self::assertEquals($expectedResult, $result);
    }
}
