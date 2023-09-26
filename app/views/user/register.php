<?php
require_once APPROOT . "\\views\\inc\\header.php";
require_once APPROOT . "\\views\\inc\\nav.php";
?>

<div class="container-fluid">
    <div class="container">
        <div class="col-md-8 offset-md-2 mt-5">
            <div class="card p-5 bg-dark">
                <!-- Registration starts -->
                <h3 class="english text-warning mb-4">Register new account</h3>
                <div class="mb-3">
                    <label for="username" class="form-label text-warning english">Username</label>
                    <input type="text" class="form-control english" id="username" placeholder="6-20 characters" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-warning english">Email address</label>
                    <input type="email" class="form-control english" id="email" placeholder="name@example.com" name="email">
                    <small id="emailHelp" class="form-text text-white english">We'll never share your email with anyone (Maybe)</small>
                </div>
                <div class="md-3">
                    <label for="password" class="form-label text-warning english">Password</label>
                    <input type="password" id="password" class="form-control text-white english" aria-describedby="passwordHelpBlock">
                    <div id="passwordHelpBlock" class="form-text text-white english">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </div>
                </div>
                <!-- Registration ends -->
            </div>
        </div>
    </div>
</div>
<? require_once APPROOT . "\\views\\inc\\footer.php"; ?>