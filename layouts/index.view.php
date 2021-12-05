<?php
$this->layout('template', ['title' => 'Home page'])
?>

<h1>Home page</h1>

<?php if ($data->num_rows > 0) : ?>
    <ul>
        <?php foreach($data as $friend): ?>
        <li>
            <a href="/profile/<?=$this->e($friend['id'])?>">
                <?=$this->e($friend['nama'])?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>
<?php else: ?>
<div>
    Data siswa kosong
</div>
<?php endif ?>
