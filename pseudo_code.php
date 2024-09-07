<?php


//✅ Coding challenge #4: Print all the multiplication tables with numbers from 1 to 10

// Pseudo Code
/*
START

FOR i FROM 1 TO 10 DO
PRINT "Multiplication Table for i"

FOR j FROM 1 TO 10 DO
SET product TO i * j
PRINT "i x j = product"
END FOR

PRINT a blank line for spacing
END FOR

END
*/


// ✅Coding challenge #5: Calculate the sum of numbers from 1 to 10


// Psuedo Code

/*
START

SET sum TO 0

FOR i FROM 1 TO 10 DO
    SET sum TO sum + i
END FOR

PRINT "The sum of numbers from 1 to 10 is: sum"

END


*/ 

// ✅Coding challenge #6: Calculate 10!


// Psuedo Code

/*
START

SET factorial TO 1

FOR i FROM 1 TO 10 DO
    SET factorial TO factorial * i
END FOR

PRINT "10! = factorial"

END


*/

//✅ Coding challenge #7: Calculate the sum of odd numbers greater than 10 and less than 30



// Psuedo Code

/*
START

SET sum TO 0

FOR i FROM 11 TO 29 STEP 2 DO
    SET sum TO sum + i
END FOR

PRINT "The sum of odd numbers greater than 10 and less than 30 is: sum"

END



*/

// Coding challenge #8: Create a function that will convert from Celsius to Fahrenheit




// Psuedo Code

/*
START

FUNCTION celsiusToFahrenheit(celsius)
    SET fahrenheit TO (celsius * 9/5) + 32
    RETURN fahrenheit
END FUNCTION

SET celsius TO 25
SET fahrenheit TO celsiusToFahrenheit(celsius)
PRINT "celsius°C is equal to fahrenheit°F"

END


*/

//✅ Coding challenge #9: Create a function that will convert from Fahrenheit to Celsius



// Psuedo Code

/*
START

FUNCTION fahrenheitToCelsius(fahrenheit)
    SET celsius TO (fahrenheit - 32) * 5/9
    RETURN celsius
END FUNCTION

SET fahrenheit TO 77
SET celsius TO fahrenheitToCelsius(fahrenheit)
PRINT "fahrenheit°F is equal to celsius°C"

END

*/

// ✅Coding challenge #10: Calculate the sum of numbers in an array of numbers



// Psuedo Code

/*
START

FUNCTION sumArray(numbers)
    SET sum TO 0
    
    FOR EACH number IN numbers DO
        SET sum TO sum + number
    END FOR
    
    RETURN sum
END FUNCTION

SET numbers TO [1, 2, 3, 4, 5]
SET sum TO sumArray(numbers)
PRINT "The sum of the numbers in the array is: sum"

END


*/


//✅ Coding challenge #11: Calculate the average of the numbers in an array of numbers



// Psuedo Code

/*
START

FUNCTION averageArray(numbers)
    SET sum TO 0
    
    FOR EACH number IN numbers DO
        SET sum TO sum + number
    END FOR
    
    SET count TO the number of elements in numbers
    IF count > 0 THEN
        SET average TO sum / count
    ELSE
        SET average TO 0
    END IF
    
    RETURN average
END FUNCTION

SET numbers TO [1, 2, 3, 4, 5]
SET average TO averageArray(numbers)
PRINT "The average of the numbers in the array is: average"

END


*/

// ✅Coding challenge #12: Create a function that receives an array of numbers and returns an array containing only the positive numbers


// Psuedo Code

/*
START

FUNCTION filterPositiveNumbers(numbers)
    SET positiveNumbers TO an empty array
    
    FOR EACH number IN numbers DO
        IF number > 0 THEN
            ADD number TO positiveNumbers
        END IF
    END FOR
    
    RETURN positiveNumbers
END FUNCTION

SET numbers TO [-5, 3, -1, 7, 0, 4]
SET positiveNumbers TO filterPositiveNumbers(numbers)
PRINT positiveNumbers

END

*/






//✅ Coding challenge #13: Print the first 10 Fibonacci numbers without recursion



// Psuedo Code

