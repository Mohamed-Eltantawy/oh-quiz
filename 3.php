 <?php
 function isPalindrome($str) {
    // Remove white spaces and convert the string to lowercase
    $str = strtolower(str_replace(' ', '', $str));

    // Reverse the string
    $reversedStr = strrev($str);

    // Compare the string and its reverse
    if ($str === $reversedStr) {
        return true; // Palindrome
    } else {
        return false; // Not a palindrome
    }
}

// Example usage
$string = "Madam";

if (isPalindrome($string)) {
    echo "The string is a palindrome.";
} else {
    echo "The string is not a palindrome.";
}