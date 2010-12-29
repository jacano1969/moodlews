<?php
/**
 * 
 * @package	MoodleWS
 * @copyright	(c) P.Pollet 2007 under GPL
 */
class getLastChangesReturn {
	/** 
	* @var changeRecord[]
	*/
	public $changes;

	/**
	* default constructor for class getLastChangesReturn
	* @return getLastChangesReturn
	*/	 public function getLastChangesReturn() {
		 $this->changes=array();
	}
	/* get accessors */

	/**
	* @return changeRecord[]
	*/
	public function getChanges(){
		 return $this->changes;
	}

	/*set accessors */

	/**
	* @param changeRecord[] $changes
	* @return void
	*/
	public function setChanges($changes){
		$this->changes=$changes;
	}

}

?>
