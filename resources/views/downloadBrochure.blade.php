<?php
// URL file yang akan didownload
$files = [
    'images/Brochure_NPEW_2025.jpg'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Files</title>
</head>
<body>
    <script>
        // Daftar file untuk diunduh
        const files = <?php echo json_encode($files); ?>;

        // Mulai proses download untuk setiap file
        files.forEach(file => {
            const a = document.createElement('a');
            a.href = file;
            a.download = file.split('/').pop(); // Ambil nama file untuk download
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        });

        // Redirect ke halaman utama setelah 2 detik
        setTimeout(() => {
            window.location.href = '/';
        }, 2000);
    </script>
</body>
</html>