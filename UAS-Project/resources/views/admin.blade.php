<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @include('partials.head')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <!-- SIDEBAR START -->
    <section id="sidebar" class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 250px;">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <i class="bi bi-person-circle me-2 fs-4"></i>
            <span class="fs-4">Dashboard</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="bi bi-grid-fill me-2"></i>Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    <i class="bi bi-bar-chart-line me-2"></i>Analytics
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    <i class="bi bi-database me-2"></i>Database
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    <i class="bi bi-chat-left-text me-2"></i>Message
                </a>
            </li>
        </ul>
        <hr>
        <ul class="nav nav-pills flex-column">
            <li>
                <a href="#" class="nav-link link-dark">
                    <i class="bi bi-gear-fill me-2"></i>Settings
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    <i class="bi bi-box-arrow-right me-2"></i>Logout
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR ENDS -->

    <!-- CONTENT STARTS -->
    <section id="content" class="d-flex flex-column flex-grow-1">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categories</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link position-relative" href="#">
                                <i class="bi bi-bell-fill"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    8
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="img/people.png" alt="User Profile" class="rounded-circle" width="30" height="30">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- MAIN -->
        <main class="container mt-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h3">Dashboard</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                    </nav>
                </div>
                <a href="#" class="btn btn-primary">
                    <i class="bi bi-cloud-download-fill me-2"></i>Download PDF
                </a>
            </div>
        </main>
    </section>
    <script>
        // Activate Sidebar Items
        const allSideMenu = document.querySelectorAll('#sidebar .nav-link');

        allSideMenu.forEach(item => {
            const li = item.closest('li');

            item.addEventListener('click', function() {
                allSideMenu.forEach(i => {
                    i.classList.remove('active');
                });
                item.classList.add('active');
            });
        });

        // Responsive Sidebar Toggle
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');

        menuToggle.addEventListener('click', function () {
            sidebar.classList.toggle('d-none');
        });
    </script>
</body>
</html>