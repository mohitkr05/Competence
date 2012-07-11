<?php
App::uses('Skill', 'Model');

/**
 * Skill Test Case
 *
 */
class SkillTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.skill',
		'app.user',
		'app.certification',
		'app.users_certification',
		'app.customer',
		'app.users_customer',
		'app.education',
		'app.users_education',
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
		$this->Skill = ClassRegistry::init('Skill');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Skill);

		parent::tearDown();
	}

}
