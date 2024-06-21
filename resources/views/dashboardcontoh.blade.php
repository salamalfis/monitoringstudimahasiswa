@extends('layouts.user_type.auth')
@section('content')

<style>
    tr {
      border-bottom: 0px solid gray;
    }
  </style>
  <div class="row" style="margin-bottom:100%;">

    <b>Tambah Undur Diri</b>
    <div class="container" style="background-color:white; padding:30px; border-radius:30px;">
      <form action="#">

        <table style="border:none; !important; width:100%;">
          <tr style="border:none; !important;">
            <td style="border:none; width:25%;">
              <b>Tanggal</b>
            </td>
            <td style="border:none; border:none; !important;">
              <div class="form-group">
               <input type="date" class="form-control" placeholder="Tanggal">
              </div>
            </td>
          </tr>
            <tr style="border:none; !important;">
            <td style="border:none; width:25%;">
              <b>Kelas Mahasiswa</b>
            </td>
            <td style="border:none; border:none; !important;">
              <div class="form-group">
               <input type="text" class="form-control" placeholder="Nama Mahasiswa">
              </div>
            </td>
          </tr>
          <tr style="border:none; !important;">
            <td style="border:none; width:25%;">
              <b>Nama</b>
            </td>
            <td style="border:none; border:none; !important;">
              <div class="form-group">
               <input type="text" class="form-control" placeholder="NIM">
              </div>
            </td>
          </tr>
          <tr style="border:none; !important;">
            <td style="border:none; width:25%;">
              <b>Dosen Wali</b>
            </td>
            <td style="border:none; border:none; !important;">
              <div class="form-group">
               <input type="text" class="form-control" placeholder="Dosen Wali">
              </div>
            </td>
          </tr>
          <tr style="border:none; !important;">
            <td style="border:none; width:25%;">
              <b>Alasan Undur Diri</b>
            </td>
            <td style="border:none; border:none; !important;">
              <div class="form-group">
                <select name="" id="" class="form-control">
                  <option class="" >-- SELECT DATA --</option>
                  <option value="" >Pindah Kampus</option>
                  <option value="" >Menikah</option>
                  <option value="" >Sakit</option>
                  <option value="" >Ekonomi</option>
                  <option value="" >Masalah Akademik</option>
                  <option value="" >Bekerja</option>
                  <option value="" >Lainnya</option>
                </select>
              </div>
            </td>
          </tr>
        </table>
        <div style="float: right;">
          <button type="button" class="btn btn-danger">Close</button>
          <button type="button" class="btn btn-info">Simpan</button>
        </div>
      </form>
    </div>

  </div>

@endsection
