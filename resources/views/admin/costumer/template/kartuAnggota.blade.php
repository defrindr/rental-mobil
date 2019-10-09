@php
    use \App\Helpers\MyHelper;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kartu Anggota {{ $costumer->nama }}</title>
    <style>
        .container{
            width: 400px;
            display: block;
            margin: 10px auto;
            color: #aaa;
            border: 1px solid #aaa;
            border-radius: 10px;
            height: 250px;
        }
        .container > .head {
            padding: 10px;
            border-radius: 10px 10px 0 0; 
            text-align: center;
            background: #5c6bc0;
            color: #fff;
        }
        .container > .head > .title{
            font-size: 32px;
            font-weight: bold;
            display: block
        }
        .container > .head > .alamat {
            font-size: 12px;
            color: #eee;
        }
        .container > .body {
            font-size: 18px;
            color: #000;
            padding: 15px 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="head">
            <span class="title">Rental Mobil Jaya</span>
            <span class="alamat">Jln. Kaki ke kiri lanjut belok kanan 10 langkah dari rumah</span>
        </div>
        <div class="body">
            <table>
                <tr>
                    <td>Nama</td><td>:</td><td>{{ $costumer->nama }}</td>
                </tr>
                <tr>
                    <td>Email</td><td>:</td><td>{{ $costumer->email }}</td>
                </tr>
                <tr>
                    <td>Alamat</td><td>:</td><td>{{ $costumer->alamat }}</td>
                </tr>
                <tr>
                        <td>No HP</td><td>:</td><td>{{ $costumer->no_hp }}</td>
                    </tr>
            </table>
        </div>
    </div>
</body>
</html>