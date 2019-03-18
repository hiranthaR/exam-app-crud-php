<?php
/**
 * Created by IntelliJ IDEA.
 * User: hiruu
 * Date: 3/18/19
 * Time: 12:59 AM
 */

session_start();
session_unset();
session_destroy();

header("Location: ./../../");