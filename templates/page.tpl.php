<?php
/**
 * @file
 * Theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $css: An array of CSS files for the current page.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page. Used to toggle the mission statement.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Page metadata:
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $head_title: A modified version of the page title, for use in the TITLE tag.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It should be placed within the <body> tag. When selecting through CSS
 *   it's recommended that you use the body tag, e.g., "body.front". It can be
 *   manipulated through the variable $classes_array from preprocess functions.
 *   The default values can be one or more of the following:
 *   - front: Page is the home page.
 *   - not-front: Page is not the home page.
 *   - logged-in: The current viewer is logged in.
 *   - not-logged-in: The current viewer is not logged in.
 *   - node-type-[node type]: When viewing a single node, the type of that node.
 *     For example, if the node is a "Blog entry" it would result in "node-type-blog".
 *     Note that the machine name will often be in a short form of the human readable label.
 *   - page-views: Page content is generated from Views. Note: a Views block
 *     will not cause this class to appear.
 *   - page-panels: Page content is generated from Panels. Note: a Panels block
 *     will not cause this class to appear.
 *   The following only apply with the default 'sidebar_first' and 'sidebar_second' block regions:
 *     - two-sidebars: When both sidebars have content.
 *     - no-sidebars: When no sidebar content exists.
 *     - one-sidebar and sidebar-first or sidebar-second: A combination of the
 *       two classes when only one of the two sidebars have content.
 * - $node: Full node object. Contains data that may not be safe. This is only
 *   available if the current page is on the node's primary url.
 * - $menu_item: (array) A page's menu item. This is only available if the
 *   current page is in the menu.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $mission: The text of the site mission, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $search_box: HTML to display the search box, empty if search has been disabled.
 * - $primary_links (array): An array containing the Primary menu links for the
 *   site, if they have been configured.
 * - $secondary_links (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: HTML for status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - $help: Dynamic help text, mostly for admin pages.
 * - $content: The main content of the current page.
 * - $feed_icons: A string of all feed icons for the current page.
 *
 * Footer/closing data:
 * - $footer_message: The footer message as defined in the admin settings.
 * - $closure: Final closing markup from any modules that have altered the page.
 *   This variable should always be output last, after all other dynamic content.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * Regions:
 * - $content_top: Items to appear above the main content of the current page.
 * - $content_bottom: Items to appear below the main content of the current page.
 * - $navigation: Items for the navigation bar.
 * - $sidebar_first: Items for the first sidebar.
 * - $sidebar_second: Items for the second sidebar.
 * - $header: Items for the header region.
 * - $footer: Items for the footer region.
 * - $page_closure: Items to appear below the footer.
 *
 * The following variables are deprecated and will be removed in Drupal 7:
 * - $body_classes: This variable has been renamed $classes in Drupal 7.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess()
 * @see zen_process()
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

	<head>
		<title><?php print $head_title; ?></title>
		<?php print $head; ?>
		<?php print $styles; ?>
		<?php print $scripts; ?>
	</head>
	<body class="<?php print $classes; ?>">
		<div id="page-wrapper">
			<div id="page">
				<!-- Header start-->
				<div id="header">
					<div id="logo-name-and-slogan">
						<div class='logo'>
							<a href="<?php print base_path(); ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print base_path().path_to_theme(); ?>/images/logo.png" alt="<?php print t('Home'); ?>" /></a>
						</div>
						<div class='site-name'>
							<a href="<?php print base_path(); ?>" id="site-name"><img src="<?php print base_path().path_to_theme(); ?>/images/site-name.png" alt="<?php print t('Home'); ?>" /></a>
						</div>
						<?php if ($search_box): ?>
							<div id="search-box"><?php print $search_box; ?></div>
						<?php endif; ?>
						<?php print $header; ?>
					</div>
					<div id='navigation-search'>
						<?php if ($primary_links || $navigation): ?>
							<div id="navigation">
								<?php print theme(array('links__system_main_menu', 'links'), $primary_links,
									array(
										'id' => 'main-menu',
										'class' => 'links clearfix',
									),
									array(
										'text' => t('Main menu'),
										'level' => 'h2',
										'class' => 'element-invisible',
									));
								?>
								<?php //print $navigation; ?>
							</div>
						<?php endif; ?>
						<?php if($search_site): ?>
							<div id='search'>
								<?php print $search_site; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<!-- header end -->
				<div id='main-content'>
					<!-- Search tutorial start -->
					<?php 
						if(drupal_is_front_page()) require_once('search_tutorial.tpl.php');
					 ?>
					<!-- Search tutorial end -->
					<!-- National mission  start -->
					<?php if($highlight): ?>
						<div id='master-head'>
							<?php print $highlight; ?>
						</div>
					<?php endif; ?>
					<!-- National mission  end -->
					<?php if(($most_recent) && drupal_is_front_page()): ?>
						<div id='most_recent' class='featured-videos'>
							<?php print $most_recent; ?>
						</div>
					<?php endif; ?>
					<?php if(($most_viewed) && drupal_is_front_page()): ?>
						<div id='most_viewed'  class='featured-videos'>
							<?php print $most_viewed; ?>
						</div>
					<?php endif; ?>
					<!-- Content start-->
					<?php if(!drupal_is_front_page()): ?>
					<div id="content" class="column">
						<?php if ($mission): ?>
							<div id="mission"><?php print $mission; ?></div>
						<?php endif; ?>
						<?php //print $breadcrumb; ?>
						<?php if ($title): ?>
							<h1 class="title"><?php print $title; ?></h1>
						<?php endif; ?>
						<?php print $messages; ?>
						<?php if ($tabs): ?>
							<div class="tabs"><?php print $tabs; ?></div>
						<?php endif; ?>
						<?php print $help; ?>

						<?php print $content_top; ?>

						<div id="content-area">
							<?php print $content; ?>
						</div>

						<?php print $content_bottom; ?>

						<?php if ($feed_icons): ?>
							<div class="feed-icons"><?php print $feed_icons; ?></div>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					<!-- Content end -->
				</div>
				<!-- Sidebar start -->
				<div id="sidebar">
					<?php print $sidebar_first; ?>
				</div>
				<!-- Sidebar end -->
				<!-- footer start -->
				 <?php if ($footer || $footer_message || $secondary_links): ?>
					<div id="footer">
						<div class="section">
							<?php print theme(array('links__system_secondary_menu', 'links'), $secondary_links,
								array(
									'id' => 'secondary-menu',
									'class' => 'links clearfix',
								),
								array(
									'text' => t('Secondary menu'),
									'level' => 'h2',
									'class' => 'element-invisible',
								));
							?>

							<?php if ($footer_message): ?>
								<div id="footer-message">
									<?php print $footer_message; ?>
								</div>
							<?php endif; ?>

							<?php print $footer; ?>
						</div>
					</div>
				<?php endif; ?>

				<!-- footer end -->
			</div>
		</div>
	</body>
</html>
