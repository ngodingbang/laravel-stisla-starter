<?php

use Illuminate\Support\Carbon;

if (! function_exists('terbilang')) {
    /**
     * Return the given value into readable number.
     *
     * @param  mixed  $value
     * @return string
     */
    function terbilang($value): string
    {
        $result = value(function () use ($value) {
            $angka = ['', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas'];

            $number = abs($value);

            switch (true) {
                case $number < 12:
                    return ' ' . $angka[$number];

                case $number < 20:
                    return terbilang($number - 10) . ' belas';

                case $number < 100:
                    return terbilang($number / 10) . ' puluh ' . terbilang($number % 10);

                case $number < 200:
                    return 'seratus ' . terbilang($number - 100);

                case $number < 1000:
                    return terbilang($number / 100) . ' ratus ' . terbilang($number % 100);

                case $number < 2000:
                    return 'seribu ' . terbilang($number - 1000);

                case $number < 1000000:
                    return terbilang($number / 1000) . ' ribu ' . terbilang($number % 1000);

                case $number < 1000000000:
                    return terbilang($number / 1000000) . ' juta ' . terbilang($number % 1000000);

                case $number < 1000000000000:
                    return terbilang($number / 1000000000) . ' milyar ' . terbilang($number % 1000000000);

                case $number < 1000000000000000:
                    return terbilang($number / 1000000000000) . ' trilyun ' . terbilang($number % 1000000000000);
            }
        });

        return trim(($value < 0 ? 'minus ' : '') . $result);
    }
}

if (! function_exists('greeting')) {
    /**
     * Return specific greeting based on the current hour.
     *
     * @param  \Illuminate\Support\Carbon|null  $date
     * @return string
     */
    function greeting(Carbon $date = null): string
    {
        $hour = ($date ?? Carbon::now())->format('H');

        switch (true) {
            case $hour < 12:
                return trans('Good Morning');

            case $hour < 15:
                return trans('Good Afternoon');

            case $hour < 18:
                return trans('Good Evening');

            default:
                return trans('Good Night');
        }
    }
}

if (! function_exists('gravatar_image')) {
    /**
     * Return avatar image url using gravatar.
     *
     * @param  string|null  $email
     * @param  int  $size
     * @param  string  $extension
     * @return string
     */
    function gravatar_image(string $email = null, int $size = 30, string $extension = 'png'): string
    {
        if (is_null($email)) {
            return sprintf('https://www.gravatar.com/avatar?s=%s', $size);
        }

        return sprintf('https://www.gravatar.com/avatar/%s.%s?s=%s', md5($email), $extension, $size);
    }
}
