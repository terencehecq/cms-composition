<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>



 <!-- map  -->


 [osmapper id="6"]

 <!-- form  -->


<form action="post-contact.php" method="POST">
<div>

<!-- ______ NAME ______ -->

<label for="input-name"></label>
<input type="text" id="input-name" name="name">

<!-- ______ MAIL ______ -->

<label for="input-mail"></label>
<input type="text" id="input-mail" name="mail">

<!-- ______ PHONE ______ -->

<label for="input-phone"></label>
<input type="text" id="input-phone" name="phone">

<!-- ______ POSTCODE ______ -->

<label for="input-postcode"></label>
<input type="text" id="input-postcode" name="postcode">

<!-- ______ Message ______ -->

<label for="input-message"></label>
<input type="text" id="input-message" name="message">


</div>
</form>

<?php getfooter(); ?>
