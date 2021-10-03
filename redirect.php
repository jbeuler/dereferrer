<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo urldecode($url); ?> &hellip;</title>
</head>
<body>
<a style="display: none;" id="redlink" href="<?php echo urldecode($url); ?>" rel="noreferrer"></a>
</body>

<script>
        document.getElementById('redlink').click();
</script>

</html>