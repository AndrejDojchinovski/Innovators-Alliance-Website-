<?php

namespace WTS_EAE\Modules\ImageCompare;

use WTS_EAE\Base\Module_Base;

class Module extends Module_Base {

	public function get_widgets() {
		return [
			'ImageCompare',
		];
	}

	public function get_name() {
		return 'eae-imagecompare';
	}

}