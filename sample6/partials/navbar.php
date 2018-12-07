<?php
    //solutions to changing active status
    // $_GET is an associative array and super global variable
    // $_GET
    /*
      if(isset($_GET["section"])) {
        $value = htmlspecialchars($_GET["sections"]);

        if ($value == "about-us") {
            $section = "about-us";
        } elseif ($value == "contacts") {
            $section = "contacts";
        } elseif ($value == "notes") {
            $section = "notes";
        }
      }

      <li class="nav-item <?php if ($section == 'about-us') {echo 'active';}?>">
        <a class="nav-link" href="about.php?section=about-us">About Us</a>
      </li>
    */
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Juancho's</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if ($pageCont == 'About Us') {echo 'active';} ?>">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item <?php if ($pageCont == 'Contacts') {echo 'active';} ?>">
        <a class="nav-link" href="contacts.php">Contact Us</a>
      </li>
      <li class="nav-item <?php if ($pageCont == 'Note') {echo 'active';} ?>">
        <a class="nav-link" href="notes.php">Notes</a>
      </li>
      
    </ul>
  </div>
</nav>