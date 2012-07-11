<?php
App::uses('UsersVendor', 'Model');

/**
 * UsersVendor Test Case
 *
 */
class UsersVendorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.users_vendor',
		'app.users',
		'app.vendors'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsersVendor = ClassRegistry::init('UsersVendor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsersVendor);

		parent::tearDown();
	}

}
