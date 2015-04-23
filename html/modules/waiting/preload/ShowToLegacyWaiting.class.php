<?php
if(!defined('XOOPS_ROOT_PATH'))
{
	exit;
}

/**
 * Waiting_AssetPreloadBase
**/
class Waiting_ShowToLegacyWaiting extends XCube_ActionFilter
{
	private $_ShowEmpty = false;
	private $_CacheMin = 5;
	
	private $mDirname = 'waiting';
	private $mModule = null;
	
	public function preBlockFilter() {
		$this->mRoot->mDelegateManager->add('Legacyblock.Waiting.Show', array($this, 'callbackWaitingShow'));
	}
	
	public function callbackWaitingShow(& $modules) {
		include_once dirname(dirname(__FILE__)) . '/blocks/waiting_waiting.php';
		$options = array( $this->_ShowEmpty , $this->_CacheMin );
		$block = b_waiting_waiting_show($options);
		if (is_array($block) && !empty($block['modules'])) {
			foreach($block['modules'] as $md) {
				if (!empty($md['pending'])) {
					foreach($md['pending'] as $pending) {
						$blockVal = array();
						$blockVal['adminlink'] = $pending['adminlink'];
						$blockVal['pendingnum'] = $pending['pendingnum'];
						$blockVal['lang_linkname'] = $md['name'] . ':' . $pending['lang_linkname'];
						$modules[] = $blockVal;
					}
				}
			}
		}
	}
	
	private function getXoopsModule() {
		if (! $this->mModule) {
			$mH =& xoops_gethandler('module');
			$this->mModule =& $mH->getByDirname($this->mDirname);
		}
		return $this->mModule;
	}
}
