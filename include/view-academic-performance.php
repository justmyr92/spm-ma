<table class="table">
    <thead>
        <tr>
            <th>
                Year Level
            </th>
            <th>
                Sem
            </th>
            <th>
                GWA
            </th>
            <th colspan="4">Certificate</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "database.php";
        $sr_code = $_POST['sr_code'];
        $sql = "SELECT * FROM student_performance_table WHERE SR_CODE = '$sr_code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $year_level = $row['YEAR_LEVEL'];
                $sem = $row['SEM'];
                $gwa = $row['GWA'];
                $certificate = $row['CERTIFICATE'];
                echo "<tr>
                        <td>$year_level</td>
                        <td>$sem</td>
                        <td>$gwa</td>
                        <td colspan='4'><img src='../images/certificate/$certificate' width='100%'></td>
                    </tr>";
            }
        }
        ?>
    </tbody>
</table>