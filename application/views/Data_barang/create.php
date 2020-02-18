
<?php echo validation_errors(); ?>   

<?php echo form_open('data_barang/create'); ?>         
<table>         
    <tr>             
        <td><label for="kode">kode</label></td>             
        <td><input type="input" name="kode" size="50" /></td>         
    </tr> 
    <tr>             
        <td><label for="nama">Nama</label></td>             
        <td><input type="input" name="nama" size="50" /></td>         
    </tr> 
    <tr>             
        <td><label for="jumlah">Jumlah</label></td>             
        <td><input type="input" name="jumlah" size="50" /></td>         
    </tr>   
    <tr>             
        <td><label for="harga">Harga</label></td>             
        <td><input type="input" name="harga" size="50" /></td>         
    </tr> 

        <td></td>             
        <td><input type="submit" name="submit" value="KIRIM" /></td>         
        </tr>     
</table>     
</form> 



 