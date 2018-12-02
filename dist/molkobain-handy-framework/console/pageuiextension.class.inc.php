<?php
/**
 * Copyright (c) 2015 - 2018 Molkobain.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace Molkobain\iTop\HandyFramework\Console\Extension;

use iPageUIExtension;
use iTopWebPage;
use utils;
use Molkobain\iTop\HandyFramework\Common\Helper\ConfigHelper;

/**
 * Class PageUIExtension
 *
 * @package Molkobain\iTop\HandyFramework\Console\Extension
 */
class PageUIExtension implements iPageUIExtension
{
    /**
	 * @inheritdoc
	 */
	public function GetNorthPaneHtml(iTopWebPage $oPage)
	{
		// Check if enabled
		if(ConfigHelper::IsEnabled() === false)
		{
			return;
		}

		$oPage->add_saas('env-' . utils::GetCurrentEnvironment() . '/' . ConfigHelper::GetModuleCode() . '/common/css/handy-framework.scss');
		$oPage->add_linked_script(ConfigHelper::GetAbsoluteModuleUrl() . 'common/js/handy-framework.js');
	}

	/**
	 * @inheritdoc
	 */
	public function GetSouthPaneHtml(iTopWebPage $oPage)
	{
		// Nothing to do
	}

	/**
	 * @inheritdoc
	 */
	public function GetBannerHtml(iTopWebPage $oPage)
	{
		// Nothing to do
}}
