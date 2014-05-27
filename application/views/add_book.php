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
<div class="col-lg-6 col-md-6 col-sm-6">
    <!-- Widget starts -->
    <div class="widget wred">
        <div class="widget-head">
            <div class="widget-title pull-left">
                <i class="i-book-2 icon20"></i> 
                <h4>Add book</h4>
            </div>
            <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                <!--<a href="#" class="wclose"><i class="icon-remove"></i></a>-->
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="widget-content tm-pfull-10">
            <form action="add.php" class="form-inline" method="post" role="form">
                <div class="form-group">
                    <label class="sr-only" for="inputBookTitle">Book Title</label>
                    <input type="text" class="form-control" name="tm_add_book" value="" id="inputBookTitle" placeholder="ex: A Tramp Abroad">
                </div>
                <div class="form-group">
                    <select name="tm_choose_author[]" class="selectpicker" data-size="5" data-style="btn-danger" multiple>
                        <option value="1">Mark Twain</option>
                        <option value="2">Aristotel</option>
                        <option value="3">Platon</option>
                    </select>
                </div>
                <input type="hidden" name="form_add_book" value="yep">
                <button class="btn btn-primary" type="submit"><i class="i-book-2"></i> Add book</button>
            </form>
        </div>
        <div class="widget-foot">
            Натиснете на „Продължи“ и въведете цена.<br>
        </div>
    </div><!-- //.widget -->
</div><!-- End: <?php echo $filepath; ?> -->
