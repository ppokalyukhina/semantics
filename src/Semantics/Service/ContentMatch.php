<?php

namespace Semantics\Service;

trait ContentMatch {
    public function getMatch(string $resource, string $pattern) {
        $content    = \file_get_contents($resource);
        preg_match_all($pattern, $content, $matches);

        return $matches;
    }
}
