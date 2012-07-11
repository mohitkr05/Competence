<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Certification $Certification
 * @property Customer $Customer
 * @property Education $Education
 * @property Skill $Skill
 * @property Vendor $Vendor
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'username';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'experience' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Certification' => array(
			'className' => 'Certification',
			'joinTable' => 'users_certifications',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'certification_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Customer' => array(
			'className' => 'Customer',
			'joinTable' => 'users_customers',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'customer_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Education' => array(
			'className' => 'Education',
			'joinTable' => 'users_educations',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'education_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Skill' => array(
			'className' => 'Skill',
			'joinTable' => 'users_skills',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'skill_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Vendor' => array(
			'className' => 'Vendor',
			'joinTable' => 'users_vendors',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'vendor_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
