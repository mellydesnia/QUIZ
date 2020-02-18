<h2><?php echo $kode; ?></h2>   
<a href="<?php echo site_url('data_barang/create'); ?>">Create</a>

<table border='1'>     
<tr>         
    <td><strong>Kode Barang</strong></td> 
    <td><strong>Nama Barang</strong></td> 
    <td><strong>Jumlah Barang</strong></td> 
    <td><strong>Harga Barang</strong></td> 
    <td><strong>Total Barang</strong></td> 
    <td><strong>Action</strong></td>   
</tr> 
<?php foreach ($data_barang as $data_barang_item): ?> 

    <tr>             
    <td><?php echo $data_barang_item['kode']; ?></td>             
    <td><?php echo $data_barang_item['nama']; ?></td>
    <td><?php echo $data_barang_item['jumlah']; ?></td>             
    <td><?php echo $data_barang_item['harga']; ?></td>     
    <td><?php echo $data_barang_item['total']; ?></td>            
    <td>                
     <a href="<?php echo site_url('data_barang/view/'.$data_barang_item['harga']); ?>">View</a> |                  
     <a href="<?php echo site_url('data_barang/edit/'.$data_barang_item['kode']); ?>">Edit</a> |                 
     <a href="<?php echo site_url('data_barang/delete/'.$data_barang_item['kode']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>             
     </td>         
     </tr> 
     <?php endforeach; ?> 
     </table> 
 