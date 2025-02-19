function foo(a, b) {
  if (a === 0) {
    return 0; // This line is problematic
  }
  return a + b;
}

//The bug is that the function does not explicitly handle the case where both 'a' and 'b' are 0.  This may return unexpected result which could cause issues further down the line.

//Example
echo foo(0,0); //Returns 0, expected behavior, but may not always be desired
echo foo(1,1); // Returns 2 (Correct)
echo foo(0,5); //Returns 5 (Correct)
