<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About</title>

        @include('layouts/links')

    </head>
    <body>
        @include('layouts/navigation_home')

        <!--<div class="container">
            <div class="vertical-center" style="margin: 0;position: absolute;top: 50%;left: 50%; -ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);">
                <p>About</p>
            </div>
        </div>-->

        <br><br><br><br>
        <div class="container">
            <div class="card">
                <div class="card-body" style="box-shadow: 5px 7px 8px 0px rgb(115 115 115 / 31%), 0 1px 4px rgb(0 0 0 / 8%);">
                    <h1> Who we are </h1>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="img/about_us.jpg" alt="" class="img-fluid mx-auto d-block" style="width:100%;">
                        </div>
                        <div class="col-md-6">
                            <p><b>East Consultant Co., Ltd.</b> is a Japanese leading company in connecting people and jobs. Every day, we aim to make every workplace happier and more productive by transforming the candidates who find the right fit. <br><br>
                            For the past 31 years, East Consultant Co., Ltd. has worked to transform the recruiting industry. Today, the company leverages advanced technology using intelligent digital, social and mobile solutions, including our website <a href="http://www.azuma-consul.co.jp/">www.azuma-consul.co.jp</a> and a vast variety of products and services.<br><br>
                            If you’re searching for a job we can help you find great career opportunities from the top leading companies.<br><br>
                            If your company needs to hire people, we can also help you in finding the right candidates with higher qualifications who will fit best for your company.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="">
                        <div class="card" style="box-shadow: 5px 7px 8px 0px rgb(115 115 115 / 31%), 0 1px 4px rgb(0 0 0 / 8%);">
                            <div class="card-body">
                                <h4> Company Profile </h4><br>
                                <div class="">
                                <table class="company_table table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>&nbsp;Company name</th>
                                            <td>East Consultant Co., Ltd.</td>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;Headquarters/location</th>
                                            <td>890-10 Hagiwara, Gotemba City, Shizuoka 412-0042<br>[TEL] 0550-88-1447 [FAX] 0550-88-1450</td>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;Date of establishment</th>
                                            <td>April 1, 1990</td>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;Capital</th>
                                            <td>20 million yen</td>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;Representative</th>
                                            <td>Masami Kawaguchi</td>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;Business content</th>
                                            <td>
                                                <ul>
                                                    <li>Worker dispatching business</li>
                                                    <li>paid employment agency business</li>
                                                    <li>business contracting business</li>
                                                    <li>Specified Skilled Foreigner Support Project</li>
                                                    <li>Employment Agency Business for Specified Skilled Foreigners</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;Main Customers</th>
                                            <td>
                                                <ul>
                                                    <li>Automobile parts (electric wire/wire harness) manufacturing factory</li>
                                                    <li>Shelf / refrigerating / freezing shelf manufacturing factory</li>
                                                    <li>Electronic equipment (Aluminum board) parts manufacturing factory</li>
                                                    <li>Ready-mixed concrete board manufacturing factory</li>
                                                    <li>Cold machine parts manufacturing industry</li>
                                                    <li>Freezing and refrigerated food factory</li>
                                                    <li>Warehouse / transportation company</li>
                                                    <li>Industrial equipment manufacturing (assembly) factory</li>
                                                    <li>Ceramic product manufacturing factory</li>
                                                    <li>Stores in Premium Outlets</li>
                                                    <li>Plastic recycling factory</li>
                                                    <li>Welding factory</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;Bank</th>
                                            <td>Shizuoka Bank, Suruga Bank, Shizuoka Chuo Bank</td>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;Acquired worker dispatch business</th>
                                            <td>Faction 22-300128 Date of permission August 1, 2005</td>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;Acquired paid employment agency business</th>
                                            <td>22-Yu-300307 Date of permission January 1, 2010</td>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;Registration support agency</th>
                                            <td>20 Noboru-004434 Date of permission May 29, 2nd year of Reiwa</td>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;Website URL</th>
                                            <td><a href="http://www.azuma-consul.co.jp/">www.azuma-consul.co.jp</a></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div><br> 
                </div>
                <div class="col-md-4">
                    <img src="img/about_us_2.jpg" alt="" class="about_img_2" style="width:100%;">
                </div>
            </div>
        </div><br>
                          
        @include('layouts/scripts')
    </body>
</html>


