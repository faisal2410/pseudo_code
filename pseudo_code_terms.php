<?php

/*
✅What is Pseudo Code?

Pseudo code is a way to describe how an algorithm works using plain, easy-to-understand language. It’s not written in any specific programming language but uses common keywords and instructions that mimic the structure of a real programming language. The goal is to represent the logic of your code in a simple, readable way.


✅Structure of Pseudo Code
Pseudo code uses common programming constructs like:

Variables: To store data.
Conditionals: To make decisions.
Loops: To repeat tasks.
Functions: To organize code into reusable blocks.


*/ 
/*
✅Tips for Writing Pseudo Code

Keep it simple: Focus on the logic, not the syntax.

Use plain language: Make it easy to understand for others (or yourself in the future).

Be consistent: Stick with similar terminology and structure.

Avoid language-specific details: Don't include syntax that is specific to a programming language (like {}, ;, etc.).


*/ 


/*
✅Writing Pseudo Code

✅ 1. Declare Variables
In pseudo code, you don’t have to worry about types (like int or string). You just declare and use them.


SET total = 0
SET name = "John"


✅2. Input/Output
This is how you represent getting input from the user or displaying output.


INPUT user_age
OUTPUT "Your age is", user_age


✅3. If-Then-Else (Conditionals)
These are used to make decisions. If a condition is true, do one thing; otherwise, do something else.


IF age >= 18 THEN
    OUTPUT "You are an adult."
ELSE
    OUTPUT "You are a minor."
ENDIF



✅4. Loops
You use loops to repeat certain steps.

✅While Loop: This loop keeps running as long as the condition is true.


WHILE i <= 5 DO
    OUTPUT i
    SET i = i + 1
ENDWHILE


✅For Loop: This loop runs for a fixed number of times.


FOR i = 1 TO 5 DO
    OUTPUT i
ENDFOR


✅5. Functions
Functions are reusable blocks of code that perform a specific task. In pseudo code, we define them as follows:


FUNCTION add_numbers(a, b)
    RETURN a + b
ENDFUNCTION


✅To call the function:


CALL add_numbers(3, 5)



✅Example 1: A Simple Program (Calculating the Sum of Two Numbers)

Let's write a pseudo code to ask the user for two numbers, then output their sum.


START
    INPUT first_number
    INPUT second_number
    SET sum = first_number + second_number
    OUTPUT "The sum is:", sum
END


✅Example 2: Guessing Game

Let's write a pseudo code for a simple guessing game where the user has to guess a number between 1 and 10.


START
    SET secret_number = 7
    SET guess = 0

    WHILE guess != secret_number DO
        INPUT guess
        IF guess < secret_number THEN
            OUTPUT "Too low!"
        ELSE IF guess > secret_number THEN
            OUTPUT "Too high!"
        ELSE
            OUTPUT "Correct!"
        ENDIF
    ENDWHILE
END





*/ 


// Here’s a list of common keywords/terms in pseudo code along with brief explanations:

//✅1.  START – Indicates the beginning of a pseudo code algorithm or process.

// Example: START the process



// ✅ 2. END – Marks the end of the pseudo code algorithm.

// Example: END the process


// ✅ 3. INPUT – Specifies data input that the algorithm will receive.

// Example: INPUT user_age



// ✅4. OUTPUT – Indicates data output that the algorithm will produce.

// Example: OUTPUT "The result is:", result



//✅ 5.IF-THEN-ELSE – Represents a conditional statement.

// Example:

// IF age >= 18 THEN
//     OUTPUT "You are an adult."
// ELSE
//     OUTPUT "You are a minor."
// ENDIF






// ✅6.WHILE – Used for a loop that continues as long as a condition is true.


// WHILE counter < 5
//     OUTPUT "Counter is:", counter
//     INCREMENT counter
// ENDWHILE



//✅ 7. FOR – Defines a loop that runs a specific number of times.


// FOR i = 1 TO 10
//     OUTPUT "Iteration:", i
// ENDFOR


//✅ 8.REPEAT-UNTIL – Represents a loop that runs until a certain condition becomes true.


// REPEAT
//     INPUT user_input
// UNTIL user_input == "exit"



// ✅9. FUNCTION – Defines a block of code that performs a specific task.


// FUNCTION calculate_sum(a, b)
//     RETURN a + b
// ENDFUNCTION


// ✅10. CALL – Invokes a function or procedure.

// Example: CALL calculate_sum(5, 10)



//✅ 11. RETURN – Provides the result from a function.

// Example: RETURN total_value



// ✅12. SET – Assigns a value to a variable.

// Example: SET total = 0



//✅ 13. BREAK – Exits a loop before the condition is met.


// FOR i = 1 TO 10
//     IF i == 5 THEN
//         BREAK
//     ENDFOR


// ✅14. CONTINUE – Skips the remaining code in the loop and jumps to the next iteration.


// FOR i = 1 TO 10
//     IF i == 5 THEN
//         CONTINUE
//     OUTPUT i
// ENDFOR



// ✅15. CASE – Represents a multi-way branch statement (similar to switch).


// CASE user_choice OF
//    1: OUTPUT "Choice is 1"
//    2: OUTPUT "Choice is 2"
//    OTHERWISE: OUTPUT "Invalid choice"
// ENDCASE




// These terms are foundational in designing algorithms and can be adapted depending on the language you are using.







