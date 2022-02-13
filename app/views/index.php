<?php include_once APPROOT . '/views/inc/header.inc.php' ?>

<div class="row mt-3">
    <div class="col-md-6">
        <h2>Books</h2>
    </div>
    <div class="col-md-6">
        <a href="<?php echo URLROOT; ?>add" class="btn btn-info float-right">Add Book</a>
    </div>

    <div class="p-2 mx-auto w-25">

        <?php
        foreach ($data['books'] as $book) :?>
            <div class="card card-body py-3 my-2">
                <span class="card-title">Book Name : <?php echo $book->bookName ?></span>
                <span class="card-title" >Author : <?php echo $book->author ?></span>
                <span class="card-title" >Published in : <?php echo $book->publishingYear ?></span>
                <span class="card-title" >Price : <?php echo $book->price ?> $</span>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include_once APPROOT . '/views/inc/footer.inc.php' ?>