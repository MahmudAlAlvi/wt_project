<?php
require_once('../model/userModel.php');

// Initialize variables
$searchQuery = '';
$searchResults = [];

// Process the search request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchQuery = htmlspecialchars(trim($_POST['search_query']));

    if (!empty($searchQuery)) {
        $con = dbConnection();

        // Search events
        $sql = "SELECT * FROM events WHERE event_name LIKE '%$searchQuery%'";
        $result = mysqli_query($con, $sql);
        $searchResults = mysqli_fetch_all($result, MYSQLI_ASSOC);

        mysqli_close($con); // Close the database connection
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Search Event</title>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}
.header {
  background-color: red;
  color: white;
  text-align: center;
  padding: 10px 0;
}
.content {
  padding: 20px;
  text-align: center;
}
form {
  margin: 20px auto;
  max-width: 500px;
  text-align: center;
}
form input, form button {
  padding: 10px;
  margin: 5px;
  border: 1px solid gray;
  border-radius: 5px;
  font-size: 16px;
}
form button {
  background-color: red;
  color: white;
  cursor: pointer;
}
form button:hover {
  background-color: darkred;
}
.table-container {
  margin: 20px auto;
  max-width: 800px;
  overflow-x: auto;
}
table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}
table th, table td {
  padding: 10px;
  text-align: left;
  border: 1px solid gray;
}
table th {
  background-color: #f4f4f4;
}
table tr:nth-child(even) {
  background-color: #f9f9f9;
}
.back {
  display: inline-block;
  margin-top: 20px;
  padding: 10px 20px;
  background-color: red;
  color: white;
  text-decoration: none;
  border-radius: 5px;
}
.back:hover {
  background-color: darkred;
}
</style>
</head>
<body>
<div class="header">
  <h1>JJARS EVENT Management Company</h1>
</div>

<div class="content">
  <h2>Search Event</h2>
  <form method="post" action="">
    <input type="text" name="search_query" placeholder="Enter event name..." value="<?php echo $searchQuery; ?>" required>
    <button type="submit">Search</button>
  </form>

  <?php if (!empty($searchQuery) && !empty($searchResults)): ?>
    <div class="table-container">
      <h3>Event Details</h3>
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Event Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Place</th>
            <th>Type</th>
           
          </tr>
        </thead>
        <tbody>
          <?php foreach ($searchResults as $index => $event): ?>
            <tr>
              <td><?php echo $index + 1; ?></td>
              <td><?php echo htmlspecialchars($event['event_name']); ?></td>
              <td><?php echo htmlspecialchars($event['event_date']); ?></td>
              <td><?php echo htmlspecialchars($event['event_time']); ?></td>
              <td><?php echo htmlspecialchars($event['event_place']); ?></td>
              <td><?php echo htmlspecialchars($event['event_type']); ?></td>
             
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  <?php endif; ?>

  <a href="customer_home.php" class="back">Back to Home</a>
</div>
</body>
</html>
