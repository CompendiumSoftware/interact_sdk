<?php


class deleteFolder extends interact
{
	public $params = array( 'folderName' => null );
	
	public function setFolderNameParam( $folderName )
	{
		$this->params['folderName'] = $folderName;
	}
}

class listFolders extends interact
{
	public $params = array();
}

class createContentLibraryFolder extends interact
{
	public $params = array( 'path' => null );
	
	public function setPathParam( $folderName )
	{
		$this->params['path'] = $folderName;
	}
}

class createFolder extends interact
{
	public $params = array( 'folderName' => null );
	
	public function setFolderNameParam( $folderName )
	{
		$this->params['folderName'] = $folderName;
	}
}

class doesContentLibraryFolderExist extends interact
{
	public $params = array( 'path' => null );
	
	public function setPathParam( $path )
	{
		$this->params['path'] = $path;
	}
}
