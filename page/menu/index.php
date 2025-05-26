<?php
include 'components/templates/header.component.php';
include 'handlers/menu.handler.php';
include 'utils/display.menu.php';
?>

<main class="menu mb-5">
    <h2 class="text-center mb-4">Full Menu</h2>
    <div class="menu-list">
        <?php displayMenu($menu); ?>
    </div>
</main>

<?php include 'components/templates/footer.component.php'; ?>