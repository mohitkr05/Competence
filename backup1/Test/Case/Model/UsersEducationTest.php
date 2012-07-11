<?php
App::uses('UsersEducation', 'Model');

/**
 * UsersEducation Test Case
 *
 */
class UsersEducationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.users_education',
		'app.users',
		'app.educations'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsersEducation = ClassRegistry::init('UsersEducation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsersEducation);

		parent::tearDown();
	}

}
