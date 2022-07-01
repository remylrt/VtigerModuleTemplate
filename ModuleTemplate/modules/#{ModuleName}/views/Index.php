<?php

// Accessible sur /index.php?module=#{ModuleName}&view=Index
class #{ModuleName}_Index_View extends Vtiger_Index_View {

    public function process (Vtiger_Request $request) {
        global $current_user;
        $userModel = Users_Record_Model::getInstanceFromUserObject($current_user);

        $viewer = $this->getViewer($request);

        $viewer->assign('user', [
            'firstName' => $userModel->get('first_name'),
            'lastName' => $userModel->get('last_name')
        ]);
        $viewer->assign('moduleName', $request->get('module'));
        $viewer->assign('viewName', $request->get('view'));
        $viewer->view('Index.tpl', $request->getModule());
    }

}