<?php

namespace BMansuriya\TapPayment\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class TapPayment
 *
 * @package BMansuriya\TapPayment\Facade
 *
 * @method static \BMansuriya\TapPayment\Services\Charge createCharge()
 * @method static \BMansuriya\TapPayment\Resources\Invoice findCharge()
 */
class TapPayment extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'tap-payment';
	}
}