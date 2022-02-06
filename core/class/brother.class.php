<?php

/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

/* * ***************************Includes********************************* */
require_once __DIR__ . '/../../../../core/php/core.inc.php';

class brother extends eqLogic {

    
	/* * *************************Attributs****************************** */

	/* * ***********************Methode static*************************** */

  public static function cron5() {
    proceed();
  }

  public static function cron10() {
    proceed();
  }

  public static function cron15() {
    proceed();
  }

  public static function cron30() {
    proceed();
  }

  public static function cronHourly() {
    proceed();
  }

  public static function cronDaily() {
    proceed();
  }

  public static function proceed()
  {
    $eqLogics = self::byType(__CLASS__, true);

    foreach ($eqLogics as $eqLogic)
    {
        $eqLogic->refreshInfo();
    }
  }

	public function postSave() {
    $cmd = $this->getCmd(null, 'model');
    if ( ! is_object($cmd)) {
      $cmd = new brotherCmd();
      $cmd->setName('Modèle');
      $cmd->setEqLogic_id($this->getId());
      $cmd->setLogicalId('model');
      $cmd->setType('info');
      $cmd->setSubType('string');
      $cmd->setGeneric_type('GENERIC_INFO');
      $cmd->setIsVisible(1);
      $cmd->save();
    }
    $cmd = $this->getCmd(null, 'serial');
    if ( ! is_object($cmd)) {
      $cmd = new brotherCmd();
      $cmd->setName('Numéro de série');
      $cmd->setEqLogic_id($this->getId());
      $cmd->setLogicalId('serial');
      $cmd->setType('info');
      $cmd->setSubType('string');
      $cmd->setGeneric_type('GENERIC_INFO');
      $cmd->setIsVisible(1);
      $cmd->save();
    }
    $cmd = $this->getCmd(null, 'firmware');
    if ( ! is_object($cmd)) {
      $cmd = new brotherCmd();
      $cmd->setName('Firmware');
      $cmd->setEqLogic_id($this->getId());
      $cmd->setLogicalId('firmware');
      $cmd->setType('info');
      $cmd->setSubType('string');
      $cmd->setGeneric_type('GENERIC_INFO');
      $cmd->setIsVisible(1);
      $cmd->save();
    }
    $cmd = $this->getCmd(null, 'status');
    if ( ! is_object($cmd)) {
      $cmd = new brotherCmd();
      $cmd->setName('Status');
      $cmd->setEqLogic_id($this->getId());
      $cmd->setLogicalId('status');
      $cmd->setType('info');
      $cmd->setSubType('string');
      $cmd->setGeneric_type('GENERIC_INFO');
      $cmd->setIsVisible(1);
      $cmd->save();
    }
    $cmd = $this->getCmd(null, 'counter');
    if ( ! is_object($cmd)) {
      $cmd = new brotherCmd();
      $cmd->setName('Nombre de pages');
      $cmd->setEqLogic_id($this->getId());
      $cmd->setLogicalId('counter');
      $cmd->setType('info');
      $cmd->setSubType('numeric');
      $cmd->setIsHistorized(1);
      $cmd->setIsVisible(1);
      $cmd->setTemplate('dashboard','tile');
      $cmd->setTemplate('mobile','tile');
      $cmd->setGeneric_type('CONSUMPTION');
      $cmd->save();
    }
    $cmd = $this->getCmd(null, 'black');
    if ( ! is_object($cmd)) {
      $cmd = new brotherCmd();
      $cmd->setName('Noir');
      $cmd->setEqLogic_id($this->getId());
      $cmd->setLogicalId('black');
      $cmd->setType('info');
      $cmd->setSubType('numeric');
      $cmd->setIsHistorized(1);
      $cmd->setIsVisible(1);
      $cmd->setTemplate('dashboard','tile');
      $cmd->setTemplate('mobile','tile');
      $cmd->setUnite('%');
      $cmd->setGeneric_type('CONSUMPTION');
      $cmd->save();
    }
    $cmd = $this->getCmd(null, 'cyan');
    if ( ! is_object($cmd)) {
      $cmd = new brotherCmd();
      $cmd->setName('Cyan');
      $cmd->setEqLogic_id($this->getId());
      $cmd->setLogicalId('cyan');
      $cmd->setType('info');
      $cmd->setSubType('numeric');
      $cmd->setIsHistorized(1);
      $cmd->setIsVisible(1);
      $cmd->setTemplate('dashboard','tile');
      $cmd->setTemplate('mobile','tile');
      $cmd->setUnite('%');
      $cmd->setGeneric_type('CONSUMPTION');
      $cmd->save();
    }
    $cmd = $this->getCmd(null, 'magenta');
    if ( ! is_object($cmd)) {
      $cmd = new brotherCmd();
      $cmd->setName('Magenta');
      $cmd->setEqLogic_id($this->getId());
      $cmd->setLogicalId('magenta');
      $cmd->setType('info');
      $cmd->setSubType('numeric');
      $cmd->setIsHistorized(1);
      $cmd->setIsVisible(1);
      $cmd->setTemplate('dashboard','tile');
      $cmd->setTemplate('mobile','tile');
      $cmd->setUnite('%');
      $cmd->setGeneric_type('CONSUMPTION');
      $cmd->save();
    }
    $cmd = $this->getCmd(null, 'yellow');
    if ( ! is_object($cmd)) {
      $cmd = new brotherCmd();
      $cmd->setName('Jaune');
      $cmd->setEqLogic_id($this->getId());
      $cmd->setLogicalId('yellow');
      $cmd->setType('info');
      $cmd->setSubType('numeric');
      $cmd->setIsHistorized(1);
      $cmd->setIsVisible(1);
      $cmd->setTemplate('dashboard','tile');
      $cmd->setTemplate('mobile','tile');
      $cmd->setUnite('%');
      $cmd->setGeneric_type('CONSUMPTION');
      $cmd->save();
    }
    $cmd = $this->getCmd(null, 'refresh');
    if (!is_object($cmd)) {
      $cmd = new brotherCmd();
      $cmd->setLogicalId('refresh');
      $cmd->setEqLogic_id($this->getId());
      $cmd->setName('Rafraichir');
      $cmd->setType('action');
      $cmd->setSubType('other');
      $cmd->save();
    }
    $this->refreshInfo();
	}
    
