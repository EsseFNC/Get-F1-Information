/**
 * Checks if the start date is before the end date.
 *
 * @return {boolean} If the start date is before the end date.
 */
function validateDates() {
    var startDate = document.getElementById("start_date").value;
    var endDate = document.getElementById("end_date").value;

    if (startDate > endDate) {
        alert("Start date must be before end date.");
        return false;
    }
    
    return true;
}