/*
START

FUNCTION printFibonacci(n)
    SET a TO 0
    SET b TO 1
    
    PRINT a
    
    FOR i FROM 1 TO n-1 DO
        SET next TO a + b
        PRINT next
        SET a TO b
        SET b TO next
    END FOR
END FUNCTION

CALL printFibonacci(10)

END


*/

// ✅Coding challenge #14: Create a function that will find the nth Fibonacci number using recursion



// Psuedo Code

/*
START

FUNCTION fibonacci(n)
    IF n == 0 THEN
        RETURN 0
    ELSE IF n == 1 THEN
        RETURN 1
    ELSE
        RETURN fibonacci(n - 1) + fibonacci(n - 2)
    END IF
END FUNCTION

SET n TO 10
SET result TO fibonacci(n)
PRINT "The Fibonacci number at position n is: result"

END


*/

// ✅Coding challenge #15: Create a function that will return a Boolean specifying if a number is prime


// Psuedo Code

/*
START

FUNCTION isPrime(number)
    IF number <= 1 THEN
        RETURN false
    ELSE IF number <= 3 THEN
        RETURN true
    END IF
    
    IF number % 2 == 0 OR number % 3 == 0 THEN
        RETURN false
    END IF
    
    SET i TO 5
    WHILE i * i <= number DO
        IF number % i == 0 OR number % (i + 2) == 0 THEN
            RETURN false
        END IF
        SET i TO i + 6
    END WHILE
    
    RETURN true
END FUNCTION

SET number TO 29
IF isPrime(number) THEN
    PRINT number + " is a prime number."
ELSE
    PRINT number + " is not a prime number."
END IF

END


*/

// ✅Coding challenge #16: Calculate the sum of digits of a positive integer number


// Psuedo Code

/*
START

FUNCTION sumOfDigits(number)
    SET sum TO 0
    
    WHILE number > 0 DO
        SET sum TO sum + (number % 10)
        SET number TO number / 10 (using integer division)
    END WHILE
    
    RETURN sum
END FUNCTION

SET number TO 12345
SET result TO sumOfDigits(number)
PRINT "The sum of the digits of number is: result"

END


*/ 

// ✅Coding challenge #17: Print the first 100 prime numbers

// Psuedo Code
/*
START

FUNCTION isPrime(number)
    IF number <= 1 THEN
        RETURN false
    ELSE IF number <= 3 THEN
        RETURN true
    END IF
    
    IF number % 2 == 0 OR number % 3 == 0 THEN
        RETURN false
    END IF
    
    SET i TO 5
    WHILE i * i <= number DO
        IF number % i == 0 OR number % (i + 2) == 0 THEN
            RETURN false
        END IF
        SET i TO i + 6
    END WHILE
    
    RETURN true
END FUNCTION

FUNCTION printFirstNPrimes(n)
    SET count TO 0
    SET number TO 2
    
    WHILE count < n DO
        IF isPrime(number) THEN
            PRINT number
            SET count TO count + 1
        END IF
        SET number TO number + 1
    END WHILE
END FUNCTION

CALL printFirstNPrimes(100)

END


*/

// ✅Coding challenge #18: Create a function that will return in an array the first "nPrimes" prime numbers greater than a particular number "startAt"


// Psuedo Code

/*
START

FUNCTION isPrime(number)
    IF number <= 1 THEN
        RETURN false
    ELSE IF number <= 3 THEN
        RETURN true
    END IF
    
    IF number % 2 == 0 OR number % 3 == 0 THEN
        RETURN false
    END IF
    
    SET i TO 5
    WHILE i * i <= number DO
        IF number % i == 0 OR number % (i + 2) == 0 THEN
            RETURN false
        END IF
        SET i TO i + 6
    END WHILE
    
    RETURN true
END FUNCTION

FUNCTION findPrimesGreaterThan(startAt, nPrimes)
    SET primes TO an empty array
    SET number TO startAt + 1
    
    WHILE count(primes) < nPrimes DO
        IF isPrime(number) THEN
            ADD number TO primes
        END IF
        SET number TO number + 1
    END WHILE
    
    RETURN primes
END FUNCTION

SET startAt TO 10
SET nPrimes TO 5
SET primeNumbers TO findPrimesGreaterThan(startAt, nPrimes)
PRINT primeNumbers

END


*/

