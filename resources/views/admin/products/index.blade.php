@include("admin.partials.header-admin")

<div class="app-content">
    <div class="u-s-p-b-60">
        <div class="section__content">
            <div class="dash">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            @include('admin.partials.siadebar')
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                <div class="dash__pad-2" style="display: flex;justify-content: space-between;">
                                <div class="dash__address-header">
                                    <h1 class="dash__h1 u-s-m-b-14">Products</h1>
                                </div>
                                    <a class="dash__custom-link btn--e-brand-b-2" style="background-color: #7737de; color: white; border: 2px solid #7737de;  transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#6b2fcc'; this.style.borderColor='#6b2fcc';" onmouseout="this.style.backgroundColor='#7737de'; this.style.borderColor='#7737de';" href="{{ route('admin.products.create') }}">
                                        <i class="fas fa-plus u-s-m-r-8"></i>Add New Product
                                    </a>
                                </div>


                                    <div class="dash__table">
                                        <table class="dash__table">
                                            <thead>
                                                <tr>
                                                    <th>Image</th> <!-- عمود جديد للصورة -->
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Category</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($products as $product)
                                                    <tr>
                                                        <!-- عرض الصورة -->
                                                        <td>
                                                            @if ($product->image)
                                                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 50px; height: 50px; object-fit: cover;">
                                                            @else
                                                                <span>No Image</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $product->name }}</td>
                                                        <td>{{ $product->description }}</td>
                                                        <td>{{ $product->price }}</td>
                                                        <td>{{ $product->quantity }}</td>
                                                        <td>{{ $product->category->name }}</td>
                                                        <td>
                                                            <a class="address-book-edit btn--e-transparent-platinum-b-2" style="margin-right:4px;" href="{{ route('admin.products.edit', $product->id) }}">   Edit  </a>
                                                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="address-book-edit btn--e-transparent-platinum-b-2" type="submit" >Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include("admin.partials.footer")
