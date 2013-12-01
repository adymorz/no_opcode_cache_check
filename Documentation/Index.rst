.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: Includes.txt


.. _start:

=============================================================
Hide opcode cache check in system environment check
=============================================================

.. only:: html

	:Classification:
		no_opcode_cache_check

	:Version:
		|release|

	:Language:
		en

	:Description:
		This extension deactivates opcode cache check in system environment check

	:Keywords:
		opcode, opcode cache check, system environment check

	:Copyright:
		2013

	:Author:
		Adrian Dymorz

	:Email:
		dev@adrian.dymorz.ch

	:License:
		This document is published under the Open Content License
		available from http://www.opencontent.org/opl.shtml

	:Rendered:
		|today|

	The content of this document is related to TYPO3,
	a GNU/GPL CMS/Framework available from `www.typo3.org <http://www.typo3.org/>`_.


What does it do?
----------------

This extenions deactivates opcode cache check in system environment check. Use the extension for environments where no opcode cache is available to prevent the system status update cron job sending emails about it.

.. figure:: Images/SystemEnvironmentCheck.png
	:width: 549px
	:alt: System environment check

	Screenshot of the modified system environment check

Users manual
------------

Install the extension and the warning about missing opcode cache is vanished.

Administrator Manual
--------------------

There is no configuration for this extension. No special steps required after installation.

If you find any issues report them on the `forge project page`_.

.. _`forge project page`: http://forge.typo3.org/projects/extension-no_opcode_cache_check

You find the source code on `the github repository`_.

.. _`the github repository`: https://github.com/adymorz/no_opcode_cache_check