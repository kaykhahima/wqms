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
    'NationalNumberPattern' => '(?:[279]\\d|[58]0)\\d{6}',
    'PossibleLength' =>
    array (
      0 => 8,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'fixedLine' =>
  array (
    'NationalNumberPattern' => '2[2-6]\\d{6}',
    'ExampleNumber' => '22345678',
    'PossibleLength' =>
    array (
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'mobile' =>
  array (
    'NationalNumberPattern' => '9[4-79]\\d{6}',
    'ExampleNumber' => '96123456',
    'PossibleLength' =>
    array (
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'tollFree' =>
  array (
    'NationalNumberPattern' => '800\\d{5}',
    'ExampleNumber' => '80001234',
    'PossibleLength' =>
    array (
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'premiumRate' =>
  array (
    'NationalNumberPattern' => '90[09]\\d{5}',
    'ExampleNumber' => '90012345',
    'PossibleLength' =>
    array (
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'sharedCost' =>
  array (
    'NationalNumberPattern' => '80[1-9]\\d{5}',
    'ExampleNumber' => '80112345',
    'PossibleLength' =>
    array (
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'personalNumber' =>
  array (
    'NationalNumberPattern' => '700\\d{5}',
    'ExampleNumber' => '70012345',
    'PossibleLength' =>
    array (
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'voip' =>
  array (
    'PossibleLength' =>
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'pager' =>
  array (
    'PossibleLength' =>
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'uan' =>
  array (
    'NationalNumberPattern' => '(?:50|77)\\d{6}',
    'ExampleNumber' => '77123456',
    'PossibleLength' =>
    array (
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'voicemail' =>
  array (
    'PossibleLength' =>
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'noInternationalDialling' =>
  array (
    'PossibleLength' =>
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'id' => 'CY',
  'countryCode' => 357,
  'internationalPrefix' => '00',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array (
    0 =>
    array (
      'pattern' => '(\\d{2})(\\d{6})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array (
        0 => '[257-9]',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
  ),
  'intlNumberFormat' =>
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => true,
);
