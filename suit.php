<html>
    <head>
        <title>SUIT DEK BY REVZ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Oswald&display=swap');
            body {
                padding-top: 10%;
                background-color: #ececec;
                font-family: 'Oswald', sans-serif;
            }
            h1 , p , form {
                text-align: center;
            }

            input{
                width: 50%;
                height: 5%;            
            }

            .button {
  background-color: #0000FF; /* Biru */
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 12px;}
.button5 {border-radius: 50%;}
}
.satu { border: 10px solid red; }
.dua { border: 10px dotted red; }
.empat { border: 10px double red; }
        </style>
    <head>
    <body>
    <body>
<div class="button1">
<a href="/gim.php">
<h1><button class="button button1" >MENU UTAMA</button></h1></a>
</div>
<!---------------------------------- LOGIC KOMPUTER ------------------------------------>
<?php 
        $com = rand();
            if ($com > 100000000 && $com < 800000000 ){
               $com = 'GUNTING';
            }elseif ($com > 800000000 && $com < 1250000000){
                $com = 'BATU';
            }else {
                $com = 'KERTAS';
            }
        
        ?>

    <!--------------------- INPUTAN PEMAIAN ------------------------------->
    <div class="empat">
        <form action="" method="POST">
            <h1>GAMES SUIT</h1> <p>MASUKAN : GUNTING / BATU / KERTAS ( Note : Jangan Ada Spasi )</p>
            <input onkeyup="this.value = this.value.toUpperCase()" type="text" name="nama" placeholder="Pilih Apa?. . . "  required autofocus>
            <button type="submit" name="sumbit"> SUIT BOSSS ! </button>
        </form>
    <br>

    <!--------------------------------- LOGIC GAMES --------------------------------------->

    <?php if ( isset($_POST["sumbit"]) ) : ?>
        <h1><?php 
        $hasil = '';
        if ( $_POST["nama"] == $com){
            $hasil = 'HASILNYA SERI !';
        }elseif ( $_POST["nama"] == 'GUNTING'){
            if ( $com == 'KERTAS'){
                $hasil ='KAMU MENANG !';
            }else{
                $hasil ='KAMU KALAH !';
            }
        }elseif ( $_POST["nama"] == 'BATU'){
            if ( $com == 'GUNTING'){
                $hasil ='KAMU MENANG !';
            }else{
                $hasil ='KAMU KALAH !';
            }
        }elseif ( $_POST["nama"] == 'KERTAS'){
            if ( $com == 'BATU'){
                $hasil ='KAMU MENANG !';
            }else{
                $hasil ='KAMU KALAH !';
            }
        }else {
            $hasil = 'MAIN YANG BENER XONTOL, GAADA DIPILIHAN TUH';
        }
        ?>
        <p>kamu memlih : <b style="text-decoration: underline" ><?= $_POST["nama"] ?></b> dan komputer memilih : <b style="text-decoration: underline" ><?= $com ?></b> <br><?= $hasil ?></p>
    </h1>
    </div>
    <?php  endif; ?>
    </body>


</html> 