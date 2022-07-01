<?php

class #{ModuleName} {
    public function vtlib_handler($moduleName, $eventType) {
        if ($eventType == 'module.postinstall') {
            $this->_registerLinks($moduleName);
        } else if ($eventType == 'module.enabled') {
            $this->_registerLinks($moduleName);
        } else if ($eventType == 'module.disabled') {
            $this->_deregisterLinks($moduleName);
        }
    }

    protected function _registerLinks($moduleName) {
        $thisModuleInstance = Vtiger_Module::getInstance($moduleName);

        if ($thisModuleInstance) {
            $thisModuleInstance->addLink("HEADERSCRIPT", "#{ModuleName}", "layouts/v7/modules/#{ModuleName}/ressources/js/#{ModuleName}.js");
        }
    }

    protected function _deregisterLinks($moduleName) {
        $thisModuleInstance = Vtiger_Module::getInstance($moduleName);

        if ($thisModuleInstance) {
            $thisModuleInstance->deleteLink("HEADERSCRIPT", "#{ModuleName}", "layouts/v7/modules/#{ModuleName}/ressources/js/#{ModuleName}.js");
        }
    }

}
