<?php
session_start(); // MUST be at top,Starts or resumes session

$message = "";
// $_SESSION- superglobal aaray- stores data across requests
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded credentials (just for learning)
    if ($username === "admin" && $password === "1234") {
//if login is successfull then user is remebered , on next request if 
// session exists - user stays logged in.
        $_SESSION['user'] = $username;
        $message = "Login successful!";

    } else {
        $message = "Invalid credentials.";
    }
}
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Login System</h2>

<form method="POST">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Login</button>
    <a href="login.php?logout=true">Logout</a>
</form>

<br>

<?php
if (isset($_SESSION['user'])) {
    echo "Welcome, " . $_SESSION['user'];
} else {
    echo $message;
}
?>

</body>
</html>

<!-- When we use `session_start()` in PHP, 
 we are not manually checking cookies because PHP handles that automatically
behind the scenes. When a user first visits the page, 
PHP creates a unique session ID and sends 
it to the browser as a cookie (usually named `PHPSESSID`). 
The browser stores this cookie and automatically sends it back to the server
with every new HTTP request. On each request, when `session_start()` runs,
PHP checks whether a session cookie (`PHPSESSID`) was sent by the browser.
If it exists, PHP reads that session ID, looks for the corresponding session
 data stored on the server (usually in a session file), loads that data, 
 and populates the `$_SESSION` superglobal array. 
 If the cookie does not exist, PHP creates a new session and
generates a new session ID. So we never manually check the cookie
 because `session_start()` internally reads the cookie, 
 matches it with server-side session storage, and restores 
 the session data automatically. The important thing to understand is 
 that the cookie only stores the session ID, not the actual user data 
 — the real data (like `$_SESSION['user']`) is stored securely on the server.
 -->

 <!-- Server creates session ID.

Server sends session ID to browser as cookie.

Browser stores that cookie.

On next request, browser sends session ID back.

Server reads session ID.

Server loads the corresponding session data from server storage.

PHP fills the $_SESSION array with that data -->

<!-- SECURITY ----------------------- -->

<!-- Session security mainly involves understanding two 
 different types of attacks: **session fixation** and **
 session hijacking**. In session fixation, the attacker does
  not steal your cookie but instead tricks the victim into 
  using a session ID that the attacker already knows before
   the user logs in. If the user logs in with that same session
    ID and the server does not regenerate it, the attacker can reuse
    that known session ID to gain access. This is why we call
     `session_regenerate_id(true)` immediately after
      successful login — it destroys the old session ID and generates 
      a new one, preventing attackers from reusing a pre-login session
       ID. On the other hand, session hijacking happens after login, when 
       an attacker somehow steals the session cookie (for example, if the 
       website is not using HTTPS, or there is an XSS vulnerability). Since the session ID is stored in the browser as a cookie (like `PHPSESSID`), if an attacker obtains that cookie, they can impersonate the user because the server trusts that session ID. Session regeneration does not protect against hijacking after login; that is prevented by using HTTPS (which encrypts cookies during transmission), setting the HttpOnly flag (so JavaScript cannot access cookies), using the Secure flag (so cookies are only sent over HTTPS), and preventing XSS vulnerabilities. In simple terms, session regeneration protects against attackers who try to set a session ID before login, while HTTPS and proper security configurations protect against attackers trying to steal the session ID after login.
 -->