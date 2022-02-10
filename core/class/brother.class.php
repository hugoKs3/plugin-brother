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

  public static function cronHourly() {
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
      $cmd->setUnite('%');
      $cmd->setGeneric_type('CONSUMPTION');
      $cmd->setConfiguration('minValue', 0); 
      $cmd->setConfiguration('maxValue', 100);
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
      $cmd->setUnite('%');
      $cmd->setGeneric_type('CONSUMPTION');
      $cmd->setConfiguration('minValue', 0); 
      $cmd->setConfiguration('maxValue', 100);
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
      $cmd->setUnite('%');
      $cmd->setGeneric_type('CONSUMPTION');
      $cmd->setConfiguration('minValue', 0); 
      $cmd->setConfiguration('maxValue', 100);
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
      $cmd->setUnite('%');
      $cmd->setGeneric_type('CONSUMPTION');
      $cmd->setConfiguration('minValue', 0); 
      $cmd->setConfiguration('maxValue', 100);
      $cmd->save();
    }
    $cmd = $this->getCmd(null, 'lastprints');
    if ( ! is_object($cmd)) {
      $cmd = new brotherCmd();
      $cmd->setName('Dernières impressions');
      $cmd->setEqLogic_id($this->getId());
      $cmd->setLogicalId('lastprints');
      $cmd->setType('info');
      $cmd->setSubType('numeric');
      $cmd->setIsHistorized(1);
      $cmd->setIsVisible(1);
      $cmd->setGeneric_type('CONSUMPTION');
      $cmd->setTemplate('dashboard','tile');
      $cmd->setTemplate('mobile','tile');
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
    $this->setDisplay('height','332px');
    $this->setDisplay('width', '392px');
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
      if (!is_null($obj->model)) {
        $this->checkAndUpdateCmd('model', $obj->model);
        log::add(__CLASS__, 'info', $this->getHumanName() . ' record value for model: ' . $obj->model);
      } else {
        log::add(__CLASS__, 'error', $this->getHumanName() . ' null value for model');
      }
      if (!is_null($obj->serial)) {
        $this->checkAndUpdateCmd('serial', $obj->serial);
        log::add(__CLASS__, 'info', $this->getHumanName() . ' record value for serial: ' . $obj->serial);
      } else {
        log::add(__CLASS__, 'error', $this->getHumanName() . ' null value for serial');
      }
      if (!is_null($obj->firmware)) {
        $this->checkAndUpdateCmd('firmware', $obj->firmware);
        log::add(__CLASS__, 'info', $this->getHumanName() . ' record value for firmware: ' . $obj->firmware);
      } else {
        log::add(__CLASS__, 'error', $this->getHumanName() . ' null value for firmware');
      }
      if (!is_null($obj->status)) {
        $this->checkAndUpdateCmd('status', $obj->status);
        log::add(__CLASS__, 'info', $this->getHumanName() . ' record value for status: ' . $obj->status);
      } else {
        log::add(__CLASS__, 'error', $this->getHumanName() . ' null value for status');
      }

      $type = $this->getConfiguration('brotherType');
      $printertype = "ink";
      if ($type == "laser") {
        $printertype = "toner";
      }
      $colors = ["black", "cyan", "magenta", "yellow"];
      foreach ($colors as $color) {
        $index = $color . '_' . $printertype . '_remaining';
        if (!is_null($obj->$index)) {
          $this->checkAndUpdateCmd($color, $obj->$index);
          log::add(__CLASS__, 'info', $this->getHumanName() . ' record value for ' . $color . ': ' . $obj->$index);
        } else {
          log::add(__CLASS__, 'error', $this->getHumanName() . ' null value for ' . $index);
        }
      }

      $cmdCounter = $this->getCmd(null, 'counter');
      $curCounterValue = $cmdCounter->execCmd();
      if (!is_null($obj->page_counter) && !is_null($curCounterValue)) {
        $lastprintsValue = $obj->page_counter - $curCounterValue;
        $this->checkAndUpdateCmd('lastprints', $lastprintsValue);
        log::add(__CLASS__, 'info', $this->getHumanName() . ' record value for last prints: ' . $lastprintsValue);
      } else {
        log::add(__CLASS__, 'error', $this->getHumanName() . ' null value for page_counter and/or last counter');
      }

      if (!is_null($obj->page_counter)) {
        $this->checkAndUpdateCmd('counter', $obj->page_counter);
        log::add(__CLASS__, 'info', $this->getHumanName() . ' record value for counter: ' . $obj->page_counter);
      } else {
        log::add(__CLASS__, 'error', $this->getHumanName() . ' null value for page_counter');
      }
    }
  }
    
  public function toHtml($_version = 'dashboard') {
    if ($this->getConfiguration('brotherWidget') != 1) {
    	return parent::toHtml($_version);
    }
    $replace = $this->preToHtml($_version);
    if (!is_array($replace)) {
        return $replace;
    }
    $version = jeedom::versionAlias($_version);
   
    $refreshCmd = $this->getCmd(null, 'refresh');
    if ($refreshCmd->getIsVisible() == 1) {
        $replace['#refresh_id#'] = $refreshCmd->getId();
    } else {
        $replace['#refresh_id#'] = '';
    }
    
    $blackCmd = $this->getCmd(null, 'black');
    if (!is_null($blackCmd) && $blackCmd->getIsVisible() == 1) {
        $replace['#black_level#'] = $blackCmd->execCmd();
        $replace['#black_visible#'] = 1;
        $replace['#black_bkg#'] = 0.1;
    } else {
        $replace['#black_level#'] = 0;
        $replace['#cyan_visible#'] = 0;
        $replace['#black_bkg#'] = 0;
    }

    $cyanCmd = $this->getCmd(null, 'cyan');
    if (!is_null($cyanCmd) && $cyanCmd->getIsVisible() == 1) {
        $replace['#cyan_level#'] = $cyanCmd->execCmd();
        $replace['#cyan_visible#'] = 1;
        $replace['#cyan_bkg#'] = 0.1;
    } else {
        $replace['#cyan_level#'] = 0;
        $replace['#cyan_visible#'] = 0;
        $replace['#black_bkg#'] = 0;
    }

    $magentaCmd = $this->getCmd(null, 'magenta');
    if (!is_null($magentaCmd) && $magentaCmd->getIsVisible() == 1) {
        $replace['#magenta_level#'] = $magentaCmd->execCmd();
        $replace['#magenta_visible#'] = 1;
        $replace['#magenta_bkg#'] = 0.1;
    } else {
        $replace['#magenta_level#'] = 0;
        $replace['#magenta_visible#'] = 0;
        $replace['#magenta_bkg#'] = 0;
    }

    $yellowCmd = $this->getCmd(null, 'yellow');
    if (!is_null($yellowCmd) && $yellowCmd->getIsVisible() == 1) {
        $replace['#yellow_level#'] = $yellowCmd->execCmd();
        $replace['#yellow_visible#'] = 1;
        $replace['#yellow_bkg#'] = 0.1;
    } else {
        $replace['#yellow_level#'] = 0;
        $replace['#yellow_visible#'] = 0;
        $replace['#yellow_bkg#'] = 0;
    }

    $statusCmd = $this->getCmd(null, 'status');
    if ($statusCmd->getIsVisible() == 1) {
        $replace['#brother_status#'] = $statusCmd->execCmd();
    }
    $pagesCmd = $this->getCmd(null, 'counter');
    if ($pagesCmd->getIsVisible() == 1) {
        $replace['#brother_counter#'] = $pagesCmd->execCmd();
    }
    
    $html = template_replace($replace, getTemplate('core', $version, 'brother.template', __CLASS__));
    cache::set('widgetHtml' . $_version . $this->getId(), $html, 0);
    return $html;
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
