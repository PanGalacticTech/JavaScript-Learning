
// First JavaScript Code
//console.log('Hello Pbody');

// names cannot be reserved keywords
// Cannot start with a number
// Cannot contain a space or hyphen
// Case Sensitive

/*
let name = 'Mosh';  // string literal
let age = 29.01;      // number literal
let isApproved = true;  // Boolean literall=
let firstName = undefined;
let selectedColour = null;
*/

// Assinging a "Person" as an Object:

let person = {
name: 'Leon',
age: 29
};  // Object literal

console.log(name);

console.log(person);



// Dot Notation:

person.name = 'Jeff';

console.log(person.name);


// Bracket Noation:

let selection = 'age';    // This could be changed in runtime
                          // to select different variable for the next line

person[selection] = 'Alice';

console.log(person['name']);



console.log(person);


// Using ARRAYs

let selectedColors = ['red', 'blue'];  // array Literal

console.log(selectedColors);
console.log(selectedColors[0]);

selectedColors[2] = '1';

console.log(selectedColors.length);












// Allowed
// let firstName, lastname;
//  let givenName = 'Leon', sirName;

// Better
let userName = 'PanGalactic';
let nickName = 'Leon';


let interestRate = 0.3;

interestRate = 1;

console.log(interestRate);






// Types:
//Primitives:

// String
// number
// Boolean
// Undefined
// null



// Reference Types

// Objects
// Array
// Functions
