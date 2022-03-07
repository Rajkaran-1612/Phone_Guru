<?php
  ob_start();
  //include header.php file
  include('header.php');


$news_mail = filter_input(INPUT_POST, 'mail');
$host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'phone_guru';

    $conn = mysqli_connect($host, $username, $password, $dbname);

    $subject = "Successful Subscription (Phone Guru)";
    $message = "We have received your response. You are now an authorized member of the Phone Guru Newsletter community. Thank You for Subscribing, Hope that we do not give you any chance of complaint. Hope You liked my website. I am waiting for a positive response after this competition";
    $headers = "From: rajkaran1612@gmail.com";

    mail($news_mail, $subject, $message, $headers);

    /*

    $sqlQuery = "INSERT INTO user (c_name, mail, mobile, username, pass) 
                VALUES ('$name', '$mail', '$mobile', '$u_name', '$pass')";

if(mysqli_query($conn, $sqlQuery)) {
   
} else {
   echo "<br>";
   die("Unable to insert record" . mysqli_error($conn));
}
*/

?>


<?php 
  /* include banner-area section */
  include('Template/_banner-area.php');
  /* !include banner-area section */

  /* include top-sale section */
  include('Template/_top-sale.php');
  /* !include top-sale section */

  /* include special-price section */
  include('Template/_special-price.php');
  /* !include special-price section */

  /* include banner_ads section */
  include('Template/_banner_ads.php');
  /* !include banner_ads section */

  /* include new_phones section */
  include('Template/_new-phones.php');
  /* !include new_phones section */

  /* include blogs section */
  include('Template/_blogs.php');
  /* !include blogs section */
?>
    
<?php
  //include footer.php file
  include('footer.php');
?>
