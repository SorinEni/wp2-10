<?php
function drawChad():void {
$size = 250;
?>
 <img src="chad.jpg" style="width: <?= $size; ?>px; height: <?= $size; ?>px;"> 
 <?php } ?>

<?php
function drawMuscles():void {
$size = 250;
?> 
 <img src="muscles.jpg" style="width: <?= $size; ?>px; height: <?= $size; ?>px;"> 
<?php } ?>

<?php
function drawRussia():void {
$size = 250;
?>
 <img src="russia_be_like.jpg" style="width: <?= $size; ?>px; height: <?= $size; ?>px;"> 
<?php } ?>

<?php
function drawSociety():void {
$size = 250;
?>
 <img src="society.jpg" style="width: <?= $size; ?>px; height: <?= $size; ?>px;">
<?php } ?>

<?php
function drawVladimir():void {
$size = 250;
?>
 <img src="vladimir.png" style="width: <?= $size; ?>px; height: <?= $size; ?>px;">
<?php } ?>

<?php
function drawArm():void {

?>
 <?php drawMuscles() ?>
 <?php drawRussia() ?>
<?php } ?>

<?php
function drawFullBody():void {
?>
<?php drawVladimir() ?>
<?php drawSociety() ?>
<?php drawChad() ?>
<?php } ?>

<?php
function drawLeg():void {
?>
 <?php drawRussia() ?>
<?php } ?>

<?php
function drawXtremsquat():void {
?>
 <?php drawMuscles() ?>
 <?php drawRussia() ?>
 <?php drawSociety() ?>
 <?php drawVladimir() ?>
 <?php drawChad() ?>
<?php } ?>
