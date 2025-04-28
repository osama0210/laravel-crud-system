<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/modal.js') }}" defer></script>
    <title>Admin</title>
</head>
<body>
@include('components.header')
<section class="admin-page">
    <div class="table-container">
        <div class="table-title-btn-container">
            <h1>Products</h1>
            <button class="login-button btn" id="addOpenModal">Add Product</button>

        </div>
        <table class="products-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td> {{ $product->id }} </td>
                    <td> {{ $product->product_name }} </td>
                    <td class="product-description">
                        @if(strlen($product->product_description) > 10)
                            {{ substr($product->product_description, 0, 10) . '...' }}
                        @else
                            {{ $product->product_description }}
                        @endif
                    </td>
                    <td> {{ $product->product_price }} </td>
                    <td>{{ $product->category->category_name ?? 'Uncategorized' }}</td>
                    <td class="action-buttons">
                        {{--Here, the existing data from the database is passed as data attributes to JavaScript--}}
                        <button
                            class="btn btn-edit open-edit-modal"
                            id="editButton"
                            data-id="{{ $product->id }}"
                            data-name="{{ $product->product_name }}"
                            data-description="{{ $product->product_description }}"
                            data-price="{{ $product->product_price }}"
                            data-category="{{ $product->category_id }}"
                        >
                            Edit
                        </button>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-delete" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="modal" id="productModal">
        <div class="modal-header">
            <h1 id="modalTitle">Add Product</h1>
            <img id="closeModal" src="{{ asset("images/exit-icon.svg") }}" alt="Black exit X button">
        </div>
        <div class="modal-body">
            <form id="productForm" action="{{ route('products.store') }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="POST" id="formMethod">

                <input type="text" name="product_name" placeholder="Enter Product Name">
                <textarea name="product_description" id="" cols="30" rows="4" placeholder="Description"></textarea>
                <input type="text" name="product_price" placeholder="Enter Product Price">
                <select name="category_id">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
                <div class="submit-wrapper">
                    <input name="submit" type="submit" value="Add Product">
                </div>
            </form>
            <form id="categoryForm" action="{{ route('products.category') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h1 id="modalTitle">Add Category</h1>
                </div>
                <input class="category-input" type="text" name="category_name" placeholder="New category">

                <div class="submit-wrapper">
                    <input type="submit" value="Add Category">
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>
