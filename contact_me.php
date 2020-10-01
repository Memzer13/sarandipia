<?php
require_once("contact_me.php");
$fields = ft_api_init_form_page("", "test");
$params = array(
   "submit_button" => "button",
   "next_page" => "confirm.html",
   "form_data" => $_POST,
   "file_data" => $_FILES,
   "finalize" => true
);
ft_api_process_form($params);
?>


