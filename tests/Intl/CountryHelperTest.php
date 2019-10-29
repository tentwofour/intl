<?php

namespace Ten24\Tests\Component\Intl;

use PHPUnit\Framework\TestCase;
use Ten24\Component\Intl\CountryHelper;

/**
 * Class CountryHelperTest
 *
 * @package Ten24\Tests\Component\Intl
 */
class CountryHelperTest extends TestCase
{
    private static $provinces;
    private static $states;

    public function setUp()
    {
        static::$states = [
            'AL' => 'Alabama',
            'AK' => 'Alaska',
            'AZ' => 'Arizona',
            'AR' => 'Arkansas',
            'CA' => 'California',
            'CO' => 'Colorado',
            'CT' => 'Connecticut',
            'DE' => 'Delaware',
            'FL' => 'Florida',
            'GA' => 'Georgia',
            'HI' => 'Hawaii',
            'ID' => 'Idaho',
            'IL' => 'Illinois',
            'IN' => 'Indiana',
            'IA' => 'Iowa',
            'KS' => 'Kansas',
            'KY' => 'Kentucky',
            'LA' => 'Louisiana',
            'ME' => 'Maine',
            'MD' => 'Maryland',
            'MA' => 'Massachusetts',
            'MI' => 'Michigan',
            'MN' => 'Minnesota',
            'MS' => 'Mississippi',
            'MO' => 'Missouri',
            'MT' => 'Montana',
            'NE' => 'Nebraska',
            'NV' => 'Nevada',
            'NH' => 'New Hampshire',
            'NJ' => 'New Jersey',
            'NM' => 'New Mexico',
            'NY' => 'New York',
            'NC' => 'North Carolina',
            'ND' => 'North Dakota',
            'OH' => 'Ohio',
            'OK' => 'Oklahoma',
            'OR' => 'Oregon',
            'PA' => 'Pennsylvania',
            'RI' => 'Rhode Island',
            'SC' => 'South Carolina',
            'SD' => 'South Dakota',
            'TN' => 'Tennessee',
            'TX' => 'Texas',
            'UT' => 'Utah',
            'VT' => 'Vermont',
            'VA' => 'Virginia',
            'WA' => 'Washington',
            'WV' => 'West Virginia',
            'WI' => 'Wisconsin',
            'WY' => 'Wyoming'
        ];

        static::$provinces = [
            'AB' => 'Alberta',
            'BC' => 'British Columbia',
            'MB' => 'Manitoba',
            'NB' => 'New Brunswick',
            'NL' => 'Newfoundland and Labrador',
            'NS' => 'Nova Scotia',
            'NU' => 'Nunavut',
            'NT' => 'Northwest Territories',
            'ON' => 'Ontario',
            'PE' => 'Prince Edward Island',
            'QC' => 'Quebec',
            'SK' => 'Saskatchewan',
            'YT' => 'Yukon'
        ];
    }

    public function testGetProvinces()
    {
        $this->assertEquals(static::$provinces, CountryHelper::getCanadianProvinces());
    }

    public function testGetProvinceAbbreviations()
    {
        $this->assertEquals(array_keys(static::$provinces), CountryHelper::getCanadianProvinceAbbreviations());
    }

    public function testGetProvinceNames()
    {
        $this->assertEquals(array_values(static::$provinces), CountryHelper::getCanadianProvinceNames());
    }

    public function testGetStates()
    {
        $this->assertEquals(static::$states, CountryHelper::getUSAStates());
    }

    public function testGetStateAbbreviations()
    {
        $this->assertEquals(array_keys(static::$states), CountryHelper::getUSAStateAbbreviations());
    }

    public function testGetStateNames()
    {
        $this->assertEquals(array_values(static::$states), CountryHelper::getUSAStateNames());
    }
}