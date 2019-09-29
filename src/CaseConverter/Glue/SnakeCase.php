<?php declare(strict_types=1);

namespace Intellow\MakeRouteForLaravel\CaseConverter\Glue;

class SnakeCase extends UnderscoreGluer
{
    public function glue(): string
    {
        return $this->glueUsingRules(self::DELIMITER, $this->lowerCase);
    }
}