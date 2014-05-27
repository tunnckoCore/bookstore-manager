<?php
/**
 * @author      Charlike Mike Reagent <https://github.com/tunnckoCore>
 * @license     MIT License <http://opensource.org/licenses/MIT>
 * @link        https://github.com/tunnckoCore/MySQLi-Books-and-Authors-Manager/
 * @link        http://www.charlike.pw/telerik/MySQLi-Books-and-Authors-Manager/
 */
$filepath = basename(APP_PATH) . '/views/' . basename(__FILE__);
?>
<!-- Start: <?php echo $filepath; ?> -->
<div class="row">
    <!-- Project desc and Add book -->
    <?php
        //col 1/2: project desc
        display('description', true);
        //col 1/2: add book
        display('add_book', true);
    ?>
</div>
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8">
        <!-- Add author and search widget -->
        <div class="row">
            <?php
                //col 1/2: add author, and add book
                display('add_author', true);

                //col 1/2: books and authors
                display('search', true);
            ?>
        </div><!-- End: Add author and search widget -->
        <!-- Books and Authors -->
        <div class="row">
            <?php
                //col full: Books and Authors
                display('books_and_authors', true);
            ?>
        </div><!-- End: Add author and search widget -->
    </div>

    <!-- Start: Sidebar -->
    <div class="col-lg-4 col-md-4 col-sm-4">
        <?php
            //sidebar rows
            display('sidebar', true);
        ?>
    </div>
    <!-- End: <?php echo $filepath; ?> -->
