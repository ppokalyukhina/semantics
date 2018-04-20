<?php

namespace Semantics\Service;

class CssClassesFinder implements TextFinder {
    use ContentMatch;

    public const PATTERN = "(.\w+\s+)";

    /** @inheritdoc */
    public function findInResource(string $resource): array {
        $cssMatches = $this->getMatch($resource, self::PATTERN);
        $cssClasses = $cssMatches[0];
        sort($cssClasses);

        return $cssClasses;
    }
}
