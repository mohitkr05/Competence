<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.certification',
		'app.users_certification',
		'app.customer',
		'app.users_customer',
		'app.education',
		'app.users_education',
		'app.skill',
		'app.users_skill',
		'app.technology',
		'app.users_technology',
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
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
