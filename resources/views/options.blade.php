<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/options.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
    <title>Options</title>
</head>

<body>

    <div class="container">
        <!-- Navigation Bar -->

        <div class="navbar">
            <img src="{{ asset('elements/coldmoo.png') }}" class="logo">
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Locations</a></li>
                    <li><a href="#">About Cold Moo</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </nav>
        </div>


        <!-- Cover -->
        <div class="cover">
            <img src="{{ asset('elements/optionbg.png') }}" alt="" class="bgcover">
        </div>

        <!-- Filter -->
        <div class="filter">
            
        </div>

        <!-- Main Content -->
        <div class="main">
            <div class="row">
                @if($products->isEmpty())
                <p>No products available.</p>
                @else
                @foreach($products as $product)
                <div class="room-card">
                    <div class="product-image">
                        <img src="{{ $product->productImageURL }}" alt="{{ $product->productName }}" />
                    </div>
                    <div class="details">
                        <div class="pname">{{ $product->productName }}</div>
                        <div class="description">{{ $product->productDescription }}</div>
                        <!-- Additional details here -->
                    </div>
                    <div class="details2">
                        <div class="price">Rp{{ $product->productPrice }}</div>
                        <form action="{{ route('addToCart') }}" method="post">
                            @csrf
                            <input type="hidden" name="productID" value="{{ $product->productID }}">
                        </form>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>

        <script src="{{ asset('js/options.js') }}"></script>
</body>

</html>