# PHP Function Bug: Unexpected Zero Input Handling

This repository demonstrates a common, yet subtle, bug in PHP functions:  unexpected behavior when one or both inputs are zero.

The `foo()` function in `bug.php` contains the problematic code. The `bugSolution.php` file provides a corrected version.

## Bug Description
The original function does not handle the case where both inputs are zero, leading to an output that might not be expected. This inconsistency can cause issues later in the application's logic.

## Bug Solution
The solution is to add explicit error handling and/or clear handling of the zero-input scenarios for clarity and consistency. 
