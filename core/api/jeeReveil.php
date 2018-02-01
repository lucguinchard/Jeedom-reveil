<?php
header('Content-type: application/json');
require_once dirname(__FILE__) . "/../../../../core/php/core.inc.php";

if (!jeedom::apiAccess(init('apikey'), 'reveil')) {
	echo __('Clef API non valide, vous n\'êtes pas autorisé à effectuer cette action (reveil)', __FILE__);
	die();
}

$eqlogic = reveil::byId(init('id'));
if (!is_object($eqlogic)) {
	throw new Exception(__('Commande ID reveil inconnu : ', __FILE__) . init('id'));
}
if ($eqlogic->getEqType_name() != 'reveil') {
	throw new Exception(__('Cette commande n\'est pas de type reveil : ', __FILE__) . init('id'));
}
$eqlogic->UpdateDynamic(init('prog'),init('day'),init('heure'),init('minute'));
return true;
?>
