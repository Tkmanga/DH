//Global vs local scope in functions
var outerWear = "T-Shirt";

function myOutfit() {

  var outerWear = "Sweater";//here we changed the value
  return outerWear;
}
//console.log(myOutfit());
//console.log(outerWear); //this still'be the same

// return a value from a function with return

function minusSeven(num) {
  return num-7;
}
console.log(minusSeven(10));

function timesFive(num) {
  return num * 5;
}
console.log(timesFive(5));

//Understanding undefined value returned from a function

var sum = 0;
function addThree() {
  sum = sum + 3; // if you don't specify a return the result is just undefined
}
console.log();
function addFive() {
  sum += 5;
}

//Assignment with a returned value

var changed = 0;
function change(num) {
  return (num+5)/3;
}
changed = change(10);

var processed = 0;

function processArg(num) {
  return (num+3)/5;
}
processed = processArg(7);


// stand in FirsLine

function nextInLine(arr,item) {
  //you code here
  arr.push(item); //push is for put an item at last
  return arr.shift(); // shift remove and retorn the first item
}
var testArr = [1,2,3,4,5];

console.log("Before: "+ JSON.stringify(testArr));
console.log(nextInLine(testArr,6));
console.log("After: "+ JSON.stringify(testArr));

// boolean

function welcomeToBooleans() {
  return false; // or true
}

// use conditional logic with if statements

function ourTrueOrFalse(isItTrue) {
  if (isItTrue) {
    return "yes, it's true ";
  }
  return "no, it's false";
}

function trueOrFalse(wasThatTrue) {
  if (wasThatTrue) {
    return "yes, that was true";
  }
  return "no, that was false";
}

//console.log(trueOrFalse(true));

//comparison with the equality operator
//setup
function testEqual(val) {
  if (val == 12) { //change this line = is not the same that ==
    return "equal";
  }
  return "not equal";
}

//change this value to test
//console.log(testEqual(10));//

//comparison with the strict equality operator

//setup
function testStrict(val) {
  if (val === 12) { //change this line = is not the same that ==
    return "equal";
  }
  return "not equal";
}
//console.log(testEqual("12"));

/*
3 == 3   true
3 == '3' true

3 === 3   true
3 === '3' false
*/

//Practice comparing different values

function compareEquality(a,b) {
  if (a === b) {
    return "Equal";
  }
  return "Not Equal";
}

//console.log(compareEquality(10,"10"));

//comparison with the inequality operator

//setup
function testNotEqual(val) {
  if (val != 99 ) {
    return "Not equal";
  }
  return "equal";
}

console.log(testNotEqual(10));

// comparison with the strict inequality operator

//setup
function testStricNotEqual(val) {
  if (val !== 17) {
    //only change code above this line
    return "Not equal";
  }
  return "equal "
}

console.log(testStricNotEqual("17"));

// comparisons with the logical and operator
function testGreaterThan(val) {
  if (val>100) {
    return "over 100";
  }
  if (val>10) {
    return "over 10";
  }

  return "10 or under";
}

console.log(testGreaterThan(10));

// comparison with the greater than or equal to operator

function testGreaterOrEqual(val) {
  if (val>=20) {
    return "over 20";
  }
  if (val>=2) {
    return "over 2";
  }

  return "1 or under";
}


console.log(testGreaterOrEqual(10));

// comparison with the less than operator

function testLessThan(val) {
  if (val<25) {
    return "under 25";
  }
  if (val < 55) {
    return "under 55";
  }
  return "55 or over";
}

console.log(testLessThan(10));

//comparison with the less thar or equal to operator

function testLessOrEqual(val) {
  if (val<=25) {
    return "smaller than or equal to 25";
  }
  if (val < 55) {
    return "smaller than or equal to 55";
  }
  return "55 or over";
}

console.log(testLessOrEqual(10));
