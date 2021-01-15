<?php

use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->delete();

		$currencies = array(

            array('ISO-4217'=> 'AFN',
                'country'=> 'Afghanistan',
                'currency'=> 'Afghanistan Afghani',
                'symbol'=> '&#1547;'),
            
            array('ISO-4217'=> 'ARS',
                'country'=> 'Argentina',
                'currency'=> 'Argentine Peso',
                'symbol'=> '&#36;'),
            
            array('ISO-4217'=> 'AWG',
                'country'=> 'Aruba',
                'currency'=> 'Aruban florin',
                'symbol'=> '&#402;'),
            
            array('ISO-4217'=> 'AUD',
                'country'=> 'Australia',
                'currency'=> 'Australian Dollar',
                'symbol'=> '&#65;&#36;'),
            
            array('ISO-4217'=> 'AZN',
                'country'=> 'Azerbaijan',
                'currency'=> 'Azerbaijani Manat',
                'symbol'=> '&#8380;'),
            
            array('ISO-4217'=> 'BSD',
                'country'=> 'The Bahamas',
                'currency'=> 'Bahamas Dollar',
                'symbol'=> '&#66;&#36;'),
            
            array('ISO-4217'=> 'BBD',
                'country'=> 'Barbados',
                'currency'=> 'Barbados Dollar',
                'symbol'=> '&#66;&#100;&#115;&#36;'),
            
            array('ISO-4217'=> 'BDT',
                'country'=> 'People\'s Republic of Bangladesh',
                'currency'=> 'Bangladeshi taka',
                'symbol'=> '&#2547;'),
            
            array('ISO-4217'=> 'BYN',
                'country'=> 'Belarus',
                'currency'=> 'Belarus Ruble',
                'symbol'=> '&#66;&#114;'),
            
            array('ISO-4217'=> 'BZD',
                'country'=> 'Belize',
                'currency'=> 'Belize Dollar',
                'symbol'=> '&#66;&#90;&#36;'),
            
            array('ISO-4217'=> 'BMD',
                'country'=> 'British Overseas Territory of Bermuda',
                'currency'=> 'Bermudian Dollar',
                'symbol'=> '&#66;&#68;&#36;'),
            
            array('ISO-4217'=> 'BOP',
                'country'=> 'Bolivia',
                'currency'=> 'Boliviano',
                'symbol'=> '&#66;&#115;'),
            
            array('ISO-4217'=> 'BAM',
                'country'=> 'Bosnia and Herzegovina',
                'currency'=> 'Bosnia-Herzegovina Convertible Marka',
                'symbol'=> '&#75;&#77;'),
            
            array('ISO-4217'=> 'BWP',
                'country'=> 'Botswana',
                'currency'=> 'Botswana pula',
                'symbol'=> '&#80;'),
            
            array('ISO-4217'=> 'BGN',
                'country'=> 'Bulgaria',
                'currency'=> 'Bulgarian lev',
                'symbol'=> '&#1083;&#1074;'),
            
            array('ISO-4217'=> 'BRL',
                'country'=> 'Brazil',
                'currency'=> 'Brazilian real',
                'symbol'=> '&#82;&#36;'),
            
            array('ISO-4217'=> 'BND',
                'country'=> 'Sultanate of Brunei',
                'currency'=> 'Brunei dollar',
                'symbol'=> '&#66;&#36;'),
            
            array('ISO-4217'=> 'KHR',
                'country'=> 'Cambodia',
                'currency'=> 'Cambodian riel',
                'symbol'=> '&#6107;'),
            
            array('ISO-4217'=> 'CAD',
                'country'=> 'Canada',
                'currency'=> 'Canadian dollar',
                'symbol'=> '&#67;&#36;'),
            
            array('ISO-4217'=> 'KYD',
                'country'=> 'Cayman Islands',
                'currency'=> 'Cayman Islands dollar',
                'symbol'=> '&#36;'),
            
            array('ISO-4217'=> 'CLP',
                'country'=> 'Chile',
                'currency'=> 'Chilean peso',
                'symbol'=> '&#36;'),
            
            array('ISO-4217'=> 'CNY',
                'country'=> 'China',
                'currency'=> 'Chinese Yuan Renminbi',
                'symbol'=> '&#165;'),
            
            array('ISO-4217'=> 'COP',
                'country'=> 'Colombia',
                'currency'=> 'Colombian peso',
                'symbol'=> '&#36;'),
            
            array('ISO-4217'=> 'CRC',
                'country'=> 'Costa Rica',
                'currency'=> 'Costa Rican colón',
                'symbol'=> '&#8353;'),
            
            array('ISO-4217'=> 'HRK',
                'country'=> 'Croatia',
                'currency'=> 'Croatian kuna',
                'symbol'=> '&#107;&#110;'),
            
            array('ISO-4217'=> 'CUP',
                'country'=> 'Cuba',
                'currency'=> 'Cuban peso',
                'symbol'=> '&#8369;'),
            
            array('ISO-4217'=> 'CZK',
                'country'=> 'Czech Republic',
                'currency'=> 'Czech koruna',
                'symbol'=> '&#75;&#269;'),
            
            array('ISO-4217'=> 'DKK',
                'country'=> 'Denmark, Greenland, and the Faroe Islands',
                'currency'=> 'Danish krone',
                'symbol'=> '&#107;&#114;'),
            
            array('ISO-4217'=> 'DOP',
                'country'=> 'Dominican Republic',
                'currency'=> 'Dominican peso',
                'symbol'=> '&#82;&#68;&#36;'),
            
            array('ISO-4217'=> 'XCD',
                'country'=> 'Antigua and Barbuda, Commonwealth of Dominica, Grenada, Montserrat, St. Kitts and Nevis, Saint Lucia and St. Vincent and the Grenadines',
                'currency'=> 'Eastern Caribbean dollar',
                'symbol'=> '&#36;'),
            
            array('ISO-4217'=> 'EGP',
                'country'=> 'Egypt',
                'currency'=> 'Egyptian pound',
                'symbol'=> '&#163;'),
            
            array('ISO-4217'=> 'SVC',
                'country'=> 'El Salvador',
                'currency'=> 'Salvadoran colón',
                'symbol'=> '&#36;'),
            
            array('ISO-4217'=> 'EEK',
                'country'=> 'Estonia',
                'currency'=> 'Estonian kroon',
                'symbol'=> '&#75;&#114;'),
            
            array('ISO-4217'=> 'EUR',
                'country'=>     'Italy, Belgium, Bulgaria, Croatia, Cyprus, Czechia, Denmark, Estonia, Finland, France, Germany, 
                                 Greece, Hungary, Ireland, Latvia, Lithuania, Luxembourg, Malta, Netherlands, 
                                 Portugal, Romania, Slovakia, Slovenia, Spain, Sweden',
                'currency'=> 'Euro',
                'symbol'=> '&#8364;'),
            
            array('ISO-4217'=> 'FKP',
                'country'=> 'Falkland Islands',
                'currency'=> 'Falkland Islands (Malvinas) Pound',
                'symbol'=> '&#70;&#75;&#163;'),
            
            array('ISO-4217'=> 'FJD',
                'country'=> 'Fiji',
                'currency'=> 'Fijian dollar',
                'symbol'=> '&#70;&#74;&#36;'),
            
            array('ISO-4217'=> 'GHC',
                'country'=> 'Ghana',
                'currency'=> 'Ghanaian cedi',
                'symbol'=> '&#71;&#72;&#162;'),
            
            array('ISO-4217'=> 'GIP',
                'country'=> 'Gibraltar',
                'currency'=> 'Gibraltar pound',
                'symbol'=> '&#163;'),
            
            array('ISO-4217'=> 'GTQ',
                'country'=> 'Guatemala',
                'currency'=> 'Guatemalan quetzal',
                'symbol'=> '&#81;'),
            
                array('ISO-4217'=> 'GGP',
                'country'=> 'Guernsey',
                'currency'=> 'Guernsey pound',
                'symbol'=> '&#81;'),
            
                array('ISO-4217'=> 'GYD',
                'country'=> 'Guyana',
                'currency'=> 'Guyanese dollar',
                'symbol'=> '&#71;&#89;&#36;'),
            
            array('ISO-4217'=> 'HNL',
                'country'=> 'Honduras',
                'currency'=> 'Honduran lempira',
                'symbol'=> '&#76;'),
            
            array('ISO-4217'=> 'HKD',
                'country'=> 'Hong Kong',
                'currency'=> 'Hong Kong dollar',
                'symbol'=> '&#72;&#75;&#36;'),
            
            array('ISO-4217'=> 'HUF',
                'country'=> 'Hungary',
                'currency'=> 'Hungarian forint',
                'symbol'=> '&#70;&#116;'),
            
            array('ISO-4217'=> 'ISK',
                'country'=> 'Iceland',
                'currency'=> 'Icelandic króna',
                'symbol'=> '&#237;&#107;&#114;'),
            
            array('ISO-4217'=> 'INR',
                'country'=> 'India',
                'currency'=> 'Indian rupee',
                'symbol'=> '&#8377;'),
            
                array('ISO-4217'=> 'IDR',
                'country'=> 'Indonesia',
                'currency'=> 'Indonesian rupiah',
                'symbol'=> '&#82;&#112;'),
            
                array('ISO-4217'=> 'IRR',
                'country'=> 'Iran',
                'currency'=> 'Iranian rial',
                'symbol'=> '&#65020;'),
            
                array('ISO-4217'=> 'IMP',
                'country'=> 'Isle of Man',
                'currency'=> 'Manx pound',
                'symbol'=> '&#163;'),
            
                array('ISO-4217'=> 'ILS',
                'country'=>  'Israel, Palestinian territories of the West Bank and the Gaza Strip',
                'currency'=> 'Shekel',
                'symbol'=> '&#8362;'),
            
                array('ISO-4217'=> 'JMD',
                'country'=> 'Jamaica',
                'currency'=> 'Jamaican dollar',
                'symbol'=> '&#74;&#36;'),
            
                array('ISO-4217'=> 'JPY',
                'country'=> 'Japan',
                'currency'=> 'Japanese yen',
                'symbol'=> '&#165;'),
            
            array('ISO-4217'=> 'JEP',
                'country'=> 'Jersey',
                'currency'=> 'Jersey pound',
                'symbol'=> '&#163;'),
            
            array('ISO-4217'=> 'KZT',
                'country'=> 'Kazakhstan',
                'currency'=> 'Kazakhstani tenge',
                'symbol'=> '&#8376;'),
            
            array('ISO-4217'=> 'KPW',
                'country'=> 'North Korea',
                'currency'=> 'North Korean won',
                'symbol'=> '&#8361;'),
            
            array('ISO-4217'=> 'KPW',
                'country'=> 'South Korea',
                'currency'=> 'South Korean won',
                'symbol'=> '&#8361;'),
            
            array('ISO-4217'=> 'KGS',
                'country'=> 'Kyrgyz Republic',
                'currency'=> 'Kyrgyzstani som',
                'symbol'=> '&#1083;&#1074;'),
            
                array('ISO-4217'=> 'LAK',
                'country'=> 'Laos',
                'currency'=> 'Lao kip',
                'symbol'=> '&#8365;'),
            
                array('ISO-4217'=> 'LAK',
                'country'=> 'Laos',
                'currency'=> 'Latvian lats',
                'symbol'=> '&#8364;'),
            
                array('ISO-4217'=> 'LVL',
                'country'=> 'Laos',
                'currency'=> 'Latvian lats',
                'symbol'=> '&#8364;'),
            
                array('ISO-4217'=> 'LBP',
                'country'=> 'Lebanon',
                'currency'=> 'Lebanese pound',
                'symbol'=> '&#76;&#163;'),
            
                array('ISO-4217'=> 'LRD',
                'country'=> 'Liberia',
                'currency'=> 'Liberian dollar',
                'symbol'=> '&#76;&#68;&#36;'),
            
                    array('ISO-4217'=> 'LTL',
                'country'=> 'Lithuania',
                'currency'=> 'Lithuanian litas',
                'symbol'=> '&#8364;'),
            
            array('ISO-4217'=> 'MKD',
                'country'=> 'North Macedonia',
                'currency'=> 'Macedonian denar',
                'symbol'=> '&#1076;&#1077;&#1085;'),
            
            array('ISO-4217'=> 'MYR',
                'country'=> 'Malaysia',
                'currency'=> 'Malaysian ringgit',
                'symbol'=> '&#82;&#77;'),
            
            array('ISO-4217'=> 'MUR',
                'country'=> 'Mauritius',
                'currency'=> 'Mauritian rupee',
                'symbol'=> '&#82;&#115;'),
            
            array('ISO-4217'=> 'MXN',
                'country'=> 'Mexico',
                'currency'=> 'Mexican peso',
                'symbol'=> '&#77;&#101;&#120;&#36;'),
            
                array('ISO-4217'=> 'MNT',
                'country'=> 'Mongolia',
                'currency'=> 'Mongolian tögrög',
                'symbol'=> '&#8366;'),
            
            
                array('ISO-4217'=> 'MZN',
                'country'=> 'Mozambique',
                'currency'=> 'Mozambican metical',
                'symbol'=> '&#77;&#84;'),
            
                array('ISO-4217'=> 'NAD',
                'country'=> 'Namibia',
                'currency'=> 'Namibian dollar',
                'symbol'=> '&#78;&#36;'),
            
                array('ISO-4217'=> 'NPR',
                'country'=> 'Federal Democratic Republic of Nepal',
                'currency'=> 'Nepalese rupee',
                'symbol'=> '&#82;&#115;&#46;'),
            
                array('ISO-4217'=> 'ANG',
                'country'=> 'Curaçao and Sint Maarten',
                'currency'=> 'Netherlands Antillean guilder',
                'symbol'=> '&#402;'),
            
                array('ISO-4217'=> 'NZD',
                'country'=> 'New Zealand, the Cook Islands, Niue, the Ross Dependency, Tokelau, the Pitcairn Islands',
                'currency'=> 'New Zealand dollar',
                'symbol'=> '&#36;'),
            
            
            array('ISO-4217'=> 'NIO',
                'country'=> 'Nicaragua',
                'currency'=> 'Nicaraguan córdoba',
                'symbol'=> '&#67;&#36;'),
            
            array('ISO-4217'=> 'NGN',
                'country'=> 'Nigeria',
                'currency'=> 'Nigerian naira',
                'symbol'=> '&#8358;'),
            
                array('ISO-4217'=> 'NOK',
                'country'=> 'Norway and its dependent territories',
                'currency'=> 'Norwegian krone',
                'symbol'=> '&#107;&#114;'),
            
                array('ISO-4217'=> 'OMR',
                'country'=> 'Oman',
                'currency'=> 'Omani rial',
                'symbol'=> '&#65020;'),
            
                array('ISO-4217'=> 'PKR',
                'country'=> 'Pakistan',
                'currency'=> 'Pakistani rupee',
                'symbol'=> '&#82;&#115;'),
            
                array('ISO-4217'=> 'PAB',
                'country'=> 'Panama',
                'currency'=> 'Panamanian balboa',
                'symbol'=> '&#66;&#47;&#46;'),
            
                array('ISO-4217'=> 'PYG',
                'country'=> 'Paraguay',
                'currency'=> 'Paraguayan Guaraní',
                'symbol'=> '&#8370;'),
            
            array('ISO-4217'=> 'PEN',
                'country'=> 'Peru',
                'currency'=> 'Sol',
                'symbol'=> '&#83;&#47;&#46;'),
            
            array('ISO-4217'=> 'PHP',
                'country'=> 'Philippines',
                'currency'=> 'Philippine peso',
                'symbol'=> '&#8369;'),
            
                array('ISO-4217'=> 'PLN',
                'country'=> 'Poland',
                'currency'=> 'Polish złoty',
                'symbol'=> '&#122;&#322;'),
            
                array('ISO-4217'=> 'QAR',
                'country'=> 'State of Qatar',
                'currency'=> 'Qatari Riyal',
                'symbol'=> '&#65020;'),
            
                array('ISO-4217'=> 'RON',
                'country'=> 'Romania',
                'currency'=> 'Romanian leu (Leu românesc)',
                'symbol'=> '&#76;'),
            
                array('ISO-4217'=> 'RUB',
                'country'=> 'Russian Federation, Abkhazia and South Ossetia, Donetsk and Luhansk',
                'currency'=> 'Russian ruble',
                'symbol'=> '&#8381;'),
            
            
            array('ISO-4217'=> 'SHP',
                'country'=> 'Saint Helena, Ascension and Tristan da Cunha',
                'currency'=> 'Saint Helena pound',
                'symbol'=> '&#163;'),
            
                array('ISO-4217'=> 'SAR',
                'country'=> 'Saudi Arabia',
                'currency'=> 'Saudi riyal',
                'symbol'=> '&#65020;'),
            
                array('ISO-4217'=> 'RSD',
                'country'=> 'Serbia',
                'currency'=> 'Serbian dinar',
                'symbol'=> '&#100;&#105;&#110;'),
            
                array('ISO-4217'=> 'SCR',
                'country'=> 'Seychelles',
                'currency'=> 'Seychellois rupee',
                'symbol'=> '&#82;&#115;'),
            
            array('ISO-4217'=> 'SGD',
                'country'=> 'Singapore',
                'currency'=> 'Singapore dollar',
                'symbol'=> '&#83;&#36;'),
            
                array('ISO-4217'=> 'SBD',
                'country'=> 'Solomon Islands',
                'currency'=> 'Solomon Islands dollar',
                'symbol'=> '&#83;&#73;&#36;'),
            
                array('ISO-4217'=> 'SOS',
                'country'=> 'Somalia',
                'currency'=> 'Somali shilling',
                'symbol'=> '&#83;&#104;&#46;&#83;&#111;'),
            
                array('ISO-4217'=> 'ZAR',
                'country'=> 'South Africa',
                'currency'=> 'South African rand',
                'symbol'=> '&#82;'),
            
                array('ISO-4217'=> 'LKR',
                'country'=> 'Sri Lanka',
                'currency'=> 'Sri Lankan rupee',
                'symbol'=> '&#82;&#115;'),
            
            
                array('ISO-4217'=> 'SEK',
                'country'=> 'Sweden',
                'currency'=> 'Swedish krona',
                'symbol'=> '&#107;&#114;'),
            
            
                array('ISO-4217'=> 'CHF',
                'country'=> 'Switzerland',
                'currency'=> 'Swiss franc',
                'symbol'=> '&#67;&#72;&#102;'),
            
            array('ISO-4217'=> 'SRD',
                'country'=> 'Suricurrency',
                'currency'=> 'Suricurrency Dollar',
                'symbol'=> '&#83;&#114;&#36;'),
            
                array('ISO-4217'=> 'SYP',
                'country'=> 'Syria',
                'currency'=> 'Syrian pound',
                'symbol'=> '&#163;&#83;'),
            
                array('ISO-4217'=> 'TWD',
                'country'=> 'Taiwan',
                'currency'=> 'New Taiwan dollar',
                'symbol'=> '&#78;&#84;&#36;'),
            
            
                array('ISO-4217'=> 'THB',
                'country'=> 'Thailand',
                'currency'=> 'Thai baht',
                'symbol'=> '&#3647;'),
            
            
                array('ISO-4217'=> 'TTD',
                'country'=> 'Trinidad and Tobago',
                'currency'=> 'Trinidad and Tobago dollar',
                'symbol'=> '&#84;&#84;&#36;'),
            
            
            array('ISO-4217'=> 'TRY',
                'country'=> 'Turkey, Turkish Republic of Northern Cyprus',
                'currency'=> 'Turkey Lira',
                'symbol'=> '&#8378;'),
            
            array('ISO-4217'=> 'TVD',
                'country'=> 'Tuvalu',
                'currency'=> 'Tuvaluan dollar',
                'symbol'=> '&#84;&#86;&#36;'),
            
            array('ISO-4217'=> 'UAH',
                'country'=> 'Ukraine',
                'currency'=> 'Ukrainian hryvnia',
                'symbol'=> '&#8372;'),
            
            
            array('ISO-4217'=> 'GBP',
                'country'=> 'United Kingdom, Jersey, Guernsey, the Isle of Man, Gibraltar, South Georgia and the South Sandwich Islands, the British Antarctic Territory, and Tristan da Cunha',
                'currency'=> 'Pound sterling',
                'symbol'=> '&#163;'),
            
            
            array('ISO-4217'=> 'UGX',
                'country'=> 'Uganda',
                'currency'=> 'Ugandan shilling',
                'symbol'=> '&#85;&#83;&#104;'),
            
            
            array('ISO-4217'=> 'USD',
                'country'=> 'United States',
                'currency'=> 'United States dollar',
                'symbol'=> '&#36;'),
            
            array('ISO-4217'=> 'UYU',
                'country'=> 'Uruguayan',
                'currency'=> 'Peso Uruguayolar',
                'symbol'=> '&#36;&#85;'),
            
                array('ISO-4217'=> 'UZS',
                'country'=> 'Uzbekistan',
                'currency'=> 'Uzbekistani soʻm',
                'symbol'=> '&#1083;&#1074;'),
            
            
                array('ISO-4217'=> 'VEF',
                'country'=> 'Venezuela',
                'currency'=> 'Venezuelan bolívar',
                'symbol'=> '&#66;&#115;'),
            
            
                array('ISO-4217'=> 'VND',
                'country'=> 'Vietnam',
                'currency'=> 'Vietcurrencyse dong (Đồng)',
                'symbol'=> '&#8363;'),
            
                array('ISO-4217'=> 'VND',
                'country'=> 'Yemen',
                'currency'=> 'Yemeni rial',
                'symbol'=> '&#65020;'),
            
            array('ISO-4217'=> 'ZWD',
                'country'=> 'Zimbabwe',
                'currency'=> 'Zimbabwean dollar',
                'symbol'=> '&#90;&#36;'),
        );
        

		DB::table('currencies')->insert($currencies);

    }
}
