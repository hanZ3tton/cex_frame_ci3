<?php
class Static_model extends CI_Model
{
  public function get_shipment_counts()
  {
    return (object) [
      'all'           => $this->db->count_all('tb_order_inbound'),
      'not_process'   => $this->count_by_status_inbound(15),
      'not_completed' => $this->count_by_status_order(3),
      'completed'     => $this->count_by_status_order(7),
      'outbound'      => $this->count_by_status_outbound(1)
    ];
  }

  private function count_by_status_inbound($status)
  {
    return $this->db->where('status', $status)->from('tb_order_inbound')->count_all_results();
  }

  private function count_by_status_order($status)
  {
    return $this->db->where('status', $status)->from('tb_order_member')->count_all_results();
  }

  private function count_by_status_outbound($status)
  {
    return $this->db->where('outbound', $status)->from('tb_order_member')->count_all_results();
  }
}
