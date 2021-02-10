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
    'NationalNumberPattern' => '(?:0800\\d|[2-8])\\d{6}',
    'PossibleLength' =>
    array (
      0 => 7,
      1 => 11,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'fixedLine' =>
  array (
    'NationalNumberPattern' => '(?:236|732)\\d{4}|[2-578][02]\\d{5}',
    'ExampleNumber' => '2221234',
    'PossibleLength' =>
    array (
      0 => 7,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'mobile' =>
  array (
    'NationalNumberPattern' => '6[0-35-7]\\d{5}',
    'ExampleNumber' => '6221234',
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
    'NationalNumberPattern' => '0800\\d{7}',
    'ExampleNumber' => '08001234123',
    'PossibleLength' =>
    array (
      0 => 11,
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
  'id' => 'BZ',
  'countryCode' => 501,
  'internationalPrefix' => '00',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array (
    0 =>
    array (
      'pattern' => '(\\d{3})(\\d{4})',
      'format' => '$1-$2',
      'leadingDigitsPatterns' =>
      array (
        0 => '[2-8]',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    1 =>
    array (
      'pattern' => '(\\d)(\\d{3})(\\d{4})(\\d{3})',
      'format' => '$1-$2-$3-$4',
      'leadingDigitsPatterns' =>
      array (
        0 => '0',
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
