<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper
{

    public static function diffInDays(string $date1, string $date2): int
    {
        $d1 = Carbon::createFromFormat('d/m/Y', $date1);
        $d2 = Carbon::createFromFormat('d/m/Y', $date2);

        return $d1->diffInDays($d2);
    }

    public static function diffForHumans(string $date1, string $date2): string
    {
        $d1 = Carbon::createFromFormat('d/m/Y', $date1);
        $d2 = Carbon::createFromFormat('d/m/Y', $date2);

        $diff = $d1->diff($d2);

        $parts = [];
        if ($diff->y > 0) $parts[] = $diff->y . ' Tahun';
        if ($diff->m > 0) $parts[] = $diff->m . ' Bulan';
        if ($diff->d > 0) $parts[] = $diff->d . ' Hari';

        return empty($parts) ? '0 Hari' : implode(' ', $parts);
    }
}
