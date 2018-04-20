<?php

namespace Semantics\Service;

class HtmlElementsFinder implements TextFinder {
    use ContentMatch;

    public const PATTERN = "/class=\"(\w+)\"/";

    /** @inheritdoc */
    public function findInResource(string $resource): array {
        $htmlMatches = $this->getMatch($resource, self::PATTERN);
        $usedClasses = $htmlMatches[1];
        sort($usedClasses);

        return $usedClasses;
    }
}
