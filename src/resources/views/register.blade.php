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
        @if ($errors->has('name'))
        <p style="color: red">{{ $errors->first('name') }}</p>
        @endif
        <label>値段</label>
        <input type="text" value="値段を入力" name="price">
        @if ($errors->has('price'))
        @foreach($errors->get('price') as $error)
        <p style="color: red">{{ $error }}</p>
        @endforeach
        @endif
        <label>商品画像</label>
        <input type="file" name="image">
        @if ($errors->has('image'))
        @foreach($errors->get('image') as $error)
        <p style="color: red">{{ $error }}</p>
        @endforeach
        @endif
        <label>季節</label>
        <input type="checkbox" value="1" name="season_id">春
        <input type="checkbox" value="2" name="season_id">夏
        <input type="checkbox" value="3" name="season_id">秋
        <input type="checkbox" value="4" name="season_id">冬
        @if ($errors->has('season_id'))
        <p style="color: red">{{ $errors->first('season_id') }}</p>
        @endif
        <label>商品説明</label>
        <textarea name="description"></textarea>
        @if ($errors->has('description'))
        @foreach($errors->get('description') as $error)
        <p style="color: red">{{ $error }}</p>
        @endforeach
        @endif
        <input type="button" onclick="history.back()" value="戻る">
        <input type="submit" value="登録">
    </form>
</body>

</html>