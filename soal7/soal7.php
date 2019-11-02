
<!DOCTYPE html>
<html lang="en">
<?php include ("koneksi.php"); ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <body>
            <header class="header">
                <nav class="main-nav">
                  <ul>
                    <li><a href="lihat_user.php">Daftar User</a></li>
                    <li><a href="tambah.php">Tambah User</a></li>
                  </ul>
                </nav>
              </header>
            <div id="wrapping">
            <?php 
  $data = mysqli_query($konek,"select * from berita limit 3");
  while($r = mysqli_fetch_array($data)){
   $id_berita= $r['id_berita'];
   $title = $r['title'];
   $deskripsi = $r['deskripsi'];
   $tanggal= $r['tanggal'];
   $user=$r['user_id'];
        ?>
                    <h4>Berita Hari ini</h4>
                <div id="content">
                      <div class="box">
                      <h4> My Profile</h4>
                      <img src="img/florist.jpg" alt="profile" >
                    <p></p>
                    </div>
                    <div class="box">
                    <h4 id="personalCaption"><?php echo $title ?></h4>
                   <p> by :  <?php  $cariuser = mysqli_query($konek,"select * from tb_user where id_user='$user'");
                    while($datauser = mysqli_fetch_array($cariuser)){
                        echo $datauser['nama'];
                    }?> </p>
                      <p>  <?php echo $deskripsi ?>
                      </p>
                     
                    </div>
                    <div class="box">
                    <h4 id="personalCaption">Daftar berita</h4>
                        <ul id="listInformation">
                            <li><?php echo $title ; ?></li>
                            <li><?php echo $title ; ?></li>
                            <li><?php echo $title ; ?></li>
                            <li><?php echo $title ; ?></li>
                            <li><?php echo $title ; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
                <h3>Find me in </h3>
                 <ul>
                     <li><img src="img/github.png" alt="gith"></li>
                     <li><img src="img/linkedin.png" alt="linkedin"></li>
                     <li><img src="img/twitter.png" alt="twitter"></li>
                </ul>
                </ul>
        </div>
        <script src="script.js"></script>
        </body>
        <?php } ?>
    </head>
</html>