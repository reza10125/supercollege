<?php

/**
 * Mockery (https://docs.mockery.io/)
 *
 * @copyright https://github.com/mockery/mockery/blob/HEAD/COPYRIGHT.md
 * @license   https://github.com/mockery/mockery/blob/HEAD/LICENSE BSD 3-Clause License
 * @link      https://github.com/mockery/mockery for the canonical source repository
 */

namespace Mockery\Matcher;

class NoArgs extends MatcherAbstract implements ArgumentListMatcher
{
    /**
     * @inheritdoc
     */
    public function match(&$actual)
    {
        return count($actual) == 0;
    }

    /**
     * @inheritdoc
     */
    public function __toString()
    {
        return '<No Arguments>';
    }
}