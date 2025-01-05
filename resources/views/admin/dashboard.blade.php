@include("admin.partials.header-admin")

<!--====== App Content ======-->
<div class="app-content">
    
    <!--====== Section 1 ======-->

    <!--====== End - Section 1 ======-->


    <!--====== Section 2 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="dash">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">

                            <!--====== Dashboard Features ======-->
                            
                            @include('admin.partials.siadebar')
                           
                            
                            <!--====== End - Dashboard Features ======-->
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                <div class="dash__pad-2">
                                    <h1 class="dash__h1 u-s-m-b-10">Dashboard</h1>


                                    <span class="dash__text u-s-m-b-30">From your My Account Dashboard you have the
                                        ability to view a snapshot of your recent account activity and update your
                                        account information. Select a link below to view or edit information.</span>
                                    <div class="row">
                                        <div class="col-lg-4 u-s-m-b-30" style="text-align:center;">
                                            <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                <div class="dash__pad-3">
                                                    <h2 class="dash__h1 u-s-m-b-8"
                                                        style="text-align:center;font-size:30px">Total Orders and sales</h2>
                                                    <div class="dash__link dash__link--secondary u-s-m-b-8">

                                                        <a href="dash-edit-profile.html"></a>
                                                    </div>

                                                    <h1 class="dash__h1 u-s-m-b-10"
                                                        style='font-size:40px;padding-top:24px'>{{ $ordersCount }} </h1>
                                                    <br>
                                                    <span class="dash__text">From
                                                        <?php echo date('Y-m-d', strtotime('-30 days')); ?></span>
                                                    <div class="dash__link dash__link--secondary u-s-m-t-8">

                                                        <!-- <a data-modal="modal" data-modal-id="#dash-newsletter">Subscribe Newsletter</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 u-s-m-b-30" style="text-align:center;">
                                            <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                <div class="dash__pad-3">
                                                    <h2 class="dash__h1 u-s-m-b-8"
                                                        style="text-align:center;font-size:28px">Total Customers</h2>
                                                    <div class="dash__link dash__link--secondary u-s-m-b-8">
                                                    </div>
                                                    <h1 class="dash__h1 u-s-m-b-10"
                                                        style='font-size:40px;padding-top:24px'>{{ $usersCount }} </h1>
                                                    <span class="dash__text"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 u-s-m-b-30" style="text-align:center;">
                                            <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                <div class="dash__pad-3">
                                                    <h2 class="dash__h1 u-s-m-b-8"
                                                        style="text-align:center;font-size:28px">Total Messages</h2>
                                                    <div class="dash__link dash__link--secondary u-s-m-b-8">
                                                    </div>
                                                    <h1 class="dash__h1 u-s-m-b-10"
                                                        style='font-size:40px;padding-top:24px'>{{ $messagesCount }} </h1>
                                                    <span class="dash__text"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <div class="dash__box dash__box--shadow dash__box--bg-white dash__box--radius">
                                        <h2 class="dash__h2 u-s-p-xy-20">RECENT ORDERS</h2>
                                        <div class="dash__table-wrap gl-scroll">
                                            <table class="dash__table">
                                                <thead>
                                                    <tr>
                                                        <th>Order #</th>
                                                        <th>Customer Name</th>
                                                        <th>shipping address</th>
                                                        <th>Placed On</th>
                                                        <th>Total</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                 <tbody>
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <td>{{ $order->id }}</td>
                                                        <td>{{  $order->customer_first_name }}</td>
                                                        <td>{{ $order->shipping_address }}</td> <!-- عرض رقم الهاتف -->
                                                        <td>{{ $order->created_at }}</td>
                                                        <td>{{ $order->total_amount }}</td> <!-- عرض المبلغ الإجمالي -->
                                                        <td>{{ $order->status }}</td> <!-- عرض حالة الطلب -->
                                                        
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                               
                                
                                       
                            

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 2 ======-->
</div>
<!--====== End - App Content ======-->


<!--====== Main Footer ======-->
@include("admin.partials.footer")
<!--====== Modal Section ======-->