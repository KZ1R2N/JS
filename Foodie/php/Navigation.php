<nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="">Foodie</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="logged-home.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="food.php">Foods</a></li>
            <li class="nav-item"><a class="nav-link" href="">Favourites</a></li>
            <li class="nav-item">
                <div class="btn-group drop-a">
                    <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <a class="nav-link" style="padding: 0px 3px; display:inline;" href="">My Profile</a></button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li class="dropdown-item-text opacity-50"><small><?= $user_value['email']; ?></small></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="account.php">View Profile</a></li>
                        <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>