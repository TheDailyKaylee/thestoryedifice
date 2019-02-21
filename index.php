composer require auth0/auth0-php:"~5.0"

use Auth0\SDK\Auth0;

$auth0 = new Auth0([
  'domain' => 'thestoryedifice.auth0.com',
  'client_id' => '6GNtARQ5JhD5IlqOqlLB57zvh76dCQKl',
  'client_secret' => 'YOUR_CLIENT_SECRET',
  'redirect_uri' => 'https://thedailykaylee.github.io/thestoryedifice',
  'audience' => 'https://thestoryedifice.auth0.com/userinfo',
  'scope' => 'openid profile',
  'persist_id_token' => true,
  'persist_access_token' => true,
  'persist_refresh_token' => true,
]);

...
$userInfo = $auth0->getUser();

if (!$userInfo) {
    // We have no user info
    // redirect to Login
} else {
    // User is authenticated
    // Say hello to $userInfo['name']
    // print logout button
}

<a class="btn btn-primary btn-lg btn-login btn-block" href="login.php">SignIn</a>

<?php
// index.php

// ...
$userInfo = $auth0->getUser();
?>
<html>
  <body class="home">
    <div><?php echo $userInfo['name'] ?></div>
  </body>
</html>

// index.php

$laravelStore = new MyLaravelStore();
$auth0 = new Auth0(array(
    // ...
    'store' => $laravelStore,
    // ...
));
