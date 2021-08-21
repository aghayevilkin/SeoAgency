<?php session_start(); include 'header.php'; ?>
<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

<!-- Page Heading Start -->
<div class="col-12 col-lg-auto mb-20">
    <div class="page-heading">
        <h3>General <span>/ Setting</span>
        <span>

        <?php
        if (isset($_SESSION['message'])): ?>
        <script type="text/javascript">toastr.<?=$_SESSION['msg_type']?>('<?=$_SESSION['message']?>')</script>
        <?php
            unset($_SESSION['message']);
        ?>
        <?php endif ?>


            
        </span>
    </h3>
    </div>
</div><!-- Page Heading End -->

</div><!-- Page Headings End -->
<!--Default Form Start-->
                <div class="col-lg-6 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">General Setting</h4>
                        </div>
                        <div class="box-body">
                            <form action="./set/process.php" method="POST">
                                <div class="row mbn-20">

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutUsername1">Site Title</label>
                                        <input type="text" id="formLayoutUsername1" class="form-control" placeholder="Site Title" value="<?php echo $settingGet['setting_sitetitle'] ?>" name="setting_sitetitle">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutDesc1">Site Description</label>
                                        <input type="text" id="formLayoutDesc1" class="form-control" placeholder="Site Description" value="<?php echo $settingGet['setting_sitedescription'] ?>" name="setting_sitedescription">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutKey1">Site Keywords</label>
                                        <input type="text" id="formLayoutKey1" class="form-control" placeholder="Site Keywords" value="<?php echo $settingGet['setting_sitekeywords'] ?>" name="setting_sitekeywords">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutAuthor1">Site Author</label>
                                        <input type="text" id="formLayoutAuthor1" class="form-control" placeholder="Site Author" value="<?php echo $settingGet['setting_siteauthor'] ?>" name="setting_siteauthor">
                                    </div>

                                    <div align="right" class="col-12 mb-20">
                                        <input name="saveGeneralSetting" type="submit" value="submit" class="button button-primary">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
<!--Default Form End-->

<?php include 'footer.php'; ?>