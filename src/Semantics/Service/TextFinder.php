<?php

namespace Semantics\Service;

interface TextFinder {
    /**
     * Searches for elements across content of given resource.
     * @param string $resource Given directory of resource file.
     * @return string[] Returns sorted array of strings
     */
    public function findInResource(string $resource) : array;
}
