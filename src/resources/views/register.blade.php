<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>もぎたて</title>
</head>

<body>
    <h3>商品登録</h3>
    <form action="/register" method="post" enctype="multipart/form-data">
        @csrf
        <label>商品名</label>
        <input type="text" value="商品名を入力" name="name">
        <label>値段</label>
        <input type="text" value="値段を入力" name="price">
        <label>商品画像</label>
        <input type="file" name="image">
        <input type="radio" value="1" name="product_id">春
        <input type="radio" value="2" name="product_id">夏
        <input type="radio" value="3" name="product_id">秋
        <input type="radio" value="4" name="product_id">冬
        <label>商品説明</label>
        <textarea name="description"></textarea>
        <input type="button" onclick="history.back()" value="戻る">
        <input type="submit" value="登録">
    </form>
</body>

</html>