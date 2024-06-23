@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-daterangepicker/daterangepicker.css">
@endpush

<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
    <div class="modal-dialog" role="document">
        <form action="{{ route('laporan.index') }}" method="get" class="form-horizontal">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Periode Laporan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="tanggal_awal" class="col-lg-2 col-lg-offset-1 control-label">Tanggal Awal</label>
                        <div class="col">
                            <input type="date" name="tanggal_awal" id="tanggal_awal" class="form-control" required autofocus style="border-radius: 0 !important;">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal_akhir" class="col-lg-2 col-lg-offset-1 control-label">Tanggal Akhir</label>
                        <div class="col">
                            <input type="date" name="tanggal_akhir" id="tanggal_akhir" class="form-control" required style="border-radius: 0 !important;">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" >
                    <button class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <button type="button" class="btn btn-sm btn-flat btn-warning" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i> Batal</button>
                </div>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap-daterangepicker/daterangepicker.min.js"></script>
<script>
    $(function () {
        $('#tanggal_awal, #tanggal_akhir').daterangepicker({
            locale: {
                format: 'YYYY-MM-DD'
            }
        });
    });
</script>
@endpush
