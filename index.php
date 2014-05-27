<?php
/**
 * MySQLi Books and Authors Manager
 * @author      Charlike Mike Reagent <https://github.com/tunnckoCore>
 * @license     MIT License <http://opensource.org/licenses/MIT>
 * @link        https://github.com/tunnckoCore/MySQLi-Books-and-Authors-Manager/
 * @link        http://www.charlike.pw/telerik/MySQLi-Books-and-Authors-Manager/
 */
require __DIR__ . DIRECTORY_SEPARATOR . 'config.php';


$templateData['title'] = APP_NAME;


//if ($DB_INIT) {
//    $q = mysqli_query($DB_INIT, 'SELECT * FROM books');
//    if ($q) {
//        while ($rows = mysqli_fetch_assoc($q)) {
//            echo 'Results: <pre>' . print_r($rows, true) . '</pre>';
//        }
//    } else {
//        echo 'ERROR: ' . mysqli_error($DB_INIT);
//    }
//}
//exit;


/**
 * Display index page
 * - add author
 * - add book to author
 * - search
 * - all books table
 * - all authors table
 * - all books with authors
 * @see /system/functions.php display();
 */
display('index', false, $templateData);
