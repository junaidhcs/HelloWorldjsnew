<?php

namespace Mytask\HelloWorldjsnew\Block;

use Magento\Framework\View\Element\Template;

class Hellojs extends Template {
	public function getTextjs() {
		return "Hello World js - check console log";
	}
}