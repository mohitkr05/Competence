<?php
App::uses('Vendor', 'Model');

/**
 * Vendor Test Case
 *
 */
class VendorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vendor',
		'app.user',
		'app.certification',
		'app.users_certification',
		'app.customer',
		'app.users_customer',
		'app.education',
		'app.users_education',
		'app.skill',
		'app.users_skill',
		'app.users_vendor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vendor = ClassRegistry::init('Vendor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vendor);

		parent::tearDown();
	}

}
