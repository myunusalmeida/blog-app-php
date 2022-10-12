<?php
$title = 'Profile';
include('components/header.php');
?>
<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-5">
            <h4 class="text-primary">Your Profile</h4>
            <a href="." class="btn btn-light">Back to content</a>
        </div>
        <form action="php/profile.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12">
                    <div class="form-group mb-3">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?= $user_logged['name'] ?>" placeholder="Enter your name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="email">Email Address</label>
                        <input type="text" name="email" id="email" class="form-control" value="<?= $user_logged['email'] ?>" placeholder="Enter your name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                        <span class="form-text">Isi jika ingin mengubahnya</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="description">Your Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?= $user_logged['description'] ?></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="photo">Photo</label>
                <input type="file" name="photo" id="photo" class="form-control" accept="image/*">
                <span class="form-text">Isi jika ingin mengubahnya</span>
            </div>
            <button type="submit" class="btn btn-primary px-4">Submit</button>
        </form>
    </div>
</section>
<?php include('components/footer.php') ?>