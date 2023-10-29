<?php
// Include the 'index.php' file from the 'helpers' directory using ROOT_PATH
require_once(ROOT_PATH . "helper.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  // Include the 'Meta.php' template and set the 'title' variable
  include_view(
    ROOT_PATH . 'views/components/templates/Meta.php',
    ['title' => 'Login - Danny TRAN | Software Developer']
  );
  ?>

  <?php
  // Include the 'CSSLinks.php' template
  include(ROOT_PATH . 'views/components/templates/CSSLinks.php');
  ?>
</head>

<body>
  <div id="root">
    <?php
    // Include the 'Header.php' template
    include(ROOT_PATH . 'views/components/templates/Header.php');
    ?>
    <main>
      <?php
      // Include various components for the main content
      include(ROOT_PATH . 'views/components/organisms/Login.php');
      ?>
    </main>
    <?php
    // Include the 'Footer.php' template
    include(ROOT_PATH . 'views/components/templates/Footer.php');
    ?>
    <div id="loader"></div>
  </div>
  <?php
  // Include the 'JSLinks.php' template
  include(ROOT_PATH . 'views/components/templates/JSLinks.php');
  ?>
</body>

</html>