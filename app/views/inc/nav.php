<div class="container-fluid bg-dark">
    <nav class="container navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand text-white english" href="#">
                <img src="<?php echo URLROOT . "assets/imgs/snickers.com.png"; ?>" width="45" height="45" alt="">
                <span class="english">Snickers<span class="text-warning english">UK</span>.com</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-warning english" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning english" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning english" href="<?php echo URLROOT . 'user/login'; ?>" >Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning english" href="<?php echo URLROOT . 'user/register'; ?>">Register</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-warning english" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item text-warning english" href="#">Action</a></li>
                            <li><a class="dropdown-item text-warning english" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider bg-warning english">
                            </li>
                            <li><a class="dropdown-item text-warning english" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>