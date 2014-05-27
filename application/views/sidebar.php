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
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="widget">
            <!-- Widget title -->
            <div class="widget-head">
                <div class="widget-title pull-left">
                    <i class="i-users icon20"></i> 
                    <h4>Authors</h4>
                </div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <!--<a href="#" class="wclose"><i class="icon-remove"></i></a>-->
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="widget-content">
                <!-- Widget content -->

                <table class="table table-condensed table-striped table-hover">
                    <tr>
                        <td>1.</td>
                        <td>Mark Twain (<i>1,546 books</i>)</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Aristotel (<i>739 books</i>)</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Platon (<i>342 books</i>)</td>
                    </tr>
                </table>
            </div><!-- //.widget-content -->
            <div class="widget-foot">
                Latest 10 added authors and their books count
            </div>
        </div><!-- //.widget -->
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="widget">
            <!-- Widget title -->
            <div class="widget-head">
                <div class="widget-title pull-left">
                    <i class="i-books icon20"></i> 
                    <h4>Books</h4>
                </div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <!--<a href="#" class="wclose"><i class="icon-remove"></i></a>-->
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="widget-content">
                <!-- Widget content -->

                <table class="table table-condensed table-striped table-hover">
                    <tr>
                        <td>1.</td>
                        <td>A Tramp Abroad</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Decadense</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Castle</td>
                    </tr>
                </table>
            </div><!-- //.widget-content -->
            <div class="widget-foot">
                Latest added books to our library
            </div>
        </div><!-- //.widget -->
    </div>
</div>
<!-- End: <?php echo $filepath; ?> -->
