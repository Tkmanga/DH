var count = 0;

function cc(card) {
  switch (card) {
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
      count++;
      break;
    case 10:
    case "J":
    case "Q":
    case "A":
      count--;
      break;
    default:

  }
  var holdbet = 'hold';
  if (count > 0) {
    holdbet = 'Bet';
  }
   return count + " "+ holdbet;
}

cc(2);cc(3);cc(10);cc('K');cc('A');
console.log(cc(4));
//OBJETCTs
var ourDog = {
  "name": "Camper",
  "legs": 4,
  "tails": 1,
  "friends": ["everything!"]
};

var myDog = {
  "name" : "Quincy",
  "legs" : 3,
  "tails" : 2,
  "friends" : []
};

// Accessing Object Properties with dot notation

//setup

var testObj = {
  "hat" : "ballcap",
  "shirt" : "jersey",
  "shoes" : "cleats"
};

var hatValue = testObj.hat;
var shirtValue = testObj.shirt;

//Accessing object properties with bracket notation

var testObj = {
  "an entree" : "hamburger",
  "my side" : "veggies",
  "the drink" : "water"
};

var entreeValue = testObj["an entree"];
var drinkValue = testObj["the drink"];

//Accessing object properties with variables

var testObj = {
  12: "Namath",
  16: "Montana",
  19: "Unitas"
};

var playerNumber = 16;
var player = testObj[playerNumber];

//Updating object properties

var ourDog = {
  "name": "Camper",
  "legs": 4,
  "tails": 1,
  "friends": ["everything!"]
};

ourDog.name="Happy Camper";

var myDog = {
  "name" : "Coder",
  "legs" : 4,
  "tails" : 1,
  "friends" : ["freeCodeCamp Campers"]
};

myDog.name = "Happy Coder";

// add new properties to an object
var ourDog = {
  "name": "Camper",
  "legs": 4,
  "tails": 1,
  "friends": ["everything!"]
};

ourDog.bark = "bow-wow";


var myDog = {
  "name" : "Happy Coder",
  "legs" : 4,
  "tails" : 1,
  "friends" : ["freeCodeCamp Campers"]
};

myDog['bark'] = "woof!";

//Delete properties from an object

//example

var ourDog = {
  "name": "Camper",
  "legs": 4,
  "tails": 1,
  "friends": ["everything!"],
  "bark": "bow-wow"
};


delete ourDog.bark;

var myDog = {
  "name" : "Happy Coder",
  "legs" : 4,
  "tails" : 1,
  "friends" : ["freeCodeCamp Campers"],
  "bark":"woof!"
};

delete myDog.tails;

//Using object for lookups

function phoneticLookup(val) {
  var result = "";

  //Only change code below this line

  var lookup = {
    "alpha": "Adams",
    "bravo": "Boston",
    "charlie":"Chicago",
    "delta":"Denver",
    "echo":"Easy",
    "foxtrot":"frank"
  };

  result = lookup[val];
  return result;
};

console.log(phoneticLookup("charlie"));

//Testing object for Properties
var myObj = {
  gift : "pony",
  pet: "kitten",
  bed: "sleigh"
};

function checkObj(checkProp) {
  if (myObj.hasOwnProperty(checkProp)) {
    return myObj[checkProp];
  }else {
    return "Not Found!";
  }

}
console.log(checkObj("hello"));

//Manipulating complex objects

var myMusic = [
  {
    "artist":"billy joel",
    "title":"piano man",
    "release_year": 1973,
    "formats" : [
      "cd",
      "8t",
      "lp"
    ],
    "gold":true
  },
  //add record here
  {
    "artist": "beau carnes",
    "title": "cereal man",
    "release_year":2003,
    "formats" : [
      "youtube video"
    ]
  }
]

//accessing nested objects

var myStorage = {
  "car" : {
    "inside": {
      "glove box": "maps",
      "passenger seat" : "crumbs"
    },
    "Outside": {
      "trunk":"jack"
    }
  }
};
var gloveBoxContents = myStorage.car.inside["glove box"];

console.log(gloveBoxContents);

// Accessing nested arrays

var myPlans = [
  {
    type : "flowers",
    list : [
      "rose",
      "tulip",
      "dandelion"
    ]
  },
  {
    type:"trees",
    list:[
      "fir",
      "pine",
      "birch"
    ]
  }
];

var secondTree = myPlans[1].list[1];

console.log(secondTree);

//record collection

var collection = {
  "2548": {
    "album": "Slippery When Wet",
    "artist": "Bon Jovi",
    "tracks":[
      "Let It Rock",
      "You Give Love a Bad Name "
    ]
  },
  "2468": {
    "album": "1999",
    "artist": "Prince",
    "tracks":[
      "1999",
      "Little Red Corvette"
    ]
  },
  "1245": {
    "album": "Robert Palmer",
    "tracks":[
    ]
  },
  "5439": {
    "album": "ABBA Gold"
  },
}
//keep a copy of the collection for tests
var collectionCopy = JSON.parse(JSON.stringify(collection));


function updateRecords(id, prop, value) {
  if (value === "") {
    delete collection[id][prop];
  } else if (prop === "tracks") {
    collection[id][prop] = collection[id][prop] || [];
    collection[id][prop].push(value);
  }else {
    collection[id][prop] = value;
  }
  return collection;

}
updateRecords(2468,"tranks","test");
console.log(updateRecords(5439,"artist","ABBA"));
