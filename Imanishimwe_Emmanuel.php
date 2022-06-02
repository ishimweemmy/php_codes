<?php
	$connection = mysqli_connect('localhost', 'root', 'ishimwe@2005.', 'rwanda');

    if(!$connection) {
        die("connection error");
    }

    $sql = 'SELECT p.provinceName AS Province, d.districtName AS District, s.sectorName AS Sector, c.cellId AS CellId, c.cellName AS Cell, count(v.villageId) AS VillageNumber FROM provinces AS p INNER JOIN districts AS d ON d.provinceId=p.provinceId INNER JOIN sectors AS s ON s.districtId=d.districtId INNER JOIN cells AS c ON c.sectorId=s.sectorId INNER JOIN villages AS v ON v.cellId=c.cellId GROUP BY c.cellId ORDER BY VillageNumber';

    $query = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,th,td{
            border:1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table id='table1'>
    <thead>
        <tr>
            <th>province</th>
            <th>district</th>
            <th>sector</th>
            <th>cellId</th>
            <th>cellName</th>
            <th>Number of villages</th>
        </tr>
    </thead>
        <?php
        while($rw=mysqli_fetch_assoc($query)) {
        ?>
        <tr>
            <td><?=$rw['Province']?></td>
            <td><?=$rw['District']?></td>
            <td><?=$rw['Sector']?></td>
            <td><?=$rw['CellId']?></td>
            <td><?=$rw['Cell']?></td>
            <td><?=$rw['VillageNumber']?></td>
        </tr>
    <?php
        }
    ?>
    </table>
    <script>
        $(document).ready(function () {
            $('#table1').DataTable({
                pagingType: 'full_numbers',
            });
        });

    </script>
</body>
</html>
