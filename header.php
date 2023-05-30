<?php
/**
 * The template for displaying the header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dizadiz' ); ?></a>

    <div class="flex justify-between header">
      <div class="flex items-center right-side">
        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-dizadiz.png" alt="لوگو روستای دیزادیز" style="width: 140px;"></a>
		<?php
			wp_nav_menu( array( 'theme_location'=>'my-header-menu', 'menu_class'=>'menu-items flex m-0 md:ms-10' ) );
		?>
        <ul class="hidden m-0 md:ms-10 menu-items">
          <li class="flex justify-center md:hidden mt-10">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-dizadiz.png" alt="لوگو روستای دیزادیز" style="width: 140px;"></a>
          </li>
          <li>
            <a href="#">فرصت های شغلی</a>
          </li>
          <li>
            <a href="#">لیست دوره ها</a>
          </li>
          <li>
            <a href="#">تدریس در اوایل آکادمی</a>
          </li>
          <li>
            <a href="#">ارزیابی مدرک</a>
          </li>
        </ul>
      </div>
      <div class="flex items-center">
        <button class="button-icons ms-2 block md:hidden" id="open-side-bar" onclick="toggleSideBar('open')">
          <svg version="1.1" id="Layer_1" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="#9FA0A1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 103.17" style="enable-background:new 0 0 122.88 103.17" xml:space="preserve"><g><path d="M26,0h70.87c7.15,0,13.65,2.93,18.36,7.64l0.22,0.24c4.58,4.69,7.42,11.1,7.42,18.13v51.16c0,7.15-2.93,13.65-7.64,18.36 c-4.71,4.71-11.21,7.64-18.36,7.64H26c-7.14,0-13.64-2.93-18.35-7.64H7.64C2.93,90.82,0,84.32,0,77.16V26 c0-7.13,2.92-13.63,7.64-18.35l0.02-0.03C12.38,2.92,18.87,0,26,0L26,0z M41.31,29.74h40.26c2.25,0,4.09,1.84,4.09,4.09l0,0 c0,2.25-1.84,4.09-4.09,4.09H41.31c-2.25,0-4.09-1.84-4.09-4.09l0,0C37.22,31.58,39.06,29.74,41.31,29.74L41.31,29.74L41.31,29.74z M41.31,65.25h40.26c2.25,0,4.09,1.84,4.09,4.09l0,0c0,2.25-1.84,4.09-4.09,4.09l-40.26,0c-2.25,0-4.09-1.84-4.09-4.09l0,0 C37.22,67.09,39.06,65.25,41.31,65.25L41.31,65.25L41.31,65.25z M41.31,47.5h40.26c2.25,0,4.09,1.84,4.09,4.09l0,0 c0,2.25-1.84,4.09-4.09,4.09H41.31c-2.25,0-4.09-1.84-4.09-4.09l0,0C37.22,49.34,39.06,47.5,41.31,47.5L41.31,47.5L41.31,47.5z M96.88,8.2H26c-4.9,0-9.35,2-12.57,5.22l-0.02,0.02C10.2,16.65,8.2,21.1,8.2,26v51.16c0,4.89,2.01,9.34,5.23,12.56l-0.01,0.01 c3.23,3.22,7.68,5.23,12.57,5.23h70.87c4.88,0,9.33-2.01,12.56-5.24c3.23-3.23,5.24-7.68,5.24-12.56V26c0-4.8-1.93-9.17-5.04-12.39 l-0.19-0.18C106.21,10.21,101.77,8.2,96.88,8.2L96.88,8.2z"/></g></svg>
        </button>
        <button class="button-icons ms-2 hidden md:hidden" id="close-side-bar" onclick="toggleSideBar('close')">
          <svg version="1.1" id="Layer_1" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="#9FA0A1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="122.878px" height="122.88px" viewBox="0 0 122.878 122.88" enable-background="new 0 0 122.878 122.88" xml:space="preserve"><g><path d="M1.426,8.313c-1.901-1.901-1.901-4.984,0-6.886c1.901-1.902,4.984-1.902,6.886,0l53.127,53.127l53.127-53.127 c1.901-1.902,4.984-1.902,6.887,0c1.901,1.901,1.901,4.985,0,6.886L68.324,61.439l53.128,53.128c1.901,1.901,1.901,4.984,0,6.886 c-1.902,1.902-4.985,1.902-6.887,0L61.438,68.326L8.312,121.453c-1.901,1.902-4.984,1.902-6.886,0 c-1.901-1.901-1.901-4.984,0-6.886l53.127-53.128L1.426,8.313L1.426,8.313z"/></g></svg>
        </button>
      </div>
    </div>
	<header id="masthead" class="site-header hidden" role="banner">
		<div class="site-branding">
			<?php
			if ( has_custom_logo() ) {
				?>
				<div class="site-logo"><?php the_custom_logo(); ?></div>
				<?php
			}

			if ( get_bloginfo( 'name', 'display' ) ) {
				?>
				<p class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				</p>
				<?php
			}

			if ( get_bloginfo( 'description', 'display' ) ) {
				?>
				<p class="site-description">
					<?php bloginfo( 'description' ); ?>
				</p>
				<?php
			}
			?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<script>
	function toggleSideBar(state) {
		var openBtnEl = document.querySelector('#open-side-bar')
		var closeBtnEl = document.querySelector('#close-side-bar')
		openBtnEl.classList.toggle('hidden')
		closeBtnEl.classList.toggle('hidden')
		var sideBarEl = document.querySelector('.menu-items')
		sideBarEl.classList.toggle("show")
	}
	</script>
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
