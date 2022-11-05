@extends('layout.login')
@section('content')

<div class="login-dark" style="height: 695px;">
    <form action="/pembayaran" method="post">
        @csrf
        <h2 class="sr-only">Pembayaran Form</h2>
        <div class="illustration"><i class="icon ion-ios-checkmark-outline"></i></div>
        <div class="d-flex justify-content-center">
            <input type="radio" class="btn-check" name="colorRadio" id="TK-outlined" autocomplete="off" value="tk">
            <label class="btn btn-outline-success" for="TK-outlined">TK</label>

            <input type="radio" class="btn-check " name="colorRadio" id="SD-outlined" autocomplete="off" value="sd">
            <label class="btn btn-outline-success mx-4" for="SD-outlined">SD</label>

            <input type="radio" class="btn-check" name="colorRadio" id="SMP-outlined" autocomplete="off" value="smp">
            <label class="btn btn-outline-success" for="SMP-outlined">SMP</label>
        </div>

        <div class="tk selectt form-group mt-2" style="display: none;">
          <label for="kelas_id">Pilih Kelas</label>
          <select class="form-control" name="kelas_id">         
               <option value="{{ $kelas[0]->id }}">{{ $kelas[0]->name }}</option>
          </select>
        </div>

        <div class="sd selectt form-group mt-2" style="display: none;">
          <label for="kelas_id">Pilih Kelas</label>
          <select class="form-control" name="kelas_id">
            @foreach ($kelas->skip(1) as $k)
            @if ($k->id == '8')
                @break;
            @endif            
               <option value="{{ $k->id }}">{{ $k->name }}</option>
            @endforeach 
          </select>
        </div>

        <div class="smp selectt form-group mt-2" style="display: none;">
          <label for="kelas_id">Pilih Kelas</label>
          <select class="form-control" name="kelas_id">
            @foreach ($kelas->skip(7) as $k)            
               <option value="{{ $k->id }}">{{ $k->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="sd selectt form-group mt-2" style="display: none;">
          <label for="mapel">Mata Pelajaran</label>
          <select class="form-control" name="mapel">
            <option value="1">Bahasa Inggris</option>
            <option value="2">Bahasa Inggris + Matematika</option>
            <option value="3">Semua Pelajaran</option>
          </select>
        </div>
        <div class="smp selectt form-group mt-2" style="display: none;">
          <label for="mapel">Mata Pelajaran</label>
          <select class="form-control" name="mapel">
            <option value="1">Bahasa Inggris</option>
            <option value="2">Bahasa Inggris + Matematika</option>
            <option value="3">Semua Pelajaran</option>
          </select>
        </div>
        <div class="tk selectt form-group mt-2" style="display: none;">
          <label for="mapel">Mata Pelajaran</label>
          <select class="form-control" name="mapel">
            <option value="1">Calistung</option>
            <option value="2">Bahasa Inggris</option>
          </select>
        </div>
          <button class="btn btn-primary btn-block" type="submit">Bayar</button>
      </form>
    <script type="text/javascript">
        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".selectt").not(targetBox).hide();
                $(targetBox).show();
            });
        });
    </script>
</div>
    
@endsection