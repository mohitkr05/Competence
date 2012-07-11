<?php
App::uses('UsersSkill', 'Model');

/**
 * UsersSkill Test Case
 *
 */
class UsersSkillTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.users_skill',
		'app.users',
		'app.skills'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsersSkill = ClassRegistry::init('UsersSkill');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsersSkill);

		parent::tearDown();
	}

}
