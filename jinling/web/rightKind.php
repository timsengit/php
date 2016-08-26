<div class="righter">
    <div class="rightBox">
        <h3>产品分类</h3>
        <ul class="list_r">
            <?php foreach ($pdo->query('SELECT * from productKind') as $row) {
    ;?>
            <li><a href=<?php echo "productList.php?id=" . $row['id']; ?>><?php echo $row['kindName']; ?></a></li>
            <?php }
;?>
        </ul>
    </div>
</div>
