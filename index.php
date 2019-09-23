<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo file_get_contents( "src/html/header.html" ) ?>
</head>
<body id="body" class="line-numbers">
    <main>
    <?php echo file_get_contents( "src/html/logo.html" ); ?>
    <?php echo file_get_contents( "src/html/github-gitlab-pgs.html" ); ?>
    <?php echo file_get_contents( "src/html/architecture.html" ); ?>
    <?php echo file_get_contents( "src/html/workflow.html" ); ?>
    <?php echo file_get_contents( "src/html/use-case.html" ); ?>
    <?php echo file_get_contents( "src/html/monitoring.html" ); ?>


    <?php echo file_get_contents( "src/html/footer.html" ); ?>
    </main>
    <script type="application/javascript" src="/vendor/js/prism.js"></script>
</body>
</html>

