<?php
/**
 * 
 * @package	MoodleWS
 * @copyright	(c) P.Pollet 2007 under GPL
 */
class userDatum {
	/** 
	* @var string
	*/
	public $action;
	/** 
	* @var string
	*/
	public $address;
	/** 
	* @var string
	*/
	public $aim;
	/** 
	* @var string
	*/
	public $auth;
	/** 
	* @var string
	*/
	public $city;
	/** 
	* @var int
	*/
	public $confirmed;
	/** 
	* @var string
	*/
	public $country;
	/** 
	* @var int
	*/
	public $deleted;
	/** 
	* @var string
	*/
	public $department;
	/** 
	* @var string
	*/
	public $description;
	/** 
	* @var string
	*/
	public $email;
	/** 
	* @var int
	*/
	public $emailstop;
	/** 
	* @var string
	*/
	public $firstname;
	/** 
	* @var string
	*/
	public $icq;
	/** 
	* @var int
	*/
	public $id;
	/** 
	* @var string
	*/
	public $idnumber;
	/** 
	* @var string
	*/
	public $institution;
	/** 
	* @var string
	*/
	public $lang;
	/** 
	* @var string
	*/
	public $lastip;
	/** 
	* @var string
	*/
	public $lastname;
	/** 
	* @var int
	*/
	public $mnethostid;
	/** 
	* @var string
	*/
	public $msn;
	/** 
	* @var string
	*/
	public $password;
	/** 
	* @var string
	*/
	public $passwordmd5;
	/** 
	* @var string
	*/
	public $phone1;
	/** 
	* @var string
	*/
	public $phone2;
	/** 
	* @var int
	*/
	public $policyagreed;
	/** 
	* @var string
	*/
	public $skype;
	/** 
	* @var string
	*/
	public $theme;
	/** 
	* @var string
	*/
	public $timezone;
	/** 
	* @var string
	*/
	public $username;
	/** 
	* @var string
	*/
	public $yahoo;

	/**
	* default constructor for class userDatum
	* @param string $action
	* @param string $address
	* @param string $aim
	* @param string $auth
	* @param string $city
	* @param int $confirmed
	* @param string $country
	* @param int $deleted
	* @param string $department
	* @param string $description
	* @param string $email
	* @param int $emailstop
	* @param string $firstname
	* @param string $icq
	* @param int $id
	* @param string $idnumber
	* @param string $institution
	* @param string $lang
	* @param string $lastip
	* @param string $lastname
	* @param int $mnethostid
	* @param string $msn
	* @param string $password
	* @param string $passwordmd5
	* @param string $phone1
	* @param string $phone2
	* @param int $policyagreed
	* @param string $skype
	* @param string $theme
	* @param string $timezone
	* @param string $username
	* @param string $yahoo
	* @return userDatum
	*/
	 public function userDatum($action='',$address='',$aim='',$auth='',$city='',$confirmed=0,$country='',$deleted=0,$department='',$description='',$email='',$emailstop=0,$firstname='',$icq='',$id=0,$idnumber='',$institution='',$lang='',$lastip='',$lastname='',$mnethostid=0,$msn='',$password='',$passwordmd5='',$phone1='',$phone2='',$policyagreed=0,$skype='',$theme='',$timezone='',$username='',$yahoo=''){
		 $this->action=$action   ;
		 $this->address=$address   ;
		 $this->aim=$aim   ;
		 $this->auth=$auth   ;
		 $this->city=$city   ;
		 $this->confirmed=$confirmed   ;
		 $this->country=$country   ;
		 $this->deleted=$deleted   ;
		 $this->department=$department   ;
		 $this->description=$description   ;
		 $this->email=$email   ;
		 $this->emailstop=$emailstop   ;
		 $this->firstname=$firstname   ;
		 $this->icq=$icq   ;
		 $this->id=$id   ;
		 $this->idnumber=$idnumber   ;
		 $this->institution=$institution   ;
		 $this->lang=$lang   ;
		 $this->lastip=$lastip   ;
		 $this->lastname=$lastname   ;
		 $this->mnethostid=$mnethostid   ;
		 $this->msn=$msn   ;
		 $this->password=$password   ;
		 $this->passwordmd5=$passwordmd5   ;
		 $this->phone1=$phone1   ;
		 $this->phone2=$phone2   ;
		 $this->policyagreed=$policyagreed   ;
		 $this->skype=$skype   ;
		 $this->theme=$theme   ;
		 $this->timezone=$timezone   ;
		 $this->username=$username   ;
		 $this->yahoo=$yahoo   ;
	}
	/* get accessors */

