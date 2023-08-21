<?php

namespace App\Http\Controllers\backend;

use App\Models\GarduInduk;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TablesController extends Controller
{


    public function RekapGarduInduk()
    { {

            $rekap_garduinduk = DB::table('rekap_garduinduk')->paginate(10);

            // return $rekap_garduinduk;
            return view('backend.tables.rekap-garduinduk', ['rekap_garduinduk' => $rekap_garduinduk]);
        }
    }

    public function RekapGarduIndukAdd()
    { {

            return view('backend.tables.rekap-garduinduk-add');
        }
    }
    public function RekapGarduIndukAddProcess(Request $request)

    { {


            DB::table('rekap_garduinduk')->insert([
                'id' => $request->id,
                'apj_id' => $request->apj_id,
                'gardu_induk' => $request->gardu_induk,
                'pmt_recloser' => $request->pmt_recloser,
                'waktu_trip' => $request->waktu_trip,
                'waktu_normal' => $request->waktu_normal,
                'alasan_operasi' => $request->alasan_operasi,
                'indikasi_relay' => $request->indikasi_relay,
                'jenis_gangguan' => $request->jenis_gangguan,
                'fasa' => $request->fasa,
                'ifa' => $request->ifa,
                'ifb' => $request->ifb,
                'ifc' => $request->ifc,
                'ifn' => $request->ifn,
                'beban_sebelum' => $request->beban_sebelum,
                'tegangan_sebelum' => $request->tegangan_sebelum,
                'beban_sesudah' => $request->beban_sesudah,
                'tegangan_sesudah' => $request->tegangan_sesudah,
                'kode_gangguan_keterangan' => $request->kode_gangguan_keterangan,
                'daya_hilang' => $request->daya_hilang,
                'lama_padam' => $request->lama_padam,
                'kwh_hilang' => $request->kwh_hilang,
                'cuaca' => $request->cuaca,
                'no_pole_tiang' => $request->no_pole_tiang,
                'jarak_gangguan' => $request->jarak_gangguan,
                'lokasi_gangguan' => $request->lokasi_gangguan,
                'recovery' => $request->recovery,
                'status' => $request->status,
                'user_update' => $request->user_update,
                'keterangan' => $request->keterangan,
                'last_update' => $request->last_update,
            ]);
            return redirect('rekap-garduinduk')->with('status', 'Rekap Data Gardu Induk Berhasil Ditambahkan!');
        }
    }

    public function RekapGarduIndukEdit($id)
    { {
            $tables = DB::table('rekap_garduinduk')->where('id', $id)->first();

            return view('backend.tables.rekap-garduinduk-edit', compact('tables'));
        }
    }

    public function RekapGarduIndukEditProcess(Request $request, $id)
    { {
            DB::table('rekap_garduinduk')->where('id', $id)->update([
                'apj_id' => $request->apj_id,
                'gardu_induk' => $request->gardu_induk,
                'pmt_recloser' => $request->pmt_recloser,
                'waktu_trip' => $request->waktu_trip,
                'waktu_normal' => $request->waktu_normal,
                'alasan_operasi' => $request->alasan_operasi,
                'indikasi_relay' => $request->indikasi_relay,
                'jenis_gangguan' => $request->jenis_gangguan,
                'fasa' => $request->fasa,
                'ifa' => $request->ifa,
                'ifb' => $request->ifb,
                'ifc' => $request->ifc,
                'ifn' => $request->ifn,
                'beban_sebelum' => $request->beban_sebelum,
                'tegangan_sebelum' => $request->tegangan_sebelum,
                'beban_sesudah' => $request->beban_sesudah,
                'tegangan_sesudah' => $request->tegangan_sesudah,
                'kode_gangguan_keterangan' => $request->kode_gangguan_keterangan,
                'daya_hilang' => $request->daya_hilang,
                'lama_padam' => $request->lama_padam,
                'kwh_hilang' => $request->kwh_hilang,
                'cuaca' => $request->cuaca,
                'no_pole_tiang' => $request->no_pole_tiang,
                'jarak_gangguan' => $request->jarak_gangguan,
                'lokasi_gangguan' => $request->lokasi_gangguan,
                'recovery' => $request->recovery,
                'status' => $request->status,
                'user_update' => $request->user_update,
                'keterangan' => $request->keterangan,
                'last_update' => $request->last_update,
            ]);
            return redirect('rekap-garduinduk')->with('status', 'Rekap Gardu Induk Berhasil Di Update!');
        }
    }

    public function RekapGarduIndukDelete($id)
    { {
            DB::table('rekap_garduinduk')->where('id', $id)->delete();
            return redirect('rekap-garduinduk')->with('status', 'Rekap Gardu Induk Berhasil Di Hapus!');
        }
    }

    public function RekapGarduIndukView($id)
    { {
            $tables = DB::table('rekap_garduinduk')->find($id);

            return view('backend.tables.rekap-garduinduk-view', compact('tables'));
        }
    }


    public function RekapGarduIndukSearch(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $area = $request->area;

        

        return view('backend.tables.rekap-garduinduk', compact('tables'));
    }




    public function RekapanTrafo()
    { {

            return view('backend.tables.rekapan-trafo');
        }
    }

    public function FGTM()
    { {
            return view('backend.tables.fgtm');
        }
    }

    public function EvenGangguan()
    { {
            return view('backend.tables.even&gangguan');
        }
    }

    public function Material()
    { {


            return view('backend.tables.material');
        }
    }

    public function Daftar()
    { {


            return view('backend.tables.daftar');
        }
    }

    public function Keypoint()
    { {
            return view('backend.tables.keypoint');
        }
    }

    public function RekapKeypoint()
    { {
            return view('backend.tables.rekap-keypoint');
        }
    }

    public function Operasi()
    { {
            return view('backend.tables.operasi');
        }
    }

    public function RekapManuver()
    { {
            return view('backend.tables.rekap-manuver');
        }
    }
}
