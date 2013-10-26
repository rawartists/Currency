<?php namespace Pyro\FieldType;

use Pyro\Module\Streams_core\Core\Field\AbstractField;

/**
 * PyroStreams US State Field Type
 *
 * @package		PyroCMS\Core\Modules\Streams Core\Field Types
 * @author		Parse19
 * @license		http://parse19.com/pyrostreams/docs/license
 * @license		http://parse19.com/pyrostreams/license
 * @link		http://parse19.com/pyrostreams
 */
class CurrencyCode extends AbstractField
{
	public $field_type_slug = 'currency_code';
	
	public $db_col_type = 'varchar';

	public $version = '1.2';

	public $author = array(
		'name'=>'AI Web Systems, Inc.',
		'url'=>'http://aiwebsystems.com'
		);

	public $custom_parameters = array(
		'default_value'
		);

	/**
	 * All of them?
	 *
	 * @access 	public
	 * @var 	array
	 */
	public $currency_codes = array(
		'aed' => 'United Arab Emirates Dirham',
		'afn' => 'Afghanistan Afghani',
		'all' => 'Albania Lek',
		'amd' => 'Armenia Dram',
		'ang' => 'Netherlands Antilles Guilder',
		'aoa' => 'Angola Kwanza',
		'ars' => 'Argentina Peso',
		'aud' => 'Australia Dollar',
		'awg' => 'Aruba Guilder',
		'azn' => 'Azerbaijan New Manat',
		'bam' => 'Bosnia and Herzegovina Convertible Marka',
		'bbd' => 'Barbados Dollar',
		'bdt' => 'Bangladesh Taka',
		'bgn' => 'Bulgaria Lev',
		'bhd' => 'Bahrain Dinar',
		'bif' => 'Burundi Franc',
		'bmd' => 'Bermuda Dollar',
		'bnd' => 'Brunei Darussalam Dollar',
		'bob' => 'Bolivia Boliviano',
		'brl' => 'Brazil Real',
		'bsd' => 'Bahamas Dollar',
		'btn' => 'Bhutan Ngultrum',
		'bwp' => 'Botswana Pula',
		'byr' => 'Belarus Ruble',
		'bzd' => 'Belize Dollar',
		'cad' => 'Canada Dollar',
		'cdf' => 'Congo/Kinshasa Franc',
		'chf' => 'Switzerland Franc',
		'clp' => 'Chile Peso',
		'cny' => 'China Yuan Renminbi',
		'cop' => 'Colombia Peso',
		'crc' => 'Costa Rica Colon',
		'cuc' => 'Cuba Convertible Peso',
		'cup' => 'Cuba Peso',
		'cve' => 'Cape Verde Escudo',
		'czk' => 'Czech Republic Koruna',
		'djf' => 'Djibouti Franc',
		'dkk' => 'Denmark Krone',
		'dop' => 'Dominican Republic Peso',
		'dzd' => 'Algeria Dinar',
		'egp' => 'Egypt Pound',
		'ern' => 'Eritrea Nakfa',
		'etb' => 'Ethiopia Birr',
		'eur' => 'Euro Member Countries',
		'fjd' => 'Fiji Dollar',
		'fkp' => 'Falkland Islands (Malvinas) Pound',
		'gbp' => 'United Kingdom Pound',
		'gel' => 'Georgia Lari',
		'ggp' => 'Guernsey Pound',
		'ghs' => 'Ghana Cedi',
		'gip' => 'Gibraltar Pound',
		'gmd' => 'Gambia Dalasi',
		'gnf' => 'Guinea Franc',
		'gtq' => 'Guatemala Quetzal',
		'gyd' => 'Guyana Dollar',
		'hkd' => 'Hong Kong Dollar',
		'hnl' => 'Honduras Lempira',
		'hrk' => 'Croatia Kuna',
		'htg' => 'Haiti Gourde',
		'huf' => 'Hungary Forint',
		'idr' => 'Indonesia Rupiah',
		'ils' => 'Israel Shekel',
		'imp' => 'Isle of Man Pound',
		'inr' => 'India Rupee',
		'iqd' => 'Iraq Dinar',
		'irr' => 'Iran Rial',
		'isk' => 'Iceland Krona',
		'jep' => 'Jersey Pound',
		'jmd' => 'Jamaica Dollar',
		'jod' => 'Jordan Dinar',
		'jpy' => 'Japan Yen',
		'kes' => 'Kenya Shilling',
		'kgs' => 'Kyrgyzstan Som',
		'khr' => 'Cambodia Riel',
		'kmf' => 'Comoros Franc',
		'kpw' => 'Korea (North) Won',
		'krw' => 'Korea (South) Won',
		'kwd' => 'Kuwait Dinar',
		'kyd' => 'Cayman Islands Dollar',
		'kzt' => 'Kazakhstan Tenge',
		'lak' => 'Laos Kip',
		'lbp' => 'Lebanon Pound',
		'lkr' => 'Sri Lanka Rupee',
		'lrd' => 'Liberia Dollar',
		'lsl' => 'Lesotho Loti',
		'ltl' => 'Lithuania Litas',
		'lvl' => 'Latvia Lat',
		'lyd' => 'Libya Dinar',
		'mad' => 'Morocco Dirham',
		'mdl' => 'Moldova Leu',
		'mga' => 'Madagascar Ariary',
		'mkd' => 'Macedonia Denar',
		'mmk' => 'Myanmar (Burma) Kyat',
		'mnt' => 'Mongolia Tughrik',
		'mop' => 'Macau Pataca',
		'mro' => 'Mauritania Ouguiya',
		'mur' => 'Mauritius Rupee',
		'mvr' => 'Maldives (Maldive Islands) Rufiyaa',
		'mwk' => 'Malawi Kwacha',
		'mxn' => 'Mexico Peso',
		'myr' => 'Malaysia Ringgit',
		'mzn' => 'Mozambique Metical',
		'nad' => 'Namibia Dollar',
		'ngn' => 'Nigeria Naira',
		'nio' => 'Nicaragua Cordoba',
		'nok' => 'Norway Krone',
		'npr' => 'Nepal Rupee',
		'nzd' => 'New Zealand Dollar',
		'omr' => 'Oman Rial',
		'pab' => 'Panama Balboa',
		'pen' => 'Peru Nuevo Sol',
		'pgk' => 'Papua New Guinea Kina',
		'php' => 'Philippines Peso',
		'pkr' => 'Pakistan Rupee',
		'pln' => 'Poland Zloty',
		'pyg' => 'Paraguay Guarani',
		'qar' => 'Qatar Riyal',
		'ron' => 'Romania New Leu',
		'rsd' => 'Serbia Dinar',
		'rub' => 'Russia Ruble',
		'rwf' => 'Rwanda Franc',
		'sar' => 'Saudi Arabia Riyal',
		'sbd' => 'Solomon Islands Dollar',
		'scr' => 'Seychelles Rupee',
		'sdg' => 'Sudan Pound',
		'sek' => 'Sweden Krona',
		'sgd' => 'Singapore Dollar',
		'shp' => 'Saint Helena Pound',
		'sll' => 'Sierra Leone Leone',
		'sos' => 'Somalia Shilling',
		'spl' => 'Seborga Luigino',
		'srd' => 'Suriname Dollar',
		'std' => 'São Tomé and Príncipe Dobra',
		'svc' => 'El Salvador Colon',
		'syp' => 'Syria Pound',
		'szl' => 'Swaziland Lilangeni',
		'thb' => 'Thailand Baht',
		'tjs' => 'Tajikistan Somoni',
		'tmt' => 'Turkmenistan Manat',
		'tnd' => 'Tunisia Dinar',
		'top' => 'Tonga Pa\'anga',
		'try' => 'Turkey Lira',
		'ttd' => 'Trinidad and Tobago Dollar',
		'tvd' => 'Tuvalu Dollar',
		'twd' => 'Taiwan New Dollar',
		'tzs' => 'Tanzania Shilling',
		'uah' => 'Ukraine Hryvna',
		'ugx' => 'Uganda Shilling',
		'usd' => 'United States Dollar',
		'uyu' => 'Uruguay Peso',
		'uzs' => 'Uzbekistan Som',
		'vef' => 'Venezuela Bolivar Fuerte',
		'vnd' => 'Viet Nam Dong',
		'vuv' => 'Vanuatu Vatu',
		'wst' => 'Samoa Tala',
		'xaf' => 'Communauté Financière Africaine (BEAC) CFA Franc BEAC',
		'xcd' => 'East Caribbean Dollar',
		'xdr' => 'International Monetary Fund (IMF) Special Drawing Rights',
		'xof' => 'Communauté Financière Africaine (BCEAO) Franc',
		'xpf' => 'Comptoirs Français du Pacifique (CFP) Franc',
		'yer' => 'Yemen Rial',
		'zar' => 'South Africa Rand',
		'zmk' => 'Zambia Kwacha',
		'zwd' => 'Zimbabwe Dollar',
	);

	/**
	 * Output form input
	 *
	 * @param	array
	 * @param	array
	 * @return	string
	 */
	public function formOutput()
	{
		return form_dropdown($this->form_slug, $this->currency_codes, $this->value, 'id="'.$this->form_slug.'"');
	}
}