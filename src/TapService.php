<?php

namespace BMansuriya\TapPayment;

use BMansuriya\TapPayment\Services\Charge;

class TapService
{
	/**
	 * @return \BMansuriya\TapPayment\Services\Charge
	 */
	public function createCharge()
	{
		return new Charge();
	}


	/**
	 * @param $id
	 *
	 * @return mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function findCharge( $id )
	{
		$charge = new Charge( $id );

		return $charge->find();
	}
}