<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Challenge 2</title>
    <style>
        body {
            padding: 50px;
        }

        td,
        tr,
        th {
            padding: 15px;
        }
    </style>
</head>

<body>
    <h1 class="font-mono" style="text-align: center; font-size: 3vh;">Challenge 2</h1><br />

    <!--Creating the array-->
    <?php
    $randomWords = array(
        "Gateway" => "gateway",
        "Shank" => "shank",
        "Inscribe" => "inscribe",
        "Rainbow" => "rainbow",
        "Informal" => "informal"
    );
    ?>
    <div>
        <table class="w-8/12 text-center bg-zinc-400 font-mono rounded-xl mx-auto ">
            <th>Key</th>
            <th>Value</th>
            <?php

            foreach ($randomWords as $key => $value) {
                echo
                "<tr class='bg-zinc-300 rounded-xl border-2'>
                <td>$key</td><td>$value</td>
            </tr>";
            }

            ?>

        </table>

    </div>
    </br>
    <p class="text-center text-xs">Note: Wasn't 100% sure if this is what you wanted.
        Purely due to slugify doing nothing to the words but converting them to lowercase.
        But this will at least demonstrate php looping and printing to the table.</p>

</body>

</html>