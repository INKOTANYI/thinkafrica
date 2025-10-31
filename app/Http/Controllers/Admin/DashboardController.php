<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentStatusUpdated;
use App\Mail\ContactMessageStatusUpdated;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');
        $status = $request->get('status');

        $appointments = Appointment::query()
            ->when($q, fn($qq)=> $qq->where(function($w) use($q){
                $w->where('name','like',"%$q%")
                  ->orWhere('email','like',"%$q%")
                  ->orWhere('service','like',"%$q%")
                  ->orWhere('message','like',"%$q%");
            }))
            ->when($status, fn($qq)=> $qq->where('status', $status))
            ->latest()->paginate(10, ['*'], 'ap');

        $messages = ContactMessage::query()
            ->when($q, fn($qq)=> $qq->where(function($w) use($q){
                $w->where('name','like',"%$q%")
                  ->orWhere('email','like',"%$q%")
                  ->orWhere('subject','like',"%$q%")
                  ->orWhere('message','like',"%$q%");
            }))
            ->when($status, fn($qq)=> $qq->where('status', $status))
            ->latest()->paginate(10, ['*'], 'cm');

        $today = now()->toDateString();
        $todayAppointments = Appointment::whereDate('created_at', $today)->count();
        $todayMessages = ContactMessage::whereDate('created_at', $today)->count();
        $totalAppointments = Appointment::count();
        $totalMessages = ContactMessage::count();
        $pendingAppointments = Appointment::where('status','pending')->count();
        $pendingMessages = ContactMessage::where('status','new')->count();

        return view('admin.dashboard', compact(
            'appointments','messages','q','status',
            'todayAppointments','todayMessages','totalAppointments','totalMessages','pendingAppointments','pendingMessages'
        ));
    }

    public function approveAppointment(Request $request, Appointment $appointment)
    {
        $appointment->update([
            'status' => 'approved',
            'admin_reply' => $request->input('reason')
        ]);
        try { Mail::to($appointment->email)->send(new AppointmentStatusUpdated($appointment, 'approved', $request->input('reason'))); } catch (\Throwable $e) {}
        if ($request->expectsJson()) {
            return response()->json([
                'ok' => true,
                'appointment' => $appointment->fresh(),
                'counts' => [
                    'todayAppointments' => Appointment::whereDate('created_at', now())->count(),
                    'todayMessages' => ContactMessage::whereDate('created_at', now())->count(),
                ],
            ]);
        }
        return back()->with('success','Appointment approved');
    }

    public function rejectAppointment(Request $request, Appointment $appointment)
    {
        $appointment->update([
            'status' => 'rejected',
            'admin_reply' => $request->input('reason')
        ]);
        try { Mail::to($appointment->email)->send(new AppointmentStatusUpdated($appointment, 'rejected', $request->input('reason'))); } catch (\Throwable $e) {}
        if ($request->expectsJson()) {
            return response()->json([
                'ok' => true,
                'appointment' => $appointment->fresh(),
                'counts' => [
                    'todayAppointments' => Appointment::whereDate('created_at', now())->count(),
                    'todayMessages' => ContactMessage::whereDate('created_at', now())->count(),
                ],
            ]);
        }
        return back()->with('success','Appointment rejected');
    }

    public function approveMessage(Request $request, ContactMessage $message)
    {
        $message->update([
            'status' => 'approved',
            'admin_reply' => $request->input('reason')
        ]);
        try { Mail::to($message->email)->send(new ContactMessageStatusUpdated($message, 'approved', $request->input('reason'))); } catch (\Throwable $e) {}
        if ($request->expectsJson()) {
            return response()->json([
                'ok' => true,
                'message' => $message->fresh(),
                'counts' => [
                    'todayAppointments' => Appointment::whereDate('created_at', now())->count(),
                    'todayMessages' => ContactMessage::whereDate('created_at', now())->count(),
                ],
            ]);
        }
        return back()->with('success','Message approved');
    }

    public function rejectMessage(Request $request, ContactMessage $message)
    {
        $message->update([
            'status' => 'rejected',
            'admin_reply' => $request->input('reason')
        ]);
        try { Mail::to($message->email)->send(new ContactMessageStatusUpdated($message, 'rejected', $request->input('reason'))); } catch (\Throwable $e) {}
        if ($request->expectsJson()) {
            return response()->json([
                'ok' => true,
                'message' => $message->fresh(),
                'counts' => [
                    'todayAppointments' => Appointment::whereDate('created_at', now())->count(),
                    'todayMessages' => ContactMessage::whereDate('created_at', now())->count(),
                ],
            ]);
        }
        return back()->with('success','Message rejected');
    }

    public function saveAppointmentNote(Request $request, Appointment $appointment)
    {
        $appointment->update(['admin_reply' => $request->input('note')]);
        if ($request->expectsJson()) {
            return response()->json(['ok'=>true,'appointment'=>$appointment->fresh()]);
        }
        return back()->with('success','Appointment note saved');
    }

    public function saveMessageNote(Request $request, ContactMessage $message)
    {
        $message->update(['admin_reply' => $request->input('note')]);
        if ($request->expectsJson()) {
            return response()->json(['ok'=>true,'message'=>$message->fresh()]);
        }
        return back()->with('success','Message note saved');
    }
}
