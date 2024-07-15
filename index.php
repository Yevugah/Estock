


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@24,400,0,0" />

    
</head>
<body>
    <div class="container">

         
        <aside>
            <div class="top">
                <div class="logo">
                    <h2>C<span class="danger">yrus</span></h2>
                </div>
                <div class= "close" id="close_btn">
                <span class="material-symbols-sharp">close</span>
                </div>
            </div>
           <!-- top end--> 
           <div class="sidebar">
            
            <a href="">
                <span class="material-symbols-sharp">grid_view</span>
                <h3>Dashboard</h3>
            </a>
            
            <a href="" class="active">
                <span class="material-symbols-sharp">person_outline</span>
                <h3>Customers</h3>
            </a>

            <a href="">
            <span class="material-symbols-sharp">insights</span>
            <h3>Analytics</h3>
            </a>

            <a href="">
            <span class="material-symbols-sharp ">mail_outline</span>
            <h3>Messages<span class="msg_count">54</span></h3>
            </a>
            
            <a href="">
            <span class="material-symbols-sharp">receipt_long</span>
            <h3>Products</h3>
            </a>
            <a href="">
            <span class="material-symbols-sharp">report_gmailerrorred</span>
            <h3>Reports</h3>
            </a>
            <a href="">
            <span class="material-symbols-sharp">settings</span>
            <h3>settings</h3>
            </a>
            <a href="">
            <span class="material-symbols-sharp">add</span>
            <h3>Add Product</h3>
            </a>
            <a href="">
            <span class="material-symbols-sharp">logout</span>
            <h3>logout</h3>
            </a>
           </div>
        </aside>

        <!-- Aside section end-->

        <!-- Main  section start-->
        <main>
            
            <h1>Dashboard</h1>
            <div class="date">
               <input type="date"> 
            </div>
            <div class="insights">
                <!-- start selling  -->
                <div class="sales">
                    <span class="material-symbols-sharp">trending_up</span>
                    <div class="middle">
                     <div class="left">
                        <h3>Total Sales</h3>
                        <h1>$25,023</h1>
                     </div> 
                     <div class="progress">
                        <svg>
                          <circle r="30" cy="40" cx="40"></circle>  
                        </svg>
                        <div class="number">80%</div>
                     </div>  

                    </div>
                    <small>Last 24 Hours</small>
                </div>


                <!-- end selling -->
                  <!-- start expenses -->

                <div class="expenses">
                    <span class="material-symbols-sharp">local_mall</span>
                    <div class="middle">
                     <div class="left">
                        <h3>Total Expenses</h3>
                        <h1>$10,423</h1>
                     </div> 
                     <div class="progress">
                        <svg>
                          <circle r="30" cy="40" cx="40"></circle>  
                        </svg>
                        <div class="number">80%</div>
                     </div>  

                    </div>
                    <small>Last 24 Hours</small>
                </div>
                <!-- end expenses -->

                <!-- start Income -->
                <div class="income">
                    <span class="material-symbols-sharp">stacked_line_chart</span>
                    <div class="middle">
                     <div class="left">
                        <h3>Total Income</h3>
                        <h1>$250,023</h1>
                     </div> 
                     <div class="progress">
                        <svg>
                          <circle r="30" cy="40" cx="40"></circle>  
                        </svg>
                        <div class="number">80%</div>
                     </div>  

                    </div>
                    <small>Last 24 Hours</small>
                </div>


                <!-- end Income -->

                  

            </div>
            <!-- end of inside -->
            <!-- start of recent orders -->
            <div class="recent_order">
                <h1>Recent Orders</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Number</th>
                            <th>Payments</th>
                            <th>Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mini USB</td>
                            <td>465</td>
                            <td>Due</td>
                            <td class="warning">paid</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Modem</td>
                            <td>534</td>
                            <td>Due</td>
                            <td class="warning">pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Laptop</td>
                            <td>785</td>
                            <td>Due</td>
                            <td class="warning">paid</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Iphone 13</td>
                            <td>789</td>
                            <td>Due</td>
                            <td class="warning">pending</td>
                            <td class="primary">Details</td>
                        </tr>
                    </tbody>
                   

                </table>
                <a href="">Show all</a>
            </div>


             <!-- end of recent orders -->
            
        </main>

        <!-- Main section end-->

        <!-- Right section start-->
        <div class="right">
            <div class="top">
                <button id="menu_bar">
                    <span class="material-symbols-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-sharp active">light_mode</span>
                    <span class="material-symbols-sharp">dark_mode</span>

                </div>

                <div class="profile">
                    <div class="info">
                        <p><b>yevugah</b></p>
                        <p>Admin</p>
                        <small class="text-muted"></small>
                    </div>
                    <div class="profile-photo">
                        <img src="img/profile1.jpg" alt="">
                    </div>
                </div>
                <!-- end top -->
                <!-- recent update start -->

                <div class="recent-update">
                    <h2>Recent Update</h2>
                    <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="img/profile.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Senyo</b> Recieved his order</p>

                        </div>
                    </div>

                    <div class="update">
                        <div class="profile-photo">
                            <img src="img/profile.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Kwame</b> Recieved his order</p>

                        </div>
                    </div>

                    <div class="update">
                        <div class="profile-photo">
                            <img src="img/profile.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Yaw</b> Recieved his order</p>

                        </div>
                        </div>
                    </div>
                </div>
                <!-- end recent update -->

                <!-- start sale analytics -->
                <div class="sale_analytics">

                    <div class="item online">
                        <div class="icon">
                            <span class="material-symbols-sharp">shopping_cart</span>
                        </div>
                        <div class="right_text">
                            <div class="info">
                                <h3>Online Orders</h3>
                                <small class="text-muted">Last seen 2 Hours</small>
                            </div>
                            <h5 class="danger">-17%</h5>
                            <h3>3548</h3>
                        </div>

                    </div>

                    <div class="item online">
                        <div class="icon">
                            <span class="material-symbols-sharp">shopping_cart</span>
                        </div>
                        <div class="right_text">
                            <div class="info">
                                <h3>Online Orders</h3>
                                <small class="text-muted">Last seen 2 Hours</small>
                            </div>
                            <h5 class="danger">-17%</h5>
                            <h3>3548</h3>
                        </div>

                    </div>

                    <div class="item online">
                        <div class="icon">
                            <span class="material-symbols-sharp">shopping_cart</span>
                        </div>
                        <div class="right_text">
                            <div class="info">
                                <h3>Online Orders</h3>
                                <small class="text-muted">Last seen 2 Hours</small>
                            </div>
                            <h5 class="danger">-17%</h5>
                            <h3>3548</h3>
                        </div>

                    </div>


                </div>
                <div class="item add_products">
                    <div><span class="material-symbols-sharp">add</span></div>
                </div>
                <!-- end sale analytics -->




            </div>
            
        <!-- right section end-->


    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="script.js"></script>

    
</body>
</html>