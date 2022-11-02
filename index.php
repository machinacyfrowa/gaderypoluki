<?php
function encrypt(string $text) : string {
    //zmień wszystkie litery na wielkie
    $text = strtoupper($text);
    //zamień string na tablicę znaków
    $textArray = str_split($text);
    //stwórz pusty string wynikowy
    $result = "";
    foreach ($textArray as $key => $char) {
        switch($char) {
            case 'G':
                $result .= 'A';
                break;
            case 'A':
                $result .= 'G';
                break;
            
            default:
                $result .= $char;
        }
    }
    return $result;
}

include('header.html');
if(!isset($_REQUEST['action']))
    include('form.html');
if(isset($_REQUEST['action']) && isset($_REQUEST['text'])) {
    $text = $_REQUEST['text'];
    $text = encrypt($text);
    echo "<div>$text</div>";
    echo "<a href=\"index.php\">Wróć</a>";
}
include('footer.html');
?>