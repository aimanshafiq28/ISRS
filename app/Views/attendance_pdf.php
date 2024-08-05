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

        .student-info {
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php 
    $currentIC = '';
    ?>
    <h1>Laporan Kehadiran Pelajar Latihan Industri</h1>
    
    <?php foreach ($attendanceDataAdmin as $row) : ?>
        <?php if ($row['ic_number'] !== $currentIC) : ?>
            <?php if ($currentIC !== '') : ?>
                <!-- Close previous student's section if it exists -->
                </tbody>
                </table>
            <?php endif; ?>
            
            <!-- Display new student's name and IC number -->
            <div class="student-info">
                Nama Pelajar: <?= htmlspecialchars($row['stu_name'] ?? 'N/A'); ?><br>
                Nombor Kad Pengenalan: <?= htmlspecialchars($row['ic_number']); ?>
            </div>
            
            <!-- Start new table for the new student -->
            <table>
                <thead>
                    <tr>
                        <th>Tarikh</th>
                        <th>Waktu Masuk</th>
                        <th>Waktu Keluar</th>
                    </tr>
                </thead>
                <tbody>
        <?php endif; ?>
        
        <tr>
            <td><?= htmlspecialchars($row['date']); ?></td>
            <td><?= htmlspecialchars($row['clock_in']); ?></td>
            <td><?= htmlspecialchars($row['clock_out']); ?></td>
        </tr>
        
        <?php 
        $currentIC = $row['ic_number'];
        ?>
    <?php endforeach ?>
    
    <!-- Close last table if needed -->
    <?php if ($currentIC !== '') : ?>
        </tbody>
        </table>
    <?php endif; ?>
    
</body>
</html>
