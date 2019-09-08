<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo file_get_contents( "src/html/header.html" ) ?>
</head>
<body id="body" class="line-numbers">
    <main>
    <?php echo file_get_contents( "src/html/logo.html" ); ?>
    <?php echo file_get_contents( "src/html/github-gitlab-pgs.html" ); ?>


    <?php echo file_get_contents( "src/html/footer.html" ); ?>
    </main>
    <script type="application/javascript" src="/vendor/js/prism-5.js"></script>
</body>
</html>

