<?php
/**
 * This file has been @generated by a phing task by {@link BuildMetadataPHPFromXml}.
 * See [README.md](README.md#generating-data) for more information.
 *
 * Pull requests changing data in these files will not be accepted. See the
 * [FAQ in the README](README.md#problems-with-invalid-numbers] on how to make
 * metadata changes.
 *
 * Do not modify this file directly!
 */


return array (
  'generalDesc' =>
  array (
    'NationalNumberPattern' => '[0-27]\\d{2,7}',
    'PossibleLength' =>
    array (
      0 => 3,
      1 => 4,
      2 => 5,
      3 => 6,
      4 => 7,
      5 => 8,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'tollFree' =>
  array (
    'NationalNumberPattern' => '000|1(?:06|12|258885|55\\d)|733',
    'ExampleNumber' => '000',
    'PossibleLength' =>
    array (
      0 => 3,
      1 => 4,
      2 => 7,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'premiumRate' =>
  array (
    'NationalNumberPattern' => '1(?:2(?:34|456)|9\\d{4,6})',
    'ExampleNumber' => '1234',
    'PossibleLength' =>
    array (
      0 => 4,
      1 => 5,
      2 => 6,
      3 => 7,
      4 => 8,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'emergency' =>
  array (
    'NationalNumberPattern' => '000|1(?:06|12)',
    'ExampleNumber' => '000',
    'PossibleLength' =>
    array (
      0 => 3,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'shortCode' =>
  array (
    'NationalNumberPattern' => '000|1(?:06|1(?:00|2|9[46])|2(?:014[1-3]|[23]\\d|(?:4|5\\d)\\d{2,3}|68[689]|72(?:20|3\\d\\d)|8(?:[013-9]\\d|2))|555|9\\d{4,6})|225|7(?:33|67)',
    'ExampleNumber' => '000',
    'PossibleLength' =>
    array (
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'standardRate' =>
  array (
    'NationalNumberPattern' => '1(?:1[09]\\d|24733)|225|767',
    'ExampleNumber' => '225',
    'PossibleLength' =>
    array (
      0 => 3,
      1 => 4,
      2 => 6,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'carrierSpecific' =>
  array (
    'NationalNumberPattern' => '1(?:258885|55\\d)',
    'ExampleNumber' => '1550',
    'PossibleLength' =>
    array (
      0 => 4,
      1 => 7,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'smsServices' =>
  array (
    'NationalNumberPattern' => '19\\d{4,6}',
    'ExampleNumber' => '190000',
    'PossibleLength' =>
    array (
      0 => 6,
      1 => 7,
      2 => 8,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'id' => 'AU',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array (
  ),
  'intlNumberFormat' =>
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
);
