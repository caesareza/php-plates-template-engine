<html>
  <head>
    <title><?= $this->e($title) ?? 'default title' ?></title>
    <link rel="stylesheet" href="../php/css/app.css" />
  </head>
  <body>
    <ul>
      <li><a href="/php/">Home</a></li>
      <li><a href="/php/artikel.php">Artikel</a></li>
    </ul>
    <?=$this->section('content')?>
  </body>
</html>