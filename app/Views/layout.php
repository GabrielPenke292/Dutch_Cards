<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?= $this->renderSection("layout/header")?>

    <?= $this->renderSection("layout/sidebar")?>
    <?= $this->renderSection('content');?>

    <?= $this->renderSection("layout/footer")?>

</body>
</html>
