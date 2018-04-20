<html>
<head>
    <title>Przyjazne linki</title>
</head>
<body>
<?PHP
$root_dir="/url-test/";
if(isset($_GET['id'])){
    $id=$_GET['id'];
}else{
    $id='startowa';
}
echo '<h1>Udało się!</h1>';
echo "<p>Jestem na stronie: $id</p>";
?>
<ul>
    <li><a href="<?php echo "$root_dir"; ?>
		pierwszy-link/">Pierwszy link</a></li>
    <li><a href="<?php echo "$root_dir"; ?>
		drugi-link/">Drugi link</a></li>
    <li><a href="<?php echo "$root_dir"; ?>
		trzeci-link/">Trzeci link</a></li>
</ul>
</body>
</html>