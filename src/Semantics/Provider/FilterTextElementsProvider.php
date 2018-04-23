<?php

namespace Semantics\Provider;

interface FilterTextElementsProvider {
    /**
     * @param string $allElementsResource - a resource file with all possible elements
     * @param string $usedElementsResource - a file with only used elements
     * @return String[]
     */
    public function filter(string $allElementsResource, string $usedElementsResource) : array;
}
