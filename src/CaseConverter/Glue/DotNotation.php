<?php declare(strict_types=1);

namespace Intellow\MakeRouteForLaravel\CaseConverter\Glue;

/**
 * Class DotNotation
 *
 * @package Intellow\MakeRouteForLaravel\CaseConverter\Glue
 */
class DotNotation extends Gluer
{
    const DELIMITER = '.';

    /**
     * Format detected words in _dot notation_
     *
     * @return string
     */
    public function glue(): string
    {
        return $this->glueUsingRules(self::DELIMITER, $this->lowerCase);
    }
}
