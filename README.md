# WWSC TASK ASSIGNMENT:

Setup a blank instance of Wordpress with Woocommerce and BeaverBuilder plugins installed. 

Create a plugin that hooks into Woocommerce and :

A. Filters the displays of products and their variations based on SKU, the rules are:


if customer is logged in, and does not have role B2B Retail, we only show products that have SKU starting with 102-
If user is logged in, and has role B2B Retail, we display all products
if customer is logged out, we hide products that have SKU starting with 101-

B. Create a widget that can be used with BeaverBuilder page builder to retrieve all the product variations and prices in an AJAX async style, making note of the filters from A., variation table example:

101-012-3100-001-405
weiss/weiss 40.5
399.00
qty
AddtoCart
101-012-3100-001-41
weiss/weiss 41
399.00
qty
AddtoCart
101-012-3100-001-425
weiss/weiss 42.5
399.00
qty
AddtoCart
101-012-3100-001-445
weiss/weiss 44.5
399.00
qty
AddtoCart
102-012-3100-001-47
weiss/weiss 47
399.00
qty
AddtoCart
102-012-3100-001-48
weiss/weiss 48
399.00
qty
AddtoCart
102-012-3100-003-39
schwarz/schwarz 39
399.00
qty
AddtoCart

The qty input field and AddtoCart button should only be made available for logged in users of all Roles.


All code should:
follow OOP principles
follow PSR-2 coding standards 
be properly documented and structured
committed to github

Please create yourself products that can test that rule for logged and guest users.

