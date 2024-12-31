<?php
namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PendaftaranController extends Controller
{
    protected $student;

    public function index()
    {
        return view('pendaftaran');
    }

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $this->validateRequest($request);

        // Cek apakah siswa sudah mendaftar sebelumnya
        if ($this->isStudentRegistered($validated)) {
            return redirect()->back()->withErrors(['error' => 'Siswa ini sudah terdaftar.']);
        }

        // Simpan data siswa
        $student = $this->student->fill($validated);

        if ($request->hasFile('ijazah_smp')) {
            $path = $this->storeIjazah($request);
            if ($path) {
                $student->ijazah_smp = $path;
            } else {
                return redirect()->back()->withErrors(['error' => 'Gagal menyimpan ijazah.']);
            }
        }

        $student->save();

        return redirect()->back()->with('success', 'Pendaftaran berhasil.');
    }

    private function validateRequest(Request $request)
    {
        return $request->validate([
            'nama_lengkap' => 'required|string|max:100|unique:students,nama_lengkap',
            'umur' => 'required|integer|min:10',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'no_hp' => 'required|string|max:15',
            'tahun_lulus_smp' => 'required|integer|min:2000|max:' . date('Y'),
            'nama_orangtua' => 'required|string|max:100',
            'no_hp_orangtua' => 'required|string|max:15',
            'daerah_asal' => 'required|string|max:100',
            'jenjang_pendidikan_terakhir' => 'required|string|max:50',
            'tahun_masuk' => 'required|integer|min:2000|max:' . (date('Y') + 1),
            'asal_sekolah' => 'required|string|max:100',
            'negara_asal_sekolah' => 'required|string|max:100',
            'kota_asal_sekolah' => 'required|string|max:100',
            'ijazah_smp' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);
    }

    private function isStudentRegistered(array $validated): bool
    {
        return $this->student->where('nama_lengkap', $validated['nama_lengkap'])
            ->where('tanggal_lahir', $validated['tanggal_lahir'])
            ->where('tahun_lulus_smp', $validated['tahun_lulus_smp'])
            ->exists();
    }

    private function storeIjazah(Request $request): ?string
    {
        try {
            if (!$request->file('ijazah_smp')->isValid()) {
                return null;
            }
            
            return $request->file('ijazah_smp')->store('public/ijazah_smp');
        } catch (\Exception $e) {
            Log::error('Error storing ijazah: ' . $e->getMessage());
            return null;
        }
    }
}
