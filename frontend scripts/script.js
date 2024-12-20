// TODO: make function for loading form for:
// Driver - Car - Interval - Session - Race Control

function loadForm(choice) {
    switch (choice) {
        case "driver":
            loadDriverForm();
            break;
        
        case "car":
            loadCarForm();
            break;

        case "interval":
            loadIntervalForm();
            break;

        case "session":
            loadSessionForm();
            break;

        case "race_control":
            loadRaceControlForm();
            break;
    
        default:
            console.log("select a valid select");
            break;
    }
}

/**
 * Loads the driver form
 * It will contain:
 * - Drivere full name
 * - Car number
 */
function loadDriverForm() {
    form_content = "Full Name: <input type='text' name='driver_full_name'>";
    form_content += "<br><br>";
    form_content += "Car Number: <input type='number' value='1' name='car_number'>";
    form_content += "<br><br>"
    form_content += "<input type='submit' value='Process Data'>";

    document.getElementById("form_container").innerHTML = form_content;
}

/**
 * Loads the car form
 * It will contain:
 * - Car Number
 */
function loadCarForm() {
    form_content = "Car Number: <input type='number' value='1' name='car_number'>";
    form_content += "<br><br>";
    form_content += "<input type='submit' value='Process Data'>";

    document.getElementById("form_container").innerHTML = form_content;
}

/**
 * Loads the Interval form
 * It will contain:
 * - Car number
 */
function loadIntervalForm() {
    form_content = "Car Number: <input type='number' value='1' name='car_number'>";
    form_content += "<br><br>"
    form_content += "<input type='submit' value='Process Data'>";

    document.getElementById("form_container").innerHTML = form_content;
}

/**
 * Loads the session form.
 * A session refers to a distinct period of track activity during a Grand Prix
 * or testing weekend (practice, qualifying, sprint, race, ...)
 * It will contain:
 * - Country name
 * - Session name (practice 1, qualifying, race, ...)
 * - Year
 */
function loadSessionForm() {
    // TODO: change coutry name to circuit key (use select)
    form_content = "Country Name: <input type='text' name='country_name'>";
    form_content += "<br><br>";
    form_content += "Session Name: <input type='text' name='session_name'>";
    form_content += "<br><br>"
    form_content += "Year: <input type='number' value='2024' name='year'>";
    form_content += "<br><br>"
    form_content += "<input type='submit' value='Process Data'>";

    document.getElementById("form_container").innerHTML = form_content;
}

/**
 * Loads the race control form
 * Provides information about race control (racing incidents, flags, safety car, ...).
 * The user will be able to search for a certain race control during an interval of time
 * (ex. from 2023-01-01 to 2023-09-09)
 * It will contain:
 * - Car Number
 * - Type of race control (racing incidents, flags, safety car, ...)
 * - Start date
 * - End date
 */
function loadRaceControlForm() {
    form_content = "Car Number: <input type='number' value='1' name='car_number'>";
    form_content += "<br><br>";
    form_content += "Type of Race Control: <input type='text' name='race_control_type'>";
    form_content += "<br><br>"
    form_content += "Start Date: <input type='date' name='start_date'>";
    form_content += "<br><br>"
    form_content += "End Date: <input type='date' name='end_date'>";
    form_content += "<br><br>"
    form_content += "<input type='submit' value='Process Data' onclick='return validateDates();'>";

    document.getElementById("form_container").innerHTML = form_content;
}