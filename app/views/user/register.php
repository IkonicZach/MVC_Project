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
                <form action="<? echo URLROOT . 'user/register' ?>" method="post" autocomplete="off">
                    <div class="mb-3 position-relative">
                        <label for="username" class="form-label text-warning english">Username</label>
                        <input type="text" class="form-control english <?php echo !empty($data['name_err']) ? 'is-invalid' : ''; ?>" id="username" placeholder="6-20 characters" name="name">
                        <small class="invalid-tooltip top-0 end-0 english">
                            <?php echo !empty($data['name_err']) ? $data['name_err'] : ''; ?>
                        </small>
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="email" class="form-label text-warning english">Email address</label>
                        <input type="email" class="form-control english <?php echo !empty($data['email_err']) ? 'is-invalid' : ''; ?>" id="email" placeholder="name@example.com" name="email">
                        <small id="emailHelp" class="form-text text-white english">We'll never share your email with anyone (Maybe)</small>
                        <small class="invalid-tooltip top-0 end-0 english">
                            <?php echo !empty($data['email_err']) ? $data['email_err'] : ''; ?>
                        </small>
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="password" class="form-label text-warning english">Password</label>
                        <input type="password" id="password" class="form-control english <?php echo !empty($data['password_err']) ? 'is-invalid' : ''; ?>" aria-describedby="passwordHelpBlock" name="password">
                        <small class="invalid-tooltip english w-100">
                            <?php echo !empty($data['password_err']) ? $data['password_err'] : ''; ?>
                        </small>
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="confirm_password" class="form-label text-warning english">Confirm Password</label>
                        <input type="password" id="confirm_password" class="form-control english <?php echo !empty($data['confirm_password_err']) ? 'is-invalid' : ''; ?>" aria-describedby="passwordHelpBlock" name="confirm_password">
                        <small class="invalid-tooltip top-0 end-0 english">
                            <?php echo !empty($data['confirm_password_err']) ? $data['confirm_password_err'] : ''; ?>
                        </small>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-white pr-1 english">Already have an account? <a href="<?php echo URLROOT . 'user/login'; ?>" class="english text-decoration-none text-warning"> Login</a></p>
                        <div class="">
                            <button class="btn btn-light english">Cancel</button>
                            <button class="btn btn-warning english">Register</button>
                        </div>
                    </div>
                </form>
            <!-- Registration ends -->
            </div>
        </div>
    </div>
</div>
<? require_once APPROOT . "\\views\\inc\\footer.php"; ?>