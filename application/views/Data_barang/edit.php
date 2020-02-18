<h2><?php echo $kode; ?></h2> 
<?php echo validation_errors(); ?> 

<?php echo form_open('data_barang/edit/'.$news_item['id']); ?>     
<table>         
    <tr>             
    <td><label for="kode">kode</label></td>             
    <td><input type="input" name="kode" size="50" value="<?php echo $news_item['kode'] ?>" 
/></td>   

