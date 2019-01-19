<?php

// Koneksi dengan mysql
$conn = mysqli_connect("localhost", "root","", "hobiDB");

// query mysql
$query = "SELECT persons.person_id, persons.name, GROUP_CONCAT(hobbies.name) AS person_hobbies, COUNT(hobbies.person_id) AS jumlah_hobbie FROM persons INNER JOIN hobbies ON persons.person_id = hobbies.person_id GROUP BY person_id";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Nomer 7</title>

	<!-- CSS Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>

	<h1>HOBBIES</h1>
	<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">NAME</th>
	      <th scope="col">CATEGORY ID</th>
	      <th scope="col"> Jumlah Hobbie</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php while($row = mysqli_fetch_assoc($result)) : ?>
	    <tr>
	      <th scope="row"><?= $row["person_id"]; ?></th>
	      <td><?= $row["name"]; ?></td>
	      <td><?= $row["person_hobbies"] ?></td>
	      <td><?= $row["jumlah_hobbie"] ?></td>
	    </tr>
		<?php endwhile; ?>
	  </tbody>
	</table>

<!-- Javascript Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<!-- Javascript JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Javascript Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
</body>
</html>