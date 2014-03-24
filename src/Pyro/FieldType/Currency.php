<?php namespace Pyro\FieldType;

use Pyro\Module\Streams\FieldType\FieldTypeAbstract;

class Currency extends FieldTypeAbstract
{
    /**
     * Field type slug
     *
     * @var string
     */
    public $field_type_slug = 'currency';

    /**
     * Database column type
     *
     * @var string
     */
    public $db_col_type = 'string';

    /**
     * Version
     *
     * @var string
     */
    public $version = '1.3';

    /**
     * Author
     *
     * @var array
     */
    public $author = array(
        'name' => 'AI Web Systems, Inc.',
        'url'  => 'http://aiwebsystems.com'
    );

    /**
     * Custom parameters
     *
     * @var array
     */
    public $custom_parameters = array(
        'default_value'
    );

    /**
     * Currencies
     *
     * @var array
     */
    public $currencies = array(
        'AED' => 'United Arab Emirates Dirham',
        'AFN' => 'Afghanistan Afghani',
        'ALL' => 'Albania Lek',
        'AMD' => 'Armenia Dram',
        'ANG' => 'Netherlands Antilles Guilder',
        'AOA' => 'Angola Kwanza',
        'ARS' => 'Argentina Peso',
        'AUD' => 'Australia Dollar',
        'AWG' => 'Aruba Guilder',
        'AZN' => 'Azerbaijan New Manat',
        'BAM' => 'Bosnia and Herzegovina Convertible Marka',
        'BBD' => 'Barbados Dollar',
        'BDT' => 'Bangladesh Taka',
        'BGN' => 'Bulgaria Lev',
        'BHD' => 'Bahrain Dinar',
        'BIF' => 'Burundi Franc',
        'BMD' => 'Bermuda Dollar',
        'BND' => 'Brunei Darussalam Dollar',
        'BOB' => 'Bolivia Boliviano',
        'BRL' => 'Brazil Real',
        'BSD' => 'Bahamas Dollar',
        'BTN' => 'Bhutan Ngultrum',
        'BWP' => 'Botswana Pula',
        'BYR' => 'Belarus Ruble',
        'BZD' => 'Belize Dollar',
        'CAD' => 'Canada Dollar',
        'CDF' => 'Congo/Kinshasa Franc',
        'CHF' => 'Switzerland Franc',
        'CLP' => 'Chile Peso',
        'CNY' => 'China Yuan Renminbi',
        'COP' => 'Colombia Peso',
        'CRC' => 'Costa Rica Colon',
        'CUC' => 'Cuba Convertible Peso',
        'CUP' => 'Cuba Peso',
        'CVE' => 'Cape Verde Escudo',
        'CZK' => 'Czech Republic Koruna',
        'DJF' => 'Djibouti Franc',
        'DKK' => 'Denmark Krone',
        'DOP' => 'Dominican Republic Peso',
        'DZD' => 'Algeria Dinar',
        'EGP' => 'Egypt Pound',
        'ERN' => 'Eritrea Nakfa',
        'ETB' => 'Ethiopia Birr',
        'EUR' => 'Euro Member Countries',
        'FJD' => 'Fiji Dollar',
        'FKP' => 'Falkland Islands (Malvinas) Pound',
        'GBP' => 'United Kingdom Pound',
        'GEL' => 'Georgia Lari',
        'GGP' => 'Guernsey Pound',
        'GHS' => 'Ghana Cedi',
        'GIP' => 'Gibraltar Pound',
        'GMD' => 'Gambia Dalasi',
        'GNF' => 'Guinea Franc',
        'GTQ' => 'Guatemala Quetzal',
        'GYD' => 'Guyana Dollar',
        'HKD' => 'Hong Kong Dollar',
        'HNL' => 'Honduras Lempira',
        'HRK' => 'Croatia Kuna',
        'HTG' => 'Haiti Gourde',
        'HUF' => 'Hungary Forint',
        'IDR' => 'Indonesia Rupiah',
        'ILS' => 'Israel Shekel',
        'IMP' => 'Isle of Man Pound',
        'INR' => 'India Rupee',
        'IQD' => 'Iraq Dinar',
        'IRR' => 'Iran Rial',
        'ISK' => 'Iceland Krona',
        'JEP' => 'Jersey Pound',
        'JMD' => 'Jamaica Dollar',
        'JOD' => 'Jordan Dinar',
        'JPY' => 'Japan Yen',
        'KES' => 'Kenya Shilling',
        'KGS' => 'Kyrgyzstan Som',
        'KHR' => 'Cambodia Riel',
        'KMF' => 'Comoros Franc',
        'KPW' => 'Korea (North) Won',
        'KRW' => 'Korea (South) Won',
        'KWD' => 'Kuwait Dinar',
        'KYD' => 'Cayman Islands Dollar',
        'KZT' => 'Kazakhstan Tenge',
        'LAK' => 'Laos Kip',
        'LBP' => 'Lebanon Pound',
        'LKR' => 'Sri Lanka Rupee',
        'LRD' => 'Liberia Dollar',
        'LSL' => 'Lesotho Loti',
        'LTL' => 'Lithuania Litas',
        'LVL' => 'Latvia Lat',
        'LYD' => 'Libya Dinar',
        'MAD' => 'Morocco Dirham',
        'MDL' => 'Moldova Leu',
        'MGA' => 'Madagascar Ariary',
        'MKD' => 'Macedonia Denar',
        'MMK' => 'Myanmar (Burma) Kyat',
        'MNT' => 'Mongolia Tughrik',
        'MOP' => 'Macau Pataca',
        'MRO' => 'Mauritania Ouguiya',
        'MUR' => 'Mauritius Rupee',
        'MVR' => 'Maldives (Maldive Islands) Rufiyaa',
        'MWK' => 'Malawi Kwacha',
        'MXN' => 'Mexico Peso',
        'MYR' => 'Malaysia Ringgit',
        'MZN' => 'Mozambique Metical',
        'NAD' => 'Namibia Dollar',
        'NGN' => 'Nigeria Naira',
        'NIO' => 'Nicaragua Cordoba',
        'NOK' => 'Norway Krone',
        'NPR' => 'Nepal Rupee',
        'NZD' => 'New Zealand Dollar',
        'OMR' => 'Oman Rial',
        'PAB' => 'Panama Balboa',
        'PEN' => 'Peru Nuevo Sol',
        'PGK' => 'Papua New Guinea Kina',
        'PHP' => 'Philippines Peso',
        'PKR' => 'Pakistan Rupee',
        'PLN' => 'Poland Zloty',
        'PYG' => 'Paraguay Guarani',
        'QAR' => 'Qatar Riyal',
        'RON' => 'Romania New Leu',
        'RSD' => 'Serbia Dinar',
        'RUB' => 'Russia Ruble',
        'RWF' => 'Rwanda Franc',
        'SAR' => 'Saudi Arabia Riyal',
        'SBD' => 'Solomon Islands Dollar',
        'SCR' => 'Seychelles Rupee',
        'SDG' => 'Sudan Pound',
        'SEK' => 'Sweden Krona',
        'SGD' => 'Singapore Dollar',
        'SHP' => 'Saint Helena Pound',
        'SLL' => 'Sierra Leone Leone',
        'SOS' => 'Somalia Shilling',
        'SPL' => 'Seborga Luigino',
        'SRD' => 'Suriname Dollar',
        'STD' => 'São Tomé and Príncipe Dobra',
        'SVC' => 'El Salvador Colon',
        'SYP' => 'Syria Pound',
        'SZL' => 'Swaziland Lilangeni',
        'THB' => 'Thailand Baht',
        'TJS' => 'Tajikistan Somoni',
        'TMT' => 'Turkmenistan Manat',
        'TND' => 'Tunisia Dinar',
        'TOP' => 'Tonga Pa\'anga',
        'TRY' => 'Turkey Lira',
        'TTD' => 'Trinidad and Tobago Dollar',
        'TVD' => 'Tuvalu Dollar',
        'TWD' => 'Taiwan New Dollar',
        'TZS' => 'Tanzania Shilling',
        'UAH' => 'Ukraine Hryvna',
        'UGX' => 'Uganda Shilling',
        'USD' => 'United States Dollar',
        'UYU' => 'Uruguay Peso',
        'UZS' => 'Uzbekistan Som',
        'VEF' => 'Venezuela Bolivar Fuerte',
        'VND' => 'Viet Nam Dong',
        'VUV' => 'Vanuatu Vatu',
        'WST' => 'Samoa Tala',
        'XAF' => 'Communauté Financière Africaine (BEAC) CFA Franc BEAC',
        'XCD' => 'East Caribbean Dollar',
        'XDR' => 'International Monetary Fund (IMF) Special Drawing Rights',
        'XOF' => 'Communauté Financière Africaine (BCEAO) Franc',
        'XPF' => 'Comptoirs Français du Pacifique (CFP) Franc',
        'YER' => 'Yemen Rial',
        'ZAR' => 'South Africa Rand',
        'ZMK' => 'Zambia Kwacha',
        'ZWD' => 'Zimbabwe Dollar',
    );

