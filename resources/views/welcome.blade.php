<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Documentation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .endpoint {
            margin-bottom: 20px;
        }

        .endpoint h2 {
            margin-top: 0;
        }

        .endpoint p {
            margin: 5px 0;
        }

        .endpoint p strong {
            margin-right: 5px;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>API Documentation</h1>
        <h3>Use postman or <a href="https://reqbin.com/" target="_blank">Online API tester for checking api response</a> </h3>
        <div class="endpoint">
            <h2>User Registration</h2>
            <p><strong>Endpoint:</strong>
                <span>https://api.juliush.dev/api/register</span>
                <i class="fa fa-copy" style="font-size:24px" href="https://api.juliush.dev/api/register" id="copyLink1" title="click here to copy"></i>
            </p>
            <p><strong>Method:</strong> POST</p>
            <p><strong>Description:</strong> Register a new user.</p>
            <p><strong>Request Body:</strong> {"name": "example_user", "password": "example_password","password_confirmation": "example_password", "email": "user@example.com"}</p>
            <p><strong>Response:</strong> Status: 201 Created, Body: {"message": "User created successfully"}</p>
        </div>

        <div class="endpoint">
            <h2>User Login</h2>
            <p><strong>Endpoint:</strong>
                <span>https://api.juliush.dev/api/login</span>
                <i class="fa fa-copy" style="font-size:24px" href="https://api.juliush.dev/api/login" id="copyLink2"></i></p>
            <p><strong>Method:</strong> POST</p>
            <p><strong>Description:</strong> Authenticate and obtain a Bearer token.</p>
            <p><strong>Request Body:</strong> {"email": "user@example.com", "password": "example_password"}</p>
            <p><strong>Response:</strong> Status: 200 OK, Body: {"token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9..."}</p>
        </div>
        <div class="endpoint">
            <h2>Show all Product</h2>
            <p><strong>Endpoint:</strong>
                <span>https://api.juliush.dev/api/products</span>
                <i class="fa fa-copy" style="font-size:24px" href="https://api.juliush.dev/api/products" id="copyLink3"></i></p>
            <p><strong>Method:</strong> GET</p>
            <p><strong>Request Body:</strong> [
                {
                "id": 7,
                "name": "test product 1",
                "slug": "test_12321",
                "description": null,
                "price": "100.00",
                "created_at": "2024-03-18T10:44:20.000000Z",
                "updated_at": "2024-03-18T10:44:20.000000Z"
                }, <br>
                {
                "id": 8,
                "name": "test product 1",
                "slug": "test_12321",
                "description": null,
                "price": "100.00",
                "created_at": "2024-03-18T10:45:59.000000Z",
                "updated_at": "2024-03-18T10:45:59.000000Z"
                },<br>
                {
                "id": 10,
                "name": "test eee new",
                "slug": "eeeee",
                "description": null,
                "price": "600.00",
                "created_at": "2024-03-18T17:31:38.000000Z",
                "updated_at": "2024-03-18T17:31:38.000000Z"
                }<br>
                ]</p>
        </div>
        <div class="endpoint">
            <h2>Show Product</h2>
            <p><strong>Endpoint:</strong>
                <span>https://api.juliush.dev/api/products/7</span>
                <i class="fa fa-copy" style="font-size:24px" href="https://api.juliush.dev/api/products/7" id="copyLink4"></i></p>
            <p><strong>Method:</strong> GET</p>
            <p><strong>Request Body:</strong> {"id": 7,
                "name": "test product 1",
                "slug": "test_12321",
                "description": null,
                "price": "100.00",
                "created_at": "2024-03-18T10:44:20.000000Z",
                "updated_at": "2024-03-18T10:44:20.000000Z"}</p>
        </div>
        <div class="endpoint">
            <h2>Search Product</h2>
            <p><strong>Endpoint:</strong>
                <span>https://api.juliush.dev/api/products/search/product_name</span>
                <i class="fa fa-copy" style="font-size:24px" href="https://api.juliush.dev/api/products/search" id="copyLink5"></i></p>
            <p><strong>Method:</strong> GET</p>
            <p><strong>Request Body:</strong> {"id": 7,
                "name": "test product 1",
                "slug": "test_12321",
                "description": null,
                "price": "100.00",
                "created_at": "2024-03-18T10:44:20.000000Z",
                "updated_at": "2024-03-18T10:44:20.000000Z"}</p>
        </div>
        <div class="endpoint">
            <h2>Store Product</h2>
            <p><strong>Endpoint:</strong>
                <span>https://api.juliush.dev/api/products</span>
                <i class="fa fa-copy" style="font-size:24px" href="https://api.juliush.dev/api/products" id="copyLink6"></i></p>
            <p><strong>Method:</strong> POST</p>
            <p><strong>Description:</strong> Authenticate and obtain a Bearer token.</p>
            <p><strong>Request Body:</strong> {
                "name": "test eee new",
                "slug":"eeeee",
                "price":"600"
                }</p>
            <p><strong>Response:</strong> Status: 200 OK, Body: {"Message": "Product created successfully"}</p>
        </div>
        <div class="endpoint">
            <h2>Update Product</h2>
            <p><strong>Endpoint:</strong>
                <span>https://api.juliush.dev/api/products/7</span>
                <i class="fa fa-copy" style="font-size:24px" href="https://api.juliush.dev/api/products/7" id="copyLink7"></i></p>
            <p><strong>Method:</strong> PUT</p>
            <p><strong>Description:</strong> Authenticate and obtain a Bearer token.</p>
            <p><strong>Request Body:</strong> {
                "name": "test eee new",
                "slug":"eeeee",
                "price":"600"
                }</p>
            <p><strong>Response:</strong> Status: 200 OK, Body: {"Message": "Product update successfully"}</p>
        </div>
        <div class="endpoint">
            <h2>Delete Product</h2>
            <p><strong>Endpoint:</strong>
                <span>https://api.juliush.dev/api/products/7</span>
                <i class="fa fa-copy" style="font-size:24px" href="https://api.juliush.dev/api/products/7" id="copyLink8"></i></p>
            <p><strong>Method:</strong> DELETE</p>
            <p><strong>Description:</strong> Authenticate and obtain a Bearer token.</p>
            <p><strong>Response:</strong> Status: 200 OK, Body: {"Message": "Product delete successfully"}</p>
        </div>

        <!-- Add other endpoints similarly -->

    </div>

    <script>
        // Function to handle copying URL to clipboard
        function copyToClipboard(event) {
            event.preventDefault(); // Prevent default link behavior
            var textArea = document.createElement("textarea");
            textArea.value = event.target.getAttribute("href");
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand("copy");
            document.body.removeChild(textArea);
            alert("URL copied to clipboard: " + event.target.getAttribute("href"));
        }

        // Attach event listeners to multiple elements
        document.getElementById("copyLink1").addEventListener("click", copyToClipboard);
        document.getElementById("copyLink2").addEventListener("click", copyToClipboard);
        document.getElementById("copyLink3").addEventListener("click", copyToClipboard);
        document.getElementById("copyLink4").addEventListener("click", copyToClipboard);
        document.getElementById("copyLink5").addEventListener("click", copyToClipboard);
        document.getElementById("copyLink6").addEventListener("click", copyToClipboard);
        document.getElementById("copyLink7").addEventListener("click", copyToClipboard);
        document.getElementById("copyLink8").addEventListener("click", copyToClipboard);
        // Add more listeners as needed...

    </script>
</body>
</html>
