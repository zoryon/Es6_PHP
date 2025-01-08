<!DOCTYPE html>
<html lang="en">

<head>
    <!-- style links -->
    <link rel="stylesheet" href="../css/globals.css">

    <!-- style scripts -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- settings -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title -->
    <title>Assessment Page | PHP</title>
</head>

<body>
    <?php
        session_start();

        // validating
        if (!isset($_SESSION["students"])) {
            header("Location: index.html");
            exit();
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
</body>

</html>