<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>もぎたて</title>
    <style>
        th {
            background-color: #289ADC;
            color: white;
            padding: 5px 40px;
        }

        tr:nth-child(odd) td {
            background-color: #FFFFFF;
        }

        td {
            padding: 25px 40px;
            background-color: #EEEEEE;
            text-align: center;
        }

        svg.w-5.h-5 {
            width: 30px;
            height: 30px;
        }
    </style>
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
                    <a href="/products/{{ $product->id }}">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="商品画像">
                    </a>
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