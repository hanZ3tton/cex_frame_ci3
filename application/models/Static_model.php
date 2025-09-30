<?php
class Static_model extends CI_Model
{
  public function get_shipment_counts()
  {
    return (object) [
      'all_inbound'   => $this->db->count_all('tb_order_inbound'),
      'not_process'   => $this->count_by_status_inbound(15),
      'not_completed' => $this->count_by_status_order(3),
      'completed'     => $this->count_by_status_order(7),
      'outbound'      => $this->count_by_branch_outbound(1)
    ];
  }

  private function count_by_status_inbound($status)
  {
    $account = $this->session->userdata('username');

    $this->db->where('account', $account);
    $this->db->where('status', $status);
    $this->db->from('tb_order_inbound');
    return $this->db->count_all_results();
  }

  private function count_by_status_order($status)
  {
    $account = $this->session->userdata('username');

    $this->db->where('ship_account', $account);
    $this->db->where('status', $status);
    $this->db->from('tb_order_member');
    return $this->db->count_all_results();
  }

  private function count_by_branch_outbound($status)
  {
    $account = $this->session->userdata('username');

    $this->db->where('ship_account', $account);
    $this->db->where('branch_outbound', $status);
    $this->db->from('tb_order_member');
    return $this->db->count_all_results();
  }
}
