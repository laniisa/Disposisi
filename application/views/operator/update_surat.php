<!DOCTYPE html>
<html>
<head>
    <title><?= $title; ?></title>
    <!-- Include Bootstrap CSS for styling -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2><?= $title; ?></h2>
        <!-- Display flash message -->
        <?php if ($this->session->flashdata('message')): ?>
            <?= $this->session->flashdata('message'); ?>
        <?php endif; ?>
        <form action="<?= site_url('operator/update_surat_action'); ?>" method="post">
            <input type="hidden" name="id" value="<?= $surat['id']; ?>">
            <div class="form-group">
                <label for="no_disposisi">No Disposisi:</label>
                <input type="text" class="form-control" id="no_disposisi" name="no_disposisi" value="<?= set_value('no_disposisi', $surat['no_disposisi']); ?>" required>
            </div>
            <div class="form-group">
                <label for="no_surat">No Surat:</label>
                <input type="text" class="form-control" id="no_surat" name="no_surat" value="<?= set_value('no_surat', $surat['no_surat']); ?>" required>
            </div>
            <div class="form-group">
                <label for="tgl_surat">Tanggal Surat:</label>
                <input type="date" class="form-control" id="tgl_surat" name="tgl_surat" value="<?= set_value('tgl_surat', $surat['tgl_surat']); ?>" required>
            </div>
            <div class="form-group">
                <label for="tgl_input">Tanggal Input:</label>
                <input type="text" class="form-control" id="tgl_input" name="tgl_input" value="<?= date('Y-m-d'); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="tgl_disposisi">Tanggal Disposisi:</label>
                <input type="date" class="form-control" id="tgl_disposisi" name="tgl_disposisi" value="<?= set_value('tgl_disposisi', $surat['tgl_disposisi']); ?>" required>
            </div>
            <div class="form-group">
                <label for="tgl_dilaksanakan">Tanggal Dilaksanakan:</label>
                <input type="date" class="form-control" id="tgl_dilaksanakan" name="tgl_dilaksanakan" value="<?= set_value('tgl_dilaksanakan', $surat['tgl_dilaksanakan']); ?>" required>
            </div>
            <div class="form-group">
                <label for="perihal">Perihal:</label>
                <textarea class="form-control" id="perihal" name="perihal" rows="3" required><?= set_value('perihal', $surat['perihal']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="asal">Asal:</label>
                <input type="text" class="form-control" id="asal" name="asal" value="<?= set_value('asal', $surat['asal']); ?>" required>
            </div>
            <div class="form-group">
                <label for="jenis_surat">Jenis Surat:</label>
                <input type="text" class="form-control" id="jenis_surat" name="jenis_surat" value="<?= set_value('jenis_surat', $surat['jenis_surat']); ?>" required>
            </div>
            <div class="form-group">
                <label for="berkas">Berkas:</label>
                <input type="text" class="form-control" id="berkas" name="berkas" value="<?= set_value('berkas', $surat['berkas']); ?>" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" class="form-control" id="status" name="status" value="<?= set_value('status', $surat['status']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Surat</button>
        </form>
    </div>

    <!-- Include Bootstrap JS for interactive components -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
