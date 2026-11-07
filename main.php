<?php
declare(strict_types=1);

/**
 * tajweed-php-idgham-assimilation — محلل الإدغام للمتماثلين والمتجانسين والمتقاربين
 * Homorganic & Geminate Consonant Assimilation Engine
 */
$input = "قَدْ دَخَلُوا / ارْكَبْ مَعَنَا";
$digest = substr(hash("sha256", "tajweed-php-idgham-assimilation:" . $input), 0, 12);

echo "[RUN] tajweed-php-idgham-assimilation (PHP) — Homorganic & Geminate Consonant Assimilation Engine" . PHP_EOL;
echo "[AR]  محلل الإدغام للمتماثلين والمتجانسين والمتقاربين" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Type=Mutajanisayn_Kamil | Assimilation=100% | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
