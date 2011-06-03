<?php
require_once ('../classes/mdl_soapserver.php');

$client=new mdl_soapserver();
require_once ('../auth.php');
/**test code for get_my_groups
* @param int $client
* @param string $sesskey
* @param string $uid
* @param string $idfield
* @return  groupRecord[]
*/

$lr=$client->login(LOGIN,PASSWORD);
$res=$client->get_my_groups($lr->getClient(),$lr->getSessionKey(),'','');
print_r($res);
$client->logout($lr->getClient(),$lr->getSessionKey());

?>
