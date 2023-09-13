<?php
/*
 * Copyright (c) 2015 - 2023 Molkobain.
 *
 * This file is part of licensed extension.
 *
 * Use of this extension is bound by the license you purchased. A license grants you a non-exclusive and non-transferable right to use and incorporate the item in your personal or commercial projects. There are several licenses available (see https://www.molkobain.com/usage-licenses/ for more informations)
 */

namespace Molkobain\iTop\Extension\HandyFramework\Tests\PHPUnitTests\UnitaryTests\Extension\Helper\ConfigHelper\Mock;

use Molkobain\iTop\Extension\HandyFramework\Helper\ConfigHelper;

/**
 * Class ConfigHelperA
 *
 * @package Molkobain\iTop\Extension\HandyFramework\Tests\PHPUnitTests\UnitaryTests\Extension\Helper\ConfigHelper\Mock
 */
class ConfigHelperA extends ConfigHelper
{
	const MODULE_NAME = 'mock-config-helper-a';
	const SETTING_CONST_FQCN = ConfigHelperA::class;

	// Fake setting name, for testing purpose
	const DEFAULT_SETTING_FOO = 'bar';
}
