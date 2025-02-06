<?php

namespace App\Http\Controllers;

use App\Models\Infografis;
use App\Models\InformasiPublik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Models\AplikasiLayanan;


class StoreController extends Controller
{
    public function store_informasi_public(Request $request)
    {
        $validatedData = $request->validate([
            'nama_informasi' => 'required|string|max:255',
            'klasifikasi_informasi_id' => 'required|exists:klasifikasi_informasi,id',
            'jenis_informasi_id' => 'required|exists:jenis_informasi,id',
            'detail_jenis_informasi_id' => 'required|exists:detail_jenis_informasi,id',
            'nama_dokumen' => 'required|string|max:255',
            'file_pdf' => 'required|file|mimes:pdf|max:5048',
            'is_active' => 'sometimes|accepted'
        ], [
            'klasifikasi_informasi_id.exists' => 'Klasifikasi informasi tidak valid',
            'jenis_informasi_id.exists' => 'Jenis informasi tidak valid',
            'detail_jenis_informasi_id.exists' => 'Detail jenis informasi tidak valid',
            'file_pdf.required' => 'Upload Dokumen tidak boleh kosong',
            'nama_dokumen.required' => 'Nama dokumen tidak boleh kosong',
            'file_pdf.mimes' => 'Dokumen harus berformat PDF',
            'file_pdf.max' => 'Dokumen maksimal 5MB'
        ]);
    
        DB::beginTransaction();
    
        try {
            $filePath = null;
            
            // Handle file upload
            if ($request->hasFile('file_pdf')) {
                $file = $request->file('file_pdf');
                $fileName = time() . '-' . $request->nama_dokumen . '.' . $file->getClientOriginalExtension();
                $filePath = $file->storeAs('informasi_publik', $fileName, 'public');
            }
    
            // Create informasi publik
            $informasi = InformasiPublik::create([
                'klasifikasi_informasi_id' => $validatedData['klasifikasi_informasi_id'],
                'jenis_informasi_id' => $validatedData['jenis_informasi_id'],
                'detail_jenis_informasi_id' => $validatedData['detail_jenis_informasi_id'],
                'nama_informasi' => $validatedData['nama_informasi'],
                'nama_dokumen' => $validatedData['nama_dokumen'],
                'path_dokumen' => $filePath ? str_replace('public/', '', $filePath) : null,
                'is_active' => $request->has('is_active'),
                'post_by' => Auth::user()->name ?? null,
            ]);
    
            DB::commit();
    
            Alert::success('Berhasil', 'Data berhasil disimpan');
            return redirect()->back();
    
        } catch (\Exception $e) {
            DB::rollBack();
            
            if (isset($filePath)) {
                Storage::disk('public')->delete($filePath);
            }
    
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
        
    }

    public function store_infografis(Request $request)
    {
        $validatedData = $request->validate([
            'nama_infografis' => 'required|string|max:255',
            'klasifikasi_informasi_id' => 'required|exists:klasifikasi_informasi,id',
            'jenis_informasi_id' => 'required|exists:jenis_informasi,id',
            'detail_jenis_informasi_id' => 'required|exists:detail_jenis_informasi,id',
            'nama_dokumen' => 'required|string|max:255',
            'file_pdf' => 'required|file|mimes:pdf|max:5048',
            'is_active' => 'sometimes|accepted'
        ], [
            'klasifikasi_informasi_id.exists' => 'Klasifikasi informasi tidak valid',
            'jenis_informasi_id.exists' => 'Jenis informasi tidak valid',
            'detail_jenis_informasi_id.exists' => 'Detail jenis informasi tidak valid',
            'file_pdf.required' => 'Upload Dokumen tidak boleh kosong',
            'nama_dokumen.required' => 'Nama dokumen tidak boleh kosong',
            'file_pdf.mimes' => 'Dokumen harus berformat PDF',
            'file_pdf.max' => 'Dokumen maksimal 5MB'
        ]);
    
        DB::beginTransaction();
    
        try {
            $filePath = null;
            
            // Handle file upload
            if ($request->hasFile('file_pdf')) {
                $file = $request->file('file_pdf');
                $fileName = time() . '-' . $request->nama_dokumen . '.' . $file->getClientOriginalExtension();
                $filePath = $file->storeAs('infografis', $fileName, 'public');
            }
    
            // Create informasi publik
            $informasi = Infografis::create([
                'klasifikasi_informasi_id' => $validatedData['klasifikasi_informasi_id'],
                'jenis_informasi_id' => $validatedData['jenis_informasi_id'],
                'detail_jenis_informasi_id' => $validatedData['detail_jenis_informasi_id'],
                'nama_infografis' => $validatedData['nama_infografis'],
                'nama_dokumen' => $validatedData['nama_dokumen'],
                'path_dokumen' => $filePath ? str_replace('public/', '', $filePath) : null,
                'is_active' => $request->has('is_active'),
                'post_by' => Auth::user()->name ?? null,
            ]);
    
            DB::commit();
            Alert::success('Berhasil', 'Data berhasil disimpan');
            return redirect()->back();
    
        } catch (\Exception $e) {
            DB::rollBack();
            if (isset($filePath)) {
                Storage::disk('public')->delete($filePath);
            }
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
        
    }

    public function store_aplikasi_layanan_publik(Request $request)
    {

        $validatedData = $request->validate([
            'nama_aplikasi' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'required|url',
            'is_active' => 'sometimes|accepted'
        ], [
            'nama_aplikasi.required' => 'Nama aplikasi tidak boleh kosong',
            'description.required' => 'Description tidak boleh kosong',
            'link.required' => 'Link tidak boleh kosong',
            'link.url' => 'Link harus berupa URL',
        ]);
        try {
            $data = [
                'nama_aplikasi' => $validatedData['nama_aplikasi'],
                'description' => $validatedData['description'],
                'url' => $validatedData['link'],
                'is_active' => $request->has('is_active'),
                'post_by' => Auth::user()->name ?? null,
            ];
            AplikasiLayanan::create($data);
            Alert::success('Berhasil', 'Data berhasil disimpan');
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::error('Gagal', 'Data gagal disimpan');
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
