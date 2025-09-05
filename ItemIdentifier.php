<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
\Bitrix\Main\Loader::IncludeModule('crm');
use Bitrix\Crm\ItemIdentifier;
use Bitrix\Crm\Service\Container;

$idDeal = 266429;
// $idDeal = $this->GetVariable('idDeal');

$child = new ItemIdentifier(\CCrmOwnerType::Deal, $idDeal);
$parents = Container::getInstance()->getRelationManager()->getParentElements($child);

foreach ($parents as $parent) {
    $entityTypeId = $parent->getEntityTypeId();
    $entityId = $parent->getEntityId(); 
    $myEntityId = $entityId;
}
// $this->SetVariable('leadID', $myEntityId);
print_r($myEntityId);
?>