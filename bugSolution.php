function foo(a, b) {
  if (a === 0 && b === 0) {
    return "Both inputs are zero"; // Or throw an exception
  } elseif (a === 0) {
    return 0;
  }
  return a + b;
}

//Example of improved handling
echo foo(0,0); //Returns "Both inputs are zero"
echo foo(1,1); // Returns 2 (Correct)
echo foo(0,5); //Returns 5 (Correct)
