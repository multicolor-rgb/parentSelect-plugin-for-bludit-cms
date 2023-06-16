<br>
<h4>parentSelect Settings</h4>
<hr>

<label for="titleshow">
  Autocomplete settings
</label>
<select name="titleshow" id="titleshow">
  <option value="name-structure" <?php echo ($this->getValue('titleshow') == 'name-structure' ? 'selected' : ''); ?>>name (structure)</option>
  <option value="structure-name" <?php echo ($this->getValue('titleshow') == 'structure-name' ? 'selected' : ''); ?>>(structure) name</option>
  <option value="name" <?php  echo ($this->getValue('titleshow') == 'name' ? 'selected' : ''); ?>>name</option>

</select>

<div class="bg-light text-center border mt-3 p-3">
 
	<p class="mb-2"> If you like use my plugin! Buy me ☕ </p>
	
	<a href="https://www.paypal.com/donate/?hosted_button_id=UCKEMTCPCKGHE" target="_blank">
	<img src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif">
 </a>
</div>