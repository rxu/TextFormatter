## Add a link to the original URL below the embedded content

If you want to display a link to the original page below the embedded content, the `appendTemplate()` method can be called (before adding media sites) to set a template to be displayed after the embedded content.

```php
$configurator = new s9e\TextFormatter\Configurator;

$configurator->MediaEmbed->appendTemplate(
	'<a href="{@url}"><xsl:value-of select="@url"/></a>'
);
$configurator->MediaEmbed->add('youtube');

// Get an instance of the parser and the renderer
extract($configurator->finalize());

$text = '[youtube]http://www.youtube.com/watch?v=-cEzsCAzTak[/youtube]';
$xml  = $parser->parse($text);
$html = $renderer->render($xml);

echo $html;
```
```html
<iframe width="560" height="315" allowfullscreen="" frameborder="0" scrolling="no" src="//www.youtube.com/embed/-cEzsCAzTak?controls=2"></iframe><a href="http://www.youtube.com/watch?v=-cEzsCAzTak">http://www.youtube.com/watch?v=-cEzsCAzTak</a>
```