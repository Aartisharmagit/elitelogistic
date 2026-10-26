<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$htmlcontent = '';
$htmlcontent1 = '';
$htmlcontent2 = '';

// bihar 
if (strtolower($city) == "") {
   $htmlcontent = "
        
   ";
   $htmlcontent1 = "
   
   ";
   $htmlcontent2 = "
   
   ";
} else {
  $htmlcontent = "
<h2>Top Packers and Movers in $city | <span>Safe and Secure Shifting Services</span></h2>

<p>Looking for the best packers and movers in $city? Charges for professional relocation services usually range between Rs. 3,500 and Rs. 6,500 for a 1BHK local shift, Rs. 6,000 and Rs. 10,000 for a 2BHK as well as Rs. 9,000 and Rs. 15,000 for a 3BHK family, depending on factors like distance, packaging, accessibility and volume of shipment. Interstate relocation rates depend on route, size and type of vehicles needed. At Elite Logistics Packers and Movers, we help individuals, corporate professionals and businesses to relocate their personal belongings with proper planning, packaging, loading and transportation.</p>

<p>Professional packing of household items like furniture, electrical appliances, glass wares and other things takes place in such a manner that appropriate packaging material is used which includes 5-layer bubble packing in case of need. Vehicles are selected based on size and accessibility of consignment; small sized trucks are used for restricted routes while covered container trucks are used for long-distance transportation. Customers can enjoy live GPS tracking for their eligible shipments.</p>
  ";

  $htmlcontent1 = "
<h2>Why Choose Our Packers and Movers in $city?</h2>

<p><strong>Written Price Lock:</strong> We provide written quotations that include the charges that need to be paid and services included. In case you need anything more than the standard services, you can discuss it before the work begins.</p>

<p><strong>IBA Approved Bills:</strong> We provide IBA-approved bills under our reference number EL-8709, which applies to all the requirements of relocation. Please check your eligibility and documentation requirements before you book.</p>

<p><strong>Live GPS Tracking:</strong> Keep track of your consignment during transit and contact our support for movement details.</p>

<p><strong>5-Layer Bubble Packing:</strong> Our process of packing involves protection of all the items through layers of bubble packing in order to protect your delicate items, glassware, electronic devices and furniture from rough handling and transportation movements.</p>

<p>We are an India-based relocation company, stated to be ISO 9001:2015 certified and an IBA-approved logistics partner, offering services to people living in more than 250 cities of India. Please verify all the above credentials and claims of the company.</p>
  ";

  $htmlcontent2 = "
<h3>Our Relocation Process</h3>

<p><strong>Step 1</strong> We start the process by gathering information like date of moving, pickup and delivery location, inventory, floor access and special handling requirements. Based on this information, we prepare a written quotation.</p>

<p><strong>Step 2</strong> Our team visits on the scheduled date along with the required packing material. The furniture is protected, extra cushioning is provided to the fragile items and packing boxes are arranged in an orderly manner to ease the process of unloading.</p>

<p><strong>Step 3</strong> Loading of the items is done carefully into the right vehicle. The transport team travels via the planned route.</p>

<p><strong>Step 4</strong> Our staff delivers the consignment at the designated place, where the items are unloaded by our staff.</p>

<h3>Plan Your Shift Today</h3>

<p>Looking for the best packers and movers in $city for your relocation? Tell us your requirements and ask for a written quotation. Contact Us: <a href='$phonehtml'>$phone</a>.</p>
  ";
}