// ✅Coding challenge #19: Rotate an array to the left 1 position



// Psuedo Code

/*
START

FUNCTION rotateLeft(arr)
    IF length(arr) <= 1 THEN
        RETURN arr
    END IF
    
    SET first TO remove the first element of arr
    ADD first TO the end of arr
    
    RETURN arr
END FUNCTION

SET array TO [1, 2, 3, 4, 5]
SET rotatedArray TO rotateLeft(array)
PRINT rotatedArray

END



*/


//✅ Coding challenge #20: Create a function that will merge two arrays and return the result as a new array



// Psuedo Code

/*
START

FUNCTION mergeArrays(arr1, arr2)
    SET mergedArray TO merge arr1 and arr2
    RETURN mergedArray
END FUNCTION

SET array1 TO [1, 2, 3]
SET array2 TO [4, 5, 6]
SET mergedArray TO mergeArrays(array1, array2)
PRINT mergedArray

END


*/

// ✅Coding challenge #21: Create a function that will receive two arrays of numbers as arguments and return an array composed of all the numbers that are either in the first array or second array but not in both




// Psuedo Code

/*
START

FUNCTION symmetricDifference(arr1, arr2)
    SET diff1 TO elements in arr1 but not in arr2
    SET diff2 TO elements in arr2 but not in arr1
    SET symmetricDiff TO merge diff1 and diff2
    RETURN symmetricDiff
END FUNCTION

SET array1 TO [1, 2, 3, 4, 5]
SET array2 TO [4, 5, 6, 7, 8]
SET result TO symmetricDifference(array1, array2)
PRINT result

END


*/

// ✅Coding challenge #22: Create a function that will receive two arrays and will return an array with elements that are in the first array but not in the second


// Psuedo Code

/*
START

FUNCTION differenceArray(arr1, arr2)
    SET difference TO elements in arr1 but not in arr2
    RETURN difference
END FUNCTION

SET array1 TO [1, 2, 3, 4, 5]
SET array2 TO [4, 5, 6, 7, 8]
SET result TO differenceArray(array1, array2)
PRINT result

END


*/

//✅ Coding challenge #23: Create a function that will receive an array of numbers as argument and will return a new array with distinct elements



// Psuedo Code

/*
START

FUNCTION getDistinctElements(arr)
    SET distinctArray TO remove duplicates from arr using array_unique
    RETURN distinctArray
END FUNCTION

SET array TO [1, 2, 2, 3, 4, 4, 5]
SET distinctArray TO getDistinctElements(array)
PRINT distinctArray

END

*/

// ✅ Coding challenge #24: Calculate the sum of first 100 prime numbers


// Psuedo Code

/*
START

FUNCTION isPrime(num)
    IF num < 2 THEN
        RETURN false
    END IF
    
    FOR i FROM 2 TO sqrt(num)
        IF num MOD i == 0 THEN
            RETURN false
        END IF
    END FOR
    
    RETURN true
END FUNCTION

FUNCTION sumOfFirst100Primes()
    SET sum TO 0
    SET count TO 0
    SET num TO 2
    
    WHILE count < 100 DO
        IF isPrime(num) THEN
            ADD num TO sum
            INCREMENT count BY 1
        END IF
        INCREMENT num BY 1
    END WHILE
    
    RETURN sum
END FUNCTION

SET sumPrimes TO sumOfFirst100Primes()
PRINT "The sum of the first 100 prime numbers is: " + sumPrimes

END


*/

// ✅Coding challenge #25: Print the distance between the first 100 prime numbers



// Psuedo Code

/*
START

FUNCTION isPrime(num)
    IF num < 2 THEN
        RETURN false
    END IF
    
    FOR i FROM 2 TO sqrt(num)
        IF num MOD i == 0 THEN
            RETURN false
        END IF
    END FOR
    
    RETURN true
END FUNCTION

FUNCTION printDistancesBetweenPrimes()
    SET primes TO empty list
    SET num TO 2
    
    WHILE length of primes < 100 DO
        IF isPrime(num) THEN
            ADD num TO primes
        END IF
        INCREMENT num BY 1
    END WHILE
    
    FOR i FROM 1 TO length of primes - 1 DO
        SET distance TO primes[i] - primes[i - 1]
        PRINT "Distance between primes[i - 1] and primes[i]: " + distance
    END FOR
END FUNCTION

CALL printDistancesBetweenPrimes()

END


*/


