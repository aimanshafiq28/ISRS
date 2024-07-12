<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Kehadiran Pelajar Latihan Industri</title>
    <style>
        /* Add your custom styles here */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Laporan Kehadiran Pelajar Latihan Industri</h1>
    <table>
        <thead>
            <tr>
                <th>Nombor Kad Pengenalan</th>
                <th>Tarikh</th>
                <th>Waktu Masuk</th>
                <th>Waktu Keluar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($attendanceDataAdmin as $row) : ?>
                <tr>
                    <td><?= $row['ic_number']; ?></td>
                    <td><?= $row['date']; ?></td>
                    <td><?= $row['clock_in']; ?></td>
                    <td><?= $row['clock_out']; ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
