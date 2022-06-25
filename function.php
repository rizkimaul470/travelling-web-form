<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "penjualan_tiket";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Berhasil;"

$id_customer = $_REQUEST['id_customer'];
$nama_cusst = $_REQUEST['nama_cust'];
$no_hp = $_REQUEST['no_hp'];
$tujuan = $_REQUEST['tujuan'];
$tgl_tujuan = $_REQUEST['tgl_tujuan'];
$dewasa = $_REQUEST['dewasa'];
$kids = $_REQUEST['kids'];
$harga = 10000;

$query = "INSERT INTO pesanan VALUES ('$id_customer', '$nama_cust', '$no_hp', '$tujuan', '$tgl_tujuan', '$dewasa', '$kids', '$harga')";
// if (mysqli_query($conn, $query)) {      
//     echo "Berhasil";
// } 

$data = mysqli_query($conn, "select * from pesanan");
foreach ($data as $value) {
    echo "
        <table>
            <tr>
                <td> Nomor Identitas :  </td>
                <td>" . $value['id_customer'] . " </td>
            </tr>
            <tr>
                <td> Nama Lengkap :  </td>
                <td>" . $value['nama_cust'] . " </td>
            </tr>
            <tr>
                <td> No HP :  </td>
                <td>" . $value['no_hp'] . " </td>
            </tr>
            <tr>
                <td> Tempat Wisata :  </td>
                <td>" . $value['tujuan'] . " </td>
            </tr>
            <tr>
                <td> Tanggal Kunjungan :  </td>
                <td>" . $value['tgl_tujuan'] . " </td>
            </tr>
            <tr>
                <td> Pengunjung Dewasa :  </td>
                <td>" . $value['dewasa'] . " </td>
            </tr>
            <tr>
                <td> Pengunjung Anak - Anak :  </td>
                <td>" . $value['kids'] . " </td>
            </tr>
            <tr>
                <td> Harga Tiket :  </td>
                <td>" . $value['hrg_tiket'] . " </td>
            </tr>
        </table>
        ";
}

    // mysqli_close($conn);
