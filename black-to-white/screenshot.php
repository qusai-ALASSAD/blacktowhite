<?php
// Create theme screenshot
$width = 1200;
$height = 900;
$image = imagecreatetruecolor($width, $height);

// Colors
$black = imagecolorallocate($image, 0, 0, 0);
$white = imagecolorallocate($image, 255, 255, 255);
$gray = imagecolorallocate($image, 128, 128, 128);

// Background
imagefill($image, 0, 0, $black);

// Header
imagefilledrectangle($image, 0, 0, $width, 80, $black);
$logo_text = "Black to White";
$font_size = 5;
$logo_width = imagefontwidth($font_size) * strlen($logo_text);
$logo_x = ($width - $logo_width) / 2;
imagestring($image, $font_size, $logo_x, 30, $logo_text, $white);

// Hero Section
imagefilledrectangle($image, 0, 80, $width, 400, $black);
$hero_text = "Professionelle Reinigungsservice in Frankfurt";
$hero_width = imagefontwidth($font_size) * strlen($hero_text);
$hero_x = ($width - $hero_width) / 2;
imagestring($image, $font_size, $hero_x, 200, $hero_text, $white);

// Services Section
imagefilledrectangle($image, 0, 400, $width, 700, $white);
$services = array(
    "Büroreinigung",
    "Privatreinigung",
    "Industriereinigung",
    "Spezialreinigung"
);

$y = 450;
foreach ($services as $service) {
    $service_width = imagefontwidth(4) * strlen($service);
    $service_x = ($width - $service_width) / 2;
    imagestring($image, 4, $service_x, $y, $service, $black);
    $y += 50;
}

// Footer
imagefilledrectangle($image, 0, 700, $width, $height, $black);
$footer_text = "© " . date('Y') . " Black to White";
$footer_width = imagefontwidth(3) * strlen($footer_text);
$footer_x = ($width - $footer_width) / 2;
imagestring($image, 3, $footer_x, 850, $footer_text, $white);

// Save image
imagepng($image, dirname(__FILE__) . '/screenshot.png');
imagedestroy($image);
?>