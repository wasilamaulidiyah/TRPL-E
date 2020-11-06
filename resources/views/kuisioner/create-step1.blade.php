@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kitten(1-4 Minggu)</div>
                <div class="card-body">
                  <form method="POST" action="#" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                    <div class="col-md-12">
                            <label>Apakah kucing sudah memasuki usia 4 minggu setelah kelahiran?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="P1" class="form-check-input" value="1">Yes
                              </label>
                            </div>

                            @error ('P1')
                              <span class='text-danger'>
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                  </div>

                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Apakah berat badan kucing ketika lahir sudah setara dengan 100 gram?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="P2" class="form-check-input" value="1">Yes
                              </label>
                            </div>

                            @error ('P2')
                              <span class='text-danger'>
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Apakah kucing sudah bisa membuka mata ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="P3" class="form-check-input" value="1">Yes
                              </label>
                            </div>

                            @error ('P3')
                              <span class='text-danger'>
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Apakah kucing sudah bisa berjalan/menggerakkan anggota tubuhnya ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="P4" class="form-check-input" value="1">Yes
                              </label>
                            </div>

                            @error ('P4')
                              <span class='text-danger'>
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Apakah kucing sudah bisa menyusu pada induknya ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="P5" class="form-check-input" value="1">Yes
                              </label>
                            </div>

                            @error ('P5')
                              <span class='text-danger'>
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Apakah kucing mengalami pertambahan berat badan sejak awal kelahiran
                              (Umumnya berat badan kucing setelah lahir sekitar 100 gram)?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="P6" class="form-check-input" value="1">Yes
                              </label>
                            </div>

                            @error ('P6')
                              <span class='text-danger'>
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Apakah kucing sudah bisa menunjukkan respon pengelihatan dan perilaku ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="P7" class="form-check-input" value="1">Yes
                              </label>
                            </div>

                            @error ('P7')
                              <span class='text-danger'>
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Apakah kucing sudah bisa menunjukkan respon pendengaran dan interaksi dengan saudara kandungnya ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="P8" class="form-check-input" value="1">Yes
                              </label>
                            </div>

                            @error ('P8')
                              <span class='text-danger'>
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Apakah kucing sudah terbiasa menyusu kepada induknya ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="P9" class="form-check-input" value="1">Yes
                              </label>
                            </div>

                            @error ('P9')
                              <span class='text-danger'>
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan') }}
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
