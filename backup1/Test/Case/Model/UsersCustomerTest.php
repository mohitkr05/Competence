<?php
App::uses('UsersCustomer', 'Model');

/**
 * UsersCustomer Test Case
 *
 */
class UsersCustomerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.users_customer',
		'app.users',
		'app.customers'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsersCustomer = ClassRegistry::init('UsersCustomer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsersCustomer);

		parent::tearDown();
	}

}
