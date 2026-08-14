<?php
// Mengirimkan status code HTTP 503
http_response_code(503);

// Memberitahu bot/browser untuk mencoba lagi setelah 1 jam (3600 detik)
header('Retry-After: 3600');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sedang Dalam Perbaikan (503)</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f7f9fa; color: #333; text-align: center; padding: 15%) 5%; margin: 0; }
        .container { max-width: 550px; margin: 0 auto; background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); border-top: 5px solid #ff9800; }
        h1 { font-size: 36px; color: #222; margin-top: 0; }
        p { font-size: 16px; color: #666; line-height: 1.6; }
        .icon { font-size: 50px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">🛠️</div>
        <h1>Layanan Sedang Dimaintenance</h1>
        <p>Maaf atas ketidaknyamanan ini. Kami sedang melakukan peningkatan sistem terjadwal untuk memberikan pengalaman terbaik kepada Anda.</p>
        <p><strong>Silakan coba akses kembali beberapa saat lagi.</strong></p>
    </div>
</body>
</html>
