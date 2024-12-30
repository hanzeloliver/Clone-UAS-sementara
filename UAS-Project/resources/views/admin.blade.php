<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Menyertakan boxicons dari CDN -->
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <!-- SIDEBAR START -->
    <section id="sidebar">
        <a href="" class="brand">
            <i class="bx bxs-user-circle"></i>
            <span class="text">Dashboard</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="">
                    <i class="bx bxs-dashboard"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bx bxs-bar-chart-alt-2"></i>
                    <span class="text">Analytics</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bx bxs-data"></i>
                    <span class="text">Database</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bx bxs-message"></i>
                    <span class="text">Message</span>
                </a>
            </li>
        </ul>
        
        <ul class="side-menu">
            <li>
                <a href="">
                    <i class="bx bxs-cog"></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bx bxs-log-out"></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR ENDS -->



<!-- CONTENT STARTS -->
 <section id="content">
    <nav>
        <i class="bx bx-menu"></i>
        <a href="#" class="nav-link">Categories</a>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Search...">
                <button type="submit" class="search-btn"><i class="bx bx-search"></i></button>
            </div>
        </form>
        <a href="#" class="notification">
            <i class="bx bxs-bell"></i>
            <span class="num">8</span>
        </a>
        <a href="#">
            <img src="img/people.png">
        </a>
    </nav>
    <!-- CONTENT ENDS -->

    <!-- MAIN -->
     <main>
        <div class="head-tittle">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn-download">
                <i class="bx bxs-cloud-download"></i>
                <span class="text">Download PDF</span>
            </a>
        </div>
     </main>
 </section>
    <script>
        const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

        allSideMenu.forEach(item => {
            const li = item.parentElement;

            item.addEventListener('click', function() {
                allSideMenu.forEach(i => {
                    i.parentElement.classList.remove('active');
                });
                li.classList.add('active');
            });
        });

        // TOGGLE SIDEBAR
        const menuBar = document.querySelector('#content nav .bx.bx-menu');
        const sideBar = document.getElementById('sidebar');

        menuBar.addEventListener('click', function() {
            sideBar.classList.toggle('hide');
        });

        // HANDLE WINDOW RESIZE AND SEARCH BEHAVIOR
        const searchButtonIcon = document.querySelector('#content nav .bx.bx-search');
        const searchForm = document.querySelector('#content nav .search-form');

        if (window.innerWidth < 768) {
            sideBar.classList.add('hide');
        } else if (window.innerWidth > 576) {
            if (searchButtonIcon && searchForm) {
                searchButtonIcon.classList.replace('bx-x', 'bx-search');
                searchForm.classList.remove('show');
            }
        }

        window.addEventListener('resize', function() {
            if (this.innerWidth > 576) {
                if (searchButtonIcon && searchForm) {
                    searchButtonIcon.classList.replace('bx-x', 'bx-search');
                    searchForm.classList.remove('show');
                }
            }
        });
    </script>
</body>
</html>
