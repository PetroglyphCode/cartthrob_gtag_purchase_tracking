//include the following as a snippet/partial or in text anywhere in your {exp:cartthrob:submitted_order_info} tag
<script>
  gtag('event', 'purchase', {
	// Send transaction data with a pageview if available
	// when the page loads. Otherwise, use an event when the transaction
	// data becomes available.

  'transaction_id': '{order_id}', // Transaction ID. Required for purchases and refunds.
	'affiliation': '{site_name}',
	'value': '{exp:cartthrob:view_formatted_number number="{order_total}" prefix="" decimals="2" dec_point="." thousands_sep="" }',  // Total transaction value (incl. tax and shipping)
	'currency': 'USD',                   
	'tax':'{exp:cartthrob:view_formatted_number number="{order_tax}" prefix="" decimals="2" dec_point="." thousands_sep="" }',
	'shipping': '{exp:cartthrob:view_formatted_number number="{order_shipping}" prefix="" decimals="2" dec_point="." thousands_sep="" }',
	'coupon': '{exp:cartthrob:coupon_info}{coupon_code}{/exp:cartthrob:coupon_info}'
	'items': [
	       {exp:cartthrob:order_items order_id="{order_id}" variable_prefix="items_"}
	      {                            // List of productFieldObjects.
	        'name': '{items_title}',     // Name or ID is required.
	        'id': '{items_item_number}',
	        'list_position': '{count}',
	        'brand': '{items_manufacturer}',
	        'category': '', // Optional fields may be omitted or set to empty string.
	        'variant': '',
	        'quantity': {items_quantity},
	        'price': '{exp:cartthrob:view_formatted_number number="{items_price}" prefix="" decimals="2" dec_point="." thousands_sep="" }'
	       }{if count != total_results},{/if}{/exp:cartthrob:order_items}
	       ]
	});
</script>
