<?php
/**
 * @author      Charlike Mike Reagent <https://github.com/tunnckoCore>
 * @license     MIT License <http://opensource.org/licenses/MIT>
 * @link        https://github.com/tunnckoCore/MySQLi-Books-and-Authors-Manager/
 * @link        http://www.charlike.pw/telerik/MySQLi-Books-and-Authors-Manager/
 */

echo '<pre>' . print_r($_POST, true) . '</pre>';
if (issetMethod($_POST, 3) && matches($_POST['form_add_book'], 'yep')) {
    
}


if (issetMethod($_POST, 2) && matches($_POST['form_add_author'], 'yep')) {
    
}