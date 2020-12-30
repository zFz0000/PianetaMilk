<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4 mt-4">
    <h1 class="mb-4">Edit Pengantaran</h1>
    <form action="http://localhost:8080/admin/delivery_update?id=<?= $delivery['id']; ?>" method="post">
        <label for="trx">Kode Transaksi : </label><br>
        <input class="form-control" type="text" name="trx" id="trx" placeholder="Kode Transaksi" value="<?= $delivery['id']; ?>" disabled><br>
        <label for="date">Tanggal : </label><br>
        <input class="form-control" type="date" name="date" id="date" placeholder="Tanggal Pengiriman" value="<?= $delivery['date']; ?>" required=""><br>
        <label for="status">Status : </label><br>
        <select class="form-control" id="status" name="status">
            <option value="<?= $delivery['status']; ?>"><?= ($delivery['status'] == 1) ? "Berhasil" : "Gagal"; ?></option>
            <option value="1">Berhasil</option>
            <option value="0">Gagal</option>
        </select><br>
        <label for="comment">Komentar : </label><br>
        <textarea class="form-control" type="number" name="comment" id="comment" placeholder="Komentar" required=""><?= $delivery['comment']; ?></textarea><br>
        <input type="submit" class="btn btn-dark float-right" value="Submit">
    </form>
</main>
</div>
</div>