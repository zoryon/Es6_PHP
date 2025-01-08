<!DOCTYPE html>
<html lang="en">

<head>
    <!-- style links -->
    <link rel="stylesheet" href="./css/globals.css">

    <!-- style scripts -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- settings -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title -->
    <title>Home Page | PHP</title>
</head>

<body>
    <form action="./php/results.php" method="POST">
        <div class="input-wrapper">
            <label for="name">Student name</label>
            <input 
                id="name" 
                class="border border-1" 
                type="text" 
                name="name" 
                required
            >
        </div>

        <div class="mt-8">
            <p>Insufficient subjects</p>
            <div class="radio-input-wrapper">
                <input 
                    id="history" 
                    class="border border-1" 
                    type="checkbox" 
                    name="subjects[]"
                    value="history" 
                >
                <label for="history">history</label>
            </div>
            <div class="radio-input-wrapper">
                <input 
                    id="math" 
                    class="border border-1" 
                    type="checkbox"
                    name="subjects[]" 
                    value="math" 
                >
                <label for="math">math</label>
            </div>
            <div class="radio-input-wrapper">
                <input 
                    id="italian" 
                    class="border border-1" 
                    type="checkbox" 
                    name="subjects[]" 
                    value="italian" 
                >
                <label for="italian">italian</label>
            </div>
            <div class="radio-input-wrapper">
                <input 
                    id="english" 
                    class="border border-1" 
                    type="checkbox" 
                    name="subjects[]" 
                    value="english" 
                >
                <label for="english">english</label>
            </div>
            <div class="radio-input-wrapper">
                <input 
                    id="it" 
                    class="border border-1" 
                    type="checkbox" 
                    name="subjects[]" 
                    value="it" 
                >
                <label for="it">it</label>
            </div>
        </div>

        <button 
            class="mt-8 border px-4 py-1.5 rounded-sm text-sm"
            type="submit"
        >
            send
        </button>
    </form>
</body>

</html>