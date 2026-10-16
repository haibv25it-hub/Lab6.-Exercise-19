
<?php include 'view/header.php'; ?>

<main>
    <h1>Selected Product List</h1>

    <ul>
        <?php foreach ($products as $product) : ?>
            <li>
                <?php echo htmlspecialchars($product['productName']); ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <h1>Delete Message</h1>
    <p><?php echo htmlspecialchars($delete_message); ?></p>

    <h1>Insert Message</h1>
    <p><?php echo htmlspecialchars($insert_message); ?></p>
</main>

<?php include 'view/footer.php'; ?>
