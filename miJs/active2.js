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
//console.log(minusSeven(10));

function timesFive(num) {
  return num * 5;
}
//console.log(timesFive(5));

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

//console.log(testStricNotEqual("17"));

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

//console.log(testGreaterThan(10));

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


//console.log(testGreaterOrEqual(10));

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

//console.log(testLessThan(10));

//comparison with the less thar or equal to operator

function testLessOrEqual(val) {
  if (val<=25) {
    return "smaller than or equal to 25";
  }
  if (val <= 55) {
    return "smaller than or equal to 55";
  }
  return "more than 55";
}

//console.log(testLessOrEqual(10));

//Comparisons with the logical and operator

function testLogicalAnd(val) {
  if (val <= 50 && val>=25) {
    return "yes";
  }
  return "no";
}
//console.log(testLogicalAnd(10));

//Comparisons with the logical or operator

function testLogicalOr(val) {
  if (val < 10 || val > 20) {
    return "Outside";
  }
  return "inside";
}
console.log(testLogicalOr(15));

// else statements

function testElse(val) {
  var result = "";
  if (val > 5) {
    result = "bigger than 5";
  }else{
    result = "5 or smaller";
  }
  return result;
}
//else if statements
function testElseIf(val) {
  if (val > 10) {
    return "greater than 10";
  } else if (val < 5) {
    return "smaller than 5";
  }else {
    return "between 5 and 10";
  }
}
// logical order in if else statements

function orderMyLogical(val) {
  if (val < 10) {
    return "less than 10";
  } else if (val < 5) {
    return "less than 5";
  }else {
    return "greater than or equal to 10";
  }
// is really important the order of the ifs and their values, if que ask first less than 10 y second less than 5 always the logic cut when less than 10 is ok
}

  console.log(orderMyLogical(4));


//chaining if else statements

function testSize(num) {

  if (num < 5) {
    return "tiny";
  } else if (num < 10) {
    return "small";
  } else if (num < 15) {
    return "medium";
  }else if (num < 20) {
    return "large";
  } else {
    return "huge";
  }
}
console.log(testSize(20));
/*
write chained if/else if statements to fulfill the following conditions:
num < 5 - return "tiny"
num < 10 - return "small"
num < 15 - return "medium"
num < 20 - return "large"
num >= 20 - return "huge"
*/

var names = ["Hole-in-one","Eagle","Birdie","Par","Bogey","Double Boegy","go home!"];

function golfScore(par,strokes) {
  if (strokes == 1) {
      return names[0];
  }else if (strokes <= par -2) {
    return names[1];
  }else if (strokes == par -1) {
    return names[2];
  }else if (strokes == par) {
    return names[3];
  }else if (stroke == par+1) {
    return names[4];
  }else if (stroke == par+2) {
    return names[5];
  }else if (stroke == par +3) {
    return names[6];
  }
}

function print(string) {
  return console.log(string);
}
//change these values to test
print(golfScore(5,4));

/*
strokes   return
1         "hole-in-one!"
<= par -2 "eage"
par -1    "birdie"
par       "par"
par+1     "bogey"
par+2     "double bogey"
>= par+3  "go home!"
*/

//switch statements

function caseInSwitch(val) {
  var answer = "";
switch (val) {
  case 1:
    answer = "alpha";
    break;
  case 2:
    answer = "beta";
    break;
  case 3:
    answer = "gamma";
    break;
  case 4:
    answer = "delta";
    break;
}
  return answer;
}
print(caseInSwitch(1));

/*
write a switch statement which test val and sets answer for the following conditions:
1-"alpha";
2-"beta";
3-"gamma";
4-"delta";
*/

// default option in switch statements

function switchOfStuff(val) {
  var answer = "";
  switch (val) {
    case "a":
      answer = "apple";
      break;
    case "b":
      answer = "bird";
      break;
    case "c":
      answer = "cat";
      break;
    default:
      answer = "stuff";
      break;
  }
  return answer;
}
print(switchOfStuff("d"));

// multiple identical options in switch statements

function sequentialSizes(val) {
  var answer = "";

  switch (val) {
    case 1:
    case 2:
    case 3:
      answer = "Low";
      break;
      case 4:
      case 5:
      case 6:
        answer = "Mid";
        break;
        case 7:
        case 8:
        case 9:
          answer = "High";
          break;
    default:
      break;
  }
  return answer;
}
print(sequentialSizes(9));

// replacing if else chains with switch

function chainToSwitch(val) {
  var answer = "";

  switch (val) {
    case "bob":
      answer = "Marley";
      break;
    case 42:
      answer = "The answer";
      break;
    case 1:
      answer = "There is no #1";
      break;
    case 99:
      answer = "Missed me by this much!";
      break;
    case 7:
      answer = "Ate Nine";
      break;
  }
  return answer;
}

//returning boolean values from functions
function isLess(a,b) {
  return a < b;
}

//returning early pattern from functions
//setup
function abTest(a,b) {
  //Only change code below this line
  return Math.round(Math.pow())
}
