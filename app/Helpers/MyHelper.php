<?php 

namespace App\Helpers;

use App\Models\adminModel;

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


	public static function getTimeNow(){
		$exp = explode(' ',date('H:i A d F Y',time()));
		$listMonth = array(
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
			);
		$monthNow = date('m',time());
		$exp[3] = $listMonth[$monthNow];
		return join(" ",$exp);
	}

	public static function getUserName(){
		return adminModel::Where(['id'=>self::id()])->select("username")->get()[0]['username'];
	}

}
?>


