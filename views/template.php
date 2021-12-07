<html>
  <head>
    <title><?= $this->e($title) ?? 'default title' ?></title>
    <link rel="stylesheet" href="../php-plates/css/app.css" />
  </head>
  <body>
    <main id="page">
      <header>
        <ul>
          <li><a href="/php-plates">Home</a></li>
          <li><a href="/php-plates/artikel.php">Artikel</a></li>
        </ul>
      </header>
      <section id="content">
      <?=$this->section('content')?>
      </section>
      <footer>&copy RO <?= date('Y') ?></footer>
    </main>
  </body>
</html>