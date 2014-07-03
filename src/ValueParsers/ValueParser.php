<?php

namespace ValueParsers;

/**
 * Interface for value parsers.
 *
 * @since 0.1
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
interface ValueParser {

	/**
	 * Identifier for the option that holds the code of the language in which the parser should operate.
	 */
	const OPT_LANG = 'lang';

	/**
	 * Parses a value.
	 *
	 * @param mixed $value The value to parse
	 *
	 * @return mixed
	 */
	public function parse( $value );

}
