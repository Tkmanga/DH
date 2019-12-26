
console.log("hello world");

var number = 5; // in-line comment

/* this is a multi-line
comment */

 /*
Data types:
undefined algo que no se definio aun solo se dejo el nombre de la variable
null,
boolean,
string,
symbol is an inmmutable primitive value that is unique
number
and object can store a lot of diferent key values pairs
 */

//There are 3 ways to declare a variable in javascript


var myName = "Beau"
myName = 8
// var  is for all program and let is for a limit scope of the program, const never change is "constant"
let ourName = "freeCodeCamp"
const pi = 3.14
// the diference between declare variable and asing variable
// declare
var a;
//console.log(a)
//  declare and assignment
var b = 2;
// assignment 7 to a
a = 7;
// assignment the contents of a to b
b = a
//console.log(a)

var a = 9;

var x = 5;
var y = 10;
var z = "I am a";

x = x+1;
y = y+5;
z = z+" String!";

//javascript is case-sensitive so
//this variables
var studlyCapVar; // is not the same STUDLYCAPVAR="HI";
var properCamelCase;
var titleCaseOver;
// shuld't asssignments
studlyCapVar = 10;
properCamelCase = "A String";
titleCaseOver = 9000;

/*adding numbers */
var sum = 10 + 10;
//console.log(sum);

/*Subtracting numbers*/
var difference = 45 - 33;

/*Multiplying numbers*/
var product = 8 * 10;

/*Dividing numbers*/
var dividing = 2 / 6;

/*Incrementing numbers*/
var myVar = 87;

// only change code below this line
myVar++;

/*decremeting a number*/
var myVar = 11;
myVar--;

/*decimal numbers*/
var ourDecimal = 5.7;
var myDecimal = 0.009;

/*multiply decimals  */
var product = 2.0 * 2.5;

/*divide decimal numbers*/

var quotient = 4.4 / 2.0;

/*Finding a remainder*/
var remainder;
remainder = 11 % 3;
//console.log(remainder);

/*Compound assignment with augmented addition*/

var a = 3;
var b = 17;
var c = 12;

// only modify code below this line
a += 12;
b += 9;
c += 7;

/*compound assignment with augmented subtraction */
var a = 3;
var b = 17;
var c = 12;

// only modify code below this line

a -= 12;
b -= 9;
c -= 7;

/*compound assignment with augmented multiplication */
var a = 3;
var b = 17;
var c = 12;

// only modify code below this line

a *= 12;
b *= 9;
c *= 7;

/*compound assignment with augmented division */
var a = 3;
var b = 17;
var c = 12;

// only modify code below this line

a /= 12;
b /= 9;
c /= 7;

/*declare string variable*/

var firstName = "Alan";
var lastName = "Turing";
// only change code below this lane

var myFirstName = "Beau";
var myLastName = "Carnes";


/*Escaping literal quotes in strings*/
var myString = "Im a \"String inside of a \" lala ";

/*Quoting Strings with single quotes */
var myString = "Im a 'String inside of a ' lala ";

/*
You can use quotes inside a string, as long as they don't match the quotes surrounding the string

use a \ before a " " if you need to ignore de ending of a string like the firts myString

*/
//console.log(myString);

/*Escape squences in string */
/*
Code  Output
\'    single quote
\"    double quote
\\    backslash
\n    newline
\r    carriage return
\t    tab
\b    backspace
\f    form feed
*/

var myStr = "FirsLine\n\t\\SecondLine\n\t\t\\ThirdLine";
//console.log(myStr);

/*Concatenating Strings with plus operator*/

var ourStr = "I come first. "+ "I come second.";

var myStr = "This is the start. "+ "This is the end.";
//console.log(myStr);

/*Concatenating strings with plus equals operator*/

//example

var ourStr = "I come first. ";
ourStr += "I come second.";

// Only change code below this line

var myStr = "This is the first sentence. ";
myStr += "This is the second sentence.";

// console.log(myStr);

// Constructing String with variables

ourName = "freeCodeCamp";
var ourStr = "Hello, our name is "+ ourName + ", how are you?";

var myName = "Beau";
var myStr = "My name is "+myName+" and I am well!";
//console.log(myStr);

//Appending Variables to String
var anAdjective = "awesome!";
var ourStr = "freeCodeCamp is ";
ourStr += anAdjective;

//Only change code below this line

var someAdjective = "worthwhile";
var myStr = "Learning to code is ";
myStr += someAdjective;

//Find Length of string

//example

var firstNameLength = 0;
var firstName = "Ada";
firstNameLength = firstName.length;

//setup
var lastNameLength =0;
var lastName = "Lovelace";

//only change code below this line

lastNameLength = lastName.length;
//console.log(lastNameLength);

//Bracket notation to find first character in string

 var firstLetterOfFirstName = "";
 var firstName = "Ada";
 firstLetterOfFirstName = firstName[0];

 // setup
var firstLetterOfLastName = "";
var lastName = "Lovelace";

//Only change code below this line
firstLetterOfLastName = lastName[1];
//console.log(firstLetterOfLastName);

//String Immutability

var myStr = "Jello world";

//Only change code below this line
// the strings are immutable the code below this line doesn't work
// myStr[0] = "H";

var myStr = "Hello world";
console.log(myStr);

//Bracket notation to find nth character in string

var firstName = "Ada";
var secondLetterOfFirstName = firstName[1];

//setup
var lastName = "Lovelace";

//Only change code below this line
var thirdLetterOfLastName = lastName[2];

//Bracket notation to find last character in string

var firstName = "Ada";
var lastLetterOfFirstName = firstName[firstName.length-1];

//setup
var lastName = "Lovelace";

//Only change code below this line
var lastLetterOfLastName = lastName; 
