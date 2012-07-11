<?php
App::uses('Certification', 'Model');

/**
 * Certification Test Case
 *
 */
class CertificationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.certification',
		'app.user',
		'app.users_certification',
		'app.customer',
		'app.users_customer',
		'app.education',
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
		$this->Certification = ClassRegistry::init('Certification');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Certification);

		parent::tearDown();
	}

}
