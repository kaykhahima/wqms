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
    'NationalNumberPattern' => '[069]\\d\\d(?:\\d{2})?',
    'PossibleLength' =>
    array (
      0 => 3,
      1 => 5,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'tollFree' =>
  array (
    'NationalNumberPattern' => '(?:01|99)9',
    'ExampleNumber' => '019',
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
    'NationalNumberPattern' => '(?:01|99)9',
    'ExampleNumber' => '019',
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
    'NationalNumberPattern' => '(?:01|99)9|60400',
    'ExampleNumber' => '019',
    'PossibleLength' =>
    array (
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'standardRate' =>
  array (
    'PossibleLength' =>
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'carrierSpecific' =>
  array (
    'NationalNumberPattern' => '604\\d\\d',
    'ExampleNumber' => '60400',
    'PossibleLength' =>
    array (
      0 => 5,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'smsServices' =>
  array (
    'NationalNumberPattern' => '604\\d\\d',
    'ExampleNumber' => '60400',
    'PossibleLength' =>
    array (
      0 => 5,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'id' => 'SL',
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
