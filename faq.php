<?php
  require 'include/default.php';
  require 'include/faq.php';

  printHeader(null, null);
  printMenu("faq");
?>

<?php printFAQ(); ?>
  
<?php 
  printFooter();
?>