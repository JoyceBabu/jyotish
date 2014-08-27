<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Panchanga\Nakshatra\Object;

use Jyotish\Graha\Graha;
use Jyotish\Tattva\Jiva\Deva;
use Jyotish\Tattva\Jiva\Manusha;
use Jyotish\Tattva\Maha\Guna;

/**
 * Class of nakshatra 3.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class N3 extends \Jyotish\Panchanga\Nakshatra\Nakshatra {
	/**
	 * Devanagari title 'krittika' in transliteration.
	 * 
	 * @var array
	 * @see Jyotish\Alphabet\Devanagari
	 */
	protected $nakshatraTranslit = array(
		 'ka','r','ta','virama','ta','i','ka','aa'
	);
	
	protected $nakshatraDeva = Deva::DEVA_AGNI;
	protected $nakshatraEnergy = self::ENERGY_LAYA;
	protected $nakshatraGana = Manusha::GANA_RAKSHASA;
	protected $nakshatraGender = Manusha::GENDER_FEMALE;
	protected $nakshatraGraha = Graha::GRAHA_SY;
	protected $nakshatraGuna = Guna::GUNA_RAJA;
	protected $nakshatraPurushartha = Manusha::PURUSHARTHA_KAMA;
	protected $nakshatraType = self::TYPE_SADHARANA;
	protected $nakshatraVarna = Manusha::VARNA_BRAHMANA;

	public function __construct($options) {
		return $this;
	}

}