<?php
$conn = mysqli_connect('localhost', 'root', '', 'book-db');
if (isset($_POST['search'])) {
  $searchKey = $_POST['search'];
  $sql = "select * from book where city like '%$searchKey%'";
} else
  $sql = "select * from book";
$all_product = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="style_2.css" />
</head>

<body>
  <div class="searchArea">
    <form action="" method="POST"> 
      <input type="text" class="destination" placeholder="Search Your Destination" name="search" />
      <br>
      <button class="search" name="submit">Search</button>
    </form>

  </div>
  <div class="extraAdds">
    <div class="adds">
      <div class="slider">
        <img id="slider-1" src="https://images.unsplash.com/photo-1606821061030-9eedf225857b?auto=format&fit=crop&q=80&w=1627&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
      </div>
    </div>
  </div>

  <div class="packages">
    <!-- cards -->
    <?php
    while ($row = mysqli_fetch_assoc($all_product)) {
    ?>
      <div class="card">
        <img class="pkgImg" src="<?php echo $row["image"]; ?>" alt="" />
        <div class="packageDetails">
          <span class="packageName"><?php echo $row["city"]; ?></span>
        </div>
        <div class="price-book">
          <p class="packagePrice">₹<?php echo $row["price"]; ?></p>
          <button class="bookingBtn">Book now</button>
        </div>
      </div>

    <?php
    }
    ?>
  </div>
  <script src="scriptSearching.js"></script>
</body>

</html>