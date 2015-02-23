<?php echo form_open(base_url().'shop/update'); ?>

<table cellpadding="6" cellspacing="1" style="width:100%" border="0">

<tr>
  <th>Quantity ordered</th>
  <th>Product</th>
  <th style="text-align:right">Price</th>
  <th style="text-align:right">Sub-Total</th>
  <!-- <th style="">Remove</th> -->
</tr>


<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

	<?php echo form_hidden('rowid[]', $items['rowid']); ?>

	<tr>
	  <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
	  <td>
		<?php echo $items['name']; ?>

			<!-- <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

				<p>
					<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

						<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

					<?php endforeach; ?>
				</p>

			<?php endif; ?> -->

	  </td>
	  
	  <td style="text-align:right">Kshs<?php echo $this->cart->format_number($items['price']); ?></td>
	  <td style="text-align:right">Kshs<?php echo $this->cart->format_number($items['subtotal']); ?></td>
	  <td class="remove"><?php echo anchor('shop/remove/'.$items['rowid'], 'remove'); ?></td>
	</tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr>
  <!-- <td colspan="2"> </td> -->
  <td class="right"><strong>Grand Total</strong></td>
  <td class="right">Kshs<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>

<p><?php echo form_submit('shop/update'.$items['rowid'], 'Update your Cart'); ?></p>
