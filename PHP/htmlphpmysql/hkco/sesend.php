<?php
session_id("a010");
session_start();
session_unset();
session_destroy();
?>