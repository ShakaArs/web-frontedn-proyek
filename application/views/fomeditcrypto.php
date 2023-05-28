<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS SWIPPE-->
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
        <!--FONT AWESOME-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!--CSS-->
        <link rel="stylesheet" href="https://localhost/web-data_mhs/css/style1.css">
        <link href="<?php echo base_url()."css/style1.css"?>"  rel="stylesheet" >
            <title>Update Data Penemu Crypto </title>
    </head>
        <body>
            <!--header section dimulai-->
            <header class="header">
                <a href="#" class="logo"><i class="fas fa-bitcoin"></i>Cryptocurrency </a>
                <nav class="navbar">
                    <div id="nav-close" class="fas fa--times"></div>
                    <a href="index.php">Home</a>
                    <a href="tentang.php">About</a>
                    <a href="index.php">News</a>
                    <a href="index.php">BTC</a>
                </nav>

                <div class="icons">
                    <div id="menu-btn" class="fas fa-coin"></div>
            
                </div>
            </header>
            <?php
            foreach($data as $dat){
            ?>
            <br><br><br><br><br>
            <h1 class="heading">Update Data Penemu Crypto </h1>
            <center>
            <table>
                    <form action="<?php echo base_url()."index.php/hal_admin/update_data";?>" method="POST">
                         <div class="dataticket">
                            <tr> <td>No  </td><td><input type="text" name="no" readonly value="<?php echo $dat['no'];?>"></td></tr>
                        </div>
                        <div class="dataticket">
                            <tr> <td>Mata Uang  </td><td><input type="text" placeholder="Mata Uang" name="mata_uang" value="<?php echo $dat['mata_uang'];?>"></td></tr>
                        </div>
                        <div class="dataticket">
                            <tr> <td>Nama  </td><td><input type="text" placeholder="Nama" name="nama" value="<?php echo $dat['nama'];?>"></td></tr>
                        </div>
                        <div class="dataticket">
                            <tr> <td>Negara  </td><td><input type="text" placeholder="Negara" name="negara" value="<?php echo $dat['negara'];?>"></td></tr>
                        </div>
                        <div class="dataticket">
                            <tr> <td>Tahun  </td><td><input type="text" placeholder="Tahun" name="tahun" value="<?php echo $dat['tahun'];?>"></td></tr>
                        </div>
                        
                                <tr><td><input type="submit"></input></td>
                                <td><input type="reset"></td></input></tr>
                            </form>
                        </table>
            </center>
            <?php }?>
        </body>
</html>