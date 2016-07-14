<?php

namespace ValueParsers;

/**
 * Interface for value parsers.
 *
 * @since 0.1
 *
 * @license GPL-2.0+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
interface ValueParser {

	/**
	 * Identifier for the option that holds the code of the language in which the parser should operate.
	 * @since 0.1
	 */
	const OPT_LANG = 'lang';

	/**
	 * Parses a value.
	 *
	 * @since 0.1
	 *
	 * @param mixed $value The value to parse
	 *
	 * @return mixed
	 */
	public function parse( $value );

}
