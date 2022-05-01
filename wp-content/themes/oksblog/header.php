<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oksblog
 */

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="images/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="images/favicon-16x16.png"
    />
    <title>Oksblog</title>
  </head>
  <body>
    <div class="wrapper">
      <header class="header">
        <div class="header__inner">
          <a href="#" class="logo">
            <img src="<?php the_field('logo'); ?>" alt="logo" />
          </a>

          <nav class="menu">
            <ul class="menu__list">
              <li class="menu__list-item">
                <a class="menu__list-link" href="#">Expertise</a>
              </li>
              <li class="menu__list-item">
                <a class="menu__list-link" href="#">Technology</a>
              </li>

              <li class="menu__list-item">
                <a class="menu__list-link" href="#">Services</a>
              </li>
              <li class="menu__list-item">
                <a class="menu__list-link" href="#">Hire</a>
              </li>
              <li class="menu__list-item">
                <a class="menu__list-link" href="#">Careers</a>
              </li>

              <li class="menu__list-item">
                <a class="menu__list-link" href="#">About us</a>
              </li>
              <li class="menu__list-item">
                <a class="menu__list-link" href="#">Portfolio</a>
              </li>
              <li class="menu__list-item">
                <a class="menu__list-link" href="#">Blog</a>
              </li>
              <li class="menu__list-item">
                <a class="menu__list-link--contact" href="#">Contact us</a>
              </li>
            </ul>
          </nav>
          <input type="checkbox" id="active" />
          <label for="active" class="menu-btn"><span></span></label>
          <label for="active" class="close"></label>
          <div class="wrapper__mobile">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Feedback</a></li>
            </ul>
          </div>
        </div>
      </header>