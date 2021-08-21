<?php

session_start();

include '../connect.php';

if (isset($_POST['saveGeneralSetting'])) {
    $settingSave=$db->prepare("UPDATE setting SET
    setting_sitetitle=:setting_sitetitle,
    setting_sitedescription=:setting_sitedescription,
    setting_sitekeywords=:setting_sitekeywords,
    setting_siteauthor=:setting_siteauthor
    WHERE setting_id=1");

    $update=$settingSave->execute(array(
        'setting_sitetitle'=> $_POST['setting_sitetitle'],
        'setting_sitedescription'=> $_POST['setting_sitedescription'],
        'setting_sitekeywords'=> $_POST['setting_sitekeywords'],
        'setting_siteauthor'=> $_POST['setting_siteauthor']
    ));

    if ($update) {
        $_SESSION['message'] = "Updated Successfully ";
        $_SESSION['msg_type'] = "success";
        header("Location:../settings.php");
    }
}




if (isset($_POST['saveContactSetting'])) {
    $settingSave=$db->prepare("UPDATE setting SET
    setting_sitetel=:setting_sitetel,
    setting_sitegsm=:setting_sitegsm,
    setting_sitefax=:setting_sitefax,
    setting_sitemail=:setting_sitemail,
    setting_sitedistrict=:setting_sitedistrict,
    setting_sitecounty=:setting_sitecounty,
    setting_siteaddress=:setting_siteaddress,
    setting_siteshift=:setting_siteshift
    WHERE setting_id=1");

    $update=$settingSave->execute(array(
        'setting_sitetel'=> $_POST['setting_sitetel'],
        'setting_sitegsm'=> $_POST['setting_sitegsm'],
        'setting_sitefax'=> $_POST['setting_sitefax'],
        'setting_sitemail'=> $_POST['setting_sitemail'],
        'setting_sitedistrict'=> $_POST['setting_sitedistrict'],
        'setting_sitecounty'=> $_POST['setting_sitecounty'],
        'setting_siteaddress'=> $_POST['setting_siteaddress'],
        'setting_siteshift'=> $_POST['setting_siteshift']
    ));

    if ($update) {
        $_SESSION['message'] = "Updated Successfully ";
        $_SESSION['msg_type'] = "success";
        header("Location:../contactsetting.php");
    }

}





if (isset($_POST['saveAPISetting'])) {
    $settingSave=$db->prepare("UPDATE setting SET
    setting_siteanalystic=:setting_siteanalystic,
    setting_sitemaps=:setting_sitemaps,
    setting_sitezoopim=:setting_sitezoopim
    WHERE setting_id=1");

    $update=$settingSave->execute(array(
        'setting_siteanalystic'=> $_POST['setting_siteanalystic'],
        'setting_sitemaps'=> $_POST['setting_sitemaps'],
        'setting_sitezoopim'=> $_POST['setting_sitezoopim']
    ));

    if ($update) {
        $_SESSION['message'] = "Updated Successfully ";
        $_SESSION['msg_type'] = "success";
        header("Location:../apisetting.php");
    }

}





?>