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
                    <i class="i-user-3 icon20"></i> 
                    <h4>Add author</h4>
                </div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <!--<a href="#" class="wclose"><i class="icon-remove"></i></a>-->
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="widget-content tm-pfull-10">
                <form action="add.php" class="form-inline" method="post" role="form">
                    <div class="input-group">
                        <input type="text" class="form-control" name="tm_add_author" value="" placeholder="ex: Mark Twain">
                        <input type="hidden" name="form_add_author" value="yep">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit"><i class="i-user-3"></i> Add author</button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="widget-foot">
                Add some author to our famous library.
            </div>
        </div><!-- //.widget -->
    </div><!-- End: <?php echo $filepath; ?> -->
    