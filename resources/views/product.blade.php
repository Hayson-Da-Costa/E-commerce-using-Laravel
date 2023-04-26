<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    />
    <title>
        Product Page
    </title>
    <style>
        .btn-buy {
            background-color: #4CAF50;
            color: white;
            border-radius: 4px;
        }
        .btn-buy:hover {
          background-color: #45a049;
        }
        .btn-add {
            background-color:#29297d ;
            color: white;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/headphones.jpg') }}" alt="{{ $product->name }}" >
            </div>
            <div class="col-md-6">
                
                <h1>{{ $product->name }}</h1>
                <p>{{ $product->description }}</p>
                <p>Price: ${{ $product->price }}</p>
                    
                 <button onclick="location.href='{{ url('/billing') }}'" type="submit" class="btn-buy">Buy Now</button>
                 <button onclick="postJSON({{ $product->id }})" type="submit" class="btn-add">Add to Cart</button>
            </div>
        </div>
    </div>
    
</body>
  
<script>
    async function postJSON(pid) {
     const data = { 
        product_id: pid
      }
      try {
    const response = await fetch("{{ url('api/addToCart') }}", {
      method: "POST", // or 'PUT'
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    });

    const result = await response.json();
    console.log("Success:", result);
  } catch (error) {

  }
}



</script>
