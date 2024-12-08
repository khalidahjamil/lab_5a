<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>

    <?php
    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [
                'no' => $i,
                'multiplier' => $multiplier,
                'answer' => $i * $multiplier
            ];
        }
        return $results;
    }

    $multiplier = 2; 
    $multiplication_table = multiplication($multiplier);
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Multiplier</th>
                <th>Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($multiplication_table as $row): ?>
                <tr>
                    <td><?php echo $row['no']; ?></td>
                    <td><?php echo $row['multiplier']; ?></td>
                    <td><?php echo $row['answer']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
