<?php
require_once ('../classes/mdl_soapserverrest.php');

$client=new mdl_soapserverrest();
require_once ('../auth.php');
/**test code for get_teachers
* @param int $client
* @param string $sesskey
* @param string $courseid
* @param string $idfield
* @return  userRecord[]
*/

$lr=$client->login(LOGIN,PASSWORD);
$res=$client->get_teachers($lr->getClient(),$lr->getSessionKey(),'','');
print_r($res);
$client->logout($lr->getClient(),$lr->getSessionKey());

?>
