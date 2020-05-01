<?php include "_partials/header.php" ?>

    <div class="page-header">
        <h1>TODO appka</h1>
    </div>

    <?php $data = $database->select('items', [ 'id', 'text' ]); ?>

    <ul class="list-group col-sm-6">
        <?php
            foreach ( $data as $item ) {
                echo '<li id="item-'.$item['id'].'" class="list-group-item">' . $item['text'];
                echo ' <div class="controls pull-right">';
                echo '  <a href="edit.php?id=' . $item['id'] .'" class="edit-link">edit</a>';
                echo '  <a href="delete.php?id=' . $item['id'] .'" class="delete-link glyphicon glyphicon-remove text-muted"></a> ';
                echo '</div>';
                echo '</li>';
            }
        ?>
    </ul>

    <form id="add-form" class="col-sm-6" action="_inc/add-item.php" method="post">
        <p class="form-group">
            <textarea class="form-control" name="message" id="text" rows="3" placeholder="co chceš přidat?"></textarea>
        </p>
         <p class="form-group button">
            <input class="btn-sm btn-success" type="submit" value="přidat item">
        </p>
    </form>

<?php include "_partials/footer.php" ?>