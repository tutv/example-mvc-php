<?php
include APP_DIR . '/view/layouts/header.php';
?>

<?php foreach ( $books as $book ): ?>
    <a href="<?php echo APP_URI . '/?page=show-book&book-id=' . $book['id']; ?>">Id: <?php echo $book['id']; ?></a>
    <div>Artist: <?php echo $book['artist']; ?></div>
    <div>Track: <?php echo $book['track']; ?></div>
<?php endforeach; ?>
