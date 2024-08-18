<?php
if (isset($_GET["page"])) {
    $current_page = $_GET["page"];
} else {
    $current_page = 1;
}
?>

<div class="col-12">
    <div class="pagination d-flex justify-content-center mt-5">
        <?php if ($total_pages > 1): ?>

            <a href="?page=<?php echo ($current_page > 1) ? $current_page - 1 : 1; ?>" class="rounded">&laquo;</a>

            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="?page=<?php echo $i; ?>"
                    class="rounded <?php echo ($i == $current_page) ? 'active' : ''; ?>"><?php echo $i; ?></a>
            <?php endfor; ?>

            <a href="?page=<?php echo ($current_page < $total_pages) ? $current_page + 1 : $total_pages; ?>"
                class="rounded">&raquo;</a>
        <?php endif; ?>
    </div>
</div>