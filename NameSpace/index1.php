<!-- With the help of namespace we include number of same name class -->
<?php
 require 'file1.php';
 require 'file2.php';

 $ob1 = new first\one(); 
 $ob1 = new second\one();
?>