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
    'NationalNumberPattern' => '[129]\\d{2,5}',
    'PossibleLength' =>
    array (
      0 => 3,
      1 => 4,
      2 => 5,
      3 => 6,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'tollFree' =>
  array (
    'NationalNumberPattern' => '1(?:1[0-68]|2[0-59]|9[0-579])|911',
    'ExampleNumber' => '110',
    'PossibleLength' =>
    array (
      0 => 3,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'premiumRate' =>
  array (
    'PossibleLength' =>
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'emergency' =>
  array (
    'NationalNumberPattern' => '1(?:1[025]|25)|911',
    'ExampleNumber' => '110',
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
    'NationalNumberPattern' => '1(?:1[0-68]|2[0-59]|3[346-8]|4(?:[0147]|[289]0)|5(?:0[14]|1[02479]|2[0-3]|39|[49]0|65)|6(?:[16]6|[27]|90)|8(?:03|1[18]|22|3[37]|4[28]|88|99)|9[0-579])|20(?:[09]0|1(?:[038]|1[079]|26|9[69])|2[01])|9(?:11|9(?:0009|90))',
    'ExampleNumber' => '110',
    'PossibleLength' =>
    array (
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'standardRate' =>
  array (
    'NationalNumberPattern' => '1(?:5[0-469]|8[0-489])\\d',
    'ExampleNumber' => '1500',
    'PossibleLength' =>
    array (
      0 => 4,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'carrierSpecific' =>
  array (
    'NationalNumberPattern' => '(?:1(?:5[0-469]|8[0-489])|99(?:0\\d\\d|9))\\d',
    'ExampleNumber' => '1500',
    'PossibleLength' =>
    array (
      0 => 4,
      1 => 6,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'smsServices' =>
  array (
    'NationalNumberPattern' => '990\\d{3}',
    'ExampleNumber' => '990000',
    'PossibleLength' =>
    array (
      0 => 6,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'id' => 'IR',
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
