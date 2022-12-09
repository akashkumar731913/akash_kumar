<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ID_CARD</title>

    {{-- bootstrap link --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body{
            /* font-family: none; */
            margin: 10px 50px 10px 50px;
            
        }
        
        .card{
            position: relative;
            width: 177px;
            height: 285px;
            border: 1px solid rgba(128, 128, 128, 0.692);
            padding: 3px 2px 2px 2px;
            box-shadow: 1px 1px 5px #88888894;
        }
        .company-name{
            font-size: 14px;
            font-weight: bold;
            color: #f10d24;
        }
        .cin-number{
            color: #054181;
            font-size: 11px;
        }
        .address{
            padding-bottom:0px;  
            margin-bottom:0px;
            font-size: 9px;
        }
        .website{
            padding-bottom: 3px;
            font-size: 10px;
            border-bottom: 3px solid #f10d24; 
            border-radius: 3px; 
            margin: 0px 0px 0px 0px;
        }
        h4{
            font-size: 10px;
            margin-bottom: 0px;
        }
        p{
            margin-top: 0px;
            font-size: 9px;
            margin-bottom: 0px;
        }
        h6{
            /* border-bottom: 2px solid transparent;
            border-image: linear-gradient(0.25turn, rgba(0, 0, 0, 0.705), rgba(56,2,155,0));
            border-image-slice: 1;
            width:50%; */
        } 
        .image{
            position: absolute;
            bottom: 75px;
            right: 15px;
        }
        .qr-code-image{
            position: absolute;
            bottom: 16px;
            right: 12px;
        }
        .text-box{
            padding: 7px 7px 10px 7px;
            border-radius: 6%; 
            border-bottom: 4px solid rgba(231, 38, 38, 0.89);
        }

    </style>
    
</head>
<body>

    {{-- <div>

        <div class="card">
            <div style="text-align:center;">            
                <img src="https://www.micromuneem.com/demo/fav.png" width="55px;" alt="">
                <p class="company-name">Microfinance Foundation</p>
                <p class="cin-number"><strong>CIN :</strong> 09124</p>
                <p class="address"> Azad Nagar, Gali No. 6 Khandari, (Agra)</p>
                <p class="website">www.urbanawaaz.com</p>
            </div>                        
            <div class="text-box">
                <h4><strong>Name</strong></h4>
                <p>Karan Garg</p>
                <h4><strong>Mobile</strong></h4>
                <p>9922447711</p>
                <h4><strong>Designation</strong></h4>
                <p>Legal Advisor</p>
                <h4><strong>Employee Code</strong></h4>
                <p>UA/154</p>
                <h4><strong>E-mail</strong></h4>
                <p>karan123@gmail.com</p>
            </div>
            <div class="image">
                <img style="border: 1px solid rgba(231, 38, 38, 0.89);" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3pLJZ5QJ0YaUhRyEpZ8eyEMDlHgKwrwhncw&usqp=CAU" height="72px" width="58px;" alt="">
            </div>
            <div class="qr-code-image">
                <img class="qrcode" src="https://img.freepik.com/premium-vector/qr-code-sample-smartphone-scanning-qr-code-icon-flat-design-stock-vector-illustration_550395-108.jpg" height="58px" width="65px;" alt="">
            </div>
        </div>

    </div> --}}




    <table>
        <tbody>

            @for($i = 0; $i < 3; $i++)

            <tr>
                <td>
                    <div style="margin:10px 10px 10px 10px">

                        <div class="card">
                            <div style="text-align:center;">            
                                <img src="https://www.micromuneem.com/demo/fav.png" width="55px;" alt="">
                                <p class="company-name">Microfinance Foundation</p>
                                <p class="cin-number"><strong>CIN :</strong> 09124</p>
                                <p class="address"> Azad Nagar, Gali No. 6 Khandari, (Agra)</p>
                                <p class="website">www.urbanawaaz.com</p>
                            </div>                        
                            <div class="text-box">
                                <h4><strong>Name</strong></h4>
                                <p>Karan Garg</p>
                                <h4><strong>Mobile</strong></h4>
                                <p>9922447711</p>
                                <h4><strong>Designation</strong></h4>
                                <p>Legal Advisor</p>
                                <h4><strong>Employee Code</strong></h4>
                                <p>UA/154</p>
                                <h4><strong>E-mail</strong></h4>
                                <p>karan123@gmail.com</p>
                            </div>
                            <div class="image">
                                <img style="border: 1px solid rgba(231, 38, 38, 0.89);" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3pLJZ5QJ0YaUhRyEpZ8eyEMDlHgKwrwhncw&usqp=CAU" height="72px" width="58px;" alt="">
                            </div>
                            <div class="qr-code-image">
                                <img class="qrcode" src="https://img.freepik.com/premium-vector/qr-code-sample-smartphone-scanning-qr-code-icon-flat-design-stock-vector-illustration_550395-108.jpg" height="58px" width="65px;" alt="">
                            </div>
                        </div>
                    </div>
                </td>  
                <td>
                    <div style="margin:10px 10px 10px 10px">

                        <div class="card">
                            <div style="text-align:center;">            
                                <img src="https://www.micromuneem.com/demo/fav.png" width="55px;" alt="">
                                <p class="company-name">Microfinance Foundation</p>
                                <p class="cin-number"><strong>CIN :</strong> 09124</p>
                                <p class="address"> Azad Nagar, Gali No. 6 Khandari, (Agra)</p>
                                <p class="website">www.urbanawaaz.com</p>
                            </div>                        
                            <div class="text-box">
                                <h4><strong>Name</strong></h4>
                                <p>Karan Garg</p>
                                <h4><strong>Mobile</strong></h4>
                                <p>9922447711</p>
                                <h4><strong>Designation</strong></h4>
                                <p>Legal Advisor</p>
                                <h4><strong>Employee Code</strong></h4>
                                <p>UA/154</p>
                                <h4><strong>E-mail</strong></h4>
                                <p>karan123@gmail.com</p>
                            </div>
                            <div class="image">
                                <img style="border: 1px solid rgba(231, 38, 38, 0.89);" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3pLJZ5QJ0YaUhRyEpZ8eyEMDlHgKwrwhncw&usqp=CAU" height="72px" width="58px;" alt="">
                            </div>
                            <div class="qr-code-image">
                                <img class="qrcode" src="https://img.freepik.com/premium-vector/qr-code-sample-smartphone-scanning-qr-code-icon-flat-design-stock-vector-illustration_550395-108.jpg" height="58px" width="65px;" alt="">
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div style="margin:10px 10px 10px 10px">

                        <div class="card">
                            <div style="text-align:center;">            
                                <img src="https://www.micromuneem.com/demo/fav.png" width="55px;" alt="">
                                <p class="company-name">Microfinance Foundation</p>
                                <p class="cin-number"><strong>CIN :</strong> 09124</p>
                                <p class="address"> Azad Nagar, Gali No. 6 Khandari, (Agra)</p>
                                <p class="website">www.urbanawaaz.com</p>
                            </div>                        
                            <div class="text-box">
                                <h4><strong>Name</strong></h4>
                                <p>Karan Garg</p>
                                <h4><strong>Mobile</strong></h4>
                                <p>9922447711</p>
                                <h4><strong>Designation</strong></h4>
                                <p>Legal Advisor</p>
                                <h4><strong>Employee Code</strong></h4>
                                <p>UA/154</p>
                                <h4><strong>E-mail</strong></h4>
                                <p>karan123@gmail.com</p>
                            </div>
                            <div class="image">
                                <img style="border: 1px solid rgba(231, 38, 38, 0.89);" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3pLJZ5QJ0YaUhRyEpZ8eyEMDlHgKwrwhncw&usqp=CAU" height="72px" width="58px;" alt="">
                            </div>
                            <div class="qr-code-image">
                                <img class="qrcode" src="https://img.freepik.com/premium-vector/qr-code-sample-smartphone-scanning-qr-code-icon-flat-design-stock-vector-illustration_550395-108.jpg" height="58px" width="65px;" alt="">
                            </div>
                        </div>
                    </div>
                </td>            
            
            </tr>
            @endfor
            
        </tbody>
    </table>
    
</body>
</html>