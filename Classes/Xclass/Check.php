<?php
namespace ADymorz\NoOpcodeCacheCheck\Xclass;

class Check extends \TYPO3\CMS\Install\SystemEnvironment\Check {
	/**
	 * Prevent checking of opcode cache
	 *
	 * @return \TYPO3\CMS\Install\Status\OkStatus
	 */
	protected function checkSomePhpOpcodeCacheIsLoaded() {
		if (class_exists('\\TYPO3\\CMS\\Install\\SystemEnvironment\\OkStatus')) {
			$status = new \TYPO3\CMS\Install\SystemEnvironment\OkStatus();
		} elseif (class_exists('\\TYPO3\\CMS\\Install\\Status\\OkStatus')) {
			$status = new \TYPO3\CMS\Install\Status\OkStatus();
		} else {
			return parent::checkSomePhpOpcodeCacheIsLoaded();
		}
		$status->setTitle('No PHP opcode cache is wanted');
		return $status;
	}
}

?>
