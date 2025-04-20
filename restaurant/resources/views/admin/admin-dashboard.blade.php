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
    <title>Admin</title>
</head>
<body>
@include('components.header')
<section class="admin-page">
    <div class="table-container">
        <div class="table-title-btn-container">
            <h1>Products</h1>
            <button>Add Product</button>

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
            <tr>
                <td>3</td>
                <td>Shahie</td>
                <td>Its the bes...</td>
                <td>$1,99</td>
                <td>Drinks</td>
                <td>
                    <button>Edit</button>
                    <button>Delete</button>
                </td>
            </tr>
            <tr class="active-row">
                <td>3</td>
                <td>Shahie</td>
                <td>Its the bes...</td>
                <td>$1,99</td>
                <td>Drinks</td>
                <td>
                    <button>Edit</button>
                    <button>Delete</button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Shahie</td>
                <td>Its the bes...</td>
                <td>$1,99</td>
                <td>Drinks</td>
                <td>
                    <button>Edit</button>
                    <button>Delete</button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Shahie</td>
                <td>Its the bes...</td>
                <td>$1,99</td>
                <td>Drinks</td>
                <td>
                    <button>Edit</button>
                    <button>Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
</body>
</html>
