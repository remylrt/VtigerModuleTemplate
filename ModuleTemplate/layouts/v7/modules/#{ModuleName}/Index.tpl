<div class="container">
    <h1>Bonjour, {$user.firstName} {$user.lastName} !</h1>
    <p>Voici ce qu'il s'est passé pour générer cette page :</p>
    <ul>
        <li>Vtiger a envoyé votre requête vers le contrôleur modules/{$moduleName}/views/{$viewName}.php;</li>
        <li>Le contrôleur a effectué ses traitements;</li>
        <li>Le contrôleur a généré une vue grâce au template <a href="https://www.smarty.net/docsv2/fr/">Smarty</a> situé dans layouts/v7/modules/{$moduleName}/{$viewName}.tpl;</li>
        <li>Le contrôleur vous a répondu le HTML généré.</li>
    </ul>
</div>