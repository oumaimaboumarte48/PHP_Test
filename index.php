<?php
$title = "page d'acceuil";     // avec $nav dans la condition des active header au ieu de $_SERVER['SCRIPT_NAME']
// print_r($_SERVER); Un tableau qui donne des info sur le serveur : url / script name / serveur / port etc ... 
require 'header.php';
?>


<div class="container">
  <h1 class="mt-5">Sticky footer with fixed navbar</h1>
  <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>main &gt; .container</code>.</p>
  <p>Back to <a href="/docs/4.5/examples/sticky-footer/">the default sticky footer</a> minus the navbar.</p>
</div>

<?php require 'footer.php';
?>