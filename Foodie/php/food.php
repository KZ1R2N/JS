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
    <link rel="stylesheet" href="../css/food.css">
</head>

<body>
    <!--Header-->

    <section class="colored-section">
        <!--Navigation-->
        <?php
        require('Navigation.php');
        ?>
        </div>
    </section>
    <section id="filter-section">
        <div class="search">
            <form action="" class="search-bar">
                <input class="form-control me-2" type="search" placeholder="find your favourite food..." aria-label="Search">
                <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass fa-lg p-0"></i></button>
            </form>
        </div>
        <div>
            <form action="">
                <div class="select">
                    <div class="row">
                        <div class=" btn-group col-lg-6 col-sm-12">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                <i class="fa-solid fa-sort mx-2"></i>Sort By
                            </button>

                            <ul class="sort dropdown-menu dropdown-menu-dark">
                                <li><a><input class="dropdown-item" type="submit" name="rankHigh" value="Ranking High to Low"></a></li>
                                <li><a><input class="dropdown-item" type="submit" name="rankLow" value="Ranking Low to High"></a></li>
                                <li><a><input class="dropdown-item" type="submit" name="priceHigh" value="Price High to Low"></a></li>
                                <li><a><input class="dropdown-item" type="submit" name="priceHigh" value="Price Low to High"></a></li>
                            </ul>
                        </div>

                        <div class="btn-group col-lg-6 col-sm-12">
                            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i class="fa-solid fa-filter mx-2"></i>Filter</button>

                            <div class="offcanvas offcanvas-top text-bg-dark" data-bs-backdrop="static" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                <div class="offcanvas-header">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <?php
                                    require_once("filter.php");
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

<!-- One -->
    <section class="container">
    <div class="d-inline-flex p-2 px-4 food-title"><h1>Pizza</h1></div>
        
        <div class="d-flex flex-wrap justify-content-start box m-auto">
            <?php
            $query = "SELECT * FROM `food_info` WHERE `type`='Pizza' ORDER BY`rating` DESC";
            $result = mysqli_query($connect, $query);
            $count = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result)) {
                $type = $row['type'];
            ?>
                <div class="card m-3">
                    <?php
                    $data = $row['food_id'];
                    $input = ($data * 123456789);
                    $encrypt = base64_encode($input);
                    ?>
                    <a class="p-0 m-0" href="food-detail.php?id=<?= $encrypt; ?>">
                        <div class="img-size"><img src="../image/<?= $row['image']; ?>" class="img-top" alt=""></div>
                    </a>
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
            <input type="hidden" id="rowVal-<?= $type; ?>" value="<?= $count; ?>">
            <?php
            if ($count > 3) {
            ?>
                
                <div id="load-<?= $type; ?>" class="load mx-auto mt-4"><button class="btn px-4 py-2" type="button">View All</button></div>
                <script>
                    target = document.getElementById('rowVal-<?= $type; ?>');

                    loadMorebth = document.querySelector('#load-<?= $type; ?>');
                    currentItem = target.value;

                    loadMorebth.onclick = () => {
                        boxes = [...document.querySelectorAll('.container .box .card')];
                        for (i = 3; i < currentItem; i++) {
                            boxes[i].style.display = 'flex';
                        }
                        //currentItem += 3;
                        loadMorebth.style.display = 'none';
                    }
                </script>
            <?php
            }
            ?>
    </section>

    <!--Footer-->

    <section class="white-section" id="footer">
        <?php
        require('footer.php');
        ?>
    </section>
</body>

</html>