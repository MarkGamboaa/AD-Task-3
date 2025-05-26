<?php
require_once BASE_PATH . '/components/templates/header.component.php';
require BASE_PATH . '/handlers/menu.handlers.php';
require BASE_PATH . '/utils/display.menu.php';

?>

<main class="menu mb-5">
    <h2 class="text-center mb-4">Full Menu</h2>
    <div class="menu-list">
        <?php displayMenu($menu); ?>
    </div>
</main>

<?php require_once BASE_PATH . '/components/templates/footer.component.php'; ?>