<?php

declare(strict_types=1);

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

namespace TYPO3Fluid\Fluid\Tests\Functional\Fixtures\Various;

use TYPO3Fluid\Fluid\Core\ViewHelper\ViewHelperResolverDelegateInterface;

final class TestViewHelperResolverDelegate implements ViewHelperResolverDelegateInterface
{
    public function resolveViewHelperClassName(string $name): string
    {
        return 'Vendor\\Package\\Test\\' . ucfirst($name);
    }

    public function getNamespace(): string
    {
        return self::class;
    }
}
