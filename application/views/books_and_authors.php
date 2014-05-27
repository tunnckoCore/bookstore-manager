<?php
/**
 * @author      Charlike Mike Reagent <https://github.com/tunnckoCore>
 * @license     MIT License <http://opensource.org/licenses/MIT>
 * @link        https://github.com/tunnckoCore/MySQLi-Books-and-Authors-Manager/
 * @link        http://www.charlike.pw/telerik/MySQLi-Books-and-Authors-Manager/
 */
$filepath = basename(APP_PATH) . '/views/' . basename(__FILE__);
?>
<!-- Books and author(s) -->
<!-- Start: <?php echo $filepath; ?> -->
    <div class="col-lg-12 col-md-12 col-sm-12">
        <!-- Widget starts -->
        <div class="widget wred">
            <div class="widget-head">
                <div class="widget-title pull-left">
                    <i class="i-list icon20"></i> 
                    <h4>Books and Authors</h4>
                </div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <!--<a href="#" class="wclose"><i class="icon-remove"></i></a>-->
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="widget-content">
                <table class="table table-condensed table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center tm-th-first-width">#</th>
                            <th>Book Title</th>
                            <th>Book Authors</th>
                        </tr>
                    </thead>
                    <!-- 
                    Защото ми е приятно. Защото тогава, когато започах ме откъсваше от проблеми и простотии - е, и сега е така до някаква степен. Но не до такава степен, просто животът ми стана по-спокоен и прятен, за разлика от тогавашните тийн години. А в момента просто е пристрастяване сякаш и приятно занимание без умора - в същото време с огромно желание за развитие.
                    
                    Знам, че е иновативна софтуерна компания на световно ниво и се занимава с разработка на софтуер, инструменти за тестване и управление на проекти, мобилни приложения в cloud среда и други. Събира много професионалисти на едно място, а също така и предлага създаването, и развитието на такива. В допълнение, то пък се оказва безплатно е белстящият канал за развитието и разпространението на фирмата.
                    
                    
                    -->
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td><i class="i-chrome icon16"></i> 3,005</td>
                            <td><i class="i-windows icon16"></i>1,546</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td><i class="i-opera icon16"></i> 4,005</td>
                            <td><i class="i-tux icon16"></i>1,349</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td><i class="i-IE icon16"></i> 1,405</td>
                            <td><i class="i-android icon16"></i>3,555</td></td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td><i class="i-firefox icon16"></i> 2,505</td>
                            <td><i class="i-windows8 icon16"></i>335</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td><i class="i-safari icon16"></i> 505</td>
                            <td><i class="i-apple icon16"></i>4,229</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td><i class="i-safari icon16"></i> 505</td>
                            <td><i class="i-apple icon16"></i>4,229</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="widget-foot">
                List of books and their authors in our library
            </div>
        </div><!-- //.widget -->
    </div><!-- End: <?php echo $filepath; ?> -->
