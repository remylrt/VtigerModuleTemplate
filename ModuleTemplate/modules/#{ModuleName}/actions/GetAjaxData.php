<?php

// Accessible sur /index.php?module=#{ModuleName}&action=GetAjaxData
class #{ModuleName}_GetAjaxData_Action extends Vtiger_BasicAjax_Action {

    public function process(Vtiger_Request $request) {
        $response = new Vtiger_Response();

        $response->setResult([
            'moduleName' => $request->get('module'),
            'actionName' => $request->get('action'),
        ]);
        return $response->emit();
    }

}