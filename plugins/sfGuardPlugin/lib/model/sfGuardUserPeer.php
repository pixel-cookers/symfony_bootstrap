<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * @package    symfony
 * @subpackage plugin
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardUserPeer.php 7634 2008-02-27 18:01:40Z fabien $
 */
class sfGuardUserPeer extends PluginsfGuardUserPeer
{
	public static function retrieveByEmail($email, $isActive = true){
	  $c = new Criteria();

	  $c->addJoin(self::ID, sfGuardUserProfilePeer::USER_ID, Criteria::LEFT_JOIN);
	  $c->add(sfGuardUserProfilePeer::EMAIL, $email);
	  $c->add(self::IS_ACTIVE, $isActive);

	  return self::doSelectOne($c);
	}
}