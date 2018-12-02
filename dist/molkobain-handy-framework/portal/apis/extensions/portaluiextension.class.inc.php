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

namespace Molkobain\iTop\HandyFramework\Portal\Extension;

use AbstractPortalUIExtension;
use Silex\Application;
use Molkobain\iTop\HandyFramework\Common\Helper\ConfigHelper;

/**
 * Class PortalUIExtension
 *
 * @package Molkobain\iTop\CaselogsToggler\Portal\Extension
 */
class PortalUIExtension extends AbstractPortalUIExtension
{
    /**
     * @inheritdoc
     */
    public function GetCSSFiles(Application $oApp)
    {
        // Check if enabled
        if(ConfigHelper::IsEnabled() === false)
        {
            return array();
        }

        $sModuleVersion = ConfigHelper::GetModuleVersion();
        $sURLBase = ConfigHelper::GetAbsoluteModuleUrl();

        // Note: Here we pass the compiled .css file in order to be compatible with iTop 2.5 and earlier (ApplicationHelper::LoadUIExtensions() refactoring that uses utils::GetCSSFromSASS())
        $aReturn = array(
            $sURLBase . 'common/css/handy-framework.css?v=' . $sModuleVersion,
        );

        return $aReturn;
    }

    /**
     * @inheritdoc
     */
    public function GetJSFiles(Application $oApp)
    {
	    // Check if enabled
	    if(ConfigHelper::IsEnabled() === false)
	    {
	        return array();
	    }

	    $sModuleVersion = ConfigHelper::GetModuleVersion();
	    $sURLBase = ConfigHelper::GetAbsoluteModuleUrl();

	    $aJSFiles = array(
	    	$sURLBase . 'common/js/handy-framework.js?v=' . $sModuleVersion,
	    );

        return $aJSFiles;
    }

    /**
     * @inheritdoc
     *
     * @throws \DictExceptionMissingString
     */
    public function GetJSInline(Application $oApp)
    {
        $sJSInline = '';

        return $sJSInline;
    }
}
