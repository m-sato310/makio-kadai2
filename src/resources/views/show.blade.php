<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>もぎたて</title>
</head>

<body>
    <form action="/products" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <input type="file" accept="image/png, image/jpeg" name="file" />
        @if ($errors->has('image'))
        @foreach($errors->get('image') as $error)
        <p style="color: red">{{ $error }}</p>
        @endforeach
        @endif
        <label>商品名</label>
        <input type="text" value="{{ $product->name }}" name="name">
        @if ($errors->has('name'))
        <p style="color: red">{{ $errors->first('name') }}</p>
        @endif
        <label>値段</label>
        <input type="text" value="{{ $product->price }}" name="price">
        @if ($errors->has('price'))
        @foreach($errors->get('price') as $error)
        <p style="color: red">{{ $error }}</p>
        @endforeach
        @endif
        <label>季節</label>
        @foreach ($seasons as $season)
        <input type="checkbox" value="{{ $season->id }}" name="season_id[]" {{ $product->seasons->contains($season->id) ? 'checked' : '' }}>{{ $season->name }}
        @endforeach
        @if ($errors->has('season_id'))
        <p style="color: red">{{ $errors->first('season_id') }}</p>
        @endif
        <label>商品説明</label>
        <textarea name="description" id="" rows="10" cols="50">{{ $product->description }}</textarea>
        @if ($errors->has('description'))
        @foreach($errors->get('description') as $error)
        <p style="color: red">{{ $error }}</p>
        @endforeach
        @endif
        <input type="button" onclick="history.back()" value="戻る">
        <input type="submit" value="変更を保存">
        <input type="hidden" name="id" value="{{ $product->id }}" />
    </form>
</body>

</html>