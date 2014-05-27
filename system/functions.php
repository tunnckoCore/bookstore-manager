<?php
/**
 * @author      Charlike Mike Reagent <https://github.com/tunnckoCore>
 * @license     MIT License <http://opensource.org/licenses/MIT>
 * @link        https://github.com/tunnckoCore/MySQLi-Books-and-Authors-Manager/
 * @link        http://www.charlike.pw/telerik/MySQLi-Books-and-Authors-Manager/
 */
/**
 * Check isset and counting results in array
 * @param array $method - $_POST, $_GET, $_SESSION or etc.
 * @param int $num number of parameters
 * @return boolean true|false
 */
function issetMethod($method, $num)
{
    if (is_array($method) && $num && $num >= 1) {
        if (isset($method) && count($method) == $num) {
            return true;
        }
    }
    if (!$num) {
       if (isset($method)) {
            return true;
        }
    }
    return false;
}

/**
 * Rendering default layout structure
 * @param string $template Required. Template to render
 * @oaran array $templateData (otional) - template data array - ex. templateData['title']
 * @param boolean $single (optional) true - single preview of template. false - with header and footer
 * @param boolean $return (optional) true - return as string, false - echo to browser
 * @return string
 */
function display($template, $single = false, $templateData = false, $return = false)
{
    if (!$template) {
        exit('First and second param are required');
    }
    // Here we have title & template 100%;
    ob_start();
    if (!$single) {
        require_once APP_VIEWS . 'header' . APP_EXT;
        require APP_VIEWS . strtolower($template) . APP_EXT;
        require_once APP_VIEWS . 'footer' . APP_EXT;
    } else {
        require APP_VIEWS . strtolower($template) . APP_EXT;
    }
    $content = ob_get_clean();
    
    // Template for email or ... ?
    if ($return) {
        return normalize($content, 'trim|string');
    }
    echo normalize($content, 'trim|string');
}

/**
 * Redirect to root Uri if $relative not passed, else to full uri + $relative
 * @param string|null $relative (optional) Relative path to redirect to
 */
function redirect($relative, $isRemote = false)
{
    if ($isRemote) {
        header("Location: ". $relative);
        exit;
    } else {
        $https = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
        $uri = 'http' . $https . '://' . $_SERVER['SERVER_NAME'];
        header("Location: ".$uri.MANAGER_SITEPATH.$relative);
        exit;
    }
}

/**
 * Shortcut to response redirects
 * @param string $text
 * @param string $action
 * @param string $response
 * @return void
 */
function sendProcessResponse($text, $action = 'signin', $response = 'error')
{
    redirect(MANAGER_URI . 'index.php?action='.$action.'&response='.$response.'&msg=' . urlencode($text), true);
}

/**
 * Functional Singleton - connection to server
 * @return object - if connected return existing, else create connection
 */
function dbInit()
{
    //global $DB_INIT;
    if ($GLOBALS['DB_INIT']) {
        return $GLOBALS['DB_INIT'];
    }
    $GLOBALS['DB_INIT'] = mysqli_connect(APP_DB_HOST, APP_DB_USER, APP_DB_PASS, APP_DB_NAME, APP_DB_PORT);
    return $GLOBALS['DB_INIT'];
}
