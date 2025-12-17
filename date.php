<?php
$date = new DateTime();

function toKhmerNumber($number) {
    $arabic = ['0','1','2','3','4','5','6','7','8','9'];
    $khmer  = ['០','១','២','៣','៤','៥','៦','៧','៨','៩'];

    return str_replace($arabic, $khmer, $number);
}


$formatter = new IntlDateFormatter(
    'km_KH',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'Asia/Phnom_Penh',
    IntlDateFormatter::GREGORIAN,
    "ថ្ថៃEEEE 'ទី'dd 'ខែ'MMMM ឆ្នាំyyyy"
);

$khmerDate = $formatter->format($date);

$khmerDate = toKhmerNumber($khmerDate);
?>
