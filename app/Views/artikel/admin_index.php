<?= $this->include('template/admin_header'); ?>

<link rel="stylesheet" href="<?= base_url('/style.css'); ?>">

<div id="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($artikel) : foreach ($artikel as $row) : ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td>
                            <b><?= $row['judul']; ?></b>
                            <p>
                                <small><?= substr($row['isi'], 0, 50); ?></small>
                            </p>
                        </td>
                        <td><?= $row['status']; ?></td>
                        <td>
                            <a class="btn" href="<?= base_url('/admin/artikel/edit/' . $row['id']); ?>">Ubah</a>
                            <a class="btn btn-danger" onclick="return confirm('Yakin Menghapus Data ?');" href="<?= base_url('/admin/artikel/delet' . $row['id']); ?>">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach;
            else : ?>
                <tr>
                    <td colspan="4">Belum Ada Data</td>
                </tr>
            <?php endif; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
    </table> <?= $this->include('template/admin_footer'); ?>
</div>