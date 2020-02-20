<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB; // Library for query builder

use App\Model\Message;
use App\User;


class MessageController extends Controller
{
    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $sender_id = "2";
        // $receiver_id = "8";
        // $message = "some text some text";

        $sender_id = $request->input('sender_id');
        $receiver_id = $request->input('receiver_id');
        $message = $request->input('message');


        $msg = new Message();

        $msg->sender_id = $sender_id;
        $msg->receiver_id = $receiver_id;
        $msg->text = $message;

        $msg->save();

        return ("Message Sended.");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display conversation between two users.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Conversation(Request $request, $sender_id, $receiver_id )
    {
        //
        // $sender_id = "2";
        // $receiver_id = "8";

        $users_converstion = Message::where('sender_id',$sender_id)->where('receiver_id',$receiver_id)
                        ->orWhere('sender_id',$receiver_id)->where('receiver_id',$sender_id)->get();

        // dd($user);
        return view ('message.message_display')->with([ 'users_converstion'=>$users_converstion, 'sender_id'=>$sender_id, 'receiver_id'=>$receiver_id ]);
    }

    /**
     * Display all contacts for specific user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Contacts(Request $request, $id )
    {
        //
        $contacts = array();
        $sender_contacts = array();
        $receiver_contacts = array();
        $raw_contacts = array();

        $raw_contacts = Message::where('sender_id',$id)->orWhere('receiver_id',$id)->distinct()->get();
        $j=0;
        if (count($raw_contacts) > 0)
        {
            for ($i=0; $i < count($raw_contacts); $i++ )
            {
                $receiver_contacts[$i] = $raw_contacts[$i]->receiver_id;
                $sender_contacts[$j] = $raw_contacts[$j]->sender_id;
                $j += 1;
            }
        }
        else
        {
            // Empty Contact is List
            return ("Your Contact List is Empty....");
        }
        // Marge two arrays into one
        $length = count($receiver_contacts)+count($sender_contacts);
        $j = 0;
        for ($i=0; $i < $length; $i++)
        {
            if ($i<count($receiver_contacts))
            {
                $contacts[$i] = $receiver_contacts[$i];
            }
            else
            {
                $contacts[$i] = $sender_contacts[$j];
                $j +=1 ;
            }
        }
        // Reindexing the array
        $contacts = array_values( array_flip( array_flip( $contacts ) ) );
        // Removing specifc entity
        $key = $id;
        if (($key = array_search($key, $contacts)) !== false) {
            unset($contacts[$key]);
        }
        // Reindexing the array
        $contacts = array_values( array_flip( array_flip( $contacts ) ) );

        if (count($contacts) > 0)
        {
            for ($i=0; $i < count($contacts); $i++ )
            {
                $item = new \stdClass();
                $item = User::where('id',$contacts[$i])->first();
                    
                $items[] = clone $item;
            }
            return view ('student.contact_list')->with(['users'=>$items,'user_id'=>$id]);
        }
        else
        {
            // Empty Contact is List
            return ("Your Contact List is Empty.");
        }
 







        // $contacts = array();
        // $contacts = Message::where('sender_id',$id)->distinct()
        //                 // ->orWhere('receiver_id',$current_user_id)
        //                 ->pluck('receiver_id');

        // if (count($contacts) > 0)
        // {
        //     for ($i=0; $i < count($contacts); $i++ )
        //     {
        //         $item = new \stdClass();
        //         $item = User::where('id',$contacts[$i])->first();
                    
        //         $items[] = clone $item;
        //     }
        //     // return view ('student.contact_list')->with(['users'=>$items,'user_id'=>$id]);
        // }
        // else
        // {
        //     // Empty Contact is List
        //     return ("Your Contact List is Empty.");
        // }
    
    }
}
