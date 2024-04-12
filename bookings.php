<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Real Estate Tour Booking</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Book a Tour</h1>

<div class="listing">
  <h2>Property Name</h2>
  <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  <p>Location: City, Country</p>
  <p>Date: <input type="date" id="tour-date"></p>
  <p>Time Slot: 
    <select id="time-slot">
      <option value="9:00 AM">9:00 AM</option>
      <option value="11:00 AM">11:00 AM</option>
      <option value="1:00 PM">1:00 PM</option>
    </select>
  </p>
  <button onclick="bookTour()">Book Tour</button>
  <p id="confirmation"></p>
</div>

<script>
function bookTour() {
  var date = document.getElementById("tour-date").value;
  var timeSlot = document.getElementById("time-slot").value;
  var confirmation = "Tour booked for " + date + " at " + timeSlot + ". Thank you!";
  document.getElementById("confirmation").innerHTML = confirmation;
}
</script>

</body>
</html>
