<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Updated HiYield Challenge</title>
</head>

<body>

    <?php
    $slugsArr = array(
        "home" => "Welcome home!",
        "about-us" => "Learn more about what we do!",
        "contact-us" => "Feel free to get in touch!"
    );

    $currentSlug = $_GET['slug'];

    foreach ($slugsArr as $key => $value) {
        if ($key == $currentSlug) {
            echo "<h1 class='text-center text-4xl p-20 font-mono'>" . $value . "</h1>";
        }
    }

    ?>


</body>

</html>