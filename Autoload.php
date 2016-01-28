<?php

if ( !function_exists('Responsys_Autoload') ) {
	function Responsys_Autoload($class = NULL)
	{
		static $class_map = NULL;
		if ( $class_map == NULL ) {
			$class_map = array(
				'interact' => 'interact.php',
				'getLaunchStatus' => 'includes/campaign.php',
				'launchCampaign' => 'includes/campaign.php',
				'mergeTriggerEmail' => 'includes/campaign.php',
				'scheduleCampaignLaunch' => 'includes/campaign.php',
				'triggerCustomEvent' => 'includes/campaign.php',
				'triggerCampaignMessage' => 'includes/campaign.php',
				'HAmergeTriggerEmail' => 'includes/campaign.php',
				'copyContentLibraryItem' => 'includes/content.php',
				'createContentLibraryItem' => 'includes/content.php',
				'createDocument' => 'includes/content.php',
				'deleteContentLibraryItem' => 'includes/content.php',
				'deleteDocument' => 'includes/content.php',
				'getContentLibraryItem' => 'includes/content.php',
				'getDocumentContent' => 'includes/content.php',
				'getDocumentImages' => 'includes/content.php',
				'moveContentLibraryItem' => 'includes/content.php',
				'setDocumentContent' => 'includes/content.php',
				'setDocumentImages' => 'includes/content.php',
				'updateContentLibraryItem' => 'includes/content.php',
				'deleteFolder' => 'includes/folder.php',
				'listFolders' => 'includes/folder.php',
				'createContentLibraryFolder' => 'includes/folder.php',
				'createFolder' => 'includes/folder.php',
				'doesContentLibraryFolderExist' => 'includes/folder.php',
				'mergeListMembersRIID' => 'includes/list.php',
				'retrieveListMembers' => 'includes/list.php',
				'deleteListMembers' => 'includes/list.php',
				'createTable' => 'includes/table.php',
				'createTableWithPK' => 'includes/table.php',
				'deleteProfileExtensionMembers' => 'includes/table.php',
				'deleteTable' => 'includes/table.php',
				'mergeIntoProfileExtension' => 'includes/table.php',
				'mergeTableRecords' => 'includes/table.php',
				'mergeTableRecordsWithPK' => 'includes/table.php',
				'deleteTableRecords' => 'includes/table.php',
				'retrieveTableRecords' => 'includes/table.php',
				'retrieveProfileExtensionRecords' => 'includes/table.php',
				'truncateTable' => 'includes/table.php',
				'CustomEvent' => 'objects/CustomEvent.php',
				'DefaultPermissionStatus' => 'objects/DefaultPermissionStatus.php',
				'EmailFormat' => 'objects/EmailFormat.php',
				'Field' => 'objects/Field.php',
				'FieldType' => 'objects/FieldType.php',
				'ImageData' => 'objects/ImageData.php',
				'InteractObject' => 'objects/InteractObject.php',
				'ItemData' => 'objects/ItemData.php',
				'LaunchPreferences' => 'objects/LaunchPreferences.php',	
				'ListMergeRule' => 'objects/ListMergeRule.php',	
				'MatchColumn' => 'objects/MatchColumn.php',	
				'MatchOperator' => 'objects/MatchOperator.php',	
				'OptionalData' => 'objects/OptionalData.php',	
				'ProofLaunchOptions' => 'objects/ProofLaunchOptions.php',	
				'ProofLaunchType' => 'objects/ProofLaunchType.php',	
				'QueryColumn' => 'objects/QueryColumn.php',	
				'RecipientData' => 'objects/RecipientData.php',	
				'RecipientIdentifier' => 'objects/RecipientIdentifier.php',	
				'Recipient' => 'objects/Recipient.php',															
				'RecordData' => 'objects/RecordData.php',	
				'Record' => 'objects/Record.php',	
				'RejectChannel' => 'objects/RejectChannel.php',	
				'UpdateOnMatch' => 'objects/UpdateOnMatch.php',
				'authenticateServer' => 'objects/Login.php',
				'loginWithCertificate' => 'objects/Login.php',
				'ProgressChunk' => 'objects/ProgressChunk.php'
			);
		}
		$path = __DIR__;
		if ( isset($class_map[$class]) ) {
			$file = $path . '/' . $class_map[$class];
			require_once $file;
		} 	
	}
	spl_autoload_register('Responsys_Autoload');
}

?>