    /**
     * Symbols
     *
     * @var array
     */
    protected $symbols = array(
        'EUR' => '&#128;',
        'GBP' => '&#163;',
        'JPY' => '&#165;',
        'TRY' => '&#8356;',
        'USD' => '&#36;',
    );

    /**
     * Output form input
     *
     * @param    array
     * @param    array
     * @return    string
     */
    public function formInput()
    {
        return form_dropdown($this->form_slug, $this->getOptions(), $this->value);
    }

    /**
     * Plugin output
     *
     * @return array|mixed
     */
    public function pluginOutput()
    {
        return array(
            'code'   => $this->value,
            'symbol' => $this->getSymbol(),
        );
    }

    /**
     * Data output
     *
     * @return array|mixed
     */
    public function pluginData()
    {
        $return = \StdClass();

        $return->code   = $this->value;
        $return->symbol = $this->getSymbol();

        return $return;
    }

    /**
     * Get options
     *
     * @return array
     */
    protected function getOptions()
    {
        $options = array();

        foreach ($this->currencies as $code => $title) {
            $options[$code] = $code.' - '.$title;
        }

        return $options;
    }

    /**
     * Get symbol
     *
     * @return string
     */
    public function getSymbol()
    {
        if (isset($this->symbols[$this->value]) and $symbol = $this->symbols[$this->value]) {
            return $symbol;
        }

        return null;
    }

    /**
     * Get currency
     *
     * @return null
     */
    public function getCurrency()
    {
        if (isset($this->code[$this->value]) and $currency = $this->code[$this->value]) {
            return $currency;
        }

        return null;
    }
}
