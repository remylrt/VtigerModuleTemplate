<?php

class #{ModuleName}_Record_Model {

    public static function getDatabaseRow() {
        global $adb;

        $query = 'SELECT * FROM vtiger_votreTable LIMIT 1';

        $result = $adb->pquery($query);

        if ($adb->num_rows($result) > 0) {
            return $adb->fetch_array($result);
        }

        return null;
    }

}