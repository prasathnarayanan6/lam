<?php 
require_once "conn.php";
// header('Content-Type: application/json');
$sql = "SELECT * FROM data ORDER BY date DESC LIMIT 1";
$query=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($query); 
$data = [
    'id' => $row['id'],
    's1' => $row['s1'],
    's2' => $row['s2'],
    's3' => $row['s3'],
    's4' => $row['s4'],
    's5' => $row['s5'],
    's6' => $row['s6'],
    's7' => $row['s7'],
    's8' => $row['s8'],
    's9' => $row['s9'],
    's10' => $row['s10'],
    'date' => $row['date']
    // 'state' => $row['state']
];
echo json_encode($data);
?>