<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">
			<div _ngcontent-c1="" class="coteCote" style="width: 100%;">
  				<div _ngcontent-c1="" class="headerBottom" style="background:url('http://localhost/monsite/wp-content/uploads/2021/10/v3.png'); background-size: 100%;">
    	<div _ngcontent-c1="" class="main">
      		<table _ngcontent-c1="" style="width: 100%;">
        		<tbody _ngcontent-c1=""><tr _ngcontent-c1="">
          			<td _ngcontent-c1="" class="firstTdDuHeader">
            			<img _ngcontent-c1="" class="logoEntete" src="http://localhost/monsite/wp-content/uploads/2021/10/logo_tr.png">
          			</td>

					<td _ngcontent-c1="" class="textBoutiqueIndex ">
						Ministère de la Justice
						<br _ngcontent-c1="">
						<span _ngcontent-c1="" style="color: #333; font: normal 25px 'Cookie', cursive;">Kiriko Minisiriso</span>
					  </td>

					  <td _ngcontent-c1="" style="text-align: right;">
						<table _ngcontent-c1="" style="width: 100%;">
						  <tbody _ngcontent-c1=""><tr _ngcontent-c1="">
							<td _ngcontent-c1="">
							  <div _ngcontent-c1="" class="input-append searchZone" style="    margin-bottom: 0px;     margin-top: 4px;">
								<input _ngcontent-c1="" class="span2 search-query searchBtnTop inputSearchHeaderTop ng-untouched ng-pristine ng-valid" id="keyWordSearch" placeholder="Recherchez dans le site...">
								<button _ngcontent-c1="" class="btn btnSearchHeaderTop" type="button">
								  <i _ngcontent-c1="" aria-hidden="true" class="fa fa-search"></i>
								</button>
							  </div>
							</td>
						  </tr>
						  <tr _ngcontent-c1="">
							<td _ngcontent-c1="" class="header-icons">
							  <a _ngcontent-c1="" href="https://www.facebook.com/Ministère-de-la-Justice-du-Mali-855449061193709/" target="_blank">
								<i _ngcontent-c1="" class="fa fa-facebook"></i>
							  </a>
							  <a _ngcontent-c1="" href="https://tweetsrepeat.com/Justice_Mali" target="_blank">
								<i _ngcontent-c1="" class="fa fa-twitter"></i>
							  </a>
							  <a _ngcontent-c1="" href="mailto:support@company.com">
								<i _ngcontent-c1="" class="fa fa-envelope"></i>
							  </a>
							</td>
						  </tr>
						</tbody></table>
					  </td>

        </tr>
      </tbody></table>

    </div>
  </div>
</div>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
