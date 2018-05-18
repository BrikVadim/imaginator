<?php
if (isset($_POST["submit"])) {

    $filters = include "test_filters.php";

    $original_image = new Imagick($_FILES['image']['tmp_name']);
    $img = base64_encode($original_image);

    print <<<status
    <article class="card">
        <header class="filter-name">
            <b>Original image:</b>
        </header>
        <section class="card-content">
            <img src='data:image/png;base64,$img' />
        </section>
    </article>
status;

    foreach($filters as $filter) {
        for ($i = $filter[2][0]; $i <= $filter[2][1]; $i += $filter[2][2]) {
            $image = clone $original_image;

            $start = microtime(true);
            $image->{$filter[0]}($filter[1][0], $filter[1][1], $filter[1][2], $i);
            $time = microtime(true) - $start;

            $img = base64_encode($image);
            $params = implode(", ", $filter[1]);

            print <<<card
            <article class="card">
                <header class="filter-name">
                    <b>Imagick - $filter[0]($params, $i):</b>
                </header>
                <section class="card-content">
                    <img src="data:image/png;base64,$img" />
                </section>
                <footer class="function-time">
                    <i>Time: $time</i>
                </footer>
            </article>
card;
        }
    }
} else {
    print "<p>File not uploaded</p>";
}
?>