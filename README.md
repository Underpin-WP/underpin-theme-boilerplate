# Boilerplate for Custom Projects

This is a plugin boilerplate built on the [Underpin](https://github.com/alexstandiford/underpin) Framework. For
information on how to use this, check out Underpin's docs.

This plugin expects that Underpin has been installed as
a [WordPress Must-Use plugin](https://wordpress.org/support/article/must-use-plugins/).

## Setup

1. Install Underpin. See [Underpin](https://github.com/underpin-wp/underpin) for more info on that
2. Install the [Template Loader](https://github.com/underpin-wp/template-loader)
3. Start building!

## Useful Loaders

There are a handful of loaders that get used in most WordPress themes. Keep these in-mind as you work on the theme, and
use them if you find you need the functionality:

1. [Block Loader](https://github.com/Underpin-WP/underpin-block-loader) Create, register, and manage WordPress blocks.
1. [Decision List Loader](https://github.com/Underpin-WP/decision-list-loader) Create decision list registries that
   makes custom logic easy to extend.
1. [Menu Loader](https://github.com/Underpin-WP/menu-loader) Register, and manage custom theme nav menus
1. [Meta Loader](https://github.com/Underpin-WP/meta-loader) Manage custom meta to store in various meta tables
1. [Option Loader](https://github.com/Underpin-WP/option-loader) Register , and manage values to store in wp_options
1. [Rest Endpoint Loader](https://github.com/Underpin-WP/rest-endpoint-loader) Create, register, and manage REST
   endpoints
1. [Script Loader](https://github.com/Underpin-WP/script-loader) Create, and enqueue scripts
1. [Shortcode Loader](https://github.com/Underpin-WP/shortcode-loader) Create, and render custom shortcodes
1. [Sidebar Loader](https://github.com/Underpin-WP/sidebar-loader) Create, and manage WordPress sidebars
1. [Style Loader](https://github.com/Underpin-WP/style-loader) Create, and enqueue styles

## Webpack Config

The Webpack and NPM configuration in this plugin is a barebones WordPress configuration that aligns the script dir with
Underpin's default script directory. It is intentionally un-opinionated, but it is set-up and ready to be extended.

The default entrypoint is `src/index.js`.

## Stylesheets

The default webpack config comes with Webpack's [postCSS loader](https://webpack.js.org/loaders/postcss-loader/), and
can handle SCSS and CSS files. You can override the default loader by adding a postcss file to this theme.