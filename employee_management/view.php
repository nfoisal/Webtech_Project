<?php
session_start();
echo $_SESSION['name'];
echo '<br/>';
echo session_id();