<!DOCTYPE html>
<html lang="en">

<head>
    <!-- settings -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title -->
    <title>Results Page | PHP</title>
</head>

<body>
    <?php
        // validating
        if ($_SERVER['REQUEST_METHOD'] != "POST") {
            header("Location: index.html");
            exit();
        }

        // start the session and the calculations
        session_start();

        $subjects = $_POST['subjects'];

        $_SESSION["students"][] = [
            "name" => $_POST['name'],
            "subjects" => $subjects,
            "isAdmitted" => isAdmitted($subjects),
        ];

        // functions
        function isAdmitted($array) {
            return count($array) >= 3 
                ? false 
                : true;
        }
    ?>

    <table>
        <?php foreach($_SESSION["students"] as $key => $student): ?>
            <tr>
                <td><?= $student["name"]; ?></td>
                <td>
                    <?= $student["isAdmitted"] === true 
                        ? "admitted" 
                        : "not admitted"; 
                    ?>
                </td>
                <td>
                    
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>