== NSA Header ==
Contributors: maxh
Donate Link: https://www.maxh.me.uk/donate/
Tags: http header
Requires at least: 1.2
Tested up to: 5.2.1
Stable tag: trunk
Requires PHP: 4.0
License: DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE, Version 2
License URI: http://www.wtfpl.net/txt/copying/

NSA Header adds an NSA-Keywords HTTP header to reduce the effectiveness of mass
spying operations.

== Description ==
NSA Header uses a list of keywords known to be sensitive to mass spying
operations. It randomly selects a few of those keywords with each page request
and includes them in an NSA-Keywords HTTP header. This introduces useless
information to mass spying operations, reducing their effectiveness.

It is recommended that this be used only on WordPress sites that are only
accessible via TLS.

==Installation==
1. Upload the plugin files to `/wp-content/plugins/nsa-header`.
2. Activate the plugin through the WordPress 'Plugins' page.