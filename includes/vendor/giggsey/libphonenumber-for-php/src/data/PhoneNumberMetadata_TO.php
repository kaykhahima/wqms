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
    'NationalNumberPattern' => '(?:0800|(?:[5-8]\\d\\d|999)\\d)\\d{3}|[2-8]\\d{4}',
    'PossibleLength' =>
    array (
      0 => 5,
      1 => 7,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'fixedLine' =>
  array (
    'NationalNumberPattern' => '(?:2\\d|3[0-8]|4[0-4]|50|6[09]|7[0-24-69]|8[05])\\d{3}',
    'ExampleNumber' => '20123',
    'PossibleLength' =>
    array (
      0 => 5,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'mobile' =>
  array (
    'NationalNumberPattern' => '(?:6(?:[09]\\d|3[02]|8[15-9])|(?:7\\d|8[46-9])\\d|999)\\d{4}',
    'ExampleNumber' => '7715123',
    'PossibleLength' =>
    array (
      0 => 7,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'tollFree' =>
  array (
    'NationalNumberPattern' => '0800\\d{3}',
    'ExampleNumber' => '0800222',
    'PossibleLength' =>
    array (
      0 => 7,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'premiumRate' =>
  array (
    'NationalNumberPattern' => '55[04]\\d{4}',
    'ExampleNumber' => '5501234',
    'PossibleLength' =>
    array (
      0 => 7,
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
  'id' => 'TO',
  'countryCode' => 676,
  'internationalPrefix' => '00',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array (
    0 =>
    array (
      'pattern' => '(\\d{2})(\\d{3})',
      'format' => '$1-$2',
      'leadingDigitsPatterns' =>
      array (
        0 => '[2-4]|50|6[09]|7[0-24-69]|8[05]',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    1 =>
    array (
      'pattern' => '(\\d{4})(\\d{3})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array (
        0 => '0',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    2 =>
    array (
      'pattern' => '(\\d{3})(\\d{4})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array (
        0 => '[5-9]',
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
