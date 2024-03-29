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
    'NationalNumberPattern' => '6\\d{8}|(?:[35689]\\d|49|70)\\d{6}',
    'PossibleLength' =>
    array (
      0 => 8,
      1 => 9,
    ),
    'PossibleLengthLocalOnly' =>
    array (
      0 => 6,
    ),
  ),
  'fixedLine' =>
  array (
    'NationalNumberPattern' => '(?:3(?:[05-79][2-9]|1[4579]|[23][24-9]|4[2-4689]|8[2457-9])|49[2-579]|5(?:0[2-49]|[13][2-9]|[268][2-4679]|4[4689]|5[2-79]|7[2-69]|9[2-4689]))\\d{5}',
    'ExampleNumber' => '30212345',
    'PossibleLength' =>
    array (
      0 => 8,
    ),
    'PossibleLengthLocalOnly' =>
    array (
      0 => 6,
    ),
  ),
  'mobile' =>
  array (
    'NationalNumberPattern' => '6040\\d{5}|6(?:03|[1-356]|44|7\\d)\\d{6}',
    'ExampleNumber' => '61123456',
    'PossibleLength' =>
    array (
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'tollFree' =>
  array (
    'NationalNumberPattern' => '8[08]\\d{6}',
    'ExampleNumber' => '80123456',
    'PossibleLength' =>
    array (
      0 => 8,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'premiumRate' =>
  array (
    'NationalNumberPattern' => '9[0246]\\d{6}',
    'ExampleNumber' => '90123456',
    'PossibleLength' =>
    array (
      0 => 8,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'sharedCost' =>
  array (
    'NationalNumberPattern' => '8[12]\\d{6}',
    'ExampleNumber' => '82123456',
    'PossibleLength' =>
    array (
      0 => 8,
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
    'NationalNumberPattern' => '703[235]0\\d{3}|70(?:2[0-5]|3[0146]|[56]0)\\d{4}',
    'ExampleNumber' => '70341234',
    'PossibleLength' =>
    array (
      0 => 8,
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
  'id' => 'BA',
  'countryCode' => 387,
  'internationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array (
    0 =>
    array (
      'pattern' => '(\\d{3})(\\d{3})',
      'format' => '$1-$2',
      'leadingDigitsPatterns' =>
      array (
        0 => '[2-9]',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    1 =>
    array (
      'pattern' => '(\\d{2})(\\d{3})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      array (
        0 => '6[1-3]|[7-9]',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    2 =>
    array (
      'pattern' => '(\\d{2})(\\d{3})(\\d{3})',
      'format' => '$1 $2-$3',
      'leadingDigitsPatterns' =>
      array (
        0 => '[3-5]|6[56]',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    3 =>
    array (
      'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d{3})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' =>
      array (
        0 => '6',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
  ),
  'intlNumberFormat' =>
  array (
    0 =>
    array (
      'pattern' => '(\\d{2})(\\d{3})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      array (
        0 => '6[1-3]|[7-9]',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    1 =>
    array (
      'pattern' => '(\\d{2})(\\d{3})(\\d{3})',
      'format' => '$1 $2-$3',
      'leadingDigitsPatterns' =>
      array (
        0 => '[3-5]|6[56]',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    2 =>
    array (
      'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d{3})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' =>
      array (
        0 => '6',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => true,
);