// ✅Coding challenge #26: Create a function that will add two positive numbers of indefinite size. The numbers are received as strings and the result should be also provided as string.


// Psuedo Code

/*
START

FUNCTION addLargeNumbers(num1, num2)
    IF length of num1 < length of num2 THEN
        SWAP num1 and num2
    END IF

    REVERSE num1
    REVERSE num2

    SET carry TO 0
    SET result TO empty string

    FOR i FROM 0 TO length of num1 - 1 DO
        SET digit1 TO integer value of num1[i]
        SET digit2 TO integer value of num2[i] if i < length of num2 ELSE 0

        SET sum TO digit1 + digit2 + carry
        APPEND (sum % 10) TO result
        SET carry TO integer division of sum by 10
    END FOR

    IF carry > 0 THEN
        APPEND carry TO result
    END IF

    REVERSE result
    RETURN result
END FUNCTION

SET num1 TO "123456789012345678901234567890"
SET num2 TO "987654321098765432109876543210"
SET sum TO addLargeNumbers(num1, num2)
PRINT "The sum is: " + sum

END


*/


// ✅Coding challenge #27. Create a function that will return the number of words in a text



// Psuedo Code

/*
START

FUNCTION countWords(text)
    SET wordCount TO the result of counting words in text using str_word_count
    RETURN wordCount
END FUNCTION

SET text TO "This is a simple example text with seven words."
SET numberOfWords TO countWords(text)
PRINT "The number of words in the text is: " + numberOfWords

END


*/
// ✅Coding challenge #28. Create a function that will capitalize the first letter of each word in a text


// Function to capitalize the first letter of each word in a text

// Psuedo Code

/*
START

FUNCTION capitalizeFirstLetter(text)
    SET capitalizedText TO the result of applying ucwords to text
    RETURN capitalizedText
END FUNCTION

SET text TO "this is a simple example text."
SET capitalizedText TO capitalizeFirstLetter(text)
PRINT "Capitalized text: " + capitalizedText

END


*/


// ✅Coding challenge #29. Calculate the sum of numbers received in a comma delimited string



// Psuedo Code

/*
START

FUNCTION sumOfCommaDelimitedNumbers(string)
    SET numbers TO result of splitting string by comma
    SET sum TO 0

    FOR EACH number IN numbers DO
        CONVERT number TO integer and ADD it to sum
    END FOR

    RETURN sum
END FUNCTION

SET commaDelimitedString TO "10,20,30,40,50"
SET sum TO sumOfCommaDelimitedNumbers(commaDelimitedString)
PRINT "The sum of the numbers is: " + sum

END


*/

// ✅Coding challenge #30. Create a function that will return an array with words inside a text


// Psuedo Code

/*
START

FUNCTION getWordsArray(text)
    SET wordsArray TO result of str_word_count(text, 1)
    RETURN wordsArray
END FUNCTION

SET text TO "This is a sample text with several words."
SET words TO getWordsArray(text)
PRINT words array

END


*/



// ✅Coding challenge #31. Create a function to convert a CSV text to a “bi-dimensional” array



// Psuedo Code

/*
START

FUNCTION csvToArray(csvText)
    SPLIT csvText by newline character into lines array
    INITIALIZE an empty array to hold the bi-dimensional array
    
    FOR EACH line IN lines DO
        CONVERT line into an array of values using str_getcsv
        ADD the array of values to the main array
    END FOR
    
    RETURN the bi-dimensional array
END FUNCTION

SET csvText TO "name,age,city\nJohn,25,New York\nJane,30,Los Angeles\nDoe,22,Chicago"
SET array TO csvToArray(csvText)
PRINT array

END


*/


// ✅Coding challenge #32. Create a function that converts a string to an array of characters


// Psuedo Code

