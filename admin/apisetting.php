<?php session_start(); include 'header.php'; ?>
<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

<!-- Page Heading Start -->
<div class="col-12 col-lg-auto mb-20">
    <div class="page-heading">
        <h3>API <span>/ Setting</span>
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
                            <h4 class="title">API Setting</h4>
                        </div>
                        <div class="box-body">
                            <form action="./set/process.php" method="POST">
                                <div class="row mbn-20">

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutUsername1">Analystic Code</label>
                                        <input type="text" id="formLayoutUsername1" class="form-control" placeholder="Analystic Code" value="<?php echo $settingGet['setting_siteanalystic'] ?>" name="setting_siteanalystic">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutDesc1">Google Maps</label>
                                        <input type="text" id="formLayoutDesc1" class="form-control" placeholder="Google Maps" value="<?php echo $settingGet['setting_sitemaps'] ?>" name="setting_sitemaps">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutKey1">Zoopim (Live Support)</label>
                                        <input type="text" id="formLayoutKey1" class="form-control" placeholder="Zoopim (Live Support)" value="<?php echo $settingGet['setting_sitezoopim'] ?>" name="setting_sitezoopim">
                                    </div>

                                    <div align="right" class="col-12 mb-20">
                                        <input name="saveAPISetting" type="submit" value="submit" class="button button-primary">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
<!--Default Form End-->

<?php include 'footer.php'; ?>