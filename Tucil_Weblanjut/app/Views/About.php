<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>

<table border="1" align="center">
        <tr>
            <th colspan="3" bgcolor="#AFEEEE">Profile Penulis</th>
        </tr>
        <tr>
            <td rowspan="9">
                <img src="img/fotoAbout.png" height="300px" width="250px;" />
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>Ratih Indah Wardani</td>
        </tr>
        <tr>
            <td>tempat Lahir</td>
            <td>Hurun</td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td>18 Maret 2001</td>
        </tr>

        <tr>
            <td>Zodiak</td>
            <td>Pisces</td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td>Ilmu Komputer</td>
        </tr>

        <tr>
            <td>Fakultas</td>
            <td>Matematika dan Ilmu Pengetahuan Alam</td>
        </tr>

        <tr>
            <td>Universitas</td>
            <td>Lampung</td>
        </tr>

        <tr>
            <td>Akun</td>
            <td>
                <ul>
                    <li><a href="https://www.instagram.com/ratihindah46/">Instagram</a></br></li>
                    <li><a href="https://web.facebook.com/profile.php?id=100005345298510">Facebook</a></li>
                </ul>
            </td>
        </tr>

        
    </table>

<?= $this->endSection(); ?>