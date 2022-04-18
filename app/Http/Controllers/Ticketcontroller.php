<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Ticketmassege;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index(){

       
        $allTicket = null;

        if(Auth::guard('admin')->check()){
            $allTicket = Ticket::with('User' , 'Topic')->get();
            
        }else{
        
            $allTicket = Ticket::with('User' , 'Topic')->where('sender',  auth()->user()->id)->get();
        
        }

       
        // return $allTicket;
        // $allTicket = Ticket::with('topic')   ->get();
        // return $allTicket;// dd($data);
       // $ticket = Ticketmassege::all();
    //    auth::admin();
    //    if($Ticket->ticketmassege==)
    //    Ticketmassege::get('allticket');
    //    else
    //    Ticket::with("Ticketmassege")->find('clients');



        return view('clients.Technical_support.index' ,compact('allTicket'));

    }
    public function create()
    {
        
        return view('clients.Technical_support.create');
    }

public function store(Request $request)
{
    // return $request;
    Ticket::create([

        
        // 'titel' => $request->titel,
          #$request->titel,
        'status'=>'Pending',
        'subject' =>$request->subject,
        'sender'=>Auth::user()->id,
        'topic_id' => $request->topic_selected,    
   ]);
//    haiyyyyyy
   return redirect()-> route(  (Auth::guard('admin')->check()?'admin.':'').'ticket.index');
   // DB::commit();
} 

public function show($id){
    
}

// public function massege(Request $request){
    

//
   // DB::rollback();

//    return redirect('/ticket') -> route('ticket.index');

// public function edit($id){
//     $data= Ticket::find($id);


//     $data2 = Ticketmassege::get();

//     return view('clients.Technical support.massege' , compact('data2' ));
// }
}

// public function update(Request $request ,$id ){

//     try {

//     $data=Ticket::find($id);

//     if (!$data)
//     return redirect()->route('clients.app_profile.edit')->with(['error' => 'not found']);

//     // DB::beginTransaction();
//              $data->ticket_id=$request->ticket_id;
//              $data->titel=$request->titel;
//              $data->atatus=$request->atatus;
//              $data->topic=$request->topic;
             

//              $data->save();
//             //  DB::commit();
//             return redirect()-> route('profile.index')->with(['success' => 'ok']);
//             // DB::commit();
//         } catch (\Exception $ex) {
//             // DB::rollback();
//             return $ex;
//             return redirect('/profile') -> route('profile.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
//         }

//             }


//             public function destroy(request $request ,$id ){

//             $id = $request->id;
//             Ticket::find($id)->delete();
//             return redirect('/ticket');
        
//             return redirect('/ticket') ->route('ticket.index');
//         }

            
            

//             public function Dashboard( ){

//                 return view('front.dashboard');

//                 }
//                 }





                // return redirect()-> route('ticket.index');
                // DB::commit();
           
                // return redirect('/ticket') -> route('ticket.index');
            
    
    