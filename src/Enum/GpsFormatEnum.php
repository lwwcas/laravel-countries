<?php

namespace Lwwcas\LaravelCountries\Enum;

enum GpsFormatEnum: string
{
    case COMPACT_DEC_MM = 'compact_dec_mm';
    case COMPACT_DD_MM = 'compact_dd_mm';
    case COMPACT_MM = 'compact_mm';
    case COMPACT_MM_NS = 'compact_mm_ns';
    case DEC_DEG = 'dec_deg';
    case DEC_DEG_MICRO = 'dec_deg_micro';
    case DEC_DD_MM = 'dec_dd_mm';
    case DEC_MIN = 'dec_min';
    case DECIMAL_DDDD = 'decimal_dddd';
    case DECIMAL_DEG_DD = 'decimal_deg_dd';
    case DECIMAL_WITH_SIGNS = 'decimal_with_signs';
    case DEG_MIN_MMMMM = 'deg_min_mmmmm';
    case DEG_MIN_SEC = 'deg_min_sec';
    case DEG_MIN_SEC_ALT = 'deg_min_sec_alt';
    case DEG_MIN_SEC_COMPACT = 'deg_min_sec_compact';
    case DEG_MIN_SECS = 'deg_min_secs';
    case DDMMSS_NS_EW = 'ddmmss_ns_ew';
    case DDMMSS_NS_EW_ALT = 'ddmmss_ns_ew_alt';
    case DDMMSSSS = 'ddmmssss';
    case DD_MM_SS_NS_EW = 'dd_mm_ss_ns_ew';
    case DD_MM_SS_N_E = 'dd_mm_ss_n_e';
    case DD_MM_SS_SS_NS_EW = 'dd_mm_ss_ss_ns_ew';
    case DD_MM_SS_SS_N_E = 'dd_mm_ss_ss_n_e';
    case ISO_6709 = 'iso_6709';
    case NS_DD_MM = 'ns_dd_mm';

    public function format(): string
    {
        return match ($this) {
            GpsFormatEnum::COMPACT_DEC_MM => '[-] mmmm.mmmmm, [-] mmmm.mmmmm',
            GpsFormatEnum::COMPACT_DD_MM => 'dd mm\' ss" [N,S] ddd mm\' ss" [E,W]',
            GpsFormatEnum::COMPACT_MM => 'dd mm\' ss" [N,S] ddd mm\' ss" [E,W]',
            GpsFormatEnum::COMPACT_MM_NS => 'mmmm.mmmmm[N,S] mmmm.mmmmm[E,W]',
            GpsFormatEnum::DEC_DEG => '[-]dd.ddddd°,[-]ddd.ddddd° (Dec Degs)',
            GpsFormatEnum::DEC_DEG_MICRO => 'dd.ddddd[N,S]ddd.ddddd[E,W] (Dec Degs Micro)',
            GpsFormatEnum::DEC_DD_MM => 'dd.dddd[N,S] ddd.dddd[E,W]',
            GpsFormatEnum::DEC_MIN => 'ddmm.mmmm[N,S]dddmm.mmmm[E,W] (Dec Min)',
            GpsFormatEnum::DECIMAL_DDDD => '[-]dd.dddd [-]ddd.dddd',
            GpsFormatEnum::DECIMAL_DEG_DD => 'dd.dddd[N,S] ddd.dddd[E,W]',
            GpsFormatEnum::DECIMAL_WITH_SIGNS => '[-]dd mm ss.ssss, [-]ddd mm ss.ssss',
            GpsFormatEnum::DEG_MIN_MMMMM => '[-]dd° mm.mmmmm [-]ddd° mm.mmmmm',
            GpsFormatEnum::DEG_MIN_SEC => 'dd°mm\'ss.sss"[N,S], ddd°mm\'ss.sss"[E,W] (Deg Min Secs)',
            GpsFormatEnum::DEG_MIN_SEC_ALT => 'dd°mm\'ss"[N,S] ddd°mm\'ss"[E,W]',
            GpsFormatEnum::DEG_MIN_SEC_COMPACT => 'dd°mm\'ss"[N,S], ddd°mm\'ss"[E,W] (Deg Min Secs)',
            GpsFormatEnum::DEG_MIN_SECS => 'ddmmss.sss[N,S]dddmmss.sss[E,W] (Deg Mins Secs)',
            GpsFormatEnum::DDMMSS_NS_EW => '[N,S]dd°mm\'ss.ssss", [E,W]ddd°mm\'ss.ssss"',
            GpsFormatEnum::DDMMSS_NS_EW_ALT => 'dd°mm\'ss.ssss"[N,S], ddd°mm\'ss.ssss"[E,W]',
            GpsFormatEnum::DDMMSSSS => '[-]dd°mm\'ss" [-]ddd°mm\'ss"',
            GpsFormatEnum::DD_MM_SS_NS_EW => 'dd:mm:ss[N,S],ddd:mm:ss[E,W]',
            GpsFormatEnum::DD_MM_SS_N_E => 'dd:mm:ss[N,S],ddd:mm:ss[E,W]',
            GpsFormatEnum::DD_MM_SS_SS_NS_EW => 'dd:mm:ss.ss[N,S] ddd:mm:ss.ss[E,W]',
            GpsFormatEnum::DD_MM_SS_SS_N_E => 'dd:mm:ss.ss[N,S] ddd:mm:ss.ss[E,W]',
            GpsFormatEnum::ISO_6709 => 'ISO 6709: [-]ddmmss.ssss, [-]dddmmss.ssss',
            GpsFormatEnum::NS_DD_MM => '[N,S] dd mm.mmm [E,W] ddd mm.mmm',
        };
    }
}

