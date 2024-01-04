<?php

namespace App\Http\Controllers;

use App\Events\FileSent;
use App\Models\File;
use App\Models\FileTransfer;
use App\Models\Office;
use App\Models\User;
use Illuminate\Http\Request;

class FileTransferController extends Controller
{
    public function transfer()
    {
        $transfers = FileTransfer::where('sent_to', auth()->id())->get();
        return view("transfer", ['transfers' => $transfers]);
    }

    public function store($file_id,Request $request)
    {
        $request->validate([
            'office_id' => 'required',
            'user_id' => 'required'
        ]);

        $data = [
            'sent_by' => auth()->id(),
            'sent_to' => $request->user_id,
            'receiving_office_id' => $request->office_id,
            'sending_office_id' => auth()->user()->office_id,
            'file_id' => $file_id,
        ];

        $transfer = FileTransfer::create($data);
        event(new FileSent($transfer));
        return back()->with('success','File Sent');
    }

    public function send($file_id)
    {
        $file = File::where('id', $file_id)->where('user_id', auth()->id())->first();
        $offices = Office::all();
        if (is_null($file)) {
            return "You don't have file access.";
        }

        $transfers = FileTransfer::where('sent_by', auth()->id())->get();
        return view('send', ['file'=> $file, 'offices' => $offices, 'transfers' => $transfers]);
    }

    public function acknowledge($transfer_id)
    {
        FileTransfer::where('id', $transfer_id)->where('sent_to', auth()->id())->update(['status' => 'acknowledged']);
        return back()->with('success','Document acknowledged');
    }
}
