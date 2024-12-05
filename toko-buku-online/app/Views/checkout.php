<?= $this->extends('layout');?>

<?= $this->section('main')?>

<div class="container">
    <h3>Review dan Submit Order</h3>
    <hr/>
    <table>
        <tr>
            <td>Bridgorden</td>
            <td>@1</td>
            <td>Rp. 75.000</td>
        </tr>
    </table>
    <h3 class="mt-3">Total</h3>
    <h/>
    <span>Rp. 75.000</span>
    <h3 class="mt-3">Alamat Pengiriman</h3>
    <hr/>
    <p>Jl Simp. Sungai Duren, Mr. Jambi</p>
    <h3 class="mt-3">Metode Bayar</h3>
    <h/>
    <p>Transfer Bank</p>
    <p>No Rekening Indo Masse, BRI, 11002005</p>
    <div class="mt-5">
        <form action="<?= base_Url('submit')?>" method="POST">
        <button type="submit" class="btn btn-success">Sumbit Order</button>
    </form>
    </div>
</div>

<?= $this->endSection();?>