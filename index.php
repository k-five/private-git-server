<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo file_get_contents( "src/html/header.html" ) ?>
    <style>
        #toggle-optional-parts {
          border: none;
          padding: 10px;
          border-radius: 5px;
          background-color: #fff;
          box-shadow: 0 0 10px #ccc;
          cursor: pointer;
        }
    </style>
</head>
<body id="body" class="line-numbers">
    <main>
    <?php echo file_get_contents( "src/html/logo.html" ); ?>
    <?php echo file_get_contents( "src/html/github-gitlab-pgs.html" ); ?>
    <?php echo file_get_contents( "src/html/architecture.html" ); ?>
    <?php echo file_get_contents( "src/html/workflow.html" ); ?>
    <?php echo file_get_contents( "src/html/use-case.html" ); ?>
    <?php echo file_get_contents( "src/html/monitoring.html" ); ?>
    <?php echo file_get_contents( "src/html/task-and-automation.html" ); ?>
    <?php echo file_get_contents( "src/html/contact-me.html" ); ?>

    <?php echo file_get_contents( "src/html/footer.html" ); ?>
    </main>
    <script type="application/javascript" src="/vendor/js/prism.js"></script>
</body>
</html>

