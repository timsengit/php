<div class="righter">
    <div class="rightBox">
        <a href="guestbook.php" class="btn_s">我要留言</a>
    </div>

    <div class="blank10"></div>
    <div class="rightBox">
        <h3>最新公告<b class="cGrey fn">News</b></h3>
        <ul class="list_r">
            <?php foreach ($pdo->query('SELECT * from news') as $row) {
    ;?>
            <li><a href=<?php echo "infoItem.php?id=" . $row['id']; ?>><?php echo $row['name']; ?></a></li>
            <?php }
;?>
        </ul>
    </div>
    <div class="blank10"></div>
    <div class="rightBox">
        <h3>友情链接<b class="cGrey fn">Links</b></h3>
        <ul class="list_r">
            <?php foreach ($pdo->query('SELECT * from friendlinks') as $row) {
    ;?>
            <li><a href=<?php echo $row['link']; ?>><?php echo $row['name']; ?></a></li>
            <?php }
;?>
            <li><a href="#">京东网上商城</a></li>
            <li><a href="#">携程旅行网</a></li>
        </ul>
    </div>
</div>
