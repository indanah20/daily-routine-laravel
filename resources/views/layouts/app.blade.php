<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aplikasi Laravel Saya</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #000000ff;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            position: fixed;
            width: 100%;
        }

        .container {
            background: #e7cfcfff;
            color: #000000;
            text-align: center;
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px 20px 0px 20px;
            box-sizing: border-box;
        }

        .box {
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
            min-height: 200px;
            margin: 0 auto;
            justify-content: center;
            width: 100%;
        }

        .content {
            max-height: 450px;
            overflow-y: auto;
            margin: 20px 0 60px 0;
            width: auto;
            max-width: 90%;
            font-family: 'Segoe UI', sans-serif;
            justify-content: center;

        }

        table {
            min-width: 500px;
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            padding: 0;
        }

        th {
            position: sticky;
            top: 0;
            background-color: #af259dff;
            color: white;
            text-align: center;
            padding: 12px 15px;
            text-transform: uppercase;
            font-size: 14px;
        }

        td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            color: #333;
            text-align: left;
            max-width: 250px;
            white-space: normal;
            overflow-wrap: break-word;
            word-break: break-word;
        }

        /* Efek Zebra: Baris genap akan berwarna abu-abu sangat muda */
        tr:nth-child(even) {
            background-color: #f8fafc;
        }

        /* Efek Hover: Berubah warna saat kursor di atas baris */
        tr:hover {
            background-color: #f1f5f9;
            transition: background-color 0.2s;
        }

        /* Styling khusus untuk kolom nomor agar rata tengah */
        td:first-child,
        th:first-child {
            text-align: center;
            width: 50px;
        }

        td:last-child,
        td:nth-last-child(2) {
            white-space: nowrap;
            /* Mencegah teks turun baris atau terpotong */
            width: 1px;
            /* Trik agar lebar kolom pas sesuai isi (fit-content) */
            word-break: normal;
            /* Kembalikan mode baca normal (jangan dipenggal) */
            text-align: center;
            /* Agar tombol ada di tengah */
        }


        form {
            height: 280px;
            width: 300px;
            margin: 20px 0;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            /* Penting agar padding tidak merusak lebar */
        }

        textarea {
            height: 100px;
            resize: vertical;
        }


        .group {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 10px;
        }

        button {
            flex: 1;
            width: 100%;
            padding: 12px;
            background-color: #92247aff;
            /* Warna biru khas Laravel */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #7a1e66ff;
        }

        .batal {
            flex: 1;
            text-align: center;
            width: 270px;
            padding: 12px;
            background-color: #cccccc;
            color: #7a1e66ff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            background-origin: border-box;
            margin: 0;
        }

        footer {
            background-color: #000000ff;
            color: #ffffff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-size: 20px;
        }

        h1 {
            margin-top: 40px;
            margin-bottom: 0;
            font-size: 50px;
            color: #551850ff;
        }

        p {
            margin-top: 0;
            font-size: 20px;
            color: #333333ff;
        }
    </style>
</head>

<body>
    <nav>
        <strong>
            <a href="http://127.0.0.1:8000/about">About</a>
            <a href="http://127.0.0.1:8000/halo">Halo</a>
        </strong>
    </nav>
    <div class="container">
        @yield('halo')
        @yield('judul')
        <div class="box">
            @yield('form')
            @yield('content')
        </div>
    </div>
    <footer>
        &copy; 2026 My Awesome App
</body>

</html>