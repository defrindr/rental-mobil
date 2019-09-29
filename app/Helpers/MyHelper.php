<?php 

namespace App\Helpers;

class MyHelper
{
	/**
	 * Change number to money format
	 * @param  int $money
	 * @return string 
	 */
	public static function toMoney($money)
	{
		if($money == null) return "-";
		return strrev(
					join(
						".",str_split(
							strrev(
								(string)$money), 3)
					)
				);
	}

	/**
	 * Check User is admin or not
	 * @return boolean
	 */
	public static function isAdmin()
	{
		if(\Auth::user()->email == "admin@rental.com") return 1;
		else 0;
	}

	/**
	 * Return User id
	 * @return int
	 */
	public static function id()
	{
		return \Auth::user()->id;
	}

	public static function setDate(string $date){
		return date('H:i A d F Y',strtotime($date));
	}

}
?>


