<?php


class Product {
    public $id;
    public $name;
    public $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
}

$products = array(
    new Product(1, 'Product 1', 10),
    new Product(2, 'Product 2', 15),
    new Product(3, 'Product 3', 20),
    new Product(4, 'Product 4', 5),
    new Product(5, 'Product 5', 7),
    new Product(6, 'Product 6', 23),
    new Product(7, 'Product 7', 13),
    new Product(8, 'Product 8', 16),
    // Add more product objects here
);

// Calculate the total price
$totalPrice = 0;
foreach ($products as $product) {
    $totalPrice += $product->price;
}

// Display product information in a table
echo '<table>';
echo '<tr><th>ID</th><th>Name</th><th>Price</th></tr>';

foreach ($products as $product) {
    echo '<tr>';
    echo '<td>' . $product->id . '</td>';
    echo '<td>' . $product->name . '</td>';
    echo '<td>' . $product->price . '</td>';
    echo '</tr>';
}

echo '</table>';

// Display the total price
echo 'Total Price: ' . $totalPrice;


?>

/*===================*/
<?php
function areAnagrams($str1, $str2) {
    // Remove white spaces and convert strings to lowercase
    $str1 = strtolower(str_replace(' ', '', $str1));
    $str2 = strtolower(str_replace(' ', '', $str2));

    // Sort the characters of both strings
    $sortedStr1 = str_split($str1);
    sort($sortedStr1);
    $sortedStr1 = implode('', $sortedStr1);

    $sortedStr2 = str_split($str2);
    sort($sortedStr2);
    $sortedStr2 = implode('', $sortedStr2);

    // Compare the sorted strings
    if ($sortedStr1 === $sortedStr2) {
        return true; // Anagrams
    } else {
        return false; // Not anagrams
    }
}

// Example usage
$string1 = "listen";
$string2 = "silent";

if (areAnagrams($string1, $string2)) {
    echo "The strings are anagrams.";
} else {
    echo "The strings are not anagrams.";
}




//*6- because method overriding is based on dynamic binding at runtime and static methods are bonded using static binding at compile time*//