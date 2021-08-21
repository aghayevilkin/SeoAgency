<?php session_start(); include 'header.php'; ?>
<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

<!-- Page Heading Start -->
<div class="col-12 col-lg-auto mb-20">
    <div class="page-heading">
        <h3>Contact <span>/ Setting</span>
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
                            <h4 class="title">Contact Setting</h4>
                        </div>
                        <div class="box-body">
                            <form action="./set/process.php" method="POST">
                                <div class="row mbn-20">

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutUsername1">Phone Number</label>
                                        <input type="text" id="formLayoutUsername1" class="form-control" value="<?php echo $settingGet['setting_sitetel'] ?>" name="setting_sitetel">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutDesc1">Phone Number (GSM)</label>
                                        <input type="text" id="formLayoutDesc1" class="form-control" value="<?php echo $settingGet['setting_sitegsm'] ?>" name="setting_sitegsm">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutKey1">Fax Number</label>
                                        <input type="text" id="formLayoutKey1" class="form-control" value="<?php echo $settingGet['setting_sitefax'] ?>" name="setting_sitefax">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutAuthor1">Site Mail</label>
                                        <input type="text" id="formLayoutAuthor1" class="form-control" placeholder="Site Author" value="<?php echo $settingGet['setting_sitemail'] ?>" name="setting_sitemail">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutdistrict">District</label>
                                        <input type="text" id="formLayoutdistrict" class="form-control" value="<?php echo $settingGet['setting_sitedistrict'] ?>" name="setting_sitedistrict">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutcounty">County</label>
                                        <input type="text" id="formLayoutcounty" class="form-control" value="<?php echo $settingGet['setting_sitecounty'] ?>" name="setting_sitecounty">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutaddress">Address</label>
                                        <input type="text" id="formLayoutaddress" class="form-control" value="<?php echo $settingGet['setting_siteaddress'] ?>" name="setting_siteaddress">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutshift">Shift</label>
                                        <input type="text" id="formLayoutshift" class="form-control" value="<?php echo $settingGet['setting_siteshift'] ?>" name="setting_siteshift">
                                    </div>
                                    

                                    <div align="right" class="col-12 mb-20">
                                        <input name="saveContactSetting" type="submit" value="submit" class="button button-primary">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
<!--Default Form End-->

<?php include 'footer.php'; ?>