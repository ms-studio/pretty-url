# MS-Studio Prettify URL

Helper plugin for ACF, that prettifies URL output (make it human-readable).

* Removes http:// or https://
* Removes www.
* Removes trailing slash

Rationale:

* You capture an URL with the ACF URL field.
* On the website, you build the link using the ACF field content, but you also need to display it. It's much nicer to display it as "example.com", without the http or www part.

Typical usage example:

```php
if ( get_field('acf_url') ) {
					
  $url = get_field('acf_url');
  if (function_exists('ms_studio_pretty_url')) {
    $url = ms_studio_pretty_url( $url );
  }
echo '<div><a href="' . get_field('acf_url') . '">' . $url . '</a></div>';
```
