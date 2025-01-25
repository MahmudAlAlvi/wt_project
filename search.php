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

        // Search users
        $sql = "SELECT * FROM login WHERE username LIKE '%$searchQuery%'";
        $result = mysqli_query($con, $sql);
        $searchResults['users'] = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // Search events
        $sql = "SELECT * FROM events WHERE event_name LIKE '%$searchQuery%'";
        $result = mysqli_query($con, $sql);
        $searchResults['events'] = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // Search payments
        $sql = "SELECT * FROM payment WHERE bkash_number LIKE '%$searchQuery%'";
        $result = mysqli_query($con, $sql);
        $searchResults['payments'] = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // Search sponsorships
        $sql = "SELECT * FROM sponsorship_details WHERE company_name LIKE '%$searchQuery%'";
        $result = mysqli_query($con, $sql);
        $searchResults['sponsorships'] = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // Search agenda
        $sql = "SELECT * FROM agenda WHERE agenda_item LIKE '%$searchQuery%'";
        $result = mysqli_query($con, $sql);
        $searchResults['agenda'] = mysqli_fetch_all($result, MYSQLI_ASSOC);

        mysqli_close($con); // Close the database connection
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Search</title>
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
  <h2>Search</h2>
  <form method="post" action="">
    <input type="text" name="search_query" placeholder="Enter keyword..." value="<?php echo $searchQuery; ?>" required>
    <button type="submit">Search</button>
  </form>

  <?php if (!empty($searchQuery)): ?>
    <div class="table-container">
      <?php if (!empty($searchResults['users'])): ?>
        <h3>User Details</h3>
        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Username</th>
              <th>Password</th>
              <th>Email</th>
              <th>User Type</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($searchResults['users'] as $index => $user): ?>
              <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo htmlspecialchars($user['username']); ?></td>
                <td><?php echo htmlspecialchars($user['PASSWORD']); ?></td>
                <td><?php echo htmlspecialchars($user['email']); ?></td>
                <td><?php echo htmlspecialchars($user['usertype']); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php endif; ?>

      <?php if (!empty($searchResults['events'])): ?>
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
              <th>Amount</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($searchResults['events'] as $index => $event): ?>
              <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo htmlspecialchars($event['event_name']); ?></td>
                <td><?php echo htmlspecialchars($event['event_date']); ?></td>
                <td><?php echo htmlspecialchars($event['event_time']); ?></td>
                <td><?php echo htmlspecialchars($event['event_place']); ?></td>
                <td><?php echo htmlspecialchars($event['event_type']); ?></td>
                <td><?php echo htmlspecialchars($event['amount']); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php endif; ?>

      <?php if (!empty($searchResults['payments'])): ?>
        <h3>Payment Details</h3>
        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Event Name</th>
              <th>Amount</th>
              <th>Bkash Number</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($searchResults['payments'] as $index => $payment): ?>
              <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo htmlspecialchars($payment['event_name']); ?></td>
                <td><?php echo htmlspecialchars($payment['amount']); ?></td>
                <td><?php echo htmlspecialchars($payment['bkash_number']); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php endif; ?>

      <?php if (!empty($searchResults['sponsorships'])): ?>
        <h3>Sponsorship Details</h3>
        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Company Name</th>
              <th>Address</th>
              <th>Details</th>
              <th>Reference</th>
              <th>Contact Number</th>
              <th>Sponsor For</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($searchResults['sponsorships'] as $index => $sponsorship): ?>
              <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo htmlspecialchars($sponsorship['company_name']); ?></td>
                <td><?php echo htmlspecialchars($sponsorship['address']); ?></td>
                <td><?php echo htmlspecialchars($sponsorship['details']); ?></td>
                <td><?php echo htmlspecialchars($sponsorship['reference']); ?></td>
                <td><?php echo htmlspecialchars($sponsorship['contact_number']); ?></td>
                <td><?php echo htmlspecialchars($sponsorship['sponsor_for']); ?></td>
                <td><?php echo htmlspecialchars($sponsorship['email']); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php endif; ?>

      <?php if (!empty($searchResults['agenda'])): ?>
        <h3>Agenda Details</h3>
        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Agenda Item</th>
              <th>Time</th>
              <th>Description</th>
              <th>Created At</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($searchResults['agenda'] as $index => $agenda): ?>
              <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo htmlspecialchars($agenda['agenda_item']); ?></td>
                <td><?php echo htmlspecialchars($agenda['agenda_time']); ?></td>
                <td><?php echo htmlspecialchars($agenda['description']); ?></td>
                <td><?php echo htmlspecialchars($agenda['created_at']); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <a href="dashboardcustomer.php" class="back">Back to Home</a>

</div>
</body>
</html>
