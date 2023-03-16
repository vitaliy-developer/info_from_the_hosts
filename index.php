</head>
<body>
<div class="flex-container">

<div>
<?php echo "Version App 0.3.6"; 
?>
</div>

<br>

<div>
<?php
$date = shell_exec('date');
echo "Date on host: $date";
?>
</div>

<br>

<div>
<?php
$hostname = shell_exec('hostname');
echo "My hostname: $hostname";
?>
</div>

<br>

<div>
<?php
$ip = shell_exec('hostname -I');
echo "Host IP: $ip";
?>
</div>

<br>

<div>
<img src="img.gif"/>
</div>

</div>
</body>
</html>

<style>

.flex-container {
  padding-top: 30px;
  padding-bottom: 30px;
  display: flex;
  flex-direction: column;
  align-items: center;
  font-weight: bold;
  margin-top: 40px;
  border-style: dashed solid;
}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  max-width: 30%;
  height: auto;
}

</style>
