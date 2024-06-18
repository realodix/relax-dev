<?php

namespace Realodix\Relax\Tests\Fixtures;

use Realodix\Relax\RuleSet\AbstractRuleSet;

final class RuleSetWithSetNameFile extends AbstractRuleSet
{
    public function name(): string
    {
        return 'valid-rule-set-name';
    }

    public function rules(): array
    {
        return [];
    }
}
