<?php
/*
 *  This file is part of typing/types.
 *
 *  (c) Victor Passapera <vpassapera at outlook.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Typing\Math;

/**
 * Interface MathLibraryAdapterInterface.
 */
interface MathAdapterInterface extends MathInterface
{
    /**
     * @param string|int|float $number
     *
     * @return int
     */
    public function getPrecision(string | int | float $number): int;

    /**
     * @return int
     */
    public function getRoundingStrategy(): int;
}
