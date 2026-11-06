<?php

class Config {
    public static function DB_HOST() {
        return "localhost";
    }

    public static function DB_USERNAME() {
        return "root";
    }

    public static function DB_PASSWORD() {
        return "YOUR_MYSQL_PASSWORD";
    }

    public static function DB_SCHEMA() {
        return "personalitytest";
    }

    public static function DB_PORT() {
        return "3306";
    }

    public static function JWT_SECRET() {
        return "REPLACE_WITH_A_RANDOM_SECRET";
    }
}
