Vtiger.Class('#{ModuleName}', {}, {
    MODULE: '#{ModuleName}',

    registerEvents: function () {

    },
});

jQuery(document).ready(function () {
    var #{ModuleName} = new #{ModuleName}();

    #{ModuleName}.registerEvents();
});