/*
START

FUNCTION stringToArrayOfCharacters(string)
    SET charactersArray TO result of splitting string using str_split
    RETURN charactersArray
END FUNCTION

SET string TO "Hello, World!"
SET characters TO stringToArrayOfCharacters(string)
PRINT characters array

END


*/

// ✅Coding challenge #33. Create a function that will convert a string in an array containing the ASCII codes of each character



// Psuedo Code

/*
START

FUNCTION stringToAsciiArray(string)
    INITIALIZE an empty array to hold ASCII codes
    
    FOR i FROM 0 TO length of string - 1 DO
        GET the character at position i in the string
        GET the ASCII code of the character using ord function
        ADD the ASCII code to the array
    END FOR
    
    RETURN the array of ASCII codes
END FUNCTION

SET string TO "Hello!"
SET asciiCodes TO stringToAsciiArray(string)
PRINT asciiCodes array

END


*/



//✅ Coding challenge #34. Create a function that will convert an array containing ASCII codes in a string




// Psuedo Code

/*
START

FUNCTION asciiArrayToString(asciiArray)
    INITIALIZE an empty string to hold the result
    
    FOR EACH asciiCode IN asciiArray DO
        CONVERT asciiCode TO a character using chr function
        APPEND the character to the result string
    END FOR
    
    RETURN the resulting string
END FUNCTION

SET asciiArray TO [72, 101, 108, 108, 111, 33]
SET string TO asciiArrayToString(asciiArray)
PRINT "The resulting string is: " + string

END


*/ 



// ✅Coding challenge #35. Implement the Caesar cypher




// Psuedo Code

/*
START

FUNCTION caesarCipherEncrypt(text, shift)
    INITIALIZE an empty string result
    SET shift TO shift modulo 26 (to handle shifts larger than 25)

    FOR EACH character IN text DO
        IF character is an uppercase letter THEN
            CALCULATE encrypted character as (ASCII of character + shift - 65) modulo 26 + 65
            APPEND encrypted character to result
        ELSE IF character is a lowercase letter THEN
            CALCULATE encrypted character as (ASCII of character + shift - 97) modulo 26 + 97
            APPEND encrypted character to result
        ELSE
            APPEND the character to result as is (for non-alphabetical characters)
        END IF
    END FOR

    RETURN result
END FUNCTION

FUNCTION caesarCipherDecrypt(text, shift)
    RETURN result of caesarCipherEncrypt(text, 26 - (shift modulo 26))
END FUNCTION

SET plainText TO "Hello, World!"
SET shift TO 3

SET encryptedText TO caesarCipherEncrypt(plainText, shift)
SET decryptedText TO caesarCipherDecrypt(encryptedText, shift)

PRINT "Original text: " + plainText
PRINT "Encrypted text: " + encryptedText
PRINT "Decrypted text: " + decryptedText

END


*/ 

// ✅Coding challenge #36. Implement the bubble sort algorithm for an array of numbers




// Psuedo Code

/*
START

FUNCTION bubbleSort(array)
    SET n TO length of array
    
    FOR i FROM 0 TO n - 2 DO
        FOR j FROM 0 TO n - i - 2 DO
            IF array[j] > array[j + 1] THEN
                // Swap elements
                SET temp TO array[j]
                SET array[j] TO array[j + 1]
                SET array[j + 1] TO temp
            END IF
        END FOR
    END FOR
    
    RETURN sorted array
END FUNCTION

SET array TO [64, 34, 25, 12, 22, 11, 90]
SET sortedArray TO bubbleSort(array)
PRINT sortedArray

END


*/ 

// ✅Coding challenge #37. Create a function to calculate the distance between two points defined by their x, y coordinates


// Psuedo Code

/*
START

FUNCTION calculateDistance(x1, y1, x2, y2)
    SET dx TO x2 - x1
    SET dy TO y2 - y1
    
    SET distance TO square root of (dx^2 + dy^2)
    
    RETURN distance
END FUNCTION

SET x1 TO 1
SET y1 TO 2
SET x2 TO 4
SET y2 TO 6

SET distance TO calculateDistance(x1, y1, x2, y2)
PRINT "The distance between the points is: " + distance

END



*/ 


