// use Parser\FilterProcessing;
// use Parser\OutputHandling;
// use Parser\PluginsHandling;
// use Parser\RulesHandling;
// use Parser\TagProcessing;
// use Parser\TagStack;

/**#@+
* Boolean rules bitfield
*/
/** @const */ RULE_AUTO_CLOSE       =  1;
/** @const */ RULE_AUTO_REOPEN      =  2;
/** @const */ RULE_IGNORE_TEXT      =  4;
/** @const */ RULE_IS_TRANSPARENT   =  8;
/** @const */ RULE_NO_BR_CHILD      = 16;
/** @const */ RULE_NO_BR_DESCENDANT = 32;
/** @const */ RULE_TRIM_WHITESPACE  = 64;
/**#@-*/

/**
* @type {!Logger} This parser's logger
*/
var logger = new Logger;

/**
* @type {!Object} Variables registered for use in filters
*/
// TODO: should include logger for convenience
var registeredVars = {};

/**
* @type {!Object} Tags' config
* @const
*/
var tagsConfig = {};

/**
* @type {!string} Text being parsed
*/
var text;

/**
* Get this parser's Logger instance
*
* @return {!Logger}
*/
function getLogger()
{
	return logger;
}

/**
* Parse a text
*
* @param  {!string} _text Text to parse
* @return {!string}       XML representation
*/
function parse(_text)
{
	reset(_text);
	executePluginParsers();
	sortTags();
	processTags();

	return output;
}

/**
* Reset the parser for a new parsing
*
* @param {!string} _text Text to be parsed
*/
function reset(_text)
{
	// Normalize CR/CRLF to LF, remove control characters that aren't allowed in XML
	_text = _text.replace(/\r\n?/g, "\n", _text);
	_text = _text.replace(/[\x00-\x08\x0B\x0C\x0E-\x1F]+/g, '', _text);

	context    = rootContext;
	isRich     = false;
	namespaces = {};
	output     = '';
	text       = _text;
	textLen    = text.length;
	tagStack   = [];
}