<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>もぎたて</title>
</head>

<body>
    <header>
        <h5>mogitate</h5>
    </header>

    <main>
        <h2>商品一覧</h2>
        <form action="/products/search" method="post">
            @csrf
            <input type="search" placeholder="商品名で検索" class="product-search" name="product-search">
            <input type="submit" value="検索" class="search-button">
        </form>
        <table>
            @foreach($products as $product)
            <tr>
                <td>
                    <img src="{{ asset('storage/' . $product->image) }}" alt="商品画像">
                </td>
                <td>{{ $product->name }}</td>
                <td>¥{{ $product->price }}</td>
            </tr>
            @endforeach
        </table>
        {{ $products->links() }}
    </main>
</body>

</html>