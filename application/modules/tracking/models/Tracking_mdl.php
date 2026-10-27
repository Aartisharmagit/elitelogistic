<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tracking_mdl extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function trackings() {
        $trackingNumber = trim((string)$this->input->post('trackingNumber'));
        if ($trackingNumber === '') {
            return [];
        }

        // Clean & extract number if entered as "ABC #123456", "#123456", or "ABC 123456"
        $extractedNumber = $trackingNumber;
        if (preg_match('/[#\-]\s*([A-Za-z0-9_-]+)/', $trackingNumber, $m)) {
            $extractedNumber = trim($m[1]);
        }

        $this->db->select('
            ship_main.id as main_id,
            ship_main.gr_no,
            ship_main.tracking_id,
            ship_main.lr_no,
            ship_main.c_name,
            ship_main.ship_from,
            ship_main.ship_to,
            ship_main.ship_type,
            ship_main.ex_del_date,
            ship_main.driver_no,
            ship_main.vendor_no,
            ship_main.date as booking_date,
            
            ship_tracking.id as tracking_row_id,
            ship_tracking.type,
            ship_tracking.date,
            ship_tracking.time,
            ship_tracking.place,
            ship_tracking.remarks
        ');

        $this->db->from('ship_main');
        $this->db->join('ship_tracking', 'ship_main.id = ship_tracking.sh_id', 'left');
        $this->db->group_start()
            ->where('ship_main.gr_no', $trackingNumber)
            ->or_where('ship_main.tracking_id', $trackingNumber)
            ->or_where('ship_main.lr_no', $trackingNumber)
            ->or_where('ship_main.id', $trackingNumber)
            ->or_where('ship_main.gr_no', $extractedNumber)
            ->or_where('ship_main.id', $extractedNumber)
            ->or_like('ship_main.c_name', $trackingNumber)
            ->group_end();
        $this->db->order_by('ship_tracking.id', 'ASC');
        return $this->db->get()->result_array();
    }

    public function get_sample_shipments($limit = 3) {
        $this->db->select('id, gr_no, c_name, ship_from, ship_to');
        $this->db->from('ship_main');
        $this->db->order_by('id', 'DESC');
        $this->db->limit($limit);
        return $this->db->get()->result_array();
    }
}

