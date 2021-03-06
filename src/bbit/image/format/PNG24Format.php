<?php

namespace bbit\image\format;

use bbit\image\Canvas;

/**
 * @author Oliver Hoff <oliver@hofff.com>
 */
class PNG24Format extends PNGFormat {

	public function __construct($compression = 5, $filter = self::FILTER_PAETH) {
		parent::__construct($compression, $filter);
	}

	public function optimizeFor(Canvas $canvas, $allowedFilter = self::FILTER_ALL) {
		return parent::optimizeFor($canvas->toTrueColorCanvas(), $allowedFilter);
	}

	public function getBinary(Canvas $canvas, $optimize = false, $allowedFilter = self::FILTER_ALL) {
		return parent::getBinary($canvas->toTrueColorCanvas(), $optimize, $allowedFilter);
	}

}
