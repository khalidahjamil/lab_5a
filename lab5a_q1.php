<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q1</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        td {
            border: 1px solid #ccc;
            padding: 10px;
        }

    </style>
</head>
<body>
    <?php
        // Personal details
        $name = "Khalidah Jamil";
        $matric_number = "AI220012";
        $course = "Bachelor of Computer Science (Software Engineering) with Honours";
        $year_of_study = "3";
        $address = "Parit Haji Kadir";
    ?>

    <h1 style="text-align: center;">Personal Details</h1>
    <table>
        <tr>
            <td style="text-align: left; font-weight: bold;">Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td style="text-align: left; font-weight: bold;">Matric Number</td>
            <td><?php echo $matric_number; ?></td>
        </tr>
        <tr>
            <td style="text-align: left; font-weight: bold;">Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td style="text-align: left; font-weight: bold;">Year of Study</td>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td style="text-align: left;font-weight: bold;">Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
