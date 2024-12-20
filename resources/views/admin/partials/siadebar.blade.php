<div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                        <div class="dash__pad-1">

                                            <ul class="dash__f-list">
                                                <li>
                                                <a href="{{ route('admin.dashboard') }}">
                                                    <div class="admin_list">
                                                        <div class="admin_list_div" >
                                                              <img class="dash_img"  src="{{ asset('assets') }}/images/products/671fb4e759685_dashboard.png" alt="">
                                                              <p>Dashboard</p>
                                                        </div>
                                                        <img style="width:12px" src="/public/images/angle-right.png" alt="">
                                                    </div>
                                                </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.products.index') }}">
                                                        <div class="admin_list">
                                                            <div class="admin_list_div">
                                                                <img class="dash_img" src="{{ asset('assets') }}/images/icons8-opened-folder-50.png" alt="">
                                                                <p>Products</p>
                                                            </div>
                                                            <img style="width:12px" src="/public/images/angle-right.png" alt="">
                                                        </div>
                                                    </a>
                                                </li>

                                                                                            
                                                 <li>
                                                <a href="{{ route('admin.categories.index') }}">
                                                    <div class="admin_list">
                                                        <div class="admin_list_div">
                                                            <img class="dash_img"  src="{{ asset('assets') }}/images/icons8-opened-folder-50.png" alt="">
                                                            <p>Categories</p>
                                                        </div>
                                                        <img style="width:12px" src="/public/images/angle-right.png" alt="">
                                                    </div>
                                                </a>
                                            </li>
                                                
                                            
                                                        <li>
                                                        <a href="{{ route('admin.admin.index') }}">
                                                            <div class="admin_list">
                                                                <div class="admin_list_div" >
                                                                      <img class="dash_img"  src="{{ asset('assets') }}/images/administrator.png" alt="">
                                                                      <p>Admins</p>
                                                                </div>
                                                                <img style="width:12px" src="/public/images/angle-right.png" alt="">
                                                            </div>
                                                        </a>
                                                        </li>
                                                
                                                
                                                <li>
                                                <a href={{ route('admin.order.index') }}>
                                                    <div class="admin_list">
                                                        <div class="admin_list_div" >
                                                              <img class="dash_img"  src="{{ asset('assets') }}/images/box_2.png" alt="">
                                                              <p>Orders</p>
                                                        </div>
                                                        <img style="width:12px" src="/public/images/angle-right.png" alt="">
                                                    </div>
                                                </a>
                                                </li>
                                                <li>
                                                <a href="{{route('admin.user.index')}}">
                                                    <div class="admin_list">
                                                        <div class="admin_list_div" >
                                                              <img class="dash_img"  src="{{ asset('assets') }}/images/products/671fb3380fb81_user.png" alt="">
                                                              <p>Customers</p>
                                                        </div>
                                                        <img style="width:12px" src="/public/images/angle-right.png" alt="">
                                                    </div>
                                                </a>
                                                </li>
                                                <li>
                                                <a href="{{route('admin.message.index')}}">
                                                    <div class="admin_list">
                                                        <div class="admin_list_div" >
                                                              <img class="dash_img"  src="{{ asset('assets') }}/images/email.png" alt="">
                                                              <p>Messages</p>
                                                        </div>
                                                        <img style="width:12px" src="/public/images/angle-right.png" alt="">
                                                    </div>
                                                </a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <a class="dash__custom-link btn--e-brand-b-2" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="background-color: #7737de; color: white; border: 2px solid #7737de; font-size: 15px; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#6b2fcc'; this.style.borderColor='#6b2fcc';" onmouseout="this.style.backgroundColor='#7737de'; this.style.borderColor='#7737de';" >Logout</a>
                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"  style="font-size: 15px;" ">
                                        @csrf
                                    </form>
                                   