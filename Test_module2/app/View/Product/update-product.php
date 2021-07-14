<div class="container">
    <form method="post" enctype="multipart/form-data">
        <?php if (isset($product)) :?>
        <h3> Chỉnh sửa mặt hàng <?php echo $product->getName()?></h3>
            <div class="mb-3">
                <label for="name-product" class="form-label">Tên hàng: </label>
                <input type="text" required class="form-control" id="name" name="name" value="<?php echo $product->getName()?>">
            </div>
            <div class="mb-3">
                <label for="price-product" class="form-label">Loại hàng: </label>
                <input type="text" required class="form-control" id="type" name="type" value="<?php echo $product->getType()?>">
            </div>
            <div class="mb-3">
                <label for="id-category" class="form-label">Giá: </label>
                <input type="number" required class="form-control" id="price" name="price" value="<?php echo $product->getPrice()?>">
            </div>
            <div class="mb-3">
                <label for="describes" class="form-label">Số lượng: </label>
                <input type="number" required class="form-control" id="describes" name="quantity" value="<?php echo $product->getQuantity()?>">
            </div>
            <div class="mb-3">
                <label for="describes" class="form-label">Ngày: </label>
                <input type="date" required class="form-control" id="date" name="date" value="<?php echo $product->getDate()?>">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Mô tả: </label>
                <input type="text" required class="form-control" id="describes" name="describe" value="<?php echo $product->getDescribe()?>">
            </div>
        <?php endif ?>
        <button type="submit" class="btn btn-primary">Sửa mặt hàng</button>
        <button type="button"><a href="index.php">Thoát</a></button>
    </form>
</div>
