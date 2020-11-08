@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <form method="POST" action="{{route('kuisioner.postCreateStep2')}}" enctype="multipart/form-data" enctype="multipart/form-data">
            <div class="card">
              <div class="card-header">Kucing Remaja (4-8 Minggu)</div>
              <div class="card-body">
                    @csrf
                    <div class="form-group">
                    <div class="col-md-12">
                            <label>Apakah kucing sudah memasuki usia diatas 8 minggu ?</label>
                            @php
                              $i = 2;
                            @endphp
                            @foreach ($keterangan as $item)
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="Q2" class="form-check-input" value="{{ $i }}" {{ $i == old('Q2', $kuisioner->Q2 ?? '') ? 'checked' : '' }}>{{ $item }}
                              </label>
                            </div>
                            @php
                              $i--;
                            @endphp
                            @endforeach
                            <br>
                            <label>(Jika No, mengisi pertanyaan Kitten)</label>

                            @error ('Q2')
                              <span class='text-danger'>
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                  </div>

                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Apakah kucing sudah memiliki kurang lebih 30 gigi dewasa pada mulutnya ?</label>
                            @php
                              $i = 2;
                            @endphp
                            @foreach ($keterangan as $item)
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="Q3" class="form-check-input" value="{{ $i }}" {{ $i == old('Q3', $kuisioner->Q3 ?? '') ? 'checked' : '' }}>{{ $item }}
                              </label>
                            </div>
                            @php
                              $i--;
                            @endphp
                            @endforeach

                            @error ('Q3')
                              <span class='text-danger'>
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Apakah berat badan kucing sudah naik 100% dari berat saat kelahiran ?</label>
                            @php
                              $i = 2;
                            @endphp
                            @foreach ($keterangan as $item)
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="Q4" class="form-check-input" value="{{ $i }}" {{ $i == old('Q4', $kuisioner->Q4 ?? '') ? 'checked' : '' }}>{{ $item }}
                              </label>
                            </div>
                            @php
                              $i--;
                            @endphp
                            @endforeach

                            @error ('Q4')
                              <span class='text-danger'>
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Apakah kucing sudah bisa beradaptasi dengan lingkungan sekitar?</label>
                            @php
                              $i = 2;
                            @endphp
                            @foreach ($keterangan as $item)
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="Q5" class="form-check-input" value="{{ $i }}" {{ $i == old('Q5', $kuisioner->Q5 ?? '') ? 'checked' : '' }}>{{ $item }}
                              </label>
                            </div>
                            @php
                              $i--;
                            @endphp
                            @endforeach

                            @error ('Q5')
                              <span class='text-danger'>
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Apakah kucing sudah terbiasa berkeliling di lingkungan sekitar ?</label>
                            @php
                              $i = 2;
                            @endphp
                            @foreach ($keterangan as $item)
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="Q6" class="form-check-input" value="{{ $i }}" {{ $i == old('Q6', $kuisioner->Q6 ?? '') ? 'checked' : '' }}>{{ $item }}
                              </label>
                            </div>
                            @php
                              $i--;
                            @endphp
                            @endforeach
                            <br>
                            {{-- <label>(Jika Yes)</label> --}}

                            @error ('Q6')
                              <span class='text-danger'>
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Apakah kucing terbiasa mencari makan secara mandiri ?</label>
                              @php
                                $i = 2;
                              @endphp
                              @foreach ($keterangan as $item)
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="Q7" class="form-check-input" value="{{ $i }}" {{ $i == old('Q7', $kuisioner->Q7 ?? '') ? 'checked' : '' }}>{{ $item }}
                              </label>
                            </div>
                            @php
                              $i--;
                            @endphp
                            @endforeach

                            @error ('Q7')
                              <span class='text-danger'>
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Apakah kucing sudah bisa kembali ke kandangnya pada waktu tertentu ?</label>
                            @php
                              $i = 2;
                            @endphp
                            @foreach ($keterangan as $item)
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="Q8" class="form-check-input" value="{{ $i }}" {{ $i == old('Q8', $kuisioner->Q8 ?? '') ? 'checked' : '' }}>{{ $item }}
                              </label>
                            </div>
                            @php
                              $i--;
                            @endphp
                            @endforeach

                            @error ('Q8')
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
                            <a href="{{ route('kuisioner.createStep1') }}" class="btn btn-danger">Kembali</a>
                              <button type="submit" class="btn btn-primary">
                                  Kirim
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
