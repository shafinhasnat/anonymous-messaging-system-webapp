<!doctype html>
<html>
    <head>
        <style>
            .formClass{text-align: center;font-size: 25px; color:#ffffff;width: 900px; height: 300px; margin: 0 auto; background: #16a085; padding: 20px 0px 20px 0px;}
            
            html{background-color: #ededed;}
            
            textarea{width:886px; height: 100px; margin: 20px auto 0px auto; resize:none; border: 5px solid #7c7c7c}
            
            input{font-size: 20px; color:#ffffff; width:250px;height:50px; margin:auto auto; margin-top:-5px;text-align: center; background-color: #e67e22;border: 1px solid #e67e22;transition: .2s;}
            input:hover{background-color: #cc6912;border: 1px solid #cc6912}
            
            .credit{text-align: left; padding: 50px 0px 0px 20px; font-size:14px;}
            
            .credit a{text-decoration: none; color: #e5dfd9;transition: .2s;}
            .credit a:hover{color: #ffffff}
            
            @media only screen and (max-width: 1000px) {
            .formClass{font-size: 25px; color:#ffffff;width: 100%; height: 250px; margin: 0 auto; background: #16a085; padding: 20px 0px 0px 0px;}
                
            textarea{width:90%; height: 100px; margin: 20px auto 0px auto; resize:none; border: 5px solid #7c7c7c}
            
            input{font-size: 20px; color:#ffffff; width:200px; height:50px; margin: auto auto; margin-top:-5px;text-align: center; background-color: #e67e22;border: 1px solid #e67e22;transition: .2s;}
                
            .credit{font-size: 10px; text-align: left; padding: 10px 0px 0px 20px;}
            }
            
        </style>
        <title>myApp</title>
    </head>
    <body class='bodyClass'>
        <section class='formClass'>
            কয়াফালান
            <form action='BanglaStulish.php' method='post' >
                <textarea type='text' name='textform' placeholder='যা বলার এখানে বলেন'></textarea><br>
                <input class='subBtn' type='submit' name='submit'>
            </form>
            <div class='credit'>
            All right reserved: <a href='#'>Shafin Hasnat</a>
            </div>
        </section>
        
    </body>
    
</html>