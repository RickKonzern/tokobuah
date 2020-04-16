<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<table border="1">
    <tr><th>ID</th><th>NAMA</th><th>NOMOR</th><th></th></tr>
    <?php
    foreach ($data as $products){
        echo "<tr>
              <td>$products->id</td>
              <td>$products>nama</td>
              <td>$products->nomor</td>
              <td>".anchor('kontak/edit/'.$products->id,'Edit')."
                  ".anchor('kontak/delete/'.$products,'Delete')."</td>
              </tr>";
    }
    ?>
</table>
<a href="http://localhost/rest_ci_client/index.php/kontak/create">+ Tambah data<a>