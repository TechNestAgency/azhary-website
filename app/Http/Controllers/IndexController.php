<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $response = Http::withOptions(['verify' => false])->get('https://maccaacademy.com/families-apis');
        $data = $response->json();
        return view('index', compact('rooms','data'));
    }
    public function changeAllPassword(Request $request)
    {
        $data = $request->validate([
            'password' => 'required|string|max:255',
        ]);

        $rooms = Room::all();
        foreach ($rooms as $room) {
            $room->update(['password' => $data['password']]);
        }
        session()->flash('success', 'Password Changed for all rooms');
        return redirect()->back();

    }

    public function resetAllRooms()
    {
        $apiToken = 'dop_v1_022aae966ad0607fc06518420b16e0f2399a13f2ecf9fdf64c297765b37109b6';
        $dropletId = '438432296'; // ضع هنا رقم الـ Droplet ID

        Http::withOptions(['verify' => false])->withHeaders([
            'Authorization' => 'Bearer ' . $apiToken,
        ])->post("https://api.digitalocean.com/v2/droplets/{$dropletId}/actions", [
            'type' => 'reboot'
        ]);

        return redirect()->back();
    }

    public function createRoom(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required|string|max:255|unique:rooms,name',
                'password' => 'required|string|max:255',
                'mobile' => 'required',
            ]
        );

        $room_name = strtoupper(str_replace(' ', '', $data['name']));
        $password = $data['password'];
        $room = Room::create([
            'name' => $room_name,
            'password' => $password,
            'mobile' => $data['mobile'],
            'status' => 1,
        ]);
        session()->flash('success', 'Room created successfully');
        return redirect()->back();
    }

    public function enterRoom($room)
    {
        $room_object = Room::where('name', $room)->first();
        return view('enter-room', compact('room','room_object'));
    }

    public function enterRoomPost(Request $request, $room)
    {
        $password = $request->password;

        if (Room::where('name', $room)->where('password', $password)->first()) {
            return redirect('https://e.almajd.link/'.$room);
        } else {
            session()->flash('error', 'Invalid password');
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $room = Room::find($id);
        if($room) {
            $room->delete();
            return response()->json(['message' => 'Room deleted successfully','status'=>'success'], 200);
        } else {
            return response()->json(['message' => 'Room not found','status'=>'error'], 404);
        }
    }

    public function toggleStatus($id)
    {
        $room = Room::find($id);
        if($room) {
            $room->status = !$room->status; // This toggles the status
            $room->save();
            return response()->json(['message' => 'Room status updated successfully'], 200);
        } else {
            return response()->json(['message' => 'Room not found'], 404);
        }
    }

    public function checkRoom(Request $request)
    {
        $password = $request->password;
        $room = $request->room;

        if (Room::where('name', $room)->where('password', $password)->first()) {
            return response()->json(['message' => 'Room found','status'=>'success'], 200);
        } else {
            return response()->json(['message' => 'Room not found','status'=>'error'], 404);
        }

    }

    public function test()
    {
        return response()->json(['message' => 'Test route working','status'=>'success'], 200);
    }

    public function changePassword(Request $request, $room_id)
    {
        $data = $request->validate([
            'password' => 'required|string|max:255',
        ]);

        $room = Room::find($room_id);
        if ($room) {
            $room->update(['password' => $data['password']]);
            return response()->json(['message' => 'Password changed successfully', 'status' => 'success'], 200);
        } else {
            return response()->json(['message' => 'Room not found', 'status' => 'error'], 404);
        }
    }
}
