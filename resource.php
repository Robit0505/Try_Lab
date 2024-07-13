<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - XSS Challenge</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        section {
            padding: 2rem;
        }

        footer {
            text-align: center;
            padding: 1rem 0;
            background-color: #333;
            color: #fff;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <span class="brand-text">XSS Challenge</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="resource.php">Resource</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <section id="overview">
        <h3>Apa itu Cross-site Scripting (XSS)?</h3>
        <p>Cross-site scripting (XSS) adalah celah keamanan di situs web yang memungkinkan penyerang mengganggu cara pengguna berinteraksi dengan aplikasi yang rentan. Dengan XSS, penyerang bisa melewati aturan yang seharusnya memisahkan situs-situs web berbeda. Ini memungkinkan penyerang menyamar sebagai pengguna tertentu, melakukan tindakan atas nama pengguna tersebut, dan bahkan mengakses data pribadi pengguna. Jika pengguna yang diserang memiliki hak akses khusus di dalam aplikasi, penyerang bisa mengendalikan seluruh sistem aplikasi tersebut.</p>
        
        <h3>Bagaimana XSS Bekerja?</h3>
        <p>XSS bekerja dengan memanipulasi situs web yang rentan sehingga mengembalikan JavaScript berbahaya kepada pengguna. Ketika kode berbahaya tersebut dieksekusi di browser korban, penyerang dapat sepenuhnya mengkompromikan interaksi korban dengan aplikasi tersebut.</p>
        
        <h3>Apa Saja Jenis Serangan XSS?</h3>
        <p>Terdapat tiga jenis utama serangan XSS:</p>
        <ul>
            <li><strong>Reflected XSS:</strong> Skrip berbahaya berasal dari permintaan HTTP saat ini.</li>
            <li><strong>Stored XSS:</strong> Skrip berbahaya berasal dari database situs web.</li>
            <li><strong>DOM-based XSS:</strong> Kerentanan berada di kode sisi klien, bukan sisi server.</li>
        </ul>
        
        <h4>Reflected XSS</h4>
        <p>Reflected XSS adalah jenis XSS yang paling sederhana. Ini terjadi ketika aplikasi menerima data dalam permintaan HTTP dan memasukkan data tersebut ke dalam respons langsung dengan cara yang tidak aman.</p>
        
        <h4>Stored XSS</h4>
        <p>Stored XSS terjadi ketika data berbahaya disimpan dalam database situs web dan kemudian ditampilkan kepada pengguna lain tanpa validasi yang tepat.</p>
        
        <h4>DOM-based XSS</h4>
        <p>DOM-based XSS terjadi ketika JavaScript sisi klien memproses data dari sumber yang tidak tepercaya dengan cara yang tidak aman, biasanya dengan menulis data kembali ke DOM.</p>
        
        <h3>Dampak Kerentanan XSS</h3>
        <p>Dampak serangan XSS tergantung pada jenis aplikasi, fungsionalitasnya, dan status pengguna. Contohnya:</p>
        <ul>
            <li>Penyerang dapat mencuri sesi pengguna, cookie, atau data sensitif.</li>
            <li>Penyerang dapat mengubah halaman web dan memasukkan pesan palsu.</li>
            <li>Penyerang dapat menggunakan XSS untuk mengarahkan pengguna ke situs palsu atau phishing.</li>
        </ul>
    </section>

    <footer>
        <p>&copy; 2024 XSS Challenge. All rights reserved.</p>
    </footer>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
