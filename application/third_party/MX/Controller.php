<?php (defined('BASEPATH')) or exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__) . '/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link    http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright   Copyright (c) 2015 Wiredesignz
 * @version     5.5
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller
{
    public $autoload = array();
    public $comp;
    public $data;
    public function __construct()
    {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
        log_message('debug', $class . " MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        $this->comp['phone'] = '+91 96668 97070';
        $this->comp['phonehtml'] = 'tel:+919666897070';
        $this->comp['phone1'] = '+91 96668 97070';
        $this->comp['phonehtml1'] = 'tel:+919666897070';
        $this->comp['supportmail'] = 'info@elitelogistics.in';
        $this->comp['replyToMail'] = 'info@elitelogistics.in';
        $this->comp['mail'] = 'info@elitelogistics.in';    
        $this->comp['mailhtml'] = "mailto:info@elitelogistics.in";
        $this->comp['company3'] = 'Elite Logistics and Packers';
        $this->comp['companyName'] = 'Elite Logistics and Packers';
        $this->comp['companydomain'] = 'elitelogistics.in';

        $this->comp['whatsapp'] = '919666897070';
        $this->comp['whatsapphtml'] = "https://wa.me/919666897070";
        $this->comp['cleanPhone'] = '+919666897070';
        $this->comp['ibaCode'] = 'EL-8709';
        $this->comp['isoCode'] = 'ISO 9001:2015';

        $this->comp['facebook'] = "";
        $this->comp['facebookhtml'] = "";
        $this->comp['youtube'] = "";
        $this->comp['youtubehtml'] = "";
        $this->comp['instagram'] = "";
        $this->comp['instagramhtml'] = "";
        $this->comp['twitter'] = "";
        $this->comp['twitterhtml'] = "";
        $this->comp['linkedin'] = "";
        $this->comp['linkedinhtml'] = "";

        $this->comp['address'] = "3-4-16, Housing Board Colony, Malaysian Twp, KPHB 5th Phase, Kukatpally, Hyderabad";
        $this->comp['address1'] = "3-4-16, Housing Board Colony, Malaysian Twp, KPHB 5th Phase";
        $this->comp['address2'] = "Kukatpally, Hyderabad";
        $this->comp['addressRegion'] = "Hyderabad";
        $this->comp['postalCode'] = "500072";
        $this->comp['companystate'] = "Telangana";
        $this->comp['themeColor'] = "#d31018";

        $this->comp['experience'] = "40+";
        $this->comp['startYear'] = "1986";

        $this->comp['happyClients'] = "39,850+";
        $this->comp['yearsExperience'] = "40+";
        $this->comp['secureShifting'] = "100%";
        $this->comp['statesCovered'] = "20+";

        $this->comp['sku'] = "PM28957";
        $this->comp['mpn'] = "SPM28957";
        // Review
        $this->comp['ratingValue'] = "4.9";
        $this->comp['ratingCount'] = "39850";
        $this->comp['datePublished'] = "15 May, 2026";
        $this->comp['reviewBody'] = "Best Packing And Moving Company in India.";
        $this->comp['reviewperson'] = "Arshad Ali";

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
    }

    public function __get($class)
    {
        return CI::$APP->$class;
    }
}
