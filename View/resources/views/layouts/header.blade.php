
<section class="main_content dashboard_part">

    <div class="container-fluid g-0">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="search_field-area">
                        <div class="search_inner">
                            <form action="#">
                                <div class="search_field">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <input type="text" class="form-control" placeholder="Search here...">
                                </div>                            
                            </form>
                        </div>
                    </div>
    
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_wrap d-flex align-items-center">
                            <li style="margin-left: 25px;">
                                <a href="#">
                                    <img src="assets/images/bell.png" alt="Notification">
                                </a>
                            </li>
                            <li style="margin-left: 25px;">
                                <a href="#">
                                    <img src="assets/images/message.png" alt="Messages">
                                </a>
                            </li>
                        </div>
                        <div class="profile_info" style="margin-left: 25px;">
                            <img src="assets/images/client.png" alt="Profile">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="single_element">
                        <div class="quick_activity">
                            <div class="row">
                                <div class="col-12">
                                    <div class="quick_activity_wrap">
                                        <div class="single_quick_activity">
                                            <h4>Total Income</h4>
                                            <h3>$ <span class="counter">579,000</span> </h3>
                                            <p>Saved 25%</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4>Total Expences</h4>
                                            <h3>$ <span class="counter">79,000</span> </h3>
                                            <p>Saved 25%</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4>Cash on Hand</h4>
                                            <h3>$ <span class="counter">92,000</span> </h3>
                                            <p>Saved 25%</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4>Net Profit Margin</h4>
                                            <h3>$ <span class="counter">179,000</span> </h3>
                                            <p>Saved 65%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Biểu Đồ --}}
                <div class="col-lg-12 col-xl-6">
                    <div class="chart-header">
                        <div class="left-content">
                            <h2>AP and AR Balance</h2>
                            <p>Avg. $5,309</p>
                        </div>
                        <div class="right-content">
                            <label for="time-period"></label>
                            <select id="time-period">
                                <option value="monthly">Monthly</option>
                                <option value="last-year">monthly</option>
                            </select>
                            <label for="chart-type"></label>
                            <select id="chart-type">
                                <option value="bar-chart">Last Year</option>
                                <option value="line-chart">Last Year</option>
                            </select>
                        </div>
                    </div>
                
                    <div class="chart">
                        <canvas id="myChart" style="height: 200px; width: 350px"></canvas>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-6 col-xl-3">
                    <div class="chart">
                        <canvas id="pieChart1" height="100" width="100"></canvas>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