	/**
	* @return string
	*/
	public function getAction(){
		 return $this->action;
	}


	/**
	* @return string
	*/
	public function getAddress(){
		 return $this->address;
	}


	/**
	* @return string
	*/
	public function getAim(){
		 return $this->aim;
	}


	/**
	* @return string
	*/
	public function getAuth(){
		 return $this->auth;
	}


	/**
	* @return string
	*/
	public function getCity(){
		 return $this->city;
	}


	/**
	* @return int
	*/
	public function getConfirmed(){
		 return $this->confirmed;
	}


	/**
	* @return string
	*/
	public function getCountry(){
		 return $this->country;
	}


	/**
	* @return int
	*/
	public function getDeleted(){
		 return $this->deleted;
	}


	/**
	* @return string
	*/
	public function getDepartment(){
		 return $this->department;
	}


	/**
	* @return string
	*/
	public function getDescription(){
		 return $this->description;
	}


	/**
	* @return string
	*/
	public function getEmail(){
		 return $this->email;
	}


	/**
	* @return int
	*/
	public function getEmailstop(){
		 return $this->emailstop;
	}


	/**
	* @return string
	*/
	public function getFirstname(){
		 return $this->firstname;
	}


	/**
	* @return string
	*/
	public function getIcq(){
		 return $this->icq;
	}


	/**
	* @return int
	*/
	public function getId(){
		 return $this->id;
	}


	/**
	* @return string
	*/
	public function getIdnumber(){
		 return $this->idnumber;
	}


	/**
	* @return string
	*/
	public function getInstitution(){
		 return $this->institution;
	}


	/**
	* @return string
	*/
	public function getLang(){
		 return $this->lang;
	}


	/**
	* @return string
	*/
	public function getLastip(){
		 return $this->lastip;
	}


	/**
	* @return string
	*/
	public function getLastname(){
		 return $this->lastname;
	}


	/**
	* @return int
	*/
	public function getMnethostid(){
		 return $this->mnethostid;
	}


	/**
	* @return string
	*/
	public function getMsn(){
		 return $this->msn;
	}


	/**
	* @return string
	*/
	public function getPassword(){
		 return $this->password;
	}


	/**
	* @return string
	*/
	public function getPasswordmd5(){
		 return $this->passwordmd5;
	}


	/**
	* @return string
	*/
	public function getPhone1(){
		 return $this->phone1;
	}


	/**
	* @return string
	*/
	public function getPhone2(){
		 return $this->phone2;
	}


	/**
	* @return int
	*/
	public function getPolicyagreed(){
		 return $this->policyagreed;
	}


	/**
	* @return string
	*/
	public function getSkype(){
		 return $this->skype;
	}


	/**
	* @return string
	*/
	public function getTheme(){
		 return $this->theme;
	}


	/**
	* @return string
	*/
	public function getTimezone(){
		 return $this->timezone;
	}


	/**
	* @return string
	*/
	public function getUsername(){
		 return $this->username;
	}


	/**
	* @return string
	*/
	public function getYahoo(){
		 return $this->yahoo;
	}

	/*set accessors */

	/**
	* @param string $action
	* @return void
	*/
	public function setAction($action){
		$this->action=$action;
	}


	/**
	* @param string $address
	* @return void
	*/
	public function setAddress($address){
		$this->address=$address;
	}