// ✅Coding challenge #38. Create a function that will return a Boolean value indicating if two circles defined by center coordinates and radius are intersecting




// Psuedo Code

/*
START

FUNCTION circlesIntersect(x1, y1, r1, x2, y2, r2)
    SET dx TO x2 - x1
    SET dy TO y2 - y1
    SET distance TO square root of (dx^2 + dy^2)
    
    IF distance <= (r1 + r2) AND distance >= absolute value of (r1 - r2) THEN
        RETURN true
    ELSE
        RETURN false
    END IF
END FUNCTION

SET x1 TO 0
SET y1 TO 0
SET r1 TO 5
SET x2 TO 4
SET y2 TO 4
SET r2 TO 5

SET intersecting TO circlesIntersect(x1, y1, r1, x2, y2, r2)
IF intersecting THEN
    PRINT "The circles are intersecting."
ELSE
    PRINT "The circles are not intersecting."
END IF

END


*/ 


//✅ Coding challenge 39. Create a function that will receive a bi-dimensional array as argument and a number and will extract as a unidimensional array the column specified by the number



// Psuedo Code

/*
START

FUNCTION extractColumn(array, columnIndex)
    INITIALIZE an empty array column
    
    IF array is not empty AND columnIndex is valid THEN
        FOR EACH row IN array DO
            IF row has element at columnIndex THEN
                APPEND row[columnIndex] TO column
            END IF
        END FOR
    END IF
    
    RETURN column
END FUNCTION

SET biDimensionalArray TO [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
]
SET columnIndex TO 1

SET columnArray TO extractColumn(biDimensionalArray, columnIndex)
PRINT columnArray

END


*/ 


// ✅Coding challenge #40. Create a function that will convert a string containing a binary number into a number



// Psuedo Code

/*

START

FUNCTION binaryToDecimal(binaryString)
    // Use built-in function to convert binary string to decimal number
    RETURN bindec(binaryString)
END FUNCTION

SET binaryString TO "1010" // Example binary number
SET decimalNumber TO binaryToDecimal(binaryString)
PRINT "The decimal value is: " + decimalNumber

END


*/ 




// ✅Coding challenge #41. Create a function to calculate the sum of all the numbers in a jagged array (array contains numbers or other arrays of numbers on an unlimited number of levels)




// Pseudo Code

/*
START

FUNCTION sumJaggedArray(array)
    INITIALIZE sum TO 0
    
    FOR EACH element IN array DO
        IF element IS an array THEN
            // Recursively sum elements in the nested array
            SET sum TO sum + sumJaggedArray(element)
        ELSE
            // Add number to sum
            SET sum TO sum + element
        END IF
    END FOR
    
    RETURN sum
END FUNCTION

SET jaggedArray TO [
    1,
    [2, 3, [4, 5]],
    [6, [7, 8]],
    9
]

SET totalSum TO sumJaggedArray(jaggedArray)
PRINT "The sum of all numbers in the jagged array is: " + totalSum

END


*/ 

// ✅Coding challenge #42. Find the maximum number in a jagged array of numbers or array of numbers




// Pseudo Code

/*

START

FUNCTION findMaxInJaggedArray(array)
    SET max TO smallest possible integer value (e.g., PHP_INT_MIN)
    
    FOR EACH element IN array DO
        IF element IS an array THEN
            // Recursively find the maximum in the nested array
            SET max TO maximum of (max, findMaxInJaggedArray(element))
        ELSE
            // Compare element with the current maximum
            SET max TO maximum of (max, element)
        END IF
    END FOR
    
    RETURN max
END FUNCTION

SET jaggedArray TO [
    1,
    [2, 3, [4, 5]],
    [6, [7, 8]],
    9
]

SET maxNumber TO findMaxInJaggedArray(jaggedArray)
PRINT "The maximum number in the jagged array is: " + maxNumber

END


*/ 




// ✅Coding challenge #44. Create a function to return the longest word(s) in a string



// Pseudo Code

