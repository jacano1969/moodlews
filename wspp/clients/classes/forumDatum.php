<?php
/**
 * 
 * @package	MoodleWS
 * @copyright	(c) P.Pollet 2007 under GPL
 */
class forumDatum {
	/** 
	* @var string
	*/
	public $action;
	/** 
	* @var int
	*/
	public $assessed;
	/** 
	* @var int
	*/
	public $assesstimefinish;
	/** 
	* @var int
	*/
	public $assesstimestart;
	/** 
	* @var int
	*/
	public $blockafter;
	/** 
	* @var int
	*/
	public $blockperiod;
	/** 
	* @var int
	*/
	public $course;
	/** 
	* @var int
	*/
	public $forcesubscribe;
	/** 
	* @var int
	*/
	public $id;
	/** 
	* @var string
	*/
	public $intro;
	/** 
	* @var int
	*/
	public $maxbytes;
	/** 
	* @var string
	*/
	public $name;
	/** 
	* @var int
	*/
	public $rssarticles;
	/** 
	* @var int
	*/
	public $rsstype;
	/** 
	* @var int
	*/
	public $scale;
	/** 
	* @var int
	*/
	public $timemodified;
	/** 
	* @var int
	*/
	public $trackingtype;
	/** 
	* @var string
	*/
	public $type;
	/** 
	* @var int
	*/
	public $warnafter;

	/**
	* default constructor for class forumDatum
	* @param string $action
	* @param int $assessed
	* @param int $assesstimefinish
	* @param int $assesstimestart
	* @param int $blockafter
	* @param int $blockperiod
	* @param int $course
	* @param int $forcesubscribe
	* @param int $id
	* @param string $intro
	* @param int $maxbytes
	* @param string $name
	* @param int $rssarticles
	* @param int $rsstype
	* @param int $scale
	* @param int $timemodified
	* @param int $trackingtype
	* @param string $type
	* @param int $warnafter
	* @return forumDatum
	*/
	 public function forumDatum($action='',$assessed=0,$assesstimefinish=0,$assesstimestart=0,$blockafter=0,$blockperiod=0,$course=0,$forcesubscribe=0,$id=0,$intro='',$maxbytes=0,$name='',$rssarticles=0,$rsstype=0,$scale=0,$timemodified=0,$trackingtype=0,$type='',$warnafter=0){
		 $this->action=$action   ;
		 $this->assessed=$assessed   ;
		 $this->assesstimefinish=$assesstimefinish   ;
		 $this->assesstimestart=$assesstimestart   ;
		 $this->blockafter=$blockafter   ;
		 $this->blockperiod=$blockperiod   ;
		 $this->course=$course   ;
		 $this->forcesubscribe=$forcesubscribe   ;
		 $this->id=$id   ;
		 $this->intro=$intro   ;
		 $this->maxbytes=$maxbytes   ;
		 $this->name=$name   ;
		 $this->rssarticles=$rssarticles   ;
		 $this->rsstype=$rsstype   ;
		 $this->scale=$scale   ;
		 $this->timemodified=$timemodified   ;
		 $this->trackingtype=$trackingtype   ;
		 $this->type=$type   ;
		 $this->warnafter=$warnafter   ;
	}
	/* get accessors */

	/**
	* @return string
	*/
	public function getAction(){
		 return $this->action;
	}


	/**
	* @return int
	*/
	public function getAssessed(){
		 return $this->assessed;
	}


	/**
	* @return int
	*/
	public function getAssesstimefinish(){
		 return $this->assesstimefinish;
	}


	/**
	* @return int
	*/
	public function getAssesstimestart(){
		 return $this->assesstimestart;
	}


	/**
	* @return int
	*/
	public function getBlockafter(){
		 return $this->blockafter;
	}


	/**
	* @return int
	*/
	public function getBlockperiod(){
		 return $this->blockperiod;
	}


	/**
	* @return int
	*/
	public function getCourse(){
		 return $this->course;
	}


	/**
	* @return int
	*/
	public function getForcesubscribe(){
		 return $this->forcesubscribe;
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
	public function getIntro(){
		 return $this->intro;
	}


	/**
	* @return int
	*/
	public function getMaxbytes(){
		 return $this->maxbytes;
	}


	/**
	* @return string
	*/
	public function getName(){
		 return $this->name;
	}


	/**
	* @return int
	*/
	public function getRssarticles(){
		 return $this->rssarticles;
	}


	/**
	* @return int
	*/
	public function getRsstype(){
		 return $this->rsstype;
	}


	/**
	* @return int
	*/
	public function getScale(){
		 return $this->scale;
	}


	/**
	* @return int
	*/
	public function getTimemodified(){
		 return $this->timemodified;
	}


	/**
	* @return int
	*/
	public function getTrackingtype(){
		 return $this->trackingtype;
	}


	/**
	* @return string
	*/
	public function getType(){
		 return $this->type;
	}


	/**
	* @return int
	*/
	public function getWarnafter(){
		 return $this->warnafter;
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
	* @param int $assessed
	* @return void
	*/
	public function setAssessed($assessed){
		$this->assessed=$assessed;
	}


	/**
	* @param int $assesstimefinish
	* @return void
	*/
	public function setAssesstimefinish($assesstimefinish){
		$this->assesstimefinish=$assesstimefinish;
	}


	/**
	* @param int $assesstimestart
	* @return void
	*/
	public function setAssesstimestart($assesstimestart){
		$this->assesstimestart=$assesstimestart;
	}


	/**
	* @param int $blockafter
	* @return void
	*/
	public function setBlockafter($blockafter){
		$this->blockafter=$blockafter;
	}


	/**
	* @param int $blockperiod
	* @return void
	*/
	public function setBlockperiod($blockperiod){
		$this->blockperiod=$blockperiod;
	}


	/**
	* @param int $course
	* @return void
	*/
	public function setCourse($course){
		$this->course=$course;
	}


	/**
	* @param int $forcesubscribe
	* @return void
	*/
	public function setForcesubscribe($forcesubscribe){
		$this->forcesubscribe=$forcesubscribe;
	}


	/**
	* @param int $id
	* @return void
	*/
	public function setId($id){
		$this->id=$id;
	}


	/**
	* @param string $intro
	* @return void
	*/
	public function setIntro($intro){
		$this->intro=$intro;
	}


	/**
	* @param int $maxbytes
	* @return void
	*/
	public function setMaxbytes($maxbytes){
		$this->maxbytes=$maxbytes;
	}


	/**
	* @param string $name
	* @return void
	*/
	public function setName($name){
		$this->name=$name;
	}


	/**
	* @param int $rssarticles
	* @return void
	*/
	public function setRssarticles($rssarticles){
		$this->rssarticles=$rssarticles;
	}


	/**
	* @param int $rsstype
	* @return void
	*/
	public function setRsstype($rsstype){
		$this->rsstype=$rsstype;
	}


	/**
	* @param int $scale
	* @return void
	*/
	public function setScale($scale){
		$this->scale=$scale;
	}


	/**
	* @param int $timemodified
	* @return void
	*/
	public function setTimemodified($timemodified){
		$this->timemodified=$timemodified;
	}


	/**
	* @param int $trackingtype
	* @return void
	*/
	public function setTrackingtype($trackingtype){
		$this->trackingtype=$trackingtype;
	}


	/**
	* @param string $type
	* @return void
	*/
	public function setType($type){
		$this->type=$type;
	}


	/**
	* @param int $warnafter
	* @return void
	*/
	public function setWarnafter($warnafter){
		$this->warnafter=$warnafter;
	}

}

?>
