<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ID_CARD_2</title>

    {{-- bootstrap link --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>    
        *{
            box-sizing: border-box;
        } 
        body{
            margin: 10px 50px 10px 50px;
        }
        
        .card{
            width: 288px;
            height: 186px;
            border: 1px solid rgba(128, 128, 128, 0.692);
            padding: 1px;
            box-shadow: 1px 1px 5px #88888894;
        }
        .box1{
            width:37%;
            color: #ffff1a;
            text-align: center;
            border-right: 1px solid #88888894;
        }
        .box1-bottom{
            margin-top: 20px;
            width: 100%;
            height: 78px;
            background: #054488;
            padding: 2px 0px 1px 2px;
            color: #ffff1a;
        }
        .box1-bottom img{
            margin-top: 1px;
        }
        h4{
            font-size: 12px;
            margin-bottom: 0px;
        }
        p{
            margin-top: 0px;
            font-size: 9px;
            margin-bottom: -3px;
        }
        .image{
            margin: 3px 8px 0px 8px;
            text-align: center;
        }
        .image img{
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }
        
        .box2{
            width: 63%;
            position: relative;
            margin: 0px 1px 0px 1px;
        }
        .containt{
            text-align:center; 
            margin: 0px 10px 60px 10px;
        }
        .containt img{
            margin-top: -28px;
        }
        .containt h4{
            color: #054488;
            margin: -4px 0px 1px 0px;
        }
        .box2-bottom{
            width: 100%;
            height: 78px;
            background: #b4091a;
            color: #ffff1a;
            padding: 2px 0px 0px 0px;
            text-align: center;
            position: absolute;
            bottom: 1px;
            margin: 0px 0px 0.5px 1px ;

        }

    </style>
    
</head>
<body>
    <div>
        <div class="card">

            <table>
                <tbody>
                    <tr>
                        <td class="box1">
                            <div class="image">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3pLJZ5QJ0YaUhRyEpZ8eyEMDlHgKwrwhncw&usqp=CAU" height="114px" width="113px;" alt="">
                            </div>
                            <div class="box1-bottom">
                                <img class="qrcode" src="https://img.freepik.com/premium-vector/qr-code-sample-smartphone-scanning-qr-code-icon-flat-design-stock-vector-illustration_550395-108.jpg" height="70px" width="75px;" alt="">
                            </div>
                        </td>

                        <td class="box2">
                            <div class="containt"> 
                                <img src="https://www.micromuneem.com/demo/fav.png" width="46px;" alt="">
                                <h4 style="font-size:12px;"><strong>Microfinance Foundation</strong></h4>
                                <p class="cin-number"><strong>CIN :</strong> 09124</p>
                                <p class="address"> Azad Nagar, Gali No. 6 Khandari, (Agra)</p>
                                <p class="website">www.urbanawaaz.com</p>
                            </div>
                            <div class="box2-bottom">
                                <h4><strong>Name : </strong><small>Karan Garg</small></h4>
                                <h4><strong>Mob : </strong><small>7302921619</small></h4>
                                <h4><strong>Des : </strong><small>Legal Advisor</small></h4>
                                <h4><strong>Emp : </strong><small>UA/154</small></h4>
                                <p style="margin-top: 2px;">karan123@gmail.com</p>
                            </div>  
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    
</body>
</html>