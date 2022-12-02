<?php
if (isset($_POST['generate'])) {
    $floorNumber = $_POST['floornumber'];
    $department = $_POST['department'];
    if ($department == "Accounting") {
        $department = "A";
    } elseif ($department == "Human Resources") {
        $department = "H";
    } elseif ($department == "Auditing") {
        $department = "U";
    } else {
        $department = "X";
    }
    $randomNumber = sprintf('%03d', mt_rand(0, 999));
    $tid = $floorNumber.$department.$randomNumber;
}
?>

