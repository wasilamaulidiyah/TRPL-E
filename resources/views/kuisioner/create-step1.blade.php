@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <form method="POST" action="{{route('kuisioner.postCreateStep1')}}" enctype="multipart/form-data">
            <div class="card">
              <div class="card-header">Kitten (1-4 Minggu)</div>
              @if (session('message'))
              <div class="col-md-12">
                <div class="alert alert-success">
                  {{session ('message')}}
                </div>
              </div>
              @endif
              <div class="card-body">
                    @csrf
                    <div class="form-group">
                    <div class="col-md-12">
                            <label>Apakah kucing sudah memasuki usia 4 minggu setelah kelahiran?
                            </label>
                            @php
                              $i = 2;
                            @endphp
                            @foreach ($keterangan as $item)
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="P1" class="form-check-input"
                                value="{{ $i }}" {{ $i == old('P1', $kuisioner->P1 ?? '') ? 'checked' : '' }}>{{ $item }}
                              </label>
                            </div>
                            @php
                              $i--;
                            @endphp
                            @endforeach
                            <br>
                            <label>(Jika No)</label>

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
                            @php
                              $i = 2;
                            @endphp
                            @foreach ($keterangan as $item)
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="P2" class="form-check-input"
                                value='{{ $i }}' {{ $i == old('P2', $kuisioner->P2 ?? '') ? 'checked' : '' }}>{{ $item }}
                              </label>
                            </div>
                            @php
                              $i--;
                            @endphp
                            @endforeach

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
                            @php
                              $i = 2;
                            @endphp
                            @foreach ($keterangan as $item)
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="P3" class="form-check-input"
                                value="{{ $i }}" {{ $i == old('P3', $kuisioner->P3 ?? '') ? 'checked' : '' }}>{{ $item }}
                              </label>
                            </div>
                            @php
                              $i--;
                            @endphp
                            @endforeach

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
                            @php
                              $i = 2;
                            @endphp
                            @foreach ($keterangan as $item)
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="P4" class="form-check-input"
                                value="{{ $i }}" {{ $i == old('P4', $kuisioner->P4 ?? '') ? 'checked' : '' }}>{{ $item }}
                              </label>
                            </div>
                            @php
                              $i--;
                            @endphp
                            @endforeach

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
                            @php
                              $i = 2;
                            @endphp
                            @foreach ($keterangan as $item)
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="P5" class="form-check-input"
                                value="{{ $i }}" {{ $i == old('P5', $kuisioner->P5 ?? '') ? 'checked' : '' }}>{{ $item }}
                              </label>
                            </div>
                            @php
                              $i--;
                            @endphp
                            @endforeach
                            <br>
                            <label>(Jika Yes)</label>

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
                              @php
                                $i = 2;
                              @endphp
                              @foreach ($keterangan as $item)
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="P6" class="form-check-input"
                                value="{{ $i }}" {{ $i == old('P6', $kuisioner->P6 ?? '') ? 'checked' : '' }}>{{ $item }}
                              </label>
                            </div>
                            @php
                              $i--;
                            @endphp
                            @endforeach

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
                            @php
                              $i = 2;
                            @endphp
                            @foreach ($keterangan as $item)
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="P7" class="form-check-input"
                                value="{{ $i }}" {{ $i == old('P7', $kuisioner->P7 ?? '') ? 'checked' : '' }}>{{ $item }}
                              </label>
                            </div>
                            @php
                              $i--;
                            @endphp
                            @endforeach

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
                            @php
                              $i = 2;
                            @endphp
                            @foreach ($keterangan as $item)
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="P8" class="form-check-input"
                                value="{{ $i }}" {{ $i == old('P8', $kuisioner->P8 ?? '') ? 'checked' : '' }}>{{ $item }}
                              </label>
                            </div>
                            @php
                              $i--;
                            @endphp
                            @endforeach

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
                            @php
                              $i = 2;
                            @endphp
                            @foreach ($keterangan as $item)
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="P9" class="form-check-input"
                                value="{{ $i }}" {{ $i == old('P9', $kuisioner->P9 ?? '') ? 'checked' : '' }}>{{ $item }}
                              </label>
                            </div>
                            @php
                              $i--;
                            @endphp
                            @endforeach

                            @error ('P9')
                              <span class='text-danger'>
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>
                    </div>
                    <div class = "card-footer text-right">
                      <div class="form-group row mb-0">
                          <div class="col-md-12">
                              <button type="submit" class="btn btn-primary">
                                  Next
                              </button>
                          </div>
                      </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
