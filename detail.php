<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftaran Lomba Drag Motor Nasional</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Detail Pendaftaran Lomba Drag Motor Nasional</h1>
        <table>
            <tr>
                <th>Nama Peserta</th>
                <td><?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Tidak ada data'; ?></td>
            </tr>
            <tr>
                <th>Nomor Peserta</th>
                <td><?php echo isset($_GET['nomor_peserta']) ? htmlspecialchars($_GET['nomor_peserta']) : 'Tidak ada data'; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : 'Tidak ada data'; ?></td>
            </tr>
            <tr>
                <th>Kelas Lomba</th>
                <td><?php echo isset($_GET['kategori_lomba']) ? htmlspecialchars($_GET['kategori_lomba']) : 'Tidak ada data'; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
