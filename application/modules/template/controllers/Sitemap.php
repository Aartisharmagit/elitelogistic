<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitemap extends MX_Controller {
    
    public function index() {
        $this->write_file();
    }

    private function slugify($value) {
        $value = strtolower(trim($value));
        $value = preg_replace('/[^a-z0-9]+/', '-', $value);
        return trim($value, '-');
    }

    private function load_state_cities($file, $state_slug) {
        $path = APPPATH . 'modules/packers_movers/views/data/' . $file . '.php';
        if (!is_file($path)) {
            return [];
        }

        $cities = [];
        include $path;

        if (empty($cities) || !is_array($cities)) {
            return [];
        }

        $items = [];
        foreach ($cities as $city) {
            if (empty($city['nm'])) {
                continue;
            }

            $items[] = [
                'slug' => $this->slugify($city['nm']),
                'state' => $state_slug
            ];
        }

        return $items;
    }

    private function imported_city_list() {
        $states = [
            'hyderabad' => 'hyderabad',
        ];

        $cities = [];
        foreach ($states as $file => $state_slug) {
            $cities = array_merge($cities, $this->load_state_cities($file, $state_slug));
        }

        return $cities;
    }
    
    public function write_file() {
        $xml = $this->generate_sitemap_xml();
        $path = FCPATH . 'sitemap.xml';

        if (file_put_contents($path, $xml) === false) {
            show_error('Unable to write sitemap.xml file.', 500);
            return;
        }

        header('Content-Type: text/plain; charset=utf-8');
        echo 'Sitemap written to ' . $path;
    }

    private function generate_sitemap_xml() {
        $base_url = 'https://elitelogisticsandpackers.com';
        
        // Cities list from footer.php
        $cities = [
            ['slug' => 'mumbai', 'state' => 'maharashtra'],
            ['slug' => 'pune', 'state' => 'maharashtra'],
            ['slug' => 'nagpur', 'state' => 'maharashtra'],
            ['slug' => 'thne', 'state' => 'maharashtra'],
            ['slug' => 'nashik', 'state' => 'maharashtra'],
            ['slug' => 'hyderabad', 'state' => 'telangana'],
            ['slug' => 'gachibowli', 'state' => 'hyderabad'],
            ['slug' => 'hitec-city', 'state' => 'hyderabad'],
            ['slug' => 'madhapur', 'state' => 'hyderabad'],
            ['slug' => 'secunderabad', 'state' => 'hyderabad'],
            ['slug' => 'bangalore', 'state' => 'karnataka'],
            ['slug' => 'whitefield', 'state' => 'bangalore'],
            ['slug' => 'koramangala', 'state' => 'bangalore'],
            ['slug' => 'indiranagar', 'state' => 'bangalore'],
            ['slug' => 'chennai', 'state' => 'tamil-nadu'],
            ['slug' => 'manikonda', 'state' => 'chennai'],
            ['slug' => 'anna-nagar', 'state' => 'chennai'],
            ['slug' => 'velachery', 'state' => 'chennai']

                   
        ];

        $cities = array_merge( $this->imported_city_list(),$cities);
        
        $services = [
            // 'home-shifting-in-',
            // 'best-packing-and-moving-in-',
        ];
        
        $urls = [];
        
        // Static pages
        $static_pages = [
            ['', '1.0', 'weekly'],
            ['about-us', '0.8', 'monthly'],
            ['bike-transportation', '0.8', 'monthly'],
            ['home-relocation', '0.8', 'monthly'],
            ['office-relocation', '0.8', 'monthly'],
            ['loading-unloading', '0.8', 'monthly'],
            ['packing-and-moving', '0.8', 'monthly'],
            ['car-transportation', '0.8', 'monthly'],
            ['loading-unloading', '0.8', 'monthly'],
            ['blog', '0.8', 'monthly'],
            ['contact-us', '0.8', 'monthly'],
            // // ['international-shifting', '0.8', 'monthly'],
            ['faqs', '0.8', 'monthly'],
            // // ['courier-and-cargo', '0.8', 'monthly'],
            // ['testimonials', '0.9', 'weekly'],
            // ['contact-us', '0.7', 'monthly'],
            // ['payment-details', '0.7', 'weekly'],
            ['photo-gallery', '0.6', 'monthly'],
            ['our-branches', '0.8', 'monthly'],
            ['why-choose-us', '0.7', 'monthly'],
            // ['founder-message', '0.7', 'monthly'],
            ['track-shipment', '0.7', 'monthly'],
            ['reviews', '0.7', 'monthly'],
            // ['our-services', '0.7', 'monthly'],
            // ['blog/view', '0.7', 'monthly'],
            // ['privacy-policy', '0.7', 'monthly'],
            // ['terms-and-conditions', '0.7', 'monthly'],
            // ['faqs', '0.7', 'monthly'],
            // ['tracking', '0.7', 'monthly']
            
        ];
        
        foreach ($static_pages as $page) {
            $urls[] = [
                'loc' => $base_url . '/' . $page[0],
                'priority' => $page[1],
                'changefreq' => $page[2],
                'lastmod' => date('Y-m-d')
            ];
        }
        
        // City + Service pages
        $seen_urls = [];
        foreach ($cities as $city) {
            // Packers movers pages
            $city_url = $base_url . '/' . $city['slug'] . '-packers-movers-' . $city['state'];
            if (empty($seen_urls[$city_url])) {
                $urls[] = [
                    'loc' => $city_url,
                    'priority' => '0.8',
                    'changefreq' => 'weekly',
                    'lastmod' => date('Y-m-d')
                ];
                $seen_urls[$city_url] = true;
            }
            
            // Service-specific pages
            foreach ($services as $service) {
                $service_url = $base_url . '/' . $service . $city['slug'];
                if (!empty($seen_urls[$service_url])) {
                    continue;
                }

                $urls[] = [
                    'loc' => $service_url,
                    'priority' => '0.8',
                    'changefreq' => 'weekly',
                    'lastmod' => date('Y-m-d')
                ];
                $seen_urls[$service_url] = true;
            }
        }
        
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        
        foreach ($urls as $url) {
            $xml .= '  <url>' . "\n";
            $xml .= '    <loc>' . htmlspecialchars($url['loc'], ENT_XML1, 'UTF-8') . '</loc>' . "\n";
            $xml .= '    <lastmod>' . $url['lastmod'] . '</lastmod>' . "\n";
            $xml .= '    <changefreq>' . $url['changefreq'] . '</changefreq>' . "\n";
            $xml .= '    <priority>' . $url['priority'] . '</priority>' . "\n";
            $xml .= '  </url>' . "\n";
        }
        
        $xml .= '</urlset>' . "\n";

        return $xml;
    }
}
