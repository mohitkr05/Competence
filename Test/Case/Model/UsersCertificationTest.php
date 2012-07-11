<?php
App::uses('UsersCertification', 'Model');

/**
 * UsersCertification Test Case
 *
 */
class UsersCertificationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.users_certification',
		'app.users',
		'app.certifications'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsersCertification = ClassRegistry::init('UsersCertification');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsersCertification);

		parent::tearDown();
	}

}
