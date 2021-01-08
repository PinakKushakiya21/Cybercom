var JohnMass = prompt("Enter mass in kg ");
var JohnHeight = prompt("Enter height in meter ");

var MarkMass = prompt("Enter mass in kg ");
var MarkHeight = prompt("Enter height in meter ");

var JohnBMI = JohnMass / (JohnHeight * JohnHeight);
var MarkBMI = MarkMass / (MarkHeight * MarkHeight);
console.log('John BMI is ' + JohnBMI);
console.log('Mark BMI is ' + MarkBMI);

var BMI = MarkBMI > JohnBMI 
console.log("Is Mark's BMI higher than John's BMI? "+ BMI);