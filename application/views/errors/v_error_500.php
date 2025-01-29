<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 - Kesalahan Server</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .error-container {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 90%;
        }
        h1 {
            color: #dc3545;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        p {
            color: #666;
            margin-bottom: 1.5rem;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>500</h1>
        <p>Maaf, terjadi kesalahan pada server kami.</p>
        <p>Tim teknis kami telah diberitahu dan sedang menangani masalah ini.</p>
        <a href="<?= base_url() ?>" class="btn">Kembali ke Beranda</a>
    </div>
</body>
</html>
