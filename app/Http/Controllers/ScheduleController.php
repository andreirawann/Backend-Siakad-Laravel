<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ScheduleController extends Controller
{
    //index
    public function index()
    {
        //with pagination
        $schedules = \App\Models\Schedule::paginate(10);
        // $schedules = \App\Models\Schedule::all();
        return view('pages.schedule.index', compact('schedules'));
    }

    // function for generate qrcode input
    public function generateQrCode(Schedule $schedule)
    {
        return view('pages.schedule.generate_qrcode')->with('schedule', $schedule);
    }

    // function for generate qrcode and update code to Schedule
    public function generateQrCodeUpdate(Request $request, Schedule $schedule)
    {

        $request->validate([
            'code' => 'required',
        ]);

        $schedule->update([
            'kode_absensi' => $request->code,
        ]);

        $code = $request->code;

        return view('pages.schedule.show_qrcode', compact('code'))->with('success', 'QrCode berhasil dibuat');

        // $schedule = Schedule::where('id', $request->id)->first();
        // if(!$schedule){
        //     $schedule->update([
        //         'code' => $request->code,
        //     ]);
        //     return view('pages.schedule.show_qrcode', compact('schedule'))->with('success', 'QrCode berhasil dibuat');
        // } else {
        //     return redirect()->route('pages.schedules.index')->with('error', 'QrCode sudah ada');
        // }


    }
}
