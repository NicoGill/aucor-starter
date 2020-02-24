<?php
/**
 * Header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aucor_starter
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

<div class="mobile-menu js-mobile-menu">
  <div class="mobile-menu__nav" role="dialog">
    <?php Aucor_Menu_Toggle::render(); ?>
    <div class="mobile-menu__nav__inner">
      <?php Aucor_Menu_Primary::render(); ?>
      <?php Aucor_Menu_Upper::render(); ?>
    </div>
  </div>
  <div class="mobile-menu__overlay" data-a11y-dialog-hide tabindex="-1"></div>
</div>

<div id="page" class="site js-page">

  <svg class="svg-effects" aria-hidden="true">
    <filter id="svg-effects-blur">
      <feGaussianBlur stdDeviation="10"></feGaussianBlur>
      <feColorMatrix type="matrix" values="1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 9 0"></feColorMatrix>
      <feComposite in2="SourceGraphic" operator="in"></feComposite>
    </filter>
  </svg>

  <a class="skip-to-content" href="#content"><?php ask_e('Accessibility: Skip to content'); ?></a>

  <header id="masthead" class="site-header" itemscope itemtype="https://schema.org/WPHeader">
    <div class="site-header__inner">

    <div class="site-header__branding">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="site-header__title" rel="home" itemprop="headline">
        <span class="screen-reader-text"><?php bloginfo('name'); ?></span>
        <svg class="site-header__logo" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1497 795"><path fill="#c82986" d="M1085.94,0.02c-117.752.012-223.6,43.817-298.037,119.513l-0.058-.558c-20.89,24.1-73.827,64.493-135.1,250-24.414,73.9-78.514,192.638-206.395,210.6l1.129,0.978a325.115,325.115,0,0,1-37.689,2.269c-5.941,0-11.826-.274-17.672-0.758-5.489-.461-10.921-1.172-16.3-2.07-0.3-.056-0.609-0.1-0.92-0.137-5.165-.9-10.274-2-15.3-3.282-0.464-.113-0.917-0.226-1.381-0.34q-7.37-1.939-14.485-4.447c-0.534-.186-1.056-0.355-1.593-0.55-4.669-1.674-9.273-3.542-13.776-5.58-0.523-.227-1.045-0.469-1.564-0.712q-6.714-3.129-13.143-6.76c-0.451-.259-0.9-0.526-1.354-0.785-4.306-2.5-8.526-5.152-12.589-8.007-0.324-.21-0.619-0.452-0.946-0.679-4.176-2.952-8.228-6.066-12.124-9.39-0.1-.081-0.21-0.186-0.311-0.283-4.009-3.437-7.874-7.06-11.556-10.863a0.445,0.445,0,0,1-.072-0.072c-3.57-3.7-6.972-7.6-10.2-11.647-0.254-.315-0.522-0.606-0.761-0.922-3.091-3.907-5.972-7.967-8.723-12.173-0.338-.525-0.689-1.019-1.032-1.544q-3.959-6.2-7.393-12.845c-0.338-.647-0.692-1.3-1.014-1.974q-3.35-6.6-6.154-13.605c-0.3-.736-0.579-1.48-0.873-2.215q-2.734-7.074-4.912-14.528c-0.226-.752-0.424-1.5-0.62-2.257-1.412-5.072-2.654-10.273-3.656-15.611-0.126-.655-0.225-1.335-0.338-2.006-0.988-5.508-1.777-11.13-2.313-16.914-0.042-.453-0.058-0.922-0.1-1.375-0.506-6.051-.818-12.246-0.817-18.58,0.012-115.081,84.964-187.365,184.033-187.376,89.715,2.5,164.854,58.522,181.4,153.646,0,0,6.623-20.628,16-48.236C626.245,262,661.652,184.331,710.666,121.362c-6.72-6.665-13.421-12.925-20.126-18.991l0.1-.145c-1.722-1.513-3.513-2.953-5.265-4.441C608.417,29.855,529.8.08,408.455,0.094q-10.585,0-21.048.471a454.54,454.54,0,0,0-61.34,6.923,426.793,426.793,0,0,0-76.676,21.484q-18.332,7.052-35.7,15.746-17.355,8.652-33.65,18.891A382.863,382.863,0,0,0,106.131,123.9a376.23,376.23,0,0,0-36.292,44.516C25.862,231.68.209,310.315,0.2,399.94c0,6.731.195,13.363,0.478,19.972,0.1,2.014.225,3.988,0.337,5.994q0.4,7.072,1.029,14.018c0.184,2.1.367,4.189,0.592,6.277q0.8,7.716,1.878,15.279c0.182,1.279.322,2.589,0.52,3.867q1.4,9.392,3.233,18.564c0.308,1.577.675,3.138,1.013,4.731q1.44,6.88,3.1,13.646c0.48,1.958.973,3.923,1.5,5.865q1.716,6.564,3.654,12.965c0.5,1.635.946,3.285,1.454,4.9,1.823,5.767,3.74,11.494,5.8,17.1,0.308,0.857.648,1.666,0.97,2.507q2.691,7.2,5.646,14.212c0.733,1.748,1.51,3.47,2.272,5.2q2.538,5.811,5.277,11.5c0.8,1.674,1.6,3.356,2.427,5.015q3.494,7.012,7.242,13.823c0.322,0.582.619,1.173,0.944,1.755,2.851,5.088,5.829,10.07,8.889,14.988,0.891,1.431,1.823,2.839,2.738,4.263q3.41,5.3,6.985,10.49c1.088,1.561,2.158,3.114,3.263,4.659q3.85,5.386,7.9,10.612c0.849,1.108,1.681,2.24,2.541,3.348q5.334,6.734,10.952,13.224c0.861,0.979,1.751,1.933,2.61,2.912q4.468,5.024,9.087,9.9c1.287,1.351,2.6,2.685,3.91,4.02q4.364,4.428,8.865,8.719c1.242,1.18,2.454,2.353,3.7,3.518,4.2,3.89,8.48,7.716,12.859,11.42,0.25,0.211.518,0.413,0.773,0.623q6.227,5.229,12.674,10.174c1.412,1.076,2.85,2.144,4.276,3.2q4.956,3.712,10.052,7.263c1.509,1.06,3.019,2.127,4.559,3.163q5.88,3.99,11.953,7.788c0.9,0.549,1.763,1.148,2.667,1.69,4.927,3.024,9.936,5.928,15.016,8.759,1.37,0.752,2.751,1.48,4.135,2.215,3.813,2.055,7.665,4.077,11.561,6.017,1.721,0.858,3.441,1.707,5.192,2.548,3.91,1.868,7.877,3.688,11.856,5.45,1.47,0.656,2.91,1.318,4.39,1.958q8.111,3.468,16.4,6.63c0.972,0.373,1.974.7,2.95,1.068,3.527,1.31,7.07,2.612,10.642,3.833l1.889,0.558q13.785,4.622,28.032,8.32l2.414,0.72c1.3,0.331,2.625.541,3.923,0.865q9.78,2.389,19.747,4.358c1.848,0.372,3.682.784,5.549,1.123,8.271,1.537,16.638,2.822,25.092,3.9,1.893,0.242,3.813.412,5.718,0.639,6.86,0.775,13.76,1.421,20.722,1.9,2.439,0.17,4.868.355,7.309,0.485,8.735,0.484,17.529.806,26.407,0.806h0.029q14.356,0,28.455-.852c3.25-.186,6.41-0.583,9.642-0.842,6.112-.494,12.237-0.924,18.264-1.653,3.912-.469,7.735-1.165,11.618-1.716,5.249-.769,10.53-1.432,15.709-2.372,4.122-.752,8.145-1.739,12.225-2.589,4.813-1.012,9.667-1.934,14.41-3.1,4.236-1.036,8.357-2.3,12.549-3.448,4.462-1.238,8.963-2.387,13.354-3.754,4.277-1.336,8.412-2.881,12.618-4.337,4.179-1.449,8.4-2.809,12.5-4.37,4.265-1.635,8.414-3.487,12.608-5.243,3.881-1.634,7.819-3.187,11.646-4.936,4.219-1.925,8.314-4.061,12.45-6.132,3.642-1.821,7.338-3.552,10.911-5.469,4.122-2.217,8.116-4.636,12.152-6.991,3.415-2.006,6.874-3.924,10.22-6.011,4.022-2.516,7.874-5.2,11.787-7.856,3.205-2.159,6.45-4.247,9.57-6.5,3.854-2.783,7.564-5.744,11.308-8.665,2.991-2.329,6.04-4.6,8.961-7.022,3.672-3.033,7.186-6.245,10.742-9.433,2.8-2.507,5.647-4.951,8.385-7.555,3.46-3.293,6.764-6.748,10.109-10.169,2.61-2.686,5.265-5.3,7.792-8.058,3.248-3.535,6.323-7.224,9.428-10.889,2.415-2.847,4.887-5.654,7.215-8.583,2.992-3.753,5.818-7.644,8.667-11.519,1.087-1.489,2.246-2.912,3.318-4.417,73.527,103.32,197.475,164.426,338.83,164.411,227.25-.025,409.62-157.9,409.64-395.415C1496.91,160.791,1314.58,0,1085.94.02Zm-9.2,583.131c-98.972.011-183.793-69.464-183.781-183.3,0.012-115.324,84.85-187.778,183.821-187.789s183.8,72.425,183.78,187.749C1260.55,513.647,1175.71,583.141,1076.74,583.151Z" /></svg>
      </a>
    </div>

    <?php Aucor_Menu_Toggle::render(); ?>

    <div class="site-header__menus">
      <div class="site-header__upper desktop-menu">
        <?php Aucor_Menu_Upper::render(); ?>
      </div>
      <div class="site-header__main desktop-menu">
        <?php Aucor_Menu_Primary::render(); ?>
      </div>
    </div>

    </div>
  </header>

  <div id="content" class="site-content" role="main" itemscope itemprop="mainContentOfPage">