	/**
	* @param string $aim
	* @return void
	*/
	public function setAim($aim){
		$this->aim=$aim;
	}


	/**
	* @param string $auth
	* @return void
	*/
	public function setAuth($auth){
		$this->auth=$auth;
	}


	/**
	* @param string $city
	* @return void
	*/
	public function setCity($city){
		$this->city=$city;
	}


	/**
	* @param int $confirmed
	* @return void
	*/
	public function setConfirmed($confirmed){
		$this->confirmed=$confirmed;
	}


	/**
	* @param string $country
	* @return void
	*/
	public function setCountry($country){
		$this->country=$country;
	}


	/**
	* @param int $deleted
	* @return void
	*/
	public function setDeleted($deleted){
		$this->deleted=$deleted;
	}


	/**
	* @param string $department
	* @return void
	*/
	public function setDepartment($department){
		$this->department=$department;
	}


	/**
	* @param string $description
	* @return void
	*/
	public function setDescription($description){
		$this->description=$description;
	}


	/**
	* @param string $email
	* @return void
	*/
	public function setEmail($email){
		$this->email=$email;
	}


	/**
	* @param int $emailstop
	* @return void
	*/
	public function setEmailstop($emailstop){
		$this->emailstop=$emailstop;
	}


	/**
	* @param string $firstname
	* @return void
	*/
	public function setFirstname($firstname){
		$this->firstname=$firstname;
	}


	/**
	* @param string $icq
	* @return void
	*/
	public function setIcq($icq){
		$this->icq=$icq;
	}


	/**
	* @param int $id
	* @return void
	*/
	public function setId($id){
		$this->id=$id;
	}


	/**
	* @param string $idnumber
	* @return void
	*/
	public function setIdnumber($idnumber){
		$this->idnumber=$idnumber;
	}


	/**
	* @param string $institution
	* @return void
	*/
	public function setInstitution($institution){
		$this->institution=$institution;
	}


	/**
	* @param string $lang
	* @return void
	*/
	public function setLang($lang){
		$this->lang=$lang;
	}


	/**
	* @param string $lastip
	* @return void
	*/
	public function setLastip($lastip){
		$this->lastip=$lastip;
	}


	/**
	* @param string $lastname
	* @return void
	*/
	public function setLastname($lastname){
		$this->lastname=$lastname;
	}


	/**
	* @param int $mnethostid
	* @return void
	*/
	public function setMnethostid($mnethostid){
		$this->mnethostid=$mnethostid;
	}


	/**
	* @param string $msn
	* @return void
	*/
	public function setMsn($msn){
		$this->msn=$msn;
	}


	/**
	* @param string $password
	* @return void
	*/
	public function setPassword($password){
		$this->password=$password;
	}


	/**
	* @param string $passwordmd5
	* @return void
	*/
	public function setPasswordmd5($passwordmd5){
		$this->passwordmd5=$passwordmd5;
	}


	/**
	* @param string $phone1
	* @return void
	*/
	public function setPhone1($phone1){
		$this->phone1=$phone1;
	}


	/**
	* @param string $phone2
	* @return void
	*/
	public function setPhone2($phone2){
		$this->phone2=$phone2;
	}


	/**
	* @param int $policyagreed
	* @return void
	*/
	public function setPolicyagreed($policyagreed){
		$this->policyagreed=$policyagreed;
	}


	/**
	* @param string $skype
	* @return void
	*/
	public function setSkype($skype){
		$this->skype=$skype;
	}


	/**
	* @param string $theme
	* @return void
	*/
	public function setTheme($theme){
		$this->theme=$theme;
	}


	/**
	* @param string $timezone
	* @return void
	*/
	public function setTimezone($timezone){
		$this->timezone=$timezone;
	}


	/**
	* @param string $username
	* @return void
	*/
	public function setUsername($username){
		$this->username=$username;
	}


	/**
	* @param string $yahoo
	* @return void
	*/
	public function setYahoo($yahoo){
		$this->yahoo=$yahoo;
	}

}

?>
