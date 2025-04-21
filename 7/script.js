// 1. Simple alert
alert("Welcome! Let's explore some JavaScript basics!");

// 2. Calculate average number of weeks in a human lifetime
let years = 80;  // average lifespan
let weeksInYear = 52;
let totalWeeks = years * weeksInYear;

// 3. Store a string in a variable
let myName = "Alice";

// 4. Program that tells time of the day
let hour = new Date().getHours(); // gets current hour (0-23)
let message = "";

if (hour >= 5 && hour < 12) {
    message = "Good Morning!";
} else if (hour >= 12 && hour < 17) {
    message = "Good Afternoon!";
} else if (hour >= 17 && hour < 21) {
    message = "Good Evening!";
} else {
    message = "Good Night!";
}

// Output on webpage
document.write("<h2>JavaScript Outputs:</h2>");
document.write("<p>Average number of weeks in a human lifetime: " + totalWeeks + "</p>");
document.write("<p>Name stored in variable: " + myName + "</p>");
document.write("<p>Time-based message: " + message + "</p>");
