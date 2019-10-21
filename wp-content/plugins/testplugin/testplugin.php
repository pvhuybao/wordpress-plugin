<?php
/**
* Plugin Name: Test Plugin
* Description: This is the very first plugin I ever created.
* Version: 1.0
* Author: Bao
**/

add_action('admin_menu', 'test_plugin_setup_menu');
 
function test_plugin_setup_menu(){
        add_menu_page( 'Test Plugin Page', 'Test Plugin', 'manage_options', 'test-plugin', 'test_init' );
}
 
function test_init(){
        echo "
        <form method='POST'>
                Enter question: <input type='text' name='question'>
                <br><br>
                Enter answer: <input type='text' name='answer'>
                <br><br>
                <input type='submit' value='Insert' name='insert'>
                <br><br><br><br>

        </form>

        <form method='POST' enctype='multipart/form-data'>
                Select File: <input type='file' name='file' id='file'>
                <br>
                Import data: <button id='submit' name='Import'>Upload</button>
        </form>
        ";


        //fill form and save to database
        if(isset($_POST['insert'])) {
                $q = $_POST['question'];
                $a = $_POST['answer'];

                global $wpdb;

                //$wpdb->insert("tablename", array());
                $sql = $wpdb -> insert("questions", array("question" => $q, "answer" => $a));
                if($sql == true) {
                        echo "<script>alert('Success !!!')</script>";
                } else {
                        echo "<script>alert('Failed !!!')</script>";
                }
        }


        //import csv file
        if(isset($_POST["Import"])) {
                
                $filename = $_FILES["file"]["tmp_name"];

                global $wpdb;
                
                if($_FILES["file"]["size"] > 0)
                {
                        $file = fopen($filename, "r");
                        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
                        {
                                $sql1 = $wpdb -> insert("questions", array("question" => $getData[1], "answer" => $getData[2]));
                                if($sql1 == false) {
                                        echo "<script>alert('Failed !!!')</script>";
                                }
                        }
                        fclose($file);  
                }
        }  
            

}
 
?>