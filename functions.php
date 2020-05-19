<?php
// if (!function_exists('nav_item')) :  /// verriffier si la function existe 
function nav_item(string $lien, string $titre, string $classHeader = ''): string
{
  $classe = 'nav-item';
  if ($_SERVER['SCRIPT_NAME'] === $lien) {
    $classe .= ' active';
  }

  return  '<li class="' . $classe . ' ">
            <a class="' . $classHeader . '" href="' . $lien . '">' . $titre . '</a>
          </li>';
}
function nav_menu(string $classHeader = ''): string
{
  return
    nav_item('/index.php', 'acceuil', $classHeader) .
    nav_item('/contact.php', 'contact', $classHeader);
}
