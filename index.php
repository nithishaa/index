<?php
if (isset($_POST['submit'])) {
    $url = $_POST['url'];
    $value = explode("v=", $url);
    $videoId = $value[1];
}
?>
<html>

<head>

<style>
body {
	font-family: Arial;
	width: 550px;
}

h2 {
	font-size: 1.5em;
	margin: 20px;
}

.frm-video-image-thumbnail {
	background: #f5f5f5;
	border: #e0dfdf 1px solid;
	margin: 20px;
	padding: 40px;
	border-radius: 2px;
}

.btn-submit {
	padding: 10px 20px;
	background: #333;
	border: #1d1d1d 1px solid;
	color: #f0f0f0;
	font-size: 0.9em;
	width: 90px;
	border-radius: 2px;
	cursor: pointer;
}

.input-field {
	width: 100%;
	border-radius: 2px;
	padding: 10px;
	border: #e0dfdf 1px solid;
}

.thumb-head {
	margin-top: 30px;
	border-bottom: #CCC 1px solid;
    color: #999;
    font-weight: normal;
}
</style>
</head>

<body>
    <h2>Show Image Thumbnail by YouTube Video URL using PHP</h2>

    <div class="frm-video-image-thumbnail">
        <form method="post" action="">
            <input class="input-field" type="text" name="url"
                placeholder="Enter URL"><br /> <br /> <input
                class="btn-submit" type="submit" name="submit"
                value="Submit">
        </form>
        <div class="thumbnail">
<?php
if (! empty($videoId)) {
    ?>
    <h3 class="thumb-head">Thumbnail Image:</h3>
                <img
                src="http://img.youtube.com/vi/<?php echo $videoId; ?>/hqdefault.jpg"
                width="250" />
<?php
}
?>
        </div>
    </div>

</body>
</html>
