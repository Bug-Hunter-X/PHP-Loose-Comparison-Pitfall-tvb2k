function foo(a, b) {
  if (a === b) {
    return true;
  } else {
    return false;
  }
}

//This function will always return false when it is given the same value for a and b because of the loose comparison. To solve this, use strict comparison instead.