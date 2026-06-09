<?php
session_start();
include "db.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM items ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<link rel="stylesheet" href="style.css">

<div class="container" style="width:90%;">

<h2>Items List</h2>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Description</th>
<th>Status</th>
<th>Location</th>
<th>Date</th>
<th>Contact</th>
<th>Image</th>
<th>Claim</th>
<th>Approval</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['item_name']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['status']; ?></td>
<td><?php echo $row['location']; ?></td>
<td><?php echo $row['report_date']; ?></td>
<td><?php echo $row['contact']; ?></td>

<td>
<?php if ($row['image']) { ?>
<img src="uploads/<?php echo $row['image']; ?>" width="50">
<?php } ?>
</td>

<td>
<?php if ($row['status_action'] != "Claimed") { ?>
<a href="claim.php?id=<?php echo $row['id']; ?>">Claim</a>
<?php } else { echo $row['claimed_by']; } ?>
</td>

<td>
<?php echo $row['status_approval']; ?>
<a href="approve.php?id=<?php echo $row['id']; ?>">Approve</a>
</td>

</tr>

<?php } ?>

</table>

</div>