
window.projectVersion = 'master';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:App" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App.html">App</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:App_Console" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Console.html">Console</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Console_Kernel" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Console/Kernel.html">Kernel</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Exceptions" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Exceptions.html">Exceptions</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Exceptions_Handler" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Exceptions/Handler.html">Handler</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Http" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http.html">Http</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:App_Http_Controllers" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http/Controllers.html">Controllers</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:App_Http_Controllers_Auth" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http/Controllers/Auth.html">Auth</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Http_Controllers_Auth_ForgotPasswordController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/ForgotPasswordController.html">ForgotPasswordController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Auth_LoginController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/LoginController.html">LoginController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Auth_RegisterController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/RegisterController.html">RegisterController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Auth_ResetPasswordController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/ResetPasswordController.html">ResetPasswordController</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:App_Http_Controllers_CoinController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/CoinController.html">CoinController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Controller" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/Controller.html">Controller</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_HomeController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/HomeController.html">HomeController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_PortfolioController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/PortfolioController.html">PortfolioController</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Http_Middleware" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http/Middleware.html">Middleware</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Http_Middleware_EncryptCookies" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/EncryptCookies.html">EncryptCookies</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_RedirectIfAuthenticated" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/RedirectIfAuthenticated.html">RedirectIfAuthenticated</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_TrimStrings" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/TrimStrings.html">TrimStrings</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_TrustProxies" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/TrustProxies.html">TrustProxies</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_VerifyCsrfToken" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/VerifyCsrfToken.html">VerifyCsrfToken</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Http_Requests" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http/Requests.html">Requests</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Http_Requests_StorePortfolioRequest" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Requests/StorePortfolioRequest.html">StorePortfolioRequest</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Http_Resources" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http/Resources.html">Resources</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Http_Resources_CoinResource" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Resources/CoinResource.html">CoinResource</a>                    </div>                </li>                            <li data-name="class:App_Http_Resources_CoinResourceCollection" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Resources/CoinResourceCollection.html">CoinResourceCollection</a>                    </div>                </li>                            <li data-name="class:App_Http_Resources_UserResource" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Resources/UserResource.html">UserResource</a>                    </div>                </li>                            <li data-name="class:App_Http_Resources_UserTradeResource" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Resources/UserTradeResource.html">UserTradeResource</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:App_Http_Kernel" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Http/Kernel.html">Kernel</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Models" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Models.html">Models</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Models_Coin" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Models/Coin.html">Coin</a>                    </div>                </li>                            <li data-name="class:App_Models_CoinHistorical" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Models/CoinHistorical.html">CoinHistorical</a>                    </div>                </li>                            <li data-name="class:App_Models_User" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Models/User.html">User</a>                    </div>                </li>                            <li data-name="class:App_Models_UserTrade" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Models/UserTrade.html">UserTrade</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Providers" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Providers.html">Providers</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Providers_AppServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/AppServiceProvider.html">AppServiceProvider</a>                    </div>                </li>                            <li data-name="class:App_Providers_AuthServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/AuthServiceProvider.html">AuthServiceProvider</a>                    </div>                </li>                            <li data-name="class:App_Providers_BroadcastServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/BroadcastServiceProvider.html">BroadcastServiceProvider</a>                    </div>                </li>                            <li data-name="class:App_Providers_EventServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/EventServiceProvider.html">EventServiceProvider</a>                    </div>                </li>                            <li data-name="class:App_Providers_RepositoriesServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/RepositoriesServiceProvider.html">RepositoriesServiceProvider</a>                    </div>                </li>                            <li data-name="class:App_Providers_RouteServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/RouteServiceProvider.html">RouteServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Repositories" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Repositories.html">Repositories</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Repositories_CoinHistoricalRepository" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Repositories/CoinHistoricalRepository.html">CoinHistoricalRepository</a>                    </div>                </li>                            <li data-name="class:App_Repositories_CoinHistoricalRepositoryInterface" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Repositories/CoinHistoricalRepositoryInterface.html">CoinHistoricalRepositoryInterface</a>                    </div>                </li>                            <li data-name="class:App_Repositories_CoinRepository" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Repositories/CoinRepository.html">CoinRepository</a>                    </div>                </li>                            <li data-name="class:App_Repositories_CoinRepositoryInterface" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Repositories/CoinRepositoryInterface.html">CoinRepositoryInterface</a>                    </div>                </li>                            <li data-name="class:App_Repositories_UserRepository" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Repositories/UserRepository.html">UserRepository</a>                    </div>                </li>                            <li data-name="class:App_Repositories_UserRepositoryInterface" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Repositories/UserRepositoryInterface.html">UserRepositoryInterface</a>                    </div>                </li>                            <li data-name="class:App_Repositories_UserTradeRepository" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Repositories/UserTradeRepository.html">UserTradeRepository</a>                    </div>                </li>                            <li data-name="class:App_Repositories_UserTradeRepositoryInterface" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Repositories/UserTradeRepositoryInterface.html">UserTradeRepositoryInterface</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:App_Coin" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Coin.html">Coin</a>                    </div>                </li>                            <li data-name="class:App_CoinHistorical" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/CoinHistorical.html">CoinHistorical</a>                    </div>                </li>                            <li data-name="class:App_User" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/User.html">User</a>                    </div>                </li>                            <li data-name="class:App_UserTrade" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/UserTrade.html">UserTrade</a>                    </div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "App.html", "name": "App", "doc": "Namespace App"},{"type": "Namespace", "link": "App/Console.html", "name": "App\\Console", "doc": "Namespace App\\Console"},{"type": "Namespace", "link": "App/Exceptions.html", "name": "App\\Exceptions", "doc": "Namespace App\\Exceptions"},{"type": "Namespace", "link": "App/Http.html", "name": "App\\Http", "doc": "Namespace App\\Http"},{"type": "Namespace", "link": "App/Http/Controllers.html", "name": "App\\Http\\Controllers", "doc": "Namespace App\\Http\\Controllers"},{"type": "Namespace", "link": "App/Http/Controllers/Auth.html", "name": "App\\Http\\Controllers\\Auth", "doc": "Namespace App\\Http\\Controllers\\Auth"},{"type": "Namespace", "link": "App/Http/Middleware.html", "name": "App\\Http\\Middleware", "doc": "Namespace App\\Http\\Middleware"},{"type": "Namespace", "link": "App/Http/Requests.html", "name": "App\\Http\\Requests", "doc": "Namespace App\\Http\\Requests"},{"type": "Namespace", "link": "App/Http/Resources.html", "name": "App\\Http\\Resources", "doc": "Namespace App\\Http\\Resources"},{"type": "Namespace", "link": "App/Models.html", "name": "App\\Models", "doc": "Namespace App\\Models"},{"type": "Namespace", "link": "App/Providers.html", "name": "App\\Providers", "doc": "Namespace App\\Providers"},{"type": "Namespace", "link": "App/Repositories.html", "name": "App\\Repositories", "doc": "Namespace App\\Repositories"},
            {"type": "Interface", "fromName": "App\\Repositories", "fromLink": "App/Repositories.html", "link": "App/Repositories/CoinHistoricalRepositoryInterface.html", "name": "App\\Repositories\\CoinHistoricalRepositoryInterface", "doc": "&quot;Interface CoinHistoricalRepositoryInterface.&quot;"},
                    
            {"type": "Interface", "fromName": "App\\Repositories", "fromLink": "App/Repositories.html", "link": "App/Repositories/CoinRepositoryInterface.html", "name": "App\\Repositories\\CoinRepositoryInterface", "doc": "&quot;Interface CoinRepositoryInterface.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Repositories\\CoinRepositoryInterface", "fromLink": "App/Repositories/CoinRepositoryInterface.html", "link": "App/Repositories/CoinRepositoryInterface.html#method_orderByRankAsc", "name": "App\\Repositories\\CoinRepositoryInterface::orderByRankAsc", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Repositories\\CoinRepositoryInterface", "fromLink": "App/Repositories/CoinRepositoryInterface.html", "link": "App/Repositories/CoinRepositoryInterface.html#method_getByIdOrFail", "name": "App\\Repositories\\CoinRepositoryInterface::getByIdOrFail", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Repositories\\CoinRepositoryInterface", "fromLink": "App/Repositories/CoinRepositoryInterface.html", "link": "App/Repositories/CoinRepositoryInterface.html#method_getCoinHistoricalBetweenDates", "name": "App\\Repositories\\CoinRepositoryInterface::getCoinHistoricalBetweenDates", "doc": "&quot;&quot;"},
            
            {"type": "Interface", "fromName": "App\\Repositories", "fromLink": "App/Repositories.html", "link": "App/Repositories/UserRepositoryInterface.html", "name": "App\\Repositories\\UserRepositoryInterface", "doc": "&quot;Interface UserRepositoryInterface.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Repositories\\UserRepositoryInterface", "fromLink": "App/Repositories/UserRepositoryInterface.html", "link": "App/Repositories/UserRepositoryInterface.html#method_getUserPortfolio", "name": "App\\Repositories\\UserRepositoryInterface::getUserPortfolio", "doc": "&quot;&quot;"},
            
            {"type": "Interface", "fromName": "App\\Repositories", "fromLink": "App/Repositories.html", "link": "App/Repositories/UserTradeRepositoryInterface.html", "name": "App\\Repositories\\UserTradeRepositoryInterface", "doc": "&quot;Interface UserTradeRepositoryInterface.&quot;"},
                    
            
            {"type": "Class", "fromName": "App\\Console", "fromLink": "App/Console.html", "link": "App/Console/Kernel.html", "name": "App\\Console\\Kernel", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Console\\Kernel", "fromLink": "App/Console/Kernel.html", "link": "App/Console/Kernel.html#method_schedule", "name": "App\\Console\\Kernel::schedule", "doc": "&quot;Define the application&#039;s command schedule.&quot;"},
                    {"type": "Method", "fromName": "App\\Console\\Kernel", "fromLink": "App/Console/Kernel.html", "link": "App/Console/Kernel.html#method_commands", "name": "App\\Console\\Kernel::commands", "doc": "&quot;Register the commands for the application.&quot;"},
            
            {"type": "Class", "fromName": "App\\Exceptions", "fromLink": "App/Exceptions.html", "link": "App/Exceptions/Handler.html", "name": "App\\Exceptions\\Handler", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Exceptions\\Handler", "fromLink": "App/Exceptions/Handler.html", "link": "App/Exceptions/Handler.html#method_report", "name": "App\\Exceptions\\Handler::report", "doc": "&quot;Report or log an exception.&quot;"},
                    {"type": "Method", "fromName": "App\\Exceptions\\Handler", "fromLink": "App/Exceptions/Handler.html", "link": "App/Exceptions/Handler.html#method_render", "name": "App\\Exceptions\\Handler::render", "doc": "&quot;Render an exception into an HTTP response.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers\\Auth", "fromLink": "App/Http/Controllers/Auth.html", "link": "App/Http/Controllers/Auth/ForgotPasswordController.html", "name": "App\\Http\\Controllers\\Auth\\ForgotPasswordController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\ForgotPasswordController", "fromLink": "App/Http/Controllers/Auth/ForgotPasswordController.html", "link": "App/Http/Controllers/Auth/ForgotPasswordController.html#method___construct", "name": "App\\Http\\Controllers\\Auth\\ForgotPasswordController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers\\Auth", "fromLink": "App/Http/Controllers/Auth.html", "link": "App/Http/Controllers/Auth/LoginController.html", "name": "App\\Http\\Controllers\\Auth\\LoginController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\LoginController", "fromLink": "App/Http/Controllers/Auth/LoginController.html", "link": "App/Http/Controllers/Auth/LoginController.html#method___construct", "name": "App\\Http\\Controllers\\Auth\\LoginController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers\\Auth", "fromLink": "App/Http/Controllers/Auth.html", "link": "App/Http/Controllers/Auth/RegisterController.html", "name": "App\\Http\\Controllers\\Auth\\RegisterController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\RegisterController", "fromLink": "App/Http/Controllers/Auth/RegisterController.html", "link": "App/Http/Controllers/Auth/RegisterController.html#method___construct", "name": "App\\Http\\Controllers\\Auth\\RegisterController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\RegisterController", "fromLink": "App/Http/Controllers/Auth/RegisterController.html", "link": "App/Http/Controllers/Auth/RegisterController.html#method_validator", "name": "App\\Http\\Controllers\\Auth\\RegisterController::validator", "doc": "&quot;Get a validator for an incoming registration request.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\RegisterController", "fromLink": "App/Http/Controllers/Auth/RegisterController.html", "link": "App/Http/Controllers/Auth/RegisterController.html#method_create", "name": "App\\Http\\Controllers\\Auth\\RegisterController::create", "doc": "&quot;Create a new user instance after a valid registration.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers\\Auth", "fromLink": "App/Http/Controllers/Auth.html", "link": "App/Http/Controllers/Auth/ResetPasswordController.html", "name": "App\\Http\\Controllers\\Auth\\ResetPasswordController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\ResetPasswordController", "fromLink": "App/Http/Controllers/Auth/ResetPasswordController.html", "link": "App/Http/Controllers/Auth/ResetPasswordController.html#method___construct", "name": "App\\Http\\Controllers\\Auth\\ResetPasswordController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/CoinController.html", "name": "App\\Http\\Controllers\\CoinController", "doc": "&quot;Class CoinController.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\CoinController", "fromLink": "App/Http/Controllers/CoinController.html", "link": "App/Http/Controllers/CoinController.html#method___construct", "name": "App\\Http\\Controllers\\CoinController::__construct", "doc": "&quot;CoinController constructor.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\CoinController", "fromLink": "App/Http/Controllers/CoinController.html", "link": "App/Http/Controllers/CoinController.html#method_index", "name": "App\\Http\\Controllers\\CoinController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\CoinController", "fromLink": "App/Http/Controllers/CoinController.html", "link": "App/Http/Controllers/CoinController.html#method_show", "name": "App\\Http\\Controllers\\CoinController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\CoinController", "fromLink": "App/Http/Controllers/CoinController.html", "link": "App/Http/Controllers/CoinController.html#method_historical", "name": "App\\Http\\Controllers\\CoinController::historical", "doc": "&quot;Display the specified resource historical listing.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/Controller.html", "name": "App\\Http\\Controllers\\Controller", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/HomeController.html", "name": "App\\Http\\Controllers\\HomeController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\HomeController", "fromLink": "App/Http/Controllers/HomeController.html", "link": "App/Http/Controllers/HomeController.html#method___construct", "name": "App\\Http\\Controllers\\HomeController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\HomeController", "fromLink": "App/Http/Controllers/HomeController.html", "link": "App/Http/Controllers/HomeController.html#method_index", "name": "App\\Http\\Controllers\\HomeController::index", "doc": "&quot;Show the application dashboard.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/PortfolioController.html", "name": "App\\Http\\Controllers\\PortfolioController", "doc": "&quot;Class PortfolioController&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\PortfolioController", "fromLink": "App/Http/Controllers/PortfolioController.html", "link": "App/Http/Controllers/PortfolioController.html#method___construct", "name": "App\\Http\\Controllers\\PortfolioController::__construct", "doc": "&quot;PortfolioController constructor.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\PortfolioController", "fromLink": "App/Http/Controllers/PortfolioController.html", "link": "App/Http/Controllers/PortfolioController.html#method_index", "name": "App\\Http\\Controllers\\PortfolioController::index", "doc": "&quot;Display a listing of the user resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\PortfolioController", "fromLink": "App/Http/Controllers/PortfolioController.html", "link": "App/Http/Controllers/PortfolioController.html#method_store", "name": "App\\Http\\Controllers\\PortfolioController::store", "doc": "&quot;Store a newly created resource in storage for Auth user.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http", "fromLink": "App/Http.html", "link": "App/Http/Kernel.html", "name": "App\\Http\\Kernel", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Http\\Middleware", "fromLink": "App/Http/Middleware.html", "link": "App/Http/Middleware/EncryptCookies.html", "name": "App\\Http\\Middleware\\EncryptCookies", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Http\\Middleware", "fromLink": "App/Http/Middleware.html", "link": "App/Http/Middleware/RedirectIfAuthenticated.html", "name": "App\\Http\\Middleware\\RedirectIfAuthenticated", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Middleware\\RedirectIfAuthenticated", "fromLink": "App/Http/Middleware/RedirectIfAuthenticated.html", "link": "App/Http/Middleware/RedirectIfAuthenticated.html#method_handle", "name": "App\\Http\\Middleware\\RedirectIfAuthenticated::handle", "doc": "&quot;Handle an incoming request.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Middleware", "fromLink": "App/Http/Middleware.html", "link": "App/Http/Middleware/TrimStrings.html", "name": "App\\Http\\Middleware\\TrimStrings", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Http\\Middleware", "fromLink": "App/Http/Middleware.html", "link": "App/Http/Middleware/TrustProxies.html", "name": "App\\Http\\Middleware\\TrustProxies", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Http\\Middleware", "fromLink": "App/Http/Middleware.html", "link": "App/Http/Middleware/VerifyCsrfToken.html", "name": "App\\Http\\Middleware\\VerifyCsrfToken", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Http\\Requests", "fromLink": "App/Http/Requests.html", "link": "App/Http/Requests/StorePortfolioRequest.html", "name": "App\\Http\\Requests\\StorePortfolioRequest", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Requests\\StorePortfolioRequest", "fromLink": "App/Http/Requests/StorePortfolioRequest.html", "link": "App/Http/Requests/StorePortfolioRequest.html#method_authorize", "name": "App\\Http\\Requests\\StorePortfolioRequest::authorize", "doc": "&quot;Determine if the user is authorized to make this request.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Requests\\StorePortfolioRequest", "fromLink": "App/Http/Requests/StorePortfolioRequest.html", "link": "App/Http/Requests/StorePortfolioRequest.html#method_rules", "name": "App\\Http\\Requests\\StorePortfolioRequest::rules", "doc": "&quot;Get the validation rules that apply to the request.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Resources", "fromLink": "App/Http/Resources.html", "link": "App/Http/Resources/CoinResource.html", "name": "App\\Http\\Resources\\CoinResource", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Resources\\CoinResource", "fromLink": "App/Http/Resources/CoinResource.html", "link": "App/Http/Resources/CoinResource.html#method_toArray", "name": "App\\Http\\Resources\\CoinResource::toArray", "doc": "&quot;Transform the resource into an array.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Resources", "fromLink": "App/Http/Resources.html", "link": "App/Http/Resources/CoinResourceCollection.html", "name": "App\\Http\\Resources\\CoinResourceCollection", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Resources\\CoinResourceCollection", "fromLink": "App/Http/Resources/CoinResourceCollection.html", "link": "App/Http/Resources/CoinResourceCollection.html#method_toArray", "name": "App\\Http\\Resources\\CoinResourceCollection::toArray", "doc": "&quot;Transform the resource collection into an array.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Resources", "fromLink": "App/Http/Resources.html", "link": "App/Http/Resources/UserResource.html", "name": "App\\Http\\Resources\\UserResource", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Resources\\UserResource", "fromLink": "App/Http/Resources/UserResource.html", "link": "App/Http/Resources/UserResource.html#method_toArray", "name": "App\\Http\\Resources\\UserResource::toArray", "doc": "&quot;Transform the resource into an array.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Resources", "fromLink": "App/Http/Resources.html", "link": "App/Http/Resources/UserTradeResource.html", "name": "App\\Http\\Resources\\UserTradeResource", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Resources\\UserTradeResource", "fromLink": "App/Http/Resources/UserTradeResource.html", "link": "App/Http/Resources/UserTradeResource.html#method_toArray", "name": "App\\Http\\Resources\\UserTradeResource::toArray", "doc": "&quot;Transform the resource into an array.&quot;"},
            
            {"type": "Class", "fromName": "App\\Models", "fromLink": "App/Models.html", "link": "App/Models/Coin.html", "name": "App\\Models\\Coin", "doc": "&quot;Class Coin.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Models\\Coin", "fromLink": "App/Models/Coin.html", "link": "App/Models/Coin.html#method_userTrades", "name": "App\\Models\\Coin::userTrades", "doc": "&quot;Get the userTrade for the coin.&quot;"},
                    {"type": "Method", "fromName": "App\\Models\\Coin", "fromLink": "App/Models/Coin.html", "link": "App/Models/Coin.html#method_coinHistoricals", "name": "App\\Models\\Coin::coinHistoricals", "doc": "&quot;Get the coinHistorical for the coin.&quot;"},
            
            {"type": "Class", "fromName": "App\\Models", "fromLink": "App/Models.html", "link": "App/Models/CoinHistorical.html", "name": "App\\Models\\CoinHistorical", "doc": "&quot;Class CoinHistorical.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Models\\CoinHistorical", "fromLink": "App/Models/CoinHistorical.html", "link": "App/Models/CoinHistorical.html#method_coin", "name": "App\\Models\\CoinHistorical::coin", "doc": "&quot;Get the coin that owns the coinHistorical.&quot;"},
            
            {"type": "Class", "fromName": "App\\Models", "fromLink": "App/Models.html", "link": "App/Models/User.html", "name": "App\\Models\\User", "doc": "&quot;Class User.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Models\\User", "fromLink": "App/Models/User.html", "link": "App/Models/User.html#method_userTrades", "name": "App\\Models\\User::userTrades", "doc": "&quot;Get the userTrade for the user.&quot;"},
            
            {"type": "Class", "fromName": "App\\Models", "fromLink": "App/Models.html", "link": "App/Models/UserTrade.html", "name": "App\\Models\\UserTrade", "doc": "&quot;Class UserTrade.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Models\\UserTrade", "fromLink": "App/Models/UserTrade.html", "link": "App/Models/UserTrade.html#method_coin", "name": "App\\Models\\UserTrade::coin", "doc": "&quot;Get the coin that owns the userTrade.&quot;"},
                    {"type": "Method", "fromName": "App\\Models\\UserTrade", "fromLink": "App/Models/UserTrade.html", "link": "App/Models/UserTrade.html#method_user", "name": "App\\Models\\UserTrade::user", "doc": "&quot;Get the coin that owns the userTrade.&quot;"},
            
            {"type": "Class", "fromName": "App\\Providers", "fromLink": "App/Providers.html", "link": "App/Providers/AppServiceProvider.html", "name": "App\\Providers\\AppServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Providers\\AppServiceProvider", "fromLink": "App/Providers/AppServiceProvider.html", "link": "App/Providers/AppServiceProvider.html#method_boot", "name": "App\\Providers\\AppServiceProvider::boot", "doc": "&quot;Bootstrap any application services.&quot;"},
                    {"type": "Method", "fromName": "App\\Providers\\AppServiceProvider", "fromLink": "App/Providers/AppServiceProvider.html", "link": "App/Providers/AppServiceProvider.html#method_register", "name": "App\\Providers\\AppServiceProvider::register", "doc": "&quot;Register any application services.&quot;"},
            
            {"type": "Class", "fromName": "App\\Providers", "fromLink": "App/Providers.html", "link": "App/Providers/AuthServiceProvider.html", "name": "App\\Providers\\AuthServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Providers\\AuthServiceProvider", "fromLink": "App/Providers/AuthServiceProvider.html", "link": "App/Providers/AuthServiceProvider.html#method_boot", "name": "App\\Providers\\AuthServiceProvider::boot", "doc": "&quot;Register any authentication \/ authorization services.&quot;"},
            
            {"type": "Class", "fromName": "App\\Providers", "fromLink": "App/Providers.html", "link": "App/Providers/BroadcastServiceProvider.html", "name": "App\\Providers\\BroadcastServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Providers\\BroadcastServiceProvider", "fromLink": "App/Providers/BroadcastServiceProvider.html", "link": "App/Providers/BroadcastServiceProvider.html#method_boot", "name": "App\\Providers\\BroadcastServiceProvider::boot", "doc": "&quot;Bootstrap any application services.&quot;"},
            
            {"type": "Class", "fromName": "App\\Providers", "fromLink": "App/Providers.html", "link": "App/Providers/EventServiceProvider.html", "name": "App\\Providers\\EventServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Providers\\EventServiceProvider", "fromLink": "App/Providers/EventServiceProvider.html", "link": "App/Providers/EventServiceProvider.html#method_boot", "name": "App\\Providers\\EventServiceProvider::boot", "doc": "&quot;Register any events for your application.&quot;"},
            
            {"type": "Class", "fromName": "App\\Providers", "fromLink": "App/Providers.html", "link": "App/Providers/RepositoriesServiceProvider.html", "name": "App\\Providers\\RepositoriesServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Providers\\RepositoriesServiceProvider", "fromLink": "App/Providers/RepositoriesServiceProvider.html", "link": "App/Providers/RepositoriesServiceProvider.html#method_boot", "name": "App\\Providers\\RepositoriesServiceProvider::boot", "doc": "&quot;Bootstrap services.&quot;"},
                    {"type": "Method", "fromName": "App\\Providers\\RepositoriesServiceProvider", "fromLink": "App/Providers/RepositoriesServiceProvider.html", "link": "App/Providers/RepositoriesServiceProvider.html#method_register", "name": "App\\Providers\\RepositoriesServiceProvider::register", "doc": "&quot;Register services.&quot;"},
            
            {"type": "Class", "fromName": "App\\Providers", "fromLink": "App/Providers.html", "link": "App/Providers/RouteServiceProvider.html", "name": "App\\Providers\\RouteServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Providers\\RouteServiceProvider", "fromLink": "App/Providers/RouteServiceProvider.html", "link": "App/Providers/RouteServiceProvider.html#method_boot", "name": "App\\Providers\\RouteServiceProvider::boot", "doc": "&quot;Define your route model bindings, pattern filters, etc.&quot;"},
                    {"type": "Method", "fromName": "App\\Providers\\RouteServiceProvider", "fromLink": "App/Providers/RouteServiceProvider.html", "link": "App/Providers/RouteServiceProvider.html#method_map", "name": "App\\Providers\\RouteServiceProvider::map", "doc": "&quot;Define the routes for the application.&quot;"},
                    {"type": "Method", "fromName": "App\\Providers\\RouteServiceProvider", "fromLink": "App/Providers/RouteServiceProvider.html", "link": "App/Providers/RouteServiceProvider.html#method_mapWebRoutes", "name": "App\\Providers\\RouteServiceProvider::mapWebRoutes", "doc": "&quot;Define the \&quot;web\&quot; routes for the application.&quot;"},
                    {"type": "Method", "fromName": "App\\Providers\\RouteServiceProvider", "fromLink": "App/Providers/RouteServiceProvider.html", "link": "App/Providers/RouteServiceProvider.html#method_mapApiRoutes", "name": "App\\Providers\\RouteServiceProvider::mapApiRoutes", "doc": "&quot;Define the \&quot;api\&quot; routes for the application.&quot;"},
            
            {"type": "Class", "fromName": "App\\Repositories", "fromLink": "App/Repositories.html", "link": "App/Repositories/CoinHistoricalRepository.html", "name": "App\\Repositories\\CoinHistoricalRepository", "doc": "&quot;Class CoinHistoricalRepository.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Repositories\\CoinHistoricalRepository", "fromLink": "App/Repositories/CoinHistoricalRepository.html", "link": "App/Repositories/CoinHistoricalRepository.html#method___construct", "name": "App\\Repositories\\CoinHistoricalRepository::__construct", "doc": "&quot;CoinHistoricalRepository constructor.&quot;"},
            
            {"type": "Class", "fromName": "App\\Repositories", "fromLink": "App/Repositories.html", "link": "App/Repositories/CoinHistoricalRepositoryInterface.html", "name": "App\\Repositories\\CoinHistoricalRepositoryInterface", "doc": "&quot;Interface CoinHistoricalRepositoryInterface.&quot;"},
                    
            {"type": "Class", "fromName": "App\\Repositories", "fromLink": "App/Repositories.html", "link": "App/Repositories/CoinRepository.html", "name": "App\\Repositories\\CoinRepository", "doc": "&quot;Class CoinRepository.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Repositories\\CoinRepository", "fromLink": "App/Repositories/CoinRepository.html", "link": "App/Repositories/CoinRepository.html#method___construct", "name": "App\\Repositories\\CoinRepository::__construct", "doc": "&quot;CoinRepository constructor.&quot;"},
                    {"type": "Method", "fromName": "App\\Repositories\\CoinRepository", "fromLink": "App/Repositories/CoinRepository.html", "link": "App/Repositories/CoinRepository.html#method_orderByRankAsc", "name": "App\\Repositories\\CoinRepository::orderByRankAsc", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Repositories\\CoinRepository", "fromLink": "App/Repositories/CoinRepository.html", "link": "App/Repositories/CoinRepository.html#method_getByIdOrFail", "name": "App\\Repositories\\CoinRepository::getByIdOrFail", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Repositories\\CoinRepository", "fromLink": "App/Repositories/CoinRepository.html", "link": "App/Repositories/CoinRepository.html#method_getCoinHistoricalBetweenDates", "name": "App\\Repositories\\CoinRepository::getCoinHistoricalBetweenDates", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App\\Repositories", "fromLink": "App/Repositories.html", "link": "App/Repositories/CoinRepositoryInterface.html", "name": "App\\Repositories\\CoinRepositoryInterface", "doc": "&quot;Interface CoinRepositoryInterface.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Repositories\\CoinRepositoryInterface", "fromLink": "App/Repositories/CoinRepositoryInterface.html", "link": "App/Repositories/CoinRepositoryInterface.html#method_orderByRankAsc", "name": "App\\Repositories\\CoinRepositoryInterface::orderByRankAsc", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Repositories\\CoinRepositoryInterface", "fromLink": "App/Repositories/CoinRepositoryInterface.html", "link": "App/Repositories/CoinRepositoryInterface.html#method_getByIdOrFail", "name": "App\\Repositories\\CoinRepositoryInterface::getByIdOrFail", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Repositories\\CoinRepositoryInterface", "fromLink": "App/Repositories/CoinRepositoryInterface.html", "link": "App/Repositories/CoinRepositoryInterface.html#method_getCoinHistoricalBetweenDates", "name": "App\\Repositories\\CoinRepositoryInterface::getCoinHistoricalBetweenDates", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App\\Repositories", "fromLink": "App/Repositories.html", "link": "App/Repositories/UserRepository.html", "name": "App\\Repositories\\UserRepository", "doc": "&quot;Class UserRepository.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Repositories\\UserRepository", "fromLink": "App/Repositories/UserRepository.html", "link": "App/Repositories/UserRepository.html#method___construct", "name": "App\\Repositories\\UserRepository::__construct", "doc": "&quot;UserRepository constructor.&quot;"},
                    {"type": "Method", "fromName": "App\\Repositories\\UserRepository", "fromLink": "App/Repositories/UserRepository.html", "link": "App/Repositories/UserRepository.html#method_getUserPortfolio", "name": "App\\Repositories\\UserRepository::getUserPortfolio", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App\\Repositories", "fromLink": "App/Repositories.html", "link": "App/Repositories/UserRepositoryInterface.html", "name": "App\\Repositories\\UserRepositoryInterface", "doc": "&quot;Interface UserRepositoryInterface.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Repositories\\UserRepositoryInterface", "fromLink": "App/Repositories/UserRepositoryInterface.html", "link": "App/Repositories/UserRepositoryInterface.html#method_getUserPortfolio", "name": "App\\Repositories\\UserRepositoryInterface::getUserPortfolio", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App\\Repositories", "fromLink": "App/Repositories.html", "link": "App/Repositories/UserTradeRepository.html", "name": "App\\Repositories\\UserTradeRepository", "doc": "&quot;Class UserTradeRepository.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Repositories\\UserTradeRepository", "fromLink": "App/Repositories/UserTradeRepository.html", "link": "App/Repositories/UserTradeRepository.html#method___construct", "name": "App\\Repositories\\UserTradeRepository::__construct", "doc": "&quot;UserTradeRepository constructor.&quot;"},
            
            {"type": "Class", "fromName": "App\\Repositories", "fromLink": "App/Repositories.html", "link": "App/Repositories/UserTradeRepositoryInterface.html", "name": "App\\Repositories\\UserTradeRepositoryInterface", "doc": "&quot;Interface UserTradeRepositoryInterface.&quot;"},
                    
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


