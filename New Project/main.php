<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<?php
$url = 'https://graph.facebook.com/317032015164373/feed?access_token=1558577531080757|hgWi-DIjrqg_IFk7JqiviruN5zo';
$content = file_get_contents($url);
$json = json_decode($content, true);

foreach($json as $i){
    echo $i['message'];
}
?>
</body>
</html>