<?php

declare(strict_types=1);

namespace TwigCsFixer\Tests\Rules\TrailingSpace;

use TwigCsFixer\Rules\TrailingSpaceRule;
use TwigCsFixer\Tests\Rules\AbstractRuleTestCase;

final class TrailingSpaceTest extends AbstractRuleTestCase
{
    public function testRule(): void
    {
        $this->checkRule(new TrailingSpaceRule(), [
            [2 => 33],
            [4 => 23],
        ]);
    }

    public function testRuleWithTab(): void
    {
        $this->checkRule(new TrailingSpaceRule(), [
            [2 => 32],
            [4 => 21],
        ], __DIR__.'/TrailingSpaceTest.tab.twig');
    }

    public function testRuleWithEmptyFile(): void
    {
        $this->checkRule(
            new TrailingSpaceRule(),
            [],
            __DIR__.'/TrailingSpaceTest.empty.twig'
        );

        $this->checkRule(new TrailingSpaceRule(), [
            [1 => 2],
        ], __DIR__.'/TrailingSpaceTest.empty2.twig');
    }
}
