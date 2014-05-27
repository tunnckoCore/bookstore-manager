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
                <i class="i-search-5 icon20"></i> 
                <h4>Search</h4>
            </div>
            <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                <!--<a href="#" class="wclose"><i class="icon-remove"></i></a>-->
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="widget-content tm-pfull-10">
            <form action="http://www.charlike.pw/application/controllers/domaincheck.controller.php" class="form-horizontal" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" name="tm_domaincheck" value="" placeholder="ex: Mark, A Tramp Abroad">
                    <input type="hidden" name="fum_session_token" value="cd95b440cf84e46c75a851c96180f83d9b369673">

                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit"><i class="i-search-5"></i> Search</button>
                    </span>
                </div>
            </form>
        </div>
        <div class="widget-foot">
            Search by part of author name or book title...
        </div>
    </div><!-- //.widget -->
</div><!-- End: <?php echo $filepath; ?> -->
