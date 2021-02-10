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
    'NationalNumberPattern' => '[13]\\d{5}',
    'PossibleLength' =>
    array (
      0 => 6,
    ),
    'PossibleLengthLocalOnly' =>
    array (
      0 => 5,
    ),
  ),
  'fixedLine' =>
  array (
    'NationalNumberPattern' => '(?:1(?:06|17|28|39)|3[0-2]\\d)\\d{3}',
    'ExampleNumber' => '106609',
    'PossibleLength' =>
    array (
    ),
    'PossibleLengthLocalOnly' =>
    array (
      0 => 5,
    ),
  ),
  'mobile' =>
  array (
    'NationalNumberPattern' => '(?:14|3[58])\\d{4}',
    'ExampleNumber' => '381234',
    'PossibleLength' =>
    array (
    ),
    'PossibleLengthLocalOnly' =>
    array (
      0 => 5,
    ),
  ),
  'tollFree' =>
  array (
    'PossibleLength' =>
    array (
      0 => -1,
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
  'sharedCost' =>
  array (
    'PossibleLength' =>
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'personalNumber' =>
  array (
    'PossibleLength' =>
    array (
      0 => -1,
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
    'PossibleLength' =>
    array (
      0 => -1,
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
  'id' => 'NF',
  'countryCode' => 672,
  'internationalPrefix' => '00',
  'nationalPrefixForParsing' => '([0-258]\\d{4})$',
  'nationalPrefixTransformRule' => '3$1',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array (
    0 =>
    array (
      'pattern' => '(\\d{2})(\\d{4})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array (
        0 => '1[0-3]',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    1 =>
    array (
      'pattern' => '(\\d)(\\d{5})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array (
        0 => '[13]',
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
  'mobileNumberPortableRegion' => false,
);
