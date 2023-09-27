<?php
require_once('database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foodie</title>
  <!--Google Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  <!--Font Awesome-->
  <script src="https://kit.fontawesome.com/d4c58442e3.js" crossorigin="anonymous"></script>
  <!--CSS-->
  <link rel="stylesheet" href="../css/home.css">
</head>

<body>
  <!--Header-->

  <section class="colored-section" id="title">
    <div class="container-fluid">

      <!--Navigation-->
      <?php
      require('Navigation.php');
      ?>

      <!--Title-->

      <div class="row">
        <div class="col-lg-6">
          <h1>Foodies' Time !</h1>
          <div>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Find Your Favourite Restaurant or Food" aria-label="Search">
              <button class="btn btn-dark" type="submit">Search</button>
            </form>
          </div>
        </div>

        <div class="col-lg-6 text-center align-middle">
          <img class="title-image align-middle" href="" src="../image/cover.png" alt="">
        </div>

      </div>

    </div>
  </section>

  <!--Features-->

  <section id="features">
    <!-- Part1 -->
    <?php
    $query = "SELECT * FROM `food_info` WHERE `catagory`='Appetizers' ORDER BY`rating` DESC";
    $result = mysqli_query($connect, $query);
    ?>
    <section class="mb-5">
      <div class="part d-flex my-3">
        <h2 class="fw-bold text-start px-2"> Appetizers</h2>
        <img src="../image/a.png" width="5%" alt="">
      </div>
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="cards-wrapper">
              <?php
              for ($i = 0; $i < 3; $i++) {
                $row = mysqli_fetch_assoc($result);
                if ($row == null) {
                  break;
                }
              ?>
                <div class="card">
                  <div class="img-size"><img src="../image/<?= $row['image']; ?>" class="img-top" alt="..."></div>
                  <div class="card-body">
                    <h5 class="card-title fw-bold"><?= $row['food_name']; ?></h5>
                    <div class=" text-start">
                      <p class="mb-0"><?= $row['restaurant_name']; ?></p>
                      <small class="text-secondary">Price: Tk. <?= $row['price']; ?> </small><br>
                      <small class="text-secondary">Rating: </small>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper">
              <?php
              for ($i = 3; $i < 6; $i++) {
                $row = mysqli_fetch_assoc($result);
                if ($row == null) {
                  break;
                }
              ?>
                <div class="card ">
                  <div class="img-size"><img src="../image/<?= $row['image']; ?>" class="img-top" alt="..."></div>
                  <div class="card-body">
                    <h5 class="card-title fw-bold"><?= $row['food_name']; ?></h5>
                    <div class=" text-start">
                      <p class="mb-0"><?= $row['restaurant_name']; ?></p>
                      <small class="text-secondary">Price: Tk. <?= $row['price']; ?></small><br>
                      <small class="text-secondary">Rating: </small>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
          <?php
          if(mysqli_num_rows($result)>3){
          ?>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <?php
              }
              ?>
        </div>

    </section>
    <hr>
    <!-- Part2 -->
    <?php
    $query = "SELECT * FROM `food_info` WHERE `catagory`='Main Course' ORDER BY`rating` DESC";
    $result = mysqli_query($connect, $query);
    ?>
    <section class="mt-5">
      <div class="part d-flex my-3">
        <h2 class="fw-bold text-start px-2"> Main Course</h2>
        <img src="../image/b.png" width="5%" alt="">
      </div>
      <div id="carouselExample1Indicators" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="cards-wrapper">
              <?php
              for ($i = 0; $i < 3; $i++) {
                $row = mysqli_fetch_assoc($result);
                if ($row == null) {
                  break;
                }
              ?>
                <div class="card">
                  <div class="img-size"><img src="../image/<?= $row['image']; ?>" class="img-top" alt="..."></div>
                  <div class="card-body">
                    <h5 class="card-title fw-bold"><?= $row['food_name']; ?></h5>
                    <div class=" text-start">
                      <p class="mb-0"><?= $row['restaurant_name']; ?></p>
                      <small class="text-secondary">Price: Tk. <?= $row['price']; ?></small><br>
                      <small class="text-secondary">Rating: </small>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper">
              <?php
              for ($i = 3; $i < 6; $i++) {
                $row = mysqli_fetch_assoc($result);
                if ($row == null) {
                  break;
                }
              ?>
                <div class="card">
                  <div class="img-size"><img src="../image/<?= $row['image']; ?>" class="img-top" alt="..."></div>
                  <div class="card-body">
                    <h5 class="card-title fw-bold"><?= $row['food_name']; ?></h5>
                    <div class=" text-start">
                      <p class="mb-0"><?= $row['restaurant_name']; ?></p>
                      <small class="text-secondary">Price: Tk. <?= $row['price']; ?></small><br>
                      <small class="text-secondary">Rating: </small>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
          <?php
          if(mysqli_num_rows($result)>3){
          ?>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1Indicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1Indicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <?php
              }
              ?>
        </div>
    </section>
    <hr>
    <!-- Part3 -->
    <?php
    $query = "SELECT * FROM `food_info` WHERE `catagory`='Pizza' ORDER BY`rating` DESC";
    $result = mysqli_query($connect, $query);
    ?>
    <section class="mt-5">
      <div class="part d-flex my-3">
        <h2 class="fw-bold text-start px-1">Pizza</h2>
        <img src="../image/c.png" width="5%" alt="">
      </div>
      <div id="carouselExample2Indicators" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="cards-wrapper">
              <?php
              for ($i = 0; $i < 3; $i++) {
                $row = mysqli_fetch_assoc($result);
                if ($row == null) {
                  break;
                }
              ?>
                <div class="card">
                  <div class="img-size"><img src="../image/<?= $row['image']; ?>" class="img-top" alt="..."></div>
                  <div class="card-body">
                    <h5 class="card-title fw-bold"><?= $row['food_name']; ?></h5>
                    <div class=" text-start">
                      <p class="mb-0"><?= $row['restaurant_name']; ?></p>
                      <small class="text-secondary">Price: Tk. <?= $row['price']; ?></small><br>
                      <small class="text-secondary">Rating: </small>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper">
              <?php
              for ($i = 3; $i < 6; $i++) {
                $row = mysqli_fetch_assoc($result);
                if ($row == null) {
                  break;
                }
              ?>
                <div class="card">
                  <div class="img-size"><img src="../image/<?= $row['image']; ?>" class="img-top" alt="..."></div>
                  <div class="card-body">
                    <h5 class="card-title fw-bold"><?= $row['food_name']; ?></h5>
                    <div class=" text-start">
                      <p class="mb-0"><?= $row['restaurant_name']; ?></p>
                      <small class="text-secondary">Price: Tk. <?= $row['price']; ?></small><br>
                      <small class="text-secondary">Rating: </small>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
          <?php
          if(mysqli_num_rows($result)>3){
          ?>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2Indicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2Indicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <?php
          }
          ?>
        </div>
    </section>
  </section>


  <!--Footer-->

  <section class="white-section" id="footer">
    <?php
    require('footer.php');
    ?>
  </section>
</body>

</html>