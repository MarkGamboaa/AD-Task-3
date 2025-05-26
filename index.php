<?php
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . '/utils/display.menu.php';
require BASE_PATH . '/handlers/menu.handlers.php';
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

<section class="mb-5">
    <div class="d-flex justify-content-center">
        <div class="about w-auto">
            <h2 class="mb-3 text-center">Deliciously Different</h2>
            <p class="text-center">
                At (PHP) Pinoy Hot Plates, we bring people together with comforting flavors, cozy vibes, and
                unforgettable food.<br>
                Whether you're in for a quick bite or a full meal, we’ve got something you’ll love.
            </p>
        </div>
    </div>
</section>

<div class="container my-5">
    <h2 class="text-center mb-4">Best Sellers</h2>
    <div class="d-flex justify-content-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 w-auto">
            <?php foreach ($bestSellers as $item): ?>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="page/menu/assets/img/<?= $item['img'] ?>" class="card-img-top" alt="<?= $item['name'] ?>"
                            style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= capitalizeSentences($item['name']) ?></h5>
                            <p class="card-text"><?= capitalizeSentences($item['desc']) ?></p>
                            <p class="fw-bold text-danger">₱<?= number_format($item['price'], 2) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php require_once BASE_PATH . '/components/templates/footer.component.php'; ?>