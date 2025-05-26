<?php
// Date manipulation — current year for footer copyright
$currentYear = date("Y");

// Number manipulation format price to 2 decimals
function formatPrice($price)
{
    return number_format($price, 2);
}

// String manipulation — capitalize first letter of each sentence
function capitalizeSentences($text)
{
    $sentences = preg_split('/([.?!]\s*)/', $text, -1, PREG_SPLIT_DELIM_CAPTURE);
    $result = '';

    foreach ($sentences as $i => $sentence) {
        if ($i % 2 == 0) {
            $result .= ucfirst(strtolower(trim($sentence)));
        } else {
            $result .= $sentence;
        }
    }
    return $result;
}

if (!function_exists('displayMenu')) {
    function displayMenu($items)
    {
        echo '<div class="row g-4">';
        foreach ($items as $dish) {
            $priceFormatted = formatPrice($dish['price']);
            $nameFormatted = ucwords(strtolower($dish['name']));
            $descFormatted = capitalizeSentences($dish['desc']);

            echo '<div class="col-sm-6 col-md-4 col-lg-3">';
            echo '<div class="card h-100 shadow-sm">';
            echo "<img src='page/menu/assets/img/{$dish['img']}' alt='{$nameFormatted}' class='card-img-top rounded'>";
            echo '<div class="card-body d-flex flex-column">';
            echo "<h5 class='card-title'>{$nameFormatted}</h5>";
            echo "<p class='card-text flex-grow-1'>{$descFormatted}</p>";
            echo "<strong class='text-danger'>₱{$priceFormatted}</strong>";
            echo '</div></div></div>';
        }
        echo '</div>';
    }
}
?>