<?php
function check_already_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('userid');
    if ($user_session) {
        redirect('dashboard');
    }
}

function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('userid');
    if (!$user_session) {
        redirect('auth/blocked');
    }
}

function check_admin()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->level != 1) {
        redirect('dashboard');
    }
}

if (!function_exists('akses_menu')) {
    function akses_menu($segment)
    {
        $ci = &get_instance();
        $lv_user = $ci->session->userdata('level');
        $ci->db->select('*');
        $ci->db->where('controller', $segment);
        $acl = $ci->db->get('new_acl')->row();

        $level_acl = pg_to_array($acl->level);
        if (!in_array($lv_user, $level_acl)) {
            redirect('errors/blocked');
        }
    }
}

function indo_currency($nominal)
{
    $result = "Rp. " . number_format($nominal, 2, ',', '.');
    return $result;
}

function indo_date($date)
{
    $d = substr($date, 8, 2);
    $m = substr($date, 5, 2);
    $y = substr($date, 0, 4);

    if ($m == '01') {
        $m = "Januari";
    } elseif ($m == '02') {
        $m = "Februari";
    } elseif ($m == '03') {
        $m = "Maret";
    } elseif ($m == '04') {
        $m = "April";
    } elseif ($m == '05') {
        $m = "Mei";
    } elseif ($m == '06') {
        $m = "Juni";
    } elseif ($m == '07') {
        $m = "Juli";
    } elseif ($m == '08') {
        $m = "Agustus";
    } elseif ($m == '09') {
        $m = "September";
    } elseif ($m == '10') {
        $m = "Oktober";
    } elseif ($m == '11') {
        $m = "November";
    } else {
        $m = "Desember";
    }

    return $d . ' ' . $m . ' ' . $y;
}

function alert_login($icon, $title, $text, $url)
{

    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
    echo "<link rel='stylesheet' href='" . base_url('assets/AdminLTE/') . "dist/css/adminlte.min.css'>";

    echo "<body>
    
        <script>
            Swal.fire({
                icon: '$icon',
                title: '$title',
                text: '$text',
                showConfirmButton: true,
                onClose: () => {
                    window.location.href = '" . base_url($url) . "';
                }
            });
        </script>
    </body>";
}

function str_level($level)
{
    $a = '';

    if ($level == '1') {
        $a = 'Super Admin';
    } else if ($level == '2') {
        $a = 'Petugas OK';
    } else if ($level == '3') {
        $a = 'Petugas Ruangan';
    } else {
        $a = 'Pegawai';
    }

    return $a;
}

function str_status($status)
{
    $a = '';

    if ($status == '1') {
        $a = '<span class="badge badge-pill badge-success font-size-12">Aktif</span>';
    } else {
        $a = '<span class="badge badge-pill badge-danger font-size-12">Tidak Aktif</span>';
    }

    return $a;
}

function status_operasi($status)
{
    $a = '';

    if ($status == '1') {
        $a = '<span class="badge badge-pill badge-info font-size-14">Baru</span>';
    } elseif ($status == '2') {
        $a = '<span class="badge badge-pill badge-warning font-size-14">On Proses</span>';
    } else {
        $a = '<span class="badge badge-pill badge-success font-size-14">Selesai</span>';
    }

    return $a;
}

function gelar_nama($gelar_depan, $nama_pegawai, $gelar_blkng)
{
    $dpn = '';
    $blkng = '';

    if ($gelar_depan != NULL) {
        $dpn = $gelar_depan . '. ';
    }

    if ($gelar_blkng != NULL) {
        $blkng = ', ' . $gelar_blkng;
    }

    return $dpn . $nama_pegawai . $blkng;
}

function sidebar_dinamis()
{
    $ci = &get_instance();
    $ci->load->model('Acl_M');
    $menu = $ci->Acl_M->getAcl()->result();

    return $menu;
}

if (!function_exists('pg_to_array')) {
    function pg_to_array($string)
    {
        $array = array();
        if (!empty($string) && is_string($string)) {
            $array = explode(',', trim($string, '{}'));
        }
        return $array;
    }
}

if (!function_exists('array_to_pg')) {
    function array_to_pg($data_array)
    {
        if (!empty($data_array)) {
            return str_replace(['[', ']'], ['{', '}'], json_encode($data_array));
        } else {
            return null;
        }
    }
}

if (!function_exists('users_icon_datatables')) {
    function users_icon_datatables($nama_pegawai, $nip)
    {
        $result = '
            <div class="media">
                <span class="fa-stack fa-lg mr-1" style="margin-right: 6px;">
                    <i class="far fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-user fa-stack-1x text-primary"></i>
                </span>
                <div class="media-body">
                    <div>
                        <p class="mb-0">' . $nama_pegawai . '</p>
                    </div>
                    <span class=" font-13">
                        <b class="cst_bold">NIP: </b>
                        <span class="badge bg-pill bg-primary font-size-12">' . $nip . '</span>
                    </span>
                </div>
            </div>
            ';
        return $result;
    }
}

if (!function_exists('instansi_icon_datatables')) {
    function instansi_icon_datatables($unor, $jabatan)
    {
        $result = '
            <div class="media">
                <span class="fa-stack fa-lg mr-1" style="margin-right: 6px;">
                    <i class="far fa-circle fa-stack-2x text-success"></i>
                    <i class="fas fa-building fa-stack-1x text-success"></i>
                </span>
                <div class="media-body">
                    <div>
                        <p class="mb-0">' . $unor . '</p>
                    </div>
                        <span class="font-size-12">' . $jabatan . '</span>
                </div>
            </div>
            ';
        return $result;
    }

    function jenis_kel($jekel)
    {
        if ($jekel == '1') {
            $result = 'Laki-laki';
        } else {
            $result = 'Perempuan';
        }

        return $result;
    }

    function j_pembayaran($j_pembayaran)
    {
        if ($j_pembayaran == '1') {
            $result = 'BPJS';
        } elseif ($j_pembayaran == '2') {
            $result = 'UMUM';
        } else {
            $result = 'JAMPERSAL';
        }

        return $result;
    }

    if (!function_exists('status_perkawinan')) {
        function status_perkawinan($id)
        {
            switch ($id) {
                case 1:
                    $return = 'Belum Menikah';
                    break;
                case 2:
                    $return = 'Menikah';
                    break;
                case 3:
                    $return = 'Cerai Hidup';
                    break;
                case 4:
                    $return = 'Cerai Mati';
                    break;
                default:
                    $return = 'Tidak Diketahui';
                    break;
            }

            return $return;
        }
    }

    if (!function_exists('get_hash')) {

        function get_hash($PlainPassword)
        {

            $option = [
                'cost' => 12, // proses hash sebanyak: 2^12 = 4.096x
            ];
            return password_hash($PlainPassword, PASSWORD_DEFAULT, $option);
        }
    }

    if (!function_exists('hash_verified')) {

        function hash_verified($PlainPassword, $HashPassword)
        {

            return password_verify($PlainPassword, $HashPassword) ? true : false;
        }
    }
}
