<!DOCTYPE html>
<html lang="en">

<head>
    <!-- style links -->
    <link rel="stylesheet" href="../css/globals.css">

    <!-- style scripts -->
    <script src="https://cdn.tailwindcss.com"></script>

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

        if (!isset($_POST['name'])) {
            header("Location: index.html");
            exit();
        }

        if (empty($_POST['name'])) {
            header("Location: index.html");
            exit();
        }

        // start the session and the calculations
        session_start();

        $subjects = isset($_POST['subjects']) 
            ? $_POST['subjects'] #
            : [];

        $_SESSION["students"][] = [
            "name" => $_POST['name'],
            "subjects" => $subjects,
            "isAdmitted" => isAdmitted($subjects),
        ];

        // functions
        function isAdmitted($array)
        {
            return count($array) >= 3
                ? false
                : true;
        }
    ?>

    <table class="mb-8">
        <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Debts</th>
        </tr>
        <?php foreach ($_SESSION["students"] as $key => $student): ?>
            <tr>
                <td><?= $student["name"]; ?></td>
                <td>
                    <?=
                        $student["isAdmitted"] === true
                            ? "admitted"
                            : "not admitted";
                    ?>
                </td>
                <td>
                    <?php
                        $subjectCount = count($student["subjects"]);
                        if ($student["isAdmitted"] && $subjectCount > 0 && $subjectCount < 3) {
                            echo implode(", ", $student["subjects"]);
                        } else {
                            echo "-";
                        }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a 
        class="underline block"
        href="../index.php"
    >
        add a new student
    </a>
    <a 
        class="underline block"
        href="./assessment.php"
    >
        end assessments
    </a>
</body>

</html>