// $gps = [
//     [
//         'key' => 'ddmmss_ns_ew',
//         'format' => '[N,S]dd°mm\'ss.ssss", [E,W]dd°mm\'ss.ssss"',
//         'coordinates' => null,
//     ],
//     [
//         'key' => 'ddmmss_ns_ew',
//         'format' => '[N,S]dd°mm\'ss.ssss", [E,W]dd°mm\'ss.ssss"',
//         'coordinates' => 'N18°13\'14.16", W63°04\'07.00"',
//     ],
//     [
//         'key' => 'ddmmss_ns_ew_alt',
//         'format' => 'dd°mm\'ss.ssss"[N,S], dd°mm\'ss.ssss"[E,W]',
//         'coordinates' => '18°13\'14.16"N, 63°04\'07.00"W',
//     ],
//     [
//         'key' => 'decimal_with_signs',
//         'format' => '[-]dd mm ss.ssss, [-]dd mm ss.ssss',
//         'coordinates' => '18 13 14.16, -63 04 07.00',
//     ],
//     [
//         'key' => 'iso_6709',
//         'format' => 'ISO 6709: [-]ddmmss.ssss, [-]dddmmss.ssss',
//         'coordinates' => '181314.16, -0630407.00',
//     ],
//     [
//         'key' => 'decimal_dddd',
//         'format' => '[-]dd.dddd [-]dd.dddd',
//         'coordinates' => '18.2206 -63.0686',
//     ],
//     [
//         'key' => 'dec_deg',
//         'format' => '[-]dd.ddddd°,[-]dd.ddddd° (Dec Degs)',
//         'coordinates' => '18.22060°,-63.06860°',
//     ],
//     [
//         'key' => 'dec_deg_micro',
//         'format' => 'dd.ddddd[N,S]dd.ddddd[E,W] (Dec Degs Micro)',
//         'coordinates' => '18.2206000N63.0686000W',
//     ],
//     [
//         'key' => 'dec_min',
//         'format' => 'ddmm.mmmm[N,S]ddmm.mmmm[E,W] (Dec Min)',
//         'coordinates' => '1813.236N06304.116W',
//     ],
//     [
//         'key' => 'deg_min_sec',
//         'format' => 'dd°mm\'ss.sss"[N,S], dd°mm\'ss.sss"[E,W] (Deg Min Secs)',
//         'coordinates' => '18°13\'14.16"N, 63°04\'07.00"W',
//     ],
//     [
//         'key' => 'deg_min_secs',
//         'format' => 'ddmmss.sss[N,S]ddmmss.sss[E,W] (Deg Mins Secs)',
//         'coordinates' => '181314.16N0630407.00W',
//     ],
//     [
//         'key' => 'ns_dd_mm',
//         'format' => '[N,S] dd mm.mmm [E,W] dd mm.mmm',
//         'coordinates' => 'N 18 13.236 W 63 04.116',
//     ],
//     [
//         'key' => 'dd_mm_ss_ns_ew',
//         'format' => 'dd:mm:ss[N,S],dd:mm:ss[E,W]',
//         'coordinates' => '18:13:14N,63:04:07W',
//     ],
//     [
//         'key' => 'dd_mm_ss_ss_ns_ew',
//         'format' => 'dd:mm:ss.ss[N,S] dd:mm:ss.ss[E,W]',
//         'coordinates' => '18:13:14.16N 63:04:07.00W',
//     ],
//     [
//         'key' => 'dd_mm_ss_n_e',
//         'format' => 'dd°mm\'ss"[N,S] dd°mm\'ss"[E,W]',
//         'coordinates' => '18°13\'14"N 63°04\'07"W',
//     ],
//     [
//         'key' => 'deg_min_sec_alt',
//         'format' => '[-]dd°mm\'ss" [-]dd°mm\'ss"',
//         'coordinates' => '18°13\'14" -63°04\'07"',
//     ],
//     [
//         'key' => 'compact_dd_mm',
//         'format' => 'dd mm\' ss" [N,S] dd mm\' ss" [E,W]',
//         'coordinates' => '18d 13\' 14" N 63d 04\' 07" W',
//     ],
//     [
//         'key' => 'decimal_deg_dd',
//         'format' => 'dd.dddd[N,S] dd.dddd[E,W]',
//         'coordinates' => '18.2206N 63.0686W',
//     ],
//     [
//         'key' => 'deg_min_mmmmm',
//         'format' => '[-]dd° mm.mmmmm [-]dd° mm.mmmmm',
//         'coordinates' => '18° 13.236, -63° 04.116',
//     ],
//     [
//         'key' => 'compact_dec_mm',
//         'format' => '[-] mmmm.mmmmm, [-] mmmm.mmmmm',
//         'coordinates' => '1813.236, -6304.116',
//     ],
//     [
//         'key' => 'compact_mm_ns',
//         'format' => 'mmmm.mmmmm[N,S] mmmm.mmmmm[E,W]',
//         'coordinates' => '1813.236N, 6304.116W',
//     ],
//     [
//         'key' => 'dd_mm_ss_ns_ew',
//         'format' => 'dd:mm:ss[N,S],dd:mm:ss[E,W]',
//         'coordinates' => '41:19:39N,19:49:07E',
//     ],
//     [
//         'key' => 'dd_mm_ss_ss_ns_ew',
//         'format' => 'dd:mm:ss.ss[N,S] dd:mm:ss.ss[E,W]',
//         'coordinates' => '41:19:39.00N 19:49:07.32E',
//     ],
//     [
//         'key' => 'dd_mm_ss_n_e',
//         'format' => 'dd°mm\'ss"[N,S] dd°mm\'ss"[E,W]',
//         'coordinates' => '41°19\'39"N 19°49\'07"E',
//     ],
//     [
//         'key' => 'deg_min_sec_alt',
//         'format' => '[-]dd°mm\'ss" [-]dd°mm\'ss"',
//         'coordinates' => '41°19\'39" 19°49\'07"',
//     ],
//     [
//         'key' => 'compact_dd_mm',
//         'format' => 'dd mm\' ss" [N,S] dd mm\' ss" [E,W]',
//         'coordinates' => '41d 19\' 39" N 19d 49\' 07" E',
//     ],
//     [
//         'key' => 'decimal_deg_dd',
//         'format' => 'dd.dddd[N,S] dd.dddd[E,W]',
//         'coordinates' => '41.3275N 19.8187E',
//     ],
//     [
//         'key' => 'deg_min_mmmmm',
//         'format' => '[-]dd° mm.mmmmm [-]dd° mm.mmmmm',
//         'coordinates' => '41° 19.650, 19° 49.122',
//     ],
//     [
//         'key' => 'compact_dec_mm',
//         'format' => '[-] mmmm.mmmmm, [-] mmmm.mmmmm',
//         'coordinates' => '4119.650, 1949.122',
//     ],
//     [
//         'key' => 'compact_mm_ns',
//         'format' => 'mmmm.mmmmm[N,S] mmmm.mmmmm[E,W]',
//         'coordinates' => '4119.650N, 1949.122E',
//     ],
//     [
//         'key' => 'dd_mm_ss_ns_ew',
//         'format' => 'dd:mm:ss[N,S],dd:mm:ss[E,W]',
//         'coordinates' => '90:00:00S,0:00:00E',
//     ],
//     [
//         'key' => 'dd_mm_ss_ss_ns_ew',
//         'format' => 'dd:mm:ss.ss[N,S] dd:mm:ss.ss[E,W]',
//         'coordinates' => '90:00:00.00S 0:00:00.00E',
//     ],
//     [
//         'key' => 'dd_mm_ss_n_e',
//         'format' => 'dd°mm\'ss"[N,S] dd°mm\'ss"[E,W]',
//         'coordinates' => '90°00\'00"S 0°00\'00"E',
//     ],
//     [
//         'key' => 'deg_min_sec_alt',
//         'format' => '[-]dd°mm\'ss" [-]dd°mm\'ss"',
//         'coordinates' => '-90°00\'00" 0°00\'00"',
//     ],
// ]