  public function preInsert() {
    $this->setIsVisible(1);
    $this->setConfiguration('brotherWidget', 1);
    $this->setDisplay('height','150px');
    $this->setDisplay('width', '340px');
    $this->setIsEnable(1);
  }        
    
  public function pullBrother() {
    $brother_path = dirname(__FILE__) . '/../..';
    $host = $this->getConfiguration('brotherAddress');
    $type = $this->getConfiguration('brotherType');

    $cmd = 'sudo python3 ' . $brother_path . '/resources/jeeBrother.py ' . $host . ' ' . $type . ' ' . $brother_path . ' ' . log::convertLogLevel(log::getLogLevel('brother'));
    log::add(__CLASS__, 'info', 'Lancement script No-Ip : ' . $cmd);

    exec($cmd . ' >> ' . log::getPathToLog('brother') . ' 2>&1'); 
    $string = file_get_contents($brother_path . '/data/output.json');
    log::add(__CLASS__, 'debug', $this->getHumanName() . ' file content: ' . $string);
    if ($string === false) {
        log::add(__CLASS__, 'error', $this->getHumanName() . ' file content empty');
        return null;
    }
    $json_a = json_decode($string);
    if ($json_a === null) {
        log::add(__CLASS__, 'error', $this->getHumanName() . ' JSON decode impossible');
        return null;
    }
    if (isset($json_a->msg)) {
        log::add(__CLASS__, 'error', $this->getHumanName() . ' error while executing Python script: ' . $obj->message);
        return null;
    } 
    return $json_a;
  }

	public function refreshInfo() {
		$obj = $this->pullBrother();
    if (!is_null($obj)) {
        $this->recordData($obj);
    }
	}
    
  public function recordData($obj) {
    if ($this->getIsEnable()) {
      $this->checkAndUpdateCmd('model', $obj->model);
      $this->checkAndUpdateCmd('serial', $obj->serial);
      $this->checkAndUpdateCmd('firmware', $obj->firmware);
      $this->checkAndUpdateCmd('status', $obj->status);

      $type = $this->getConfiguration('brotherType');
      $printertype = "ink";
      if ($type == "laser") {
        $printertype = "toner";
      }
      $colors = ["black", "cyan", "magenta", "yellow"];
      foreach ($colors as $color) {
        $index = $color . '_' . $printertype . '_remaining';
        $this->checkAndUpdateCmd($color, $obj->$index);
      }

      $this->checkAndUpdateCmd('counter', $obj->page_counter);
    }
  }
    
  public function toHtml($_version = 'dashboard') {
    if ($this->getConfiguration('widgetTemplate') != 1) {
    	return parent::toHtml($_version);
    }
    return parent::toHtml($_version);
  }
    
  public static function dependancy_install() {
		log::remove(__CLASS__ . '_update');
		return array('script' => dirname(__FILE__) . '/../../resources/install_apt.sh ' . jeedom::getTmpFolder(__CLASS__) . '/dependency', 'log' => log::getPathToLog(__CLASS__ . '_update'));
	}
    
  public static function dependancy_info() {
    $return = array();
    $return['log'] = 'noip_update';
    $return['progress_file'] = '/tmp/jeedom/noip/dependency';
    $cmd = system::getCmdSudo() . '/bin/bash ' . dirname(__FILE__) . '/../../resources/install_check.sh';
    if (exec($cmd) == "ok") {
        $return['state'] = 'ok';
    } else {
        $return['state'] = 'nok';
    }
    return $return;
	}

}

class brotherCmd extends cmd
{
    
  public function dontRemoveCmd() {
		return true;
	}
    
	public function execute($_options = null) {
    $eqLogic = $this->getEqLogic();
    if (!is_object($eqLogic) || $eqLogic->getIsEnable() != 1) {
        throw new Exception(__('Equipement desactivé impossible d\éxecuter la commande : ' . $this->getHumanName(), __FILE__));
    }
    log::add('noip', 'debug', 'Execution de la commande ' . $this->getLogicalId());
    switch ($this->getLogicalId()) {
        case "refresh":
            $eqLogic->refreshInfo();
            break;
    }
  }
}
?>
