=== Custom Post Type UI ===
Contributors: webdevstudios, pluginize, tw2113, williamsba1
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3084056
Tags: custom post types, post type, taxonomy, content types, types
Requires at least: 6.5
Tested up to: 6.7
Stable tag: 1.17.2
License: GPL-2.0+
Requires PHP: 7.4

Admin UI for creating custom content types like post types and taxonomies

== Description ==

Custom Post Type UI provides an easy-to-use interface for registering and managing custom post types and taxonomies for your website.

= Custom Post Type UI Extended =

CPTUI helps create custom content types, but displaying that content can be a whole new challenge. [Custom Post Type UI Extended](https://pluginize.com/plugins/custom-post-type-ui-extended/?utm_source=cptui-desription&utm_medium=text&utm_campaign=wporg) was created to help with displaying your crafted content. [View our Layouts page](https://pluginize.com/cpt-ui-extended-features/?utm_source=cptui-description-examples&utm_medium=text&utm_campaign=wporg) to see available layout examples with Custom Post Type UI Extended.

= Plugin development =

Custom Post Type UI development is managed on GitHub, with official releases published on WordPress.org. The GitHub repo can be found at [https://github.com/WebDevStudios/custom-post-type-ui](https://github.com/WebDevStudios/custom-post-type-ui). Please use the WordPress.org support tab for potential bugs, issues, or enhancement ideas.

== Screenshots ==

1. Add new post type screen and tab.
2. Add new taxonomy screen and tab.
3. Registered post types and taxonomies from CPTUI
4. Tools screen.
5. Help/support screen.

== Changelog ==

= 1.17.2 - 2024-11-19 =
* Fixed: PHP warnings around empty description variables from tools page.
* Updated: Confirmed compatibility with WordPress 6.7

= 1.17.1 - 2024-06-27 =
* Fixed: Missed re-showing of autolabel fill links for js enabled browsers.

= 1.17.0 - 2024-06-17 =
* Added: "sidebars" as a reserved slug for post types.
* Added: Blueprint for trying Custom Post Type UI on wordpress.org before installation.
* Updated: Reworked javascript files to be more modular with the build process.

= 1.16.0 - 2024-04-08 =
* Added: Added a wpml-config.xml file.
* Updated: Added "search_terms" to disallowed taxonomy list.
* Updated: Began converting our javascript away from jQuery dependency.
* Updated: tested up to WP 6.5

= 1.15.1 - 2023-11-08 =
* Fixed: Fixed up some Right-to-Left language styling issues.
* Fixed: Fixing forgot to update about page and some PHP constants for CPTUI version.

= 1.15.0 - 2023-11-06 =
* Added: Checkbox to indicate you intend to migrate a post type into CPTUI in event of matching slugs. Props @ramsesdelr
* Added: "item_trashed" post type label support from WordPress 6.3
* Updated: confirmed compatibility with WordPress 6.4.
* Updated: PHP8 compatibility.
* Updated: Minimum WordPress version to version 6.3, minimum PHP version to 7.4.

= 1.14.0 - 2023-08-07 =
* Added: "Scroll to top" links in CPTUI pages. Props @aslamatwebdevstudios
* Added: Remembers toggled states for CPTUI settings panels. Props @aslamatwebdevstudios and @ramsesdelr
* Updated: Notes about slugs for both post types and taxonomies.
* Updated: Support/FAQ section with more accurate links.

= 1.13.7 - 2023-07-11 =
* Fixed: "themes" marked as reserved taxonomy slug. Causes issues with featured image metabox.
* Fixed: PHP notice around `sort` parameter.

= 1.13.6 - 2023-05-30 =
* Fixed: Prevent PHP errors for dynamic WordPress hooks.
* Fixed: Prevent PHP errors from array_key_exist() checks on non arrays.
* Updated: Removed Maintainn graphic and added WP Search with Algolia Pro graphic.
* Updated: Fixed a lot of text escaping for translation-ready content.

= 1.13.5 - 2023-03-27 =
* Fixed: Security issue in CPTUI Debug Info screen.
* Fixed: Added `empty()` check for `can_export` parameters.
* Updated: Changed textdomain loading from `plugins_loaded` to `init`.

= 1.13.4 - 2022-12-16 =
* Fixed: Character encoding issue on CPTUI setting save in conjunction with PHP8 compatibility.

= 1.13.3 - 2022-12-15 =
* Fixed: Multiple PHP8 compatibility notices and warnings.
* Fixed: "Invalid argument for foreach" based notices around labels.
* Updated: Added taxonomy PHP global sanitization for 3rd party parameters.

= 1.13.2 - 2022-11-29 =
* Fixed: Removed forcing of underscores in place of dashes for taxonomy slugs. Yay!
* Updated: tested up to WP 6.1.1
* Updated: Documentation links in wordpress.org FAQ section.

= 1.13.1 - 2022-09-08 =
* Fixed: Various issues caused by a misplaced output for `ob_get_clean()` outside of function.

= 1.13.0 - 2022-09-07 =
* Added: Notes regarding featured image and post format support also needing `add_theme_support` to work.
* Fixed: Issues around double quotes and JSON export with the post type description field
* Fixed: Issues around HTML markup being removed from post type description field stemming from 1.10.x release
* Fixed: Pluralization issue with our UI for some field labels
* Updated: Code separation and quality cleanup.
* Updated: Plugin branding.

== Upgrade Notice ==

= 1.17.2 - 2024-11-19 =
* Fixed: PHP warnings around empty description variables from tools page.
* Updated: Confirmed compatibility with WordPress 6.7

= 1.17.1 - 2024-06-27 =
* Fixed: Missed re-showing of autolabel fill links for js enabled browsers.

= 1.17.0 - 2024-06-17 =
* Added: "sidebars" as a reserved slug for post types.
* Added: Blueprint for trying Custom Post Type UI on wordpress.org before installation.
* Updated: Reworked javascript files to be more modular with the build process.

= 1.16.0 - 2024-04-08 =
* Added: Added a wpml-config.xml file.
* Updated: Added "search_terms" to disallowed taxonomy list.
* Updated: Began converting our javascript away from jQuery dependency.
* Updated: tested up to WP 6.5

= 1.15.1 - 2023-11-08 =
* Fixed: Fixed up some Right-to-Left language styling issues.
* Fixed: Fixing forgot to update about page and some PHP constants for CPTUI version.

= 1.15.0 - 2023-11-06 =
* Added: Checkbox to indicate you intend to migrate a post type into CPTUI in event of matching slugs. Props @ramsesdelr
* Added: "item_trashed" post type label support from WordPress 6.3
* Updated: confirmed compatibility with WordPress 6.4.
* Updated: PHP8 compatibility.
* Updated: Minimum WordPress version to version 6.3, minimum PHP version to 7.4.

= 1.14.0 - 2023-08-07 =
* Added: "Scroll to top" links in CPTUI pages. Props @aslamatwebdevstudios
* Added: Remembers toggled states for CPTUI settings panels. Props @aslamatwebdevstudios and @ramsesdelr
* Updated: Notes about slugs for both post types and taxonomies.
* Updated: Support/FAQ section with more accurate links.

= 1.13.7 - 2023-07-11 =
* Fixed: "themes" marked as reserved taxonomy slug. Causes issues with featured image metabox.
* Fixed: PHP notice around `sort` parameter.

= 1.13.6 - 2023-05-30 =
* Fixed: Prevent PHP errors for dynamic WordPress hooks.
* Fixed: Prevent PHP errors from array_key_exist() checks on non arrays.
* Updated: Removed Maintainn graphic and added WP Search with Algolia Pro graphic.
* Updated: Fixed a lot of text escaping for translation-ready content.

= 1.13.5 - 2023-03-27 =
* Fixed: Security issue in CPTUI Debug Info screen.
* Fixed: Added `empty()` check for `can_export` parameters.
* Updated: Changed textdomain loading from `plugins_loaded` to `init`.

= 1.13.4 - 2022-12-16 =
* Fixed: Character encoding issue on CPTUI setting save in conjunction with PHP8 compatibility.

= 1.13.3 - 2022-12-15 =
* Fixed: Multiple PHP8 compatibility notices and warnings.
* Fixed: "Invalid argument for foreach" based notices around labels.
* Updated: Added taxonomy PHP global sanitization for 3rd party parameters.

= 1.13.2 - 2022-11-29 =
* Fixed: Removed forcing of underscores in place of dashes for taxonomy slugs. Yay!
* Updated: tested up to WP 6.1.1
* Updated: Documentation links in wordpress.org FAQ section.

= 1.13.1 - 2022-09-08 =
* Fixed: Various issues caused by a misplaced output for `ob_get_clean()` outside of function.

= 1.13.0 - 2022-09-07 =
* Added: Notes regarding featured image and post format support also needing `add_theme_support` to work.
* Fixed: Issues around double quotes and JSON export with the post type description field
* Fixed: Issues around HTML markup being removed from post type description field stemming from 1.10.x release
* Fixed: Pluralization issue with our UI for some field labels
* Updated: Code separation and quality cleanup.
* Updated: Plugin branding.

== Installation ==

= Admin Installer via search =
1. Visit the Add New plugin screen and search for "custom post type ui".
2. Click the "Install Now" button.
3. Activate the plugin.
4. Navigate to the "CPTUI" Menu.

= Admin Installer via zip =
1. Visit the Add New plugin screen and click the "Upload Plugin" button.
2. Click the "Browse..." button and select zip file from your computer.
3. Click "Install Now" button.
4. Once done uploading, activate Custom Post Type UI.

= Manual =
1. Upload the Custom Post Type UI folder to the plugins directory in your WordPress installation.
2. Activate the plugin.
3. Navigate to the "CPTUI" Menu.

That's it! Now you can easily start creating custom post types and taxonomies in WordPress.

== Frequently Asked Questions ==

#### User documentation
Please see https://docs.pluginize.com/tutorials/custom-post-type-ui/
