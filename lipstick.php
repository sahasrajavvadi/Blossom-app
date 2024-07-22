<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src=https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/c/f/cfe1666CHAAA00000798_1.jpg class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title"> !Nykaa Cosmetics So Creme</h5>
              <p class="card-text">Price: Rs.1500</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="!Nykaa Cosmetics So Creme">
              <input type="hidden" name="Price" value="1500">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/3/6/3615390MARSX00000184-1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">MARS Won't Budge</h5>
              <p class="card-text">Price: Rs.1000</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="MARS Won't Budge">
              <input type="hidden" name="Price" value="1000">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/7/e/7e427c7NYSWISSB00119_01.jpg " class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Swiss Beauty Lipstick</h5>
              <p class="card-text">Price: Rs.500</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Swiss Beauty Lipstick">
              <input type="hidden" name="Price" value="500">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/c/9/c93e2608904330900004_2.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">kara lipgloss</h5>
              <p class="card-text">Price: Rs.950</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="kara lipgloss">
              <input type="hidden" name="Price" value="950">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>