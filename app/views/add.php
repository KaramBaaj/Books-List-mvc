<?php include_once APPROOT . '/views/inc/header.inc.php';



?>

<div class="card card-body mt-5 w-50 mr-auto ml-auto">
    <h2 class="mb-3">Add new book</h2>
    <form action="<?php echo URLROOT; ?>add" method="post">
        <div class="form-group">
            Book Name : <input type="text" name="name" value="<?php echo $data['name']; ?>" placeholder="name ..." class="form-control form-control-lg <?php echo (!empty($data['name_err']) ? 'is-invalid' : '') ?>">
            <span class="invalid-feedback"><?php echo $data['name_err'] ?></span>
        </div>
        <div class="form-group">
            Author : <input type="text" name="author" value="<?php echo $data['author']; ?>" placeholder="author ..." class="form-control form-control-lg <?php echo (!empty($data['author_err']) ? 'is-invalid' : '') ?>">
            <span class="invalid-feedback"> <?php echo $data['author_err'] ?></span>
        </div>
        <div class="form-group">
            Published in : <input type="text" name="published" value="<?php echo $data['published']; ?>" placeholder="published ..." class="form-control form-control-lg <?php echo (!empty($data['published_err']) ? 'is-invalid' : '') ?>">
            <span class="invalid-feedback"> <?php echo $data['published_err'] ?></span>
        </div>
        <div class="form-group">
            Price : <input type="text" name="price" value="<?php echo $data['price']; ?>" placeholder="price ..." class="form-control form-control-lg <?php echo (!empty($data['price_err']) ? 'is-invalid' : '') ?>">
            <span class="invalid-feedback"> <?php echo $data['price_err'] ?></span>
        </div>
        <div>
            <input type="submit" name="sub" class="btn btn-success">
        </div>
    </form>
</div>

<?php include_once APPROOT . '/views/inc/footer.inc.php'; ?>