/*
START

FUNCTION getLongestWords(string)
    // Split the string into words
    SET words TO split string by spaces
    
    // Initialize variables to store the longest words and their length
    INITIALIZE longestWords AS an empty array
    INITIALIZE maxLength TO 0
    
    FOR EACH word IN words DO
        // Trim any surrounding whitespace and ignore empty words
        SET word TO trim(word)
        IF length of word IS 0 THEN
            CONTINUE to the next iteration
        END IF
        
        // Get the length of the current word
        SET length TO length of word
        
        IF length > maxLength THEN
            // Update the longest words array with the current word
            SET longestWords TO [word]
            SET maxLength TO length
        ELSE IF length IS equal to maxLength THEN
            // Add the current word to the longest words array
            APPEND word TO longestWords
        END IF
    END FOR
    
    RETURN longestWords
END FUNCTION

SET text TO "Find the longest word in this string"

SET longestWords TO getLongestWords(text)
PRINT "The longest word(s): " + join(longestWords, ', ')

END


*/ 


// ✅Coding challenge #45. Create a function that will receive n as argument and return an array of n unique random numbers from 1 to n.




// Pseudo Code
/*
START

FUNCTION generateUniqueRandomNumbers(n)
    // Generate an array with numbers from 1 to n
    SET numbers TO array from 1 to n
    
    // Shuffle the array to randomize the order
    SHUFFLE numbers
    
    RETURN numbers
END FUNCTION

SET n TO 10
SET uniqueRandomNumbers TO generateUniqueRandomNumbers(n)
PRINT "Unique random numbers: " + join(uniqueRandomNumbers, ', ')

END


*/ 


// Coding challenge #46. Find the frequency of characters inside a string. Return the result as an array of objects. Each object has 2 fields: character and number of occurrences.




// Pseudo Code

/*

START

FUNCTION getCharacterFrequency(string)
    INITIALIZE frequency AS an empty associative array
    
    FOR EACH character IN string DO
        IF character IS whitespace OR NOT a printable character THEN
            CONTINUE to the next iteration
        END IF
        
        IF character IS in frequency THEN
            INCREMENT frequency[character]
        ELSE
            SET frequency[character] TO 1
        END IF
    END FOR
    
    INITIALIZE result AS an empty array
    
    FOR EACH character, count IN frequency DO
        CREATE an object with fields:
            character = character
            number_of_occurrences = count
        APPEND object TO result
    END FOR
    
    RETURN result
END FUNCTION

SET text TO "hello world"
SET frequencyArray TO getCharacterFrequency(text)

// Display the result
PRINT "Character frequencies:"
FOR EACH item IN frequencyArray DO
    PRINT "Character: " + item.character + ", Number of occurrences: " + item.number_of_occurrences
END FOR

END


*/ 

//✅ Coding challenge #47. Calculate Fibonacci(500) with high precision (all decimals)


// Pseudo Code

/*
START

FUNCTION fibonacci(n)
    // Handle base cases
    IF n IS 0 THEN
        RETURN '0'
    END IF
    
    IF n IS 1 THEN
        RETURN '1'
    END IF
    
    // Initialize first two Fibonacci numbers
    SET a TO '0'
    SET b TO '1'
    
    // Calculate Fibonacci using iteration
    FOR i FROM 2 TO n DO
        SET c TO the sum of a and b (using arbitrary-precision arithmetic)
        SET a TO b
        SET b TO c
    END FOR
    
    RETURN b
END FUNCTION

SET n TO 500
SET fibNumber TO fibonacci(n)
PRINT "Fibonacci(n) is: " + fibNumber

END


*/ 


// ✅Coding challenge #48. Calculate 70! with high precision (all digits)

/*
To calculate the factorial of 70 (70!) with high precision in PHP, you need to use an arbitrary-precision arithmetic library, as factorials grow extremely large very quickly. PHP's BCMath or GMP libraries are suitable for this purpose.
*/ 




// Pseudo Code

/*
START

FUNCTION factorial(n)
    IF n IS 0 OR n IS 1 THEN
        RETURN '1'
    END IF
    
    INITIALIZE result AS '1'
    
    FOR i FROM 2 TO n DO
        SET result TO result * i (using arbitrary-precision arithmetic)
    END FOR
    
    RETURN result
END FUNCTION

SET n TO 70
SET factorialResult TO factorial(n)
PRINT "Factorial(n) is: " + factorialResult

END



*/
