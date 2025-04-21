<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Data Entry</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        td, th {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 5px;
            margin: 5px 0;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Restaurant Data Entry Form</h2>

<form id="restaurantForm">
    <table>
        <tr>
            <th>Restaurant Name</th>
            <td><input type="text" id="restaurantName" required></td>
        </tr>
        <tr>
            <th>Location</th>
            <td><input type="text" id="location" required></td>
        </tr>
        <tr>
            <th>Cuisine Type</th>
            <td><input type="text" id="cuisine" required></td>
        </tr>
        <tr>
            <th>Rating</th>
            <td><input type="number" id="rating" min="1" max="5" required></td>
        </tr>
        <tr>
            <th>Comments</th>
            <td><textarea id="comments" rows="4" required></textarea></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <input type="submit" value="Submit Data">
            </td>
        </tr>
    </table>
</form>

<div class="result">
    <h3>Entered Data:</h3>
    <p id="resultText"></p>
</div>

<script>
    // Create Activity Class to manage form submission and events
    class Activity {
        constructor(formId, resultTextId) {
            this.form = document.getElementById(formId);
            this.resultText = document.getElementById(resultTextId);

            // Attach submit event to form
            this.form.addEventListener('submit', (e) => this.handleSubmit(e));
        }

        // Handle form submission
        handleSubmit(e) {
            e.preventDefault();  // Prevent default form submission

            // Get input values
            let restaurantName = document.getElementById("restaurantName").value;
            let location = document.getElementById("location").value;
            let cuisine = document.getElementById("cuisine").value;
            let rating = document.getElementById("rating").value;
            let comments = document.getElementById("comments").value;

            // Display the result
            this.displayResult(restaurantName, location, cuisine, rating, comments);
        }

        // Display entered data in result section
        displayResult(restaurantName, location, cuisine, rating, comments) {
            this.resultText.innerHTML = `
                <strong>Restaurant Name:</strong> ${restaurantName} <br>
                <strong>Location:</strong> ${location} <br>
                <strong>Cuisine Type:</strong> ${cuisine} <br>
                <strong>Rating:</strong> ${rating} <br>
                <strong>Comments:</strong> ${comments}
            `;
        }
    }

    // Initialize Activity Class
    new Activity('restaurantForm', 'resultText');
</script>

</body>
</html>

<!-- 

Design restaurant data entry form using Table Layout and show different
events using activity class. -->
