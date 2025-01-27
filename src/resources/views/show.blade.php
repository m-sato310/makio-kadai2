<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>もぎたて</title>
</head>

<body>
    <form action="" method="post">
        @csrf
        <input type="file" accept="image/png, image/jpeg" name="file" />
        <label>商品名</label>
        <input type="text" value="{{ $product->name }}">
        <label>値段</label>
        <input type="text" value="{{ $product->price }}">
        <label>季節</label>
        <input type="radio" value="spring">春
        <input type="radio" value="summer">夏
        <input type="radio" value="autumn">秋
        <input type="radio" value="winter">冬
        <label>商品説明</label>
        <textarea name="" id="" rows="10" cols="50">{{ $product->description }}</textarea>
        <input type="button" onclick="history.back()" value="戻る">
        <input type="submit" value="変更を保存">
    </form>
</body>

</html>