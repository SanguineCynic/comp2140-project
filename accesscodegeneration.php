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
    $accessCode = $floorNumber.$department.$randomNumber;
    echo "Your access code is $accessCode";
}
?>

<form action="" method="post">
    Floor Number:
    <input type="text" name="floornumber" />
    <br />
    Department:
    <select name="department">
        <option value="Accounting">Accounting</option>
        <option value="Human Resources">Human Resources</option>
        <option value="Auditing">Auditing</option>
        <option value="Accaud">Accaud</option>
    </select>
    <br />
    <input type="submit" name="generate" value="Generate" />
</form>