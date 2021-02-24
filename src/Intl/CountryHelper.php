<?php

namespace Ten24\Component\Intl;

/**
 * Class CountryHelper
 *
 * @package Ten24\Component\Intl
 */
class CountryHelper
{
    /**
     * Get Canadian provinces, keyed by abbreviation
     *
     * @return array
     */
    static public function getCanadianProvinces(): array
    {
        return [
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

    /**
     * Get states, keyed by abbreviation
     *
     * @return array
     */
    static public function getUSAStates(): array
    {
        return [
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
    }

    /**
     * Return Canadian province abbreviations
     *
     * @return array
     */
    static public function getCanadianProvinceAbbreviations(): array
    {
        return array_keys(static::getCanadianProvinces());
    }

    /**
     * Return USA state abbreviations
     *
     * @return array
     */
    static public function getUSAStateAbbreviations(): array
    {
        return array_keys(static::getUSAStates());
    }

    /**
     * Return province names
     *
     * @return array
     */
    static public function getCanadianProvinceNames(): array
    {
        return array_values(static::getCanadianProvinces());
    }

    /**
     * Return state names
     *
     * @return array
     */
    static public function getUSAStateNames(): array
    {
        return array_values(static::getUSAStates());
    }
}