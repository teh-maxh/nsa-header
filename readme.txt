== Add NSA Header ==
Contributors: tehmaxh
Author URI: https://www.maxh.name/
Plugin URI: https://www.maxh.name/projects/nsa-header
Donate Link: https://www.maxh.name/donate
Tags: http header
Requires at least: 1.2
Tested up to: 6.7
Stable tag: trunk
Requires PHP: 4.0
License: DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE, Version 2
License URI: http://www.wtfpl.net/txt/copying/

Add NSA Header adds an NSA-Keywords HTTP header to reduce the effectiveness of mass spying operations.

== Description ==
Add NSA Header uses a list of keywords known to be sensitive to mass spying operations. It randomly selects a few of those keywords with each page request and includes them in an NSA-Keywords HTTP header. This introduces useless information to mass spying operations, reducing their effectiveness.

It is recommended that this be used only on WordPress sites that are only accessible via TLS.

== Installation ==
1. Upload the plugin files to `wp-content/plugins/add-nsa-header`.
2. Activate the plugin through the WordPress 'Plugins' page.
