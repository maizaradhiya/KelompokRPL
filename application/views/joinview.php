<!DOCTYPE html>
<html>
<head>
   <title>Data Donatur</title>
   <style type="text/css">        
       thead td {
         padding:5px;
         background-color: #4cb1d8;
         text-align: center;
      }
</style>
</head>

<h2>Data Donatur</h2>
<body>
   <table class="test" border="1">      
      <thead>       
         <td>Id</td> 
         <td>Username</td>
         <td>Nomor Ponsel</td>
         <td>Email</td>      
       </thead>   

      <?php   
      foreach($donatur as $rows){ 
      ?>
      <tr>
         <td><?php echo $rows->id_donatur ?></td>
         <td><?php echo $rows->username ?></td>
         <td><?php echo $rows->nomor_ponsel ?></td>
         <td><?php echo $rows->email ?></td>
      </tr>
      <?php } ?>      
    </table> 

    <h2>Data penggalang_dana</h2>
   <table class="test" border="1">      
   <thead>       
         <td>Id Penggalang Dana</td> 
         <td>Id Donatur</td> 
         <td>Username</td>
         <td>Nama Lengkap</td>
         <td>Nomor Ponsel</td>
         <td>Email</td>
         <td>Nomor KTP</td>
         <td>Foto KTP</td>        
       </thead>   

      <?php      
      foreach($penggalang_dana as $rows){ 
      ?>
      <tr>
         <td><?php echo $rows->id_pd ?></td>
         <td><?php echo $rows->id_donatur ?></td>
         <td><?php echo $rows->username ?></td>
         <td><?php echo $rows->nama_lengkap ?></td>
         <td><?php echo $rows->nomor_ponsel ?></td>
         <td><?php echo $rows->email ?></td>
         <td><?php echo $rows->nomor_ktp ?></td>
         <td><?php echo $rows->foto_ktp ?></td>      
      </tr>
      <?php } ?>      
    </table> 

     <h2>Data Join Donatur dan Penggalang Dana</h2>

    <table class="test" border="1">      
      <thead>               
         <td>Id</td> 
         <td>Username</td>
         <td>Nomor KTP</td>
         <td>Foto KTP</td>         
       </thead>   

      <?php      
      foreach($join_donatur_penggalang_dana as $rows){ 
      ?>
      <tr>      
         <td><?php echo $rows->id_donatur ?></td>
         <td><?php echo $rows->username ?></td>
         <td><?php echo $rows->nomor_ktp ?></td>
         <td><?php echo $rows->foto_ktp ?></td>      
      </tr>
      <?php } ?>      
    </table> 

</body>
</html>