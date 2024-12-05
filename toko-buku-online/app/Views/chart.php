<?= $this->extends('layout');?>

<?= $this->section('main')?>
<div class="container">
    <h1>Ringkasan Order</h1>
    <div class="row">
        <div class="col-9">
            <table class="table table-stripe">
                <thead>
                    <tr>
                        <th scope="col">#id</th>
                        <th scope="col">Detail buku</th>
                        <th scope="col">Qtl</th>
                        <th scope="col">harga</th>
                        <th scope="col">Total</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">#0001</th>
                        <td>
                            <img src="<?= base_Url().'image/1.jpg'?>" alt="" style="width: 150x; neihgt; aouto;">
                            <h5>Bridgorden</h5>
                    
                        </td>
                        <td>1</td>
                        <td>Rp. 75.000</td>
                        <td>Rp. 75.000</td>
                        <td>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-3">
            <div class="">
                <h2 class="text-secondary">Total Bayar</h2>
                <h2>Rp.75.000</h2>
                <div class="mt-5">
                <a href="<?= base_Url('checkout')?>" class="btn btn-primary">Checkout</a>
            </div>
        </div>
     </div>
</div>
</div>
<?= $this->endSection();?>