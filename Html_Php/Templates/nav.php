<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#!">Parkett Deluxe</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="homeindex.php">Alle Produkte</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><input class="dropdown-item" type="submit" name="name_asc" value="Name A-Z"/></li>
                        <li><input class="dropdown-item" type="submit" name="name_desc" value="Name Z-A"/></li>
                        <li><input class="dropdown-item" type="submit" name="price_asc" value="Preis aufsteigend"/></li>
                        <li><input class="dropdown-item" type="submit" name="price_desc" value="Preis absteigend"/></li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-brand">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Anmelden</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">|</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Registrieren</a></li>
                </ul>
            </div>
            <div class="navbar-brand">
                <button class="btn btn-outline-dark" type="submit">
                    Search
                </button>
            </div>
            <form class="d-flex">
                <button class="btn btn-outline-dark" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0<!--<?php echo $_SESSION['DingeImWarenkorb'] ?>--></span>
                </button>
            </form>
        </div>
    </div>
</nav>