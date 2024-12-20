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
                                <div class="dash__pad-2">
                                    <h1 class="dash__h1 u-s-m-b-14">Orders</h1>
                                    <div class="dash__table">
                                        <table class="dash__table">
                                            <thead>
                                                <tr>
                                                    <th>Order Id</th>
                                                    
                                                    <th>Customer Phone</th>
                                                    <th>Shipping Address</th>
                                                    <th>Order Status</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <td>{{ $order->id }}</td>
                                                      
                                                        <td>{{ $order->customer_phone }}</td> <!-- عرض رقم الهاتف -->
                                                        <td>{{ $order->shipping_address }}</td> <!-- عرض عنوان الشحن -->
                                                        <td>{{ $order->order_status }}</td> <!-- عرض حالة الطلب -->
                                                        <td>{{ $order->total }}</td> <!-- عرض المبلغ الإجمالي -->
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

