<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Certification $Certification
 * @property Customer $Customer
 * @property Education $Education
 * @property Skill $Skill
 * @property Technology $Technology
 * @property Vendor $Vendor
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */  public $name = 'User';
	public $displayField = 'username';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            ),
			'match_passwords'=> array (
                'rule' => 'matchpasswords',
                'message' => 'Passwords Should match'
				
			)
			
        ),
		
		'confirm_password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A second password is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'manager' ,'lead' ,'employee')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
			)
		),
				
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
 
 
 public function beforeSave($options = array()) {
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
    }
	
public function matchpasswords($data) {
if($data['password']==$this->data['User']['confirm_password']) {return true;}
$this->invalidate('confirm_password','Passwords Should match');
return false;


}	
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
		'Technology' => array(
			'className' => 'Technology',
			'joinTable' => 'users_technologies',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'technology_id',
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
