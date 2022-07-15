<?php
class M_kunjungan extends CI_Model{

    function tampil_data(){
        //return $this->db->get('berobata');

        $query = $this->db->query("SELECT berobata.*, 
                            pasien.nama_p, 
                            pasien.umur, 
                            pasien.jenis_kelamin,
                            dokter.nama_d
                        FROM berobata
                        INNER JOIN pasien ON berobata.id_pasien=pasien.id_pasien
                        INNER JOIN dokter ON berobata.id_dokter=dokter.id_dokter");

        return $query;
    }

    function insert_data($data){
        return $this->db->insert('berobata', $data);
    }

    function edit_data($where){
        return $this->db->get_where('berobata', $where);
    }

    function update_data($data, $where){
        $this->db->where($where);
        $this->db->update('berobata', $data);
    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('berobata');
    }

    /* Fungsi untuk rekam medis */
    function tampil_rm($id){
        $query = $this->db->query("SELECT berobata.*, 
                            pasien.nama_p, 
                            pasien.umur, 
                            pasien.jenis_kelamin,
                            dokter.nama_d
                        FROM berobata
                        INNER JOIN pasien ON berobata.id_pasien=pasien.id_pasien
                        INNER JOIN dokter ON berobata.id_dokter=dokter.id_dokter
                        WHERE berobata.id_berobat='$id'");

        return $query;
    }

    function tampil_riwayat($pasien){
        
        $query = $this->db->query("SELECT berobata.*, 
                            pasien.nama_p, 
                            pasien.umur, 
                            pasien.jenis_kelamin,
                            dokter.nama_d
                        FROM berobata
                        INNER JOIN pasien ON berobata.id_pasien=pasien.id_pasien
                        INNER JOIN dokter ON berobata.id_dokter=dokter.id_dokter
                        WHERE berobata.id_pasien='$pasien'");
        
        return $query;

    }

    function tampil_resep($id){

        $query = $this->db->query("SELECT resep_obata.*,
                                obat.name_obat
                            FROM resep_obata
                            INNER JOIN obat ON resep_obata.id_obat=obat.id_obat
                            WHERE resep_obata.id_berobat='$id'");

        return $query;

    }

    function insert_resep($data){
        return $this->db->insert('resep_obata', $data);
    }

    function hapus_resep($where){
        $this->db->where($where);
        $this->db->delete('resep_obata');
    }

}