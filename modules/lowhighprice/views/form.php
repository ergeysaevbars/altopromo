<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
    <div class="form-group">
        <label for="low_price">Цена от</label>
        <input type="text" name="low_price" id="low_price" class="prc" value="<?= Configuration::get('MIN_PRICE') ?>">
    </div>
    <div class="form-group">
        <label for="high_price">Цена до</label>
        <input type="text" name="high_price" id="high_price" class="prc" value="<?= Configuration::get('MAX_PRICE') ?>">
    </div>
    <button class="btn btn-primary" name="save_price">Сохранить</button>
</form>