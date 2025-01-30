<?php
class PageCounter_model extends CI_Model
{

    public function count_page($page_url, $session_id)
    {
        $this->db->where('page_url', $page_url);
        $this->db->where('date', date('Y-m-d'));
        $query = $this->db->get('page_counters');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->db->where('id', $row->id);
            $this->db->update('page_counters', ['count' => $row->count + 1]);
        } else {
            $data = [
                'page_url' => $page_url,
                'date' => date('Y-m-d'),
                'session_id' => $session_id
            ];
            $this->db->insert('page_counters', $data);
        }
    }

    public function get_total_visitors()
    {
        return $this->db->count_all_results('page_counters');
    }

    public function get_today_visitors()
    {
        $this->db->where('date', date('Y-m-d'));
        return $this->db->count_all_results('page_counters');
    }

    public function get_yesterday_visitors()
    {
        $yesterday = date('Y-m-d', strtotime('-1 day'));
        $this->db->where('date', $yesterday);
        return $this->db->count_all_results('page_counters');
    }

    // Fungsi untuk mendapatkan pengunjung online (implemenatasi sederhana)
    public function get_online_visitors()
    {
        // Sesuaikan waktu aktif dengan kebutuhan Anda
        $active_time = 30; // dalam menit
        $expired_time = date('Y-m-d H:i:s', time() - $active_time * 60);
        $this->db->where('date', date('Y-m-d'));
        $this->db->where('created_at >=', $expired_time);
        $this->db->group_by('session_id');
        return $this->db->count_all_results('page_counters');
    }
}