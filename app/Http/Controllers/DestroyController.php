<?php

namespace App\Http\Controllers;

use App\Models\AplikasiLayanan;
use App\Models\InformasiPublik;
use App\Models\Infografis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class DestroyController extends Controller
{
    public function destroy_informasi_publik($id)
    {
        try {
            $informasiPublik = InformasiPublik::findOrFail($id);
            DB::beginTransaction();
            if ($informasiPublik->path_dokumen) {
                Storage::disk('public')->delete($informasiPublik->path_dokumen);
            }

            $informasiPublik->delete();
            DB::commit();

            Alert::success('Berhasil', 'Data berhasil dihapus');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();
            Alert::error('Gagal', 'Terjadi kesalahan saat menghapus data');
            return redirect()->back();
        }
    }

    public function destroy_infografis($id)
    {
        try {
            
            $infografis = Infografis::findOrFail($id);
            DB::beginTransaction();
            if ($infografis->path_dokumen) {
                Storage::disk('public')->delete($infografis->path_dokumen);
            }

            $infografis->delete();
            DB::commit();

            Alert::success('Berhasil', 'Data berhasil dihapus');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();
            Alert::error('Gagal', 'Terjadi kesalahan saat menghapus data');
            return redirect()->back();
        }
    }

    public function destroy_aplikasi_layanan_publik($id)
    {
        try {
            
            $infografis = AplikasiLayanan::findOrFail($id);
            DB::beginTransaction();
            if ($infografis->path_dokumen) {
                Storage::disk('public')->delete($infografis->path_dokumen);
            }

            $infografis->delete();
            DB::commit();

            Alert::success('Berhasil', 'Data berhasil dihapus');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();
            Alert::error('Gagal', 'Terjadi kesalahan saat menghapus data');
            return redirect()->back();
        }
    }
}
