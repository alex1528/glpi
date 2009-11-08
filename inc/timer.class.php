<?php
/*
 * @version $Id$
 -------------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2009 by the INDEPNET Development Team.

 http://indepnet.net/   http://glpi-project.org
 -------------------------------------------------------------------------

 LICENSE

 This file is part of GLPI.

 GLPI is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 GLPI is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with GLPI; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 --------------------------------------------------------------------------
 */

// ----------------------------------------------------------------------
// Original Author of file: Julien Dombre
// Purpose of file:
// ----------------------------------------------------------------------

if (!defined('GLPI_ROOT')){
   die("Sorry. You can't access directly to this file");
}


/**
 *  Timer class for debug
 */
class Script_Timer {
   //! Timer value
   var $timer=0;

   //! Start the Timer
   function Start_Timer () {
      $this->timer=microtime(true);

      return true;
   }
   /**
    * Get the current time of the timer
    *
    * @param $decimals number of decimal of the result
    * @return time past from Start_Timer
    *
    */
   function Get_Time ($decimals = 3) {
      // $decimals will set the number of decimals you want for your milliseconds.

      return number_format(microtime(true) - $this->timer,$decimals,'.',' ');
   }
}
?>
