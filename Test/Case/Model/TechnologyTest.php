<?php
App::uses('Technology', 'Model');

/**
 * Technology Test Case
 *
 */
class TechnologyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.technology',
		'app.user',
		'app.certification',
		'app.users_certification',
		'app.customer',
		'app.users_customer',
		'app.education',
		'app.users_education',
		'app.skill',
		'app.users_skill',
		'app.vendor',
		'app.users_vendor',
		'app.users_technology'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Technology = ClassRegistry::init('Technology');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Technology);

		parent::tearDown();
	}

}
