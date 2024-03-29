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
    'NationalNumberPattern' => '1800\\d{7,9}|(?:2|[89]\\d{4})\\d{5}|[2-8]\\d{8}|[28]\\d{7}',
    'PossibleLength' =>
    array (
      0 => 6,
      1 => 8,
      2 => 9,
      3 => 10,
      4 => 11,
      5 => 12,
      6 => 13,
    ),
    'PossibleLengthLocalOnly' =>
    array (
      0 => 4,
      1 => 5,
      2 => 7,
    ),
  ),
  'fixedLine' =>
  array (
    'NationalNumberPattern' => '(?:(?:2[3-8]|3[2-68]|4[2-9]|5[2-6]|6[2-58]|7[24578])\\d{3}|88(?:22\\d\\d|42))\\d{4}|2\\d{5}(?:\\d{2})?|8[2-8]\\d{7}',
    'ExampleNumber' => '21234567',
    'PossibleLength' =>
    array (
      0 => 6,
      1 => 8,
      2 => 9,
      3 => 10,
    ),
    'PossibleLengthLocalOnly' =>
    array (
      0 => 4,
      1 => 5,
      2 => 7,
    ),
  ),
  'mobile' =>
  array (
    'NationalNumberPattern' => '(?:81[37]|9(?:0[5-9]|1[0-24-9]|2[0-35-9]|[35]\\d|4[235-9]|6[0-35-8]|7[1-9]|8[189]|9[4-9]))\\d{7}',
    'ExampleNumber' => '9051234567',
    'PossibleLength' =>
    array (
      0 => 10,
    ),
    'PossibleLengthLocalOnly' =>
    array (
    ),
  ),
  'tollFree' =>
  array (
    'NationalNumberPattern' => '1800\\d{7,9}',
    'ExampleNumber' => '180012345678',
    'PossibleLength' =>
    array (
      0 => 11,
      1 => 12,
      2 => 13,
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
  'id' => 'PH',
  'countryCode' => 63,
  'internationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array (
    0 =>
    array (
      'pattern' => '(\\d)(\\d{5})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array (
        0 => '2',
      ),
      'nationalPrefixFormattingRule' => '(0$1)',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    1 =>
    array (
      'pattern' => '(\\d)(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      array (
        0 => '2',
      ),
      'nationalPrefixFormattingRule' => '(0$1)',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    2 =>
    array (
      'pattern' => '(\\d{4})(\\d{4,6})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array (
        0 => '3(?:23|39|46)|4(?:2[3-6]|[35]9|4[26]|76)|544|88[245]|(?:52|64|86)2',
        1 => '3(?:230|397|461)|4(?:2(?:35|[46]4|51)|396|4(?:22|63)|59[347]|76[15])|5(?:221|446)|642[23]|8(?:622|8(?:[24]2|5[13]))',
      ),
      'nationalPrefixFormattingRule' => '(0$1)',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    3 =>
    array (
      'pattern' => '(\\d{5})(\\d{4})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array (
        0 => '346|4(?:27|9[35])|883',
        1 => '3469|4(?:279|9(?:30|56))|8834',
      ),
      'nationalPrefixFormattingRule' => '(0$1)',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    4 =>
    array (
      'pattern' => '(\\d)(\\d{4})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      array (
        0 => '2',
      ),
      'nationalPrefixFormattingRule' => '(0$1)',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    5 =>
    array (
      'pattern' => '(\\d{2})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      array (
        0 => '[3-7]|8[2-8]',
      ),
      'nationalPrefixFormattingRule' => '(0$1)',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    6 =>
    array (
      'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      array (
        0 => '[89]',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    7 =>
    array (
      'pattern' => '(\\d{4})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      array (
        0 => '1',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    8 =>
    array (
      'pattern' => '(\\d{4})(\\d{1,2})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' =>
      array (
        0 => '1',
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
