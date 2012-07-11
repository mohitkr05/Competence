<?php
App::uses('Education', 'Model');

/**
 * Education Test Case
 *
 */
class EducationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.education',
		'app.user',
		'app.certification',
		'app.users_certification',
		'app.customer',
		'app.users_customer',
		'app.users_education',
		'app.skill',
		'app.users_skill',
		'app.vendor',
		'app.users_vendor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Education = ClassRegistry::init('Education');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Education);

		parent::tearDown();
	}

}
