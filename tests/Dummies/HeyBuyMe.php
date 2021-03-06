<?php
/**
 * Contains the HeyBuyMe class.
 *
 * @copyright   Copyright (c) 2020 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2020-05-10
 *
 */

namespace Vanilo\Support\Tests\Dummies;

use Vanilo\Contracts\Buyable;
use Vanilo\Support\Traits\BuyableModel;

class HeyBuyMe implements Buyable
{
    use BuyableModel;

    public $price = 0;

    public function hasImage(): bool
    {
        return false;
    }

    public function getThumbnailUrl(): ?string
    {
        return null;
    }

    public function getImageUrl(): ?string
    {
        return null;
    }
}
