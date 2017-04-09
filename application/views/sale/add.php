 <script type="text/javascript">
    $(document).ready(function(){
         $("#price").maskMoney({showSymbol:true, symbol:"R$", decimal:",", thousands:"."});
    });
</script>

<h2>Add New Sale</h2>

<?php echo form_open("pdv/do_add"); ?>

Description: <input type="text" id='description' name='description' ></input> 
<br>
<br>
Price: <input type='text' id="price" name='price'/> 
<br>
<br>

Owner: 
<!--<input type="text" name='owner'/> -->

<select name="owner">
  <option value="1">VICTOR</option>
  <option value="2">DINO</option>
</select>
<br>
<br>

<input type='submit' value='Add Sale'/>

<?php echo form_close(); ?>
