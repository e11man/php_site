<?php
require_once 'includes/config.php';
require_once 'components/head.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php echo renderHead('Modern Design Studio - Creative Solutions'); ?>
<body>
    <?php 
    require_once 'components/header.php';
    require_once 'components/hero.php';
    require_once 'components/scroll-stack.php';
    require_once 'components/features.php';
    require_once 'components/about.php';
    require_once 'components/contact.php';
    require_once 'components/footer.php';
    
    echo renderHeader();
    echo renderHero();
    echo renderScrollStack();
    echo renderFeatures();
    echo renderAbout();
    echo renderContact();
    echo renderFooter();
    ?>
    
    <script src="assets/js/main.js"></script>
</body>
</html>