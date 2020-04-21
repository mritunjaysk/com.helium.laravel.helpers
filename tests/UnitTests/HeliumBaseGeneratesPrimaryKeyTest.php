<?php

namespace Tests\UnitTests;

use Tests\Models\TestHeliumBaseTraitsModel;

/**
 * Inherits all test cases from GeneratesPrimaryKeyTest
 */
class HeliumBaseGeneratesPrimaryKeyTest extends GeneratesPrimaryKeyTest
{
	protected const TEST_CLASS = TestHeliumBaseTraitsModel::class;
}