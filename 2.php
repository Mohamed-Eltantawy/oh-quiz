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
?>
