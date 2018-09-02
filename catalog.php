<?php
$catalog = ['Iron Man', '22 Miles', 'Frozen', 'Monster'];
$pageTitle = "Personal Media Catalog";
$section = null;

if(isset($_GET["cat"])) {
  if($_GET["cat"] == 'books') {
    $pageTitle = "Books Catalog";
    $section = 'books';
  } elseif($_GET["cat"] == 'movies') {
    $pageTitle = "Movies Catalog";
    $section = 'movies';
  } elseif($_GET["cat"] == 'music') {
    $pageTitle = "Music Catalog";
    $section = 'music';
  }
}

include('inc/header.php'); ?>

<div class='section catalog page'>
  <div class='wrapper'>
    <h1><?php echo $pageTitle; ?></h1>
    <ul>
      <?php
      foreach($catalog as $item) {
        echo "<li>" . $item . "</li>";
      }
      ?>
    </ul>

  </div>
</div>

<?php include('inc/footer.php'); ?>