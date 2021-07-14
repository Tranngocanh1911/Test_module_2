<div class="container">
    <form method="post" enctype="multipart/form-data">
        <h3>Thêm mặt hàng </h3>
        <div class="mb-3">
            <label for="name-product" class="form-label">Tên hàng: </label>
            <input type="text" required class="form-control" id="name-product" name="name">
        </div>
        <div class="mb-3">
            <label for="price-product" class="form-label">Loại hàng: </label>
            <input type="text" required class="form-control" id="type" name="type">
        </div>
        <div class="mb-3">
            <label for="id-category" class="form-label">Giá: </label>
            <input type="number" required class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="describes" class="form-label">Số lượng: </label>
            <input type="number" class="form-control" id="quantity" name="quantity">
        </div>
        <div class="mb-3">
            <label for="describes" class="form-label">Ngày: </label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Mô tả: </label>
            <input type="text" class="form-control" id="status" name="describe">
        </div>
        <button type="submit" class="btn btn-primary">Nhập mặt hàng</button>
        <button type="button"><a href="index.php">Thoát</a></button>
    </form>
</div>
