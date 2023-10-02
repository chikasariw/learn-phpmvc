<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MVC | <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">

</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg bg-light shadow-sm p-3 mb-5 bg-white rounded ">
            <div class="container ">
            <a class="navbar-brand fs-4 text-primary" href="<?= BASEURL; ?>">
                PHP MVC
            </a>

            <button
                class="navbar-toggler shadow-none border-0"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div
                class="sidebar offcanvas offcanvas-start"
                tabindex="-1"
                id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel"
            >
                <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button
                    type="button"
                    class="btn-close shadow-none"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"
                ></button>
                </div>

                <div
                class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0"
                >
                <ul
                    class="navbar-nav justify-content-end align-items-center fs-5 flex-grow-1 pe-3"
                >
                    <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>"
                        >Home</a
                    >
                    </li>
                    <li class="nav-item mx-2">
                    <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                    </li>
                    <li class="nav-item mx-2">
                    <a class="nav-link" href="<?= BASEURL; ?>/test2">Test2</a>
                    </li>
                </ul>

                </div>
            </div>
            </div>
        </nav>
    </header>
