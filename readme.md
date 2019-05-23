# Laravel Whmcs
laravel whmcs is a php package written by [Ayman Elmalah](https://github.com/ayman-elmalah) with laravel to handle using [whmcs](https://www.whmcs.com/) . 

## About whmcs
- WHMCS is the leading web host billing automation platform powering tens of thousands of web hosting companies.
- Simplify and automate daily tasks and operations with the #1 choice in Web Hosting Automation

# Installation Guide
At laravel project install package using composer
```
composer require ayman-elmalah/whmcs
```

The package is compatible with laravel 5.5 or later so you don't need to set providers or aliases for the package, we're using laravel auto discovery

## Get Your Credentials From Whmcs
 - Go to your .env file and paste your credentials to be like this

 ```
 WHMCS_URL='http://yourdomain.com/includes/api.php'
 WHMCS_USERNAME='username'
 WHMCS_PASSWORD='password'
 ```
 
 You are now ready to use the package
 
 ### To send request, you can use CURL request or localApi when you are in whmcs local project
 you can add route for post request to do an action
 ```
 Route::post('whmcs/action', 'WhmcsController@action');
 ```
 At the controller, you can use one of two methods, curl or localApi to execute action to your whmcs
 ```
use Whmcs;
 // curl request
 public function action() {
     $post_fields = ['userid' => $CLIENT_ID', 'responsetype' => 'json'];
     $action = 'GetInvoices';
     $whmcs = Whmcs::curl($action, $post_fields);

     return $whmcs;
 }
   
 // localApi request
 public function action() {
     $post_fields = ['userid' => $CLIENT_ID', 'responsetype' => 'json'];
     $action = 'GetInvoices';
     $whmcs = Whmcs::localApi($action, $post_fields);
    
     return $whmcs;
 }
 ```
 This code will do direct action to whmcs
  
  That's an example of using whmcs api
  to you can use all actions with our package, just edit action value and postfields and it's all in your hand
  
  ## To know more about all api index that you can use, you can visit the link below and choose the action you want
  [WHMCS api index](https://developers.whmcs.com/api/api-index/) => its the documentation for whmcs api, you can take the action and post fields and use it in our package
   
   # If you have any question, issue Or request, i'll be happy if hear any thing from you
   
