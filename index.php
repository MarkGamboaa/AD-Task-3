<?php
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . '/utils/display.menu.php';
BASE_PATH . '/handlers/menu.handler.php';
require_once BASE_PATH . '/components/templates/header.component.php';
?>

<section class="hero bg-light py-5 mb-5 rounded">
    <div class="container text-center">
        <h1 class="display-4 text-danger">Welcome to (PHP) Pinoy Hot Plates</h1>
        <p class="lead">Discover mouthwatering dishes made with passion and served with love. Come hungry, leave happy!
        </p>
        <a href="?page=menu" class="btn btn-danger btn-lg mt-3">View Our Menu</a>
    </div>
</section>



<?php require_once BASE_PATH . '/components/templates/footer.component.php'; ?>