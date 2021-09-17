<!-- Modal -->
<div class="modal fade" id="tmkeperluan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Surat Izin Tidak Masuk Keperluan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="multisteps-form__form mb-8" novalidate="novalidate" method="POST"
                    action="{{ route('permission.store') }}" enctype="multipart/form-data">
                    @csrf
                    <!--single form panel-->
                    <div class="multisteps-form__content">
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6">
                                <label>Nama Lengkap</label>
                                <input type="hidden" name="id_workers" value="{{ Auth::user()->id }}" />
                                <input type="hidden" name="permission_type" value="tidak masuk keperluan" />
                                <input class="multisteps-form__input form-control" value="{{ Auth::user()->name }}"
                                    type="text" disabled />
                            </div>
                            <div class="col-12 col-sm-6">
                                <label>Keperluan</label>
                                <input class="multisteps-form__input form-control" name="description" type="text"
                                    placeholder="Ada keperluan apa?" />
                            </div>
                            <div class="col-12 col-sm-12">
                                <label>Tanggal Izin</label>
                                <input class="multisteps-form__input form-control" name="permission_date" type="date" />
                            </div>
                            <div class="col-12 col-sm-12">
                                <label>Lampirkan Dokumentasi</label>
                                <input type="file" multiple="" class="multisteps-form__input form-control"
                                    required="true" name="documentation">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Kirim Surat</button>
            </div>
            </form>
        </div>
    </div>
</div>
