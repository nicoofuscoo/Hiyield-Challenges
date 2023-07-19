<?php get_header(); ?>

<!--CHALLENGE 1-->

<!--Title-->
<h1 class="font-mono" style="text-align: center; font-size: 3vh;">Challenge 1</h1><br />

<!--Main Grid-->
<div class=" grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 place-items-center">
    <!--Individual card (items in grid)-->
    <div class=" card">
        <img src="https://picsum.photos/450" />
        <p>Gustavo Fring</p>
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">View Portfolio</a>
    </div>

    <div class="card">
        <img src="https://picsum.photos/450" />
        <p>Jesse Pinkman</p>
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">View Portfolio</a>
    </div>

    <div class="card">
        <img src="https://picsum.photos/450" />
        <p>Ronald McDonald</p>
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">View Portfolio</a>
    </div>

</div>
</br>
<!--CHALLENGE 2-->

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

<?php get_footer(); ?>