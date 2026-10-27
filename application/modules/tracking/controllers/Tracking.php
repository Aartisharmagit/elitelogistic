<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tracking extends MX_Controller {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index() {
        $this->load->model('tracking_mdl');
        $data['samples'] = $this->tracking_mdl->get_sample_shipments(5);
        $data['title'] = "Track Your Shipment | Get Real-Time Shipping Updates";
        $data['description'] = "Track shipment with tracking number or LR number. Get real-time updates of your household shifting, cargo, or vehicle transportation. Get instant tracking with accurate status";
        $data['module'] = "tracking";
        $data['view_file'] = "tracking";
        echo Modules::run('template/layout2', $data);
    }

    public function track() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('trackingNumber', 'Tracking ID', 'required|trim');

        if ($this->form_validation->run() == true) {
            $this->load->model('tracking_mdl');
            $data = $this->tracking_mdl->trackings();

            if (!empty($data)) {
                $primary = $data[0];

                $displayId = !empty($primary['gr_no']) ? $primary['gr_no'] : (!empty($primary['tracking_id']) ? $primary['tracking_id'] : '#' . $primary['main_id']);

                $response = [
                    'status' => 'success',
                    'main' => [
                        'id' => $primary['main_id'],
                        'gr_no' => $primary['gr_no'],
                        'tracking_id' => $displayId,
                        'display_badge' => $primary['c_name'] . ' #' . $primary['gr_no'],
                        'lr_no' => !empty($primary['lr_no']) ? $primary['lr_no'] : $primary['gr_no'],
                        'c_name' => $primary['c_name'],
                        'ship_from' => $primary['ship_from'],
                        'ship_to' => $primary['ship_to'],
                        'driver_no' => $primary['driver_no'],
                        'vendor_no' => $primary['vendor_no'],
                        'booking_date' => $primary['booking_date'],
                        'ship_type' => !empty($primary['ship_type']) ? $primary['ship_type'] : 'Packers & Movers Consignment',
                        'ex_del_date' => !empty($primary['ex_del_date']) ? $primary['ex_del_date'] : 'Standard Transit'
                    ],
                    'timeline' => []
                ];

                $typeLabels = [
                    '1' => 'Processing',
                    '2' => 'On Transit',
                    '3' => 'Shipped',
                    '4' => 'Reached / Delivered'
                ];

                $maxType = 1;
                foreach ($data as $row) {
                    if (!empty($row['tracking_row_id'])) {
                        $tType = (int)$row['type'];
                        if ($tType > $maxType) {
                            $maxType = $tType;
                        }
                        $response['timeline'][] = [
                            'type' => (string)$tType,
                            'status_title' => isset($typeLabels[$tType]) ? $typeLabels[$tType] : 'Update',
                            'date' => $row['date'],
                            'time' => $row['time'],
                            'place' => $row['place'],
                            'remarks' => $row['remarks']
                        ];
                    }
                }

                // If no checkpoints added yet, generate initial booking checkpoint
                if (empty($response['timeline'])) {
                    $response['timeline'][] = [
                        'type' => '1',
                        'status_title' => 'Processing',
                        'date' => $primary['booking_date'] ?: date('d/m/Y'),
                        'time' => '',
                        'place' => $primary['ship_from'],
                        'remarks' => 'Shipment booked from ' . $primary['ship_from'] . ' to ' . $primary['ship_to']
                    ];
                }

                $response['current_step'] = $maxType;
                $response['current_status'] = isset($typeLabels[$maxType]) ? $typeLabels[$maxType] : 'Processing';

                echo json_encode($response);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Tracking number not found. Please enter a valid G.R. Number or Consignment ID.']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => validation_errors()]);
        }
    }
}
