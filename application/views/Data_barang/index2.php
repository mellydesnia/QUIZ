<h2><?php echo $kode_barang; ?></h2>   
<a href="<?php echo site_url('Data_barang/tambah'); ?>">Kirim</a>

<table border='1' cellpadding='4'>     
<tr>         
    <td> Kode Barang </td>         
    <td> Nama Barang </td>         
    <td> Jumlah Barang </td>       
</tr> 
<?php foreach ($Data_barang as $Data_barang_item): ?> 

    <tr>             
    <td><?php echo $Data_barang_item['kode_barang']; ?></td>             
    <td><?php echo $Data_barang_item['text']; ?></td>             
    <td>                
     <a href="<?php echo site_url('Data_barang/view'.$Data_barang_item['slug']); ?>">View</a> |                  
     <a href="<?php echo site_url('Data_barang/edit/'.$Data_barang_item['id']); ?>">Edit</a> |                 
     <a href="<?php echo site_url('Data_barang/delete/'.$Data_barang_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>             
     </td>         
     </tr> 
     <?php endforeach; ?> 
     </table> 
 