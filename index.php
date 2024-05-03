<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Operasi Read</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Hewan Pada Penitipan</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Nama Pemilik</th>
            <th>Hasil Object</th>
        </tr>
        <?php
require_once 'readoperation.php';

$read = ReadOperations::getInstance();
$items = $read->read();
if ($items === false) {
    echo "Failed to fetch items.";
} else {
    foreach ($items as $item) {
        echo "<tr>";
        echo "<td>".$item['id_hewan']."</td>";
        echo "<td>".$item['nama_hewan']."</td>";
        echo "<td>".$item['jenis_hewan']."</td>";
        echo "<td>".$item['nama_pemilik']."</td>";
        echo "<td>".var_dump($read)."</td>";
        echo "</tr>";
    }
}
?>
    </table>
</body>
</html>
