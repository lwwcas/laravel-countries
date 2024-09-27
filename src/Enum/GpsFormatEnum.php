<?php

namespace Lwwcas\LaravelCountries\Enum;

enum GpsFormatEnum
{
    case DDMMSS_NS_EW = 'ddmmss_ns_ew';
    case DDMMSS_NS_EW_ALT = 'ddmmss_ns_ew_alt';
    case DECIMAL_WITH_SIGNS = 'decimal_with_signs';
    case ISO_6709 = 'iso_6709';
    case DECIMAL_DDDD = 'decimal_dddd';
    case DEC_DEG = 'dec_deg';
    case DEC_DEG_MICRO = 'dec_deg_micro';
    case DEC_MIN = 'dec_min';
    case DEG_MIN_SEC = 'deg_min_sec';
    case DEG_MIN_SECS = 'deg_min_secs';
    case NS_DD_MM = 'ns_dd_mm';
    case DD_MM_SS_NS_EW = 'dd_mm_ss_ns_ew';
    case DD_MM_SS_SS_NS_EW = 'dd_mm_ss_ss_ns_ew';
    case DEG_MIN_SEC_ALT = 'deg_min_sec_alt';
    case DDMMSSSS = 'ddmmssss';
    case COMPACT_MM = 'compact_mm';
    case DEC_DD_MM = 'dec_dd_mm';
    case DEG_MIN_MMMMM = 'deg_min_mmmmm';
    case COMPACT_DEC_MM = 'compact_dec_mm';
    case COMPACT_MM_NS = 'compact_mm_ns';

    public function format(): string
    {
        return match ($this) {
            GpsFormatEnum::DDMMSS_NS_EW => '[N,S]dd°mm\'ss.ssss", [E,W]ddd°mm\'ss.ssss"',
            GpsFormatEnum::DDMMSS_NS_EW_ALT => 'dd°mm\'ss.ssss"[N,S], ddd°mm\'ss.ssss"[E,W]',
            GpsFormatEnum::DECIMAL_WITH_SIGNS => '[-]dd mm ss.ssss, [-]ddd mm ss.ssss',
            GpsFormatEnum::ISO_6709 => 'ISO 6709: [-]ddmmss.ssss, [-]dddmmss.ssss',
            GpsFormatEnum::DECIMAL_DDDD => '[-]dd.dddd [-]ddd.dddd',
            GpsFormatEnum::DEC_DEG => '[-]dd.ddddd°,[-]ddd.ddddd° (Dec Degs)',
            GpsFormatEnum::DEC_DEG_MICRO => 'dd.ddddd[N,S]ddd.ddddd[E,W] (Dec Degs Micro)',
            GpsFormatEnum::DEC_MIN => 'ddmm.mmmm[N,S]dddmm.mmmm[E,W] (Dec Min)',
            GpsFormatEnum::DEG_MIN_SEC => 'dd°mm\'ss.sss"[N,S], ddd°mm\'ss.sss"[E,W] (Deg Min Secs)',
            GpsFormatEnum::DEG_MIN_SECS => 'ddmmss.sss[N,S]dddmmss.sss[E,W] (Deg Mins Secs)',
            GpsFormatEnum::NS_DD_MM => '[N,S] dd mm.mmm [E,W] ddd mm.mmm',
            GpsFormatEnum::DD_MM_SS_NS_EW => 'dd:mm:ss[N,S],ddd:mm:ss[E,W]',
            GpsFormatEnum::DD_MM_SS_SS_NS_EW => 'dd:mm:ss.ss[N,S] ddd:mm:ss.ss[E,W]',
            GpsFormatEnum::DEG_MIN_SEC_ALT => 'dd°mm\'ss"[N,S] ddd°mm\'ss"[E,W]',
            GpsFormatEnum::DDMMSSSS => '[-]dd°mm\'ss" [-]ddd°mm\'ss"',
            GpsFormatEnum::COMPACT_MM => 'dd mm\' ss" [N,S] ddd mm\' ss" [E,W]',
            GpsFormatEnum::DEC_DD_MM => 'dd.dddd[N,S] ddd.dddd[E,W]',
            GpsFormatEnum::DEG_MIN_MMMMM => '[-]dd° mm.mmmmm [-]ddd° mm.mmmmm',
            GpsFormatEnum::COMPACT_DEC_MM => '[-] mmmm.mmmmm, [-] mmmm.mmmmm',
            GpsFormatEnum::COMPACT_MM_NS => 'mmmm.mmmmm[N,S] mmmm.mmmmm[E,W]',
        };
    }
}
